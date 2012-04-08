<?php /* Smarty version Smarty-3.1.8, created on 2012-03-25 17:07:27
         compiled from "ink/tour-table.ink.php" */ ?>
<?php /*%%SmartyHeaderCode:7959847584f6f4edf37a437-02224515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '303d6054f6b89cab741fbd1dbf09d7fe38fef7d5' => 
    array (
      0 => 'ink/tour-table.ink.php',
      1 => 1332695243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7959847584f6f4edf37a437-02224515',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f6f4edf393530_92438848',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6f4edf393530_92438848')) {function content_4f6f4edf393530_92438848($_smarty_tpl) {?>

<<?php ?>?php

if(!isset($change_selection_var)){
			$change_selection_var=0;
}

				
if(isset($_POST['change_selection'])){
	if($_POST['change_selection']=='←' AND $_POST['change_selection_var']<0){
		$change_selection_var=$_POST['change_selection_var']-10;
	}
	if($_POST['change_selection']=='→'){
		$change_selection_var=$_POST['change_selection_var']+10;
	}
}	

$i = 0;

$res = mysql_query("SELECT 
        * DATE_FORMAT('date_begin', '%W %M %Y');
from 
        `touren` 
where 
        (UserID ='".$_SESSION['UserID']."')
LIMIT 
        $change_selection_var, 10
");

$num = mysql_num_rows($res);

while($dsatz = mysql_fetch_assoc($res)){
    $i++;
    if($i % 2 == 0){ 
        $libackground="edittour-showtour-dark";
    } 
    else{ 
        $libackground="edittour-showtour-light";
    }  
    
    if (!isset($dsatz["average-cadence"])){
        $dsatz["average-cadence"]="--- ";
    }
    
    if (!isset($dsatz["elevator-difference"])){
        $dsatz["elevator-difference"]="--- ";
    }
    
    if($dsatz['average-cadence']=='-0' OR $dsatz['average-cadence']=='' OR $dsatz['average-cadence']=='0' ){
        $dsatz['average-cadence']="---";
    }	
    
    if($dsatz['elevator-difference']=='-0' OR $dsatz['elevator-difference']=='' OR $dsatz['elevator-difference']=='0' ){
        $dsatz['elevator-difference']="---";
    }	
    ds
	
    echo "<tr>\n";
    echo "		<td class=\"$libackground\"><input type=\"radio\" name=\"tour-choice\" value=\"".$dsatz["TourID"]."\" /></td>\n";
    echo "		<td class=\"$libackground\">".mysqlDatetoNormal($dsatz["date"])."</td>\n";
    echo "		<td class=\"$libackground\">".$dsatz["distance"]." Km</td>\n";
    echo "		<td class=\"$libackground\">".($dsatz["duration"]*60)." Minuten</td>\n";
    echo "		<td class=\"$libackground\">".$dsatz["average-speed"]."km/h</td>\n";
    echo "		<td class=\"$libackground\">".$dsatz["average-cadence"]." U/Minute.</td>\n";
    echo "		<td class=\"$libackground\">".$dsatz["elevator-difference"]." Meter</td>\n";
    echo "	  </tr>\n";
}

?<?php ?>>
<?php }} ?>