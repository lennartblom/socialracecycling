{include file="01_tpl/header.tpl"}
 <form action="".$_SERVER['PHP_SELF']."" method="POST" name="edit_charts">
		<input type="hidden" name="year_change" value="{$year_change}">
			
<div style="box-shadow:0px 0px 25px #333;margin-right:25px;background-image:url({$team_logo});float:right;height:200px;width:200px;">
<div class="about-text-new" style="margin-top:165px;box-shadow:0px 0px 5px #333;opacity:0.5;text-align:center;height:20px;width:200px;background-color:black;color:#fff;">{$team_name}</div>
</div>								
<h5 style="text-align:left;"><!--<img src="images/profile/arrow-left-24.png" height="15px" />--> <img src="images/profile/user-icon.png" /> <span style="font-weight:300;">Profil von</span> {$team_name}</h5>

<div style="float:left;width:400px;height:225px;">
<h3 style="float:left;margin-top:10px;margin-left:0px;height:25px;width:400px;font-size:16px;"><img src="images/profile/chart.png" /> Aktivitätsdiagramm</h3>
<p style="text-align:center;">
<input type="submit" value="&larr; Jahr zurück" name="plot_change"  />
                        <input type="submit" value="aktuelles Jahr &darr;" name="plot_change"  />
                        <input type="submit" value="Jahr vor &rarr;" name="plot_change"  /></p>
<div id="chart1" style="height:165px; width:400px;margin-left:15px;"></div>
    <div class="code prettyprint">
    <pre class="code prettyprint brush: js"></pre>
</div>

<!--
<div style="width:400px;float:left;height:155px;background-image:url(images/profile/chart-preview.jpg);background-repeat:no-repeat;">
<p class="about-text-new" style="text-align:center;text-shadow:0px 0px 25px #333;"><br />
<br />
<img src="images/profile/lock-closed.png" /> {$name} {$lastname} teilt seine Aktivitätsdiagramm <img src="images/profile/lock-closed.png" /><br />
<img src="images/profile/lock-closed.png" /> nicht mit anderen Mitgliedern <img src="images/profile/lock-closed.png" /> </p>

</div>-->

</div>




<div style="float:left;width:325px;height:200px;">
<h3 style="float:left;margin-top:10px;margin-left:0px;width:330px;font-size:16px;"><img src="images/profile/info-icon.png" height="16px" /> Teaminformationen</h3>
<table>
	<tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;" class="about-text-new" >Team-Leitung</td>
    	<td class="about-text-new" >{$team_lead}</td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;" class="about-text-new" >Erstellt am</td>
    	<td class="about-text-new" >{$team_create}</td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;" class="about-text-new" >Beschreibung</td>
    	<td class="about-text-new" >{$team_info}</td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;" class="about-text-new" >Website</td>
    	<td class="about-text-new" >{$team_website}</td>
    </tr>
</table>
</div>

<div style="float:right;height:200px;width:225px;">
<h3 style="float:left;margin-top:10px;margin-left:0px;width:190px;font-size:16px;"><img src="images/profile/clipboard-report-bar-24.png" height="16px" /> Trainingsdaten <!--{$current_year}--></h3>
<!--<table>
	<tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;padding-right:10px;border-right:thin #565656 solid;" class="about-text-new" >gesamt Trainingszeit </td>
    	<td class="about-text-new" >{$charts_yearduration}<span style="font-size:12px">hh:mm:ss</span></td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;padding-right:10px;border-right:thin #565656 solid;" class="about-text-new" >gesamt Kilometer</td>
    	<td class="about-text-new" >{$charts_yearkilometer}km</td>
    </tr>
    <tr>
    	<td valign="top" style="text-align:right;font-weight:bold;font-size:14px;padding-right:10px;border-right:thin #565656 solid;" class="about-text-new" >gesamt Höhenmeter</td>
    	<td class="about-text-new" >{$charts_yearelevation}m</td>
    </tr>
</table>-->
[...]
</div>





<div style="width:650px;height:auto;float:left;">

<h3 style="margin-left:0px;font-size:16px;width:600px;height:20px;"><img src="images/profile/activity-log.png" /> Aktivitätstagebuch - die letzten 5 Aktivitäten</h3>
[...]
<!--
 {foreach from=$touren item=tour}
        
        {$tour}
 
 {/foreach}
 -->
 <!--
<div class="activities-top"></div>
            <div class="activities-middle">
            
           	<span style="font-family: Journal;color:#3378c5;font-size: 25px;margin-left:25px;">
            <img src="http://localhost/socialracecycling/images/icon-radfahren.png" title="Radfahren" />
            28.05.2013 | von {$name} {$lastname}</span>
            
            <img style="float:right;margin-right:10px;padding-top:25px;" src="images/profile/bike.png" />
            
            <p style="margin:0px;margin-left:25px;"class="about-text-new">
            <span style="font-weight:bold;">Distanz:</span> 231,43km | 
            <span style="font-weight:bold;">Ø Geschwindigkeit</span>  27.7 km/h </p>
            
            <span style="font-size:10px;margin-left:25px;">vor 3 Tagen </span>
            </div>      
        <div class="activities-bottom"><img src="http://socialracecycling.de/images/favicon.jpg" height="18" style="margin-right:5px;padding-top:8px;float:right;"></div>
        
        
<div class="activities-top"></div>
            <div class="activities-middle">
            
            <p class="about-text-new" style="text-align:center;margin:0px;"><br />
<br />
<img src="images/profile/lock-closed.png" /> {$name} {$lastname} teilt letzten Aktivitäten <img src="images/profile/lock-closed.png" /><br />
<img src="images/profile/lock-closed.png" /> nicht mit anderen Mitgliedern <img src="images/profile/lock-closed.png" /> </p>

           	
            </div>      
        <div class="activities-bottom"><img src="http://socialracecycling.de/images/favicon.jpg" height="18" style="margin-right:5px;padding-top:8px;float:right;"></div>
-->
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