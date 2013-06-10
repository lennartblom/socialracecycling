<?php /* Smarty version Smarty-3.1.8, created on 2013-06-10 20:36:36
         compiled from "01_tpl/internal/team-add-success.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164088483551b638d4ece165-92304903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69ead8f0269204cc1a7064c30aa56720b282c955' => 
    array (
      0 => '01_tpl/internal/team-add-success.tpl',
      1 => 1370815104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164088483551b638d4ece165-92304903',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51b638d4f2b590_86293749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b638d4f2b590_86293749')) {function content_51b638d4f2b590_86293749($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<img style="float:right;margin-right:100px;" src="images/haeckchen.jpg" alt="Häckchen nach der Abschließung der Team-Erstellung" width="200" height="200">
<h3>Datentransfer war erfolgreich!</h3>
<div style="margin-left:110px;margin-bottom:50px;" id="errorbox-green">
<p style="font-weight:bold;font-family:arial; font-size:14px;color:#007125;">Ihr Team konnte zur Datenbank hinzugefügt werden!</p>
</div>
<a href="usercp-teams.php" style="margin-left:50px;">Zurück zur Teamübersicht</a>



<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>