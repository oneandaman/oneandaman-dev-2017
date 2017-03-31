<?php

$result = $connect->prepare("SELECT FOUND_ROWS()");
$result->execute();
$result->bind_result($total_rows);
$result->fetch();
$data[] = array(
    'TotalRows' => $total_rows,
    'Rows' => $data_detail
);
if ($total_rows > 0)
{
    echo json_encode($data);
}
else
{
    echo '[{}]';
}
$result->close();
$connect->close();
