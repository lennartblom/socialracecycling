{include file="01_tpl/header.tpl"}
<h3>Team-Leitung</h3>
Da du die momentane Team-Leitung bist, musst du diese an ein von dir ausgewähltes Team-Mitglied abgeben, bevor du das Team verlassen kannst.
<br/><br/><br/>
<form onsubmit="return userConfirm(this);" method="get" action="team_promote.php">
<input type="text" style="display:none;" name="user" value="{$User}" />
<input type="text" style="display:none;" name="url" value="{$Link}" />
<input type="text" style="display:none;" name="leave" value="1" />
<select name="promo" style="width:200px;">
{$Options}
</select>
<br/>
<input type="submit" value="Für Team-Leitung auswählen" style="width:200px;">
</form>
 
<script>
	function userConfirm(theForm){
		Check = confirm("Willst du das wirklich?");
		if(Check == false){
			return false;
		}else{
			return true;
		}
	}
</script>
        
{include file="01_tpl/footer.tpl"}