<?php /* Smarty version Smarty-3.1.8, created on 2012-03-12 19:07:32
         compiled from "tpl/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18093639794f5de0a8192d29-51297778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b6a19f50fb121d47bb605fec354ab36b6681eb5' => 
    array (
      0 => 'tpl/footer.tpl',
      1 => 1331579251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18093639794f5de0a8192d29-51297778',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5de0a819bff2_66747119',
  'variables' => 
  array (
    'footer' => 0,
    'name' => 0,
    'lastname' => 0,
    'tooltip_kilometertotal' => 0,
    'tooltip_lasttour' => 0,
    'tooltip_weekkilometer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5de0a819bff2_66747119')) {function content_4f5de0a819bff2_66747119($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

</div>
<div id="content-bottompart"></div>
<div id="container-middlepart">
<div id="footer"> 
       	<form action="login.php" name="login" method="post">
            <table cellpadding="0" cellspacing="0" id="footer-area">
            	<tr>
                	<td valign="top" id="lennart-blom">
                        <br /><h1 class="footer-headline">Programmiert und Umgesetzt von:</h1>
                        <a id="programing-by" target="_new" href="http://www.lennart-blom.de/"></a>
                    </td>
                    <td  class="trenner"></td>
                    <td valign="top" id="follow">
                    	<br /><h1 class="footer-headline">Folgen Sie dem Projekt auf...</h1>
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
                                        <p class="title-text">gesamt Kilometer:</p>
                                    </td>
                                    <td class="numbers">
                                            <p class="gesamtkm-text"><?php echo $_smarty_tpl->tpl_vars['tooltip_kilometertotal']->value;?>
km</p>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="title">
                                        <p class="title-text">letzte Tour war am:</p>
                                    </td>
                                    <td valign="top" style="padding-top:4px;" class="numbers">
                                        <p class="otherinformation"><?php echo $_smarty_tpl->tpl_vars['tooltip_lasttour']->value;?>
</p>
                                    </td> 
                                </tr>
                                
                                <tr>
                                    <td class="title">
                                        <p class="title-text">Kilometer in dieser Woche:</p>
                                    </td>
                                    <td class="numbers">
                                        <p class="otherinformation"><?php echo $_smarty_tpl->tpl_vars['tooltip_weekkilometer']->value;?>
 km</p>
                                    </td>
                                </tr>
                              </table> 
                              </div>
                      </a></h1>
                      <div id="tooltipContainer">...</div>
                      <hr id="logout-trenner" />
                      <a href="usercp.php" class="logout-link">Kontrollzentrum</a>
                      <a href="profile.php" class="logout-link">Profil bearbeiten</a>
                      <a href="logout.php" class="logout-link">Abmelden</a>
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