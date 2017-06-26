<?php /* Smarty version 3.1.27, created on 2017-05-03 22:38:48
         compiled from "/srv/web/sites/loafshack.com/public/manager/templates/default/element/snippet/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:313732590590a5bf8e69ee5_28376751%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35e261a52267bb985b4e3cae219ed99735c7f4a0' => 
    array (
      0 => '/srv/web/sites/loafshack.com/public/manager/templates/default/element/snippet/create.tpl',
      1 => 1492653827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313732590590a5bf8e69ee5_28376751',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_590a5bf8e6d256_18122873',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_590a5bf8e6d256_18122873')) {
function content_590a5bf8e6d256_18122873 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '313732590590a5bf8e69ee5_28376751';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>