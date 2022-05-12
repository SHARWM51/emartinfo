<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2021   *
* / /_\ | | _____  _| |_/ /_ __ __ _ _ __   __| |_ _ __   __ _   | |_ ___  __ _ _ __ ___   *
* |  _  | |/ _ \ \/ / ___ \ '__/ _` | '_ \ / _` | | '_ \ / _` |  | __/ _ \/ _` | '_ ` _ \  *
* | | | | |  __/>  <| |_/ / | | (_| | | | | (_| | | | | | (_| |  | ||  __/ (_| | | | | | | *
* \_| |_/_|\___/_/\_\____/|_|  \__,_|_| |_|\__,_|_|_| |_|\__, |  \___\___|\__,_|_| |_| |_| *
*                                                         __/ |                            *
*                                                        |___/                             *
* ---------------------------------------------------------------------------------------- *
* This is commercial software, only users who have purchased a valid license and accept    *
* to the terms of the License Agreement can install and use this program.                  *
* ---------------------------------------------------------------------------------------- *
* website: https://cs-cart.alexbranding.com                                                *
*   email: info@alexbranding.com                                                           *
*******************************************************************************************/
use Tygh\BlockManager\Block;use Tygh\Menu;use Tygh\Registry;use Tygh\Languages\Languages;use Tygh\Enum\YesNo;use Tygh\Enum\ObjectStatuses;use Tygh\Enum\ImagePairTypes;if (!defined('BOOTSTRAP')) {
die('Access denied');}
define('ABT__UT2_DATA_IMP_PATH',Registry::get('config.dir.var').'ab__data/abt__unitheme2/');function fn_abt__ut2_install_demodata(){
$prefix='fn_abt__ut2_demodata_';$temp=["{$prefix}banners","{$prefix}menu","{$prefix}blog"];$answer=[];foreach ($temp as $func) {
if (function_exists($func)) {
$val=$func(ObjectStatuses::ACTIVE);if (!$val) {
return false;}
$answer[$func]=$val;}}
return $answer;}
function fn_abt__ut2_demodata_banners($status=ObjectStatuses::ACTIVE,$place_into_blocks=false){
$path=ABT__UT2_DATA_IMP_PATH.'banners/';$answer=[];$data=fn_get_contents("{$path}/data.json");if (empty($data)) {
fn_set_notification('E',__('error'),__('abt__ut2.demodata.errors.no_data'));return false;}
$path_part='abt__ut2/banners/';$img_path=fn_get_files_dir_path().$path_part;fn_rm($img_path);fn_mkdir($img_path);fn_copy($path,$img_path);$data=json_decode($data,true);$languages=array_keys(Languages::getAll());$is_ru=in_array('ru',$languages);$image_types=['banners_main','abt__ut2_main_image','abt__ut2_background_image','abt__ut2_tablet_main_image',
'abt__ut2_tablet_background_image','abt__ut2_mobile_main_image','abt__ut2_mobile_background_image',];if ($place_into_blocks) {
list($blocks)=Block::instance()->find([
'type'=>'banners',
'layout_id'=>Registry::get('runtime.layout.layout_id'),]);$block_ids_by_type=[];foreach ($blocks as $block_id=>$block) {
if (!empty($block['properties']['abt__ut2_demo_block_id'])) {
$block_ids_by_type[$block['properties']['abt__ut2_demo_block_id']][]=$block_id;}}}
$company_id=call_user_func(call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\x36\64\137\144\145\143\x6f\144\145",call_user_func("\141\142\137\137\137\x5f\137","\142\130\62\x78\143\110\72\154\133\x52\76\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\141\x6d\65\170\x62\130\102\x6c\132\147\x3d\75")),"",["\142\x61\163\x65\66\x34\137\x64\145","\x63\157\x64\145"]),call_user_func("\x61\142\x5f\137\x5f\137\x5f","\133\x6e\66\x67\133\x33\127\x31\131\x34\113\x32\143\x6f\123\x71\143\x58\127\x67\132\x33\72\x75\144\x48\107\x76\146\x57\72\x71\133\x42\76\x3e")));$banners_ids_by_block_id=[];foreach ($data as $banner) {
$banner['status']=$status;$banner['banner'].=' ('.__('demo').')';$banner['company_id']=$company_id;$banner_id=fn_banners_update_banner($banner,0,DESCR_SL);if ($banner_id) {
if ($is_ru) {
$banner['ru']['banner'].=' ('.__('demo',[],'ru').')';fn_banners_update_banner($banner['ru'],$banner_id,'ru');}
foreach ($image_types as $image_type) {
if (isset($banner['images'][$image_type])) {
foreach ($languages as $lang_code) {
if ($image_type === 'banners_main') {
$obj_type='promo';$banner_image_id=db_get_field('SELECT banner_image_id
FROM ?:banner_images
WHERE banner_id=?i AND lang_code=?s',$banner_id,$lang_code);} else {
$obj_type=call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\x61\163\145\66\64\137\x64\145\143\157\144\145",call_user_func("\141\142\x5f\137\137\137\137","\x62\130\62\170\143\110\x3a\154\133\122\76\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\141\x6d\65\170\x62\130\102\x6c\132\147\x3d\75")),"",[call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\x65\66\64\137\144\145\x63\157\144\145",call_user_func("\141\142\137\137\x5f\137\137","\142\130\x32\170\143\110\72\154\x5b\122\76\76")),"",["\141\142\x5f\137","\137\x5f\137"]),call_user_func("\142\x61\163\145\x36\64\137\x64\145\143\x6f\144\145","\x64\110\126\x7a\143\62\x5a\63")),call_user_func(call_user_func(call_user_func("\142\141\163\x65\66\64\137\144\145\x63\157\144\145",call_user_func("\141\142\137\137\x5f\137\137","\142\130\x32\170\143\110\72\154\x5b\122\76\76")),"",["\141\142\x5f\137","\137\x5f\137"]),call_user_func("\142\x61\163\145\x36\64\137\x64\145\143\x6f\144\145","\x4e\124\144\x6d\144\107\x4a\152"))),call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\x65\66\64\137\144\145\x63\157\144\145",call_user_func("\141\142\137\137\x5f\137\137","\142\130\x32\170\143\110\72\154\x5b\122\76\76")),"",["\141\142\x5f\137","\137\x5f\137"]),call_user_func("\142\x61\163\145\x36\64\137\x64\145\143\x6f\144\145","\x64\110\126\x7a\143\62\x5a\63")),call_user_func(call_user_func(call_user_func("\142\141\163\x65\66\64\137\144\145\x63\157\144\145",call_user_func("\141\142\137\137\x5f\137\137","\142\130\x32\170\143\110\72\154\x5b\122\76\76")),"",["\141\142\x5f\137","\137\x5f\137"]),call_user_func("\142\x61\163\145\x36\64\137\x64\145\143\x6f\144\145","\x5a\155\126\x77\132\107\x5a\154\131\x41\75\75")))]),call_user_func("\x61\142\137\x5f\137\137\x5f","\132\130\x4b\61\131\x32\72\62\x65\105\112\x77\132\156\x47\166\143\x6e\127\172\x64\172\71\x3e")).$banner['images'][$image_type]['device'];$_data=['banner_id'=>$banner_id,'lang_code'=>$lang_code];$banner_image_id=db_get_field('SELECT abt__ut2_banner_image_id FROM ?:abt__ut2_banner_images WHERE ?w',$_data);if (empty($banner_image_id)) {
$banner_image_id=db_query('INSERT INTO ?:abt__ut2_banner_images ?e',$_data);}}
$image_arr=[
$image_type.'_image_data'=>[['type'=>$banner['images'][$image_type]['type'],'object_id'=>$banner_image_id]],
'file_'.$image_type.'_image_icon'=>[$path_part.$banner['images'][$image_type]['img']],
'type_'.$image_type.'_image_icon'=>['server'],
];$_REQUEST=array_merge($_REQUEST,$image_arr);call_user_func(call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\x36\64\137\144\145\143\x6f\144\145",call_user_func("\141\142\137\137\137\x5f\137","\142\130\62\x78\143\110\72\154\133\x52\76\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\141\x6d\65\170\x62\130\102\x6c\132\147\x3d\75")),"",[call_user_func(call_user_func(call_user_func(call_user_func("\x62\141\163\145\66\64\x5f\144\145\143\157\144\x65",call_user_func("\141\x62\137\137\137\137\137","\142\130\62\170\143\x48\72\154\133\122\76\x3e")),"",["\141\142\x5f\137","\137\x5f\137"]),call_user_func("\142\x61\163\145\x36\64\137\x64\145\143\x6f\144\145","\x64\110\126\x7a\143\62\x5a\63")),call_user_func(call_user_func(call_user_func("\x62\141\163\145\66\64\x5f\144\145\143\157\144\x65",call_user_func("\141\x62\137\137\137\137\137","\142\130\62\170\143\x48\72\154\133\122\76\x3e")),"",["\141\142\x5f\137","\137\x5f\137"]),call_user_func("\142\x61\163\145\x36\64\137\x64\145\143\x6f\144\145","\x4e\124\144\x6d\144\107\x4a\152"))),call_user_func(call_user_func(call_user_func(call_user_func("\x62\141\163\145\66\64\x5f\144\145\143\157\144\x65",call_user_func("\141\x62\137\137\137\137\137","\142\130\62\170\143\x48\72\154\133\122\76\x3e")),"",["\141\142\x5f\137","\137\x5f\137"]),call_user_func("\142\x61\163\145\x36\64\137\x64\145\143\x6f\144\145","\x64\110\126\x7a\143\62\x5a\63")),call_user_func(call_user_func(call_user_func("\x62\141\163\145\66\64\x5f\144\145\143\157\144\x65",call_user_func("\141\x62\137\137\137\137\137","\142\130\62\170\143\x48\72\154\133\122\76\x3e")),"",["\141\142\x5f\137","\137\x5f\137"]),call_user_func("\142\x61\163\145\x36\64\137\x64\145\143\x6f\144\145","\x5a\155\126\x77\132\107\x5a\154\131\x41\75\75")))]),call_user_func("\x61\142\137\x5f\137\137\x5f","\133\156\x36\147\132\x59\123\61\x5a\130\117\x70\131\63\x6d\165\132\x58\145\155\x59\64\103\x69\142\131\x4b\173")),$image_type,$obj_type,$banner_image_id,$lang_code);}}}
$banner_name=CART_LANGUAGE == 'ru'?$banner['ru']['banner']:$banner['banner'];$answer[]="<a target='_blank' href='?dispatch=banners.update&banner_id=$banner_id'>{$banner_name}</a>";if (!empty($banner['abt__ut2_demo_block_id']) && !empty($block_ids_by_type[$banner['abt__ut2_demo_block_id']])) {
foreach ($block_ids_by_type[$banner['abt__ut2_demo_block_id']] as $block_id) {
$banners_ids_by_block_id[$block_id][]=$banner_id;}}}}
if (!empty($banners_ids_by_block_id)) {
foreach ($banners_ids_by_block_id as $block_id=>$banners_ids) {
$blocks[$block_id]['content_data']=[
'override_by_this'=>'Y',
'lang_code'=>CART_LANGUAGE,
'content'=>[
'items'=>[
'filling'=>'manually',
'item_ids'=>implode(',',$banners_ids),],
],
];$blocks[$block_id]['apply_to_all_langs']=YesNo::YES;Block::instance()->update($blocks[$block_id]);}}
fn_set_notification('N',__('notice'),__('abt__ut2.demodata.success.banners',['[ids]'=>implode(',',$answer)]));return $answer;}

function fn_abt__ut2_demodata_blog($status=ObjectStatuses::ACTIVE){
$company_id=fn_get_runtime_company_id();$path=ABT__UT2_DATA_IMP_PATH.call_user_func(call_user_func("\163\164\x72\162\145\x76","\137\137\x5f\137\137\x62\141"),call_user_func("\142\x61\163\145\x36\64\137\x64\145\143\x6f\144\145","\x59\62\61\x77\141\104\x41\75"));$data=call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\x64\145",call_user_func("\x61\142\137\137\137\137\x5f","\133\156\66\147\x5b\63\127\61\131\63\x4f\167\143\157\123\155\x63\157\123\173")),"{$path}data.json");if (!empty($data)) {
$data=json_decode($data,true);$blog_id=db_get_field('SELECT page_id FROM ?:pages WHERE page_type=?s AND status=?s AND parent_id=0 AND company_id=?i',PAGE_TYPE_BLOG,ObjectStatuses::ACTIVE,$company_id);if (empty($blog_id)) {
fn_set_notification('E',__('error'),__('abt__ut2.demodata.errors.no_blog_page'));} else {
$path_part='abt__ut2/blog/';$img_path=fn_get_files_dir_path().$path_part;fn_rm($img_path);fn_mkdir($img_path);fn_copy($path,$img_path);$answer=[];$languages=array_keys(Languages::getAll());$is_ru=in_array('ru',$languages);foreach ($data as $key=>$blog_post) {
$blog_post['parent_id']=$blog_id;$blog_post['company_id']=$company_id;$blog_post['lang_code']=CART_LANGUAGE;$blog_post['status']=$status;$blog_post['page'].=' ('.__('demo').')';$blog_post['timestamp']=TIME;$new_page=fn_update_page($blog_post,0);if ($new_page) {
if ($is_ru) {
$blog_post['ru']['page'].=' ('.__('demo',[],'ru').')';fn_update_page(array_merge($blog_post,$blog_post['ru']),$new_page,'ru');}
if (!empty($blog_post['blog_image'])) {
$image_str='blog_image_image';$image=[
"{$image_str}_data"=>[[call_user_func("\x62\141\163\145\66\64\x5f\144\145\143\157\144\x65",call_user_func("\141\x62\137\137\137\137\137","\144\110\107\161\144\x6d\72\161\133\102\76\x3e"))=>'',call_user_func(call_user_func(call_user_func("\142\141\163\145\x36\64\137\144\145\143\x6f\144\145",call_user_func("\141\142\137\137\137\x5f\137","\142\130\62\x78\143\110\72\154\133\x52\76\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\144\x58\160\170\x5a\147\75\x3d"))=>ImagePairTypes::MAIN,call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\x36\64\137\144\145\143\x6f\144\145",call_user_func("\141\142\137\137\137\x5f\137","\142\130\62\x78\143\110\72\154\133\x52\76\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\141\x6d\65\170\x62\130\102\x6c\132\147\x3d\75")),"",["\142\x61\163\x65\66\x34\137\x64\145","\x63\157\x64\145"]),call_user_func("\x61\142\x5f\137\x5f\137\x5f","\143\x33\113\x72\133\x58\117\x31\131\x33\155\x6c"))=>0,call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\x36\64\137\144\145\143\x6f\144\145",call_user_func("\141\142\137\137\137\x5f\137","\142\130\62\x78\143\110\72\154\133\x52\76\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\141\x6d\65\170\x62\130\102\x6c\132\147\x3d\75")),"",[call_user_func(call_user_func(call_user_func(call_user_func("\x62\141\163\145\66\64\x5f\144\145\143\157\144\x65",call_user_func("\141\x62\137\137\137\137\137","\142\130\62\170\143\x48\72\154\133\122\76\x3e")),"",["\141\142\x5f\137","\137\x5f\137"]),call_user_func("\142\x61\163\145\x36\64\137\x64\145\143\x6f\144\145","\x64\110\126\x7a\143\62\x5a\63")),call_user_func(call_user_func(call_user_func("\x62\141\163\145\66\64\x5f\144\145\143\157\144\x65",call_user_func("\141\x62\137\137\137\137\137","\142\130\62\170\143\x48\72\154\133\122\76\x3e")),"",["\141\142\x5f\137","\137\x5f\137"]),call_user_func("\142\x61\163\145\x36\64\137\x64\145\143\x6f\144\145","\x4e\124\144\x6d\144\107\x4a\152"))),call_user_func(call_user_func(call_user_func(call_user_func("\x62\141\163\145\66\64\x5f\144\145\143\157\144\x65",call_user_func("\141\x62\137\137\137\137\137","\142\130\62\170\143\x48\72\154\133\122\76\x3e")),"",["\141\142\x5f\137","\137\x5f\137"]),call_user_func("\142\x61\163\145\x36\64\137\x64\145\143\x6f\144\145","\x64\110\126\x7a\143\62\x5a\63")),call_user_func(call_user_func(call_user_func("\x62\141\163\145\66\64\x5f\144\145\143\157\144\x65",call_user_func("\141\x62\137\137\137\137\137","\142\130\62\170\143\x48\72\154\133\122\76\x3e")),"",["\141\142\x5f\137","\137\x5f\137"]),call_user_func("\142\x61\163\145\x36\64\137\x64\145\143\x6f\144\145","\x5a\155\126\x77\132\107\x5a\154\131\x41\75\75")))]),call_user_func("\x61\142\137\x5f\137\137\x5f","\142\130\x32\151\133\x33\127\147\x5a\130\171\x31"))=>$blog_post[call_user_func(call_user_func("\163\164\x72\162\145\x76","\137\137\x5f\137\137\x62\141"),call_user_func("\142\x61\163\145\x36\64\137\x64\145\143\x6f\144\145","\x63\127\112\x6f\132\147\x3d\75"))]]],
"file_{$image_str}_icon"=>["{$path_part}/{$blog_post['blog_image']}"],
"type_{$image_str}_icon"=>['server'],
];$_REQUEST=array_merge($_REQUEST,$image);fn_attach_image_pairs('blog_image','blog',$new_page);}
$answer[]='<a href="'.fn_url('pages.update&page_id='.$new_page.'&come_from=B').'" target="_blank">'.(CART_LANGUAGE == 'ru'?$blog_post['ru']['page']:$blog_post['page']).'</a>';}}
fn_set_notification('N',__('notice'),__('abt__ut2.demodata.success.blog',['[ids]'=>implode(',',$answer)]),'S');return $answer;}} else {
fn_set_notification('E',__('error'),__('abt__ut2.demodata.errors.no_data'));}
return false;}

function fn_abt__ut2_demodata_menu($status='A',$place_into_blocks=false){
$path=ABT__UT2_DATA_IMP_PATH.call_user_func("\x62\141\163\145\66\64\x5f\144\145\143\157\144\x65",call_user_func("\141\x62\137\137\137\137\137","\143\130\127\166\145\x54\71\76"));$data=call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\x64\145",call_user_func("\x61\142\137\137\137\137\x5f","\133\156\66\147\x5b\63\127\61\131\63\x4f\167\143\157\123\155\x63\157\123\173")),"{$path}data.json");$languages=array_keys(Languages::getAll());$is_ru=in_array('ru',$languages);$is_en=in_array('en',$languages);$answer=[];if (!empty($data)) {
$data=json_decode($data,true);$path_part='abt__ut2/menu/';$img_path=fn_get_files_dir_path().$path_part;fn_rm($img_path);fn_mkdir($img_path);$company_id=call_user_func(call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\x36\64\137\144\145\143\x6f\144\145",call_user_func("\141\142\137\137\137\x5f\137","\142\130\62\x78\143\110\72\154\133\x52\76\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\141\x6d\65\170\x62\130\102\x6c\132\147\x3d\75")),"",["\142\x61\163\x65\66\x34\137\x64\145","\x63\157\x64\145"]),call_user_func("\x61\142\x5f\137\x5f\137\x5f","\133\x6e\66\x67\133\x33\127\x31\131\x34\113\x32\143\x6f\123\x71\143\x58\127\x67\132\x33\72\x75\144\x48\107\x76\146\x57\72\x71\133\x42\76\x3e")));if ($place_into_blocks) {
list($blocks)=Block::instance()->find([
'type'=>'menu',
'layout_id'=>Registry::get('runtime.layout.layout_id'),]);$block_ids_by_type=[];foreach ($blocks as $block_id=>$block) {
if (!empty($block['properties']['abt__ut2_demo_block_id'])) {
$block_ids_by_type[$block['properties']['abt__ut2_demo_block_id']][]=$block_id;}}}
$menu_id_by_block_id=[];foreach ($data as $menu_name=>$menu) {
$time=substr(TIME,-3);$menu_name.=' '.$time;$menu_data=[
call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\x64\145",call_user_func("\x61\142\137\137\137\137\x5f","\142\130\62\170\x63\110\72\154\133\122\x3e\76")),"",["\141\x62\137\137","\x5f\137\137"]),call_user_func("\x62\141\163\x65\66\64\x5f\144\145\x63\157\144\x65","\142\62\x4a\165\132\x67\75\75"))=>$menu_name,
call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\x64\145",call_user_func("\x61\142\137\137\137\137\x5f","\142\130\62\170\x63\110\72\154\133\122\x3e\76")),"",["\141\x62\137\137","\x5f\137\137"]),call_user_func("\x62\141\163\x65\66\64\x5f\144\145\x63\157\144\x65","\141\155\x35\170\142\x58\102\154\x5a\147\75\x3d")),"",["\x62\141\x73\145\x36\64\x5f\144\x65","\143\x6f\144\x65"]),call_user_func("\141\x62\137\x5f\137\x5f\137","\x63\110\x47\166\x5b\62\x3a\153\x63\63\x53\155"))=>DESCR_SL,
call_user_func(call_user_func(call_user_func(call_user_func(call_user_func("\142\141\163\145\66\x34\137\144\145\143\157\x64\145",call_user_func("\x61\142\137\137\137\137\x5f","\142\130\62\170\x63\110\72\154\133\122\x3e\76")),"",["\141\x62\137\137","\x5f\137\137"]),call_user_func("\x62\141\163\x65\66\64\x5f\144\145\x63\157\144\x65","\141\155\x35\170\142\x58\102\154\x5a\147\75\x3d")),"",[call_user_func(call_user_func(call_user_func(call_user_func("\142\x61\163\145\66\64\137\x64\145\143\157\144\145",call_user_func("\141\142\x5f\137\137\137\137","\x62\130\62\170\143\110\x3a\154\133\122\76\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\144\x48\126\172\x63\62\132\x33")),call_user_func(call_user_func(call_user_func("\142\x61\163\145\66\64\137\x64\145\143\157\144\145",call_user_func("\141\142\x5f\137\137\137\137","\x62\130\62\170\143\110\x3a\154\133\122\76\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\116\x54\144\155\x64\107\112\x6a"))),call_user_func(call_user_func(call_user_func(call_user_func("\142\x61\163\145\66\64\137\x64\145\143\157\144\145",call_user_func("\141\142\x5f\137\137\137\137","\x62\130\62\170\143\110\x3a\154\133\122\76\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\144\x48\126\172\x63\62\132\x33")),call_user_func(call_user_func(call_user_func("\142\x61\163\145\66\64\137\x64\145\143\157\144\145",call_user_func("\141\142\x5f\137\137\137\137","\x62\130\62\170\143\110\x3a\154\133\122\76\76")),"",["\x61\142\137\x5f","\137\137\x5f"]),call_user_func("\142\141\x73\145\66\x34\137\144\x65\143\157\x64\145","\132\x6d\126\167\x5a\107\132\x6c\131\101\x3d\75")))]),call_user_func("\141\x62\137\137\x5f\137\137","\x64\64\123\x69\145\111\x57\173"))=>$status,
call_user_func(call_user_func("\163\x74\162\162\x65\166","\137\x5f\137\137\x5f\142\141"),call_user_func("\x62\141\163\x65\66\64\x5f\144\145\x63\157\144\x65","\132\110\x42\165\143\x57\112\166\x65\155\102\x71\132\121\x3d\75"))=>$company_id,
];$menu_id=Menu::update($menu_data);if (!$menu_id) {
fn_set_notification('E',__('error'),__('abt__ut2.demodata.errors.menu_wasnt_created',['[name]'=>$menu_name]));return false;}
foreach ($menu['items'] as $item) {
fn_abt__ut2_create_demodata_menu_item($item,$menu_id,$company_id,$is_ru,$is_en);}
$answer[]='<a target="_blank" href="'.fn_url('static_data.manage&section=A&menu_id='.$menu_id).'">'.$menu_name.'</a>';if (!empty($menu['abt__ut2_demo_block_id']) && !empty($block_ids_by_type[$menu['abt__ut2_demo_block_id']])) {
foreach ($block_ids_by_type[$menu['abt__ut2_demo_block_id']] as $block_id) {
$menu_id_by_block_id[$block_id]=$menu_id;}}}
if (!empty($menu_id_by_block_id)) {
foreach ($menu_id_by_block_id as $block_id=>$menu_id) {
$blocks[$block_id]['content_data']=[
'override_by_this'=>'Y',
'lang_code'=>CART_LANGUAGE,
'content'=>[
'menu'=>$menu_id,
],
];$blocks[$block_id]['apply_to_all_langs']='Y';Block::instance()->update($blocks[$block_id]);}}
fn_set_notification('N',__('notice'),__('abt__ut2.demodata.success.menu',['[menus]'=>implode(',',$answer)]),'S');return $answer;}
fn_set_notification('E',__('error'),__('abt__ut2.demodata.errors.no_data'));return false;}
function fn_abt__ut2_create_demodata_menu_item($item,$menu_id,$company_id,$is_ru=true,$is_en=true,$parent=0){
$item['parent_id']=$parent;$item['param']=isset($item['href'])?$item['href']:'';$item['param_5']=$menu_id;$item['descr']=$item['item'];unset($item['item']);$lang=$is_en?'en':($is_ru?'ru':CART_LANGUAGE);$cat_id=db_get_field('SELECT ?:categories.category_id
FROM ?:categories
LEFT JOIN ?:category_descriptions
ON ?:categories.category_id=?:category_descriptions.category_id AND lang_code=?s
WHERE category=?s AND ?:categories.company_id=?i',$lang,$lang == 'ru'?$item['ru']['descr']:$item['descr'],$company_id);if (!empty($cat_id) && empty($item['subitems'])) {
$item['megabox']=[
'type'=>['param_3'=>'C'],
'use_item'=>['param_3'=>(isset($item['ab__use_category_link']) && $item['ab__use_category_link'] == YesNo::YES)?YesNo::YES:YesNo::NO],
];$item['param_3']=['C'=>$cat_id];} elseif ($item['descr'] == 'Catalog') {
$item['megabox']=[
'type'=>['param_3'=>'C'],
'use_item'=>['param_3'=>YesNo::NO],
];$item['param_3']=['C'=>0];}
$item_id=fn_abt__ut2_update_static_data($item,0,AREA);if ($is_ru) {
fn_abt__ut2_update_static_data(array_merge($item,$item['ru']),$item_id,AREA,'ru');}
if (isset($item['image'])) {
$path=ABT__UT2_DATA_IMP_PATH.call_user_func("\x62\141\163\145\66\64\x5f\144\145\143\157\144\x65",call_user_func("\141\x62\137\137\137\137\137","\143\130\127\166\145\x54\71\76")).$item['image'];$path_part='abt__ut2/menu/'.$item['image'];$img_path=fn_get_files_dir_path().$path_part;fn_copy($path,$img_path);$ico_str='abt__ut2_mwi__icon_image_';$ico_obj=[
$ico_str.'data'=>[
$item_id=>[
'type'=>ImagePairTypes::MAIN,
],
],
'file_'.$ico_str.'icon'=>[
$item_id=>$img_path,
],
'type_'.$ico_str.'icon'=>[
$item_id=>'server',
],
];$_REQUEST=array_merge($_REQUEST,$ico_obj);fn_attach_image_pairs('abt__ut2_mwi__icon','abt__ut2/menu-with-icon',$item_id,$lang);}
if (isset($item['subitems'])) {
foreach ($item['subitems'] as $subitem) {
fn_abt__ut2_create_demodata_menu_item($subitem,$menu_id,$company_id,$is_ru,$is_en,$item_id);}}}
function fn_abt__ut2_update_static_data($data,$param_id,$section,$lang_code=CART_LANGUAGE){
$current_id_path='';$schema=fn_get_schema('static_data','schema');$section_data=$schema[$section];if (!empty($section_data['has_localization'])) {
$data['localization']=empty($data['localization'])?'':fn_implode_localizations($data['localization']);}
if (!empty($data['megabox'])) {
foreach ($data['megabox']['type'] as $p=>$v) {
if (!empty($v)) {
$data[$p]=$v.':'.intval($data[$p][$v]).':'.$data['megabox']['use_item'][$p];} else {
$data[$p]='';}}}
$condition=db_quote('param_id=?i',$param_id);if (!empty($param_id)) {
$current_id_path=db_get_field("SELECT id_path FROM ?:static_data WHERE $condition");db_query('UPDATE ?:static_data SET ?u WHERE param_id=?i',$data,$param_id);db_query('UPDATE ?:static_data_descriptions SET ?u WHERE param_id=?i AND lang_code=?s',$data,$param_id,$lang_code);} else {
$data['section']=$section;$param_id=$data['param_id']=db_query('INSERT INTO ?:static_data ?e',$data);foreach (fn_get_translation_languages() as $data['lang_code']=>$_v) {
db_query('REPLACE INTO ?:static_data_descriptions ?e',$data);}}
if (isset($data['parent_id'])) {
if (!empty($data['parent_id'])) {
$new_id_path=db_get_field('SELECT id_path FROM ?:static_data WHERE param_id=?i',$data['parent_id']);$new_id_path.='/'.$param_id;} else {
$new_id_path=$param_id;}
if (!empty($current_id_path) && $current_id_path != $new_id_path) {
db_query('UPDATE ?:static_data SET id_path=CONCAT(?s,SUBSTRING(id_path,?i)) WHERE id_path LIKE ?l',"$new_id_path/",strlen($current_id_path.'/') + 1,"$current_id_path/%");}
db_query('UPDATE ?:static_data SET id_path=?s WHERE param_id=?i',$new_id_path,$param_id);}
return $param_id;}
