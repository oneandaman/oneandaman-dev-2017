<?php
include_once 'header.php';
?>
<h1>
    Dashboard
    <small>Control panel</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Dashboard</li>
</ol>
<?php
include_once 'topic.php';
?>
            <div class="row">
                <div class="col-sm-12"></div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">รหัสจังหวัด (2 ตัวอักษร)</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="province_id_th" /></div> 
                </div>
                <div class="col-sm-2"> </div>
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Province Id (2 Chars)</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="province_id_eng" /></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">ชื่อจังหวัด</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="province_name_th" /></div> 
                </div>
                <div class="col-sm-2"> </div>
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Province Name</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="province_name_eng" /></div> 
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
               
                $("#province_id_th").jqxInput({placeHolder: "รหัสจังหวัด (2 ตัวอักษร)", height: 25, width: '98%', minLength: 1});
                $("#province_id_eng").jqxInput({placeHolder: "Province Id (2 Chars)", height: 25, width: '98%', minLength: 1});

                $("#province_name_th").jqxInput({placeHolder: "ชื่อจังหวัด", height: 25, width: '98%', minLength: 1});
                $("#province_name_eng").jqxInput({placeHolder: "Province Name", height: 25, width: '98%', minLength: 1});
                
                
                // จบใส่ javascript
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            });
        </script>
<?php
include_once 'footer.php';
