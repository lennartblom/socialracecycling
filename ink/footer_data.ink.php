<?php
//------------------------------------------------------------------------------------------------------------------------------//
//----------------------------------------------{ ≈≈≈≈≈≈ Übergabe der Benutzernamen ≈≈≈≈≈≈ }----------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//

$tpl->assign('name', $_SESSION['Vorname']);

$tpl->assign('lastname', $_SESSION['Nachname']);
$tpl->debugging = true;

//------------------------------------------------------------------------------------------------------------------------------//
//----------------------------------------------{ ≈≈≈≈≈≈ Sprache wird eingestellt ≈≈≈≈≈≈ }--------...-------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//

$sql = "SET lc_time_names = 'de_DE'";
													
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());


//------------------------------------------------------------------------------------------------------------------------------//
//--------------------------------------------{ ≈≈≈≈≈≈ Übergabe der Wochenkilometer ≈≈≈≈≈≈ }----------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//
 

$sql = "SELECT
				SUM(`distance`) AS distance_week
		FROM
				touren
		WHERE
				MONTH(date)=MONTH(CURDATE()) AND YEAR(date)=YEAR(curdate()) AND UserID ='".$_SESSION['UserID']."'
		";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

$row = mysql_fetch_assoc($result);
$tpl->assign('tooltip_monthkilometer', round($row['distance_week'],2));




//------------------------------------------------------------------------------------------------------------------------------//
//---------------------------------{ ≈≈≈≈≈≈ Übergabe der letzten eingetragenen Tour ≈≈≈≈≈≈ }----------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//

$sql = "SELECT
				DATE_FORMAT(date, '%W, %d. %M %Y') AS datum
		FROM
				touren
		WHERE
				UserID ='".$_SESSION['UserID']."'
		ORDER BY
				date
				
		DESC
		";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

$row = mysql_fetch_assoc($result);

$showdate = $row['datum'];

if($showdate == '..'){
	$showdate = "bisher keine Tour eingetragen";
}

$tpl->assign('tooltip_lasttour', $showdate);


//------------------------------------------------------------------------------------------------------------------------------//
//--------------------------{ ≈≈≈≈≈≈ Übergabe der gesamten eingetragenen Kilomenter ≈≈≈≈≈≈ }----------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//


$sql = "SELECT 
				SUM(`distance`) AS distance_summe
		FROM
				touren
		WHERE
				UserID ='".$_SESSION['UserID']."' AND
				year(date) = year(curdate())
		GROUP BY
				UserID
		";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

$row = mysql_fetch_assoc($result);

$tpl->assign('tooltip_kilometertotal', round($row['distance_summe'],2));



