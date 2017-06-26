<?php /* Smarty version 3.1.27, created on 2017-04-20 02:30:34
         compiled from "/srv/web/sites/loafshack.com/public/setup/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:150002522658f81d4acadbb7_53058716%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd836bb73353df459b5bd9ef9aff59b1be9addedb' => 
    array (
      0 => '/srv/web/sites/loafshack.com/public/setup/templates/footer.tpl',
      1 => 1492653526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150002522658f81d4acadbb7_53058716',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f81d4acb44c0_87629001',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f81d4acb44c0_87629001')) {
function content_58f81d4acb44c0_87629001 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/srv/web/sites/loafshack.com/public/core/model/smarty/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '150002522658f81d4acadbb7_53058716';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>