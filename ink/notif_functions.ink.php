<?php
require_once('ink/db.ink.php');


function addNotif($UserFrom, $UserTo, $Type, $Link, $Content){
	if($Type == "inv"){
		$sql = "SELECT team 
				FROM user 
				WHERE ID = '$UserTo' 
				LIMIT 0 , 1
					";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
			die('Ungültige Abfrage: ' . mysql_error());
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
							)";
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
						)";
			mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
			
			//return true; --> nur INVITE
		}
	}
}

function joinTeam($User, $TeamLead, $TeamID){
	if($TeamID == ""){
		if($TeamLead != ""){
			$sql = "SELECT teamID 
					FROM teams
					WHERE userID = '$TeamLead'	
					LIMIT 0 ,1
					";
			$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
			if (!$result)
				die('Ungültige Abfrage: ' . mysql_error());
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
					die('Ungültige Abfrage: ' . mysql_error());
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
			die('Ungültige Abfrage: ' . mysql_error());
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
				die('Ungültige Abfrage: ' . mysql_error());
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
}

//...

?>