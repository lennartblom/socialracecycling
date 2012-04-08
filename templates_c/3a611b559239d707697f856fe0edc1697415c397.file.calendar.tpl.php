<?php /* Smarty version Smarty-3.1.8, created on 2012-04-08 12:40:44
         compiled from "01_tpl/internal/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14604537874f8186b4853977-96510891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a611b559239d707697f856fe0edc1697415c397' => 
    array (
      0 => '01_tpl/internal/calendar.tpl',
      1 => 1333888842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14604537874f8186b4853977-96510891',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f8186b48ee8f7_67398402',
  'variables' => 
  array (
    'calendarsource' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8186b48ee8f7_67398402')) {function content_4f8186b48ee8f7_67398402($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h3>Kalender</h3>

<div style="width:850px;height:100%;margin-left:auto;margin-right:auto;">
	<?php echo $_smarty_tpl->tpl_vars['calendarsource']->value;?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>