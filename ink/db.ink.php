<?php

	$MYSQL_HOST = 'localhost';
	$MYSQL_USER = 'root';
	$MYSQL_PASS = '';
	$MYSQL_DATA = 'racecycling';
	
	
	$connid = @mysql_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PASS) OR die ("Error: ".mysql_error());
	
	mysql_select_db($MYSQL_DATA) OR die ("Error: ".mysql_error());
	
	mysql_query("SET NAMES `utf8`") OR die("Error: ".mysql_error());
	
// Muss ein autologin durchgeführt werden?


	if(isset($_COOKIE['Autologin']) AND !isset($_SESSION['UserID'])){
			$sql = "SELECT
							ID
					FROM
							user
					WHERE
							Autologin = '".mysql_real_escape_string($_COOKIE['Autologin'])."'	
					";
			$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
			
			$row = mysql_fetch_assoc($result);
			if(mysql_num_rows($result) == 1)
				doLogin($row['ID'], '1');
	}
	
// Online Status wird aktualisiert	
	if(isset($_SESSION['UserID'])){
		$sql = "UPDATE
						user
				SET
						Letzte_aktion = '".time()."'
				WHERE
						ID = '".$_SESSION['UserID']."'
				";
		mysql_query($sql) OR die ("<pre>\n".$sql."</pre>\n".mysql_error());
	}
	
	
// User ohne autologin werden hiermit ausgeloggt
	$sql = "UPDATE
					user
			SET
					SessionID = NULL,
					Autologin = NULL,
					IP = NULL
			WHERE
					'".(time()-60*20)."' > Letzte_Aktion AND
					Autologin IS NULL
			";
	mysql_query($sql) OR die ("<pre>\n".$sql."</pre>\n".mysql_error());
	
	
// Hat der User, der autologin aktiviert hat, noch eine gültige Session?	
	if(isset($_SESSION['UserID'])){
			$sql = "SELECT
							SessionID
					FROM	
							user
					WHERE
							ID = '".$_SESSION['UserID']."'
					";
			$result = mysql_query($sql) OR die ("<pre>\n".$sql."</pre>\n".mysql_error());
			
			$row = mysql_fetch_assoc($result);
			if(!$row['SessionID']){
			$_SESSION = array();
				session_destroy();
			}
	}
	
?>
