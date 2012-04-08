<?php /* Smarty version Smarty-3.1.8, created on 2012-03-29 09:25:34
         compiled from "01_tpl/internal/usercp-profile_self.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8286206894f70c422419f03-92206937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b3e13896efb018c3d249a4f1625f4d75af37beb' => 
    array (
      0 => '01_tpl/internal/usercp-profile_self.tpl',
      1 => 1333013132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8286206894f70c422419f03-92206937',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f70c4224c4fb2_76632660',
  'variables' => 
  array (
    'name' => 0,
    'lastname' => 0,
    'email' => 0,
    'strasse' => 0,
    'plz' => 0,
    'stadt' => 0,
    'land' => 0,
    'geschlecht' => 0,
    'geburtstag' => 0,
    'interessen' => 0,
    'beruf' => 0,
    'fahrrad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f70c4224c4fb2_76632660')) {function content_4f70c4224c4fb2_76632660($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


			
								
<h3>Profil von <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
</h3>

<table style="margin-left:-100px;">
            <tr>
                <td>

                <table>
                    <tr>
                        <td class="profil-column">eMail:</td>
                        <td><input  readonly name="profile_email" class="profile-normalinput" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
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
                <td><input readonly name="profile_name"  class="profile-normalinput"  value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" /></td>
            </tr>
            <tr>
                <td class="profil-column">Nachname:</td>
                <td><input  readonly name="profile_lastname"  class="profile-normalinput"  value="<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
" /></td>
            </tr>
            <tr>
                <td class="profil-column">Straße:</td>
                <td><input  readonly name="profile_street" value="<?php echo $_smarty_tpl->tpl_vars['strasse']->value;?>
" class="profile-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">PLZ:</td>
                <td><input  readonly name="profile_plz" value="<?php echo $_smarty_tpl->tpl_vars['plz']->value;?>
" class="profile-normalinput" /></td>
            </tr>
            <tr>
                <td class="profil-column">Stadt:</td>
                <td><input  readonly name="profile_city" value="<?php echo $_smarty_tpl->tpl_vars['stadt']->value;?>
" class="profile-normalinput" /></td>
            </tr>
            <tr>
                <td class="profil-column">Land</td>
                <td><input  readonly name="profile_city" value="<?php echo $_smarty_tpl->tpl_vars['land']->value;?>
" class="profile-normalinput" /></td>
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
                <td><input readonly name="profile_city" value="<?php echo $_smarty_tpl->tpl_vars['geschlecht']->value;?>
" class="profile-normalinput" /></td>
            </tr>
            <tr>
                <td  class="profil-column">Geburtstag:</td>
                <td><input readonly name="profile_email" value="<?php echo $_smarty_tpl->tpl_vars['geburtstag']->value;?>
" class="profile-normalinput" /></td>
            </tr>
            <tr>
                <td class="profil-column">Interessen:</td>
                <td><input  readonly="readonly" name="profile_interests" value="<?php echo $_smarty_tpl->tpl_vars['interessen']->value;?>
" class="profile-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">Beruf:</td>
                <td><input  readonly name="profile_job" value="<?php echo $_smarty_tpl->tpl_vars['beruf']->value;?>
" class="profile-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">Rennradmodell:</td>
                <td><input  readonly name="profile_bike" value="<?php echo $_smarty_tpl->tpl_vars['fahrrad']->value;?>
" class="profile-normalinput"  /></td>
            </tr>
        </table>
        
                </td>
            </tr>
        </table>	
        

</form>


<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>