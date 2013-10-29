<?php /* Smarty version Smarty-3.1.8, created on 2013-10-29 09:28:36
         compiled from "01_tpl/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11035082704f8186b4a37c91-23099780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8824737072be950e282dc42f505aa12ec4250e55' => 
    array (
      0 => '01_tpl/footer.tpl',
      1 => 1383038613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11035082704f8186b4a37c91-23099780',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f8186b4ab8125_43903191',
  'variables' => 
  array (
    'usercp' => 0,
    'title' => 0,
    'online' => 0,
    'name' => 0,
    'lastname' => 0,
    'tooltip_kilometertotal' => 0,
    'tooltip_monthkilometer' => 0,
    'tooltip_lasttour' => 0,
    'curUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8186b4ab8125_43903191')) {function content_4f8186b4ab8125_43903191($_smarty_tpl) {?><div class="clearing"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['usercp']->value==true){?>

<div class="clearing"></div>
</div>
</div>
    <div class="clearing"></div>
<div id="usercp-background-bottom"></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['title']->value=='Team Dashboard'||$_smarty_tpl->tpl_vars['title']->value=='Informationen'||$_smarty_tpl->tpl_vars['online']->value==true){?>                 
	
        <?php if ($_smarty_tpl->tpl_vars['usercp']->value==false){?>
        <div id="content-bottompart"></div>
        <div id="container-middlepart">
       	<?php }?>
        <div id="footer"> 
<?php }elseif($_smarty_tpl->tpl_vars['title']->value!='Information'||$_smarty_tpl->tpl_vars['online']->value!=true){?>
	
		</div>
        <div id="footer"> 
<?php }?>  
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
                   <?php if ($_smarty_tpl->tpl_vars['online']->value==true){?>  
                        &nbsp;
                        <br />
                        <h1 class="footer-headline"><a href="#" class="tooltipLink">
                        
                        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<br />
                        <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>

                        
                        <div class="toolTipContent">        
                            <h2 class="hovercard"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
</h2>   
                              <table cellpadding="0" cellspacing="0" border="1" id="information">
                                <tr>
                                    <td class="title">
                                        <p class="title-text">Kilometer in diesem Jahr:</p>
                                    </td>
                                    <td class="numbers">
                                            <p class="gesamtkm-text"><?php echo $_smarty_tpl->tpl_vars['tooltip_kilometertotal']->value;?>
km</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="title">
                                        <p class="title-text">Kilometer in diesem Monat:</p>
                                    </td>
                                    <td class="numbers">
                                        <p class="otherinformation"><?php echo $_smarty_tpl->tpl_vars['tooltip_monthkilometer']->value;?>
 km</p>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="title">
                                        <p class="title-text">Deine letzte Aktivität war am:</p>
                                    </td>
                                    <td style="padding-top:4px;" valign="top" class="numbers">
                                        <p class="otherinformation"><?php echo $_smarty_tpl->tpl_vars['tooltip_lasttour']->value;?>
</p>
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
                     
                     <a href="#" class="tooltipLinknotif" id="class-trigger">
					                  
						<script>		
							function callNotifCounter(){
								var ID = <?php echo $_smarty_tpl->tpl_vars['curUser']->value;?>
;
								$.ajax({
									url: "../notif_counter.php",
									data: "user="+ID,
									success: function(data){
												$("#notification-box").html(data);
												if(data=='0'){
													$("#class-trigger").removeClass('tooltipLinknotif').addClass('tooltipLinknotif-none');
												}else{
													$("#class-trigger").removeClass('tooltipLinknotif-none').addClass('tooltipLinknotif');
													$("#notif-counter").html(data);
												}
											}		
								});	
							}
							var timer_counter = window.setInterval(callNotifCounter,5000);
							callNotifCounter();
						</script>

                        <span id="notif-counter">
							<!-- AJAX -->
                        </span>
                        
						<script>		
							function callNotifDisplay(){
								var ID = <?php echo $_smarty_tpl->tpl_vars['curUser']->value;?>
;
								var link = document.URL;
								$.ajax({
									url: "../notif_display.php",
									data: "user="+ID+"&url="+link,
									success: function(data){
												$("#notification-overview").html(data);
												$(".notifTooltipContainer").html($($(tooltipElement).children(".toolTipContent")[0]).html());
											}
								});
							}
							var timer_display= window.setInterval(callNotifDisplay,5000);
							callNotifDisplay();
						</script>
						
                        <div class="toolTipContent">        
                           <h2 class="hovercard"><span id="notification-box"><!-- AJAX --></span> Benachrichtigung(en)</h2>
                            <div id="notification-overview">
                            	<!-- AJAX -->
                            </div>
                        </div>
                      </a></h1>
                      
                      <div class="tooltipContainer"><!-- jQUERY --></div>
                      <div class="notifTooltipContainer"><!-- jQUERY --></div>
                      
                      <hr id="logout-trenner" />
                      <a href="usercp.php" class="logout-link">Kontrollzentrum</a>
                      <a href="usercp-edit-profile.php" class="logout-link">Profil bearbeiten</a>
                      <a href="logout.php" class="logout-link">Abmelden</a>
                      
                  <?php }elseif($_smarty_tpl->tpl_vars['online']->value==false){?>
                
                   <br /><h1 class="footer-headline">Login</h1>
					
                    <input maxlength="70" name="log_email" value="e-Mail Adresse" type="text"  class="login-input" onFocus="if(this.value=='e-Mail Adresse') this.value=''"  />
                    <input maxlength="32" name="log_password" type="password" value="password" class="login-input" onFocus="if(this.value=='password') this.value=''"    />
                    <input id="login-button" name="log_submit" value="Login" type="submit"  /><br />
                    <a href="forgot-password.php" style="font-size:12px;margin-top:0px;margin-left:8px;">Passwort vergessen?</a>
                    <a href="images/testaccount.jpg" title="Testaccount für Social Race Cycling" rel="lightbox" style="font-size:12px;margin-top:0px;margin-left:8px;">Testaccount benötigt?</a>
                    <br />
                 
                  <?php }?>
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
</html><?php }} ?>