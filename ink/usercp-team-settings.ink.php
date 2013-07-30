<?php
//Invite -> Userlist
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
	$teamID = $row[0];	
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
		if($row[0]==$user){
			$tpl->assign('teamLead', 2);	
			$teamLeadFlag = 2;
		}else{
			$tpl->assign('teamLead', 1);
			$teamLeadFlag = 1;
		}
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
			$tpl->assign('memberCount',$row[0]-1);
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
			if($teamLeadFlag == 2){
				$list .= '<td class="edittour-showtour-headline"></td>';
				$list .= '<td class="edittour-showtour-headline"></td>';	
					}
			$list .= '</tr>';
			$i = 1;
			while($row = mysql_fetch_row($result)){
				if($user != $row[0]){
					if($i == 1){
						$list .= '<tr><td class="edittour-showtour-dark" style="width:400px;">'.$row[4].' '.$row[5].'</td><td class="edittour-showtour-dark">'.DatumsWandler($row[21]).'</td><td class="edittour-showtour-dark"><a href="usercp-team-view.php?id='.$row[0].'"><img src="images/profile/contacts-icon.png" title="Profil ansehen" /></a></td>';
					if($teamLeadFlag == 2){
						$list .= '<td class="edittour-showtour-dark"><a onclick="return userConfirm(this);" href="team_kick.php?user='.$row[0].'&url='.$_SERVER['REQUEST_URI'].'"><img src="images/profile/user-rem-icon.png" title="Aus Team entfernen" /></a></td>';	
						$list .= '<td class="edittour-showtour-dark"><a onclick="return userConfirm(this);" href="team_promote.php?user='.$user.'&url='.$_SERVER['REQUEST_URI'].'&promo='.$row[0].'"><img src="images/profile/user-promote-icon.png" title="Team-Leitung abgeben" /></a></td>';
					}
					$list .= '</tr>';	
					$i = 2;
					}else 
						if($i == 2){
							$list .= '<tr><td class="edittour-showtour-light" style="width:400px;">'.$row[4].' '.$row[5].'</td><td class="edittour-showtour-light">'.DatumsWandler($row[21]).'</td><td class="edittour-showtour-light"><a href="usercp-team-view.php?id='.$row[0].'"><img src="images/profile/contacts-icon.png" title="Team ansehen" /></a></td>';
							if($teamLeadFlag == 2){
								$list .= '<td class="edittour-showtour-light"><a onclick="return userConfirm(this);" href="team_kick.php?user='.$row[0].'&url='.$_SERVER['REQUEST_URI'].'"><img src="images/profile/user-rem-icon.png" title="Aus Team entfernen" /></a></td>';	
								$list .= '<td class="edittour-showtour-light"><a onclick="return userConfirm(this);" href="team_promote.php?user='.$user.'&url='.$_SERVER['REQUEST_URI'].'&promo='.$row[0].'"><img src="images/profile/user-promote-icon.png" title="Team-Leitung abgeben" /></a></td>';	
							}
							$list .= '</tr>';
							$i = 1;
						}		
				}
			}
			$list .= '</table>';
			$tpl->assign('memberList',$list);
		}
	}else
		$tpl->assign('memberList','<table id="edittour-tabelle" style="margin-left:-30px !important;"></table>');
	
		//...
}
?>