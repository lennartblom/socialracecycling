<?php

if(isset($_POST['tour-choice'])){
					$sql = "SET lc_time_names = 'de_DE'";
													
					$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
					
					$sql = "SELECT
									DATE_FORMAT(date, '%W, %d. %M %Y') AS datum
							FROM
									touren
							WHERE
									tourID='".$_POST['tour-choice']."'
							";
						
					$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
												
					$row = mysql_fetch_assoc($result);

					$num = mysql_affected_rows();
					
					
					if($num>0){
						$sql = "DELETE
										FROM
								touren
										WHERE
								tourID='".$_POST['tour-choice']."'
								";
						$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
					}
					
					$success = "Die Tour vom ".$row['datum']." wurde erfolgreich aus ihrer Datenbank gelöscht.";
					
					$tpl->assign('success',$success);
					
}
					
if(!isset($_POST['tour-choice'])){
	$error="Bitte wähle eine Tour aus, die gelöscht werden soll.";
	
	$tpl->assign('error',$error);
				
}