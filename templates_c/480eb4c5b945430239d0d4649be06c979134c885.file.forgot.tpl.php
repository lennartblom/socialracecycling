<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 22:16:11
         compiled from "01_tpl/frontpage/forgot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14516484814f5f899400a1d3-01521551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '480eb4c5b945430239d0d4649be06c979134c885' => 
    array (
      0 => '01_tpl/frontpage/forgot.tpl',
      1 => 1332800167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14516484814f5f899400a1d3-01521551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5f8994064c05_48319621',
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5f8994064c05_48319621')) {function content_4f5f8994064c05_48319621($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			
<h3 style="margin-top:20px;">Passwort vergessen? Kein Problem!</h3>
<p>Geben Sie hier einfach Ihr Email-Adresse ein und Ihnen wird per Email ein neu generiertes Passwort zugeschickt</p>
<p>Falls es Schwierigkeiten geben sollte können Sie sich aber auch direkt an den Betreiber der Website wenden <span style="font-style:italic;">kontakt(at)lennart-blom.de</span>
</p>

<p>Hier geht es zurück zur <a href="index.php">Startseite</a></p>

						
                        <?php if (count($_smarty_tpl->tpl_vars['errors']->value)){?>
						  <div id="errorbox-red">
                                <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                                    <p style="color:#ff0000;font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br></p>
                                <?php } ?>
							</div>
                        <?php }?>
						
<form action="forgot-password.php" name="registration" method="post" accept-charset="ISO-8859-1"> 					
<table> 
    <tr> 
        <td class="label"><label>Deine eMail-Adresse:</label></td> 
        <td><input class="registration-input" name="reg_email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" type="text" maxlength="70" /></td> 
    </tr> 
</table> 
<input class="reg_submit" name="reg_submit" type="submit" value="Abschicken" />      
</form> 
					
<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>