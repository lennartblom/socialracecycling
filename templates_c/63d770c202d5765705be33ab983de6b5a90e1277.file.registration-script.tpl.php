<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 22:11:10
         compiled from "01_tpl/frontpage/registration-script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17216916294f6a4891512110-90017846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63d770c202d5765705be33ab983de6b5a90e1277' => 
    array (
      0 => '01_tpl/frontpage/registration-script.tpl',
      1 => 1332799867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17216916294f6a4891512110-90017846',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f6a489156d606_15163827',
  'variables' => 
  array (
    'errors' => 0,
    'erroritem' => 0,
    'reg_name' => 0,
    'reg_lastname' => 0,
    'reg_email' => 0,
    'reg_email_confirm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6a489156d606_15163827')) {function content_4f6a489156d606_15163827($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


					<h1>Registrierung</h1>
                    <?php if (count($_smarty_tpl->tpl_vars['errors']->value)){?>
                        <div id="errorbox-red">
                            <span style="font-family:arial;font-weight:bold;color:#5a5a5a;">Ihr Benutzerkonto konnte nicht erstellt werden.
                            <br />n Bitte korrigieren sie folgende Punkte:</span>
                            <?php  $_smarty_tpl->tpl_vars['erroritem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['erroritem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['erroritem']->key => $_smarty_tpl->tpl_vars['erroritem']->value){
$_smarty_tpl->tpl_vars['erroritem']->_loop = true;
?>
                                        <p style="font-family:arial;color:#ff0000;font-weight:bold;margin-top:0px;margin-bottom:5px;"><?php echo $_smarty_tpl->tpl_vars['erroritem']->value;?>
</p>
                            <?php } ?>
                            
                        </div>
                    <?php }?>
                    
                    
					
					
					   <form action="registration.php" name="registration" method="post"accept-charset="ISO-8859-1">					
					   <table>
					       <tr>
					           <td class="label"><label>Vorname:</label></td>
					           <td><input class="registration-input" name="reg_name" value="<?php echo $_smarty_tpl->tpl_vars['reg_name']->value;?>
" type="text" maxlength="30" /></td>
					       </tr>
					       <tr>
					           <td class="label"><label>Nachname:</label></td>
					           <td><input class="registration-input" name="reg_lastname" value="<?php echo $_smarty_tpl->tpl_vars['reg_lastname']->value;?>
" type="text" maxlength="30" /></td>
					       </tr>
					       <tr>
					           <td class="label"><label>Deine E-Mail:</label></td>
					           <td><input class="registration-input" name="reg_email" value="<?php echo $_smarty_tpl->tpl_vars['reg_email']->value;?>
" type="text" maxlength="70" /></td>
					       </tr>
					      <tr>
					           <td class="label"><label>E-Mail nochmals <br />eingeben:</label></td>
					           <td><input class="registration-input" name="reg_email-confirm" value="<?php echo $_smarty_tpl->tpl_vars['reg_email_confirm']->value;?>
" type="text" maxlength="70" /></td>
					       </tr>
					       <tr>
					           <td class="label"><label>Dein Passwort:</label></td>
					           <td><input class="registration-input" name="reg_password" type="password" value="" maxlength="32" /></td>
					       </tr>
					   </table>
					   	<input class="reg_submit" name="reg_submit" type="submit" value="Registrierung abschicken" />     
					   </form>
                       
                       <p style="padding-top:6px;">Hier kommst du zurück zur <a href="index.php">Startseite</a></p>
                       
                   

                  
<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>