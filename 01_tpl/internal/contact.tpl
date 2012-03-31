
{include file="01_tpl/header.tpl"}
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
       	  	
            {foreach from=$error item=message}
       	  		
       	  		<h2 style="margin-left:100px; color:#900; margin-bottom:15px;">{$message}</h2>
       	  		
       	  	{/foreach}
       
	       <form id="form1" name="form1" method="post" action="contact.php?action=send">
          <table style="margin-left:50px;" id="formular">
            <tr>
               <td class="label"> <label for="betreff">Betreff:</label></td>
               <td> <input class="registration-input" type="text" name="betreff" id="betreff" value="{$betreff}" /></td> 
             </tr>
             <tr>  
               <td class="label"> <label  for="email">e-Mail:</label></td>
               <td> <input class="registration-input" type="text" name="email" id="email"  value="{$email}" /></td>
             </tr>
             <tr>
               <td class="label" valign="top"> <label id="label-text" for="formular-text">Nachricht:</label></td>
               <td><textarea name="text" rows="18" cols="26" id="formular-text">{$text}</textarea></td>  
             </tr> 
          </table>
		
		<p class="text-content"><input type="submit" /></p> 
          </form>  
          
{include file="01_tpl/footer.tpl"}