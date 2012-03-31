<?php
	session_start();
	require_once('ink/functions.ink.php');	
	require_once('ink/db-frontpage.ink.php');
	require_once('ink/global.php');
	
	$tpl->assign('title', 'Registrieren');
	$tpl->assign('online', false);
	$tpl->assign('usercp', false);
	
	
	

	$reg_name 			= (isset($_POST['reg_name']))?$_POST['reg_name']:false;
	$reg_lastname 		= (isset($_POST['reg_lastname']))?$_POST['reg_lastname']:false;
	$reg_email 			= (isset($_POST['reg_email']))?$_POST['reg_email']:false;
	$reg_email_confirm 	= (isset($_POST['reg_email-confirm']))?$_POST['reg_email-confirm']:false;
	$reg_password 		= (isset($_POST['reg_password']))?$_POST['reg_password']:false;
	
	$tpl->assign('reg_name', 			$_POST['reg_name']);
	$tpl->assign('reg_lastname', 		$_POST['reg_lastname']);
	$tpl->assign('reg_email', 			$_POST['reg_email']);
	$tpl->assign('reg_email_confirm', 	$_POST['reg_email-confirm']);
	$tpl->assign('reg_password', 		$_POST['reg_password']);

	error_reporting(E_ALL & ~E_DEPRECATED);

	
	if(isset($_POST['reg_submit']) && $_POST['reg_submit']== 'Registrierung abschicken') {
			// Fehlerarray anlegen
			$errors = array();
			// Sind alle Felder ausgefüllt?
			if(!isset($_POST['reg_name'],
					  $_POST['reg_lastname'],
					  $_POST['reg_email'],
					  $_POST['reg_email-confirm'],
					  $_POST['reg_password'])){
					  
			
				// Ein Fehlerarray hinzugügen
				echo "Bitte benutze das Formular aus dem Registrierungsbereich";
				$tpl->assign('errors',$errors);
				
			}
			else {
					//alle Felder werden einzelnd geprüft
					//E-Mail Adressen werden mit der Datenbank abgeglichen
					$emails = array();
					$sql = "SELECT
									Email
							FROM
									user
							";
					$result = mysql_query($sql) OR die ("<pre>\n".mysql_error());
					while($row = mysql_fetch_assoc($result)){
							$emails[] = $row['Email'];
					}
					//Eingabe des Vornamens wird geprüft
					if(trim($_POST['reg_name'])=='')
						$errors[]="Bitte gib deinen Vornamen.";
	
					//Wurde ein Nachname angegeben?
					if(trim($_POST['reg_lastname'])=='')
						$errors[]= "Bitte gib deinen Nachnahmen an.";
					
					//Emailwiederholung wurde eingegeben?
					if(trim($_POST['reg_email-confirm'])=='')
						$errors[]= "Bitte wiederholen deine E-Mailadresse.";
					//Passt die Emailwiederholung?
					elseif (trim($_POST['reg_email']) != trim($_POST['reg_email-confirm']))
						$errors[]= "Die E-Mailadressen stimmen nicht überein.";
					
					//Ist die Email-adresse schon vergeben?
					elseif(in_array(trim($_POST['reg_email']), $emails))
						$errors[]= "Diese Email-Adresse ist bereits vergeben.";
					
					//Überprüfung der Passworteingabe
					if(trim($_POST['reg_password'])=='')
						$errors[]= "Bitte gib ein Passwort ein.";
					//Ist das Passwort 6 Zeichen lang?
					elseif(strlen(trim($_POST['reg_password'])) < 4)
						$errors[]= "Das Passwort muss mindestens 4 Zeichen lang sein.";
						
					$tpl->assign('errors',$errors);
					
					
					
			}
			
			//Sind Fehler aufgetreten?
			if(count($errors)){
				$tpl->assign('errors',$errors);
				
			} else {
				//Daten in die Datenbanktabelle einfügen
					$sql = "INSERT INTO
								   user
									 (Name,
									 Lastname,
									 Passwort,
									 Email,
									 Registrierungsdatum
									 )
							VALUES
									 ('".mysql_real_escape_string(trim($_POST['reg_name']))."',
									  '".mysql_real_escape_string(trim($_POST['reg_lastname']))."',
									  '".md5(trim($_POST['reg_password']))."',
									  '".mysql_real_escape_string(trim($_POST['reg_email']))."',
									  '". date("Y-m-d H:i:s") ."'									  
									  )";
									  
					mysql_query($sql) OR die ("<pre>\n" .$sql. "</pre>\n".mysql_error());
									  
	
				  	$tpl->assign('reg',true);
					  
					$mail 	= 'admin@lennart-blom.de';
					$prefix 	= 'Neuer Benutzer bei Social Race Cycling';
					$text		= "Hi Lennart, auf deiner Seite \"Social Race Cycling\" hat sich nun ".$_POST['reg_name']." ".$_POST['reg_lastname']." registriert!";
					
					$tpl->display('01_tpl/frontpage/successreg.tpl');	
						
					$result = mail($mail, $prefix, $text, 'From: ' . $mail);
							
								  
								
			}
			
		$tpl->display('01_tpl/frontpage/registration-script.tpl');
	}
	
	
?>
