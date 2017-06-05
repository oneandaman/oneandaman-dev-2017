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
                    <div class="col-sm-5 text-right">รหัสอำเภอ (4 ตัวอักษร)</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="district_id_th" /></div> 
                </div>
                <div class="col-sm-2"> </div>
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">District Id (4 Chars)</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="district_id_eng" /></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">ชื่ออำเภอ</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="district_name_th" /></div> 
                </div>
                <div class="col-sm-2"> </div>
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">District Name</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="district_name_eng" /></div> 
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">จังหวัด</div> 
                    <div class="col-sm-7 text-left"><div id='province_id_th'></div></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Province</div> 
                    <div class="col-sm-7 text-left"><div id='province_id_eng'></div></div> 
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
               
                $("#district_id_th").jqxInput({placeHolder: "รหัสอำเภอ (4 ตัวอักษร)", height: 25, width: '98%', minLength: 1});
                $("#district_id_eng").jqxInput({placeHolder: "District Id (4 Chars)", height: 25, width: '98%', minLength: 1});

                $("#district_name_th").jqxInput({placeHolder: "ชื่ออำเภอ", height: 25, width: '98%', minLength: 1});
                $("#district_name_eng").jqxInput({placeHolder: "District Name", height: 25, width: '98%', minLength: 1});
                
                var province_id_th_source = [
                    "-",
                    "พงงา",
                    "ภูเก็ต"
                ];
                $("#province_id_th").jqxDropDownList({source: province_id_th_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});

                var province_id_eng_source = [
                    "-",
                    "Phang Nga",
                    "Phuket"
                ];
                $("#province_id_eng").jqxDropDownList({source: province_id_eng_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});

                // จบใส่ javascript
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            });
        </script>

<?php
include_once 'footer.php';