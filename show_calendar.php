<?php
	require_once('ink/calendar.ink.php');
?>
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
