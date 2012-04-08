<?php /* Smarty version Smarty-3.1.8, created on 2012-04-03 09:31:03
         compiled from "show_calendar.php" */ ?>
<?php /*%%SmartyHeaderCode:6124194944f6db036362925-39862564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '140a45ad07ea32cde599e11d217973976630a736' => 
    array (
      0 => 'show_calendar.php',
      1 => 1333445369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6124194944f6db036362925-39862564',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f6db03639fd95_22433205',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6db03639fd95_22433205')) {function content_4f6db03639fd95_22433205($_smarty_tpl) {?><<?php ?>?php
	require_once('ink/calendar.ink.php');
?<?php ?>>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PHP-Kalendar</title>
</head>
<body>
<div class="calender">
<<?php ?>?php
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
?<?php ?>>
    <div class="pagination">
        <a class="calendar" href="?timestamp=<<?php ?>?php echo yearBack($date); ?<?php ?>>" class="last">|&laquo;</a> 
        <a class="calendar" href="?timestamp=<<?php ?>?php echo monthBack($date); ?<?php ?>>" class="last">&laquo;</a> 
        <span><<?php ?>?php echo $arrMonth[date('F',$date)];?<?php ?>> <<?php ?>?php echo date('Y',$date); ?<?php ?>></span>
        <a class="calendar" href="?timestamp=<<?php ?>?php echo monthForward($date); ?<?php ?>>" class="next">&raquo;</a>
        <a class="calendar" href="?timestamp=<<?php ?>?php echo yearForward($date); ?<?php ?>>" class="next">&raquo;|</a>  
    </div>
    <<?php ?>?php getCalender($date,$headline); ?<?php ?>>
    <div class="clear"></div>
</div>

</body>
</html><?php }} ?>