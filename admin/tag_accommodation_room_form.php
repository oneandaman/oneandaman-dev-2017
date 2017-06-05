<?php
include_once 'header.php';
?>
<h1>
    Accommodation Room Tag
    <small>Form</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="tag_accommodation_room.php">Accommodation Room Tag</a></li>
    <li class="active">Accommodation Room Tag Form</li>
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
                <div class="col-sm-3 text-left">ประเภทห้องพัก</div>
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_room_tag_th" /></div>
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
                <div class="col-sm-3 text-left">Accommodation Room Type</div>
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_room_tag_eng" /></div>
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
   
        $("#accommodation_room_tag_th").jqxInput({placeHolder: "ประเภทห้องพัก", height: 25, width: '98%', minLength: 1});
        $("#accommodation_room_tag_eng").jqxInput({placeHolder: "Accommodation Room Type", height: 25, width: '98%', minLength: 1});
        
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
                                    fc: 'save_accommodation_room_tag',
                                    lag: 'th',
                                    accommodation_room_tag: $('#accommodation_room_tag_th').val()
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
                                    fc: 'save_accommodation_room_tag',
                                    lag: 'en',
                                    accommodation_room_tag: $('#accommodation_room_tag_eng').val()
                                }
                    })
                    .done(function (msg)
                    {
                        //alert(msg);
                    });
        }
        
        window.open("tag_accommodation_room.php", "_self"); 
    }
</script>
<?php
include_once 'footer.php';
