<?php
$post = 0;
if(isset($_POST['message'])){
	$message = $_POST['message'];
	if($message == '')
		$message = 'Keine Nachricht angegeben.';
	$sql = "SELECT userID
			FROM teams
			WHERE teamID = '$teamID'
			LIMIT 1
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());	
	else{
		$row = mysql_fetch_row($result);
		$teamLead = $row[0];
		$sql = "SELECT COUNT(*) as anzahl 
				FROM notifications
				WHERE userFromID = '$User'
					AND userToID = '$teamLead'
					AND type = 'req'
					AND confirm = 0
					";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
			die('Ung&uuml;ltige Abfrage: ' . mysql_error());	
		else{
			$row = mysql_fetch_row($result);
			if($row[0]>0){
				$tpl->display('01_tpl/internal/request-error.tpl');	
				$post = 1;		
			}else
				if(addNotif($User,$teamLead,'req','usercp-profile_information.php?UserID='.$User,'hat eine Anfrage zur Team-Aufnahme gesendet.<br/>Persönlicher Text:<br/>'.$message)){
				$tpl->display('01_tpl/internal/request-success.tpl');
				$post = 1;	
			}
		}
	}	
}
?>