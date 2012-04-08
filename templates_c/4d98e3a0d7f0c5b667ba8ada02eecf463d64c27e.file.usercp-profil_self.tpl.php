<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 15:54:42
         compiled from "01_tpl/internal/usercp-profil_self.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5464719284f708f3484bb78-44366748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d98e3a0d7f0c5b667ba8ada02eecf463d64c27e' => 
    array (
      0 => '01_tpl/internal/usercp-profil_self.tpl',
      1 => 1332777278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5464719284f708f3484bb78-44366748',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f708f348b7e92_48441943',
  'variables' => 
  array (
    'name' => 0,
    'lastname' => 0,
    'email' => 0,
    'strasse' => 0,
    'plz' => 0,
    'stadt' => 0,
    'land' => 0,
    'geburtstag' => 0,
    'interessen' => 0,
    'beruf' => 0,
    'fahrrad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f708f348b7e92_48441943')) {function content_4f708f348b7e92_48441943($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


			
								
<h3>Profil von <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
</h3>

<table style="margin-left:auto;margin-right:auto;">
            <tr>
                <td>

                <table>
                    <tr>
                        <td class="profil-column">eMail:</td>
                        <td><input  readonly name="profile_email" class="addtour-normalinput" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" /></td>
                    </tr>
                </table>
        
        
                </td>
            </tr>
        
        
            <tr>
                <td>
        
        <h2>Name und Adresse</h2>
        <table>
            <tr>
                <td class="profil-column">Vorname:</td>
                <td><input readonly name="profile_name"  class="addtour-normalinput"  value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" /></td>
            </tr>
            <tr>
                <td class="profil-column">Nachname:</td>
                <td><input  readonly name="profile_lastname"  class="addtour-normalinput"  value="<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
" /></td>
            </tr>
            <tr>
                <td class="profil-column">Straße:</td>
                <td><input  readonly name="profile_street" value="<?php echo $_smarty_tpl->tpl_vars['strasse']->value;?>
" class="addtour-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">PLZ:</td>
                <td><input  readonly name="profile_plz" value="<?php echo $_smarty_tpl->tpl_vars['plz']->value;?>
" style="width:100px;" /></td>
            </tr>
            <tr>
                <td class="profil-column">Stadt:</td>
                <td><input  readonly name="profile_city" value="<?php echo $_smarty_tpl->tpl_vars['stadt']->value;?>
" class="addtour-normalinput" /></td>
            </tr>
            <tr>
                <td class="profil-column">Land</td>
                <td><input  readonly name="profile_city" value="<?php echo $_smarty_tpl->tpl_vars['land']->value;?>
" class="addtour-normalinput" /></td>
            </tr>
        </table>
        
                </td>
            </tr>
        
            <tr>
                <td>
        
        <h2>Weitere Informationen</h2>
        <table>
            <tr>
                <td class="profil-column">Geschlecht:</td>
                <td><input  readonly name="profile_city" value="".$row['gender']."" class="addtour-normalinput" /></td>
            </tr>
            <tr>
                <td  class="profil-column">Geburtstag:</td>
                <td><input  readonly name="profile_email" class="addtour-normalinput" value="<?php echo $_smarty_tpl->tpl_vars['geburtstag']->value;?>
" /></td>
            </tr>
            <tr>
                <td class="profil-column">Interessen:</td>
                <td><input  readonly name="profile_interests" value="<?php echo $_smarty_tpl->tpl_vars['interessen']->value;?>
" class="addtour-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">Beruf:</td>
                <td><input  readonly name="profile_job" value="<?php echo $_smarty_tpl->tpl_vars['beruf']->value;?>
" class="addtour-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">Rennradmodell:</td>
                <td><input  readonly name="profile_bike" value="<?php echo $_smarty_tpl->tpl_vars['fahrrad']->value;?>
" class="addtour-normalinput"  /></td>
            </tr>
        </table>
        
                </td>
            </tr>
        </table>	
        

</form>


<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>