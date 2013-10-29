<?php /* Smarty version Smarty-3.1.8, created on 2013-10-29 09:33:56
         compiled from "01_tpl/internal/usercp-mitgliederliste.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3657041704f8d535eded2b8-62479032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eeba0273661d252313b09eacda74599ca74b3518' => 
    array (
      0 => '01_tpl/internal/usercp-mitgliederliste.tpl',
      1 => 1383038275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3657041704f8d535eded2b8-62479032',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f8d535eed2ed7_76854313',
  'variables' => 
  array (
    'change_selection' => 0,
    'mitgliederliste' => 0,
    'benutzer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8d535eed2ed7_76854313')) {function content_4f8d535eed2ed7_76854313($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<h5>Mitgliederliste</h5>
            <h6>Klicke die Auswahlbox an und schau dir die Profile an</h6>
            
            <p class="about-text-new" style="text-align:center;">Die Mitglieder werden dem Datum ihrer letzten Aktivität sortiert</p>
                <form action="usercp-mitgliederliste.php" method="post">
                    <input type="hidden" name="change_selection_mitgliederliste" value="<?php echo $_smarty_tpl->tpl_vars['change_selection']->value;?>
">
                    <p style="text-align:center;">
                        <input type="submit" name="change_selection_mitgliederliste_button" value="&laquo;" />
                        <input type="submit" name="change_selection_mitgliederliste_button" value="&raquo;" />
                    </p> 
                </form>
                <form action="usercp-profile_information.php" method="post">	
                <table border="1" id="edittour-tabelle">
                            <tr>
                                <td class="edittour-showtour-headline"> </td>
                                <td class="edittour-showtour-headline">folgen</td>
                                <td class="edittour-showtour-headline">Vorname</td>
                                <td class="edittour-showtour-headline">Nachname</td>
                                <td class="edittour-showtour-headline">Reg. Datum</td>
                                <td class="edittour-showtour-headline">aktiv?</td>
                                <td class="edittour-showtour-headline">Land</td>
                                 <td class="edittour-showtour-headline">Team</td>
                            </tr>
                        
                        <?php  $_smarty_tpl->tpl_vars['benutzer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['benutzer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mitgliederliste']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['benutzer']->key => $_smarty_tpl->tpl_vars['benutzer']->value){
$_smarty_tpl->tpl_vars['benutzer']->_loop = true;
?>
                            <tr>
                                <?php echo $_smarty_tpl->tpl_vars['benutzer']->value;?>

                            </tr>
                        <?php } ?>
                                                    
                </table>
                </form>
                


<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>