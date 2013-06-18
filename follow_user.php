<?php
require_once('ink/notif_functions.ink.php');

if(isset($_GET['user'])&&isset($_GET['follow'])&&isset($_GET['url'])){
	$user = $_GET['user'];
	$follow = $_GET['follow'];
	$link = $_GET['url'];

	if(follow($user, $follow))
		echo '<html><head><meta http-equiv="refresh" content="0; URL='.$link.'" /></head></html>';
	else
		echo "Es ist ein Fehler aufgetreten";
}else
	echo "Nicht genügend Parameter";
?>