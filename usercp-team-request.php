<?php
	session_start();
	
	require_once('ink/functions.ink.php');
	require_once('ink/global.php');
	require_once('ink/db.ink.php');
	
	$tpl->assign('title', 'Sample');
	$tpl->assign('online',true);
	$tpl->assign('profile',true);
	$tpl->assign('usercp',true);//UserCP-Menu
	
	
	if(isset($_SESSION['UserID'])){
		$tpl->assign('online',true);
		
		$tpl->assign('name',$_SESSION['Vorname']);
		$tpl->assign('lastname',$_SESSION['Nachname']);
		
		$User = $_SESSION['UserID'];
		$teamID = $_GET['id'];
		
		require_once('ink/footer_data.ink.php');
		require_once('ink/usercp-team-request.ink.php');
		
		if($post == 0)	
			$tpl->display('01_tpl/internal/usercp-team-request.tpl');
                   
	}
	else{
		$tpl->assign('online',false);
		$tpl->assign('title','Nicht eingeloggt');
		$tpl->display('01_tpl/frontpage/attempt.tpl');
	}
?>