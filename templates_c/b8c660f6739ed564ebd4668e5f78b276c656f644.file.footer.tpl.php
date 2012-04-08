<?php /* Smarty version Smarty-3.1.8, created on 2012-03-21 20:28:07
         compiled from "01_tpl/frontpage/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4784616274f5e702bed52c5-45944945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8c660f6739ed564ebd4668e5f78b276c656f644' => 
    array (
      0 => '01_tpl/frontpage/footer.tpl',
      1 => 1332361633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4784616274f5e702bed52c5-45944945',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5e702bed8887_35349208',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5e702bed8887_35349208')) {function content_4f5e702bed8887_35349208($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['title']->value=='Informationen'){?>                 
	</div>
        <div id="content-bottompart"></div>
        <div id="container-middlepart">
       
        <div id="footer"> 
<?php }else{ ?>
	</div>
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
                    <br /><h1 class="footer-headline">Login</h1>
					
                    <input maxlength="70" name="log_email" value="e-Mail Adresse" type="text"  class="login-input" onFocus="if(this.value=='e-Mail Adresse') this.value=''"  />
                    <input maxlength="32" name="log_password" type="password" value="password" class="login-input" onFocus="if(this.value=='password') this.value=''"    />
                    <input id="login-button" name="log_submit" value="Login" type="submit"  /><br />
                    <a href="forgot-password.php" style="font-size:12px;margin-top:0px;margin-left:8px;">Passwort vergessen?</a>
                    <br />
                 
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
 	<div style="visibility:hidden; background-image:url(http://www.socialracecycling.de/images/follow-us-hover.png);"></div>
 	<div style="visibility:hidden; background-image:url(http://www.socialracecycling.de/images/reg_submit-hover.png);"></div>
 	<div style="visibility:hidden; background-image:url(http://www.socialracecycling.de/images/lennart-blom.png);"></div>
</body>
</html><?php }} ?>