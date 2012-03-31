<?php
	session_start();
	require_once('ink/functions.ink.php');
	require_once('ink/global.php');
	require_once('ink/db-frontpage.ink.php');

	$tpl->assign('online',false);
	$tpl->assign('usercp', false);
	$tpl->assign('title', 'Login');
	
	error_reporting(E_ALL);	
	
	
	
	$sql = "SELECT
                    ID
            FROM	
                    user
            WHERE
                    Email = '".mysql_real_escape_string(trim($_POST['log_email']))."' AND
                    Passwort = '".md5(trim($_POST['log_password']))."'";
    $result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	 
	 if(isset($_POST['log_submit']) AND $_POST['log_submit']=='Login'){
    //Falls email und Passwort übereinstimmen...
    $sql = "SELECT
                    ID
            FROM	
                    user
            WHERE
                    Email = '".mysql_real_escape_string(trim($_POST['log_email']))."' AND
                    Passwort = '".md5(trim($_POST['log_password']))."'";
    $result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	
	
	
    //wird die ID des Users geholt und der User damit eingeloggt
    
    $row = mysql_fetch_assoc($result);
    
    
    if(mysql_num_rows($result)==1){
            doLogin($row['ID'], isset($_POST['log_Autologin']));
			header("Location: home.php");
			exit;
    }
    else {
			$tpl->assign('title', 'Nicht eingeloggt');
            $tpl->display('01_tpl/frontpage/attempt.tpl');
    }
}				
	 
?>
