<?php
	require_once('ink/calendar.ink.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
body {
    font-family:verdana;
    font-size:12px;
}
a.calendar {
    color:black;
    text-decoration: none;
}
a.calendar:hover {
    text-decoration: underline;
    background: #eaeaea;
}

a.calendarlink{
	font-size:10px;
	font-weight:500;
	font-family:Arial, Helvetica, sans-serif;
	color:green;
	text-decoration:underlnone;
}

a.calendarlink:hover{
	text-decoration: underline;
    background: #eaeaea;
}
.calender {
    width:854px;
	border:none;
}
* html .calender,
* + html .calender {
    width:282px;
}
.calender div.after,
.calender div.before{
    color:silver;
}
p.text{
	margin-top:-50px;
	margin-bottom:0px;
	margin-left:-5px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:10px;
	margin-bottom:0px;
}
ul.event{
	color:green;
	margin-top:100px;
	margin-left:-30px;
	font-size:10px;
	font-weight:500;
	font-family:Arial, Helvetica, sans-serif;
	list-style-type:circle;
}
ul.event li{
	margin-top:-185px;
}
.day {
    float:left;
    width:100px;
    height:80px;
    line-height: 100px;
	padding:10px;
	background-color:#ffffff;
    text-align: left;
	border:thin solid #CCC;
}

.day:hover{
	background-color:#e8ffe2;
}
.day.headline {
    background:silver;
	height:30px;
	line-height: 30px;
}
.day.current {
    font-weight:bold;
	color:#2f8ff4;
	background-color:#e9eff8;
}
.clear {
    clear:left;
}

.pagination {
    text-align: center;
    height:20px;
    line-height:20px;
    font-weight: bold;
}
.pagination a {
    width:20px;
    height:20px;
}
</style>
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
    <div class="pagination">
        <a class="calendar" href="?timestamp=<?php echo yearBack($date); ?>" class="last">|&laquo;</a> 
        <a class="calendar" href="?timestamp=<?php echo monthBack($date); ?>" class="last">&laquo;</a> 
        <span><?php echo $arrMonth[date('F',$date)];?> <?php echo date('Y',$date); ?></span>
        <a class="calendar" href="?timestamp=<?php echo monthForward($date); ?>" class="next">&raquo;</a>
        <a class="calendar" href="?timestamp=<?php echo yearForward($date); ?>" class="next">&raquo;|</a>  
    </div>
    <?php getCalender($date,$headline); ?>
    <div class="clear"></div>
</div>

</body>
</html>