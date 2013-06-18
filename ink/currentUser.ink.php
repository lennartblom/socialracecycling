<?php
if(isset($_SESSION['UserID'])){
	$tpl->assign('curUser',$_SESSION['UserID']);
}
?>