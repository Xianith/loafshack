<?php /* Smarty version 3.1.27, created on 2017-05-03 23:27:23
         compiled from "/srv/web/sites/loafshack.com/public/manager/templates/default/resource/weblink/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1316790565590a675b431bb2_72543705%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d01cb7156a906f2550ddecdc2e76a40abb53685' => 
    array (
      0 => '/srv/web/sites/loafshack.com/public/manager/templates/default/resource/weblink/create.tpl',
      1 => 1492653639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1316790565590a675b431bb2_72543705',
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
  'unifunc' => 'content_590a675b4461b2_20283829',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_590a675b4461b2_20283829')) {
function content_590a675b4461b2_20283829 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1316790565590a675b431bb2_72543705';
?>
<div id="modx-panel-weblink-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>