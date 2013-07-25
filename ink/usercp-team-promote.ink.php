<?php
$User = $_GET['user'];
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
		$teamID = $row[0];
		$sql = "SELECT * 
				FROM user
				WHERE team = '$teamID'
					";
				$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
			die('Ung&uuml;ltige Abfrage: ' . mysql_error());
		else{
			$list = '';
			while($row = mysql_fetch_row($result)){
				if($row[0]!=$User)
					$list .= '<option value="'.$row[0].'">'.$row[4].' '.$row[5].'</option>';	
			}
		}
	}else
		echo "Du bist in keinem Team";
}
?>