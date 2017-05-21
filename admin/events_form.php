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
<div class="row">
    <div class="col-sm-12"></div>
</div>

<div class="row">
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">กิจกรรม</div> 
        <div class="col-sm-7 text-left"><input type="text" id="event_name_th" /></div> 
    </div>
    <div class="col-sm-2"> </div>
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">Event</div> 
        <div class="col-sm-7 text-left"><input type="text" id="event_name_eng" /></div> 
    </div>
</div>

<div class="row">
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">รายละเอียดกิจกรรม</div> 
        <div class="col-sm-7 text-left"><textarea id="event_detail_th"></textarea></div> 
    </div>
    <div class="col-sm-2"> </div> 
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">Event Details</div> 
        <div class="col-sm-7 text-left"><textarea id="event_detail_eng"></textarea></div> 
    </div>
</div>

<div class="row">
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">Link ที่แสดงหน้าเว็บ (ใช้ | คั่น)</div> 
        <div class="col-sm-7 text-left"><input type="text" id="event_info_link_short_th"></div> 
    </div>
    <div class="col-sm-2"> </div> 
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">Link ที่แสดงหน้าเว็บ</div> 
        <div class="col-sm-7 text-left"><input type="text" id="event_info_link_short_eng"></div> 
    </div>
</div>


<div class="row">
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">Link (ใช้ | เป็นตัวคั่น)</div> 
        <div class="col-sm-7 text-left"><input type="text" id="event_info_link_long_th"></div> 
    </div>
    <div class="col-sm-2"> </div> 
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">Link</div> 
        <div class="col-sm-7 text-left"><input type="text" id="event_info_link_long_eng"></div> 
    </div>
</div>

<div class="row">
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">สถานที่จัด event</div> 
        <div class="col-sm-7 text-left"><input type="text" id="event_venue_th"></div> 
    </div>
    <div class="col-sm-2"> </div> 
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">Event Venue</div> 
        <div class="col-sm-7 text-left"><input type="text" id="event_venue_eng"></div> 
    </div>
</div>

<div class="row">
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">จังหวัด</div> 
        <div class="col-sm-7 text-left"><div id='event_venue_province_id_th'></div></div> 
    </div>
    <div class="col-sm-2"> </div> 
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">Province</div> 
        <div class="col-sm-7 text-left"><div id='event_venue_province_id_eng'></div></div> 
    </div>
</div>

<div class="row">
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">อำเภอ</div> 
        <div class="col-sm-7 text-left"><div id='event_venue_district_id_th'></div></div> 
    </div>
    <div class="col-sm-2"> </div> 
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">District</div> 
        <div class="col-sm-7 text-left"><div id='event_venue_district_id_eng'></div></div> 
    </div>
</div>


<div class="row">
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">ละติจูด</div> 
        <div class="col-sm-7 text-left"><input type="text" id="event_geo_x_th" /></div> 
    </div>
    <div class="col-sm-2"> </div>
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">Latitude</div> 
        <div class="col-sm-7 text-left"><input type="text" id="event_geo_x_eng" /></div> 
    </div>
</div>

<div class="row">
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">ลองติจูด</div> 
        <div class="col-sm-7 text-left"><input type="text" id="event_geo_y_th" /></div> 
    </div>
    <div class="col-sm-2"> </div>
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">Longtitude</div> 
        <div class="col-sm-7 text-left"><input type="text" id="event_geo_y_eng" /></div> 
    </div>
</div>


<div class="row">
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">วันที่เริ่มกิจกรรม</div> 
        <div class="col-sm-7 text-left"><div id="event_start_date_th"></div></div> 
    </div>
    <div class="col-sm-2"> </div> 
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">Event Start Date</div> 
        <div class="col-sm-7 text-left"><div id="event_start_date_eng"></div></div> 
    </div>
</div>


<div class="row">
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">วันที่สิ้นสุดกิจกรรม</div> 
        <div class="col-sm-7 text-left"><div id="event_end_date_th"></div></div> 
    </div>
    <div class="col-sm-2"> </div> 
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">Event End Date</div> 
        <div class="col-sm-7 text-left"><div id="event_end_date_eng"></div> </div> 
    </div>
</div>


<div class="row">
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">อัพโหลดรูปภาพ</div> 
        <div class="col-sm-7 text-left"><div id="event_file_saved_name_th"></div></div> 
    </div>
    <div class="col-sm-2"> </div> 
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">Upload Picture</div> 
        <div class="col-sm-7 text-left"><div id="event_file_saved_name_eng"></div></div> 
    </div>
</div>

<div class="row">
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">ชื่อรูปภาพ (ALt)</div> 
        <div class="col-sm-7 text-left"><input type="text" id="event_pic_alt_th"></div> 
    </div>
    <div class="col-sm-2"> </div> 
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">Picture Name (ALt)</div> 
        <div class="col-sm-7 text-left"><input type="text" id="event_pic_alt_eng"></div> 
    </div>
</div>

<div class="row">
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">คำอธิบายรูปภาพ</div> 
        <div class="col-sm-7 text-left"><textarea id="event_pic_detail_th"></textarea></div> 
    </div>
    <div class="col-sm-2"> </div> 
    <div class="col-sm-5">
        <div class="col-sm-5 text-right">Picture Detail</div> 
        <div class="col-sm-7 text-left"><textarea id="event_pic_detail_eng"></textarea></div> 
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


        // จบใส่ javascript
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    });
</script>
<?php
include_once 'footer.php';
