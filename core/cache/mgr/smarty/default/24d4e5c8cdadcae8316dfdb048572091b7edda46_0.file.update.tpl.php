<?php /* Smarty version 3.1.27, created on 2017-04-20 02:55:36
         compiled from "/srv/web/sites/loafshack.com/public/manager/templates/default/resource/staticresource/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:197490243558f823289bbf91_04762891%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24d4e5c8cdadcae8316dfdb048572091b7edda46' => 
    array (
      0 => '/srv/web/sites/loafshack.com/public/manager/templates/default/resource/staticresource/update.tpl',
      1 => 1492653641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197490243558f823289bbf91_04762891',
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
  'unifunc' => 'content_58f823289c8ec1_76763703',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f823289c8ec1_76763703')) {
function content_58f823289c8ec1_76763703 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '197490243558f823289bbf91_04762891';
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