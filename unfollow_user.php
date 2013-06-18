<?php
require_once('ink/notif_functions.ink.php');

if(isset($_GET['user'])&&isset($_GET['unfollow'])&&isset($_GET['url'])){
	$user = $_GET['user'];
	$unfollow = $_GET['unfollow'];
	$link = $_GET['url'];

	if(unfollow($user, $unfollow)){
		echo '<html><head><meta http-equiv="refresh" content="0; URL='.$link.'" /></head></html>';
	}else
		echo "Es ist ein Fehler aufgetreten";
}else
	echo "Nicht genügend Parameter";
?>