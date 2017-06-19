<?php

$link = mysqli_connect("localhost", "root", "", "oneandaman_th");
mysqli_set_charset($link, "utf8");


function query_all($sql)
{
    global $link;
    $result=array();

    $query = $link->query($sql);

    while($data = $query->fetch_assoc())
    {
        $result[] =$data;
    }

    return $result;
}

function count_record($table,$where)
{
    global $link;
    $record = "";

    $sql_count = "SELECT * FROM $table WHERE $where";

    if($result = $link->query($sql_count)) {  $record = $result->num_rows;  } // return true;
    else { die("SQL Error: <br>".$sql_count."<br>".$link->error);  } //return false;

    return $record;
}

?>