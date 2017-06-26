<?php /* Smarty version 3.1.27, created on 2017-04-27 02:30:51
         compiled from "/srv/web/sites/loafshack.com/public/manager/templates/default/element/chunk/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1822127336590157db1c6058_49345136%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0022ea2d8a904b3cc52034716536e8f045a06e4b' => 
    array (
      0 => '/srv/web/sites/loafshack.com/public/manager/templates/default/element/chunk/create.tpl',
      1 => 1492653828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1822127336590157db1c6058_49345136',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_590157db1c9417_90969454',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_590157db1c9417_90969454')) {
function content_590157db1c9417_90969454 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1822127336590157db1c6058_49345136';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>