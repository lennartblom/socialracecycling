{include file="01_tpl/header.tpl"}

{if isset($error)}
<div style="margin-left:auto;margin-right:auto;margin-bottom:20px;padding:8px;" id="errorbox-red">
        <p style="font-family:arial;font-size:13px;color:#ff0000;font-weight:bold;margin-top:0px;margin-bottom:5px;">{$error}</p>
</div>
{else}

<h5 style="text-align:left;"><a href="usercp-profile_information.php?UserID={$id}"><img src="images/profile/arrow-left-24.png" height="15px" /></a> <img src="images/profile/user-icon.png" /> <span style="font-weight:300;">Profil von</span> {$vorname} {$nachname} <span style="font-weight:300;font-size:11px;"></span></h5>

<form action="usercp-profile_training.php?id={$id}" method="POST" name="edit_charts">
		<input type="hidden" name="week_change" value="{$week_change}" />
		<input type="hidden" name="month_change" value="{$month_change}" />
		<input type="hidden" name="year_change" value="{$year_change}" />


		<input type="hidden" name="member-choice" value="{$id}" />	
        
    <p class="text-content"><a href="usercp-mitgliederliste.php">Hier</a> gehts zurück zur MItgliederübersicht.</p>
    <a name="oben"></a>	
    <p align="center"><a href="#wochenansicht">Wochen&uuml;bersicht</a> - <a href="#monatsansicht">Monats&uuml;bersicht</a> - <a href="#jahresansicht">Jahres&uuml;bersicht</a></p>
    
    
    <a name="wochenansicht"></a>			
    
    <div id="chart1" style="margin-bottom:90px;margin-left:25px;height:350px; width:580px;"></div>
    <div class="code prettyprint">
    <pre class="code prettyprint brush: js"></pre>
    <p align="center"><a href="#oben">Wieder nach oben &uarr;</a></p>
    </div>
    
    <p style="text-align:center;">
        <input type="submit" value="&larr; Woche zurück" name="plot_change"  />
        <input type="submit" value="aktuelle Woche &darr;" name="plot_change"  />
        <input type="submit" value="Woche vor &rarr;" name="plot_change"  />
    </p>
    
    <a name="monatsansicht"></a>	
    <div id="chart2" style="margin-bottom:90px;margin-left:25px;height:350px; width:580px;"></div>
    <div class="code prettyprint">
    <pre class="code prettyprint brush: js"></pre>
    <p align="center"><a href="#oben">Wieder nach oben &uarr;</a></p>
    </div>
    
    <p style="text-align:center;">
        <input type="submit" value="&larr; Monat zurück" name="plot_change" />
        <input type="submit" value="aktueller Monat &darr;" name="plot_change"  />
        <input type="submit" value="Monat vor &rarr;" name="plot_change" />
    </p>
    
    
    <a name="jahresansicht"></a>	
    <div id="chart3" style="margin-bottom:90px;margin-left:25px;height:350px; width:580px;"></div>
    <div class="code prettyprint">
    <pre class="code prettyprint brush: js"></pre>
    <p align="center"><a href="#oben">Wieder nach oben &uarr;</a></p>
    </div>
    
    <p style="text-align:center;">
        <input type="submit" value="&larr; Jahr zurück" name="plot_change"  />
        <input type="submit" value="aktuelles Jahr &darr;" name="plot_change"  />
        <input type="submit" value="Jahr vor &rarr;" name="plot_change"  />
    </p>	



</form>


{/if}


{include file="01_tpl/footer.tpl"}