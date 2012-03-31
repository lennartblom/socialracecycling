{include file="01_tpl/header.tpl"}
<h3>löschen | Touren</h3>

						
                        {if isset($error) or isset($success)}
                        	{if isset($error)}
                        	<div style="margin-left:auto;margin-right:auto;margin-bottom:20px;padding:8px;" id="errorbox-red">
                        		<p style="font-family:arial;font-size:13px;color:#ff0000;font-weight:bold;margin-top:0px;margin-bottom:5px;">{$error}</p>
                            	<p style="font-family:arial;font-size:14px;color:red;font-weight:bold;"><a href="tours.php">Hier</a> geht es wieder zurück zur der Tourenübersicht.</p>
                        </div>
                        	{/if}
                            {if isset($success)}
                            <div id="errorbox-green" style="margin-top:10px;margin-left:50px;">
                                <p style="font-family:arial;font-size:14px;color:#00690e;font-weight:bold;">{$success}</p>
                                <p style="font-family:arial;font-size:14px;color:#00690e;font-weight:bold;"><a href="tours.php">Hier</a> geht es wieder zurück zur der Tourenübersicht.</p>
                            </div>
                            {/if}
                       {/if}
						
						
						
					
						
				
                    
{include file="01_tpl/footer.tpl"}