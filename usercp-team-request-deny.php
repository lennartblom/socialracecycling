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
		
		if(isset($_GET['n'])&&isset($_GET['url'])){
			$tpl->assign('notifID',$_GET['n']);
			$tpl->assign('link',$_GET['url']);
			$tpl->assign('error',0);	
		}else{
			$tpl->assign('notifID','');
			$tpl->assign('link','');
			$tpl->assign('error',1);
		}
		
		require_once('ink/footer_data.ink.php');		

		$tpl->display('01_tpl/internal/usercp-team-request-deny.tpl'); 
                   
	}
	else{
		$tpl->assign('online',false);
		$tpl->assign('title','Nicht eingeloggt');
		$tpl->display('01_tpl/frontpage/attempt.tpl');
	}
?>