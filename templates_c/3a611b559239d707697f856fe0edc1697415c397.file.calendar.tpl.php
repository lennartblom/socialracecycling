<?php /* Smarty version Smarty-3.1.8, created on 2012-04-03 10:07:06
         compiled from "01_tpl/internal/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13502336664f6db0362fce80-47212783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a611b559239d707697f856fe0edc1697415c397' => 
    array (
      0 => '01_tpl/internal/calendar.tpl',
      1 => 1333447489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13502336664f6db0362fce80-47212783',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f6db036358498_33516246',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6db036358498_33516246')) {function content_4f6db036358498_33516246($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h3>Kalender</h3>

<div style="width:850px;height:100%;margin-left:auto;margin-right:auto;">

<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/internal/calendar.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</div>


<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>