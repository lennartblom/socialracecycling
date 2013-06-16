<?php
require_once('ink/db.ink.php');


function addNotif($UserFrom, $UserTo, $Type, $Link, $Content){
	$sql = "SELECT ID 
			FROM user 
			WHERE ID = '$UserFrom'
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else
		$tmp_row1 = mysql_fetch_row($result);
		
	$sql = "SELECT ID 
			FROM user 
			WHERE ID = '$UserTo'
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else
		$tmp_row2 = mysql_fetch_row($result);
	if(($tmp_row1[0]>0)&&($tmp_row2[0]>0)){	
		if($Type == "inv"){
			$sql = "SELECT team 
					FROM user 
					WHERE ID = '$UserTo' 
					LIMIT 0 , 1
						";
			$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
			if (!$result)
				die('Ung&uuml;ltige Abfrage: ' . mysql_error());	
			else{
				$row = mysql_fetch_row($result);
				if($row[0] == 0){
					$sql = "INSERT INTO
								notifications
								(
								userFromID,
								userToID,
								type,				
								`read`,
								link,
								content
								)
							VALUES
								(
								'$UserFrom',
								'$UserTo',
								'$Type',
								'0',
								'$Link',
								'$Content'
								)
								";
					mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
					
					return true;
				}else
					return false;
			}
		}else{
			if($Type = "msg"){
				$sql = "INSERT INTO
							notifications
							(
							userFromID,
							userToID,
							type,
							`read`,
							link,
							content
							)
						VALUES
							(
							'$UserFrom',
							'$UserTo',
							'$Type',
							'0',
							'$Link',
							'$Content'
							)
							";
				mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
				
				//return true; --> nur INVITE
			}
		}
	}
}

function joinTeam($User, $TeamLead, $TeamID){
	$sql = "SELECT ID 
			FROM user 
			WHERE ID = '$User'
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else
		$tmp_row = mysql_fetch_row($result);
	if($tmp_row[0]>0){	
		if($TeamID == ""){
			if($TeamLead != ""){
				$sql = "SELECT teamID 
						FROM teams
						WHERE userID = '$TeamLead'	
						LIMIT 0 ,1
						";
				$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
				if (!$result)
					die('Ung&uuml;ltige Abfrage: ' . mysql_error());
				else{
					$row = mysql_fetch_row($result);
					$TeamID = $row[0];
					$sql = "SELECT team 
							FROM user 
							WHERE ID = '$User' 
							LIMIT 0 , 1
								";
					$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
					if (!$result)
						die('Ung&uuml;ltige Abfrage: ' . mysql_error());
					else
						$row = mysql_fetch_row($result);
					if($row[0] == 0){
						$sql = "UPDATE user 
								SET team = '$TeamID' 
								WHERE ID = '$User'
									";
						mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
						
						return true;
					}else
						return false;	
				}
			}else
				return false;
		}else{
			$sql = "
					SELECT COUNT(*) 
					AS anzahl 
					FROM teams
					WHERE teamID = '$TeamID'
					";
			$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
			if (!$result)
				die('Ung&uuml;ltige Abfrage: ' . mysql_error());
			else
				$row = mysql_fetch_object($result);
			if($row->anzahl == 1){
				$sql = "SELECT team 
						FROM user 
						WHERE ID = '$User' 
						LIMIT 0 , 1
							";
				$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
				if (!$result)
					die('Ung&uuml;ltige Abfrage: ' . mysql_error());
				else{
					$row = mysql_fetch_row($result);
					if($row[0] == 0){
						$sql = "UPDATE user 
								SET team = '$TeamID' 
								WHERE ID = '$User'
									";
						mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
						
						return true;
					}else
						return false;
				}		
			}else
				return false;
		}
	}else
		return false; //User nicht vorhanden
}

function addFriendship($User1, $User2){
	$sql = "SELECT ID 
			FROM user 
			WHERE ID = '$User1'
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else
		$tmp_row1 = mysql_fetch_row($result);
		
	$sql = "SELECT ID 
			FROM user 
			WHERE ID = '$User2'
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else
		$tmp_row2 = mysql_fetch_row($result);
	
	if(($tmp_row1[0]>0)&&($tmp_row2[0]>0)){
		$sql = "INSERT INTO friends
					(
					user1,
					user2
					)
				VALUES
					(
					'$User1',
					'$User2'
					)
					";
		mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

		return true;	
	}else
		return false; //min. einer der User nicht vorhanden
}

function remFriendship($FriendshipID){
	$sql = "DELETE 
			FROM friends
			WHERE friendshipID = '$FriendshipID'
					";
	if(mysql_query($sql))
		return true;
	else{ 
		die("<pre>\n".$sql."</pre>\n".mysql_error());
		
		return false; //existiert nicht
	}
}

//...
?>