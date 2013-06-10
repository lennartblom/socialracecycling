<?php /* Smarty version Smarty-3.1.8, created on 2013-06-04 12:45:33
         compiled from "01_tpl/internal/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209466455551ade16d43ce77-58563369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f70ec6bb4f7df410e2db5f9fda63e9ef8eaf5770' => 
    array (
      0 => '01_tpl/internal/contact.tpl',
      1 => 1332592677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209466455551ade16d43ce77-58563369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'message' => 0,
    'betreff' => 0,
    'email' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ade16d4d6531_33424420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ade16d4d6531_33424420')) {function content_51ade16d4d6531_33424420($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h3>Kontakt</h3>
<p class="text-content">Dass Sie als Benutzer keine Probleme bei der Benutzung der Platform haben, melden Sie sich bitte bei sämlichen Fehlern umgehend!<br />
Ich werde so gut wie es geht versuchen Fehler zu beseitigen. Zwar muss ich eingestehen, dass der Zeitaufwand allgemein sehr hoch ist. <br />
Aber ich versuchen mein Bestes zu geben. Auch wenn Ich möglicherweise Ihren Hinweis zu einer Felfunktion nicht sofort beseitigen kann,<br />
werde ich es nicht einfach vor mich hin schieben. Ich werde mich so gut wie es geht darum kümmern!<br />
<br />
Bis dahin erst einmal,<br />
schönen Gruß<br />
<br />
Lennart Blom</p>

<br /> 
       	  	
            <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
       	  		
       	  		<h2 style="margin-left:100px; color:#900; margin-bottom:15px;"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2>
       	  		
       	  	<?php } ?>
       
	       <form id="form1" name="form1" method="post" action="contact.php?action=send">
          <table style="margin-left:50px;" id="formular">
            <tr>
               <td class="label"> <label for="betreff">Betreff:</label></td>
               <td> <input class="registration-input" type="text" name="betreff" id="betreff" value="<?php echo $_smarty_tpl->tpl_vars['betreff']->value;?>
" /></td> 
             </tr>
             <tr>  
               <td class="label"> <label  for="email">e-Mail:</label></td>
               <td> <input class="registration-input" type="text" name="email" id="email"  value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" /></td>
             </tr>
             <tr>
               <td class="label" valign="top"> <label id="label-text" for="formular-text">Nachricht:</label></td>
               <td><textarea name="text" rows="18" cols="26" id="formular-text"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</textarea></td>  
             </tr> 
          </table>
		
		<p class="text-content"><input type="submit" /></p> 
          </form>  
          
<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>