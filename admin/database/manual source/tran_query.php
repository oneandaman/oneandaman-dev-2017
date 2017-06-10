<?php

$result = mysqli_query($connect, $query);
if ($result !== TRUE)
{
    // if error
    $errors[] = 'Error in query : ' . $query;
}