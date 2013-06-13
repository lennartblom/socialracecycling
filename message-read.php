<?php
require_once('ink/db.ink.php');

$link = $_GET['l'];
$notif = $_GET['n'];

$sql = "UPDATE notifications 
		SET `read` = 1 
		WHERE notifID = '$notif'
			";
mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

echo '<html><head><meta http-equiv="refresh" content="0; URL='.$link.'" /></head></html>';					
?>