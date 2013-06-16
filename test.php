<?php
require_once('ink/functions.ink.php');
require_once('ink/db.ink.php');

if(isset($_GET['user1'])&&isset($_GET['user2'])){
	$u1 = $_GET['user1'];
	$u2 = $_GET['user2'];

	if(addFriendship($u1, $u2))
		echo "Freund eingetragen";
	else
		echo "Bereits befreundet";
}else
	echo "Keine User angegeben";
?>