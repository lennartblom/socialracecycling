<?php	
	require_once('ink/functions.ink.php');
	require_once('ink/global.php');
	require_once('ink/db.ink.php');
	
	$tpl->assign('title', 'Sample');
	require_once('ink/team.ink.php');
	
	$tpl->display('01_tpl/internal/team.tpl');
?>