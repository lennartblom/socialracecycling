{include file="01_tpl/header.tpl"}

					<h1>Registrierung</h1>
                    {if count($errors)}
                        <div id="errorbox-red">
                            <span style="font-family:arial;font-weight:bold;color:#5a5a5a;">Ihr Benutzerkonto konnte nicht erstellt werden.
                            <br />n Bitte korrigieren sie folgende Punkte:</span>
                            {foreach from=$errors item=erroritem}
                                        <p style="font-family:arial;color:#ff0000;font-weight:bold;margin-top:0px;margin-bottom:5px;">{$erroritem}</p>
                            {/foreach}
                            
                        </div>
                    {/if}
                    
                    
					
					
					   <form action="registration.php" name="registration" method="post"accept-charset="ISO-8859-1">					
					   <table>
					       <tr>
					           <td class="label"><label>Vorname:</label></td>
					           <td><input class="registration-input" name="reg_name" value="{$reg_name}" type="text" maxlength="30" /></td>
					       </tr>
					       <tr>
					           <td class="label"><label>Nachname:</label></td>
					           <td><input class="registration-input" name="reg_lastname" value="{$reg_lastname}" type="text" maxlength="30" /></td>
					       </tr>
					       <tr>
					           <td class="label"><label>Deine E-Mail:</label></td>
					           <td><input class="registration-input" name="reg_email" value="{$reg_email}" type="text" maxlength="70" /></td>
					       </tr>
					      <tr>
					           <td class="label"><label>E-Mail nochmals <br />eingeben:</label></td>
					           <td><input class="registration-input" name="reg_email-confirm" value="{$reg_email_confirm}" type="text" maxlength="70" /></td>
					       </tr>
					       <tr>
					           <td class="label"><label>Dein Passwort:</label></td>
					           <td><input class="registration-input" name="reg_password" type="password" value="" maxlength="32" /></td>
					       </tr>
					   </table>
					   	<input class="reg_submit" name="reg_submit" type="submit" value="Registrierung abschicken" />     
					   </form>
                       
                       <p style="padding-top:6px;">Hier kommst du zurück zur <a href="index.php">Startseite</a></p>
                       
                   

                  
{include file="01_tpl/footer.tpl"}