<?php
require_once('ink/functions.ink.php');
require_once('ink/global.php');
require_once('ink/db.ink.php');

$invID = $_GET['inv'];
$state = $_GET['sta'];
$link = $_GET['lin'];
if($state == "acc"){
	$sql = "SELECT * 
			FROM notifications
			WHERE notifID = '$invID'
			LIMIT 0 , 1
			";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ungültige Abfrage: ' . mysql_error());
	else
		$row = mysql_fetch_object($result);			
	if(joinTeam($row->userToID, $row->userFromID, "")){
		echo '<html><head><meta http-equiv="refresh" content="3; URL='.$link.'" /></head><body>
			<img style="float:right;margin-right:100px;" src="images/haeckchen.jpg" alt="Häckchen nach dem Beitritt eines Teams" width="200" height="200">
			<h3>Team-Beitritt war erfolgreich!</h3>
			<div style="margin-left:110px;margin-bottom:50px;" id="errorbox-green">
			<p style="font-weight:bold;font-family:arial; font-size:14px;color:#007125;">Sie sind erfolgreich einem Team beigetreten!</p>
			</div>
			</body></html>';
		$sql = "UPDATE notifications 
				SET `read` = 1 
				WHERE notifID = '$invID'
					";
		mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());	
	}else
		echo '<html><head><meta http-equiv="refresh" content="3; URL='.$link.'" /></head><body>
			<h3>Team-Beitritt fehlgeschlagen!</h3>
			<div style="margin-left:110px;margin-bottom:50px;" id="errorbox-red">
			<p style="font-weight:bold;font-family:arial; font-size:14px;color:#007125;">Sie wurden keinem Team zugewiesen, da ein Fehler aufgetreten ist!</p>
			</div>
			</body></html>';
}else{
	if($state == "dec"){
		$sql = "UPDATE notifications 
				SET `read` = 1 
				WHERE notifID = '$invID'
					";
		mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		echo '<html><head><meta http-equiv="refresh" content="0; URL='.$link.'" /></head></html>';
	}	
}
?>