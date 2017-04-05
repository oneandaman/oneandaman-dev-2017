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

/* ตัวอย่าง connect limit
if ($function_name == 'get_new_document')
{
    $query = "SELECT SQL_CALC_FOUND_ROWS DATE_FORMAT(a.doc_date,'%d/%m/%Y') AS doc_date, a.doc_no, b.location_name " .
            "FROM PosDb.crg_run_no AS a LEFT JOIN PosDb.crg_location AS b ON a.location_id = b.location_id " .
            "WHERE DATE_FORMAT(NOW(),'%Y-%m-%d') = DATE_FORMAT(a.doc_date,'%Y-%m-%d') ORDER BY a.doc_no DESC LIMIT ?,? ";

    $connect = $a;
    include 'connect_limit.php';

    // bind result variables
    $result->bind_result($doc_date, $doc_no, $location_name);
    // fetch values 
    while ($result->fetch())
    {

        $data_detail[] = array
            (
            'doc_date' => $doc_date,
            'doc_no' => $doc_no,
            'location_name' => $location_name
        );
    }
    include 'close_limit.php';
}

*/


