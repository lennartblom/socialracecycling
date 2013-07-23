<?php
$user = $_SESSION['UserID'];
$sql = "SELECT team
		FROM user
		WHERE ID = '$user'
		LIMIT 1
		";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
if(!$result)
	die('Ungültige Abfrage: ' . mysql_error());
else{
	$row = mysql_fetch_row($result);
	$tpl->assign('teamID',$row[0]);	
	$sql = "SELECT userID
			FROM teams
			WHERE teamID = '$row[0]'
			LIMIT 1
				";	
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if(!$result)
		die('Ungültige Abfrage: ' . mysql_error());
	else{
		$row = mysql_fetch_row($result);
		if($row[0]==$user)
			$tpl->assign('teamLead',2);
		else
			$tpl->assign('teamLead',1);	
	}
}
?>