<?php
	require_once('ink/global.php');
	
	$tpl->assign('online',false);
	$tpl->assign('usercp', false);
	
	$tpl->assign('title','Informationen');
	$tpl->display('01_tpl/frontpage/about.tpl');
	
?>