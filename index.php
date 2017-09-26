<?php 
	ini_set('display_errors', 1);
	session_start();
	if ($_SESSION['pseudo']) {
		header('Location: view/chatmessageview.php');
	}
	else{
    	header('Location: view/connectionview.php');
    }