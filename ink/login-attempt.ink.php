<?php


			echo  	"<div id=\"wrapper\">\n";
			echo  	"	<div id=\"container-toppart\"></div>\n";
			echo  	"	<div id=\"container-middlepart\">\n";
			echo  	"		<div id=\"content\">\n";
			echo	"			<div id=\"text-box\">\n";
            echo  	"				<div id=\"errorbox-red\" style=\"margin-top:50px;padding-bottom:20px;\">\n";
            echo	"					<h4 style=\"color:#FF0000;font-weight:bold;\">Sie müssen sich einloggen!</h4>\n";
            echo	"					<p style=\"font-weight:bold;color:#5a5a5a;\">Um diesen Bereich einzusehen zu k&ouml;nnen, müssen sie sich vorerst einloggen!</p><br />\n";
            echo	"					<p style=\"font-weight:bold;color:#5a5a5a;\">Falls Sie noch nicht registriert sind, können Sie das auf der Startseite tuen <a href=\"index.php\">Startseite</a></p>\n";
            echo	"				</div>\n";
			echo  	"		</div>\n";
			echo  	"		</div>\n";
			echo  	"	<div id=\"footer\">\n";
			echo  	"		<form action=\"login.php\" name=\"login\" method=\"post\">\n";
			echo  	"			<table cellpadding=\"0\" cellspacing=\"0\" id=\"footer-area\">\n";
			echo  	"				<tr>\n";
			echo  	"					<td valign=\"top\" id=\"lennart-blom\">\n";
			echo  	"						<br /><h1 class=\"footer-headline\">Programmiert und Umgesetzt von:</h1>\n";
			echo  	"						<a id=\"programing-by\" target=\"_new\" href=\"http://www.lennart-blom.de/\"></a>\n";
			echo  	"					</td>\n";
			echo  	"					<td  class=\"trenner\"></td>\n";
			echo  	"					<td valign=\"top\" id=\"follow\">\n";
			echo  	"						<br /><h1 class=\"footer-headline\">Folgen Sie dem Projekt auf...</h1>\n";
			echo  	"						<a href=\"http://www.facebook.com/\" target=\"_new\" class=\"followme-facebook\"></a>  \n";
			echo  	"						<a href=\"http://www.twitter.com/\" target=\"_new\" id=\"followme-twitter\"></a>\n";
			echo  	"						<p id=\"follow-us\">und</p>\n";
			echo  	"					</td>\n";
			echo  	"			 		<td class=\"trenner\"></td>\n";
			echo  	"			 	 	<td valign=\"top\" id=\"login\">\n";
			echo  	"						<br /><h1 class=\"footer-headline\">Login</h1>\n";
			echo  	"						<input maxlength=\"70\" name=\"log_email\" value=\"e-Mail Adresse\" type=\"text\"  class=\"login-input\" onFocus=\"if(this.value=='e-Mail Adresse') this.value=''\"  />\n";
			echo  	"						<input maxlength=\"32\" name=\"log_password\" type=\"password\" value=\"password\" class=\"login-input\" onFocus=\"if(this.value=='password') this.value=''\"    />\n";
			echo  	"						<input id=\"login-button\" name=\"log_submit\" value=\"Login\" type=\"submit\"  /><br />\n";
			echo  	"						<input type=\"checkbox\" name=\"log_loginalways\" value=\"auto_login\" checked=\"checked\" style=\"margin-left:8px;\" /><span style=\"color:#5e5e5e;font-size:12px;\">eingeloggt bleiben?</span>\n";
			echo  	"						<a href=\"http://www.login.de/\" style=\"font-size:12px;margin-top:0px;margin-left:8px;\">Passwort vergessen?</a>\n";
			echo  	"						<br />\n";	 
			echo  	"					</td>\n";
			echo  	"				</tr>\n";
			echo  	"			</table>\n";
			echo  	"		</form>\n";
			echo  	"	</div>\n";	
			echo  	"	</div>\n";
			echo  	"		<div id=\"container-bottompart\">\n";
			echo  	"			<a id=\"impressum\" href=\"http://www.lennart-blom.de/impressum.php\">Impressum</a>\n";
			echo  	"		</div>\n";
			echo  	"		</div>  \n";
			
?>