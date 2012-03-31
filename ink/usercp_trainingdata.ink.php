<?php

if(isset($_GET['id'])){
	
	$id=$_GET['id'];
//------------------------------------------------------------------------------------------------------------------------------//
//--------------------------------------{ ≈≈≈≈≈≈ Abfrage der Benutzernamen ≈≈≈≈≈≈ }-------------------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//

$sql = "SELECT
				Name,
				Lastname
		FROM
				user
		WHERE
				ID = $id
		";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

$row = mysql_fetch_assoc($result);

$tpl->assign('vorname',$row['Name']);
$tpl->assign('nachname',$row['Lastname']);
	
	
//------------------------------------------------------------------------------------------------------------------------------//
//--------------------------------------{ ≈≈≈≈≈≈ Deklarieren der Änderungsvariablen ≈≈≈≈≈≈ }----------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	
	
	if(!isset($_SESSION['week_change'])){
		$_SESSION['week_change']=0;
	}
	
	if(!isset($_SESSION['month_change'])){
		$_SESSION['month_change']=0;
	}
	
	if(!isset($_SESSION['year_change'])){
		$_SESSION['year_change']=0;
	}
	
//------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------{ ≈≈≈≈≈≈ Programm für die Anderungsvariablen ≈≈≈≈≈≈ }----------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	
	
	if(isset($_POST['plot_change'])){
		$_SESSION['member-choice']=$_POST['member-choice'];
		
		if($_POST['plot_change']=='Woche vor →'){
			$_SESSION['week_change']=$_POST['week_change']+1;
			header("Location: usercp-profile_training.php?id=$id#wochenansicht"); 
		}
		if($_POST['plot_change']=='aktuelle Woche ↓'){
			$_SESSION['week_change']=0;
			header("Location: usercp-profile_training.php?id=$id#wochenansicht"); 
		}
		if($_POST['plot_change']=='← Woche zurück'){
			$_SESSION['week_change']=$_POST['week_change']-1;
			header("Location: usercp-profile_training.php?id=$id#wochenansicht"); 
		}
		
		
		if($_POST['plot_change']=='Monat vor →'){
			$_SESSION['month_change']=$_POST['month_change']+1;
			header("Location: usercp-profile_training.php?id=$id#monatsansicht"); 
		}
		if($_POST['plot_change']=='aktueller Monat ↓'){
			$_SESSION['month_change']=0;
			header("Location: usercp-profile_training.php?id=$id#monatsansicht"); 
		}
		if($_POST['plot_change']=='← Monat zurück'){
			$_SESSION['month_change']=$_POST['month_change']-1;
			header("Location: usercp-profile_training.php?id=$id#monatsansicht"); 
		}
		
		
		if($_POST['plot_change']=='Jahr vor →'){
			$_SESSION['year_change']=$_POST['year_change']+1;
			header("Location: usercp-profile_training.php?id=$id#jahresansicht"); 
		}
		if($_POST['plot_change']=='aktuelles Jahr ↓'){
			$_SESSION['year_change']=0;
			header("Location: usercp-profile_training.php?id=$id#jahresansicht"); 
		}
		if($_POST['plot_change']=='← Jahr zurück'){
			$_SESSION['year_change']=$_POST['year_change']-1;
			header("Location: usercp-profile_training.php?id=$id#jahresansicht"); 
		}
	}	  
	

	$tpl->assign('week_change', $_SESSION['week_change']); 
	$tpl->assign('month_change', $_SESSION['month_change']); 
	$tpl->assign('year_change', $_SESSION['year_change']); 
	
//------------------------------------------------------------------------------------------------------------------------------//
//----------{ ≈≈≈≈≈≈ Übergabe von der Kilometeranzahl der einzelnen Wochentage (Benutzer eins) ≈≈≈≈≈≈ }-----------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	
	
	$dayofweekresKM_1 = array();
			
		for($i = 0; $i < 7; $i++){
			$j = $i+1;
			switch($j){
				case 1:
					$dayofweekString = 'sunday_1';
					break;
				case 2:
					$dayofweekString = 'monday_1';
					break;
				case 3:
					$dayofweekString = 'tuesday_1';
					break;
				case 4:
					$dayofweekString = 'wednesday_1';
					break;
				case 5:
					$dayofweekString = 'thursday_1';
					break;
				case 6:
					$dayofweekString = 'friday_1';
					break;
				case 7:
					$dayofweekString = 'saturday_1';
					break;
			}
			$sql = "SELECT 
					SUM(distance) as day_distance_$dayofweekString
			FROM 
					touren 
			WHERE 
					WEEKOFYEAR(date)=((WEEKOFYEAR(CURDATE()))+".$_SESSION['week_change'].") AND 
					YEAR(date)=((YEAR(curdate()))+".$_SESSION['year_change'].") AND 
					DAYOFWEEK(date)=$j AND
					UserID ='".$_SESSION['UserID']."'
				";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	
		$row = mysql_fetch_assoc($result);
		foreach($row as $key => $value){
			$dayofweekresKM[$key] = $value;
		}
		}

		
		$tpl->assign('monday_1', 		round($dayofweekresKM['day_distance_monday_1'],		2));
		$tpl->assign('tuesday_1',		round($dayofweekresKM['day_distance_tuesday_1'],	2));
		$tpl->assign('wednesday_1',		round($dayofweekresKM['day_distance_wednesday_1'],	2));
		$tpl->assign('thursday_1', 		round($dayofweekresKM['day_distance_thursday_1'],	2));
		$tpl->assign('friday_1',   		round($dayofweekresKM['day_distance_friday_1'],		2));
		$tpl->assign('saturday_1',		round($dayofweekresKM['day_distance_saturday_1'],	2));
		$tpl->assign('sunday_1', 	 	round($dayofweekresKM['day_distance_sunday_1'],		2));
	
//------------------------------------------------------------------------------------------------------------------------------//
//----------{ ≈≈≈≈≈≈ Übergabe von der Kilometeranzahl der einzelnen Wochentage (Benutzer zwei) ≈≈≈≈≈≈ }-----------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	
		
		$dayofweekresKM_2 = array();
			
		for($i = 0; $i < 7; $i++){
			$j = $i+1;
			switch($j){
				case 1:
					$dayofweekString = 'sunday_2';
					break;
				case 2:
					$dayofweekString = 'monday_2';
					break;
				case 3:
					$dayofweekString = 'tuesday_2';
					break;
				case 4:
					$dayofweekString = 'wednesday_2';
					break;
				case 5:
					$dayofweekString = 'thursday_2';
					break;
				case 6:
					$dayofweekString = 'friday_2';
					break;
				case 7:
					$dayofweekString = 'saturday_2';
					break;
			}
			$sql = "SELECT 
							SUM(distance) as day_distance_$dayofweekString
					FROM 
							touren 
					WHERE 
							WEEKOFYEAR(date) = ((WEEKOFYEAR(CURDATE()))+".$_SESSION['week_change'].") AND 
							YEAR(date) = ((YEAR(curdate()))+".$_SESSION['year_change'].") 
							AND DAYOFWEEK(date)=$j 
							AND UserID = $id
					";
			$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	
			$row = mysql_fetch_assoc($result);
			foreach($row as $key => $value){
				$dayofweekresKM[$key] = $value;
			}
		}
		
		$tpl->assign('monday_2', 		round($dayofweekresKM['day_distance_monday_2'],		2));
		$tpl->assign('tuesday_2',		round($dayofweekresKM['day_distance_tuesday_2'],	2));
		$tpl->assign('wednesday_2',		round($dayofweekresKM['day_distance_wednesday_2'],	2));
		$tpl->assign('thursday_2', 		round($dayofweekresKM['day_distance_thursday_2'],	2));
		$tpl->assign('friday_2',   		round($dayofweekresKM['day_distance_friday_2'],		2));
		$tpl->assign('saturday_2',		round($dayofweekresKM['day_distance_saturday_2'],	2));
		$tpl->assign('sunday_2', 	 	round($dayofweekresKM['day_distance_sunday_2'],		2));
		

//------------------------------------------------------------------------------------------------------------------------------//
//---------{ ≈≈≈≈≈≈ Übergabe von der Kilometeranzahl der einzelnen Monatstage (Benutzer eins) ≈≈≈≈≈≈ }------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	
		
		$dayofmonth = array();
		$dayofmonthresKM_1 = array();
		
		for($i = 1; $i <= 31; $i++){
			$j = $i+1;
			$sql = "SELECT 
							SUM(distance) as day_distance_$i 
					FROM 
							touren 
					WHERE 
							 MONTH(date)=((MONTH(curdate()))+".$_SESSION['month_change'].") AND 
							 YEAR(date)=((YEAR(curdate()))+".$_SESSION['year_change'].")  AND 
							 DAYOFMONTH(date)=$i AND 
							 UserID ='".$_SESSION['UserID']."'
					";
			$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		
			$row = mysql_fetch_assoc($result);
			foreach($row as $key => $value){
				$dayofmonthresKM_1[$key] = "['".($i)."-".(date("M",mktime(0, 0, 0, (date(m)+$_SESSION['month_change']), 1, 2000)))."-".date(y)."', ".round($value,1)."],";
			}
		}
		
		$tpl->assign('monthkilometer_1', $dayofmonthresKM_1 );
//------------------------------------------------------------------------------------------------------------------------------//
//---------{ ≈≈≈≈≈≈ Übergabe von der Kilometeranzahl der einzelnen Monatstage (Benutzer zwei) ≈≈≈≈≈≈ }------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//
		
		$dayofmonth = array();
		$dayofmonthresKM_2 = array();
		
		for($i = 1; $i <= 31; $i++){
			$j = $i+1;
			$sql = "SELECT 
							SUM(distance) as day_distance_$i 
					FROM 
							touren 
					WHERE 
							 MONTH(date)=((MONTH(curdate()))+".$_SESSION['month_change'].") AND 
							 YEAR(date)=((YEAR(curdate()))+".$_SESSION['year_change'].") AND 
							 DAYOFMONTH(date)=$i AND 
							 UserID =$id
					";
			$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		
			$row = mysql_fetch_assoc($result);
			foreach($row as $key => $value){
				$dayofmonthresKM_2[$key] = "['".($i)."-".(date("M",mktime(0, 0, 0, (date(m)+$_SESSION['month_change']), 1, 2000)))."-".date(y)."', ".round($value,1)."],";
			}
		}
		
		$tpl->assign('monthkilometer_2', $dayofmonthresKM_2 );
	
//------------------------------------------------------------------------------------------------------------------------------//
//--------------------------------------{ ≈≈≈≈≈≈ Titel der einzelen JQPlot Diagramme ≈≈≈≈≈≈ }---------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	
		
		setlocale(LC_TIME, 'de_DE');
	
		$kw1 = mktime(0,0,0,date('m'),((date('j')+7)-1+$_SESSION['week_change']*7),date('Y')); 
		$montag = $kw1 + 86400 * (7*($woche-1)- date('w', $kw1)+1);
		$sonntag = $montag + 86400*6;
		
	
		$current_week="".date('d.n.', $montag).date("", mktime(0, 0, 0, 1, 1,date(y)))."20".(date(y)+$_SESSION['year_change'])." - ".date('d.n', $sonntag).date("", mktime(0, 0, 0, 1, 1,date(y))).".20".(date(y)+$_SESSION['year_change'])."";
					
			
		$current_month="". date("F", mktime(0, 0, 0, (date(m)+$_SESSION['month_change']), 1, date(y)))." 20".(date(y)+$_SESSION['year_change'])."";
		
		$current_year="". date("Y", mktime(0, 0, 0, date(m), 1, (date(y)+$_SESSION['year_change'])))."";
		
		
		$tpl->assign('current_week', $current_week);
		$tpl->assign('current_month', $current_month);
		$tpl->assign('current_year', $current_year);
		
//------------------------------------------------------------------------------------------------------------------------------//
//-----------------{ ≈≈≈≈≈≈ Übergabe von der Kilometeranzahl der einzelnen Monate (Benutzer eins) ≈≈≈≈≈≈ }--------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	
		
		$monthofyear_1 = array();
		
		for($i = 0; $i < 12; $i++){
			$j = $i+1;
			switch($j){
				case 1:
					$monthofyearString = 'Januar';
					break;
				case 2:
					$monthofyearString = 'Februar';
					break;
				case 3:
					$monthofyearString = 'Maerz';
					break;
				case 4:
					$monthofyearString = 'April';
					break;
				case 5:
					$monthofyearString = 'Mai';
					break;
				case 6:
					$monthofyearString = 'Juni';
					break;
				case 7:
					$monthofyearString = 'Juli';
					break;
				case 8:
					$monthofyearString = 'August';
					break;
				case 9:
					$monthofyearString = 'September';
					break;
				case 10:
					$monthofyearString = 'Oktober';
					break;
				case 11:
					$monthofyearString = 'November';
					break;
				case 12:
					$monthofyearString = 'Dezember';
					break;
			}
			$sql = "SELECT 
							SUM(distance) as month_distance_$monthofyearString
					FROM 
							touren 
					WHERE 
							MONTH(date)=1+$i AND YEAR(date)=((YEAR(curdate()))+".$_SESSION['year_change'].") AND UserID ='".$_SESSION['UserID']."'
					";
			$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	
		
			$row = mysql_fetch_assoc($result);
			
			foreach($row as $key => $value){
					$monthofyear_1[$key] = round($value,2);
				}
		
		}
		
		$tpl->assign('yearkilometer_1', $monthofyear_1 );
		
//------------------------------------------------------------------------------------------------------------------------------//
//-----------------{ ≈≈≈≈≈≈ Übergabe von der Kilometeranzahl der einzelnen Monate (Benutzer zwei) ≈≈≈≈≈≈ }--------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	
		
		$monthofyear_2 = array();
	
	
		for($i = 0; $i < 12; $i++){
			$j = $i+1;
			switch($j){
				case 1:
					$monthofyearString = 'Januar';
					break;
				case 2:
					$monthofyearString = 'Februar';
					break;
				case 3:
					$monthofyearString = 'Maerz';
					break;
				case 4:
					$monthofyearString = 'April';
					break;
				case 5:
					$monthofyearString = 'Mai';
					break;
				case 6:
					$monthofyearString = 'Juni';
					break;
				case 7:
					$monthofyearString = 'Juli';
					break;
				case 8:
					$monthofyearString = 'August';
					break;
				case 9:
					$monthofyearString = 'September';
					break;
				case 10:
					$monthofyearString = 'Oktober';
					break;
				case 11:
					$monthofyearString = 'November';
					break;
				case 12:
					$monthofyearString = 'Dezember';
					break;
			}
			$sql = "SELECT 
							SUM(distance) as month_distance_$monthofyearString
					FROM 
							touren 
					WHERE 
							MONTH(date)=1+$i AND YEAR(date)=((YEAR(curdate()))+".$_SESSION['year_change'].")  AND UserID =$id
					";
			$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	
		
			$row = mysql_fetch_assoc($result);
			
			foreach($row as $key => $value){
					$monthofyear_2[$key] = round($value,2);
			}
		
		}	
		
		$tpl->assign('yearkilometer_2', $monthofyear_2 );
		
//------------------------------------------------------------------------------------------------------------------------------//
//-----------------{ ≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈ }--------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	
	
	$tpl->assign('id',$id);
} else {
	
	$error = "Du hast kein Profil ausgewählt. Bitte geh zur <a href=\"usercp-mitgliederliste.php\">Mitgliederliste</a> zurück und probiere es erneut";
	
	$tpl->assign('error',$error);
	
	
}