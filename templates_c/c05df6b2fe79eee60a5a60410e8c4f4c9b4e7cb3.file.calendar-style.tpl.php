<?php /* Smarty version Smarty-3.1.8, created on 2012-04-08 12:38:12
         compiled from "01_tpl/internal/calendar-style.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5245078984f8186b4a13c83-01317047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c05df6b2fe79eee60a5a60410e8c4f4c9b4e7cb3' => 
    array (
      0 => '01_tpl/internal/calendar-style.tpl',
      1 => 1333445365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5245078984f8186b4a13c83-01317047',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f8186b4a34185_04676926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8186b4a34185_04676926')) {function content_4f8186b4a34185_04676926($_smarty_tpl) {?><style type="text/css">
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
</style><?php }} ?>