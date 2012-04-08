<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 22:03:02
         compiled from "01_tpl/internal/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9819864094f70e28e9787a5-60846203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '805c9290b21bfbf5e7d27d4263ce227b860c04d3' => 
    array (
      0 => '01_tpl/internal/profile.tpl',
      1 => 1332799369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9819864094f70e28e9787a5-60846203',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f70e28e9fac45_80487991',
  'variables' => 
  array (
    'email' => 0,
    'vorname' => 0,
    'nachname' => 0,
    'strasse' => 0,
    'plz' => 0,
    'stadt' => 0,
    'land' => 0,
    'geschlecht' => 0,
    'interessen' => 0,
    'beruf' => 0,
    'fahrrad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f70e28e9fac45_80487991')) {function content_4f70e28e9fac45_80487991($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h3>Dein Profil bearbeiten</h3>

<form method="post" action=".$_SERVER['PHP_SELF'].">
							<table style="margin-left:auto;margin-right:auto;">
								<tr>
									<td>
							
							<h2>Mein Profil</h2>
							<table>
								<tr>
									<td class="profil-column">eMail:</td>
									<td><input name="profile_email" class="addtour-normalinput" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" /></td>
								</tr>
								<tr>
									<td class="profil-column">Passwort ändern:</td>
									<td><input type="password" name="profile_password"  class="addtour-normalinput"  /></td>
								</tr>
								<tr>
									<td class="profil-column">Passwort wiederholen:</td>
									<td><input type="password" name="profile_password_confirm"  class="addtour-normalinput"  /></td>
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
									<td><input name="profile_name" class="addtour-normalinput"  value="<?php echo $_smarty_tpl->tpl_vars['vorname']->value;?>
" /></td>
								</tr>
								<tr>
									<td class="profil-column">Nachname:</td>
									<td><input name="profile_lastname"  class="addtour-normalinput"  value="<?php echo $_smarty_tpl->tpl_vars['nachname']->value;?>
" /></td>
								</tr>
								<tr>
									<td class="profil-column">Straße:</td>
									<td><input name="profile_street" value="<?php echo $_smarty_tpl->tpl_vars['strasse']->value;?>
" class="addtour-normalinput"  /></td>
								</tr>
								<tr>
									<td class="profil-column">PLZ:</td>
									<td><input name="profile_plz" value="<?php echo $_smarty_tpl->tpl_vars['plz']->value;?>
" style="width:100px;" /></td>
								</tr>
								<tr>
									<td class="profil-column">Stadt:</td>
									<td><input name="profile_city" value="<?php echo $_smarty_tpl->tpl_vars['stadt']->value;?>
" class="addtour-normalinput" /></td>
								</tr>
								<tr>
									<td class="profil-column">Land</td>
									<td>
										<select name="profile_country" style="width:220px;" name="country">
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
										<select name="profile_gender"  style="width:220px;" name="gender">
												<?php if (!isset($_smarty_tpl->tpl_vars['geschlecht']->value)){?>
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
							                    <select name="birth_Day">
																				
												</select>
							                   <select name="birth_Month">
                                               	
                                                						
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
							                    <select name="birth_Year">
                                                						
							                    </select>
									</td>
								</tr>
								<tr>
									<td class="profil-column">Interessen:</td>
									<td><input name="profile_interests" value="<?php echo $_smarty_tpl->tpl_vars['interessen']->value;?>
" class="addtour-normalinput"  /></td>
								</tr>
								<tr>
									<td class="profil-column">Beruf:</td>
									<td><input name="profile_job" value="<?php echo $_smarty_tpl->tpl_vars['beruf']->value;?>
" class="addtour-normalinput"  /></td>
								</tr>
								<tr>
									<td class="profil-column">Rennradmodell:</td>
									<td><input name="profile_bike" value="<?php echo $_smarty_tpl->tpl_vars['fahrrad']->value;?>
" class="addtour-normalinput"  /></td>
								</tr>
							</table>
							
									</td>
								</tr>
							</table>	
							
							<input name="profile_send" value="Profildaten abschicken" style="margin-left:200px;" type="submit" />
							</form>

<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>