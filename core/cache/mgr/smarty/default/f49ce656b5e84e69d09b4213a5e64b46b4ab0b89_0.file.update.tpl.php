<?php /* Smarty version 3.1.27, created on 2017-05-03 23:28:46
         compiled from "/srv/web/sites/loafshack.com/public/manager/templates/default/resource/weblink/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:713852721590a67ae77a7e8_24474407%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f49ce656b5e84e69d09b4213a5e64b46b4ab0b89' => 
    array (
      0 => '/srv/web/sites/loafshack.com/public/manager/templates/default/resource/weblink/update.tpl',
      1 => 1492653639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '713852721590a67ae77a7e8_24474407',
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
  'unifunc' => 'content_590a67ae784010_65503062',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_590a67ae784010_65503062')) {
function content_590a67ae784010_65503062 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '713852721590a67ae77a7e8_24474407';
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