<?php /* Smarty version Smarty-3.1.8, created on 2013-05-26 19:52:20
         compiled from "01_tpl/internal/tour-edit-success.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214288239751a267f471bcb1-89340116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d25063c4f564eea368c1ac8276a3e1595cd7f2c' => 
    array (
      0 => '01_tpl/internal/tour-edit-success.tpl',
      1 => 1333210046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214288239751a267f471bcb1-89340116',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51a267f479f332_48131613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a267f479f332_48131613')) {function content_51a267f479f332_48131613($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<img style="float:right;margin-right:100px;" src="images/haeckchen.jpg" alt="Häckchen nach der Abschließung der Tourdokumentation" width="200" height="200">
<h3>Datentransfer war erfolgreich!</h3>
<div style="margin-left:110px;margin-bottom:50px;" id="errorbox-green">
<p style="font-weight:bold;font-family:arial; font-size:14px;color:#007125;">Deine Tour wurde erfolgreich bearbeitet</p>
</div>
<a href="tours.php" style="margin-left:50px;">Zurück zu Tourübersicht</a>



<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>