<?php
require_once('ink/functions.ink.php');
require_once('ink/global.php');
require_once('ink/db.ink.php');

if(!isset($_GET['n'])){
 echo "Keine Notification";
 exit;
}
if(!isset($_GET['url'])){
 echo "Keine URL";
 exit;
}

$notifID = $_GET['n'];
$link = $_GET['url'];

$sql = "SELECT type 
		FROM notifications 
		WHERE notifID = $notifID 
		LIMIT 0 , 1
			";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
if (!$result)
	die('Ung&uuml;ltige Abfrage: ' . mysql_error());
else
	$row = mysql_fetch_row($result);	
if($row[0]=="inv"){		
	if(!isset($_GET['s'])){
		echo "Kein Invite-Status";
		exit;
	}else
		$state = $_GET['s'];
	if($state == "acc"){
		$sql = "SELECT * 
				FROM notifications
				WHERE notifID = '$notifID'
				LIMIT 0 , 1
				";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
			die('Ung&uuml;ltige Abfrage: ' . mysql_error());
		else
			$tmp_row = mysql_fetch_object($result);			
		if(joinTeam($tmp_row->userToID, $tmp_row->userFromID, "")){
			$join = '<html><head><meta http-equiv="refresh" content="3; URL='.$link.'" /></head><body>';
			//Template !--
			$join .= '<img style="float:right;margin-right:100px;" src="images/haeckchen.jpg" alt="H�ckchen nach dem Beitritt eines Teams" width="200" height="200">
						<h3>Team-Beitritt war erfolgreich!</h3>
						<div style="margin-left:110px;margin-bottom:50px;" id="errorbox-green">
						<p style="font-weight:bold;font-family:arial; font-size:14px;color:#007125;">Sie sind erfolgreich einem Team beigetreten!</p>
						</div>';
			//--! Template			
			$join .= '</body></html>';
			echo $join;
			
			$sql = "UPDATE notifications 
					SET `read` = 1, confirm = 2
					WHERE notifID = '$notifID'
						";
			mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());	
		}else
			echo 'Es ist ein Fehler aufgetreten';
	}else{
		if($state == "dec"){
			$sql = "UPDATE notifications 
					SET `read` = 1, confirm = 1
					WHERE notifID = '$notifID'
						";
			mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		}	
	}
}else
	if($row[0]=="msg"){
		$sql = "UPDATE notifications 
				SET `read` = 1 
				WHERE notifID = '$notifID'
					";
		mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	}
echo '<html><head><meta http-equiv="refresh" content="0; URL='.$link.'" /></head></html>';
?>