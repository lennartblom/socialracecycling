<?php
require_once('ink/functions.ink.php');
require_once('ink/db.ink.php');

if(isset($_GET['ID'])){
	$msg = $_GET['ID'];
	$sql = "SELECT *
			FROM message
			WHERE msgID = '$msg'
			LIMIT 1	
					";
	$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	if (!$result)
		die('Ung&uuml;ltige Abfrage: ' . mysql_error());
	else{
		$row = mysql_fetch_object($result);	
			
		$output = "Nachricht von ".$row->userFromID;
		if($row->read = 1)
			$output .= "  -  Gelesen ";
		$output .= "<br/><br/>";
		$output .= "Betreff: ".$row->topic."<br/><br/>";
		$output .= $row->content."<br/>";
			
		echo $output;
	}
		
	$sql = "UPDATE message
			SET `read` = 1
			WHERE msgID = '$msg'
				";	
	mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());			
}else{
	if(isset($_GET['user'])){
		$user = $_GET['user'];
		$sql = "SELECT *
				FROM message
				WHERE userToID = '$user'
						";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
			die('Ung&uuml;ltige Abfrage: ' . mysql_error());
		else
			while($row = mysql_fetch_object($result)){
				$output = "Nachricht von ".$row->userFromID;
				if($row->read = 1)
					$output .= "  -  Gelesen ";
				$output .= "<br/><br/>";
				$output .= "Betreff: ".$row->topic."<br/><br/>";
				$output .= $row->content."<br/><hr/>";
				echo $output;
			}
	}else
		echo "Nicht gen&uuml;gend Parameter";
}
?>