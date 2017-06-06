<?php
include_once 'header.php';
?>
<h1>
    Events
    <small>Form</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="events.php">Events</a></li>
    <li class="active">Events Form</li>
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
                <div class="col-sm-3 text-left">กิจกรรม</div>
                <div class="col-sm-7 text-left"><input type="text" id="event_name_th" /></div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">รายละเอียดกิจกรรม</div>
                <div class="col-sm-7 text-left"><textarea id="event_detail_th"></textarea></div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Link ที่แสดงหน้าเว็บ (ใช้ | คั่น)</div>
                <div class="col-sm-7 text-left"><input type="text" id="event_info_link_short_th"></div>
            </div>

        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Link (ใช้ | เป็นตัวคั่น)</div>
                <div class="col-sm-7 text-left"><input type="text" id="event_info_link_long_th"></div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">สถานที่จัด event</div>
                <div class="col-sm-7 text-left"><input type="text" id="event_venue_th"></div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">จังหวัด</div>
                <div class="col-sm-7 text-left"><div id='event_venue_province_id_th'></div></div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อำเภอ</div>
                <div class="col-sm-7 text-left"><div id='event_venue_district_id_th'></div></div>
            </div>

        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ละติจูด</div>
                <div class="col-sm-7 text-left"><input type="text" id="event_geo_x_th" /></div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ลองติจูด</div>
                <div class="col-sm-7 text-left"><input type="text" id="event_geo_y_th" /></div>
            </div>

        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">วันที่เริ่มกิจกรรม</div>
                <div class="col-sm-7 text-left"><div id="event_start_date_th"></div></div>
            </div>

        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">วันที่สิ้นสุดกิจกรรม</div>
                <div class="col-sm-7 text-left"><div id="event_end_date_th"></div></div>
            </div>

        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อัพโหลดรูปภาพ</div>
                <div class="col-sm-7 text-left"><div id="event_file_saved_name_th"></div></div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ชื่อรูปภาพ (Alt)</div>
                <div class="col-sm-7 text-left"><input type="text" id="event_pic_alt_th"></div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">คำอธิบายรูปภาพ</div>
                <div class="col-sm-7 text-left"><textarea id="event_pic_detail_th"></textarea></div>
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
                <div class="col-sm-3 text-left">Event</div>
                <div class="col-sm-7 text-left"><input type="text" id="event_name_eng" /></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Event Details</div>
                <div class="col-sm-7 text-left"><textarea id="event_detail_eng"></textarea></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Link ที่แสดงหน้าเว็บ</div>
                <div class="col-sm-7 text-left"><input type="text" id="event_info_link_short_eng"></div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Link</div>
                <div class="col-sm-7 text-left"><input type="text" id="event_info_link_long_eng"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Event Venue</div>
                <div class="col-sm-7 text-left"><input type="text" id="event_venue_eng"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Province</div>
                <div class="col-sm-7 text-left"><div id='event_venue_province_id_eng'></div></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">District</div>
                <div class="col-sm-7 text-left"><div id='event_venue_district_id_eng'></div></div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Latitude</div>
                <div class="col-sm-7 text-left"><input type="text" id="event_geo_x_eng" /></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Longtitude</div>
                <div class="col-sm-7 text-left"><input type="text" id="event_geo_y_eng" /></div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Event Start Date</div>
                <div class="col-sm-7 text-left"><div id="event_start_date_eng"></div></div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Event End Date</div>
                <div class="col-sm-7 text-left"><div id="event_end_date_eng"></div> </div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Upload Picture</div>
                <div class="col-sm-7 text-left"><div id="event_file_saved_name_eng"></div></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Picture Name (ALt)</div>
                <div class="col-sm-7 text-left"><input type="text" id="event_pic_alt_eng"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Picture Detail</div>
                <div class="col-sm-7 text-left"><textarea id="event_pic_detail_eng"></textarea></div>
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
        $("#event_start_date_th").jqxDateTimeInput({width: '100%', height: '30px', buttonSize: 30, theme: theme, formatString: "dd/MM/yyyy"});
        $("#event_start_date_th").val(new Date());
        $("#event_start_date_eng").jqxDateTimeInput({width: '100%', height: '30px', buttonSize: 30, theme: theme, formatString: "dd/MM/yyyy"});
        $("#event_start_date_eng").val(new Date());
        $("#event_end_date_th").jqxDateTimeInput({width: '100%', height: '30px', buttonSize: 30, theme: theme, formatString: "dd/MM/yyyy"});
        $("#event_end_date_th").val(new Date());
        $("#event_end_date_eng").jqxDateTimeInput({width: '100%', height: '30px', buttonSize: 30, theme: theme, formatString: "dd/MM/yyyy"});
        $("#event_end_date_eng").val(new Date());
        $("#event_name_th").jqxInput({placeHolder: "กิจกรรม", height: 25, width: '98%', minLength: 1});
        $("#event_name_eng").jqxInput({placeHolder: "Event", height: 25, width: '98%', minLength: 1});
        $('#event_detail_th').jqxTextArea({placeHolder: 'รายละเอียดกิจกรรม', height: 90, width: '100%', minLength: 1, maxLength: 80});
        $('#event_detail_eng').jqxTextArea({placeHolder: 'Event Details', height: 90, width: '100%', minLength: 1, maxLength: 80});
        $("#event_info_link_short_th").jqxInput({placeHolder: "Link สำหรับแสดงผลหน้าเว็บ", height: 25, width: '98%', minLength: 1});
        $("#event_info_link_short_eng").jqxInput({placeHolder: "Link สำหรับแสดงผลหน้าเว็บ", height: 25, width: '98%', minLength: 1});
        $("#event_info_link_long_th").jqxInput({placeHolder: "Link", height: 25, width: '98%', minLength: 1});
        $("#event_info_link_long_eng").jqxInput({placeHolder: "Link", height: 25, width: '98%', minLength: 1});
        $("#event_venue_th").jqxInput({placeHolder: "สถานที่จัด event", height: 25, width: '98%', minLength: 1});
        $("#event_venue_eng").jqxInput({placeHolder: "Event Venue", height: 25, width: '98%', minLength: 1});
        var event_venue_province_id_th_source = [
            "-",
            "พงงา",
            "ภูเก็ต"
        ];
        $("#event_venue_province_id_th").jqxDropDownList({source: event_venue_province_id_th_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});
        var event_venue_province_id_eng_source = [
            "-",
            "Phang Nga",
            "Phuket"
        ];
        $("#event_venue_province_id_eng").jqxDropDownList({source: event_venue_province_id_eng_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});
        var event_venue_district_id_th_source = [
            "-",
            "กะทู้",
            "ฉลอง"
        ];
        $("#event_venue_district_id_th").jqxDropDownList({source: event_venue_district_id_th_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});
        var event_venue_district_id_eng_source = [
            "-",
            "Kathu",
            "Chalong"
        ];
        $("#event_venue_district_id_eng").jqxDropDownList({source: event_venue_district_id_eng_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});
        $("#event_geo_x_th").jqxInput({placeHolder: "ละติจูด", height: 25, width: '98%', minLength: 1});
        $("#event_geo_y_th").jqxInput({placeHolder: "ลองติจูด", height: 25, width: '98%', minLength: 1});
        $("#event_geo_x_eng").jqxInput({placeHolder: "Enter a Latitude", height: 25, width: '98%', minLength: 1});
        $("#event_geo_y_eng").jqxInput({placeHolder: "Enter a Longtitude", height: 25, width: '98%', minLength: 1});
        // Table : event_pic
        $('#event_file_saved_name_th').jqxFileUpload({width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload'});
        $('#event_file_saved_name_eng').jqxFileUpload({width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload'});
        $("#event_pic_alt_th").jqxInput({placeHolder: "ชื่อรูปภาพ สำหรับใส่ใน Tag(ALt)", height: 25, width: '98%', minLength: 1});
        $("#event_pic_alt_eng").jqxInput({placeHolder: "Picture Name (ALt)", height: 25, width: '98%', minLength: 1});
        $('#event_pic_detail_th').jqxTextArea({placeHolder: 'คำอธิบายรูปภาพ', height: 150, width: '100%', minLength: 1});
        $('#event_pic_detail_eng').jqxTextArea({placeHolder: 'Picture Detail', height: 150, width: '100%', minLength: 1});
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
