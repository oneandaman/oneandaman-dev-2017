<?php

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
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_set_charset($connect, "utf8");
$result = $connect->prepare($query);
$result->bind_param('ii', $start, $pagesize);
$result->execute();
