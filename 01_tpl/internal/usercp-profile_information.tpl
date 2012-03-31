{include file="01_tpl/header.tpl"}


<h3>Profil von {$vorname} {$nachname}</h3>
<form action="usercp-profile_training.php" method="post">

<a href="usercp-profile_training.php?id={$id}">Trainingsinformationen abrufen</a>

<table style="margin-left:45px;">
            <tr>
                <td>

                <table>
                    <tr>
                        <td class="profil-column">eMail:</td>
                        <td><input  readonly name="profile_email" class="addtour-normalinput" value="{$email}" /></td>
                    </tr>
                </table>
        
        
                </td>
            </tr>
        
        
            <tr>
                <td>
        
        <h2>Name und Adresse</h2>
        <table>
            <tr>
                <td class="profil-column">Vorname:</td>
                <td><input readonly name="profile_name"  class="addtour-normalinput"  value="{$vorname}" /></td>
            </tr>
            <tr>
                <td class="profil-column">Nachname:</td>
                <td><input  readonly name="profile_lastname"  class="addtour-normalinput"  value="{$nachname}" /></td>
            </tr>
            <tr>
                <td class="profil-column">Straße:</td>
                <td><input  readonly name="profile_street" value="{$strasse}" class="addtour-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">PLZ:</td>
                <td><input  readonly name="profile_plz" value="{$plz}" style="width:100px;" /></td>
            </tr>
            <tr>
                <td class="profil-column">Stadt:</td>
                <td><input  readonly name="profile_city" value="{$stadt}" class="addtour-normalinput" /></td>
            </tr>
            <tr>
                <td class="profil-column">Land</td>
                <td><input  readonly name="profile_city" value="{$land}" class="addtour-normalinput" /></td>
            </tr>
        </table>
        
                </td>
            </tr>
        
            <tr>
                <td>
        
        <h2>Weitere Informationen</h2>
        <table>
            <tr>
                <td class="profil-column">Geschlecht:</td>
                <td><input  readonly name="profile_city" value="{$geschlecht}" class="addtour-normalinput" /></td>
            </tr>
            <tr>
                <td  class="profil-column">Geburtstag:</td>
                <td><input  readonly name="profile_email" class="addtour-normalinput" value="{$geburtstag}" /></td>
            </tr>
            <tr>
                <td class="profil-column">Interessen:</td>
                <td><input  readonly name="profile_interests" value="{$interessen}" class="addtour-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">Beruf:</td>
                <td><input  readonly name="profile_job" value="{$beruf}" class="addtour-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">Rennradmodell:</td>
                <td><input  readonly name="profile_bike" value="{$fahrrad}" class="addtour-normalinput"  /></td>
            </tr>
        </table>
        
                </td>
            </tr>
        </table>	
        

</form>


{include file="01_tpl/footer.tpl"}