<?php
$sql = "SELECT COUNT(*) as anzahl
		FROM teams
			";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
if(!$result)
	die('Ungültige Abfrage: ' . mysql_error());
else{
	$row = mysql_fetch_row($result);
	$tpl->assign('teamCount',$row[0]);
}
$sql = "SELECT * 
		FROM teams
		ORDER BY teamID ASC
			";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
if(!$result)
	die('Ungültige Abfrage: ' . mysql_error());
else{
	$list = '<table id="edittour-tabelle"><tr><td class="edittour-showtour-headline">Team</td><td class="edittour-showtour-headline">Erstellt am</td><td class="edittour-showtour-headline"></td></tr>';
	$i = 1;
	while($row = mysql_fetch_object($result)){
		if($i == 1){
			$list .= '<tr><td class="edittour-showtour-dark" style="width:400px;">'.$row->name.'</td><td class="edittour-showtour-dark">'.DatumsWandler($row->created).'</td><td class="edittour-showtour-dark"><a href="usercp-team-view.php?id='.$row->teamID.'"><img src="images/profile/group-view-icon.png" title="Team ansehen" /></a></td></tr>';	
			$i = 2;
		}else 
			if($i == 2){
				$list .= '<tr><td class="edittour-showtour-light" style="width:400px;">'.$row->name.'</td><td class="edittour-showtour-light">'.DatumsWandler($row->created).'</td><td class="edittour-showtour-light"><a href="usercp-team-view.php?id='.$row->teamID.'"><img src="images/profile/group-view-icon.png" title="Team ansehen" /></a></td></tr>';
				$i = 1;
			}	
	}
	$list .= '</table>';
	$tpl->assign('teamList',$list);
}
?>