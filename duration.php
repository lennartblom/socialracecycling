<?

	$MYSQL_HOST = 'localhost';
	$MYSQL_USER = 'root';
	$MYSQL_PASS = '';
	$MYSQL_DATA = 'racecycling';
	
	
	$connid = @mysql_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PASS) OR die ("Error: ".mysql_error());
	
	mysql_select_db($MYSQL_DATA) OR die ("Error: ".mysql_error());
	
	mysql_query("SET NAMES `utf8`") OR die("Error: ".mysql_error());
	
	$sqlab = "update touren set duration = duration*3600";
	
	mysql_query($sqlab);
	
	$num = mysql_affected_rows();
	echo	"Es wurden ".$touren." bearbeitet. Die Zeit passt jetzt überall!"; 
	
	
	
						