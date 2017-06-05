<?php
/*
// Insert some values
$query = "INSERT INTO transc (name,last,age9) VALUES ('Peter7','Griffin',35)";
include 'tran_query.php';
$query = "INSERT INTO transc (name,last,age10) VALUES ('Glenn7','Quagmire',33)";
include 'tran_query.php';
*/

if (empty($errors))
{   // It ran ok.
    // Commit transaction
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
    // if error, roll back transaction
    mysqli_rollback($connect);

    $arrlength = count($errors);
    for ($x = 0; $x < $arrlength; $x++)
    {
        echo($errors[$x] . "<br>");
    }
    unset($errors);
}

// Close connection
mysqli_close($connect);
