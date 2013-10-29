{include file="01_tpl/header.tpl"}

<h3>Dein Profil bearbeiten</h3>

{if count($error)}
		<div style="margin-left:auto;margin-right:auto;" id="errorbox-red">
			<p style="font-family:Arial;font-size:14px;font-weight:bold;color:#5a5a5a;">Dein Benutzerkonto konnte nicht bearbeitet werden.</p>
            <p style="font-family:Arial;font-size:14px;font-weight:bold;color:#5a5a5a;">Bitte korrigiere folgende Punkte:</p>
			{foreach from=$error item=item}
                        <p style="font-family:Arial;font-size:12px;color:#ff0000;font-weight:bold;margin-top:0px;margin-bottom:5px;">
                            -{$item}
                        </p>
            {/foreach}
		</div>
{/if}


<form method="post" action="usercp-edit-profile.php">
                    <table style="margin-left:-60px;">
                        <tr>
                            <td>
							
							
                            {if $id != 29}
                            
                            <h2>Mein Profil</h2>
                                <table>
                                    <tr>
                                        <td class="profil-column">eMail:</td>
                                        <td><input name="profile_email" class="profile-normalinput" value="{$email}" /></td>
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
                            {/if}
							
							
									</td>
								</tr>
							
							
								<tr>
									<td>
                                     <h2>Privatsphäre</h2>
                                        <table style="display:block;margin-left:0px;">
                                            <tr>
                                                <td class="profil-column">Profildaten öffentlich?:</td>
                                                <td><input {if $privacy_profil=='1'} checked="checked"{/if} value="true" name="privacy_profilinformation" type="checkbox" /></td>
                                                <td>[ <a rel="lightbox[privacy]" title="Deine Profilinformationen werden nicht angezeigt" href="images/profile/privacy_infos.jpg">Was bedeutet das?</a> ]</td>
                                            </tr>
                                            <tr>
                                                <td class="profil-column">Monatsaktivitäten <br />
öffentlich?:</td>
                                                <td><input {if $privacy_chart eq 1} checked="checked"{/if} value="true" name="privacy_activitychart" type="checkbox" /></td>
                                                <td>[ <a rel="lightbox[privacy]" title="Das Diagramm für die monatlichen Aktivitäten ist nicht sichtbar" href="images/profile/privacy_chart.jpg">Was bedeutet das?</a> ]</td>
                                            </tr>
                                            <tr>
                                                <td class="profil-column">Jahrestrainingsdetails <br />
öffentlich?:</td>
                                                <td><input {if $privacy_details eq 1} checked="checked"{/if} value="true" name="privacy_yeartraining" type="checkbox" /></td>
                                                <td>[ <a rel="lightbox[privacy]" title="Die Jahresbilanzen deines Trainings können nicht von anderen Mitgliedern angesehen werden, ebenso wenig ist die Vergleichfunktion aktiv" href="images/profile/privacy_trainingdetails.jpg">Was bedeutet das?</a> ]</td>
                                            </tr>
                                            <tr>
                                                <td class="profil-column">Aktivitätstagebuch <br />
öffentlich?:</td>
                                                <td><input  {if $privacy_log eq 1} checked="checked"{/if} value="true" name="privacy_activitylog" type="checkbox" /></td>
                                                <td>[ <a rel="lightbox[privacy]" title="Deine letzten 5 Aktivitäten sind für andere Mitglieder nicht einsehbar" href="images/profile/privacy_log.jpg">Was bedeutet das?</a> ]</td>
                                            </tr>
                                            <tr>
                                                <td class="profil-column">Andere Nutzer dürfen mir folgen <br />
erlauben?:</td>
                                                <td><input  {if $privacy_follow eq 1} checked="checked"{/if} value="true" name="privacy_follow" type="checkbox" /></td>
                                                <td>[ <a rel="lightbox[privacy]" title="Andere Mitglieder können dir nich folgen" href="images/profile/privacy_follow.jpg">Was bedeutet das?</a> ]</td>
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
									<td><input  name="profile_name" class="profile-normalinput"  value="{$vorname}" /></td>
								</tr>
								<tr>
									<td class="profil-column">Nachname:</td>
									<td><input name="profile_lastname"  class="profile-normalinput"  value="{$nachname}" /></td>
								</tr>
								<tr>
									<td class="profil-column">Straße:</td>
									<td><input  name="profile_street" value="{$strasse}" class="profile-normalinput"  /></td>
								</tr>
								<tr>
									<td class="profil-column">PLZ:</td>
									<td><input name="profile_plz" value="{$plz}" class="profile-normalinput"  /></td>
								</tr>
								<tr>
									<td class="profil-column">Stadt:</td>
									<td><input name="profile_city" value="{$stadt}" class="profile-normalinput" /></td>
								</tr>
								<tr>
									<td class="profil-column">Land</td>
									<td>
										<select name="profile_country" style="width:258px; background-color:#f8fcff;" name="country">
													{if isset($land)}
														 <option value="{$land}" selected="selected">{$land}</option>
													{else}
														<option value="" selected="selected">Land</option>
													{/if}
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
												{if isset($geschlecht)}
													 <option value="{$geschlecht}" selected="selected">{$geschlecht}</option>
												{else}
													<option value="" selected="selected">Geschlecht</option>
												{/if}
											<option value="männlich">männlich</option>
											<option value="weiblich">weiblich</option>
										</select>
									</td>
								</tr>
								<tr>
									<td  class="profil-column">Geburtstag:</td>
									<td>
							                    <select style="width:70px; background-color:#f8fcff;" name="birth_Day">
                                                {if isset($tag) AND $tag != ''} 
                                                    <option value="{$tag}" selected>{$tag}</option>
                                                {else}
                                                     <option value="" selected>Tag</option>
                                                {/if}
                                                {section name=i loop=31}
                                                    <option value="{$smarty.section.i.index+1}">{$smarty.section.i.index+1}</option>
                                                {/section}									
                                                    </select>
							                   <select style="width:90px; background-color:#f8fcff;" name="birth_Month">
                                               {if isset($monat) AND $monat != ''} 
                                                    <option value="{$monat}" selected>{$monat}</option>
                                                {else}
                                                     <option value="" selected>Monat</option>
                                                {/if}					
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
                                                {if isset($jahr) AND $jahr != ''} 
                                                    <option value="{$jahr}" selected>{$jahr}</option>
                                                {else}
                                                     <option value="" selected>Jahr</option>
                                                {/if}
                                                {section name=i loop=80}
                                                    <option value="{$smarty.section.i.index+1930}">{$smarty.section.i.index+1930}</option>
                                                {/section}							
							                    </select>
									</td>
								</tr>
								<tr>
									<td class="profil-column">Interessen:</td>
									<td><input name="profile_interests" value="{$interessen}" class="profile-normalinput"  /></td>
								</tr>
								<tr>
									<td class="profil-column">Beruf:</td>
									<td><input name="profile_job" value="{$beruf}" class="profile-normalinput"  /></td>
								</tr>
								<tr>
									<td class="profil-column">Rennradmodell:</td>
									<td><input name="profile_bike" value="{$fahrrad}" class="profile-normalinput"  /></td>
								</tr>
							</table>
							
									</td>
								</tr>
							</table>	
							
							<input name="profile_send" value="Profildaten abschicken" style="margin-left:200px;" type="submit" />
							</form>

{include file="01_tpl/footer.tpl"}