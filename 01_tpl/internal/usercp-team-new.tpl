{include file="01_tpl/header.tpl"}

<h6>Teams</h6>

<h5>Erstelle dein eigenes Team</h5>


 
    <form action="" method="POST" enctype="multipart/form-data">

{if isset($errors)}
    {foreach from=$errors item=error}
    	{$error}
    {/foreach}
{/if}

<table>
    <tr>
        <td class="profil-column">Teamname</td>
        <td><input name="team_name" class="profile-normalinput"  value="{$team_name}" /></td>
    </tr>
    <tr>
        <td class="profil-column">Teaminformation</td>
        <td><textarea name="team_information"  class="profile-normalinput">{$info}</textarea></td>
    </tr>
    <tr>
        <td class="profil-column">Teamwebsite</td>
        <td><input name="team_website" value="{$website}" class="profile-normalinput"  /></td>
    </tr>
    <tr>
        <td class="profil-column">Teamlogo</td>
        <td><input style="height:25px;padding-top:5px;" type="file" name="team_logo" value=""   /></td>
    </tr>
    
</table>
 <input name="create_team" value="Team erstellen" style="display:block;margin-left:auto;margin-right:auto;margin-top:50px;" type="submit" />

{include file="01_tpl/footer.tpl"}