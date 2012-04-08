<?php
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		
$sql = "SELECT
				YEAR(date) AS jahr,
				MONTH(date) AS monat,
				DAY(date) AS tag,
				herzfrequenz,
				typ,
				distance,
				duration,
				`average-speed`,
				`average-cadence`,
				`elevator-difference`,
				`other-information`,
				tourID
		FROM
				touren
		WHERE
				tourID='".$_POST['tour-choice']."'
		";
	
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
							
$row = mysql_fetch_assoc($result);

$num = mysql_affected_rows();
					
if (!isset($row["average-cadence"]) 		OR 
		   $row['average-cadence']=='-0' 	OR 
		   $row['average-cadence']=='' 		OR 
		   $row['average-cadence']=='0'){
			   
	$row["average-cadence"]="--- ";
}

if (!isset($row["elevator-difference"]) 	OR 
	$row['elevator-difference']=='-0' 		OR 
	$row['elevator-difference']=='' 		OR 
	$row['elevator-difference']=='0' ){
		
	$row["elevator-difference"]="--- ";
}

if($row['typ']=='laufen')
	$row['typ']="Laufen";
	
if($row['typ']=='radfahren')
	$row['typ']="Radfahren";
	
$tpl->assign('typ',		$row['typ']);

$tpl->assign('tag', 	$row['tag']);
$tpl->assign('monat', 	$row['monat']);
$tpl->assign('jahr', 	$row['jahr']);

$tpl->assign('stunden', 	date("H",$row['duration']));
$tpl->assign('minuten', 	date("i",$row['duration']));
$tpl->assign('sekunden', 	date("s",$row['duration']));

$tpl->assign('datum', 			$row['datum']);
$tpl->assign('distanz', 		$row['distance']);
$tpl->assign('dauer', 			$row['duration']);
$tpl->assign('trittfrequenz', 	$row['average-cadence']);
$tpl->assign('herzfrequenz', 	$row['herzfrequenz']);
$tpl->assign('durchschnitt', 	$row['average-speed']);
$tpl->assign('hoehenmeter', 	$row['elevator-difference']);
$tpl->assign('info', 			$row['other-information']);
$tpl->assign('id', 				$row['tourID']);		
					
						
						
if(isset($_POST['submit']) AND $_POST['submit']=='Tourdaten aktualisieren'){
	
	
	if($_POST['herzfrequenz']=='-0' OR $_POST['herzfrequenz']=='' OR $_POST['herzfrequenz']=='0' ){
		$_POST['herzfrequenz']="---";
	}
	
	if($_POST['average-cadence']=='-0' OR $_POST['average-cadence']=='' OR $_POST['average-cadence']=='0' ){
		$_POST['average-cadence']="---";
	}
	
	$_POST['distance']=str_replace(",", ".", $_POST['distance']);
	
	$date 		= "".$_POST['Date_Year']."-".$_POST['Date_Month']."-".$_POST['Date_Day']."";
	$duration 	= mktime($_POST['Time_Hours'],$_POST['Time_Minutes'],$_POST['Time_Seconds'],1,1,1970);
				
	$avgspeed = round(($_POST['distance']*60)/($duration/60),1);
	
	if($_POST['herzfrequenz']=='0' OR $_POST['herzfrequenz']=='')
		$_POST['herzfrequenz']="NULL";
	
	$sqlab = "update touren set"
	.	"	date 					= '$date',"
	.	"	distance				= '" .$_POST['distance'] . "',"
	.	"	duration				= '$duration',"
	.	"	`average-speed` 		= '$avgspeed',"
	.	"	herzfrequenz			= '" .$_POST['herzfrequenz'] . "',"
	.	"	`average-cadence`		= '" .$_POST['average-cadence'] . "',"
	.	"	`elevator-difference`	= '" .$_POST['elevator-difference'] . "',"
	.	"	`other-information`		= '" .$_POST['other-information'] . "'"
	.	" 	where tourID			= '" .$_POST['tourID'] . "'";
	
	mysql_query($sqlab) OR die("<pre>\n".$sqlab."</pre>\n".mysql_error());
						
	$num = mysql_affected_rows();

	if($num>0){
		$success = true;
	}
	else{
		$error = "Deine Tour wurde nicht geändert";
		
		$tpl->assign('error',$error);
	}
}


if(!isset($_POST['tour-choice'])){
	$error="Bitte wählen nächstes Mal die Tour aus, die du näher betrachten möchtest.";
	
	$tpl->assign('error',$error);
				
}