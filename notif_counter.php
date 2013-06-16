<?php
require_once('ink/db.ink.php');

if(isset($_GET['user'])){			
	$user = $_GET['user'];

	$sql = "SELECT COUNT(*)
					FROM notifications
					WHERE userToID = '$user' 
						AND `read` = 0
						";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
			die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else{
		$row = mysql_fetch_row($result);
		echo $row[0];
	}
}else
	echo "Nicht eingeloggt!";
?>