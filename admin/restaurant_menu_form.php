<?php
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
<div id='jqxTabs'>
    <ul>
        <li style="margin-left: 30px;">ภาษาไทย</li>
        <li>English</li>

    </ul>
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ชื่อเมนูแนะนำ</div> 
                <div class="col-sm-7 text-left"><input type="text" id="restaurant_manu_name_th" /></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อัพโหลดรูปภาพ</div> 
                <div class="col-sm-7 text-left"><div id="restaurant_file_saved_name_th"></div></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ชื่อรูปภาพ (ALt)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="restaurant_pic_alt_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">คำอธิบายรูปภาพ</div> 
                <div class="col-sm-7 text-left"><textarea id="restaurant_pic_detail_th"></textarea></div> 
            </div>

        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left"></div> 
                <div class="col-sm-7 text-left"><button id="btn_save_th">บันทึก</button></div> 
            </div>

        </div>

    </div>

    <div>
        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Menu Name</div> 
                <div class="col-sm-7 text-left"><input type="text" id="restaurant_manu_name_eng" /></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Upload Picture</div> 
                <div class="col-sm-7 text-left"><div id="restaurant_file_saved_name_eng"></div></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Picture Name (ALt)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="restaurant_pic_alt_eng"></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Picture Detail</div> 
                <div class="col-sm-7 text-left"><textarea id="restaurant_pic_detail_eng"></textarea></div> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left"></div> 
                <div class="col-sm-7 text-left"><button id="btn_save_en">Save</button></div> 
            </div>

        </div>
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

        $('#jqxTabs').jqxTabs({width: '100%', height: '100%', position: 'top', theme: theme});
        $('#jqxTabs').jqxTabs({height: '100%'});
        // จบใส่ javascript
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $('#btn_save_th').jqxButton({width: '100', height: '30', theme: theme});
        $('#btn_save_en').jqxButton({width: '100', height: '30', theme: theme});

        $("#btn_save_th").on('click', function ()
        {
            save_to_db('th');
        });

        $("#btn_save_en").on('click', function ()
        {
            save_to_db('en');
        });
    });


    function save_to_db(lang)
    {
        if (lang === 'th')
        {
            var url = "database/query.php";
            $.ajax(
                    {
                        url: url,
                        method: "POST",
                        async: false,
                        data:
                                {
                                    fc: 'save_restaurant_menu_pic',
                                    lag: 'th',
                                    restaurant_manu_name: $('#restaurant_manu_name_th').val,
                                    restaurant_file_saved_name: $('#restaurant_file_saved_name_th').val,
                                    restaurant_pic_alt: $('#restaurant_pic_alt_th').val,
                                    restaurant_pic_detail: $('#restaurant_pic_detail_th').val
                                }
                    })
                    .done(function (msg)
                    {
                        //alert(msg);
                    });
        } else if (lang === 'en')
        {
            var url = "database/query.php";
            $.ajax(
                    {
                        url: url,
                        method: "POST",
                        async: false,
                        data:
                                {
                                    fc: 'save_restaurant_menu_pic',
                                    lag: 'en',
                                    restaurant_manu_name: $('#restaurant_manu_name_en').val,
                                    restaurant_file_saved_name: $('#restaurant_file_saved_name_en').val,
                                    restaurant_pic_alt: $('#restaurant_pic_alt_en').val,
                                    restaurant_pic_detail: $('#restaurant_pic_detail_en').val
                                }
                    })
                    .done(function (msg)
                    {
                        //alert(msg);
                    });
        }
        
        window.open("restaurant_menu.php", "_self");
    }
</script>

<?php
include_once 'footer.php';
