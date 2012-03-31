<?php
	session_start();
	require_once('ink/functions.ink.php');
	require_once('ink/global.php');

	$tpl->assign('usercp', false);
	

	if(isset($_SESSION['UserID'])){
			header("Location: home.php"); 
			exit;
	}

	$tpl->assign('online', false);
	$tpl->assign('title', 'Startseite');
	$tpl->display('01_tpl/frontpage/index.tpl');
?>
