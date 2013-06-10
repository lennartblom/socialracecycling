{include file="01_tpl/header.tpl"}
 <form action="".$_SERVER['PHP_SELF']."" method="POST" name="edit_charts">
		<input type="hidden" name="year_change" value="{$year_change}">
			
<div style="box-shadow:0px 0px 25px #333;margin-right:25px;background-image:url(images/profile/profileimage-default.jpg);float:right;height:200px;width:200px;">
<div class="about-text-new" style="margin-top:165px;box-shadow:0px 0px 5px #333;opacity:0.5;text-align:center;height:20px;width:200px;background-color:black;color:#fff;">{$profile_name} {$profile_lastname}</div>
</div>								
<h5 style="text-align:left;"><a href="usercp-mitgliederliste.php"><img src="images/profile/arrow-left-24.png" height="15px" /></a> <img src="images/profile/user-icon.png" /> <span style="font-weight:300;">Profil von</span> {$profile_name} {$profile_lastname} <span style="font-weight:300;font-size:11px;"><br />
(zuletzt eingeloggt am {$zuletztaktiv})</span></h5>

<div style="float:left;width:400px;height:225px;">
<h3 style="float:left;margin-top:10px;margin-left:0px;height:25px;width:400px;font-size:16px;"><img src="images/profile/chart.png" /> Aktivitätsdiagramm </h3>
<p style="text-align:center;">

{if $activitychart eq 1}

<input type="submit" value="&larr; Jahr zurück" name="plot_change"  />
                        <input type="submit" value="aktuelles Jahr &darr;" name="plot_change"  />
                        <input type="submit" value="Jahr vor &rarr;" name="plot_change"  /></p>
<div id="chart1" style="height:165px; width:400px;margin-left:15px;"></div>
    <div class="code prettyprint">
    <pre class="code prettyprint brush: js"></pre>
</div>

{else if $activitychart eq 2}

<div style="width:400px;float:left;height:155px;background-image:url(images/profile/chart-preview.jpg);background-repeat:no-repeat;">
<p class="about-text-new" style="text-align:center;text-shadow:0px 0px 25px #333;"><br />
<br />
<img src="images/profile/lock-closed.png" /> {$profile_name} {$profile_lastname} teilt sein Aktivitätsdiagramm <img src="images/profile/lock-closed.png" /><br />
<img src="images/profile/lock-closed.png" /> nicht mit anderen Mitgliedern <img src="images/profile/lock-closed.png" /> </p>

</div>

{/if}

</div>




<div style="float:left;width:325px;height:200px;">
<h3 style="float:left;margin-top:10px;margin-left:0px;width:330px;font-size:16px;"><img src="images/profile/info-icon.png" height="16px" /> Benutzerinformationen</h3>
<table>
	<tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;" class="about-text-new" >Geburtdatum</td>
    	<td class="about-text-new" >{if $profileinformation eq 1}{$geburtstag}{else if $profileinformation eq 2}<img src="images/profile/lock-closed.png" />{/if}</td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;" class="about-text-new" >Wohnort</td>
    	<td class="about-text-new" >{if $profileinformation eq 1}{$stadt}{else if $profileinformation eq 2}<img src="images/profile/lock-closed.png" />{/if}</td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;" class="about-text-new" >Interessen</td>
    	<td class="about-text-new" >{if $profileinformation eq 1}{$interessen}{else if $profileinformation eq 2}<img src="images/profile/lock-closed.png" />{/if}</td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;" class="about-text-new" >Beruf</td>
    	<td class="about-text-new" >{if $profileinformation eq 1}{$beruf}{else if $profileinformation eq 2}<img src="images/profile/lock-closed.png" />{/if}</td>
    </tr>
</table>
</div>
<div style="float:right;height:200px;width:250px;">
<h3 style="float:left;margin-top:10px;margin-left:0px;width:225px;font-size:16px;"><img src="images/profile/clipboard-report-bar-24.png" height="16px" /> Trainingsdaten {$current_year} | 

{if $trainingdetails eq 1}
    <a href="usercp-profile_training.php?id={$id}" title="vergleichen"><img height="16px" src="images/profile/clipboard-audit-16.png" /></a>
    
    {else if $trainingdetails eq 2}
    
    <img src="images/profile/lock-closed.png" />
{/if}</h3>
<table>
	<tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;padding-right:10px;border-right:thin #565656 solid;" class="about-text-new" >gesamt Trainingszeit </td>
    	<td class="about-text-new" >
        {if $trainingdetails eq 1}
        
        	{$duration}<span style="font-size:12px">h:m:s</span>
        {else if $trainingdetails eq 2}
        <img src="images/profile/lock-closed.png" />
        {/if}
        
        </td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;padding-right:10px;border-right:thin #565656 solid;" class="about-text-new" >gesamt Kilometer</td>
    	<td class="about-text-new" >
        
        {if $trainingdetails eq 1}{$charts_yearkilometer}km
        {else if $trainingdetails eq 2}<img src="images/profile/lock-closed.png" />
        {/if}
        
        
        </td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;padding-right:10px;border-right:thin #565656 solid;" class="about-text-new" >gesamt Höhenmeter</td>
    	<td class="about-text-new" >
        {if $trainingdetails eq 1}
        	
       		{$charts_yearelevation}m
            
        {else if $trainingdetails eq 2}
        <img src="images/profile/lock-closed.png" />
        {/if}
        
        
        </td>
    </tr>
</table>
</div>



<div style="width:650px;height:auto;float:left;">

<h3 style="margin-left:0px;font-size:16px;width:600px;height:20px;"><img src="images/profile/activity-log.png" /> Aktivitätstagebuch - die letzten 5 Aktivitäten</h3>

 {if $activitylog eq 1}
 {foreach from=$touren item=tour}
        
        {$tour}
 
 {/foreach}
 {elseif $activitylog eq 2}
 <div class="activities-top"></div>
            <div class="activities-middle">
            
            <p class="about-text-new" style="text-align:center;margin:0px;"><br />
<br />
<img src="images/profile/lock-closed.png" /> {$profile_name} {$profile_lastname} teilt letzten Aktivitäten <img src="images/profile/lock-closed.png" /><br />
<img src="images/profile/lock-closed.png" /> nicht mit anderen Mitgliedern <img src="images/profile/lock-closed.png" /> </p>

           	
            </div>      
        <div class="activities-bottom"><img src="http://socialracecycling.de/images/favicon.jpg" height="18" style="margin-right:5px;padding-top:8px;float:right;"></div>
 {/if}
 


        
        


</div>

</form>


<!--
<table style="margin-left:-100px;">
            <tr>
                <td>

                <table>
                    <tr>
                        <td class="profil-column">eMail:</td>
                        <td><input  readonly name="profile_email" class="profile-normalinput" value="{$email}" /></td>
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
                <td><input readonly name="profile_name"  class="profile-normalinput"  value="{$name}" /></td>
            </tr>
            <tr>
                <td class="profil-column">Nachname:</td>
                <td><input  readonly name="profile_lastname"  class="profile-normalinput"  value="{$lastname}" /></td>
            </tr>
            <tr>
                <td class="profil-column">Straße:</td>
                <td><input  readonly name="profile_street" value="{$strasse}" class="profile-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">PLZ:</td>
                <td><input  readonly name="profile_plz" value="{$plz}" class="profile-normalinput" /></td>
            </tr>
            <tr>
                <td class="profil-column">Stadt:</td>
                <td><input  readonly name="profile_city" value="{$stadt}" class="profile-normalinput" /></td>
            </tr>
            <tr>
                <td class="profil-column">Land</td>
                <td><input  readonly name="profile_city" value="{$land}" class="profile-normalinput" /></td>
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
                <td><input readonly name="profile_city" value="{$geschlecht}" class="profile-normalinput" /></td>
            </tr>
            <tr>
                <td  class="profil-column">Geburtstag:</td>
                <td><input readonly name="profile_email" value="{$geburtstag}" class="profile-normalinput" /></td>
            </tr>
            <tr>
                <td class="profil-column">Interessen:</td>
                <td><input  readonly="readonly" name="profile_interests" value="{$interessen}" class="profile-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">Beruf:</td>
                <td><input  readonly name="profile_job" value="{$beruf}" class="profile-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">Rennradmodell:</td>
                <td><input  readonly name="profile_bike" value="{$fahrrad}" class="profile-normalinput"  /></td>
            </tr>
        </table>
        
                </td>
            </tr>
        </table>	
        

</form>-->


{include file="01_tpl/footer.tpl"}


<!--{include file="01_tpl/header.tpl"}


<h3>Profil von {$vorname} {$nachname}</h3>
<form action="usercp-profile_training.php" method="post">

<a href="usercp-profile_training.php?id={$id}">Trainingsinformationen abrufen</a>

<table style="margin-left:-100px;">
            <tr>
                <td>

                <table>
                    <tr>
                        <td class="profil-column">eMail:</td>
                        <td><input  readonly name="profile_email" class="profile-normalinput" value="{$email}" /></td>
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
                <td><input readonly name="profile_name"  class="profile-normalinput"  value="{$vorname}" /></td>
            </tr>
            <tr>
                <td class="profil-column">Nachname:</td>
                <td><input  readonly name="profile_lastname"  class="profile-normalinput"  value="{$nachname}" /></td>
            </tr>
            <tr>
                <td class="profil-column">Straße:</td>
                <td><input  readonly name="profile_street" value="{$strasse}" class="profile-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">PLZ:</td>
                <td><input  readonly name="profile_plz" value="{$plz}" class="profile-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">Stadt:</td>
                <td><input  readonly name="profile_city" value="{$stadt}" class="profile-normalinput" /></td>
            </tr>
            <tr>
                <td class="profil-column">Land</td>
                <td><input  readonly name="profile_city" value="{$land}" class="profile-normalinput" /></td>
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
                <td><input  readonly name="profile_city" value="{$geschlecht}" class="profile-normalinput" /></td>
            </tr>
            <tr>
                <td  class="profil-column">Geburtstag:</td>
                <td><input  readonly name="profile_email" class="profile-normalinput" value="{$geburtstag}" /></td>
            </tr>
            <tr>
                <td class="profil-column">Interessen:</td>
                <td><input  readonly name="profile_interests" value="{$interessen}" class="profile-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">Beruf:</td>
                <td><input  readonly name="profile_job" value="{$beruf}" class="profile-normalinput"  /></td>
            </tr>
            <tr>
                <td class="profil-column">Rennradmodell:</td>
                <td><input  readonly name="profile_bike" value="{$fahrrad}" class="profile-normalinput"  /></td>
            </tr>
        </table>
        
                </td>
            </tr>
        </table>	
        

</form>


{include file="01_tpl/footer.tpl"}-->