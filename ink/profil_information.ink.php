<?php



$sql="	SELECT
				Name,
				Lastname,
				Email,
				Registrierungsdatum,
				street,
				city,
				PLZ,
				country,
				gender,
				birthday,
				interests,
				job,
				bikemodel
		FROM
				user
		Where
				ID='".$_SESSION['UserID']."'
		";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

$row = mysql_fetch_assoc($result);

$_SESSION['member-name']=$row['Name'];
$_SESSION['member-lastname']=$row['Lastname'];

if($row['PLZ']=='0'){
	$row['PLZ']="";
}

if($row['birthday']=='0000-00-00'){
	$row['birthday']="keine Angaben";
}


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