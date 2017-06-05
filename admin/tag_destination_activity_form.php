<?php
include_once 'header.php';
?>
<h1>
    Destination Activity Tag
    <small>Form</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="tag_destination_activity.php">Destination Activity Tag</a></li>
    <li class="active">Destination Activity Tag Form</li>
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
                <div class="col-sm-3 text-left">ประเภทกิจกรรม</div>
                <div class="col-sm-7 text-left"><input type="text" id="destination_activity_tag_th" /></div>
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
                <div class="col-sm-3 text-left">Destination Activity Type</div>
                <div class="col-sm-7 text-left"><input type="text" id="destination_activity_tag_eng" /></div>
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
   
        $("#destination_activity_tag_th").jqxInput({placeHolder: "ประเภทกิจกรรม", height: 25, width: '98%', minLength: 1});
        $("#destination_activity_tag_eng").jqxInput({placeHolder: "Destination Activity Type", height: 25, width: '98%', minLength: 1});
        
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
                                    fc: 'save_destination_activity_tag',
                                    lag: 'th',
                                    destination_activity_tag: $('#destination_activity_tag_th').val()
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
                                    fc: 'save_destination_activity_tag',
                                    lag: 'en',
                                    destination_activity_tag: $('#destination_activity_tag_eng').val()
                                }
                    })
                    .done(function (msg)
                    {
                        //alert(msg);
                    });
        }
        
        window.open("tag_destination_activity.php", "_self"); 
    }
</script>
<?php
include_once 'footer.php';
