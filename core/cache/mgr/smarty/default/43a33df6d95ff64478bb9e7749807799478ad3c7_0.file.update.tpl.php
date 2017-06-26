<?php /* Smarty version 3.1.27, created on 2017-05-31 14:12:05
         compiled from "/srv/web/sites/loafshack.com/public/manager/templates/default/element/plugin/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:144979992592ecf354764e8_82929791%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43a33df6d95ff64478bb9e7749807799478ad3c7' => 
    array (
      0 => '/srv/web/sites/loafshack.com/public/manager/templates/default/element/plugin/update.tpl',
      1 => 1492653827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144979992592ecf354764e8_82929791',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_592ecf354794b7_68363841',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592ecf354794b7_68363841')) {
function content_592ecf354794b7_68363841 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '144979992592ecf354764e8_82929791';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>