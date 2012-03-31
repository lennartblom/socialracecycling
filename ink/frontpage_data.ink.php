<?php 
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
//------------------------------{ ≈≈≈≈≈≈ Übergabe der Wochenkilometer des Diagramms ≈≈≈≈≈≈ }----------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	

$sql = "SELECT
				SUM(`distance`) AS charts_distance_week
		FROM
				touren
		WHERE
				WEEKOFYEAR(date)=((WEEKOFYEAR(CURDATE()))+".$_SESSION['week_change'].") AND 
				YEAR(date)=((YEAR(curdate()))+".$_SESSION['year_change'].") AND 
				UserID ='".$_SESSION['UserID']."'
		";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

$row = mysql_fetch_assoc($result);

$tpl->assign('charts_weekkilometer', round($row['charts_distance_week'],2));




$sql = "SELECT 
					SUM(distance) as charts_distance_month
			FROM 
					touren 
			WHERE 
					MONTH(date)=((MONTH(curdate()))+".$_SESSION['month_change'].") AND 
					YEAR(date)=((YEAR(curdate()))+".$_SESSION['year_change'].") AND
					 UserID ='".$_SESSION['UserID']."'
			";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

$row = mysql_fetch_assoc($result); 

$tpl->assign('charts_monthkilometer', round($row['charts_distance_month'],2));

//------------------------------------------------------------------------------------------------------------------------------//
//------------------------------{ ≈≈≈≈≈≈ Übergabe der Monatskilometer des Diagramms ≈≈≈≈≈≈ }----------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	

$sql = "SELECT
				SUM(distance) as charts_distance_year
		FROM 
				touren 
		WHERE 
				YEAR(date)=((YEAR(curdate()))+".$_SESSION['year_change'].") AND
				 UserID ='".$_SESSION['UserID']."'
		";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

$row = mysql_fetch_assoc($result); 
	
$tpl->assign('charts_yearkilometer', round($row['charts_distance_year'],2));



//------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------{ ≈≈≈≈≈≈ Programm für die Anderungsvariablen ≈≈≈≈≈≈ }----------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	

if(isset($_POST['plot_change'])){
	if($_POST['plot_change']=='Woche vor →'){
		$_SESSION['week_change']=$_POST['week_change']+1;
	}
	if($_POST['plot_change']=='aktuelle Woche ↓'){
		$_SESSION['week_change']=0;
	}
	if($_POST['plot_change']=='← Woche zurück'){
		$_SESSION['week_change']=$_POST['week_change']-1;
	}
	
	
	if($_POST['plot_change']=='Monat vor →'){
		$_SESSION['month_change']=$_POST['month_change']+1;
	}
	if($_POST['plot_change']=='aktueller Monat ↓'){
		$_SESSION['month_change']=0;
	}
	if($_POST['plot_change']=='← Monat zurück'){
		$_SESSION['month_change']=$_POST['month_change']-1;
	}
	
	
	if($_POST['plot_change']=='Jahr vor →'){
		$_SESSION['year_change']=$_POST['year_change']+1;
	}
	if($_POST['plot_change']=='aktuelles Jahr ↓'){
		$_SESSION['year_change']=0;
	}
	if($_POST['plot_change']=='← Jahr zurück'){
		$_SESSION['year_change']=$_POST['year_change']-1;
	}
}	 

$tpl->assign('week_change', $_SESSION['week_change']); 
$tpl->assign('month_change', $_SESSION['month_change']); 
$tpl->assign('year_change', $_SESSION['year_change']); 


//------------------------------------------------------------------------------------------------------------------------------//
//----------------------{ ≈≈≈≈≈≈ Übergabe von der Kilometeranzahl der einzelnen Wochentage ≈≈≈≈≈≈ }---------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	

$dayofweekresKM = array();
		
	for($i = 0; $i < 7; $i++){
		$j = $i+1;
		switch($j){
			case 1:
				$dayofweekString = 'sunday';
				break;
			case 2:
				$dayofweekString = 'monday';
				break;
			case 3:
				$dayofweekString = 'tuesday';
				break;
			case 4:
				$dayofweekString = 'wednesday';
				break;
			case 5:
				$dayofweekString = 'thursday';
				break;
			case 6:
				$dayofweekString = 'friday';
				break;
			case 7:
				$dayofweekString = 'saturday';
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
	
	
	$tpl->assign('monday', 		round($dayofweekresKM['day_distance_monday'],	2));
	$tpl->assign('tuesday',		round($dayofweekresKM['day_distance_tuesday'],	2));
	$tpl->assign('wednesday',	round($dayofweekresKM['day_distance_wednesday'],2));
	$tpl->assign('thursday', 	round($dayofweekresKM['day_distance_thursday'],	2));
	$tpl->assign('friday',   	round($dayofweekresKM['day_distance_friday'],	2));
	$tpl->assign('saturday',	round($dayofweekresKM['day_distance_saturday'],	2));
	$tpl->assign('sunday', 	 	round($dayofweekresKM['day_distance_sunday'],	2));
	
	
	if(!isset($monday)){
		$monday=1;
	}
	if(!isset($tuesday)){
		$tuesday=1;
	}
	if(!isset($wednesday)){
		$wednesday=1;
	}
	if(!isset($thursday)){
		$thursday=1;
	}
	if(!isset($friday)){
		$friday=1;
	}
	if(!isset($saturday)){
		$saturday=1;
	}
	if(!isset($sunday)){
		$sunday=1;
	}


//------------------------------------------------------------------------------------------------------------------------------//
//----------------------{ ≈≈≈≈≈≈ Übergabe von der Kilometeranzahl der einzelnen Monatstage ≈≈≈≈≈≈ }---------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	

	
	
	$dayofmonth = array();
	$dayofmonthresKM = array();
	$monthkilometer = array();
	$tpl->assign('monthkilometer', array());
	
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
						 UserID ='".$_SESSION['UserID']."'
				";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	
		$row = mysql_fetch_assoc($result);
		foreach($row as $key => $value){
			$dayofmonthres[$key] = "['".($i)."-".(date("M",mktime(0, 0, 0, (date('m')+$_SESSION['month_change']), 1, 2000)))."-".date('y')."', ".round($value,1)."],";
		}
		
	}
	$tpl->assign('monthkilometer', $dayofmonthres );
	
	
//------------------------------------------------------------------------------------------------------------------------------//
//--------------------------------------{ ≈≈≈≈≈≈ Titel der einzelen JQPlot Diagramme ≈≈≈≈≈≈ }---------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	

	
	
	


	$kw1 = mktime(0,0,0,date('m'),((date('j')+7)-1+$_SESSION['week_change']*7),date('Y')); 
	$montag = $kw1 + 86400 * (7*($woche-1)- date('w', $kw1)+1);
	$sonntag = $montag + 86400*6;
	
	setlocale(LC_TIME, 'de_DE'); 	
	
	$current_week="".date('d.n.', $montag).date("", mktime(0, 0, 0, 1, 1,date('y')))."20".(date('y')+$_SESSION['year_change'])." - ".date('d.n', $sonntag).date("", mktime(0, 0, 0, 1, 1,date('y'))).".20".(date('y')+$_SESSION['year_change'])."";
	
	$current_month="". date("F", mktime(0, 0, 0, (date('m')+$_SESSION['month_change']), 1, date('y')))." 20".(date('y')+$_SESSION['year_change'])."";
	
	$current_year="". date("Y", mktime(0, 0, 0, date('m'), 1, (date('y')+$_SESSION['year_change'])))."";
	
	$current_month=str_replace("March", "März", $current_month);
	
	$tpl->assign('current_week', $current_week);
	$tpl->assign('current_month', $current_month);
	$tpl->assign('current_year', $current_year);
	
	
//------------------------------------------------------------------------------------------------------------------------------//
//----------------------{ ≈≈≈≈≈≈ Übergabe von der Kilometeranzahl der einzelnen Monate ≈≈≈≈≈≈ }-------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	

	
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
						MONTH(date)=$j AND YEAR(date)=((YEAR(curdate()))+".$_SESSION['year_change'].")  AND UserID ='".$_SESSION['UserID']."'
				";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

	
		$row = mysql_fetch_assoc($result);
		
		foreach($row as $key => $value){
				$monthofyear[$key] = "[' $monthofyearString ', ".round($value,2)."],";
		}
	
	}
	
	$tpl->assign('yearkilometer', $monthofyear );
	
	
