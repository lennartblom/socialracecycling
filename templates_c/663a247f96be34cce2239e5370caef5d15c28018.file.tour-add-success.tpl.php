<?php /* Smarty version Smarty-3.1.8, created on 2012-03-31 13:09:40
         compiled from "01_tpl/internal/tour-add-success.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16222862504f6dcbc8344e66-33361828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '663a247f96be34cce2239e5370caef5d15c28018' => 
    array (
      0 => '01_tpl/internal/tour-add-success.tpl',
      1 => 1333199369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16222862504f6dcbc8344e66-33361828',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f6dcbc839abb5_40993033',
  'variables' => 
  array (
    'durchschnitt' => 0,
    'distanz' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6dcbc839abb5_40993033')) {function content_4f6dcbc839abb5_40993033($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<img style="float:right;margin-right:100px;" src="images/haeckchen.jpg" alt="Häckchen nach der Abschließung der Tourdokumentation" width="200" height="200">
<h3>Datentransfer war erfolgreich!</h3>
<div style="margin-left:110px;margin-bottom:50px;" id="errorbox-green">
<p style="font-weight:bold;font-family:arial; font-size:14px;color:#007125;">Die Tour konnte zu Ihrer Datenbank hinzugefügt werden!</p>
<p style="font-weight:bold;font-family:arial; font-size:12px;color:#007125;">Die Durschnittsgeschwindigkeit betrug bei einer Fahrzeit von
    ca. <?php echo $_smarty_tpl->tpl_vars['durchschnitt']->value;?>
 km/h. <br />
Die Gesamtdistanz war <?php echo $_smarty_tpl->tpl_vars['distanz']->value;?>
 Kilometer.
</div>
<a href="tour-menu.php" style="margin-left:50px;">Zurück zu Tourübersicht</a>



<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>