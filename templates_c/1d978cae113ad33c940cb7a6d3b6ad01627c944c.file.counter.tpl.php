<?php /* Smarty version Smarty-3.1.8, created on 2013-05-03 10:23:29
         compiled from "01_tpl/frontpage/counter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110637294051839021731e47-04157877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d978cae113ad33c940cb7a6d3b6ad01627c944c' => 
    array (
      0 => '01_tpl/frontpage/counter.tpl',
      1 => 1367576509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110637294051839021731e47-04157877',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51839021739f81_19819420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51839021739f81_19819420')) {function content_51839021739f81_19819420($_smarty_tpl) {?><div id="counter">


<table>
	<tr>

<<?php ?>?php


	$MYSQL_HOST = 'localhost';
	$MYSQL_USER = 'root';
	$MYSQL_PASS = '';
	$MYSQL_DATA = 'racecycling';
	
	
	$connid = @mysql_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PASS) OR die ("Error: ".mysql_error());
	
	mysql_select_db($MYSQL_DATA) OR die ("Error: ".mysql_error());
	
	mysql_query("SET NAMES `utf8`") OR die("Error: ".mysql_error());
	
// Muss ein autologin durchgeführt werden?

	
			$sql="SELECT SUM(  `distance` ) AS  `fahrradkilometer` 
					FROM  `touren` 
					WHERE `typ`='radfahren'";
					
			$result= mysql_query($sql) OR die ("<pre>\n".$sql."</pre>\n".mysql_error());
			$row = mysql_fetch_assoc($result);
			
			
			$radkilometer=round($row['fahrradkilometer'],1);
			
			$string=str_split($radkilometer);
			
			for($i=0; $i<strlen($radkilometer); $i++){
				if($string[$i]=='.')
					$string[$i]="trenner";
				echo "<td><img src=\"http://socialracecycling.de/images/counter/".$string[$i].".png\" height=\"150\" /></td>";	
				
			}
			
			echo "<td><img src=\"http://socialracecycling.de/images/counter/K.png\" height=\"150\" /></td>";
			echo "<td><img src=\"http://socialracecycling.de/images/counter/M.png\" height=\"150\" /></td>";
?<?php ?>>

	</tr>
</table>

</div>


<?php }} ?>