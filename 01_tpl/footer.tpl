<div class="clearing"></div>
</div>

{if $usercp eq true}

</div>
</div>
    <div class="clearing"></div>
<div id="usercp-background-bottom"></div>
{/if}

{if $title == Informationen OR $online eq true}                 
	
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
                        <br /><h1 class="footer-headline">Programmiert und Umgesetzt von:</h1>
                        <a id="programing-by" target="_new" href="http://www.lennart-blom.de/"></a>
                    </td>
                    <td  class="trenner"></td>
                    <td valign="top" id="follow">
                    	<br /><h1 class="footer-headline">Folge dem Projekt auf...</h1>
                    	<a href="http://www.facebook.com/pages/Social-Race-Cycling/272409636107609" target="_new" class="followme-facebook"></a>  
                        <a href="http://twitter.com/#!/socracecycling" target="_new" id="followme-twitter"></a>
                        <p id="follow-us">und</p>
						 <div id="fb-root"></div>
						 <script src="http://connect.facebook.net/en_US/all.js#appId=252977761400658&amp;xfbml=1"></script>
                         <div style="margin-left:50px;margin-top:35px;">
                         	<fb:like href="http://www.facebook.com/pages/Social-Race-Cycling/272409636107609" send="false" width="350" show_faces="false" action="like" font="segoe ui"></fb:like>
                         </div>
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
                            <h2 id="hovercard">{$name} {$lastname}</h2>   
                              <table cellpadding="0" cellspacing="0" border="1" id="information">
                                <tr>
                                    <td class="title">
                                        <p class="title-text">gesamt Kilometer:</p>
                                    </td>
                                    <td class="numbers">
                                            <p class="gesamtkm-text">{$tooltip_kilometertotal}km</p>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="title">
                                        <p class="title-text">letzte Tour war am:</p>
                                    </td>
                                    <td valign="top" style="padding-top:4px;" class="numbers">
                                        <p class="otherinformation">{$tooltip_lasttour}</p>
                                    </td> 
                                </tr>
                                
                                <tr>
                                    <td class="title">
                                        <p class="title-text">Kilometer in dieser Woche:</p>
                                    </td>
                                    <td class="numbers">
                                        <p class="otherinformation">{$tooltip_weekkilometer} km</p>
                                    </td>
                                </tr>
                              </table> 
                        </div>
                      </a></h1>
                      <div id="tooltipContainer">...</div>
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