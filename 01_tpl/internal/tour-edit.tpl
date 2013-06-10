{include file="01_tpl/header.tpl"}
								
<h3>bearbeiten | Tour</h3>


{if isset($error)}
    <div style="margin-left:auto;margin-right:auto;margin-bottom:20px;padding:8px;" id="errorbox-red">
            <p style="font-family:arial;font-size:13px;color:#ff0000;font-weight:bold;margin-top:0px;margin-bottom:5px;">{$error}</p>
            <p style="font-family:arial;font-size:14px;color:red;font-weight:bold;"><a href="tours.php">Hier</a> geht es wieder zurück zur der Tourenübersicht.</p>
    </div>
{else}

<form action="edit-tour.php" method="post" name="edit-tour">
<table style="margin:auto;">
    <tr>
        <td class="label">Datum:</td>
        <td>
       		<select style="width:90px; background-color:#f8fcff;"" name="Date_Day">                                 
                {if isset($tag) AND $tag != ''} 
                    <option value="{$tag}" selected>{$tag}</option>
                {else}
                            <option value="" selected>Tag</option>
                {/if}
                {section name=i loop=31}
                    <option value="{$smarty.section.i.index+1}">{$smarty.section.i.index+1}</option>
                {/section}						                    
            </select>
            <select style="width:90px; background-color:#f8fcff;"" name="Date_Month">
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
            <select style="width:90px; background-color:#f8fcff;"" name="Date_Year">
                
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
        <td class="label">Distanz:</td>
        <td><input  class="tour-edit-input" name="distance" value="{$distanz}" type="text" maxlength="70"  /></td>
        <td class="label-tour-edit">Kilometer</td>
    </tr>
    <tr>
        <td class="label">Fahrzeit:</td>
        <td>
        <select style="width:90px; background-color:#f8fcff;"" class="addtour-timeinput-hours" name="Time_Hours">                  
                {if isset($stunden) AND $stunden != ''} 
                        <option value="{$stunden}" selected>{$stunden}</option>
                {else}
                        <option value="" selected>Stunden</option>	
                {/if}                                                  
                {section name=i loop=12}
                     <option value="{$smarty.section.i.index}">{$smarty.section.i.index}</option>
                {/section}		
        </select>     
        <select style="width:90px; background-color:#f8fcff;"" class="addtour-timeinput-minutes" name="Time_Minutes"> 
                
                
                {if isset($minuten) AND $minuten != ''} 
                        <option value="{$minuten}" selected>{$minuten}</option>
                {else}
                        <option value="" selected>Minuten</option>
                {/if}	
                {section name=i loop=60}{
                     <option value="{$smarty.section.i.index}">{$smarty.section.i.index}</option>
                {/section}	
        </select> 
         <select style="width:90px; background-color:#f8fcff;"" class="addtour-timeinput-minutes" name="Time_Seconds"> 
            
            
                {if isset($sekunden) AND $sekunden != ''} 
                        <option value="{$sekunden}" selected>{$sekunden}</option>
                {else}
                        <option value="" selected>Sekunden</option>
                {/if}	
                {section name=i loop=60}{
                     <option value="{$smarty.section.i.index}">{$smarty.section.i.index}</option>
                {/section}	
        </select> 
        </td>
    </tr>
    <tr>
        <td class="label">Durchschnittliche Trittfrequenz:</td>
        <td><input class="tour-edit-input" name="average-cadence" value="{$trittfrequenz}" type="text" maxlength="70"  /></td>
        <td class="label-tour-edit">rpm</td>
    </tr>
    <tr>
        <td class="label">Durchschnittliche Herzfrequenz:</td>
        <td><input class="tour-edit-input" name="herzfrequenz" value="{$herzfrequenz}" type="text" maxlength="70"  /></td>
        <td class="label-tour-edit">bpm</td>
    </tr>
    <tr>
        <td class="label">Höhenunterschied:</td>
        <td><input  class="tour-edit-input" name="elevator-difference" value="{$hoehenmeter}" type="text" maxlength="70"  /></td>
        <td class="label-tour-edit">m</td>
    </tr>
    <tr>
        <td class="label">zusätzliche Tourinformationen:</td>
        <td><textarea name="other-information" style="margin-left:-1px;height:100px;" type="text" rows="10" cols="35" >{$info}</textarea></td>
    </tr>
    <tr>
        <td class="label-input-addtrack">Aktivitätstyp:</td>
        <td>
            <select style="width:280px;height:40px;background-color:#f8fcff;" name="activity_type">
            	<option style="padding:11px 33px;" value="{$typ}">{$typ}</option>
                <option style="padding:11px 33px;background-image:images/icon-radfahren.png;" value="radfahren">Radfahren</option>
                <option style="padding:11px 33px;background-image:images/icon-laufen.png;" value="laufen">Laufen</option>
            </select>
        </td>
   </tr>
</table>
<br /><br />
<input style="margin-left:500px;" type="submit" name="submit" value="Tourdaten aktualisieren" />
<br /><br />
<p class="text-content" style="text-align:center;"><a href="tours.php">Hier</a> gelangen Sie wieder zurück zur Tourenübersicht.</p>

<input type="hidden" name="tourID" value="{$id}" />


</form>

{/if}
				
                
{include file="01_tpl/footer.tpl"}