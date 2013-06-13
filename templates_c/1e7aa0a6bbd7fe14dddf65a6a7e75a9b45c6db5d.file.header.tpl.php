<?php /* Smarty version Smarty-3.1.8, created on 2013-06-13 17:41:47
         compiled from "01_tpl\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1175051b9e83b3b7593-70182692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e7aa0a6bbd7fe14dddf65a6a7e75a9b45c6db5d' => 
    array (
      0 => '01_tpl\\header.tpl',
      1 => 1371137197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1175051b9e83b3b7593-70182692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'usercp' => 0,
    'online' => 0,
    'activities' => 0,
    'km' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51b9e83b445b49_97668123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b9e83b445b49_97668123')) {function content_51b9e83b445b49_97668123($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    
    <?php if ($_smarty_tpl->tpl_vars['title']->value=='Profil bearbeiten'){?>
    	<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/frontpage/lightbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
    
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<?php if ($_smarty_tpl->tpl_vars['online']->value==false){?>    
    
        <?php echo $_smarty_tpl->getSubTemplate ("01_tpl/frontpage/lightbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    	
    	<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </head>
    <body>
    
    <?php if ($_smarty_tpl->tpl_vars['title']->value=='Informationen'||$_smarty_tpl->tpl_vars['title']->value=='Team Dashboard'){?>                 
    <div id="wrapper">
        <div id="container-toppart"></div>
        <div id="content-middlepart"> 
        <div id="content-toppart"></div> 
    <?php }elseif($_smarty_tpl->tpl_vars['title']->value!='Informationen'){?>
    <div id="wrapper">
    	
        <div id="container-toppart"></div>
        <div id="container-middlepart">
        <div id="content">
        		<?php if ($_smarty_tpl->tpl_vars['title']->value=="Startseite"||$_smarty_tpl->tpl_vars['title']->value=="Registrierung"){?>
        		<div style="float:right;margin-right:40px;padding:10px;margin-top:275px;width:398px;color:#282828;font-size:12px;font-weight:bold;font-family:Arial, Helvetica, sans-serif;height:159px;background-image:url(http://www.socialracecycling.de/images/counter/counter-bg.png);" id="counter">
                	<p style="margin:2px;">Es wurden schon insgesamt</p>
                    <p style="margin:2px;height:50px;overflow:hidden;"><?php echo $_smarty_tpl->tpl_vars['activities']->value;?>
<img style="margin-bottom:15px;" src="http://www.socialracecycling.de/images/counter/aktivitaeten.png" /></p>
                    <p style="margin:0px;margin-top:-5px;">mit insgesamt</p>
                	<p style="margin:2px;height:50px;overflow:hidden;"><?php echo $_smarty_tpl->tpl_vars['km']->value;?>
</p>
                    <p style="margin:2px;font-size:13px;">in die Datenbank von Social Race Cycling <img src="http://socialracecycling.de/images/favicon.jpg" height="18"style="margin-top:2px;" /> eingetragen</p>
                    
                </div>
                <?php }?>
            <div id="text-box">  
            
            
    <?php }?>

<?php }elseif($_smarty_tpl->tpl_vars['online']->value=='false'){?>

	<?php if ($_smarty_tpl->tpl_vars['title']->value!=='Profil bearbeiten'){?>
		<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
        <script type="text/javascript" src="js/JSToolTip.js"></script>
        <script type="text/javascript" src="jqPlot/jquery.jqplot.js"></script>
     <?php }?>
        
        
	<?php if ($_smarty_tpl->tpl_vars['title']->value=='Dashboard'){?>
    	<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/internal/charts-self.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['title']->value=='Profildaten'||$_smarty_tpl->tpl_vars['title']->value=='Profil-Information'){?>
    	<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/internal/charts-profile-self.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['title']->value=='Trainingsinformationen'){?>
    	<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/internal/charts-user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
	<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
                    	<li><a href="usercp-teams.php" class="usercp-navigation-button<?php if ($_smarty_tpl->tpl_vars['title']->value=='Teams'){?>-active<?php }?>">Teams</a></li>	
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