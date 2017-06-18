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
            Travel Route
            <small>Form</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="travel_route.php">Travel Route</a></li>
            <li class="active">Travel Route Form</li>
        </ol>
        <?php
        include_once 'topic.php';
        ?>
        <div class="row">
            <div class="col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-sm-5">
                <div class="col-sm-5 text-right">Route Id (5 ตัวอักษร)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="travel_route_id_th" /></div> 
            </div>
            <div class="col-sm-2"> </div>
            <div class="col-sm-5">
                <div class="col-sm-5 text-right">Route Id (5 Chars)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="travel_route_id_eng" /></div> 
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5">
                <div class="col-sm-5 text-right">Route Code (3 ตัวอักษร)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="travel_route_code_th" /></div> 
            </div>
            <div class="col-sm-2"> </div>
            <div class="col-sm-5">
                <div class="col-sm-5 text-right">Route Code (3 Chars)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="travel_route_code_eng" /></div> 
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5">
                <div class="col-sm-5 text-right">ชื่อ Route</div> 
                <div class="col-sm-7 text-left"><input type="text" id="travel_route_name_th" /></div> 
            </div>
            <div class="col-sm-2"> </div>
            <div class="col-sm-5">
                <div class="col-sm-5 text-right">Route Name</div> 
                <div class="col-sm-7 text-left"><input type="text" id="travel_route_name_eng" /></div> 
            </div>
        </div>

        <?php
        include_once 'script.php';
        ?>
        <script type="text/javascript">
            $(document).ready(function ()
            {
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                // ใส่ javascript ตรงนี้
                var theme = 'energyblue';

                $("#travel_route_id_th").jqxInput({placeHolder: "Route Id", height: 25, width: '98%', minLength: 1});
                $("#travel_route_id_eng").jqxInput({placeHolder: "Route Id", height: 25, width: '98%', minLength: 1});

                $("#travel_route_code_th").jqxInput({placeHolder: "Route Code", height: 25, width: '98%', minLength: 1});
                $("#travel_route_code_eng").jqxInput({placeHolder: "Route Code", height: 25, width: '98%', minLength: 1});

                $("#travel_route_name_th").jqxInput({placeHolder: "ชื่อ Route", height: 25, width: '98%', minLength: 1});
                $("#travel_route_name_eng").jqxInput({placeHolder: "Route Name", height: 25, width: '98%', minLength: 1});


                // จบใส่ javascript
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            });
        </script>

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