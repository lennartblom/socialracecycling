{include file="01_tpl/header.tpl"}

<!-- Content -->
<form method="get" action="team_promote.php">
<input type="text" style="display:none;" name="user" value="{$User}" />
<input type="text" style="display:none;" name="url" value="{$Link}" />
<select name="promo" style="width:200px;">
{$options}
</select>
<br/>
<input type="submit" value="Für Team-Leitung auswählen" style="width:200px;">
</form>
        
{include file="01_tpl/footer.tpl"}