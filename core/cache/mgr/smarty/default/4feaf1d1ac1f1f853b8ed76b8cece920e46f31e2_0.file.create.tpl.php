<?php /* Smarty version 3.1.27, created on 2017-04-27 01:52:27
         compiled from "/srv/web/sites/loafshack.com/public/manager/templates/default/resource/symlink/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:98670339459014edb3b3ff2_95524707%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4feaf1d1ac1f1f853b8ed76b8cece920e46f31e2' => 
    array (
      0 => '/srv/web/sites/loafshack.com/public/manager/templates/default/resource/symlink/create.tpl',
      1 => 1492653640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98670339459014edb3b3ff2_95524707',
  'variables' => 
  array (
    'tvOutput' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59014edb3bd354_06544088',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59014edb3bd354_06544088')) {
function content_59014edb3bd354_06544088 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '98670339459014edb3b3ff2_95524707';
?>
<div id="modx-panel-symlink-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>