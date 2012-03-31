<?php
	session_start();
	require_once('ink/functions.ink.php');
	require_once('ink/db-frontpage.ink.php');
	require_once('ink/global.php');
	
	
	
	error_reporting(E_ALL);	
	
	

	doLogout();
	
	$tpl->assign('usercp', false);
	$tpl->assign('online',false);
	$tpl->assign('title','Logout');
			
	$tpl->display('01_tpl/frontpage/logout.tpl');

