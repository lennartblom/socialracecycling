<?php
			$km = "";
			$height_km=68;
	
			$sql="SELECT SUM(`distance`) AS `fahrradkilometer` 
					FROM  `touren` ";
					
			$result= mysql_query($sql) OR die ("<pre>\n".$sql."</pre>\n".mysql_error());
			$row = mysql_fetch_assoc($result);
			
			 
			$radkilometer=round($row['fahrradkilometer'],0);
			
			$string_1=str_split($radkilometer);
			
			
			for($i=0; $i<strlen($radkilometer); $i++){
				if($string_1[$i]=='.')
					$string_1[$i]="trenner";
				$km.= "<img src=\"http://socialracecycling.de/images/counter/".$string_1[$i].".png\" height=\"".$height_km."\" />";	
				
			}
			
			$km.= "<img src=\"http://socialracecycling.de/images/counter/K.png\" height=\"".$height_km."\" />";
			$km.= "<img src=\"http://socialracecycling.de/images/counter/M.png\" height=\"".$height_km."\" />";
			
			
			
			$tpl->assign('km', $km );
			
			$activities = "";
			$height_activities=60;
			
			$sql2="SELECT COUNT( * ) AS activities 
				FROM  `touren` ";
									
			$result= mysql_query($sql2) OR die ("<pre>\n".$sql2."</pre>\n".mysql_error());
			$row = mysql_fetch_assoc($result);
			
			
			$string_2=str_split($row['activities']);
			
			
			for($j=0; $j<strlen($row['activities']); $j++){
				if($string_2[$j]=='.')
					$string_2[$j]="trenner";
				$activities.= "<img src=\"http://socialracecycling.de/images/counter/".$string_2[$j].".png\" height=\"".$height_activities."\" />";	
				
			}
			
			
			
			
			$tpl->assign('activities', $activities );
