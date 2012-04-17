<?php /* Smarty version Smarty-3.1.8, created on 2012-04-08 14:43:30
         compiled from "01_tpl/frontpage/logout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18879364164f81a412e99f32-29294705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd023fcaf23afcb13be3ba66a3acc3d0b012ec025' => 
    array (
      0 => '01_tpl/frontpage/logout.tpl',
      1 => 1332364617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18879364164f81a412e99f32-29294705',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f81a412ef6691_52515518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f81a412ef6691_52515518')) {function content_4f81a412ef6691_52515518($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


			<div id="errorbox-green" style="margin-top:50px;padding-bottom:20px;">
				<p style="color:#00690e;font-weight:bold;">Du wurdest nun ausgeloggt!</p><br>
				<p style="color:#00690e;font-weight:bold;">Zur <a href="index.php">Startseite</a> zurück</p>
			</div>
            
<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>