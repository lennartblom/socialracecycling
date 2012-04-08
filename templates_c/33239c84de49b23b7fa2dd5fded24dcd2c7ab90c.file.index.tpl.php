<?php /* Smarty version Smarty-3.1.8, created on 2012-03-12 20:39:47
         compiled from "tpl/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2236961264f5e5f1326fbd8-84332112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33239c84de49b23b7fa2dd5fded24dcd2c7ab90c' => 
    array (
      0 => 'tpl/index.tpl',
      1 => 1331584546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2236961264f5e5f1326fbd8-84332112',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5e5f132ce196_90966974',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5e5f132ce196_90966974')) {function content_4f5e5f132ce196_90966974($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("tpl/frontpage_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



                    <h1>Herzlich Willkommen!</h1>
            <img src="images/Logo.png" alt="logo" style="float:left;padding:5px;" width="139" height="59" />
            <p>&quot;Social Race Cycling&quot; ist ein kleines Internetportal, das speziell für Rad- und Rennradfahrer entwickelt wurde. </p>
            <p><br />
              Das Portal bietet mehrere Funktionen:</p>
            <ul id="informationen">
        		<li>online Trainingstagebuch für Radfahrer</li>
                <li>übersichtliche Trainingsinformationen</li>
                <li>einfache Handhabung</li>
            </ul>
            <p>Hier sind ein paar kleine Eindrücke der Seite:</p>
			<ul style="list-style:none;" id="homepage_gallery">
            	<li class="gallery"><a href="images/gallery-frontpage/frontpage.jpg" title="individuelle Startseite" rel="lightbox[socialracecycling]"><img src="images/gallery-frontpage/frontpage.jpg" alt="vergroessern" width="50" height="50" border="0" class="vergroessern" /></a></li>
                
            	<li class="gallery"><a href="images/gallery-frontpage/addtour.jpg" title="Touren hinzufügen" rel="lightbox[socialracecycling]"><img src="images/gallery-frontpage/addtour.jpg" alt="vergroessern" width="50" height="50" border="0" class="vergroessern" /></a></li>
                
                <li class="gallery"><a href="images/gallery-frontpage/calendar.jpg" title="Kalenderansicht mit eingetragenen Touren" rel="lightbox[socialracecycling]"><img src="images/gallery-frontpage/calendar.jpg" alt="vergroessern" width="50" height="50" border="0" class="vergroessern" /></a></li>
                
                <li class="gallery"><a href="images/gallery-frontpage/tooltip.jpg" title="praktische Trainingsinformationen"  rel="lightbox[socialracecycling]"><img src="images/gallery-frontpage/tooltip.jpg" alt="vergroessern" width="50" height="50" border="0" class="vergroessern" /></a></li>
                
                <li class="gallery"><a href="images/gallery-frontpage/tours.jpg" title="&Uuml;bersicht seiner eigenen Touren" t rel="lightbox[socialracecycling]"><img src="images/gallery-frontpage/tours.jpg" alt="vergroessern" width="50" height="50" border="0" class="vergroessern" /></a></li>
           </ul>
           <br /><br /><br /><br />
          <p>Interesse geweckt? Dann schau dich doch einmal etwas genauer um:</p>
          <ul style="list-style:none;" id="homepage_gallery">
          	<li class="gallery"><a href="about.php" class="homepage">mehr Informationen</a></li>
            <li class="gallery"><a href="registration-screen.php" class="homepage">zur Registrierung</a></li>
         </ul>
         
         
         
<?php echo $_smarty_tpl->getSubTemplate ("tpl/frontpage_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>