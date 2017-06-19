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
            Restaurants
            <small>Menu</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="restaurant.php">Restaurants</a></li>
            <li class="active">Restaurants Menu</li>
        </ol>
        <?php
        include_once 'topic.php';
        ?>
        <div class="row">
            <div class="col-sm-12"></div>
        </div>


        <div class="row">
            <div class="col-sm-5">
                <div class="col-sm-5 text-right">ชื่อเมนูแนะนำ</div> 
                <div class="col-sm-7 text-left"><input type="text" id="restaurant_manu_name_th" /></div> 
            </div>
            <div class="col-sm-2"> </div>
            <div class="col-sm-5">
                <div class="col-sm-5 text-right">Menu Name</div> 
                <div class="col-sm-7 text-left"><input type="text" id="restaurant_manu_name_eng" /></div> 
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5">
                <div class="col-sm-5 text-right">อัพโหลดรูปภาพ</div> 
                <div class="col-sm-7 text-left"><div id="restaurant_file_saved_name_th"></div></div> 
            </div>
            <div class="col-sm-2"> </div> 
            <div class="col-sm-5">
                <div class="col-sm-5 text-right">Upload Picture</div> 
                <div class="col-sm-7 text-left"><div id="restaurant_file_saved_name_eng"></div></div> 
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5">
                <div class="col-sm-5 text-right">ชื่อรูปภาพ (ALt)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="restaurant_pic_alt_th"></div> 
            </div>
            <div class="col-sm-2"> </div> 
            <div class="col-sm-5">
                <div class="col-sm-5 text-right">Picture Name (ALt)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="restaurant_pic_alt_eng"></div> 
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5">
                <div class="col-sm-5 text-right">คำอธิบายรูปภาพ</div> 
                <div class="col-sm-7 text-left"><textarea id="restaurant_pic_detail_th"></textarea></div> 
            </div>
            <div class="col-sm-2"> </div> 
            <div class="col-sm-5">
                <div class="col-sm-5 text-right">Picture Detail</div> 
                <div class="col-sm-7 text-left"><textarea id="restaurant_pic_detail_eng"></textarea></div> 
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


                $("#restaurant_manu_name_th").jqxInput({placeHolder: "ชื่อเมนูแนะนำ", height: 25, width: '98%', minLength: 1, theme: theme});
                $("#restaurant_manu_name_eng").jqxInput({placeHolder: "Menu Name", height: 25, width: '98%', minLength: 1, theme: theme});

                // Table : restaurant_menu_pic
                $('#restaurant_file_saved_name_th').jqxFileUpload({width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload', theme: theme});
                $('#restaurant_file_saved_name_eng').jqxFileUpload({width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload', theme: theme});

                $("#restaurant_pic_alt_th").jqxInput({placeHolder: "ชื่อรูปภาพ สำหรับใส่ใน Tag(ALt)", height: 25, width: '98%', minLength: 1, theme: theme});
                $("#restaurant_pic_alt_eng").jqxInput({placeHolder: "Picture Name (ALt)", height: 25, width: '98%', minLength: 1, theme: theme});

                $('#restaurant_pic_detail_th').jqxTextArea({placeHolder: 'คำอธิบายรูปภาพ', height: 150, width: '100%', minLength: 1, theme: theme});
                $('#restaurant_pic_detail_eng').jqxTextArea({placeHolder: 'Picture Detail', height: 150, width: '100%', minLength: 1, theme: theme});

                $("#btn_create").on('click', function ()
                {
                    window.open("restaurant_menu_form.php", "_self");
                });
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