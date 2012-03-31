<?php

$users=array();

if(!isset($change_selection_mitgliederliste)){
	$change_selection_mitgliederliste=0;
}

if(isset(	$_POST['change_selection_mitgliederliste_button']) 			AND 
			$_POST['change_selection_mitgliederliste_button'] == '«' 	AND 
			$_POST['change_selection_mitgliederliste']=0){
	$change_selection_mitgliederliste=$_POST['change_selection_mitgliederliste']-10;
}

if(isset(	$_POST['change_selection_mitgliederliste_button']) AND 
			$_POST['change_selection_mitgliederliste_button']=='»'){
	$change_selection_mitgliederliste=$_POST['change_selection_mitgliederliste']+10;
}	

$tpl->assign('change_selection',$change_selection_mitgliederliste);

$res = mysql_query("select 
						* 
				from 
						user 
				where 
						NOT(ID='".$_SESSION['UserID']."')
				LIMIT 
						$change_selection_mitgliederliste, 10
				");

$num = mysql_num_rows($res);

$i = 0;
									
while($dsatz = mysql_fetch_assoc($res)){
	$i++;
	if($i % 2 == 0){ 
		$libackground="edittour-showtour-dark";
	} 
	else{ 
		$libackground="edittour-showtour-light";
	}
	
	if(!isset($dsatz['country'])){
		$dsatz['country']="<span style=\"font-size:10px;\">keine Angaben</span>";
	}
	
		$users[$i]  ="<td class=\"$libackground\"><input type=\"radio\" name=\"member-choice\" value=\"".$dsatz["ID"]."\" /></td>\n";
		$users[$i] .="<td class=\"$libackground\">".$dsatz['Name']."</td>\n";
		$users[$i] .="	<td class=\"$libackground\">".$dsatz['Lastname']."</td>\n";
		$users[$i] .="	<td class=\"$libackground\">".DatumsWandler($dsatz['Registrierungsdatum'])."</td>\n";
		if(!isset($dsatz['birthday'])){
			$users[$i] .="<td class=\"$libackground\"><span style=\"font-size:10px;\">keine Angaben</span></td>\n";
		}
		else{
			$users[$i] .="<td class=\"$libackground\">";
			$users[$i] .="". DatumsWandler($dsatz['birthday'])."";

			$users[$i] .="</td>\n";
		}	
			$users[$i] .="<td class=\"$libackground\">".$dsatz['country']."</td>\n";	
		 
}

$tpl->assign('mitgliederliste',$users);									
									