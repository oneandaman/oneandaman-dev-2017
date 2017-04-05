<?php

$result = mysqli_query($connect, $query);
if ($result !== TRUE)
{
    $errors[] = 'Error in query : ' . $query;
}