<?php

	session_start();
	
	require_once('ink/functions.ink.php');
	require_once('ink/global.php');
	require_once('ink/db.ink.php');
	
	$tpl->assign('title', 'Kontakt');
	$tpl->assign('usercp', false);
	
	
	if(isset($_SESSION['UserID'])){
		$tpl->assign('online',true);
		
		require_once('ink/contact.ink.php');
		require_once('ink/footer_data.ink.php');
		
		$tpl->assign('name',$_SESSION['Vorname']);
		$tpl->assign('lastname',$_SESSION['Nachname']);
		
        
		$tpl->display('01_tpl/internal/contact.tpl');
                   
	}
	else{
		$tpl->assign('online','false');
		$tpl->assign('title','Nicht eingeloggt');
		$tpl->display('01_tpl/frontpage/attempt.tpl');
	}
	
	
	


	

	
?>

</b