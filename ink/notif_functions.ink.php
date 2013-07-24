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
	if(($tmp_row1[0]!=0)&&($tmp_row2[0]!=0)){	
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
								content,
								confirm
								)
							VALUES
								(
								'$UserFrom',
								'$UserTo',
								'$Type',
								'0',
								'$Link',
								'$Content',
								'0'
								)
								";
					mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
					
					return true; //User erfolgreich eingeladen
				}else
					return false; //User ist bereits in einem Team
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
							LIMIT 1
								";
					$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
					if (!$result)
						die('Ung&uuml;ltige Abfrage: ' . mysql_error());
					else
						$row = mysql_fetch_row($result);
					if($row[0] == 0){
						$sql = "UPDATE user 
								SET team = '$TeamID',
								joined = 'date(\"Y-m-d H:i:s\")' 
								WHERE ID = '$User'
									";
						mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
						
						return true; //Team erfolgreich beigetreten
					}else
						return false; //User ist bereits in einen Team
				}
			}else
				return false; //Keine TeamLead angegeben
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
						LIMIT 1
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
						
						return true; //Team erfolgreich beigetreten
					}else
						return false; //User ist bereits Teil eines Teams
				}		
			}else
				return false; //Team nicht vorhanden
		}
	}else
		return false; //User nicht vorhanden
}

function leaveTeam($User, $TeamID){
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
				LIMIT 1
					";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
			die('Ung&uuml;ltige Abfrage: ' . mysql_error());
		else{
			$row = mysql_fetch_row($result);
		 	if($row[0] != 0){
				$sql = "UPDATE user 
						SET team = 0 
						WHERE ID = '$User'
							";
				mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
				
				return true; //Team erfolgreich verlassen
			}else
				return false; //User ist in keinem Team
		}
	}else
		return false; //Team nicht vorhanden
}

function inTeam($User){
	$sql = "SELECT ID 
			FROM user 
			WHERE ID = '$User'
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else
		$row = mysql_fetch_row($result);
	if($row[0]>0){
		$sql = "SELECT team
				FROM user
				WHERE ID = '$User'
				LIMIT 1
					";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
			die('Ung&uuml;ltige Abfrage: ' . mysql_error());
		else
			$row = mysql_fetch_row($result);	
		if($row[0]>0)
			return true; //User ist in einem Team
		else
			return false; //User ist in keinem Team
	}else
		return false; //User nicht vorhanden
}

function inSameTeam($User1, $User2){
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
		$sql = "SELECT team
				FROM user
				WHERE ID = '$User1'
					";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
			die('Ung&uuml;ltige Abfrage: ' . mysql_error());
		else
			$tmp_row1 = mysql_fetch_row($result);

		$sql = "SELECT team
				FROM user
				WHERE ID = '$User2'
					";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
			die('Ung&uuml;ltige Abfrage: ' . mysql_error());
		else
			$tmp_row2 = mysql_fetch_row($result);

		if($tmp_row1[0]==$tmp_row2[0])
			return true; //im selben Team
		else
			return false; //nicht im selben Team
	}else
		return false; //min. einer der User nicht vorhanden
}

function ownsTeam($User){
	$sql = "SELECT ID 
			FROM user 
			WHERE ID = '$User'
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else
		$row= mysql_fetch_row($result);
	if($row[0]>0){
		$sql = "SELECT team
				FROM user
				WHERE ID = '$User'
					";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
			die('Ung&uuml;ltige Abfrage: ' . mysql_error());
		else
			$tmp_row1= mysql_fetch_row($result);		
		$sql = "SELECT userID
				FROM teams
				WHERE teamID = '$tmp_row1[0]'
					";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
			die('Ung&uuml;ltige Abfrage: ' . mysql_error());
		else
			$tmp_row2= mysql_fetch_row($result);
			
		if($tmp_row2[0]==$User)
			return true; //User ist TeamLead
		else
			return false; //User ist nicht TeamLead
		
	}else
		return false; //User nicht vorhanden 
}

function getTeamByUser($User){
	$sql = "SELECT ID 
			FROM user 
			WHERE ID = '$User'
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else
		$row = mysql_fetch_row($result);
	if($row[0]>0){
		$sql = "SELECT team
				FROM user
				WHERE ID = '$User'
				LIMIT 1
					";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
			die('Ung&uuml;ltige Abfrage: ' . mysql_error());
		else
			$row = mysql_fetch_row($result);
		if($row[0]>0)	
			$team = $row[0];
		else
			$team = 0;
			
		return $team;	
	}else
		return -1;
}

function follow($User, $FollowUser){
	$sql = "SELECT ID 
			FROM user 
			WHERE ID = '$User'
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else
		$tmp_row1 = mysql_fetch_row($result);
		
	$sql = "SELECT ID 
			FROM user 
			WHERE ID = '$FollowUser'
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else
		$tmp_row2 = mysql_fetch_row($result);
	
	if(($tmp_row1[0]>0)&&($tmp_row2[0]>0)){
		$sql = "SELECT followID
				FROM follow
				WHERE userID = '$User' 
					AND followUserID = '$FollowUser'
					";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
			die('Ung&uuml;ltige Abfrage: ' . mysql_error());
		else
			$row = mysql_fetch_row($result);
		
		if($row[0]==0){
			$sql = "INSERT INTO follow
						(
						userID,
						followUserID
						)
					VALUES
						(
						'$User',
						'$FollowUser'
						)
						";
			mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
			addNotif($User, $FollowUser, 'msg', 'usercp-profile_information.php?UserID='.$User, 'folgt dir jetzt auf SRC');

			return true; //Follow erfolgreich eingetragen //User folgt jetzt followUser
		}else
			return false; //User folgt followUser bereits
	}else
		return false; //min. einer der User nicht vorhanden
}

function unFollow($User, $FollowUser){
	$sql = "SELECT ID 
			FROM user 
			WHERE ID = '$User'
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else
		$tmp_row1 = mysql_fetch_row($result);
		
	$sql = "SELECT ID 
			FROM user 
			WHERE ID = '$FollowUser'
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else
		$tmp_row2 = mysql_fetch_row($result);
	
	if(($tmp_row1[0]>0)&&($tmp_row2[0]>0)){
		$sql = "SELECT followID
				FROM follow
				WHERE userID = '$User' 
					AND followUserID = '$FollowUser'
					";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
			die('Ung&uuml;ltige Abfrage: ' . mysql_error());
		else
			$row = mysql_fetch_row($result);

		if($row[0]>0){
			$sql = "DELETE 
				FROM follow
				WHERE followID = '$row[0]'
						";
			mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
			addNotif($User, $FollowUser, 'msg', 'usercp-profile_information.php?UserID='.$User, 'folgt dir nicht mehr auf SRC');
			
			return true; //Follow erfolgreich gelöscht //User folgt followUser nicht mehr
		}else{ 
			return false; //User folgt nicht followUser
		}
	}else
		return false; //min. einer der User nicht vorhanden
}

function doesFollow($User, $FollowUser){
	$sql = "SELECT ID 
			FROM user 
			WHERE ID = '$User'
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else
		$tmp_row1 = mysql_fetch_row($result);
		
	$sql = "SELECT ID 
			FROM user 
			WHERE ID = '$FollowUser'
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else
		$tmp_row2 = mysql_fetch_row($result);
	
	if(($tmp_row1[0]>0)&&($tmp_row2[0]>0)){
		$sql = "SELECT *
				FROM follow
				WHERE userID = '$User'
					AND followUserID = '$FollowUser'	
					";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
			die('Ung&uuml;ltige Abfrage: ' . mysql_error());
		else{
			$row = mysql_fetch_row($result);
			if($row[0]>0)
				return true; //User folgt followUser
			else
				return false; //User folgt nicht followUser
		}	
	}else
		return false; //min. einer der User nicht vorhanden
}

function getMsgID($UserFrom, $UserTo, $Topic, $Content){
	$sql = "SELECT msgID
			FROM message
			WHERE userFromID = '$UserFrom'
				AND userToID = '$UserTo'
				AND topic = '$Topic'
				AND content = '$Content'
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else{
		$row = mysql_fetch_row($result);
		if($row[0]>0)
			return $row[0];
		else
			return -1;
	}	
}

function addMSG($UserFrom, $UserTo, $Topic, $Content){
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
		$sql = "SELECT COUNT(*)
				FROM message
					";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
			die('Ung&uuml;ltige Abfrage: ' . mysql_error());
		else
			$row = mysql_fetch_row($result);
	
		$identifier = "";
		if(getMsgID($UserFrom, $UserTo, $Topic, $Content)>0)
			for($i=0;$i<=$row[0];$i++)
				$identifier .= "&nbsp;";			
		
		$Content .= $identifier;
		$sql = "INSERT INTO
				message
				(
					userFromID,
					userToID,
					topic,				
					content,
					`read`
				)
				VALUES
				(
					'$UserFrom',
					'$UserTo',
					'$Topic',
					'$Content',
					'0'
				)
					";
		mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
					
		return true; //Nachricht erfolgreich eingetragen
	}else
		return false; //min. ein User nicht vorhanden
}

function didInviteUser($User1, $User2){
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
		$sql = "SELECT * 
				FROM notifications
				WHERE userFromID = '$User1'
					AND userToID = '$User2'
					AND type = 'inv'
					AND confirm = '0'
				LIMIT 1	
				";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
			die('Ung&uuml;ltige Abfrage: ' . mysql_error());
		else
			$row = mysql_fetch_row($result);
		if($row[0]>0)
			return true; //User1 hat User2 in sein Team eingeladen
		else	
			return false; //User1 hat User2 nicht eingeladen
	}else
		return false; //min. ein User nicht vorhanden
}

function getTimespan($Date){
	$sql = "SELECT  TIME_TO_SEC(TIMEDIFF(NOW(),'$Date'))";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if(!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else{
		$row = mysql_fetch_row($result);
		$timespan = 'vor wenigen Sekunden';
		if(round($row[0]/60)==1)
			$timespan = 'vor einer Minute';
		if(round($row[0]/60)>1)
			$timespan = 'vor '.round(($row[0]/60)).' Minuten';
		if(round($row[0]/60/60)==1)
			$timespan = 'vor einer Stunde';
		if(round($row[0]/60/60)>1)
			$timespan = 'vor '.round(($row[0]/60/60)).' Stunden';	
		if(round($row[0]/60/60/24)==1)
			$timespan = 'Gestern';
		if(round($row[0]/60/60/24)>1)
			$timespan = 'vor '.round(($row[0]/60/60/24)).' Tagen';	
		if(round($row[0]/60/60/24/7)==1)
			$timespan = 'vor einer Woche';
		if(round($row[0]/60/60/24/7)>1)
			$timespan = 'vor '.round(($row[0]/60/60/24/7)).' Wochen';	
		if(round($row[0]/60/60/24/30)==1)
			$timespan = 'vor einem Monat';
		if(round($row[0]/60/60/24/30)>1)
			$timespan = 'vor '.round(($row[0]/60/60/24/30)).' Monaten';	
		if(round($row[0]/60/60/24/365)==1)
			$timespan = 'vor einem Jahr';	
		if(round($row[0]/60/60/24/365)>1)
			$timespan = 'vor '.round(($row[0]/60/60/24/365)).' Jahren';	
					
		return $timespan;
	}
}
//...
?>