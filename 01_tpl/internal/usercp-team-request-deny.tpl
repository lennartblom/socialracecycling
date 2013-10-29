{include file="01_tpl/header.tpl"}

<!-- Content -->
{if $error eq 0}
<h3>Team-Aufnahmeantrag ablehnen</h3>
Füge deiner Absage doch noch eine Begründung hinzu:
<form action="process-notif.php" method="get">
<input style="display:none;" type="text" name="n" value="{$notifID}" />
<input style="display:none;" type="text" name="s" value="dec" />
<input style="display:none;" type="text" name="url" value="{$link}" />
<textarea name="reason" cols="50" rows="10"></textarea>
<input type="submit" value="Absenden" />
</form>
{else}
	Nicht gen&uuml;gend Parameter
{/if}       
 
{include file="01_tpl/footer.tpl"}