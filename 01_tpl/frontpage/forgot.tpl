{include file="01_tpl/header.tpl"}
			
<h3 style="margin-top:20px;">Passwort vergessen? Kein Problem!</h3>
<p>Geben Sie hier einfach Ihr Email-Adresse ein und Ihnen wird per Email ein neu generiertes Passwort zugeschickt</p>
<p>Falls es Schwierigkeiten geben sollte können Sie sich aber auch direkt an den Betreiber der Website wenden <span style="font-style:italic;">kontakt(at)lennart-blom.de</span>
</p>

<p>Hier geht es zurück zur <a href="index.php">Startseite</a></p>

						
                        {if count($errors)}
						  <div id="errorbox-red">
                                {foreach from=$errors item=error}
                                    <p style="color:#ff0000;font-weight:bold;">{$error}<br></p>
                                {/foreach}
							</div>
                        {/if}
						
<form action="forgot-password.php" name="registration" method="post" accept-charset="ISO-8859-1"> 					
<table> 
    <tr> 
        <td class="label"><label>Deine eMail-Adresse:</label></td> 
        <td><input class="registration-input" name="reg_email" value="{$email}" type="text" maxlength="70" /></td> 
    </tr> 
</table> 
<input class="reg_submit" name="reg_submit" type="submit" value="Abschicken" />      
</form> 
					
{include file="01_tpl/footer.tpl"}
