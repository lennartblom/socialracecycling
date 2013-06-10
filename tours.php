<?php

	session_start();
	
	require_once('ink/functions.ink.php');
	require_once('ink/global.php');
	require_once('ink/db.ink.php');
	
	$tpl->assign('title', 'Tour Übersicht');
	$tpl->assign('usercp', false);
	require_once('ink/wysiwyg.ink.php');
	
	if(isset($_SESSION['UserID'])){
		if(isset($_GET['tourID'])){
				$tpl->assign('online',true);
		
				require_once('ink/footer_data.ink.php');
				require_once('ink/tour-table.ink.php');
				
				$tpl->assign('name',$_SESSION['Vorname']);
				$tpl->assign('lastname',$_SESSION['Nachname']);
				
				require_once('ink/tour-show.ink.php');
				$tpl->assign('title', 'Tour anzeigen');
				$tpl->display('01_tpl/internal/tour-show.tpl');	
		}
		
		if (isset($_POST['submit'])) { 	
		    switch ($_POST['submit']) {
				
				case 'Tourdaten löschen':
						$tpl->assign('online',true);
				
						require_once('ink/footer_data.ink.php');
						require_once('ink/tour-delete.ink.php');
						
						$tpl->assign('name',$_SESSION['Vorname']);
						$tpl->assign('lastname',$_SESSION['Nachname']);
						
						$tpl->assign('title', 'Tour löschen');
						$tpl->display('01_tpl/internal/tour-delete.tpl');
					break;
					
				case 'Tourdaten anzeigen':
						$tpl->assign('online',true);
				
						require_once('ink/footer_data.ink.php');
						require_once('ink/tour-table.ink.php');
						
						$tpl->assign('name',$_SESSION['Vorname']);
						$tpl->assign('lastname',$_SESSION['Nachname']);
						
						require_once('ink/tour-show.ink.php');
						$tpl->assign('title', 'Tour anzeigen');
						$tpl->display('01_tpl/internal/tour-show.tpl');	
					break;
					
				case 'Tourdaten bearbeiten':
						$tpl->assign('online',true);
				
						require_once('ink/footer_data.ink.php');
						require_once('ink/tour-edit.ink.php');
						
						$tpl->assign('name',$_SESSION['Vorname']);
						$tpl->assign('lastname',$_SESSION['Nachname']);
						$tpl->assign('title', 'Tour bearbeiten');
						$tpl->display('01_tpl/internal/tour-edit.tpl');	
					break;
					
				default:
				   $tpl->assign('error', 'Es wurde keine Tour von dir ausgewählt!');
			}
		}
		else {
				
					$tpl->assign('online',true);
		
					require_once('ink/footer_data.ink.php');
					require_once('ink/tour-table.ink.php');
					
					$tpl->assign('name',$_SESSION['Vorname']);
					$tpl->assign('lastname',$_SESSION['Nachname']);
					
					
					
					$tpl->display('01_tpl/internal/tours-overview.tpl');
			
		} 
		
		
		

				
				
	}			
	else{
		$tpl->assign('online',false);
		$tpl->assign('title','Nicht eingeloggt');
		$tpl->display('01_tpl/frontpage/attempt.tpl');
	}
	
	?>
          
                   
	
	