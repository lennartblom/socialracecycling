<html><body>
<?php
require_once('ink/db.ink.php');

if(isset($_GET['user'])){
	$user_self = $_GET['user'];
	$sql = "SELECT name, lastname
			FROM user
			WHERE ID = '$user_self'
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else{
		$row = mysql_fetch_row($result);
		$user_self_name = $row[0];
		$user_self_lastname = $row[1];
	}	
			
	$sql = "SELECT *
			FROM friends
			WHERE user1 = '$user_self'
				OR user2 = '$user_self'
				";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else{
		while($row = mysql_fetch_object($result)){
			$sql = "SELECT name, lastname
					FROM user
					WHERE ID = '$row->user1'
						OR ID = '$row->user2'
						";
			$tmp_result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
			if (!$tmp_result)
				die('Ung&uuml;ltige Abfrage: ' . mysql_error());
			else{
				while($tmp_row = mysql_fetch_object($tmp_result)){
					if(($tmp_row->name != $user_self_name)&&($tmp_row->lastname != $user_self_lastname)){
						echo $tmp_row->name." ".$tmp_row->lastname."<br/><br/>"; 
					}
				}
			}	
		}
		
	}	
}else
	echo "Nicht eingeloggt!";
?>
</body></html>