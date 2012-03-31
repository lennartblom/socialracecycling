<?php 

$error = array();

function checkFormSended(){
	global $tpl;
	
	if(!isset($_GET['action']) || !$_GET['action'] == 'send') 
	
	if(!isset($_POST['betreff']) || !$_POST['betreff'])
		$error[] = 'Es muss ein Betreff angegeben werden.'; 
		
	if(!isset($_POST['email']) || !$_POST['email'])
		$error[] = 'Es muss eine Antwort E-Mail Adresse angegeben werden.';
		
	else if(!checkMailValid($_POST['email'])) 
		$error[] = 'Die angegebene E-Mail Adresse ist nicht valide, bitte überprüfe deine Angaben.';
		
	if(!isset($_POST['text']) || !$_POST['text'])
		$error[] = 'Bitte hinterlasse eine Nachricht';
		
	$tpl->assign('error',$error);
	
	$tpl->assign('betreff',$_POST['betreff']);
	$tpl->assign('email',$_POST['email']);
	$tpl->assign('text',$_POST['text']);	
	
	if(count($error) == 0) 
		return true;
	return false;
}

function checkMailValid($mail){
	return preg_match('/^([\w\!\#$\%\&\'\*\+\-\/\=\?\^\`{\|\}\~]+\.)*[\w\!\#$\%\&\'\*\+\-\/\=\?\^\`{\|\}\~]+@((((([a-z0-9]{1}[a-z0-9\-]{0,62}[a-z0-9]{1})|[a-z])\.)+[a-z]{2,6})|(\d{1,3}\.){3}\d{1,3}(\:\d{1,5})?)$/i', $mail);
	
}

$mail = 'kontakt@lennart-blom.de';
$prefix = 'Kontaktanfrage Social Race Cycling: ';

if(checkFormSended()){ 
	$result = mail($mail, $prefix.$_POST['betreff'], $_POST['text'], 'From: ' . $_POST['email']);
	if($result)
		$error[] = 'E-Mail wurde erfolgreich übermittelt';
	else
		$error[] = 'Es ist ein unerwarteter Serverfehler aufgetreten, die Mail konnte nicht versandt werden, versuchen Sie es später erneut.'; 	
	$tpl->assign('error',$error);
}
