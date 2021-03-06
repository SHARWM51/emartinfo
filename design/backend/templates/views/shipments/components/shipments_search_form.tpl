<div class="sidebar-row">
    <h6>{__("admin_search_title")}</h6>

<form action="{""|fn_url}" name="shipments_search_form" method="get">

{if $smarty.request.redirect_url}
<input type="hidden" name="redirect_url" value="{$smarty.request.redirect_url}" />
{/if}
{if $selected_section != ""}
<input type="hidden" id="selected_section" name="selected_section" value="{$selected_section}" />
{/if}

{$extra nofilter}

{capture name="simple_search"}
<div class="sidebar-field">
    <label for="elm_cname">{__("customer")}:</label>
    <div class="break">
        <input type="text" name="cname" id="elm_cname" value="{$search.cname}" size="30"/>
    </div>
</div>

<div class="sidebar-field">
    <label for="elm_order_id">{__("order_id")}:</label>
    <input type="text" name="order_id" id="elm_order_id" value="{$search.order_id}" size="15"/>
</div>

<div class="sidebar-field">
    <label for="elm_status">{__("status")}:</label>
    <select name="status" id="status">
        <option value="">--</option>
        {foreach from=$shipment_statuses key="status" item="name"}
        <option value="{$status}" {if $search.status == $status}selected="selected"{/if}>{$name}</option>
        {/foreach}
    </select>

</div>
{/capture}

{capture name="advanced_search"}

<div class="group form-horizontal">
<div class="control-group">
    <label class="control-label" for="elm_company">{__("company")}</label>
    <div class="controls">
        <input type="text" name="company" id="elm_company" value="{$search.company}" size="10"/>
    </div>
</div>
</div>

<div class="group form-horizontal">
    <div class="control-group">
        <label class="control-label">{__("shipment_date")}:</label>
        <div class="controls">
            {include file="common/period_selector.tpl" period=$search.shipment_period form_name="shipments_search_form" prefix="shipment_"}
        </div>
    </div>

    <div class="control-group form-horizontal">
        <label class="control-label">{__("order_date")}:</label>
        <div class="controls">
            {include file="common/period_selector.tpl" period=$search.order_period form_name="shipments_search_form" prefix="order_"}
        </div>
    </div>
</div>

<div class="group form-horizontal">
<div class="control-group">
    <label class="control-label">{__("shipped_products")}:</label>
    <div class="controls">
        {include file="common/products_to_search.tpl"}
    </div>
</div>
</div>

{hook name="shipments:search_form"}
{/hook}
{/capture}

{include file="common/advanced_search.tpl" advanced_search=$smarty.capture.advanced_search simple_search=$smarty.capture.simple_search dispatch=$dispatch view_type="shipments"}
</form>

</div>
