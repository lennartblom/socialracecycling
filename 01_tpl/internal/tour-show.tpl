{include file="01_tpl/header.tpl"}
									
									
                                    
                                    {if isset($error)}
                                    <h3>anzeigen | Tour</h3>
                                    <div style="margin-left:auto;margin-right:auto;margin-bottom:20px;padding:8px;" id="errorbox-red">
											<p style="font-family:arial;font-size:13px;color:#ff0000;font-weight:bold;margin-top:0px;margin-bottom:5px;">{$error}</p>
                                            <p style="font-family:arial;font-size:14px;color:red;font-weight:bold;"><a href="tours.php">Hier</a> geht es wieder zurück zur der Tourenübersicht.</p>
									</div>
                                    {else}
                                    <h3>Aktivität von Lennart Blom am {$datum}</h3>
                                            
                                            
                                    <table style="margin:auto;width:870px;min-height:500px;background-position:center center;background-image:url(images/activity-racecycling-bg.png);background-repeat:no-repeat;">
                                    	<tr>
                                        	<td colspan="3" style="font-family:Arial;font-weight:bold;font-size:17px;color:#7e7e7e;">
                                            	Distanz
                                            </td>
                                            <td style="font-family:Arial;font-weight:bold;font-size:17px;color:#7e7e7e;">
                                            	Zeit
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td colspan="3" style="color:#272727;font-family:Arial;font-weight:bold;font-size:77px;">
                                            	{$distanz} km
                                            </td>
                                            <td style="color:#272727;font-family:Arial;font-weight:bold;font-size:77px;">
                                            	{$dauer}
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td colspan="3" style="font-family:Arial;font-weight:bold;font-size:17px;color:#7e7e7e;">
                                            	&Oslash; Geschwindigkeit
                                            </td>
                                            <td style="font-family:Arial;font-weight:bold;font-size:17px;color:#7e7e7e;">
                                            	Datum
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td colspan="3" style="color:#272727;font-family:Arial;font-weight:bold;font-size:77px;">
                                            	{$durchschnitt} km/h
                                            </td>
                                            <td style="color:#272727;font-family:Arial;font-weight:bold;font-size:77px;">
                                            	{$datum}
                                            </td>
                                        </tr>
                                        <tr>
                                                <td style="color:#7e7e7e;font-family:Arial;font-weight:bold;font-size:11px;">
                                                    &Oslash; Trittfrequenz
                                                </td>
                                                <td style="color:#7e7e7e;font-family:Arial;font-weight:bold;font-size:11px;">
                                                    Höhenmeter
                                                </td>
                                                <td style="color:#7e7e7e;font-family:Arial;font-weight:bold;font-size:11px;">
                                                    &Oslash; Herzfrequenz
                                                </td>
                                                <td rowspan="2">
                                            		<h3 style="margin-left:0px;">Aktivität von {$name} {$lastname}</h3>
                                            	</td>
                                        </tr>
                                        <tr>
                                                <td style="color:#272727;font-family:Arial;font-weight:bold;font-size:37px;">
                                                    {$trittfrequenz} rpm
                                                </td>
                                                <td  style="color:#272727;font-family:Arial;font-weight:bold;font-size:37px;">
                                                    {$hoehenmeter} m
                                                </td>
                                                <td style="color:#272727;font-family:Arial;font-weight:bold;font-size:37px;">
                                                    156 bpm
                                                </td>
                                                
                                        </tr>
                                        <tr>
                                        	<td colspan="3" style="font-family:Arial;font-weight:bold;font-size:17px;color:#7e7e7e;">
                                            	Zusätzliche Informationen
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                        	<td colspan="3" style="font-family:Arial;font-weight:bold;font-size:14px;color:#272727;">
                                            	{$info}
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td colspan="4">
                                            <br /><br />
                                            <p class="text-content" style="text-align:center;"><a style="margin-left:50px;" href="tours.php">Hier</a> gelangen Sie wieder zurück zur Tourenübersicht.</p>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                    
                                    {/if}
                                    
									
                                    
                                    
					
					
                    
{include file="01_tpl/footer.tpl"}