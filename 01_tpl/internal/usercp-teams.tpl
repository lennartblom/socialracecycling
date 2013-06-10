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

  
    
    
<hr />
<br /><br /><br /><br />
<h6>Teams</h6>

<h5>Du bist bereits Teammitglied vom <a href="team-dashboard.php"><em>Team Coffeeride</em></a>!</h5>


<p class="about-text-new" style="text-align:center;">Möchtest du ein paar Impressionen des Teams für die Teamseite erstellen?<br />
Hier kannst du ein Bild vom Training oder Veranstaltungen hochladen</p>
<table>
    <tr>
        <td class="profil-column">Teamimpression</td>
        <td><input style="height:25px;padding-top:5px;" type="file" name="team_image" value=""   /></td>
    </tr>
     <tr>
        <td class="profil-column">Titel oder Bildbeschreibung</td>
        <td><input name="image_title" class="profile-normalinput"  value="" /></td>
    </tr>
</table>


    <input name="create_team" value="Bild für die Teamseite abschicken" style="display:block;margin-left:auto;margin-right:auto;margin-top:50px;" type="submit" />



<hr />
<br /><br /><br /><br />





{include file="01_tpl/footer.tpl"}