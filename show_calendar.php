<?php
	require_once('ink/calendar.ink.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PHP-Kalendar</title>
</head>
<body>
<div class="calender">
<?php
if(isset($_REQUEST['timestamp'])) $date = $_REQUEST['timestamp'];
else $date=time();

$arrMonth = array (
				"January" 	=>	"Januar",
				"February" 	=>	"Februar",
				"March"		=>	"M&auml;rz",
				"April"		=>	"April",
				"May"		=>	"Mai",
				"June"		=>	"Juni",
				"July"		=>	"Juli",
				"August"	=>	"August",
				"September"	=>	"September",
				"October"	=>	"Oktober",
				"November"	=>	"November",
				"December"	=>	"Dezember"
);

$headline = array('Mo','Di','Mi','Do','Fr','Sa','So');
?>
    <?php getCalender($date,$headline); ?>
    <div class="clear"></div>
</div>

</body>
</html>