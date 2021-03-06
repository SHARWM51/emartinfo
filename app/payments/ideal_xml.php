<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

/*
Status codes:
190 - Payment success
490 - Payment failure
491 - Validation error
492 - Technical error
690 - Payment rejected
790 - Waiting for user input
791 - Waiting for processor
792 - Waiting on consumer action (e.g.: initiate money transfer)
793 - Payment on hold (e.g. waiting for sufficient balance)
890 - Cancelled by consumer
891 - Cancelled by merchant
*/

if (defined('PAYMENT_NOTIFICATION')) {
    if ($mode === 'notify') {
        $order_id = $_REQUEST['brq_invoicenumber'];
        $order_info = fn_get_order_info($order_id);
        $processor_data = fn_get_payment_method_data($order_info['payment_id']);

        $_REQUEST['brq_websitekey'] = $processor_data['processor_params']['merchant_id'];

        $expected_signature = fn_buckaroo_calculate_signature($_REQUEST, $processor_data['processor_params']['merchant_key']);
        if ($_REQUEST['brq_signature'] !== $expected_signature) {
            die('Access denied');
        }

        $pp_response = [
            'transaction_id' => $_REQUEST['brq_transactions'],
            'reason_text'    => urldecode($_REQUEST['brq_statusmessage']),
        ];

        if (in_array($_REQUEST['brq_statuscode'], [190])) {
            $pp_response['order_status'] = 'P';
        } elseif (in_array($_REQUEST['brq_statuscode'], [791, 492])) {
            $pp_response['order_status'] = 'O'; // still waiting for the response
        } else {
            $pp_response['order_status'] = 'F';
        }

        fn_finish_payment($order_id, $pp_response);

        $route = $order_info['repaid']
            ? 'repay'
            : 'route';

        fn_order_placement_routines($route, $order_id);
    }

    return [CONTROLLER_STATUS_NO_CONTENT];
}

/** @var int $order_id **/
/** @var array $order_info **/
/** @var array $processor_data **/

$currency_coefficient = Registry::get('currencies.' . CART_SECONDARY_CURRENCY . '.coefficient');
$_order_total = !empty($currency_coefficient) ? $order_info['total'] / floatval($currency_coefficient) : $order_info['total'];
$return_url = fn_url('payment_notification.notify?payment=ideal_xml', AREA, 'current');

/** @var \Tygh\Web\Session $session */
$session = Tygh::$app['session'];
$return_url = fn_link_attach($return_url, $session->getName() . '=' . $session->getID());

$params = [
    'brq_websitekey'    => $processor_data['processor_params']['merchant_id'],
    'brq_amount'        => $_order_total,
    'brq_culture'       => CART_LANGUAGE,
    'brq_currency'      => CART_SECONDARY_CURRENCY,
    'brq_invoicenumber' => $order_id,
    'brq_description'   => $processor_data['processor_params']['description'],
    'brq_return'        => $return_url,
    'brq_returnreject'  => $return_url,
    'brq_returnerror'   => $return_url,
    'brq_returncancel'  => $return_url,
];

$params['brq_signature'] = fn_buckaroo_calculate_signature($params, $processor_data['processor_params']['merchant_key']);

$post_url = empty($processor_data['processor_params']['test'])
    ? 'https://checkout.buckaroo.nl/html/'
    : 'https://testcheckout.buckaroo.nl/html/';

fn_create_payment_form($post_url, $params, 'Buckaroo server', false);

function fn_buckaroo_calculate_signature(array $params, $secret_key)
{
    $params = array_filter($params, function($param_name) {
        return strncmp($param_name, 'brq_', 4) === 0
            && $param_name !== 'brq_signature';
    }, ARRAY_FILTER_USE_KEY);

    // sort the array
    $sortable_array = fn_buckaroo_sort($params);

    // turn into string and add the secret key to the end
    $signature_string = '';
    foreach ($sortable_array as $key => $value) {
        $value = urldecode($value);
        $signature_string .= $key . '=' . $value;
    }
    $signature_string .= $secret_key;

    // return the SHA1 encoded string for comparison
    $signature = sha1($signature_string);

    return $signature;
}

function fn_buckaroo_sort(array $array)
{
    $array_to_sort = array();
    $orig_array = array();
    foreach ($array as $key => $value) {
        $array_to_sort[strtolower($key)] = $value;
        // store the original value in an array
        $orig_array[strtolower($key)] = $key;
    }

    ksort($array_to_sort);

    $sorted_array = array();
    foreach ($array_to_sort as $key => $value) {
        // switch the lowercase keys back to their originals
        $key = $orig_array[$key];
        $sorted_array[$key] = $value;
    }

    return $sorted_array;
}
