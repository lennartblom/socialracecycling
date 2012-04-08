<?php /* Smarty version Smarty-3.1.8, created on 2012-03-12 18:49:27
         compiled from "ink/charts.ink.php" */ ?>
<?php /*%%SmartyHeaderCode:6845280914f5e45376a1e12-51872807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '612b8659c6eb44ee1a992497234f1b53ec85025e' => 
    array (
      0 => 'ink/charts.ink.php',
      1 => 1331578127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6845280914f5e45376a1e12-51872807',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5e45376a6a30_29604701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5e45376a6a30_29604701')) {function content_4f5e45376a6a30_29604701($_smarty_tpl) {?><<?php ?>?php 

//------------------------------------------------------------------------------------------------------------------------------//
//----------------------------------------------{ ≈≈≈≈≈≈ Übergabe der Benutzernamen ≈≈≈≈≈≈ }----------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//	

$sql = "SELECT
		SUM(`distance`) AS distance_week
FROM
		touren
WHERE
		WEEKOFYEAR(date)=((WEEKOFYEAR(CURDATE()))+".$_SESSION['week_change'].") AND YEAR(date)=((YEAR(curdate()))+".$_SESSION['year_change'].") AND UserID ='".$_SESSION['UserID']."'
";
$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

$row = mysql_fetch_assoc($result);

$tpl->assign('charts_weekkilometer', round($row['distance_week'],2));<?php }} ?>