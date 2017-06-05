<?php

// get data and store in a json array
$pagenum = '';
$pagesize = '';

if (isset($_POST['pagenum']))
{
    $pagenum = $_POST['pagenum'];
}
if (isset($_POST['pagesize']))
{
    $pagesize = $_POST['pagesize'];
}
$start = $pagenum * $pagesize;

/* check connection */
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// Change character set to utf8
mysqli_set_charset($connect, "utf8");

$result = $connect->prepare($query);
$result->bind_param('ii', $start, $pagesize);
$result->execute();
