<?php
if(isset($_POST['profile_send']) AND $_POST['profile_send']=='Profildaten abschicken') {	
	$errors = array();
	
	error_reporting(E_ALL ^ (E_NOTICE | E_DEPRECATED));
	
	if(trim($_POST['profile_email'])=='')
		$errors[]= "Bitte gib deine neue E-Mailadresse an.";
	//Ist die Emailadresse in Ordnung?
	elseif(!eregi("^[a-z0-9\._-]+@+[a-z0-9\._-]+\.+[a-z]{2,4}$", $_POST['profile_email']))  
		$errors[]= "Deine Email Adresse hat eine falsche Syntax.";
	
	if(!$_POST['profile_password']==''){
		
		if(trim($_POST['profile_password_confirm'])==''){
				$errors[]= "Bitte wiederhole dein neues Passwort.";
		}
			//Passt die Emailwiederholung?
		elseif (trim($_POST['profile_password']) != trim($_POST['profile_password_confirm']))
			$errors[]= "Die beiden Passwörter stimmen nicht überein.";
			
		$tpl->assign('error',$errors);

	}
	if(count($errors)){
						$sql = "SELECT 
										Name, 
										Lastname, 
										Email, 
										street, 
										PLZ, 
										country, 
										gender, 
										bikemodel, 
										job, 
										interests, 
										city, 
										Avatar
								FROM
										user
								WHERE
										ID ='".$_SESSION['UserID']."'
								";
						$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
						
						$row = mysql_fetch_assoc($result);
						
						
						
						$tpl->assign('tag', $_POST['birth_Day']);
						$tpl->assign('monat', $_POST['birth_Month']);
						$tpl->assign('jahr', $_POST['birth_Year']);
						
						$tpl->assign('vorname', $_POST['profile_name']);
						$tpl->assign('nachname', $_POST['profile_lastname']);
						$tpl->assign('email', $_POST['profile_email']);
						$tpl->assign('strasse', $_POST['profile_street']);
						$tpl->assign('stadt', $_POST['profile_city']);
						$tpl->assign('plz', $_POST['profile_plz']);
						$tpl->assign('land', $_POST['profile_country']);
						$tpl->assign('geschlecht', $_POST['profile_gender']);
						$tpl->assign('geburtstag', $_POST['birthday']);
						$tpl->assign('interessen', $_POST['profile_interests']);
						$tpl->assign('beruf', $_POST['profile_job']);
						$tpl->assign('fahrrad', $_POST['profile_bike']);
									
					
	}
	else{
		
		if($_POST['birth_Day']<=9){
			$_POST['birth_Day']="0".$_POST['birth_Day']."";
		}
		
		
		$birthday = "".$_POST['birth_Year']."-".$_POST['birth_Month']."-".$_POST['birth_Day']."";
		
		
		
		
		$sqlab = "update user set";
		if(isset($_POST['profile_password']) AND isset($_POST['profile_password_confirm'])){
				$sqlab.=" Passwort  =	'". md5(trim($_POST['profile_password']))."',";
		}
		$sqlab  .=	" Name 		=	'" .$_POST['profile_name'] . "',"
				.	" Lastname 	= 	'" .$_POST['profile_lastname'] . "',"
				.	" Email 	='" .$_POST['profile_email']."',"
				.	" street 	=	'" .$_POST['profile_street']."',"
				.	" city 		=	'" .$_POST['profile_city']."',"
				.	" PLZ 		=	'" .$_POST['profile_plz']."',"
				.	" country 	=	'" .$_POST['profile_country']."',"
				.	" gender 	=	'" .$_POST['profile_gender']."',"
				.	" birthday  = 	'					$birthday',"
				.	" bikemodel	 	=	'" .$_POST['profile_bike']."',"
				.	" interests  = 	'" .$_POST['profile_interests']."',"
				.	" job 		= 	'" .$_POST['profile_job']."'"
				.	" where ID 	= '" .$_SESSION['UserID']."'";
				
		mysql_query($sqlab) OR die("<pre>\n".$sqlab."</pre>\n".mysql_error());
		
		$num = mysql_affected_rows();
		
		if($num>0){
			$success = true;
		}
		else{
			$error[]="Die Profilangaben wurden nicht geändert";
		}
	
	}
}
else{


$sql = "SELECT 
				YEAR(birthday) AS jahr,
				MONTH(birthday) AS monat,
				DAY(birthday) AS tag,
				Name, 
				Lastname, 
				Email, 
				street, 
				PLZ, 
				country, 
				gender, 
				bikemodel, 
				job, 
				interests, 
				city, 
				Avatar
		FROM
				user
		WHERE
				ID ='".$_SESSION['UserID']."'
		";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

$row = mysql_fetch_assoc($result);


$tpl->assign('tag', $row['tag']);
$tpl->assign('monat', $row['monat']);
$tpl->assign('jahr', $row['jahr']);

$tpl->assign('vorname', $row['Name']);
$tpl->assign('nachname', $row['Lastname']);
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

}

$sql = "SELECT 
				YEAR(birthday) AS jahr,
				MONTH(birthday) AS monat,
				DAY(birthday) AS tag,
				Name, 
				Lastname, 
				Email, 
				street, 
				PLZ, 
				country, 
				gender, 
				bikemodel, 
				job, 
				interests, 
				city, 
				Avatar
		FROM
				user
		WHERE
				ID ='".$_SESSION['UserID']."'
		";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

$row = mysql_fetch_assoc($result);


$tpl->assign('tag', $row['tag']);
$tpl->assign('monat', $row['monat']);
$tpl->assign('jahr', $row['jahr']);

$tpl->assign('vorname', $row['Name']);
$tpl->assign('nachname', $row['Lastname']);
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

