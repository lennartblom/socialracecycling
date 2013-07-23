{include file="01_tpl/header.tpl"}

<!-- private team page -->
{if $teamLead eq 2}
<!-- Admin-Links -->
{/if}
<!-- Content -->
<h5>Mitglieder</h5>
{$memberList}
<br/>
<div align="right" style="margin-right:900px; margin-right:auto;"><a href="team_leave.php?user={$userID}&url={$url}">Team verlassen</a></div>
        
{include file="01_tpl/footer.tpl"}