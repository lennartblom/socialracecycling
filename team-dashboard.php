<?php
	require_once('ink/global.php');
	
	$tpl->assign('online',false);
	$tpl->assign('usercp', false);
	
	$tpl->assign('title','Team Dashboard');
	$tpl->display('01_tpl/public/team-dashboard.tpl');
	
?>