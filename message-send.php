<?php
require_once('ink/functions.ink.php');

if(isset($_GET['from'])&&isset($_GET['to'])&&isset($_GET['topic'])&&isset($_GET['content'])&&isset($_GET['url'])){
	$link = $_GET['url'];
	$userFrom = $_GET['from'];
	$userTo = $_GET['to'];
	$topic = $_GET['topic'];
	$content = $_GET['content'];
	
	if(addMSG($userFrom,$userTo,$topic,$content)){
		echo '<html><head><meta http-equiv="refresh" content="0; URL='.$link.'" /></head></html>';
		$msgID = getMsgID($userFrom,$userTo,$topic,$content);
		addNotif($userFrom,$userTo,'msg','message-display.php?ID='.$msgID,'hat dir eine Nachricht gesendet');
	}else
		echo "Es ist ein Fehler aufgetreten";
}else
	echo "Nicht gen&uuml;gend Parameter";
?>