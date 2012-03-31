<?php
	session_start();
	require_once('ink/functions.ink.php');
	require_once('ink/global.php');
	
	$tpl->assign('online',false);
	$tpl->assign('usercp', false);

	if(isset($_SESSION['UserID'])){
			header("Location: home.php"); 
	}
	
	$tpl->assign('title','Registrierung');

	$tpl->display('01_tpl/frontpage/registration.tpl');
?>

           	     
