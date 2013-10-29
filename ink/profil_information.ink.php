<?php


$sql="SELECT Name, Lastname, Email, letzte_Aktion, Registrierungsdatum, street, city, PLZ, country, gender, birthday, interests, privacy, job, bikemodel, ID
FROM user
WHERE ID =".$_GET['UserID']."
		";
		
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

$row = mysql_fetch_assoc($result);

$privacy=str_split($row['privacy']);


$profileinformation=$privacy['0'];
$activitychart=$privacy['1'];
$trainingdetails=$privacy['2'];
$activitylog=$privacy['3'];

if($row['PLZ']=='0'){
	$row['PLZ']="";
}

if($row['birthday']=='0000-00-00'){
	$row['birthday']="keine Angaben";
}

$tpl->assign('profileinformation',$profileinformation );
$tpl->assign('activitychart', $activitychart);
$tpl->assign('trainingdetails',$trainingdetails );
$tpl->assign('activitylog',$activitylog );


$vorname=$row['Name'];
$nachname=$row['Lastname'];
 
$tpl->assign('zuletztaktiv', date("d.m.y",$row['letzte_Aktion']));
$tpl->assign('id', $row['ID']);
$tpl->assign('profile_name', $row['Name']);
$tpl->assign('profile_lastname', $row['Lastname']);
$tpl->assign('email', $row['Email']);
$tpl->assign('registrierungsdatum', $row['Registrierungsdatum']);
$tpl->assign('strasse', $row['street']);
$tpl->assign('stadt', $row['city']);
$tpl->assign('plz', $row['PLZ']);
$tpl->assign('land', $row['country']);
$tpl->assign('geschlecht', $row['gender']);
$tpl->assign('geburtstag', DatumsWandler($row['birthday']));
$tpl->assign('interessen', $row['interests']);
$tpl->assign('beruf', $row['job']);
$tpl->assign('fahrrad', $row['bikemodel']);


//------------------------------------------------------------------------------------------------------------------------------//
//--------------------------------------{ ≈≈≈≈≈≈ Aktivitätstagebuch ≈≈≈≈≈≈ }----------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	

$sql = "SELECT
				TourID
		FROM
				touren
		WHERE
				UserID ='".$_GET['UserID']."'
		";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

$row = mysql_fetch_assoc($result);

$tour = array();

if(isset($row['TourID'])){





$i = 0;


$sql = mysql_query("SELECT
							* 
					from 
							`touren` 
					where 
							UserID=".$_GET['UserID']."
					ORDER BY
							date
					DESC	
							LIMIT 
					0, 5
					
					");
					
$num = mysql_num_rows($sql);

$result = mysql_num_rows($sql)  or die ("MySQL-Fehler: " . mysql_error()); 

while($dsatz = mysql_fetch_assoc($sql)){
    
     
    
	
    if (!isset($dsatz["average-cadence"]))
        $dsatz["average-cadence"]="- - -";
    
	if(!isset($dsatz["herzfrequenz"]))
		$dsatz["herzfrequenz"]="- - -";
    
    if (!isset($dsatz["elevator-difference"]))
        $dsatz["elevator-difference"]="- - -";
    
    
    if($dsatz['average-cadence']=='-0' OR $dsatz['average-cadence']=='' OR $dsatz['average-cadence']=='0' )
        $dsatz['average-cadence']="- - -";
    
	if($dsatz['herzfrequenz']=='-0' OR $dsatz['herzfrequenz']=='' OR $dsatz['herzfrequenz']=='0' )
		$dsatz['herzfrequenz']="- - -";
	
    
    if($dsatz['elevator-difference']=='-0' OR $dsatz['elevator-difference']=='' OR $dsatz['elevator-difference']=='0' )
        $dsatz['elevator-difference']="- - -";
	
	$daysago = floor((strtotime("".date("Y-m-d")."") - strtotime("".$dsatz["date"].""))/86400);
	
	if($daysago=='0'){
		$daysago="heute";
	}
	
	if($daysago=='1'){
		$daysago="vor einem Tag";
	}
	
	if($daysago>1){
		$daysago="vor ".$daysago." Tagen";
	}	
	
	$tour[$i].="
 <div class=\"activities-top\"></div>
            <div class=\"activities-middle\">\n
            
           	<span style=\"font-family: Journal;color:#3378c5;font-size: 25px;margin-left:25px;\">\n
            <img src=\"http://www.socialracecycling.de/images/icon-".$dsatz['typ'].".png\" title=\"Radfahren\" />\n
            ".DatumsWandler($dsatz["date"])." | von ".$vorname." ".$nachname."</span>\n
            
            <img height=\"49px\" style=\"float:right;margin-right:10px;padding-top:25px;\" src=\"images/profile/".$dsatz['typ'].".png\" />\n
            
            <p style=\"margin:0px;margin-left:25px;\"class=\"about-text-new\">\n
            <span style=\"font-weight:bold;\">Distanz:</span> ".$dsatz["distance"]." km \n
             <span style=\"font-weight:bold;\">| &oslash; Geschwindigkeit</span>  ".$dsatz["average-speed"]." km/h  <span style=\"font-weight:bold;\">| &oslash; Herzfrequenz</span>  ".$dsatz["herzfrequenz"]." bpm <br />
<span style=\"font-weight:bold;\">&oslash; Trittfrequez</span>  ".$dsatz["average-cadence"]." rpm <span style=\"font-weight:bold;\">| Höhenmeter</span>  ".$dsatz["elevator-difference"]." Meter  </p>\n
            
            <span style=\"font-size:10px;margin-left:25px;\">".$daysago."</span>\n
            </div>      \n
<div class=\"activities-bottom\">\n
<img src=\"http://socialracecycling.de/images/favicon.jpg\" height=\"18\" style=\"margin-right:5px;padding-top:8px;float:right;\">\n
</div>";
	
	$i++;
	
}

}else{
	$tour[0].="<div class=\"activities-top\"></div>
            <div class=\"activities-middle\">
            
            <p class=\"about-text-new\" style=\"text-align:center;margin:0px;\"><br />
<br />
<img src=\"images/profile/badge-square-minus-24-ns.png\" /><br />
<span style=\"font-weight:bold;\">".$vorname." ".$nachname."</span> hat noch keine Aktivitäten hochgeladen. <br />
<img src=\"images/profile/badge-square-minus-24-ns.png\" /></p>

           	
            </div>      
        <div class=\"activities-bottom\"><img src=\"http://socialracecycling.de/images/favicon.jpg\" height=\"18\" style=\"margin-right:5px;padding-top:8px;float:right;\"></div>";
}

$tpl->assign('touren',$tour);

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
//------------------------------{ ≈≈≈≈≈≈ Übergabe der Wochenkilometer des Diagramms ≈≈≈≈≈≈ }----------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	

$sql = "SELECT
				SUM(`distance`) AS charts_distance_week
		FROM
				touren
		WHERE
				WEEKOFYEAR(date)=((WEEKOFYEAR(CURDATE()))+".$_SESSION['week_change'].") AND 
				YEAR(date)=((YEAR(curdate()))+".$_SESSION['year_change'].") AND 
				UserID ='".$_GET['UserID']."'
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
					 UserID ='".$_GET['UserID']."'
			";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

$row = mysql_fetch_assoc($result); 

$tpl->assign('charts_monthkilometer', round($row['charts_distance_month'],2));

//------------------------------------------------------------------------------------------------------------------------------//
//------------------------------{ ≈≈≈≈≈≈ Übergabe der Jahreskilometer für Trainingsdaten ≈≈≈≈≈≈ }----------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	

$sql = "SELECT
				SUM(distance) as charts_distance_year
		FROM 
				touren 
		WHERE 
				YEAR(date)=((YEAR(curdate()))+".$_SESSION['year_change'].") AND
				 UserID ='".$_GET['UserID']."'
		";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

$row = mysql_fetch_assoc($result); 
	
$tpl->assign('charts_yearkilometer', round($row['charts_distance_year'],2));



//------------------------------------------------------------------------------------------------------------------------------//
//------------------------------{ ≈≈≈≈≈≈ Übergabe der Jahrestrainingszeit ≈≈≈≈≈≈ }----------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	

$sql = "SELECT
				SUM(duration) as charts_duration_year
		FROM 
				touren 
		WHERE 
				YEAR(date)=((YEAR(curdate()))+".$_SESSION['year_change'].") AND
				 UserID ='".$_GET['UserID']."'
		";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

$row = mysql_fetch_assoc($result); 


$days=(date("d",$row['charts_duration_year'])-1)*24+(date("h",$row['charts_duration_year']));


$duration=$days.":".date("i:s",$row['charts_duration_year']);

	
$tpl->assign('charts_yearduration', $duration);


//------------------------------------------------------------------------------------------------------------------------------//
//------------------------------{ ≈≈≈≈≈≈ Übergabe der Jahreshöhementer ≈≈≈≈≈≈ }----------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	

$sql = "SELECT
				SUM(`elevator-difference`) as charts_elevation_year
		FROM 
				touren 
		WHERE 
				YEAR(date)=((YEAR(curdate()))+".$_SESSION['year_change'].") AND
				 UserID ='".$_GET['UserID']."'
		";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

$row = mysql_fetch_assoc($result); 

if(!isset($row['charts_elevation_year']))
	$row['charts_elevation_year']=0;

$tpl->assign('charts_yearelevation', round($row['charts_elevation_year'],2));




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
						UserID ='".$_GET['UserID']."'
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
						COUNT(*) as day_distance_$i 
				FROM 
						touren 
				WHERE 
						 MONTH(date)=((MONTH(curdate()))+".$_SESSION['month_change'].") AND 
						 YEAR(date)=((YEAR(curdate()))+".$_SESSION['year_change'].") AND 
						 DAYOFMONTH(date)=$i AND 
						 UserID ='".$_GET['UserID']."'
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
						COUNT(*) as month_distance_$monthofyearString
				FROM 
						touren 
				WHERE 
						MONTH(date)=$j AND YEAR(date)=((YEAR(curdate()))+".$_SESSION['year_change'].")  AND UserID ='".$_GET['UserID']."'
				";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

	
		$row = mysql_fetch_assoc($result);
		
		foreach($row as $key => $value){
				$monthofyear[$key] = "['$monthofyearString' , ".round($value,2)."],";
		}
	
	}
	
	$tpl->assign('yearkilometer', $monthofyear );
	
	




