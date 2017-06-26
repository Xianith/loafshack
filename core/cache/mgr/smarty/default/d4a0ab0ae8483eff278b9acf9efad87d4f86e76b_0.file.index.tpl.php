<?php /* Smarty version 3.1.27, created on 2017-04-27 01:53:26
         compiled from "/srv/web/sites/loafshack.com/public/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19476864759014f1671b104_01655838%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4a0ab0ae8483eff278b9acf9efad87d4f86e76b' => 
    array (
      0 => '/srv/web/sites/loafshack.com/public/manager/templates/default/workspaces/index.tpl',
      1 => 1492653637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19476864759014f1671b104_01655838',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59014f1671f2f4_22347658',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59014f1671f2f4_22347658')) {
function content_59014f1671f2f4_22347658 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19476864759014f1671b104_01655838';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>