<?php /* Smarty version Smarty-3.1.8, created on 2012-04-10 17:44:25
         compiled from "01_tpl/frontpage/success_forgot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:782554544f8465021b1064-88340836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bb9d8f4e90dea3c65f93befbd512daabdfafaf9' => 
    array (
      0 => '01_tpl/frontpage/success_forgot.tpl',
      1 => 1334076716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '782554544f8465021b1064-88340836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f84650223f323_26643266',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f84650223f323_26643266')) {function content_4f84650223f323_26643266($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="errorbox-green" style="margin-top:50px;">
	<p style="color:#00690e;font-weight:bold;">Dein neues Passwort wurde erfolgreich an deine Email-Adresse versandt.</p><br>
	<p style="color:#00690e;font-weight:bold;">Zurück zur <a href="index.php">Startseite</a></p>
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>