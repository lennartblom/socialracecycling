<html>
<head>
<link rel="stylesheet" type="text/css" href="css/notif.css"/> <!-- <link rel="stylesheet" type="text/css" href="css/style.css"/> -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/notif.js"></script>
</head>
<body>
<?php
	require_once('ink/functions.ink.php');
	require_once('ink/global.php');
	require_once('ink/db.ink.php');
	
	/*
	$notifTable = "CREATE TABLE notifications (notifID INT(8) AUTO_INCREMENT, userFromID INT(8), userToID INT(8), 
						type TEXT, date TIMESTAMP, `read` TINYINT(1), link TEXT, content TEXT, PRIMARY KEY (notifID))";
	*/
	
	if(isset($_GET['user'])){			
		$user = $_GET['user'];
		
		if(isset($_GET['showall'])){
			$showall = 1;
			/*
			if($_GET['showall']<<1)
				$showall = 0;
			*/
		}else
			$showall = 0;
			
		if(isset($_GET['limit']))	
			$limit = $_GET['limit'];
		else
			$limit = 0;	
			
		if(isset($_GET['url']))	
			$url = $_GET['url'];
		else
			$url= "../";		
		
		/*
		echo Counter?!
		*/
		
		//Counter
		$sql = "SELECT COUNT(*)
				FROM notifications
				WHERE userToID = '$user' 
					AND `read` = 0
					";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
				die('Ung&uuml;ltige Abfrage: ' . mysql_error());
		else{
			$row = mysql_fetch_row($result);
			if($row[0]>0)
				echo '<div id="notif" style="height:125;width:85;">
					<br/><br/><br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<b><font color="#FFFFFF">'.$row[0].'</font></b></div>';
			else	
				echo '<div id="notif" style="height:125;width:85;">
					<br/><br/><br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<font color="#FFFFFF">0</font></div>';
		}		
		
		echo '<div id="notif_display" >';
		
		//Anzeige
		//Unread
		$sql = "SELECT notifID, userFromID, userToID, type, date, link, content, name, lastname 
				FROM  notifications, user 
				WHERE  userFromID = user.ID 
					AND notifications.userToID = '$user' 
					AND  notifications.`read` = 0 
				ORDER BY notifications.date DESC
					";
		if($limit>0)
			$sql = "SELECT notifID, userFromID, userToID, type, date, link, content, name, lastname 
					FROM  notifications, user 
					WHERE  userFromID = user.ID 
						AND notifications.userToID = '$user'
						AND  notifications.`read` = 0 
					ORDER BY notifications.date DESC
					LIMIT $limit
						";		
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		if (!$result)
				die('Ung&uuml;ltige Abfrage: ' . mysql_error());
		else{
			while($row = @mysql_fetch_object($result)){ 
				if($row->type == "inv"){
					//$url = $_SERVER['REQUEST_URI']; // parameter setzen
					echo '<div class="notif_inv"><font color="#FFFFFF"><b>'.date("d.m.Y - H:i",strtotime($row->date)).'<br/>Einladung von '.$row->name.' '.$row->lastname.'<br/>'.$row->content.'<br/>
						<div style="margin-left:30;height:30px;width:120px;float:left;">
						<form action="process-notif.php?n='.$row->notifID.'&s=acc&url='.$url.'" method="post"><input name="accept_team" value="Annehmen" style="display:block;width:100;" type="submit" /></form>
						</div>
						<div style="height:30px;width:120px;float:left;">
						<form action="process-notif.php?n='.$row->notifID.'&s=dec&url='.$url.'" method="post"><input name="decline_team" value="Ablehnen" style="display:block;width:100;" type="submit" /></form>
						</div>
						'.'</b></font></div><hr style="background:white;clear:both;" />';
				}else
					if($row->type == "msg")
						echo '<a class="notif_msg" href="process-notif.php?url='.$row->link.'&n='.$row->notifID.'" id="button-contact"><span style="display:block;"><font color="#FFFFFF"><b>'.date("d.m.Y - H:i",strtotime($row->date)).'<br/>Neues von '.$row->name.' '.$row->lastname.'<br/>'.$row->content.'</b></font></span></a><hr style="background:white;" />';		
			}
			if($limit>0){
				$sql = "SELECT COUNT(*) 
						FROM (
								SELECT notifID 
								FROM notifications 
								WHERE userToID = '$user' 
									AND `read` = 0
								LIMIT $limit
								) 
						AS tmp	
							";
				$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
				if (!$result)
					die('Ung&uuml;ltige Abfrage: ' . mysql_error());
				else{
					$row = mysql_fetch_row($result);
					$count = $row[0];
				}	
			}		
		}
		if($showall == 1){
			//Read
			$sql = "SELECT notifID, userFromID, userToID, type, date, link, content, name, lastname 
					FROM  notifications, user 
					WHERE  userFromID = user.ID 
						AND notifications.userToID = '$user' 
						AND  notifications.`read` = 1 
					ORDER BY notifications.date DESC
						";
			if($limit>0){
				$new_limit = $limit - $count;
				if(($new_limit)>1)
					$sql = "SELECT notifID, userFromID, userToID, type, date, link, content, name, lastname 
							FROM  notifications, user
							WHERE  userFromID = user.ID 
								AND notifications.userToID = '$user' 
								AND  notifications.`read` = 1 
							ORDER BY notifications.date DESC
							LIMIT $new_limit
								";	
				else
					$sql = "SELECT * 
							FROM notifications 
							WHERE userFromID = -1
								";			
			}	
			$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
			if (!$result)
					die('Ung&uuml;ltige Abfrage: ' . mysql_error());
			else{
				while($row = mysql_fetch_object($result)){ 
					if($row->type == "inv"){
						//$url = $_SERVER['REQUEST_URI'];
						$sql = "SELECT team 
								FROM user 
								WHERE ID = '$user' 
								LIMIT 1
									";
						$tmp_result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
						if (!$tmp_result)
							die('Ung&uuml;ltige Abfrage: ' . mysql_error());
						else{
							$tmp_row1 = mysql_fetch_row($tmp_result);
							$sql = "SELECT team 
									FROM user
									WHERE ID = '$row->userFromID'
									LIMIT 1
										";
							$tmp_result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
							if (!$tmp_result)
								die('Ung&uuml;ltige Abfrage: ' . mysql_error());
							else{
								$tmp_row2 = mysql_fetch_row($tmp_result);
								if($tmp_row1[0] == $tmp_row2[0])
									$status = "- Angenommen -";
								else
									$status = "- Abgelehnt -";
							}	
						}					
						echo '<div class="notif_inv"><font color="#FFFFFF">'.date("d.m.Y - H:i",strtotime($row->date)).'<br/>Einladung von '.$row->name.' '.$row->lastname.'<br/>'.$row->content.'<br/>'.
							$status.'</font></div><hr style="background:white;clear:both;" />';	
					}else
						if($row->type == "msg")
							echo '<a class="notif_msg" href="process-notif.php?url='.$row->link.'&n='.$row->notifID.'" id="button-contact"><span style="display:block;"><font color="#FFFFFF">'.date("d.m.Y - H:i",strtotime($row->date)).'<br/>Neues von '.$row->name.' '.$row->lastname.'<br/>'.$row->content.'</font></span></a><hr style="background:white;" />';
				}
			}
		}	
	echo '</div>';				
	}
	else{
		echo "Nicht eingeloggt"; // || BLANK
	}
?>
</body>
</html>