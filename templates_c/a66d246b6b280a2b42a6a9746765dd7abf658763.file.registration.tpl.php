<?php /* Smarty version Smarty-3.1.8, created on 2013-05-04 12:05:23
         compiled from "01_tpl/frontpage/registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9694443834f81fd500168a7-27416461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a66d246b6b280a2b42a6a9746765dd7abf658763' => 
    array (
      0 => '01_tpl/frontpage/registration.tpl',
      1 => 1349870199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9694443834f81fd500168a7-27416461',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f81fd500759c2_33371675',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f81fd500759c2_33371675')) {function content_4f81fd500759c2_33371675($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <h1>Registrierung</h1>
                  <p>Deine Informationen werden vertraulich  behandelt!<br />
                    Falls du erst einmal ausprobieren möchtest wie die Seite funktioniert, <br />
                    ohne dich zu registrieren, kannst du das gerne tuen!</p>
                  <p>Den Testaccount gibt es <a href="http://www.socialracecycling.de/images/testaccount.jpg" rel="lightbox" title="Der Testaccount für Social Race Cycling">hier</a>.<br />
</p>
                  <form action="registration.php" name="registration" method="post" accept-charset="ISO-8859-1">					
<table>
					       <tr>
					           <td class="label"><label>Vorname:</label></td>
					           <td><input class="registration-input" name="reg_name" value="" type="text" maxlength="30" /></td>
					       </tr>
					       <tr>
					           <td class="label"><label>Nachname:</label></td>
					           <td><input class="registration-input" name="reg_lastname" value="" type="text" maxlength="30" /></td>
					       </tr>
					       <tr>
					           <td class="label"><label>Deine E-Mail:</label></td>
					           <td><input class="registration-input" name="reg_email" value="" type="text" maxlength="70" /></td>
					       </tr>
					      <tr>
					           <td class="label"><label>E-Mail nochmals <br />eingeben:</label></td>
					           <td><input class="registration-input" name="reg_email-confirm" value="" type="text" maxlength="70" /></td>
					       </tr>
					       <tr>
					           <td class="label"><label>Dein Passwort:</label></td>
					           <td><input class="registration-input" name="reg_password" type="password" value="" maxlength="32" /></td>
					       </tr>
					   </table>
					   <input class="reg_submit" name="reg_submit" type="submit" value="Registrierung abschicken" />     
					   </form>
                       <br />
                  <p><a href="index.php">Hier</a> geht es zur Startseite</p>
                  
                  
<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>