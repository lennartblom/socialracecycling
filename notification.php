<?php
	session_start();
	
	require_once('ink/functions.ink.php');
	require_once('ink/global.php');
	require_once('ink/db.ink.php');
	
	if(isset($_SESSION['UserID'])){
		$tpl->assign('online',true);
		$tpl->assign('profile',true);
		$tpl->assign('usercp',true);
		
		$tpl->assign('title', 'Teams');
		
		$tpl->assign('name',$_SESSION['Vorname']);
		$tpl->assign('lastname',$_SESSION['Nachname']);
		$tpl->assign('id',$_SESSION['UserID']);
		
		require_once('ink/footer_data.ink.php');
		
			
			if(isset($_GET['r'])){
				$response = $_GET['r'];
				if($response != ""){
					if($response == "true")
						$response = "User wurde erfolgreich eingeladen!";
					else
						if($response == "false")
							$response = "User konnte nicht eingeladen werden.<br/>Möglicherweise ist er bereits Teil eines Teams.";
				}else
					$response = "---";
			}else
				$response = "---";
				
			echo '
			<html>
			<head>
			</head>
			<body style="background-color:#2E64FE">
			<br/><br/><br/>
			<div align="center">
			<h1>Notification-System</h1>
			<iframe src="notif_timer.php" height="500" width="350" frameborder="0" border="0"></iframe>
			<br/>
			<form action="notifTester.php?t=inv&l=notification.php" method="post"><input name="add_inv" value="Random Invite" style="display:block;width:120;" type="submit" /></form>
			<form action="notifTester.php?t=msg&l=notification.php" method="post"><input name="add_msg" value="Random Message" style="display:block;width:120;" type="submit" /></form>
			<br/>
			<h3>Responses</h3>'.
			$response
			.'</div>
			</body>
			</html>
			';
	}
	else{
		$tpl->assign('online',false);
		$tpl->assign('title','Nicht eingeloggt');
		$tpl->display('01_tpl/frontpage/attempt.tpl');
	}
?>
