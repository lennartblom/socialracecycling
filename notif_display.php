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
					$timespan = getTimespan($row->date); //vor x Minuten/Stunden/Tagen/Wochen/Monaten/Jahren
					$inv = '<div class="notification-element">
							<p><div style="float:left;"><img src="images/notifications/team-invite.png" />&nbsp;&nbsp;'.date("d.m.Y - H:i",strtotime($row->date)).'</div><div style="float:right; margin-top:8px;">'.$timespan.'</div><div style="clear:both;"><br/><span class="bold">'.$row->name.' '.$row->lastname.'</span> '.$row->content.'</div></p>
							<ul id="notification-confirm">
							<li><a href="process-notif.php?n='.$row->notifID.'&s=acc&url='.$url.'"><img src="images/notifications/confirm.png" /> annehmen</a></li>
							<li><a href="process-notif.php?n='.$row->notifID.'&s=dec&url='.$url.'"><img src="images/notifications/decline.png" /> ablehnen</a></li>
							</ul>
							</div>';	
					echo $inv;	
				}else
					if($row->type == "msg"){
						$timespan = getTimespan($row->date); //vor x Minuten/Stunden/Tagen/Wochen/Monaten/Jahren	
						$msg = '<div class="notification-element" onclick="';
						$msg .= "location.href='process-notif.php?url=".$row->link."&n=".$row->notifID."'";
						$msg .= ';" style="cursor:pointer;"><p><div style="float:left;"><img src="images/notifications/new-activity.png" />&nbsp;&nbsp;'.date("d.m.Y - H:i",strtotime($row->date)).'</div><div style="float:right; margin-top:5px;">'.$timespan.'</div><div style="clear:both;"><br/><span class="bold">'.$row->name.' '.$row->lastname.'</span> '.$row->content.'</div></p></div>';
						echo $msg;
					}	
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
			echo '<hr/><div align="center">Gelesen</div><hr/>';
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
						$sql = "SELECT confirm 
								FROM notifications
								WHERE userToID = '$user' AND type = 'inv' AND notifID = '$row->notifID'
								LIMIT 1
									";
						$tmp_result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
						if (!$tmp_result)
							die('Ung&uuml;ltige Abfrage: ' . mysql_error());
						else{
							$tmp_row = mysql_fetch_row($tmp_result);
							if($tmp_row[0] == 2){
									$status = "- Angenommen -";
									$status_img = '<img src="images/notifications/confirm.png" />'; 
							}else
								if($tmp_row[0] == 1){
									$status = "- Abgelehnt -";
									$status_img = '<img src="images/notifications/decline.png" />';
								}else{
									$status = "";
									$status_img = "";
								}	
						}					
						$timespan = getTimespan($row->date); //vor x Minuten/Stunden/Tagen/Wochen/Monaten/Jahren
						$inv = '<div class="notification-element">
								<p><div style="float:left;"><img src="images/notifications/team-invite.png" />&nbsp;&nbsp;'.date("d.m.Y - H:i",strtotime($row->date)).'</div><div style="float:right; margin-top:8px;">'.$timespan.'</div><div style="clear:both;"><br/>'.$row->name.' '.$row->lastname.' '.$row->content.'</div></p>
								<ul id="notification-confirm">
								<li> '.$status_img.' '.$status.' </li>
								</ul>
								</div>';
						echo $inv;	
					}else
						if($row->type == "msg"){
							$timespan = getTimespan($row->date); //vor x Minuten/Stunden/Tagen/Wochen/Monaten/Jahren
							$msg = '<div class="notification-element" href="process-notif.php?url='.$row->link.'&n='.$row->notifID.'"><p><div style="float:left;"><img src="images/notifications/new-activity.png" />&nbsp;&nbsp;'.date("d.m.Y - H:i",strtotime($row->date)).'</div><div style="float:right; margin-top:5px;">'.$timespan.'</div><div style="clear:both;"><br/>'.$row->name.' '.$row->lastname.' '.$row->content.'</div></p></div>';
							echo $msg;
						}		
				}
			}
		}
	if($showall == 0){		
		echo '<div id="notif-showall" align="center"><a rel="lightbox" title="Alle Benachrichtigungen anzeigen" href="notifications.php">Alle anzeigen</a></div>';	
	}
	echo '</div>';				
	}
	else{
		echo "Nicht eingeloggt"; // || BLANK
	}
?>