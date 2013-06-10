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
				ORDER BY
						`Letzter_Login`
				DESC
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
	
	if($dsatz['country']==''){
		$dsatz['country']="<span style=\"font-size:10px;\">keine Angaben</span>";
	}
	
	$sql = "SELECT COUNT( TourID ) AS aktivitaeten
			FROM touren, user
			WHERE touren.UserID =".$dsatz['ID']."
			AND touren.UserID = user.ID";

$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());

$row = mysql_fetch_assoc($result);
	
	
		$users[$i]  ="<td class=\"$libackground\"><a href=\"usercp-profile_information.php?UserID=".$dsatz['ID']."\"><img src=\"images/profile/contacts-icon.png\" title=\"Profil betrachten\" /></a></td>\n";
		$users[$i] .="<td class=\"$libackground\"><a href=\"javascript:alert('In Arbeit... :-)')\"><img src=\"images/profile/user-add-icon.png\" title=\"folge den Benutzer und werde sein Freund\" /></a></td>\n";
		$users[$i] .="<td class=\"$libackground\">".$dsatz['Name']."</td>\n";
		$users[$i] .="	<td class=\"$libackground\">".$dsatz['Lastname']."</td>\n";
		$users[$i] .="	<td class=\"$libackground\">".DatumsWandler($dsatz['Registrierungsdatum'])."</td>\n";
		$users[$i] .="<td class=\"$libackground\">";
		
		
		if($row['aktivitaeten']=='0'){
			$users[$i] .="<img src=\"images/profile/badge-square-minus-24-ns.png\" title=\"Dieser Benutzer hat noch keine Aktivitäten hinzugefügt\" />";
		}elseif($row['aktivitaeten']>0){
			
			$users[$i] .="<img src=\"images/profile/badge-square-check-24.png\" title=\"Dieser Benutzer hat schon Aktivitäten hinzugefügt\" />";
		}
		
		$users[$i] .="</td>\n";
		
		$users[$i] .="<td class=\"$libackground\">".$dsatz['country']."</td>\n";	
		$users[$i] .="<td class=\"$libackground\"><a href=\"javascript:alert('In Arbeit... :-)')\"><img src=\"images/profile/group-add-icon.png\" title=\"zum Team hinzufügen\" /></a></td>\n";
		 
}

$tpl->assign('mitgliederliste',$users);									
									