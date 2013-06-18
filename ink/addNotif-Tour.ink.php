<?php
//require_once('ink/functions.ink.php');
//require_once('ink/db.ink.php');

$user = $_SESSION['UserID'];
$sql = "SELECT *
		FROM follow
		WHERE followUserID = '$user'
			";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
if (!$result)
	die('Ung&uuml;ltige Abfrage: ' . mysql_error());
else
	while($row = mysql_fetch_object($result)){
		addNotif($user, $row->userID, 'msg', 'usercp-profile_information.php?UserID='.$user, 'hat eine neue Tour zu seinen Aktivit&auml;ten hinzugefügt');
		//link = aktivität des users
	}
?>