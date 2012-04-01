

<?php



if(!isset($change_selection_var)){
			$change_selection_var=0;
}

$change_selection_var=$_POST['change_selection_var'];
				
if(isset($_POST['change_selection'])){
	if($_POST['change_selection']=='←' AND $_POST['change_selection_var']>0){
		$_POST['change_selection_var'] = $_POST['change_selection_var']-10;
		
	}
	
	
	if($_POST['change_selection']=='→'){
		$_POST['change_selection_var'] = $_POST['change_selection_var']+10;
		
	}
	
	$tpl->assign('change_selection',$_POST['change_selection_var']);
	
}	








$tours=array();

$i = 0;

$change_selection_var = $_POST['change_selection_var'] + 0;

$sql = mysql_query("SELECT
							* 
					from 
							`touren` 
					where 
							(UserID ='".$_SESSION['UserID']."')
					ORDER BY
							date
					DESC	
							LIMIT 
					$change_selection_var, 10
					
					");

$result = mysql_num_rows($sql)  or die ("MySQL-Fehler: " . mysql_error());  

while($dsatz = mysql_fetch_assoc($sql)){
    $i++;
    if($i % 2 == 0){ 
        $libackground="edittour-showtour-dark";
    } 
    else{ 
        $libackground="edittour-showtour-light";
    }  
    
    if (!isset($dsatz["average-cadence"])){
        $dsatz["average-cadence"]="- - -";
    }
    
    if (!isset($dsatz["elevator-difference"])){
        $dsatz["elevator-difference"]="- - -";
    }
    
    if($dsatz['average-cadence']=='-0' OR $dsatz['average-cadence']=='' OR $dsatz['average-cadence']=='0' ){
        $dsatz['average-cadence']="- - -";
    }	
    
    if($dsatz['elevator-difference']=='-0' OR $dsatz['elevator-difference']=='' OR $dsatz['elevator-difference']=='0' ){
        $dsatz['elevator-difference']="- - -";
    }	
    
	$tours[$i].="		<td class=\"$libackground\"><input type=\"radio\" name=\"tour-choice\" value=\"".$dsatz["TourID"]."\" /></td>\n";
    $tours[$i].="		<td class=\"$libackground\">".mysqlDatetoNormal($dsatz["date"])."</td>\n";
	$tours[$i].="		<td class=\"$libackground\"><img src=\"images/icon-".$dsatz['typ'].".png\"></img></td>\n";
    $tours[$i].="		<td class=\"$libackground\">".$dsatz["distance"]." km</td>\n";
    $tours[$i].="		<td class=\"$libackground\">".(date("H:i:s",$dsatz['duration']))."</td>\n";
    $tours[$i].="		<td class=\"$libackground\">".$dsatz["average-speed"]."km/h</td>\n";
    $tours[$i].="		<td class=\"$libackground\">".$dsatz["average-cadence"]." rpm</td>\n";
	$tours[$i].="		<td class=\"$libackground\">- - - bpm</td>\n";
    $tours[$i].="		<td class=\"$libackground\">".$dsatz["elevator-difference"]." m</td>\n";
}

$tpl->assign('touren',$tours);
?>
