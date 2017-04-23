<?php

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_set_charset($connect, "utf8");
$result = mysqli_query($connect, $query);
$data = array();
$i = 0;
while ($row = mysqli_fetch_assoc($result))
{
    $i++;
    $data[] = $row;
}
if ($i > 0)
{
    echo json_encode($data);
}
else
{
    echo '[{}]';
}
mysqli_free_result($result);
mysqli_close($connect);
