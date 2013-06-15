<?php
require_once('ink/functions.ink.php');

$userTo = $_GET['userTo'];
$userFrom = $_GET['userFrom'];
$type = $_GET['type'];
$link = $_GET['url'];
$content = $_GET['content'];

$response = "";

if($type == "inv")
	if(addNotif($userFrom, $userTo, $type, $link, $content))
		$response = "Invited user successfully";
	else
		$response = "Couldn't invite user, he might already be part of a team";
else
	if($type == "msg"){
		addNotif($userFrom, $userTo, $type, $link, $content);
		$response = "Message added successfully";
	}	

echo "<html><body>".$response."</body></html>";
?>