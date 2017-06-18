<?php
session_start();

if (isset($_SESSION['backend_user_id']))
{
    $now = time();
    if ($now > $_SESSION['backend_user_time'])
    {
        session_destroy();
        ?>
        <meta http-equiv='refresh' content='0;URL=login.php'>
        <?php
    }
    else
    {

        include_once 'header.php';
        ?>
        <h1>
            Province
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Region</a></li>
            <li class="active">Province</li>
        </ol>
        <?php
        include_once 'topic.php';
        ?>
        content
        <?php
        include_once 'script.php';
        ?>
        <?php
        include_once 'footer.php';
    }//End Check Time Out
}//End Check Session
else
{
    ?>
    <meta http-equiv='refresh' content='0;URL=login.php'>
    <?php
}

