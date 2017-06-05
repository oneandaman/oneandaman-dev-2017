<?php

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
