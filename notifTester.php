<?php
require_once('ink/functions.ink.php');

$type = $_GET['t'];
$link = $_GET['l'];
$response = "";

if($type == "inv")
	if(addNotif(22, 29, $type, "", "Heyho, wie w&auml;rs mit beitreten?"))
		$response = "true";
	else
		$response = "false";
else
	if($type == "msg")
		addNotif(22, 29, $type, "http://localhost/socialracecycling/usercp-profile_self.php", "Neue Aktivit&auml;t");

echo '<html><head><meta http-equiv="refresh" content="0; URL='.$link.'?r='.$response.'" /></head></html>';		
?>