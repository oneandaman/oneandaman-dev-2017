<?php
// Create By Noppachai
// Date : 15/03/2017

// Check incomming IP to re-direct to landing page.
// If IP come from outside Thailand, go to Enlish page.

// during dev
header("Location: ".$actual_link.'en/'); 
die();
// ----


$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 

if($_SERVER['REMOTE_ADDR'] == '127.0.0.1'){ // for localhost environment
	header("Location: ".$actual_link.'en/'); 
} else {
	$details = json_decode(file_get_contents("http://ipinfo.io/".$_SERVER['REMOTE_ADDR']."/json"));
	if($details->country == 'TH'){
		header("Location: ".$actual_link.'th/'); 
	} else {
		header("Location: ".$actual_link.'en/'); 
	}
}
die();



?>