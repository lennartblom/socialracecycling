<?php
if(isset($_GET['id'])){
	$teamID = $_GET['id'];
	$sql = "SELECT *
			FROM teams
			WHERE teamID = '$teamID'
			LIMIT 1
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if(!$result)
	die('Ungültige Abfrage: ' . mysql_error());
	else{
		$row = mysql_fetch_row($result);
		if($row[0]>0){
			$sql = "SELECT name, lastname 
					FROM user
					WHERE ID = '$row[1]'
					LIMIT 1
						";
			$tmp_result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
			if(!$result)
			die('Ungültige Abfrage: ' . mysql_error());
			else{
				$tmp_row = mysql_fetch_row($tmp_result);
				$team_lead_name = $tmp_row[0].' '.$tmp_row[1];
			}
			$tpl->assign('team_id',$teamID);
			$tpl->assign('team_lead','<a href="usercp-profile_information.php?UserID='.$row[1].'">'.$team_lead_name.'</a>');
			$tpl->assign('team_logo','images/teamlogos/'.$row[2].'.jpg');
			$tpl->assign('team_name',$row[3]);
			$tpl->assign('team_info',$row[4]);
			$tpl->assign('team_website',$row[5]);
			$tpl->assign('team_create',DatumsWandler($row[6]));
			//User-Team-Validation
			$User = $_SESSION['UserID'];
			$sql = "SELECT team
					FROM user
					WHERE ID = '$User'
					LIMIT 1
						";
			$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
			if(!$result)
				die('Ungültige Abfrage: ' . mysql_error());
			else{
				$row = mysql_fetch_row($result);
				if($row[0]>0)
					$tpl->assign('validation',0);
				else
					$tpl->assign('validation',1);	
			}			
			//Member-Count
			if($teamID>0){
				$sql = "SELECT COUNT(*) as anzahl
						FROM user
						WHERE team = '$teamID'
							";
				$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
				if(!$result)
					die('Ungültige Abfrage: ' . mysql_error());
				else{
					$row = mysql_fetch_row($result);
					$tpl->assign('memberCount',$row[0]);
				}
			}
			//Member
			if($teamID>0){
				$sql = "SELECT *
						FROM user
						WHERE team = '$teamID'
						ORDER BY ID ASC
							";
				$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
				if(!$result)
					die('Ungültige Abfrage: ' . mysql_error());
				else{
					$list = '<table id="edittour-tabelle" style="margin-left:-30px !important;"><tr><td class="edittour-showtour-headline">Name</td><td class="edittour-showtour-headline">Beigetreten am</td><td class="edittour-showtour-headline"></td>';
					/*Additional HERE*/
					$list .= '</tr>';
					$i = 1;
					while($row = mysql_fetch_row($result)){
							if($i == 1){
								$list .= '<tr><td class="edittour-showtour-dark" style="width:400px;">'.$row[4].' '.$row[5].'</td><td class="edittour-showtour-dark">'.DatumsWandler($row[21]).'</td><td class="edittour-showtour-dark"><a href="usercp-team-view.php?id='.$row[0].'"><img src="images/profile/contacts-icon.png" title="Profil ansehen" /></a></td>';
							/*Additional HERE*/
							$list .= '</tr>';	
							$i = 2;
							}else 
								if($i == 2){
									$list .= '<tr><td class="edittour-showtour-light" style="width:400px;">'.$row[4].' '.$row[5].'</td><td class="edittour-showtour-light">'.DatumsWandler($row[21]).'</td><td class="edittour-showtour-light"><a href="usercp-team-view.php?id='.$row[0].'"><img src="images/profile/contacts-icon.png" title="Team ansehen" /></a></td>';
									/*Additional HERE*/
									$list .= '</tr>';
									$i = 1;
								}		
					}
					$list .= '</table>';
					$tpl->assign('memberList',$list);
				}
			}else
				$tpl->assign('memberList','<table id="edittour-tabelle" style="margin-left:-30px !important;"></table>');

		}else
			echo "Team existiert nicht";
	}
}else
	echo "Nicht genügend Parameter";
?>