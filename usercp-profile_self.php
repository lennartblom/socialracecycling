<?php
	session_start();
	
	require_once('ink/functions.ink.php');
	require_once('ink/global.php');
	require_once('ink/db.ink.php');
	
	
	
	
	if(isset($_SESSION['UserID'])){
		$tpl->assign('online',true);
		$tpl->assign('usercp',true);
		
		$tpl->assign('title', 'Profildaten');
		
		$tpl->assign('name',$_SESSION['Vorname']);
		$tpl->assign('lastname',$_SESSION['Nachname']);
		
		require_once('ink/footer_data.ink.php');
		require_once('ink/profil_self.ink.php');
		
		$tpl->display('01_tpl/internal/usercp-profile_self.tpl');
                   
	}
	else{
		$tpl->assign('online','false');
		$tpl->assign('title','Nicht eingeloggt');
		$tpl->display('01_tpl/frontpage/attempt.tpl');
	}
	
	
?>