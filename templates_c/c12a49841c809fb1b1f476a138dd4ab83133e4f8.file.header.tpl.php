<?php /* Smarty version Smarty-3.1.8, created on 2012-04-12 12:24:44
         compiled from "01_tpl/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3289826974f8186b48f4bd8-74494191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c12a49841c809fb1b1f476a138dd4ab83133e4f8' => 
    array (
      0 => '01_tpl/header.tpl',
      1 => 1334233480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3289826974f8186b48f4bd8-74494191',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f8186b4a0ec29_42723008',
  'variables' => 
  array (
    'title' => 0,
    'usercp' => 0,
    'online' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8186b4a0ec29_42723008')) {function content_4f8186b4a0ec29_42723008($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['usercp']->value==true){?> - Kontrollzentrum <?php }?> | Social Race Cycling
    </title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
	
    <?php if ($_smarty_tpl->tpl_vars['title']->value=='Kalender'){?>
    	<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/internal/calendar-style.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
    
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<?php if ($_smarty_tpl->tpl_vars['online']->value==false){?>    
    
        <?php echo $_smarty_tpl->getSubTemplate ("01_tpl/frontpage/lightbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    
    </head>
    <body>
    
    <?php if ($_smarty_tpl->tpl_vars['title']->value=='Informationen'){?>                 
    <div id="wrapper">
        <div id="container-toppart"></div>
        <div id="content-middlepart"> 
        <div id="content-toppart"></div> 
    <?php }elseif($_smarty_tpl->tpl_vars['title']->value!='Informationen'){?>
    <div id="wrapper">
    	
        <div id="container-toppart"></div>
        <div id="container-middlepart">
        <div id="content">
            <div id="text-box">  
    <?php }?>

<?php }elseif($_smarty_tpl->tpl_vars['online']->value=='false'){?>
		<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
        <script type="text/javascript" src="js/JSToolTip.js"></script>
        <script type="text/javascript" src="jqPlot/jquery.jqplot.js"></script>
    
	<?php if ($_smarty_tpl->tpl_vars['title']->value=='Dashboard'){?>
    	<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/internal/charts-self.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['title']->value=='Trainingsinformationen'){?>
    	<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/internal/charts-user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>

   </head>
<body>
<div id="wrapper">
		<?php if ($_smarty_tpl->tpl_vars['usercp']->value==true){?>
        <div id="content-headerpart-short">
        <?php }else{ ?>
        <div id="content-headerpart">
        <?php }?>
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
		       	Aktivitäten
		       </a>
		   </li>
		   <li>
		       <a name="Kalender" href="calendar.php" id="button-calendar">
		       	Kalender
		       </a>
		   </li>
			<li>
				<a name="Strecken" href="tracks.php" id="button-tracks">
					Freunde
				</a>
			</li>
			<li>
				<a name="Kontakt" href="contact.php" id="button-contact">
		   		Kontakt
        		</a>
		 	</li>
		</ul>
        </div>	
        
		
  
  		<?php if ($_smarty_tpl->tpl_vars['usercp']->value==true){?>
        	
        <div id="container-middlepart">
        
        
            <div id="usercp-background-top">
            <h4 id="control-panel">Kontrollzentrum</h4>
            <div id="usercp-background-sidebar">
                <ul id="usercp-navigation">
                    <li class="usercp-navigation-headline">Soziales</li>
                    
                        <li><a href="usercp-edit-profile.php" class="usercp-navigation-button<?php if ($_smarty_tpl->tpl_vars['title']->value=='Profil bearbeiten'){?>-active<?php }?>">Profil bearbeiten</a></li>		
                        <li><a href="usercp-profile_self.php" class="usercp-navigation-button<?php if ($_smarty_tpl->tpl_vars['title']->value=='Profildaten'){?>-active<?php }?>">Profil anzeigen</a></li>
                        <li><a href="usercp-mitgliederliste.php" class="usercp-navigation-button<?php if ($_smarty_tpl->tpl_vars['title']->value=='Mitgliederliste'||$_smarty_tpl->tpl_vars['title']->value=='Profil-Information'){?>-active<?php }?>">Mitgliederliste</a></li>
                        
                    <li class="usercp-navigation-headline">Einstellungen</li>
                    
                    	<li><a href="usercp-facebook.php" class="usercp-navigation-button<?php if ($_smarty_tpl->tpl_vars['title']->value=='Facebook'){?>-active<?php }?>">Facebook</a></li>
                </ul>
            </div>
            <div id="usercp-background-content">
                <div id="usercp-content-box">
            <?php }else{ ?>
                <div id="content-middlepart">
            <?php }?>
        
        

<?php }?>
     
<?php }} ?>