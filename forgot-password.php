<?php
	session_start();
	require_once('ink/functions.ink.php');	
	require_once('ink/db-frontpage.ink.php');
	require_once('ink/global.php');
	
	$tpl->assign('title', 'Passwort vergessen?');
	$tpl->assign('online', false);
	$tpl->assign('usercp', false);
	
	$tpl->assign('email',$_POST['reg_email']);	
	
	if(isset($_POST['reg_submit']) && $_POST['reg_submit'] == 'Abschicken'){
						$errors = array();
						
						if(!isset($_POST['reg_email'])){
							$errors[] = "Bitte benutzen Sie das Passwortformular";
							$tpl->assign('errors', $errors);
						}
						else{
								if(trim($_POST['reg_email']) == "")
									$errors[] = "Gib deine e-Mail Adresse an.";
								// Benutzer wird gesucht
								$sql = "SELECT
												Email
										FROM
												user
										WHERE
												Email = '".mysql_real_escape_string(trim($_POST['reg_email']))."'
										";
										
								$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
								
								$row = mysql_fetch_assoc($result);
								if(!$row){
									$errors[] = "Deine e-Mail Adresse konnte nicht gefunden werden.";
									$tpl->assign('errors',$errors);
								}
						if(count($errors)){
							$tpl->assign('errors', $errors);
						} else{
							//neues Passwort erstellen
							$passwort = substr(md5(microtime()),0,8);
							$sql = "UPDATE
											user
									SET
											Passwort = '".md5(trim($passwort))."'
									WHERE
											Email = '".mysql_real_escape_string(trim($_POST['rec_email']))."'
									";
									mysql_query($sql) OR die ("<pre>\n".$sql."</pre>\n".mysql_error());
									
									//Email wird hiermit verschickt
									$empfaenger = $row['Email'];
									$titel = "Social Race Cycling | Anforderung eines neuen Passworst";
									$mailbody = "Dein neues Passwort lautet:\n\n".
												$passwort."\n\n".
												"Dein altes Passwort wurde gelöscht.
												
												Weiterhin viel Spaß beim Touren eintragen!
												
												Beste Grüße
												Lennart Blom";
									$header ="kontakt@lennart-blom.de\n";
									
									if(@mail($empfaenger, $titel, $mailbody, $header)){
											$tpl->display('01_tpl/frontpage/success_forgot.tpl');
									}
									else{
											$errors[] = "Beim Senden der Email trat ein Fehler auf.";
											$errors[] = "Bitte wenden Sie sich direkt an den <a href=\"mailto:mail@lennart-blom.de\">Administrator</a>."; 
											$tpl->assign('errors', $errors);
									}
						}
						}
						
						
						
						
	}
	$tpl->display('01_tpl/frontpage/forgot.tpl');
						
		
		
	
				
?>
