<?php /* Smarty version Smarty-3.1.8, created on 2012-03-12 19:15:43
         compiled from "tpl/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17702387144f5ddfb2272776-07190901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6b2c89853c96e0b9a9bc209d3c3f51e9525ed10' => 
    array (
      0 => 'tpl/header.tpl',
      1 => 1331579742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17702387144f5ddfb2272776-07190901',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5ddfb22754d3_73023132',
  'variables' => 
  array (
    'module' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5ddfb22754d3_73023132')) {function content_4f5ddfb22754d3_73023132($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Übersicht | Social Race Cycling</title>
		<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
        <script type="text/javascript" src="js/JSToolTip.js"></script>
        <script type="text/javascript" src="jqPlot/jquery.jqplot.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
	<?php if ($_smarty_tpl->tpl_vars['module']->value=='home'){?>
    <?php echo $_smarty_tpl->getSubTemplate ("tpl/charts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>

   </head>
<body>
<div id="wrapper">
		<div id="content-headerpart">
        <a style="display:block;border:none;height:100px;width:195px;margin-left:110px;margin-top:60px;float:left;" href="home.php" target="_self">
        
        </a>
		<ul id="navigation">
        	<li>
               <a name="Startseite" href="home.php" id="button-home">
               	Startseite
               </a>
           </li>
           <li>
               <a name="Touren" href="tour-menu.php" id="button-touren">
		       	Touren
		       </a>
		   </li>
		   <li>
		       <a name="Kalender" href="calendar.php" id="button-calendar">
		       	Kalender
		       </a>
		   </li>
			<li>
				<a name="Strecken" href="tracks.php" id="button-tracks">
					Strecken
				</a>
			</li>
			<li>
				<a name="Kontakt" href="contact.php" id="button-contact">
		   		Kontakt
        		</a>
		 	</li>
		</ul>
        </div>	
        
		<div id="content-middlepart">
       
<?php }} ?>