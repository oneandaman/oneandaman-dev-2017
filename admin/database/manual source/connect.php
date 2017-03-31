<?php

/* check connection */
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// Change character set to utf8
mysqli_set_charset($connect, "utf8");

/* ตัวอย่าง query
  $query = "SELECT id, card_id, money, date_regist FROM card_regist";
  $result = mysqli_query($connect, $query);
 */

// ผลลัพธ์แบบต่างๆ
/*แบบ 1 row
if (!$result)
{
    echo 'MySQL Error: ' . mysqli_error();
    echo '<br>' . $query;
    exit;
}
else
{
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo $row['card_id'];
}
*/

/* แบบหลาย row 
if (!$result)
{
    echo 'MySQL Error: ' . mysqli_error();
    echo '<br>' . $query;
    exit;
}
else
{
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        // assoc
        echo $row['card_id'];
    }
}
*/

/* แบบ json 
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
 */

// หรือใช้แต่ในส่วน else ก็ได้  ถ้ามี error ให้  echo $query ดู

/******************อยู่ใน close.php*********************/
/* ปิดการเชื่อมต่อ
//free result set
mysqli_free_result($result);
//close connection
mysqli_close($connect);
*/
