<?php
require_once('ink/notif_functions.ink.php');
require_once('ink/global.php');
require_once('ink/db.ink.php');

if(isset($_GET['user'])&&isset($_GET['url'])){
	$User = $_GET['user'];
	$link = $_GET['url'];
	echo '<html><head><title>Verarbeitete Daten - SRC</title></head><body><div align="center"><br/><br/><br/><br/><br/><br/><br/><img src="images/lightbox-ico-loading.gif" width="32" height="32" /></div></body></html>';
	$sql = "SELECT COUNT(*)
			FROM user
			WHERE ID = '$User'
				";

	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else{
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
			else{
				$row = mysql_fetch_row($result);
				if($row[0] != 0){
					$TeamID = $row[0];
					
					//TeamLead
					$sql = "SELECT userID 
							FROM teams
							WHERE teamID = '$TeamID'
							LIMIT 1
								";
								
					$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
					if (!$result)
						die('Ung&uuml;ltige Abfrage: ' . mysql_error());
					else{
						$row = mysql_fetch_row($result);
						if($row[0]=='$User'){
							$teamLead = 2;
							echo "Team-Leitung kann/darf nicht manuell entfernt werden!";
						}else
							$teamLead = 1;
					}
					
					//Team-Query
					$sql = "SELECT *
								FROM user
								WHERE team = '$TeamID'
									";
					$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
					if($teamLead == 1)			
					if(leaveTeam($User, $TeamID)){
						//Notif Team
						if (!$result)
							die('Ung&uuml;ltige Abfrage: ' . mysql_error());
						else
							while($tmp_row = mysql_fetch_object($result)){	
								if($tmp_row->ID != $User)	
									addNotif($User,$tmp_row->ID, 'msg','usercp-team-view.php?id='.$TeamID,"wurde aus dem Team entfernt.");
								else
									addNotif(-1,$tmp_row->ID,'msg','usercp-team-view.php?id='.$TeamID,'Du wurdest aus dem Team entfernt.');	
							}
						echo '<html><head><meta http-equiv="refresh" content="0; URL='.$link.'" /></head></html>';	
					}else
						echo "Es ist ein Fehler aufgetreten";
				}else
					echo "Du bist in keinem Team";	
			}
		}	
	}			
	
}else
	echo "Nicht gen&uuml;gend Parameter";
?>