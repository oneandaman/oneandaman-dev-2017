<?php
// Create By Noppachai
// Date : 15/03/2017

// check for ip to re-direct to landing page
// if ip come from outside Thailand, go to Enlish page

$actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 

header("Location: ".$actual_link.'en/');
die();

?>