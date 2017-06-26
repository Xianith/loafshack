<?php /* Smarty version 3.1.27, created on 2017-04-20 02:34:21
         compiled from "/srv/web/sites/loafshack.com/public/manager/templates/default/element/plugin/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:101737915258f81e2d031f39_28969718%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f67255b50a52ecb616b06dc588dfd198630adb8' => 
    array (
      0 => '/srv/web/sites/loafshack.com/public/manager/templates/default/element/plugin/create.tpl',
      1 => 1492653828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101737915258f81e2d031f39_28969718',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f81e2d033072_73497072',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f81e2d033072_73497072')) {
function content_58f81e2d033072_73497072 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '101737915258f81e2d031f39_28969718';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>