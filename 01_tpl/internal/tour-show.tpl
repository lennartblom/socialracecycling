{include file="01_tpl/header.tpl"}
									
									<h3>anzeigen | Tour</h3>
                                    
                                    {if isset($error)}
                                    <div style="margin-left:auto;margin-right:auto;margin-bottom:20px;padding:8px;" id="errorbox-red">
											<p style="font-family:arial;font-size:13px;color:#ff0000;font-weight:bold;margin-top:0px;margin-bottom:5px;">{$error}</p>
                                            <p style="font-family:arial;font-size:14px;color:red;font-weight:bold;"><a href="tours.php">Hier</a> geht es wieder zurück zur der Tourenübersicht.</p>
									</div>
                                    {else}
                                    
									<div style="margin-right:50px;width:400px;height:375px;float:right;"><iframe width="400" height="375" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.de/maps?f=q&amp;source=s_q&amp;hl=de&amp;geocode=&amp;q=Leeden&amp;sll=51.151786,10.415039&amp;sspn=20.697059,57.084961&amp;ie=UTF8&amp;hq=&amp;hnear=Leeden+Tecklenburg,+Steinfurt,+Nordrhein-Westfalen&amp;t=h&amp;z=14&amp;ll=52.213702,7.891026&amp;output=embed"></iframe></div>
									
									<table style="margin-left:50px;">
										<tr>
											<td class="label">Datum:</td>
											<td><input class="tour-input" name="date" value="{$datum}" type="text" maxlength="70" readonly /></td>
										</tr>
										<tr>
											<td class="label">Distanz:</td>
											<td><input class="tour-input" name="date" value="{$distanz} Kilometer" type="text" maxlength="70" readonly /></td>
										</tr>
										<tr>
											<td class="label">Fahrzeit:</td>
											<td><input class="tour-input" name="date" value="{$dauer} Stunden" type="text" maxlength="70" readonly /></td>
										</tr>
										<tr>
											<td class="label">Durschnittsgeschwindigkeit:</td>
											<td><input class="tour-input" name="date" value="{$durchschnitt} km/h" type="text" maxlength="70" readonly /></td>
										</tr>
										<tr>
											<td class="label">Durchschnittliche Trittfrequenz:</td>
											<td><input class="tour-input" name="date" value="{$trittfrequenz} U/min." type="text" maxlength="70" readonly /></td>
										</tr>
										<tr>
											<td class="label">Höhenunterschied:</td>
											<td><input class="tour-input" name="date" value="{$hoehenmeter} Meter" type="text" maxlength="70" readonly /></td>
										</tr>
										<tr>
											<td class="label">zusätzliche Tourinformationen:</td>
											<td><textarea class="tour-input" style="margin-left:-1px;" name="date" type="text" rows="10" cols="26" readonly>{$info}</textarea></td>
										</tr>
									</table>
									
                                    <p class="text-content"><a style="margin-left:50px;" href="tours.php">Hier</a> gelangen Sie wieder zurück zur Tourenübersicht.</p>
                                    
                                    {/if}
                                    
									
                                    
                                    
					
					
                    
{include file="01_tpl/footer.tpl"}