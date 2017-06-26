<?php /* Smarty version 3.1.27, created on 2017-05-30 15:26:51
         compiled from "/srv/web/sites/loafshack.com/public/manager/templates/default/error.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:933519166592d8f3bdd4797_34393090%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ff291eecc580235addd135b9770bcfffa0b67b2' => 
    array (
      0 => '/srv/web/sites/loafshack.com/public/manager/templates/default/error.tpl',
      1 => 1492653812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '933519166592d8f3bdd4797_34393090',
  'variables' => 
  array (
    '_e' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_592d8f3bdee317_72279904',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592d8f3bdee317_72279904')) {
function content_592d8f3bdee317_72279904 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '933519166592d8f3bdd4797_34393090';
?>
<div class="modx_error">
    <h2><i class="icon icon-exclamation-triangle"></i> An error occurred...</h2>

    <div class="error_container<?php if (count($_smarty_tpl->tpl_vars['_e']->value['errors']) > 0) {?> multiple<?php }?>">
        <p><?php echo $_smarty_tpl->tpl_vars['_e']->value['message'];?>
</p>

        <?php if (count($_smarty_tpl->tpl_vars['_e']->value['errors']) > 0) {?>
        <p>&nbsp;</p>
        <p><strong>Errors:</strong></p>
        <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['_e']->value['errors'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
$foreach_error_Sav = $_smarty_tpl->tpl_vars['error'];
?>
            <li><i class="icon icon-angle-right"></i> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
        <?php
$_smarty_tpl->tpl_vars['error'] = $foreach_error_Sav;
}
?>
        </ul>
        <?php }?>
    </div>
</div><?php }
}
?>