<?php
if(isset($_POST['tour-choice'])){
		$sql = "SET lc_time_names = 'de_DE'";
										
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		
		$sql = "SELECT
						DATE_FORMAT(date, '%d.%m.%y') AS datum,
						typ,
						distance,
						duration,
						`average-speed`,
						`average-cadence`,
						`elevator-difference`,
						`other-information`,
						herzfrequenz
				FROM
						touren
				WHERE
						tourID='".$_POST['tour-choice']."'
				";
			
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
									
		$row = mysql_fetch_assoc($result);

		$num = mysql_affected_rows();
		
		if ($row["average-cadence"]=='0')
			$row["average-cadence"]="---";
		
		if (!isset($row["elevator-difference"])){
			$row["elevator-difference"]="---";
		}
		
		if($row['average-cadence']=='-0' OR $row['average-cadence']=='' OR $row['average-cadence']==0 ){
			$row['average-cadence']="---";
		}	
		
		if($row['elevator-difference']=='-0' OR $row['elevator-difference']=='' OR $row['elevator-difference']=='0' ){
			$row['elevator-difference']="---";
		}	
		
		if(!isset($row['other-information']) or $row['other-information']==''){
			$row['other-information']="leider keine Angaben angegeben";
		}
		
		$time=date("H:i:s",$row['duration']);
		
		if($row['typ']=='laufen')
			$row['typ']="Laufen";
			
		if($row['typ']=='radfahren')
			$row['typ']="Radfahren";
			
		if(!isset($row['herzfrequenz']) OR $row['herzfrequenz']=='0' )
			$row['herzfrequenz']="---";
		
		$tpl->assign('datum', 				$row['datum']				);
		$tpl->assign('distanz', 			$row['distance']			);
		$tpl->assign('dauer', 				$time						);
		$tpl->assign('trittfrequenz', 		$row['average-cadence']		);
		$tpl->assign('durchschnitt', 		$row['average-speed']		);
		$tpl->assign('hoehenmeter', 		$row['elevator-difference']	);
		$tpl->assign('info', 				$row['other-information']	);							
		$tpl->assign('typ',					$row['typ']					);
		$tpl->assign('herzfrequenz',		$row['herzfrequenz']		);

} 
if(!isset($_POST['tour-choice'])){
	$error="Bitte wählen nächstes Mal die Tour aus, die du näher betrachten möchtest.";
	
	$tpl->assign('error',$error);
				
}