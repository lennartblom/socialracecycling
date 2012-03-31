{include file="01_tpl/header.tpl"}
					    <h3>Rennradtour hinzufügen</h3>
                        
                        {if count($errors)}
                        <img style="float:right;margin-right:100px;" src="images/fehler.jpg" alt="Fehler Benachrichtigung" width="200" height="200">	
                        <div style="margin-left:150px;margin-bottom:50px;" id="errorbox-red">
                            <span style="font-weight:bold;font-family:arial; font-size:15px;color:#5a5a5a;">Die Tour konnte nicht zu Ihrer Datenbank hinzugefügt werden!
                            <br />Folgende Werte werden für den Eintrag noch benötigt</span>
                            {foreach from=$errors item=error}
                            	<p style="margin-left:50px;margin-top:5px;margin-bottom:-10px;font-weight:bold;color:#F00;font-family:arial;font-size:12px;">{$error}</p><br>
                            {/foreach}
                    	</div>

						{/if}
					    <form method="post" action="add-tour.php">    
					        <table id="inputarea">
					            <tr>
					                <td class="label-input-addtrack"><label>Datum:</label></td>
					                <td>                          
					                    <select style="width:90px;" name="Date_Day">
                                        	
                                            {if isset($tag) AND $tag != ''} 
                                                <option value="{$tag}" selected>{$tag}</option>
                                            {else}
                                                		<option value="" selected>Tag</option>
                                            {/if}
                                            {section name=i loop=31}
                                                <option value="{$smarty.section.i.index}">{$smarty.section.i.index}</option>
                                            {/section}						                    
										</select>
					                   	<select style="width:90px;" name="Date_Month">
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
					                    <select style="width:90px;" name="Date_Year">
                                        	
                                            {if isset($jahr) AND $jahr != ''} 
                                                    	<option value="{$jahr}" selected>{$jahr}</option>
                                            {else}
                                                		<option value="" selected>Jahr</option>
                                            {/if}	
					                      	<option value="2012">2012</option>
					                      	<option value="2011">2011</option>
					                      	<option value="2010">2010</option>
					                    </select>
					                </td>
					            </tr>
					            <tr>
					                <td class="label-input-addtrack"><label >Zeit:</label></td>
					                <td>
					                	<select style="width:90px;" class="addtour-timeinput-hours" name="Time_Hours">
                                    			
                                                
                                                {if isset($stunden) AND $stunden != ''} 
                                                    	<option value="{$stunden}" selected>{$stunden}</option>
                                            	{else}
                                                		<option value="" selected>Stunden</option>	
                                                {/if}                                                  
                                                {section name=i loop=12}
                                                     <option value="{$smarty.section.i.index}">{$smarty.section.i.index}</option>
                                                {/section}		
                                        </select>     
                                        <select style="width:90px;" class="addtour-timeinput-minutes" name="Time_Minutes"> 
                                        		
                                                
                                            	{if isset($minuten) AND $minuten != ''} 
                                                    	<option value="{$minuten}" selected>{$minuten}</option>
                                            	{else}
                                                		<option value="" selected>Minuten</option>
                                                {/if}	
                                                {section name=i loop=61}{
                                                     <option value="{$smarty.section.i.index}">{$smarty.section.i.index}</option>
                                                {/section}	
                                        </select> 
                                         <select style="width:90px;" class="addtour-timeinput-minutes" name="Time_Seconds"> 
                                         	
                                            
                                            	{if isset($sekunden) AND $sekunden != ''} 
                                                    	<option value="{$sekunden}" selected>{$sekunden}</option>
                                            	{else}
                                                		<option value="" selected>Sekunden</option>
                                                {/if}	
                                                {section name=i loop=61}{
                                                     <option value="{$smarty.section.i.index}">{$smarty.section.i.index}</option>
                                                {/section}	
                                        </select>     
					                </td>
					                <td class="additional-information">Stunden - Minuten - Sekunden</td>
					            </tr>
					            <tr>
					                <td class="label-input-addtrack"><label>gesamt Distanz:</label></td>
					                <td><input style="width:270px;" value="{$distanz}" name="distance" class="addtour-normalinput" /></td> 
					                <td class="additional-information">Kilometer</td>
					            </tr>
					            <tr>
					                <td valign="top" class="label-input-addtrack"><label>Weitere Angaben:</label></td>
					                <td colspan="4"><textarea name="moreinformation" rows="5" cols="37">{$infos}</textarea></td>
					            </tr>
					            <tr>
					                <td class="label-input-addtrack"><select name="weiteres feld"><option>Trittfrequenz</option></select></td>
					                <td><input style="width:270px;" name="cadence" value="{$kadenz}" class="addtour-normalinput" /></td>
					                <td class="additional-information">U/min</td>
					            </tr>
					            <tr>
					                <td class="label-input-addtrack"><select name="hoehenmeter"><option>Höhenmeter</option></select></td>
					                <td><input style="width:270px;" name="heights" value="{$hoehenmeter}" class="addtour-normalinput" /></td>
					                <td class="additional-information">Meter</td>
					            </tr>
					        </table> 
					      <p style="margin-left:250px;font-weight:bold;color:#F00;font-family:arial;font-size:12px;">Einheiten bitte weglassen!<br />Diese werden automatisch von dem System eingestellt...</p>
					      <p style="margin-left:350px;"><input name="abschicken" type="submit" value="Tourdaten abschicken" /></p>         
					    </form>	
					
            <div class="clearing"></div>
            
{include file="01_tpl/footer.tpl"}