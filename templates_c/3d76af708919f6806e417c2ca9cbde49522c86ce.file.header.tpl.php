<?php /* Smarty version Smarty-3.1.8, created on 2012-03-21 20:22:52
         compiled from "01_tpl/frontpage/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19551234564f5e702beb51b3-12056787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d76af708919f6806e417c2ca9cbde49522c86ce' => 
    array (
      0 => '01_tpl/frontpage/header.tpl',
      1 => 1332361349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19551234564f5e702beb51b3-12056787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5e702becd144_20092654',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5e702becd144_20092654')) {function content_4f5e702becd144_20092654($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 | Social Race Cycling</title>
<?php if ($_smarty_tpl->tpl_vars['title']->value=='Startseite'){?>
    <?php echo $_smarty_tpl->getSubTemplate ("01_tpl/frontpage/lightbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>

</head>
<body>

<?php if ($_smarty_tpl->tpl_vars['title']->value=='Informationen'){?>                 
<div id="wrapper">
    <div id="container-toppart"></div>
    <div id="content-middlepart"> 
    <div id="content-toppart"></div> 
<?php }else{ ?>
<div id="wrapper">
	<div id="container-toppart"></div>
    <div id="container-middlepart">
    <div id="content">
		<div id="text-box">  
<?php }?><?php }} ?>