<?php
	$MYSQL_HOST = 'localhost';
	$MYSQL_USER = 'root';
	$MYSQL_PASS = '';
	$MYSQL_DATA = 'racecycling';
	
	$connid = @mysql_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PASS) OR die ("Error: ".mysql_error());
	
	mysql_select_db($MYSQL_DATA) OR die ("Error: ".mysql_error());
	
	
?>