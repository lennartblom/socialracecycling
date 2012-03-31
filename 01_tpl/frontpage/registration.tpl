{include file="01_tpl/header.tpl"}
 <h1>Registrierung</h1>
                  <p>Deine Informationen vertraulich behandelt!<br />
                    Falls du erst einmal ausprobieren möchtest wie die Seite funktioniert, <br />
                    ohne dich zu registrieren, kannst du das gerne tuen!</p>
                  <p>Testmail: <em>testmail@domain.de</em> Passwort: <em>test</em><br />
                  </p>
                  <form action="registration.php" name="registration" method="post" accept-charset="ISO-8859-1">					
<table>
					       <tr>
					           <td class="label"><label>Vorname:</label></td>
					           <td><input class="registration-input" name="reg_name" value="" type="text" maxlength="30" /></td>
					       </tr>
					       <tr>
					           <td class="label"><label>Nachname:</label></td>
					           <td><input class="registration-input" name="reg_lastname" value="" type="text" maxlength="30" /></td>
					       </tr>
					       <tr>
					           <td class="label"><label>Deine E-Mail:</label></td>
					           <td><input class="registration-input" name="reg_email" value="" type="text" maxlength="70" /></td>
					       </tr>
					      <tr>
					           <td class="label"><label>E-Mail nochmals <br />eingeben:</label></td>
					           <td><input class="registration-input" name="reg_email-confirm" value="" type="text" maxlength="70" /></td>
					       </tr>
					       <tr>
					           <td class="label"><label>Dein Passwort:</label></td>
					           <td><input class="registration-input" name="reg_password" type="password" value="" maxlength="32" /></td>
					       </tr>
					   </table>
					   <input class="reg_submit" name="reg_submit" type="submit" value="Registrierung abschicken" />     
					   </form>
                       <br />
                  <p><a href="index.php">Hier</a> geht es zur Startseite</p>
                  
                  
{include file="01_tpl/footer.tpl"}