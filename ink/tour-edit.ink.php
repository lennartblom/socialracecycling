<?php
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		
$sql = "SELECT
				date AS datum,
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

$tpl->assign('datum', $row['datum']);
$tpl->assign('distanz', $row['distance']);
$tpl->assign('dauer', $row['duration']);
$tpl->assign('trittfrequenz', $row['average-cadence']);
$tpl->assign('durchschnitt', $row['average-speed']);
$tpl->assign('hoehenmeter', $row['elevator-difference']);
$tpl->assign('info', $row['other-information']);
$tpl->assign('id', $row['tourID']);		
					
						
						
if(isset($_POST['submit']) AND $_POST['submit']=='Tourdaten aktualisieren'){
	
	
	if($_POST['average-cadence']=='-0' OR $_POST['average-cadence']=='' OR $_POST['average-cadence']=='0' ){
		$_POST['average-cadence']="---";
	}
	
	$sqlab = "update touren set"
	.	"	date 					= '" .$_POST['date'] . "',"
	.	"	distance				= '" .$_POST['distance'] . "',"
	.	"	duration				= '" .$_POST['duration'] . "',"
	.	"	`average-speed` 		= '" .$_POST['average-speed'] . "',"
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
	}
}


if(!isset($_POST['tour-choice'])){
	$error="Bitte wählen nächstes Mal die Tour aus, die du näher betrachten möchtest.";
	
	$tpl->assign('error',$error);
				
}