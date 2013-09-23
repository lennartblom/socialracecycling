<?php /* Smarty version Smarty-3.1.8, created on 2013-06-13 18:43:35
         compiled from "01_tpl/internal/usercp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12849918674f86caa79c0231-42439914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b97ec22b9fad694954c8bcc031ad7fc4f875541' => 
    array (
      0 => '01_tpl/internal/usercp.tpl',
      1 => 1371131305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12849918674f86caa79c0231-42439914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f86caa7a4e851_42142333',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f86caa7a4e851_42142333')) {function content_4f86caa7a4e851_42142333($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					<h5 style="text-align:left;margin-left:0px;">Herzlich Willkommen im Kontrollzentrum, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 !</h5>
					<h6 style="text-align:left;margin-left:0px;">Folgende Aktionen stehen zur Verfügung</h6>
					<ul style="list-style:square;" class="about-text-new">
                    	<li>dein Benutzerprofil <a href="usercp-profile_self.php" title="Profil ansehen">ansehen</a></li>
                        <li>dein SRC-Profil <a href="usercp-edit-profile.php" title="Profil bearbeiten">bearbeiten</a></li>
                        <ul class="about-text-new">
                        	<li>Privatsphäreeinstellungen bearbeiten</li>
                        	<li>Profilinformationen angleichen</li>
                        </ul>
                        <li>Andere Mitglieder <a href="usercp-mitgliederliste.php" title="Mitgliederliste">finden</a></li>
                       	
                        <ul class="about-text-new">
                        	<li>SRC Profil ansehen</li>
                        	<li>Trainingsinformationen vergleichen</li>
                        </ul>
                       
					</ul>
            
            
<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>