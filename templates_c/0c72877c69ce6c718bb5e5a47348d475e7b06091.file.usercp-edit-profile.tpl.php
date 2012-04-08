<?php /* Smarty version Smarty-3.1.8, created on 2012-03-30 22:27:26
         compiled from "01_tpl/internal/usercp-edit-profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3735918014f71778c871633-47489487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c72877c69ce6c718bb5e5a47348d475e7b06091' => 
    array (
      0 => '01_tpl/internal/usercp-edit-profile.tpl',
      1 => 1333146444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3735918014f71778c871633-47489487',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f71778c93e3a2_68712438',
  'variables' => 
  array (
    'error' => 0,
    'item' => 0,
    'email' => 0,
    'vorname' => 0,
    'nachname' => 0,
    'strasse' => 0,
    'plz' => 0,
    'stadt' => 0,
    'land' => 0,
    'geschlecht' => 0,
    'tag' => 0,
    'monat' => 0,
    'jahr' => 0,
    'interessen' => 0,
    'beruf' => 0,
    'fahrrad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f71778c93e3a2_68712438')) {function content_4f71778c93e3a2_68712438($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h3>Dein Profil bearbeiten</h3>

<?php if (count($_smarty_tpl->tpl_vars['error']->value)){?>
		<div style="margin-left:auto;margin-right:auto;" id="errorbox-red">
			<p style="font-family:Arial;font-size:14px;font-weight:bold;color:#5a5a5a;">Dein Benutzerkonto konnte nicht bearbeitet werden.</p>
            <p style="font-family:Arial;font-size:14px;font-weight:bold;color:#5a5a5a;">Bitte korrigiere folgende Punkte:</p>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <p style="font-family:Arial;font-size:12px;color:#ff0000;font-weight:bold;margin-top:0px;margin-bottom:5px;">
                            -<?php echo $_smarty_tpl->tpl_vars['item']->value;?>

                        </p>
            <?php } ?>
		</div>
<?php }?>


<form method="post" action="usercp-edit-profile.php">
                    <table style="margin-left:-60px;">
                        <tr>
                            <td>
							
							<h2>Mein Profil</h2>
							<table>
								<tr>
									<td class="profil-column">eMail:</td>
									<td><input name="profile_email" class="profile-normalinput" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" /></td>
								</tr>
								<tr>
									<td class="profil-column">Passwort ändern:</td>
									<td><input type="password" name="profile_password"  class="profile-normalinput"  /></td>
								</tr>
								<tr>
									<td class="profil-column">Passwort wiederholen:</td>
									<td><input type="password" name="profile_password_confirm"  class="profile-normalinput"  /></td>
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
									<td><input name="profile_name" class="profile-normalinput"  value="<?php echo $_smarty_tpl->tpl_vars['vorname']->value;?>
" /></td>
								</tr>
								<tr>
									<td class="profil-column">Nachname:</td>
									<td><input name="profile_lastname"  class="profile-normalinput"  value="<?php echo $_smarty_tpl->tpl_vars['nachname']->value;?>
" /></td>
								</tr>
								<tr>
									<td class="profil-column">Straße:</td>
									<td><input name="profile_street" value="<?php echo $_smarty_tpl->tpl_vars['strasse']->value;?>
" class="profile-normalinput"  /></td>
								</tr>
								<tr>
									<td class="profil-column">PLZ:</td>
									<td><input name="profile_plz" value="<?php echo $_smarty_tpl->tpl_vars['plz']->value;?>
" class="profile-normalinput"  /></td>
								</tr>
								<tr>
									<td class="profil-column">Stadt:</td>
									<td><input name="profile_city" value="<?php echo $_smarty_tpl->tpl_vars['stadt']->value;?>
" class="profile-normalinput" /></td>
								</tr>
								<tr>
									<td class="profil-column">Land</td>
									<td>
										<select name="profile_country" style="width:258px; background-color:#f8fcff;" name="country">
													<?php if (isset($_smarty_tpl->tpl_vars['land']->value)){?>
														 <option value="<?php echo $_smarty_tpl->tpl_vars['land']->value;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['land']->value;?>
</option>
													<?php }else{ ?>
														<option value="" selected="selected">Land</option>
													<?php }?>
											<option value="" checked>Land</option>
											<option value="Deutschland">Deutschland</option>
											<option value="Österreich">Österreich</option>
											<option value="Schweiz">Schweiz</option>
											<option value="Niederlande">Niederlande</option>
											<option value="England">England</option>
										</select>
									</td>
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
									<td>
										<select name="profile_gender" style="width:258px; background-color:#f8fcff;" name="gender">
												<?php if (isset($_smarty_tpl->tpl_vars['geschlecht']->value)){?>
													 <option value="<?php echo $_smarty_tpl->tpl_vars['geschlecht']->value;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['geschlecht']->value;?>
</option>
												<?php }else{ ?>
													<option value="" selected="selected">Geschlecht</option>
												<?php }?>
											<option value="männlich">männlich</option>
											<option value="weiblich">weiblich</option>
										</select>
									</td>
								</tr>
								<tr>
									<td  class="profil-column">Geburtstag:</td>
									<td>
							                    <select style="width:70px; background-color:#f8fcff;" name="birth_Day">
                                                <?php if (isset($_smarty_tpl->tpl_vars['tag']->value)&&$_smarty_tpl->tpl_vars['tag']->value!=''){?> 
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</option>
                                                <?php }else{ ?>
                                                     <option value="" selected>Tag</option>
                                                <?php }?>
                                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=31) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                                    <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index']+1;?>
</option>
                                                <?php endfor; endif; ?>									
                                                    </select>
							                   <select style="width:90px; background-color:#f8fcff;" name="birth_Month">
                                               <?php if (isset($_smarty_tpl->tpl_vars['monat']->value)&&$_smarty_tpl->tpl_vars['monat']->value!=''){?> 
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['monat']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['monat']->value;?>
</option>
                                                <?php }else{ ?>
                                                     <option value="" selected>Monat</option>
                                                <?php }?>					
							                        <option value="01">Januar</option>
							                        <option value="02">Februar</option>
							                        <option value="03">März</option>
							                        <option value="04">April</option>
							                        <option value="05">Mai</option>
							                        <option value="06">Juni</option>
							                        <option value="07">Juli</option>
							                        <option value="08">August</option>
							                        <option value="09">September</option>
							                        <option value="10">Oktober</option>
							                        <option value="11">November</option>
							                        <option value="12" >Dezember</option>
							                    </select>
							                    <select style="width:90px; background-color:#f8fcff;" name="birth_Year">
                                                <?php if (isset($_smarty_tpl->tpl_vars['jahr']->value)&&$_smarty_tpl->tpl_vars['jahr']->value!=''){?> 
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['jahr']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['jahr']->value;?>
</option>
                                                <?php }else{ ?>
                                                     <option value="" selected>Jahr</option>
                                                <?php }?>
                                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=80) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                                    <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index']+1930;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index']+1930;?>
</option>
                                                <?php endfor; endif; ?>							
							                    </select>
									</td>
								</tr>
								<tr>
									<td class="profil-column">Interessen:</td>
									<td><input name="profile_interests" value="<?php echo $_smarty_tpl->tpl_vars['interessen']->value;?>
" class="profile-normalinput"  /></td>
								</tr>
								<tr>
									<td class="profil-column">Beruf:</td>
									<td><input name="profile_job" value="<?php echo $_smarty_tpl->tpl_vars['beruf']->value;?>
" class="profile-normalinput"  /></td>
								</tr>
								<tr>
									<td class="profil-column">Rennradmodell:</td>
									<td><input name="profile_bike" value="<?php echo $_smarty_tpl->tpl_vars['fahrrad']->value;?>
" class="profile-normalinput"  /></td>
								</tr>
							</table>
							
									</td>
								</tr>
							</table>	
							
							<input name="profile_send" value="Profildaten abschicken" style="margin-left:200px;" type="submit" />
							</form>

<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>