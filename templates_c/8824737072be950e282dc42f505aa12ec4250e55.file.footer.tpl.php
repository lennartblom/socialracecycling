<?php /* Smarty version Smarty-3.1.8, created on 2012-04-03 11:56:20
         compiled from "01_tpl/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:639773024f6a3cf5b498f9-34647991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8824737072be950e282dc42f505aa12ec4250e55' => 
    array (
      0 => '01_tpl/footer.tpl',
      1 => 1333454150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '639773024f6a3cf5b498f9-34647991',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f6a3cf5b8a925_42873388',
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6a3cf5b8a925_42873388')) {function content_4f6a3cf5b8a925_42873388($_smarty_tpl) {?><div class="clearing"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['usercp']->value==true){?>

</div>
</div>
    <div class="clearing"></div>
<div id="usercp-background-bottom"></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['title']->value=='Informationen'||$_smarty_tpl->tpl_vars['online']->value==true){?>                 
	
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
                   <?php if ($_smarty_tpl->tpl_vars['online']->value==true){?>  
                        &nbsp;
                        <br />
                        <h1 class="footer-headline"><a href="#" class="tooltipLink">
                        
                        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<br />
                        <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>

                        
                        <div class="toolTipContent">        
                            <h2 id="hovercard"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
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
                      <div id="tooltipContainer">...</div>
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