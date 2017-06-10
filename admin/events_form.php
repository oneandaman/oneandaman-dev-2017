<?php
include_once 'header.php';
?>
<h3>
    Create Form
</h3>
<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="events.php">Events</a></li>
    <li class="active">Create Form</li>
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
                <div class="col-sm-3 text-left">ชื่อกิจกรรม</div>
                <div class="col-sm-6 text-left"><input type="text" id="event_name_th" /></div>
                <div class="col-sm-3 text-left">*</div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">รายละเอียดกิจกรรม</div>
                <div class="col-sm-6 text-left"><textarea id="event_detail_th"></textarea></div>
                <div class="col-sm-3 text-left"></div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อ้างอิงเนื่อหา (สั้น)</div> 
                <div class="col-sm-6 text-left"><input type="text" id="event_info_link_short_th"></div>
                <div class="col-sm-3 text-left">Link ที่มาสั้นๆสำหรับแสดงผลหน้าเว็บไซต์ (หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น)</div>
            </div>

        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อ้างอิงเนื่อหา (ยาว)</div> 
                <div class="col-sm-6 text-left"><input type="text" id="event_info_link_long_th"></div>
                <div class="col-sm-3 text-left">Link เต็ม สำหรับไปยังหน้าเว็บไซต์นั้นๆ (หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น)</div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">สถานที่จัดงาน</div>
                <div class="col-sm-6 text-left"><input type="text" id="event_venue_th"></div>
                <div class="col-sm-3 text-left">*</div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">จังหวัด</div>
                <div class="col-sm-6 text-left"><div id='event_venue_province_id_th'></div></div>
                <div class="col-sm-3 text-left">*</div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อำเภอ</div>
                <div class="col-sm-6 text-left"><div id='event_venue_district_id_th'></div></div>
                <div class="col-sm-3 text-left">*</div>
            </div>

        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ละติจูด</div>
                <div class="col-sm-6 text-left"><input type="text" id="event_geo_x_th" /></div>
                <div class="col-sm-3 text-left"></div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ลองติจูด</div>
                <div class="col-sm-6 text-left"><input type="text" id="event_geo_y_th" /></div>
                <div class="col-sm-3 text-left"></div>
            </div>

        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">วันที่เริ่มกิจกรรม</div>
                <div class="col-sm-6 text-left"><div id="event_start_date_th"></div></div>
                <div class="col-sm-3 text-left">*</div>
            </div>

        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">วันที่สิ้นสุดกิจกรรม</div>
                <div class="col-sm-6 text-left"><div id="event_end_date_th"></div></div>
                <div class="col-sm-3 text-left">*</div>
            </div>

        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อัพโหลดรูปภาพ</div>
                <div class="col-sm-6 text-left"><div id="event_file_saved_name_th"></div></div>
                <div class="col-sm-3 text-left"></div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ชื่อรูปภาพ</div>
                <div class="col-sm-6 text-left"><input type="text" id="event_pic_alt_th"></div>
                <div class="col-sm-3 text-left"></div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">คำอธิบายรูปภาพ</div>
                <div class="col-sm-6 text-left"><textarea id="event_pic_detail_th"></textarea></div>
                <div class="col-sm-3 text-left"></div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left"></div> 
                <div class="col-sm-6 text-left"><button id="btn_save_th">บันทึก</button></div> 
                <div class="col-sm-3 text-left"></div>
            </div>

        </div>
    </div>
    <div><!-- English Tab -->
        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ชื่อกิจกรรม</div>
                <div class="col-sm-6 text-left"><input type="text" id="event_name_eng" /></div>
                <div class="col-sm-3 text-left">*</div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">รายละเอียดกิจกรรม</div>
                <div class="col-sm-6 text-left"><textarea id="event_detail_eng"></textarea></div>
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อ้างอิงเนื่อหา (สั้น)</div> 
                <div class="col-sm-6 text-left"><input type="text" id="event_info_link_short_eng"></div>
                <div class="col-sm-3 text-left">Link ที่มาสั้นๆสำหรับแสดงผลหน้าเว็บไซต์ (หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น)</div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อ้างอิงเนื่อหา (ยาว)</div> 
                <div class="col-sm-6 text-left"><input type="text" id="event_info_link_long_eng"></div>
                <div class="col-sm-3 text-left">Link เต็ม สำหรับไปยังหน้าเว็บไซต์นั้นๆ (หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น)</div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">สถานที่จัดงาน</div>
                <div class="col-sm-6 text-left"><input type="text" id="event_venue_eng"></div>
                <div class="col-sm-3 text-left">*</div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">จังหวัด</div>
                <div class="col-sm-6 text-left"><div id='event_venue_province_id_eng'></div></div>
                <div class="col-sm-3 text-left">*</div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อำเภอ</div>
                <div class="col-sm-6 text-left"><div id='event_venue_district_id_eng'></div></div>
                <div class="col-sm-3 text-left">*</div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ละติจูด</div>
                <div class="col-sm-6 text-left"><input type="text" id="event_geo_x_eng" /></div>
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ลองติจูด</div>
                <div class="col-sm-6 text-left"><input type="text" id="event_geo_y_eng" /></div>
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">วันที่เริ่มกิจกรรม</div>
                <div class="col-sm-6 text-left"><div id="event_start_date_eng"></div></div>
                <div class="col-sm-3 text-left">*</div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">วันที่สิ้นสุดกิจกรรม</div>
                <div class="col-sm-6 text-left"><div id="event_end_date_eng"></div> </div>
                <div class="col-sm-3 text-left">*</div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อัพโหลดรูปภาพ</div>
                <div class="col-sm-6 text-left"><div id="event_file_saved_name_eng"></div></div>
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ชื่อรูปภาพ</div>
                <div class="col-sm-6 text-left"><input type="text" id="event_pic_alt_eng"></div>
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">คำอธิบายรูปภาพ</div>
                <div class="col-sm-6 text-left"><textarea id="event_pic_detail_eng"></textarea></div>
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left"></div> 
                <div class="col-sm-6 text-left"><button id="btn_save_en">Save</button></div> 
                <div class="col-sm-3 text-left"></div>
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
        var url = "database/query.php";
        var theme = 'energyblue';

        $("#event_start_date_th").jqxDateTimeInput({width: '100%', height: '30px', buttonSize: 30, theme: theme, formatString: "dd/MM/yyyy"});
        $("#event_start_date_th").val(new Date());
        $("#event_start_date_eng").jqxDateTimeInput({width: '100%', height: '30px', buttonSize: 30, theme: theme, formatString: "dd/MM/yyyy"});
        $("#event_start_date_eng").val(new Date());
        $("#event_end_date_th").jqxDateTimeInput({width: '100%', height: '30px', buttonSize: 30, theme: theme, formatString: "dd/MM/yyyy"});
        $("#event_end_date_th").val(new Date());
        $("#event_end_date_eng").jqxDateTimeInput({width: '100%', height: '30px', buttonSize: 30, theme: theme, formatString: "dd/MM/yyyy"});
        $("#event_end_date_eng").val(new Date());
        $("#event_name_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#event_name_eng").jqxInput({height: 25, width: '98%', minLength: 1});
        $('#event_detail_th').jqxTextArea({height: 90, width: '100%', minLength: 1, maxLength: 80});
        $('#event_detail_eng').jqxTextArea({height: 90, width: '100%', minLength: 1, maxLength: 80});
        $("#event_info_link_short_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#event_info_link_short_eng").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#event_info_link_long_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#event_info_link_long_eng").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#event_venue_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#event_venue_eng").jqxInput({height: 25, width: '98%', minLength: 1});


        var source_province_th =
                {
                    datatype: "json",
                    datafields: [
                        {name: 'province_id'},
                        {name: 'province_name'}
                    ],
                    url: url,
                    async: false,
                    type: 'POST',
                    data:
                            {
                                fc: 'get_province',
                                lag: 'th'
                            }
                };
        var province_source_th = new $.jqx.dataAdapter(source_province_th);

        $("#event_venue_province_id_th").jqxDropDownList({source: province_source_th, selectedIndex: 0,
            itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true,
            theme: theme, displayMember: 'province_name', valueMember: 'province_id'});

        var source_province_en =
                {
                    datatype: "json",
                    datafields: [
                        {name: 'province_id'},
                        {name: 'province_name'}
                    ],
                    url: url,
                    async: false,
                    type: 'POST',
                    data:
                            {
                                fc: 'get_province',
                                lag: 'en'
                            }
                };
        var province_source_en = new $.jqx.dataAdapter(source_province_en);

        $("#event_venue_province_id_eng").jqxDropDownList({source: province_source_en, selectedIndex: 0,
            itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true,
            theme: theme, displayMember: 'province_name', valueMember: 'province_id'});

        var source_district_th =
                {
                    datatype: "json",
                    datafields: [
                        {name: 'district_id'},
                        {name: 'district_name'}
                    ],
                    url: url,
                    async: false,
                    type: 'POST',
                    data:
                            {
                                fc: 'get_district',
                                lag: 'th',
                                province_id: $("#event_venue_province_id_th").val()
                            }
                };
        var district_source_th = new $.jqx.dataAdapter(source_district_th);

        $("#event_venue_district_id_th").jqxDropDownList({source: district_source_th, selectedIndex: 0,
            itemHeight: 30, width: '100%', height: '30', dropDownHeight: 200,
            theme: theme, displayMember: 'district_name', valueMember: 'district_id'});

        var source_district_en =
                {
                    datatype: "json",
                    datafields: [
                        {name: 'district_id'},
                        {name: 'district_name'}
                    ],
                    url: url,
                    async: false,
                    type: 'POST',
                    data:
                            {
                                fc: 'get_district',
                                lag: 'en',
                                province_id: $("#event_venue_province_id_eng").val()
                            }
                };
        var district_source_en = new $.jqx.dataAdapter(source_district_en);

        $("#event_venue_district_id_eng").jqxDropDownList({source: district_source_en, selectedIndex: 0,
            itemHeight: 30, width: '100%', height: '30', dropDownHeight: 200,
            theme: theme, displayMember: 'district_name', valueMember: 'district_id'});



        $("#event_geo_x_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#event_geo_y_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#event_geo_x_eng").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#event_geo_y_eng").jqxInput({height: 25, width: '98%', minLength: 1});
        // Table : event_pic
        $('#event_file_saved_name_th').jqxFileUpload({width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload'});
        $('#event_file_saved_name_eng').jqxFileUpload({width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload'});
        $("#event_pic_alt_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#event_pic_alt_eng").jqxInput({height: 25, width: '98%', minLength: 1});
        $('#event_pic_detail_th').jqxTextArea({height: 150, width: '100%', minLength: 1});
        $('#event_pic_detail_eng').jqxTextArea({height: 150, width: '100%', minLength: 1});
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




        $('#event_venue_province_id_th').on('change', function (event)
        {
            var source_district_th =
                    {
                        datatype: "json",
                        datafields: [
                            {name: 'district_id'},
                            {name: 'district_name'}
                        ],
                        url: url,
                        async: false,
                        type: 'POST',
                        data:
                                {
                                    fc: 'get_district',
                                    lag: 'th',
                                    province_id: $("#event_venue_province_id_th").val()
                                }
                    };
            var district_source_th = new $.jqx.dataAdapter(source_district_th);

            $("#event_venue_district_id_th").jqxDropDownList({source: district_source_th});
        });



        $('#event_venue_province_id_eng').on('change', function (event)
        {
            var source_district_en =
                    {
                        datatype: "json",
                        datafields: [
                            {name: 'district_id'},
                            {name: 'district_name'}
                        ],
                        url: url,
                        async: false,
                        type: 'POST',
                        data:
                                {
                                    fc: 'get_district',
                                    lag: 'en',
                                    province_id: $("#event_venue_province_id_eng").val()
                                }
                    };
            var district_source_en = new $.jqx.dataAdapter(source_district_en);

            $("#event_venue_district_id_eng").jqxDropDownList({source: district_source_en});
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
                                    fc: 'save_event',
                                    lag: 'th',
                                    event_venue_district_id: $('#event_venue_district_id_th').val(),
                                    event_venue_province_id: $('#event_venue_province_id_th').val(),
                                    event_name: $('#event_name_th').val(),
                                    event_detail: $('#event_detail_th').val(),
                                    event_info_link_short: $('#event_info_link_short_th').val(),
                                    event_info_link_long: $('#event_info_link_long_th').val(),
                                    event_venue: $('#event_venue_th').val(),
                                    event_geo_x: $('#event_geo_x_th').val(),
                                    event_geo_y: $('#event_geo_y_th').val(),
                                    event_start_date: $('#event_start_date_th').val(),
                                    event_end_date: $('#event_end_date_th').val()
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
                                    fc: 'save_event',
                                    lag: 'en',
                                    event_venue_district_id: $('#event_venue_district_id_en').val(),
                                    event_venue_province_id: $('#event_venue_province_id_en').val(),
                                    event_name: $('#event_name_en').val(),
                                    event_detail: $('#event_detail_en').val(),
                                    event_info_link_short: $('#event_info_link_short_en').val(),
                                    event_info_link_long: $('#event_info_link_long_en').val(),
                                    event_venue: $('#event_venue_en').val(),
                                    event_geo_x: $('#event_geo_x_en').val(),
                                    event_geo_y: $('#event_geo_y_en').val(),
                                    event_start_date: $('#event_start_date_en').val(),
                                    event_end_date: $('#event_end_date_en').val()
                                }
                    })
                    .done(function (msg)
                    {
                        //alert(msg);
                    });
        }
        window.open("events.php", "_self");
    }
</script>
<?php
include_once 'footer.php';
