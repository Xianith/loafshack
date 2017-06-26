<?php /* Smarty version 3.1.27, created on 2017-04-27 01:51:59
         compiled from "/srv/web/sites/loafshack.com/public/manager/templates/default/resource/staticresource/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:54362600559014ebf146be5_05136046%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07cea58bd5abb2ba3e46e8598bc0121a63ec7157' => 
    array (
      0 => '/srv/web/sites/loafshack.com/public/manager/templates/default/resource/staticresource/create.tpl',
      1 => 1492653641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54362600559014ebf146be5_05136046',
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
  'unifunc' => 'content_59014ebf150407_60132064',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59014ebf150407_60132064')) {
function content_59014ebf150407_60132064 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '54362600559014ebf146be5_05136046';
?>
<div id="modx-panel-static-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>