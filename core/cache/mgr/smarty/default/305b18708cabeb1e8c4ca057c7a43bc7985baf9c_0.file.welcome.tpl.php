<?php /* Smarty version 3.1.27, created on 2017-04-20 02:30:43
         compiled from "/srv/web/sites/loafshack.com/public/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:150255335058f81d538cfc58_57129906%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '305b18708cabeb1e8c4ca057c7a43bc7985baf9c' => 
    array (
      0 => '/srv/web/sites/loafshack.com/public/manager/templates/default/welcome.tpl',
      1 => 1492653637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150255335058f81d538cfc58_57129906',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f81d538d1425_02306919',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f81d538d1425_02306919')) {
function content_58f81d538d1425_02306919 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '150255335058f81d538cfc58_57129906';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>