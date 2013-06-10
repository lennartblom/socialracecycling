<?php
if(isset($_POST['create_team']) AND $_POST['create_team']=='Team erstellen') {			
	$errors = array();
	
	if($_POST['team_name']==''){	  	
		$errors[] = "Bitte benutzen Sie das Formular aus dem Registrierungsbereich";
		$tpl->assign('errors',$errors);
	}else{  
			$teamName = trim($_POST['team_name']);
			$result = mysql_query("SELECT COUNT(name) FROM teams WHERE name = '$teamName'"); 
			if (!$result)
				die('Ungültige Abfrage: ' . mysql_error());
			else{
				$row = mysql_fetch_row($result);
				if($row[0]>0)
					$errors[]="Name bereits vorhanden";
			}
		
			if(!isset($_POST['team_information']))
					$teamInfo = "Leider keine Beschreibung vorhanden";
				else 
					if(trim($_POST['team_information'])=="")
						$teamInfo = "Leider keine Beschreibung vorhanden";
					else	
						$teamInfo = $_POST['team_information'];
			
			$teamLogo=""; 
			if(isset($_FILES['team_logo']))  
				if($_FILES['team_logo']['name'] != ""){
					$filename = $_FILES['team_logo']['name'];
					$file_tmp =$_FILES['team_logo']['tmp_name'];
					if(($_FILES['team_logo']['size']) > 512000)
						$errors[]="Datei ist zu groß (max. 500KB)";
					else{		
						$extension = substr($filename, strrpos($filename, '.')+1); 
						$allowed_ex= array("jpeg","jpg");
						if(!in_array($extension,$allowed_ex))
							$errors[]="Falsches Dateiformat (nur .jpg/.jpeg)";
						else{	
							$img_size=getimagesize($file_tmp);
							if($img_size[0]>500 || $img_size[1]>500)	
								$errors[]="Bild überschreitet Maße (max. 500*500px)";
							else
								$teamLogo=trim($_SESSION['UserID']);
						}
					}			
				}else 
					$teamLogo = "default";
		
			if(!isset($_POST['team_website']))
				$teamURL = "Keine Webseite angegeben";
			else{
				if(trim($_POST['team_website'])!="")
					if(preg_match("#^(http:\/\/|https:\/\/|www\.)(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)(:(\d+))?(\/)*$#i",trim($_POST['team_website'])))
						$teamURL = trim($_POST['team_website']);
					else {
						$errors[]="Die angegebene Webseite ist ungültig";
						$teamURL = "Keine Webseite angegeben";
					}
				else
					$teamURL = "Keine Webseite angegeben";	
			}
			
			$tpl->assign('name', $teamName);
			$tpl->assign('logo', $teamLogo);
			if($teamURL != "Keine Webseite angegeben")
				$tpl->assign('website', $teamURL);		
	}
	if(count($errors)){
		if(count($errors)>1)
			for($i=0;$i<count($errors)-1;$i++)
				$errors[$i].="<br/>";		
		$tpl->assign('errors',$errors);		
	}
	else{			
		$teamLead = trim($_SESSION['UserID']);
		$sql = "INSERT INTO
				teams
				(
				userID,
				logoID,
				name,
				info,
				website
				)
				VALUES
				(
				'".mysql_real_escape_string($teamLead)."',
				'".mysql_real_escape_string($teamLogo) ."',
				'".mysql_real_escape_string($teamName)."',
				'".mysql_real_escape_string(trim($teamInfo))."',
				'".mysql_real_escape_string(trim($teamURL))."'
				)";		
									
		mysql_query($sql) OR die ("<pre>n" .$sql. "</pre>n".mysql_error());
				
		$result = mysql_query("SELECT teamID FROM teams WHERE userID = '$teamLead' AND name = '$teamName' LIMIT 0, 1"); 
		if (!$result)
			die('Ungültige Abfrage: ' . mysql_error());
		else{
			$row = mysql_fetch_row($result);
			$teamID = $row[0];
		}
		
		if($teamLogo != "default")	
			move_uploaded_file($file_tmp,"images/teamlogos/logo_team_id_$teamID.jpg");
			
		$tpl->assign('name', $teamName);
		$tpl->assign('logo', $teamLogo);
		if($teamURL != "Keine Webseite angegeben")
			$tpl->assign('website', $teamURL);
						  			  
		$tpl->display('01_tpl/internal/team-add-success.tpl'); 
	}
}				
?>