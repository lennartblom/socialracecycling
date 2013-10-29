<?php
require_once('ink/notif_functions.ink.php');
require_once('ink/global.php');
require_once('ink/db.ink.php');

if(isset($_GET['user'])&&isset($_GET['url'])&&isset($_GET['promo'])){
	$User = $_GET['user'];
	$link = $_GET['url'];
	$newLead = $_GET['promo'];
	
	$sql = "SELECT COUNT(*)
		FROM user
		WHERE ID = '$User'";

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
						if($row[0]==$User){
							$sql = "UPDATE teams
									SET userID = '$newLead' 
									WHERE teamID = '$TeamID'
										";
										
							mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
							
							$sql = "SELECT *
									FROM user
									WHERE team = '$TeamID'
										";
							$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
							while($tmp_row = mysql_fetch_object($result)){		
								addNotif($newLead,$tmp_row->ID, 'msg','usercp-team-view.php?id='.$TeamID,"leitet jetzt das Team.");
							}
							echo '<html><head><meta http-equiv="refresh" content="0; URL='.$link.'" /></head></html>';	
						}else
							echo "Du hast nicht die benötigten Rechte dazu!";
					}
					
					
				}else
					echo "Du bist in keinem Team";	
			}
		}	
	}			
	
}else
	echo "Nicht gen&uuml;gend Parameter";
?>