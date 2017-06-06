<?php

if (empty($errors))
{
    try
    {
        if (!mysqli_commit($connect))
        {
            mysqli_rollback($connect);
            print("Transaction commit failed\n");
        }
        else
        {
            echo("Successful<br>");
        }
    }
    catch (Exception $ex)
    {
        mysqli_rollback($connect);
        print("Transaction commit failed\n");
    }
}
else
{
    mysqli_rollback($connect);
    $arrlength = count($errors);
    for ($x = 0; $x < $arrlength; $x++)
    {
        echo($errors[$x] . "<br>");
    }
    unset($errors);
}
mysqli_close($connect);
