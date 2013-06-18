<?php
if(isset($_POST['abschicken']) AND $_POST['abschicken']=='Tourdaten abschicken') {			
	$errors = array();
	
	$tpl->assign('sekunden','none');
	$tpl->assign('minuten','none');
	
	
	if(!isset($_POST['Date_Day'],
			  $_POST['Date_Month'],
			  $_POST['Date_Year'],
			  $_POST['Time_Hours'],
			  $_POST['Time_Minutes'],
			  $_POST['distance'])){
	  

		// Ein Fehlerarray hinzugügen
		$errors[] = "Bitte benutzen Sie das Formular aus dem Registrierungsbereich";
		$tpl->assign('errors',$errors);
	}else{  
				  
			if(trim($_POST['Date_Day'])=='')
				$errors[]= "-Tag";

			if(trim($_POST['Date_Month'])=='')
				$errors[]= "-Monat";

			if(trim($_POST['Date_Year'])=='')
				$errors[]= "-Jahr";

			if(trim($_POST['Time_Hours'])=='')
				$errors[]= "-Stunden";
				
			if(trim($_POST['Time_Minutes'])=='')
				$errors[]= "-Minuten";
			
			if(trim($_POST['distance'])=='')
				$errors[]= "-Distanz";
				
			$tpl->assign('errors',$errors);
			
			$tpl->assign('tag', $_POST['Date_Day']);
			$tpl->assign('monat', $_POST['Date_Month']);
			$tpl->assign('jahr', $_POST['Date_Year']);
			$tpl->assign('stunden', $_POST['Time_Hours']);
			$tpl->assign('minuten', $_POST['Time_Minutes']);
			$tpl->assign('sekunden', $_POST['Time_Seconds']);
			$tpl->assign('distanz', $_POST['distance']);
			$tpl->assign('infos', $_POST['moreinformation']);
			$tpl->assign('kandenz', $_POST['cadence']);
			$tpl->assign('hoehenmeter', $_POST['heights']);	
			$tpl->assign('herzfrequenz', $_POST['herzfrequenz']);
			$tpl->assign('zeit',$time);	
	}
	
	if(count($errors)){
		$tpl->assign('errors',$errors);
		
	}
	else{
						$_POST['distance']=str_replace(",", ".", $_POST['distance']);
						
						
						if($_POST['Date_Day']<=9){
							$_POST['Date_Day']="0".$_POST['Date_Day']."";
						}
						
						
						$date = "".$_POST['Date_Year']."-".$_POST['Date_Month']."-".$_POST['Date_Day']."";
						$duration = mktime($_POST['Time_Hours'],$_POST['Time_Minutes'],$_POST['Time_Seconds'],1,1,1970);
						
						$time=date("H:i:s",$duration);			
												
						$avgspeed = round(($_POST['distance']*60)/($duration/60),1);
							
						$sql = "INSERT INTO
									   touren
										 (UserID,
										 typ,
										 date,
										 distance,
										 duration,
										 `average-speed`,
										 herzfrequenz,
										 `average-cadence`,
										 `elevator-difference`,
										 `other-information`
										 )
								VALUES
										  ('".mysql_real_escape_string(trim($_SESSION['UserID']))."',
										  '".mysql_real_escape_string(trim($_POST['activity_type']))."',
										  '".mysql_real_escape_string(trim($date)) ."',
										  '".mysql_real_escape_string(trim($_POST['distance']))."',
										  '".mysql_real_escape_string(trim($duration))."',
										  '".mysql_real_escape_string(trim($avgspeed))."',
										  '".mysql_real_escape_string(trim($_POST['herzfrequenz']))."',
										  '".mysql_real_escape_string(trim($_POST['cadence']))."',
										  '".mysql_real_escape_string(trim($_POST['heights']))."',
										  '".mysql_real_escape_string(trim($_POST['moreinformation']))."'
										  )";		
									
								mysql_query($sql) OR die ("<pre>n" .$sql. "</pre>n".mysql_error());								
		  
						  $tpl->assign('tag', $_POST['Date_Day']);
						  $tpl->assign('monat', $_POST['Date_Month']);
						  $tpl->assign('jahr', $_POST['Date_Year']);
						  
						  $tpl->assign('zeit', date("H:i:s",$duration));
						  $tpl->assign('durchschnitt', $avgspeed);
						  $tpl->assign('distanz', $_POST['distance']);
						  
						 
						  require_once('ink/footer_data.ink.php');
						  
						  $tpl->display('01_tpl/internal/tour-add-success.tpl');
						  
						  require_once('ink/addNotif-Tour.ink.php');
							
						  if(($_SESSION['UserID'] <> 22) AND ($_SESSION['UserID'] <> 25)AND ($_SESSION['UserID'] <> 70)){
			
										  
								  $mail 	= 'admin@lennart-blom.de';
								  $prefix 	= 'Social Race Cycling: Neue Tour wurde hinzugefügt';
								  $text		= "
		Hi Lennart, auf deiner Seite \"Social Race Cycling\" wurde von ".$_SESSION['Vorname']." ".$_SESSION['Nachname']." eine Tour hinzugefügt!
		Datum: ".$_POST['Date_Day'].".".$_POST['Date_Month'].".".$_POST['Date_Year']."
		Distanz: ".$_POST['distance']."
		Dauer: $time
		Durchschnittsgeschwindigkeit: $avgspeed
		Mehr Informationen: ".$_POST['moreinformation']."
		
		Gesendet durch: www.socialracecycling.de
								  
								  ";
									
								  $result = mail($mail, $prefix, $text, 'From: ' . $mail);
						}
	}
							
}

$cur_day   = date("d");
$cur_month = date("m");
$cur_year  = date("Y");

$tpl->assign('heute_tag',   $cur_day);
$tpl->assign('heute_monat', $cur_month);
$tpl->assign('heute_jahr', 	$cur_year);
