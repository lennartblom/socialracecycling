if(isset($_GET['tourID'])){
								
								$sql = "SET lc_time_names = 'de_DE'";
																
								$result = mysql_query($sql) OR die("<pre>n".$sql."</pre>n".mysql_error());
								
								$sql = "SELECT
												DATE_FORMAT(date, '%W, %d. %M %Y') AS datum,
												distance,
												duration,
												`average-speed`,
												`average-cadence`,
												`elevator-difference`,
												`other-information`
										FROM
												touren
										WHERE
												tourID='".$_GET['tourID']."'
										";
									
								$result = mysql_query($sql) OR die("<pre>n".$sql."</pre>n".mysql_error());
															
								$row = mysql_fetch_assoc($result);
			
								$num = mysql_affected_rows();
								
								if ($row["average-cadence"]=='0'){
									$row["average-cadence"]="--- ";
								}
								
								if (!isset($row["elevator-difference"])){
									$row["elevator-difference"]="--- ";
								}
								
								if($row['average-cadence']=='-0' OR $row['average-cadence']=='' OR $row['average-cadence']=='0' ){
									$row['average-cadence']="---";
								}	
								
								if($row['elevator-difference']=='-0' OR $row['elevator-difference']=='' OR $row['elevator-difference']=='0' ){
									$row['elevator-difference']="---";
								}	
								
								<h3>anzeigen | Tour</h3>
								<div style="margin-right:50px;width:400px;height:375px;float:right;">
                                
                                <iframe width="400" height="375" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.de/maps?f=q&amp;source=s_q&amp;hl=de&amp;geocode=&amp;q=Leeden&amp;sll=51.151786,10.415039&amp;sspn=20.697059,57.084961&amp;ie=UTF8&amp;hq=&amp;hnear=Leeden+Tecklenburg,+Steinfurt,+Nordrhein-Westfalen&amp;t=h&amp;z=14&amp;ll=52.213702,7.891026&amp;output=embed"></iframe>
                                
                                </div>
								
								<table style="margin-left:50px;">
									<tr>
										<td class="label">Datum:</td>
										<td><input class="tour-input" name="date" value="".$row['datum']."" type="text" maxlength="70" readonly /></td>
									</tr>
									<tr>
										<td class="label">Distanz:</td>
										<td><input class="tour-input" name="date" value="".$row['distance']." Kilometer" type="text" maxlength="70" readonly /></td>
									</tr>
									<tr>
										<td class="label">Fahrzeit:</td>
										<td><input class="tour-input" name="date" value="".$row['duration']." Stunden" type="text" maxlength="70" readonly /></td>
									</tr>
									<tr>
										<td class="label">Durschnittsgeschwindigkeit:</td>
										<td><input class="tour-input" name="date" value="".$row['average-speed']." km/h" type="text" maxlength="70" readonly /></td>
									</tr>
									<tr>
										<td class="label">Durchschnittliche Trittfrequenz:</td>
										<td><input class="tour-input" name="date" value="".$row['average-cadence']." U/min." type="text" maxlength="70" readonly /></td>
									</tr>
									<tr>
										<td class="label">Höhenunterschied:</td>
										<td><input class="tour-input" name="date" value="".$row['elevator-difference']." Meter" type="text" maxlength="70" readonly /></td>
									</tr>
									<tr>
										<td class="label">zusätzliche Tourinformationen:</td>
										<td><textarea class="tour-input" style="margin-left:-1px;" name="date" type="text" rows="10" cols="26" readonly>".$row['other-information']."</textarea></td>
									</tr>
								</table
								
								<p class="text-content"><a style="margin-left:50px;" href="calendar.php">Hier</a> gelangen Sie wieder zurück zum Kalender.</p>						