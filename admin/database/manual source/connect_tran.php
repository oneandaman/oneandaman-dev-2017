<?php

/* check connection */
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// Change character set to utf8
mysqli_set_charset($connect, "utf8");

// Set autocommit to off
// แบบเก่า
mysqli_autocommit($connect, FALSE);

/* //แบบใหม่ ต้องใช้ v.5.6+
  mysqli_begin_transaction($connect, MYSQLI_TRANS_START_READ_ONLY);
  mysqli_begin_transaction($connect, MYSQLI_TRANS_START_READ_WRITE);
 */