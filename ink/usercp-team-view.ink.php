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
			$tpl->assign('team_lead','<a href="usercp-profile_information.php?UserID='.$row[1].'">'.$team_lead_name.'</a>');
			$tpl->assign('team_logo','images/teamlogos/'.$row[2].'.jpg');
			$tpl->assign('team_name',$row[3]);
			$tpl->assign('team_info',$row[4]);
			$tpl->assign('team_website',$row[5]);
			$tpl->assign('team_create',DatumsWandler($row[6]));
		}else
			echo "Team existiert nicht";
	}
}else
	echo "Nicht genügend Parameter";
?>