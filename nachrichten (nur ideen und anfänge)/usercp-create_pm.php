<?php

	session_start();
	require_once('ink/functions.ink.php');
	
	require_once('ink/db.ink.php');
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Nachricht erstellen | Social Race Cycling</title>
        <script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
        <script type="text/javascript" src="js/JSToolTip.js"></script>
        <script type="text/javascript" src="jqPlot/jquery.jqplot.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
   </head>
<body>
<?php
error_reporting(E_ALL & ~E_DEPRECATED);

	if(isset($_SESSION['UserID'])){
		echo  	"<div id=\"wrapper\">\n";
		echo  	"<div id=\"content-headerpart-short\">\n";
		echo  	"	<ul id=\"navigation\">\n";
        echo  	"		<li>\n";
        echo  	" 	       <a name=\"Startseite\" href=\"home.php\" id=\"button-home\">\n";
        echo  	"	 	      	Startseite\n";
        echo  	"	       </a>\n";
        echo  	"   	</li>\n";
        echo  	"   	<li>\n";
        echo  	"   	    <a name=\"Touren\" href=\"tour-menu.php\" id=\"button-touren\">\n";
		echo  	"   	    	Touren\n";
		echo  	"   	    </a>\n";
		echo  	"   	</li>\n";
		echo  	"   	<li>\n";
		echo  	"   	    <a name=\"Kalender\" href=\"calendar.php\" id=\"button-calendar\">\n";
		echo  	"   	    	Kalender\n";
		echo  	"   	    </a>\n";
		echo  	"   	</li>\n";
		echo  	"		<li>\n";
		echo  	"			<a name=\"Strecken\" href=\"tracks.php\" id=\"button-tracks\">\n";
		echo  	"				Strecken\n";
		echo  	"			</a>\n";
		echo  	"		</li>\n";
		echo  	"		<li>\n";
		echo  	"			<a name=\"Kontakt\" href=\"contact.php\" id=\"button-contact\">\n";
		echo  	"   			Kontakt\n";
        echo  	"			</a>\n";
		echo  	" 		</li>\n";
		echo  	"	</ul>\n";
        echo  	"</div>	\n";
        echo  	"<div id=\"container-middlepart\">\n";
		echo	"	<div id=\"usercp-background-top\">\n";
		echo	"		<h4 id=\"control-panel\">Kontrollzentrum</h4>\n";
		echo	"		<div id=\"usercp-background-sidebar\">\n";
		echo	"			<ul id=\"usercp-navigation\">\n";
		echo	"				<li class=\"usercp-navigation-headline\">Soziales</li>\n";
		echo	"					<li><a href=\"profile.php\" class=\"usercp-navigation-button\">Profil bearbeiten</a></li>\n";		
		echo	"					<li><a href=\"usercp-profile_self.php\" class=\"usercp-navigation-button\">Profil anzeigen</a></li>\n";
		echo	"					<li><a href=\"usercp-mitgliederliste.php\" class=\"usercp-navigation-button\">Mitgliederliste</a></li>\n";
		echo	"					<li><a href=\"usercp-facebook.php\" class=\"usercp-navigation-button\">Facebook</a></li>\n";
		echo	"				<li class=\"usercp-navigation-headline\">Nachrichten</li>\n";
		echo	"					<li><a href=\"usercp-create_pm.php\" class=\"usercp-navigation-button-active\">Nachricht erstellen</a></li>\n";
		echo	"					<li><a href=\"usercp-posteingang.php\" class=\"usercp-navigation-button\">Posteingang</a></li>\n";
		echo	"					<li><a href=\"usercp-postausgang.php\" class=\"usercp-navigation-button\">Postausgang</a></li>\n";
		echo	"			</ul>\n";
		echo	"		</div>\n";
		echo	"		<div id=\"usercp-background-content\">\n";
		echo	"			<div id=\"usercp-content-box\">\n";
        echo	"				<p class=\"text-content\">\n";
		echo	"				<h3>Nachricht erstellen</h3>\n";
								if(isset($_POST['submit']) AND $_POST['submit']=='Nachricht abschicken'){
									SendMessage($_SESSION['UserID'],$_POST['empfaenger'],$_POST['betreff'],$_POST['inhalt']);
								}
		
		
		echo	"				<form method=\"POST\" action=\"".$_SERVER['PHP_SELF']."\">\n";
		echo	"				<input type=\"input\" name=\"empfaenger\" /><br />\n";
		echo	"				<input type=\"input\" name=\"betreff\" /><br />\n";
		echo	"				<textarea name=\"inhalt\"></textarea><br />\n";
		echo	"				<input type=\"submit\" name=\"submit\" value=\"Nachricht abschicken\" />\n";
		
		echo	"				</form>\n";
		
		echo	"				</p>\n";
        echo	"   		</div>";
		echo	"		</div>\n";
		echo	"	</div>\n";
		echo	"		<div class=\"clearing\"></div>\n";
		echo	"	<div id=\"usercp-background-bottom\"></div>\n";

        require_once('ink/footer.ink.php');
                   
	}
	else{
			echo  	"<div id=\"wrapper\">\n";
			echo  	"	<div id=\"container-toppart\"></div>\n";
			echo  	"	<div id=\"container-middlepart\">\n";
			echo  	"		<div id=\"content\">\n";
			echo	"			<div id=\"text-box\">\n";
            echo  	"				<div id=\"errorbox-red\" style=\"margin-top:50px;padding-bottom:20px;\">\n";
            echo	"					<h4 style=\"color:#FF0000;font-weight:bold;\">Sie müssen sich einloggen!</h4>\n";
            echo	"					<p style=\"font-weight:bold;color:#5a5a5a;\">Um diesen Bereich einzusehen zu k&ouml;nnen, müssen sie sich vorerst einloggen!</p><br>\n";
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
	}
	
?>
</body>
</html>