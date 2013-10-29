{include file="01_tpl/header.tpl"}

<!-- private team page -->
{if $teamLead eq 2}
<!-- Admin-Links -->
{/if}
<!-- Content -->
<h5>Weitere Mitglieder ({$memberCount})</h5>
{$memberList}
<br/>
<div align="right" style="margin-right:900px; margin-right:auto;"><a onclick="return userConfirm(this);" href="team_leave.php?user={$userID}&url=home.php">Team verlassen</a></div>
     
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