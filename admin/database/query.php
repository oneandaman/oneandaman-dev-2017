<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once 'config.php';
$function_name = '';
if (isset($_GET['fc']))
{
    $function_name = $_GET['fc'];
}
else
{
    if (isset($_POST['fc']))
    {
        $function_name = $_POST['fc'];
    }
}
if ($function_name == 'get_carddata')
{
    $connect = $a;
    include 'connect.php';
}
