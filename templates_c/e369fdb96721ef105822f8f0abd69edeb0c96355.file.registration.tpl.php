<?php /* Smarty version Smarty-3.1.8, created on 2012-03-12 20:58:53
         compiled from "tpl/registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19044701274f5e638d992029-38278250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e369fdb96721ef105822f8f0abd69edeb0c96355' => 
    array (
      0 => 'tpl/registration.tpl',
      1 => 1331585930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19044701274f5e638d992029-38278250',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5e638d9f22f1_61406704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5e638d9f22f1_61406704')) {function content_4f5e638d9f22f1_61406704($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("tpl/frontpage_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <h1>Registrierung</h1>
                  <p>Deine Informationen vertraulich behandelt!<br />
                    Falls du erst einmal ausprobieren möchtest wie die Seite funktioniert, <br />
                    ohne dich zu registrieren, kannst du das gerne tuen!</p>
                  <p>Testmail: <em>testmail@domain.de</em> Passwort: <em>test</em><br />
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
                  
                  
<?php echo $_smarty_tpl->getSubTemplate ("tpl/frontpage_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>