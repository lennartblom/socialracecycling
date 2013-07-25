{include file="01_tpl/header.tpl"}

<!-- Content -->
<ul>
{if $teamID eq 0}
    <li><a href="usercp-team-list.php">Teams durchstöbern</a></li>
    <li><a href="usercp-team-new.php">Eigenes Team erstellen</a></li>
{else}
    <li><a href="usercp-team-view.php?id={$teamID}">Öffentliche Teamseite</a></li>
    {if $teamLead eq 1}
    	<li><a href="usercp-team-settings.php">Interne Teamseite</a></li>
    {else if $teamLead eq 2}
    	<li><a href="usercp-team-settings.php">Adminpanel</a></li>
    {/if}
    <li><a href="usercp-team-list.php">Teams durchstöbern</a></li>
{/if}
</ul>
        
{include file="01_tpl/footer.tpl"}