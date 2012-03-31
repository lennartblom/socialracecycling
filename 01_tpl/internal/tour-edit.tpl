{include file="01_tpl/header.tpl"}
								
<h3>bearbeiten | Tour</h3>


{if isset($error)}
    <div style="margin-left:auto;margin-right:auto;margin-bottom:20px;padding:8px;" id="errorbox-red">
            <p style="font-family:arial;font-size:13px;color:#ff0000;font-weight:bold;margin-top:0px;margin-bottom:5px;">{$error}</p>
            <p style="font-family:arial;font-size:14px;color:red;font-weight:bold;"><a href="tours.php">Hier</a> geht es wieder zurück zur der Tourenübersicht.</p>
    </div>
{else}

<form action="edit-tour.php" method="post" name="edit-tour">
<table style="margin-left:50px;">
    <tr>
        <td class="label">Datum:</td>
        <td><input  class="tour-edit-input" name="date" value="{$datum}" type="text" maxlength="70"  /></td>
        <td class="label-tour-edit">Jahr-Monat-Tag</td>
    </tr>
    <tr>
        <td class="label">Distanz:</td>
        <td><input  class="tour-edit-input" name="distance" value="{$distanz}" type="text" maxlength="70"  /></td>
        <td class="label-tour-edit">Kilometer</td>
    </tr>
    <tr>
        <td class="label">Fahrzeit:</td>
        <td><input  class="tour-edit-input" name="duration" value="{$dauer}" type="text" maxlength="70"  /></td>
        <td class="label-tour-edit">Stunden</td>
    </tr>
    <tr>
        <td class="label">Durschnittsgeschwindigkeit:</td>
        <td><input class="tour-edit-input" name="average-speed" value="{$durchschnitt}" type="text" maxlength="70"  /></td>
        <td class="label-tour-edit">km/h</td>
    </tr>
    <tr>
        <td class="label">Durchschnittliche Trittfrequenz:</td>
        <td><input class="tour-edit-input" name="average-cadence" value="{$trittfrequenz}" type="text" maxlength="70"  /></td>
        <td class="label-tour-edit">U/min.</td>
    </tr>
    <tr>
        <td class="label">Höhenunterschied:</td>
        <td><input  class="tour-edit-input" name="elevator-difference" value="{$hoehenmeter}" type="text" maxlength="70"  /></td>
        <td class="label-tour-edit">Meter</td>
    </tr>
    <tr>
        <td class="label">zusätzliche Tourinformationen:</td>
        <td><textarea class="tour-input" style="margin-left:-1px;" name="other-information" type="text" rows="10" cols="26" >{$info}</textarea></td>
    </tr>
</table>

<input style="margin-left:50px;" type="submit" name="submit" value="Tourdaten aktualisieren" />

<p class="text-content"><a href="tours.php">Hier</a> gelangen Sie wieder zurück zur Tourenübersicht.</p>

<input type="hidden" name="tourID" value="{$id}" />


</form>

{/if}
				
                
{include file="01_tpl/footer.tpl"}