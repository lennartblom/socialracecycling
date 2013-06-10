<?php /* Smarty version Smarty-3.1.8, created on 2013-06-04 08:40:15
         compiled from "01_tpl/internal/editprofile-success.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138757554851ada7ef4e4e01-49893025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '386fe6c835ce102bb60d88e31579ee1e84e480e0' => 
    array (
      0 => '01_tpl/internal/editprofile-success.tpl',
      1 => 1332838511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138757554851ada7ef4e4e01-49893025',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ada7ef5b1b58_15549300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ada7ef5b1b58_15549300')) {function content_51ada7ef5b1b58_15549300($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h3>Datentransfer war erfolgreich!</h3>
<div style="margin-left:110px;margin-bottom:50px;" id="errorbox-green">
	<p style="font-weight:bold;font-family:arial; font-size:14px;color:#007125;">Dein Profil wurde nun erfolgreich bearbeitet. </p>
    <p style="font-weight:bold;font-family:arial; font-size:14px;color:#007125;">Änderungen wie dein Name werden erst nach einen erneuerten Login bemerkbar.</p>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>