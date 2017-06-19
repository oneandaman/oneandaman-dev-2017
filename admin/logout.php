<?php
session_start();

/*unset($_SESSION["backend_user_id"]);
unset($_SESSION["backend_user_name"]);
unset($_SESSION["backend_user_group"]);
unset($_SESSION["backend_user_time"]);*/ 


session_destroy();
?>
<meta http-equiv='refresh' content='0;URL=login.php'>
