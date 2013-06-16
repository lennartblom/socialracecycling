<div class="clearing"></div>
</div>

{if $usercp eq true}

<div class="clearing"></div>
</div>
</div>
    <div class="clearing"></div>
<div id="usercp-background-bottom"></div>
{/if}

{if $title == 'Team Dashboard' OR $title == 'Informationen' OR $online eq true}                 
	
        {if $usercp eq false}
        <div id="content-bottompart"></div>
        <div id="container-middlepart">
       	{/if}
        <div id="footer"> 
{elseif $title != Information OR $online != true}
	
		</div>
        <div id="footer"> 
{/if}  
       	<form action="login.php" name="login" method="post">
            <table cellpadding="0" cellspacing="0" id="footer-area">
            	<tr>
                	<td valign="top" id="lennart-blom">
                        
                        <table cellpadding="0" cellspacing="0">
                        	<tr>
                            	<td><br />
									<h1 style="font-size:13px;margin-bottom:-5px;" class="footer-headline">Infos zum <br />
															Entwickler</h1></td>
                                <td></td>
                                <td><br />
									<h1 style="margin-bottom:-5px;" class="footer-headline">Unterstützt von</h1></td>
                            </tr>
                            <tr>
                            	<td><a target="new" title="Meine persönliche Internetpräsenz" style="display:block;text-align:center;" href="http://lennart-blom.de/"><img src="images/icons/lennart-blom-logo.png" /></a></td>
                                <td style="border-right:thin dashed #aeaeae;"></td>
                                <td><a target="new" title="Internetpräsenz von Radsport Homann" href="http://radsport-homann.de/"><img src="images/icons/radsport-homann.png" /></a></td>
                            </tr>
                            <tr>
                            	<td><a title="Mein persönlicher Fotoblog" style="display:block;text-align:center;" href="http://fotoblog.lennart-blom.de/"><img src="images/icons/lbfotoblog-logo.png" /></a></td>
                                <td style="border-right:thin dashed #aeaeae;"></td>
                                <td><a target="new" title="Internetpräsenz von Roberts Radstudio" href="http://roberts-radstudio.de/"><img src="images/icons/roberts-radstudio.png" /></a></td>
                            </tr>
                        </table>
                    </td>
                    <td  class="trenner"></td>
                    <td valign="top" id="follow">
                    	<br /><h1 class="footer-headline">Nützliche Links von Social Race Cycling</h1>
                    	<table style="margin-left:12px;">
                        	<tr>
                            	<td rowspan="3"><img title="Social Race Cycling | Logo" height="100px" src="images/logo.jpg" /></td>
                                <td class="link-title">Facebook</td>
                                <td class="link-title">Twitter</td>
                                <td class="link-title">Kontakt*</td>
                            </tr>
                            <tr>
                                <td class="link-title"><a title="Facebookseite von Social Race Cycling" target="new" href="https://www.facebook.com/SocialRaceCycling"><img src="images/icons/facebook.png" /></a></td>
                                <td class="link-title"><a title="Twitterseite von Social Race Cycling" target="new" href="https://twitter.com/socracecycling"><img src="images/icons/twitter.v2.png" /></a></td>
                                <td class="link-title"><a title="Kontaktinformationen" target="new" href="http://www.lennart-blom.de/kontaktinformationen/"><img src="images/icons/mail.v2.png" /></a></td>
                            	
                            </tr>
                            <tr>
                            	<td class="link-notice" colspan="3">
                                	*externer Verweis zur Kontaktseite meiner persönlichen Website www.lennart-blom.de
                                </td>
                            </tr>
                        </table>
                   </td>
                   <td class="trenner"></td>
	              <td valign="top" id="login">
                   {if $online eq true}  
                        &nbsp;
                        <br />
                        <h1 class="footer-headline"><a href="#" class="tooltipLink">
                        
                        {$name}<br />
                        {$lastname}
                        
                        <div class="toolTipContent">        
                            <h2 class="hovercard">{$name} {$lastname}</h2>   
                              <table cellpadding="0" cellspacing="0" border="1" id="information">
                                <tr>
                                    <td class="title">
                                        <p class="title-text">Kilometer in diesem Jahr:</p>
                                    </td>
                                    <td class="numbers">
                                            <p class="gesamtkm-text">{$tooltip_kilometertotal}km</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="title">
                                        <p class="title-text">Kilometer in diesem Monat:</p>
                                    </td>
                                    <td class="numbers">
                                        <p class="otherinformation">{$tooltip_monthkilometer} km</p>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="title">
                                        <p class="title-text">Deine letzte Aktivität war am:</p>
                                    </td>
                                    <td style="padding-top:4px;" valign="top" class="numbers">
                                        <p class="otherinformation">{$tooltip_lasttour}</p>
                                    </td> 
                                </tr>
                              </table> 
                        </div>
                      </a></h1>
                      
                      
                      <h1 class="footer-headline">
                      <!--
                      
                      ±±±±±± keine Benachrichtitungen ±±±±±±
                      
                      <a href="#" class="tooltipLinknotif-none">
                      	
                        <span id="notif-counter">
                         
                        </span>
                        
                     -->
                     
                     <a href="#" class="tooltipLinknotif">
                      
                        <span id="notif-counter">
                         25
                        </span>
                        
                        <div class="toolTipContent">        
                           <h2 class="hovercard"><span id="notification-box">25</span> Benachrichtigung(en)</h2>
                            <div id="notification-overview">
                            	<div class="notification-element">
                                	<p><img src="images/notifications/new-activity.png" /> <span class="bold">Lennart Blom</span> hat irgendeine Mistaktivität eingetragen </p>
                                </div>
                                <div class="notification-element">
                                	<p><img src="images/notifications/team-invite.png" /> <span class="bold">Lennart Blom</span> hat dich zum <span class="bold">Team Coffeeride</span> eingeladen</p>
                                    
                                    <ul id="notification-confirm">
                                    	<li><img src="images/notifications/confirm.png" /> annehmen</li>
                                        <li><img src="images/notifications/decline.png" /> ablehnen</li>
                                    </ul>
                                </div>
                                <div class="notification-element">
                                	<p>Digga du hast eine Benachrichtitung</p>
                                </div>
                                <div class="notification-element">
                                	<p>Digga du hast eine Benachrichtitung</p>
                                </div>
                            </div>
                        </div>
                      </a></h1>
                      <div class="tooltipContainer">...</div>
                      
                      <hr id="logout-trenner" />
                      <a href="usercp.php" class="logout-link">Kontrollzentrum</a>
                      <a href="usercp-edit-profile.php" class="logout-link">Profil bearbeiten</a>
                      <a href="logout.php" class="logout-link">Abmelden</a>
                      
                  {elseif $online eq false}
                
                   <br /><h1 class="footer-headline">Login</h1>
					
                    <input maxlength="70" name="log_email" value="e-Mail Adresse" type="text"  class="login-input" onFocus="if(this.value=='e-Mail Adresse') this.value=''"  />
                    <input maxlength="32" name="log_password" type="password" value="password" class="login-input" onFocus="if(this.value=='password') this.value=''"    />
                    <input id="login-button" name="log_submit" value="Login" type="submit"  /><br />
                    <a href="forgot-password.php" style="font-size:12px;margin-top:0px;margin-left:8px;">Passwort vergessen?</a>
                    <a href="images/testaccount.jpg" title="Testaccount für Social Race Cycling" rel="lightbox" style="font-size:12px;margin-top:0px;margin-left:8px;">Testaccount benötigt?</a>
                    <br />
                 
                  {/if}
                  </td>
            	</tr>
            </table>
        </form>
        </div>
  		</div>
        
		<div id="container-bottompart">
			<a id="impressum" href="http://www.lennart-blom.de/impressum">Impressum</a>
		</div>
		</div> 
        
        
		<div style="visibility:hidden; background-image:url(http://www.socialracecycling.de/images/navigation/hover/kalender-hover.png);"></div>
		<div style="visibility:hidden; background-image:url(http://www.socialracecycling.de/images/navigation/hover/kontakt-hover.png);"></div>
		<div style="visibility:hidden; background-image:url(http://www.socialracecycling.de/images/navigation/hover/startseite-hover.png);"></div>
		<div style="visibility:hidden; background-image:url(http://www.socialracecycling.de/images/navigation/hover/touren-hover.png);"></div>
		<div style="visibility:hidden; background-image:url(http://www.socialracecycling.de/images/navigation/hover/strecken-hover.png);"></div>
		<div style="visibility:hidden; background-image:url(http://www.socialracecycling.de/images/add-tour-hover.png);"></div>
		<div style="visibility:hidden; background-image:url(http://www.socialracecycling.de/images/edit-tour-hover.png);"></div>
</body>
</html>