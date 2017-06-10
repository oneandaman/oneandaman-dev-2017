<?php

/* check connection */
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// Change character set to utf8
mysqli_set_charset($connect, "utf8");
$result = mysqli_query($connect, $query);
if (!$result)
{
    echo 'MySQL Error: ' . mysqli_error();
    echo '<br>' . $query;
    exit;
}
else
{
    //create an array
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
}
//free result set
mysqli_free_result($result);
//close connection
mysqli_close($connect);
