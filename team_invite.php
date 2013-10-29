<?php
require_once('ink/notif_functions.ink.php');
require_once('ink/db.ink.php');

if(isset($_GET['user'])&&isset($_GET['invite'])&&isset($_GET['url'])){
	$user = $_GET['user'];
	$invite = $_GET['invite'];
	$link = $_GET['url'];
	$team = "Nicht gefunden";
	echo '<html><head><title>Verarbeitete Daten - SRC</title></head><body><div align="center"><br/><br/><br/><br/><br/><br/><br/><img src="images/lightbox-ico-loading.gif" width="32" height="32" /></div></body></html>';
	$sql = "SELECT name 
			FROM teams
			WHERE userID = '$user'
			LIMIT 1
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else{
		$row = mysql_fetch_row($result);
		$team = $row[0];
	}	
	
	if(addNotif($user, $invite, 'inv', '', 'hat dich zu Team '.$team.' eingeladen'))
		echo '<html><head><meta http-equiv="refresh" content="0; URL='.$link.'" /></head></html>';
	else
		echo "Es ist ein Fehler aufgetreten";
}else
	echo "Nicht gen&uuml;gend Parameter";				
?>