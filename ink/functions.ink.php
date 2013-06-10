<?php
require_once('ink/global.php');


 function format_datetime($date_time) { 
   if(date('Y-m-d', strtotime($date_time)) == date('Y-m-d')) { 
     return date('\H\e\u\t\e, H:i'); 
   } else if(date('Y-m-d', strtotime($date_time)) == date('Y-m-d', strtotime('yesterday'))) { 
     return 'Gestern, '.date('H:i'); 
   } else { 
     return date('d.m.Y, H:i', strtotime($date_time)); 
   } 
 }  

function RelativesDatum($Datum)
{
    $Zeitstempel = strtotime($Datum);

    if($Zeitstempel <= time())
    {
        if(date("Y-m-d", $Zeitstempel) == date("Y-m-d"))
        {
            return "heute";
        }
        elseif($Zeitstempel <= strtotime("-1 day") && $Zeitstempel > strtotime("-2 day"))
        {
            return "gestern";
        }
        elseif($Zeitstempel <= strtotime("-2 day") && $Zeitstempel > strtotime("-3 day"))
        {
            return "vorgestern";
        }
        elseif($Zeitstempel <= strtotime("-3 day") && $Zeitstempel > time()-120*86400)
        {
            $Tage = floor((time()-$Zeitstempel)/86400);
            return "vor ".$Tage." Tagen";
        }
        elseif(date("Y", $Zeitstempel) == date("Y"))
        {
            return date("d.m.", $Zeitstempel);
        }
        else
        {
            return date("d.m.Y", $Zeitstempel);
        }
    }
    else
    {
        if($Zeitstempel <= strtotime("+1 day"))
        {
            return "morgen";
        }
        elseif($Zeitstempel <= strtotime("+2 day"))
        {
            return "übermorgen";
        }
        elseif($Zeitstempel <= time()+120*86400)
        {
            $Tage = ceil(($Zeitstempel-time())/86400);
            return "in ".$Tage." Tagen";
        }
        elseif(date("Y", $Zeitstempel) == date("Y"))
        {
            return date("d.m.", $Zeitstempel);
        }
        else
        {
            return date("d.m.Y", $Zeitstempel);
        }
    }
}






function ago($timestamp){
  $difference = time() - $timestamp;
  $periods = array("second", "minute", "hour", "day", "week", "month", "years", "decade");
  $lengths = array("60","60","24","7","4.35","12","10");
  for($j = 0; $difference >= $lengths[$j]; $j++)
  $difference /= $lengths[$j];
  $difference = round($difference);
  if($difference != 1) $periods[$j].= "s";
  $text = "$difference $periods[$j] ago";
  return $text;
 }

function DatumsWandler($Datum) {
    if(strlen($Datum) == 10) {
        $GewandeltesDatum = substr($Datum, 8, 2);
        $GewandeltesDatum .= ".";
        $GewandeltesDatum .= substr($Datum, 5, 2);
        $GewandeltesDatum .= ".";
        $GewandeltesDatum .= substr($Datum, 0, 4);

        return $GewandeltesDatum;
    } elseif(strlen($Datum) == 19) {
        $GewandeltesDatum = substr($Datum, 8, 2);
        $GewandeltesDatum .= ".";
        $GewandeltesDatum .= substr($Datum, 5, 2);
        $GewandeltesDatum .= ".";
        $GewandeltesDatum .= substr($Datum, 0, 4);
        $GewandeltesDatum .= substr($Datum, 10);

        return $GewandeltesDatum;
    } else {
        return FALSE;
    }
}

//-----------------------------------------------------------------------------------------------------------------------------//
//----------------------------------------------{ ≈≈≈≈≈≈ Funktion Login ≈≈≈≈≈≈ }-----------------------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//

//Loggt einen Benutzer ein indem...
function doLogin($ID, $Autologin=false)
{
		//..aktuelle Session in der Datenbank gespeichert wird
		$sql = "Update
						user
				Set
						SessionID='".mysql_real_escape_string(session_id())."',
						
						Autologin = NULL,
						IP = '".$_SERVER['REMOTE_ADDR']."',
						Letzter_Login = '".mysql_real_escape_string(time())."',
						Letzte_Aktion = '".mysql_real_escape_string(time())."'					
				WHERE
						ID = '".$ID."'
				";
		mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		// Wenn man eingeloggt bleiben möchte
		if($Autologin){
				//Zufallscode erzeugen
				$part_one = substr(time()-rand(100, 100000),5,10);
				$part_two = substr(time()-rand(100, 100000),-5);
				$Login_ID = md5($part_one.$part_two);
				
				setcookie("Autologin", $Login_ID, time()+60*+0*24*365*10);
				
				$sql = "UPDATE
								user
						SET
								Autologin = '".$Login_ID."'
						WHERE
								ID = '".$ID."'
						";
				mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		}
		
		//Daten des users in der Session speichern
		$sql = "SELECT
						Email,
						Name,
						Lastname
				FROM
						user
				WHERE
						ID = '".$ID."'
				";
		$result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		
		$row = mysql_fetch_assoc($result);

		
		$_SESSION['UserID'] = $ID;
		$_SESSION['Vorname'] = $row['Name'];
		$_SESSION['Nachname'] = $row['Lastname'];
		
		if(($_SESSION['UserID'] <> 22) AND ($_SESSION['UserID'] <> 25)AND ($_SESSION['UserID'] <> 70)){
		$mail 	    = 'admin@lennart-blom.de';
	    $prefix 	= 'Login auf Social Race Cycling';
	    $text		= "Hi Lennart, auf deiner Seite \"Social Race Cycling\" hat sich nun ".$_SESSION['Vorname']." ".$_SESSION['Nachname']." eingelogt!";
		
	    $result = mail($mail, $prefix, $text, 'From: ' . $mail);
		}
}

//-----------------------------------------------------------------------------------------------------------------------------//	
//------------------------------------------------------{Function_end}---------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//

//-----------------------------------------------------------------------------------------------------------------------------//
//----------------------------------------------{ ≈≈≈≈≈≈ Funktion Logout ≈≈≈≈≈≈ }----------------------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//

//Loggt einen User aus, ...
function doLogout()
{
		// ... indem das Cookie
		if (isset($_COOKIE['Autologin']))
			setcookie("Autologin", "", time()-60*60);
		// ... die Session ID aus der Datenbank gelöscht werden
		$sql = "UPDATE
						user
				SET
						SessionID = Null,
						Autologin = Null,
						IP = NULL
				WHERE
						ID = '".$_SESSION['UserID']."'
				";
		mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
		
		//Hiermit wird die $_SESSION geleert
		$_SESSION = array();
		
		//$_SESSION wird gelöscht
		session_destroy();
		
		
	
}
	
//-----------------------------------------------------------------------------------------------------------------------------//	
//------------------------------------------------------{Function_end}---------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//


//-----------------------------------------------------------------------------------------------------------------------------//
//----------------------------------------------{ ≈≈≈≈≈≈ Funktion Datum  ≈≈≈≈≈≈ }----------------------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//

function mysqlDatetoNormal($mysqlDate){ 
	$teiler = preg_split("/ /",$mysqlDate); $datum = preg_split("/-/",$teiler[0]);
	return $datum[2].'.'.$datum[1].'.'.$datum[0];
}

//-----------------------------------------------------------------------------------------------------------------------------//	
//------------------------------------------------------{Function_end}---------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//


//-----------------------------------------------------------------------------------------------------------------------------//
//----------------------------------------------{ ≈≈≈≈≈≈ Funktion Strecke auswählen  ≈≈≈≈≈≈ }----------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//


function ShowTour($date){
	$return="";
	$i = 0;		
	$res = mysql_query("SELECT
								*
						FROM
								touren
						WHERE
								date='$date' AND UserID='".$_SESSION['UserID']."'
						");
	
	$num = mysql_num_rows($res);
	
	while($dsatz = mysql_fetch_assoc($res)){
		$i++;
	
		$return.="<li><a href=\"tours.php?tourID=".$dsatz['TourID']."\" class=\"calendarlink\"><span style=\"font-weight:bold;font-size:10px;\">$i.Tour:</span> ".round($dsatz['distance'],2)."km</a></li><br />\n";
	}
	
	return $return;
}

//-----------------------------------------------------------------------------------------------------------------------------//	
//------------------------------------------------------{Function_end}---------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------------------------//

function SendMessage($absender, $empfaenger, $betreff, $inhalt){
	$sql	=	"insert nachrichten"
			.	"(senderID, empfaengerID, betreff, inhalt, gelesen, datum) values "
			.	"('$absender',"
			.	"'$empfaenger',"
			.	"'$betreff',"
			.	"'$inhalt',"
			.	"'FALSE',"
			.	"now())";
			
	mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());	
	
	$num	=	mysql_affected_rows();
	if($num>0){
		$return="Es wurde ein Datensatz hinzugefügt";
	} else {
		$return="Es ist irgendetwas schief gelaufen";
	}
	
	$return .=$sql;
	return $return;
}

function ListMessagesOutBox(){
	$return="";
	
	$i=0;
	$res = mysql_query("SELECT
								*
						FROM
								nachrichten
						WHERE
								senderID='".$_SESSION['UserID']."'
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
		
		$return.=					"<tr>\n
									 <td class=\"$libackground\"><input type=\"radio\" name=\"message-choice\" value=\"".$dsatz["ID"]."\" /></td>
									 <td class=\"$libackground\">".$dsatz["betreff"]."</td>\n
									 <td class=\"$libackground\">".$dsatz["senderID"]."</td>\n
									 <td class=\"$libackground\">".$dsatz["empfaengerID"]."</td>\n
									 <td class=\"$libackground\">".DatumsWandler($dsatz['datum'])."</td>\n
									 </tr>\n";
	}
	if($num==0){
		$return.=					"<tr>\n
									 <td style=\"text-align:center;\">---</td>\n
									 <td style=\"text-align:center;\">---</td>\n
									 <td style=\"text-align:center;\">---</td>\n
									 <td style=\"text-align:center;\">---</td>\n
									 <td style=\"text-align:center;\">---</td>\n
									 </tr>\n";
	}
	
	return $return;
}

function ListMessagesInBox(){
	$return="";
	
	$i=0;
	$res = mysql_query("SELECT
								*
						FROM
								nachrichten
						WHERE
								empfaengerID='".$_SESSION['UserID']."'
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
		
	
		$return.=					"<tr>\n
									 <td class=\"$libackground\"><input type=\"radio\" name=\"message-choice\" value=\"".$dsatz["ID"]."\" /></td>
									 <td class=\"$libackground\">".$dsatz["betreff"]."</td>\n
									 <td class=\"$libackground\">".$dsatz["senderID"]."</td>\n
									 <td class=\"$libackground\">".$dsatz["empfaengerID"]."</td>\n
									 <td class=\"$libackground\">".DatumsWandler($dsatz['datum'])."</td>\n
									 </tr>\n";
	} 
	if($num==0){
		$return.=					"<tr>\n
									 <td style=\"text-align:center;\">---</td>\n
									 <td style=\"text-align:center;\">---</td>\n
									 <td style=\"text-align:center;\">---</td>\n
									 <td style=\"text-align:center;\">---</td>\n
									 <td style=\"text-align:center;\">---</td>\n
									 </tr>\n";
	}
	
	
	return $return;
}

	


?>