<?php
include_once 'header.php';
?>
<h1>
    Destinations
    <small>Form</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="destination.php">Destinations</a></li>
    <li class="active">Destinations Form</li>
</ol>
<?php
include_once 'topic.php';
?>
<div class="row">
    <div class="col-sm-12"></div>
</div>








<!---->
<div id='jqxTabs'>
    <ul>
        <li style="margin-left: 30px;">ภาษาไทย</li>
        <li>English</li>

    </ul>
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">สถานะ</div> 
                <div class="col-sm-7 text-left"><div id="destination_status_th" ></div></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ละติจูด</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_geo_x_th" /></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ลองติจูด</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_geo_y_th" /></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ชื่อสถานที่</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_name_th" /></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ที่อยู่</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_address_th" /></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">จังหวัด</div> 
                <div class="col-sm-7 text-left"><div id='destination_province_id_th'></div></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อำเภอ</div> 
                <div class="col-sm-7 text-left"><div id='destination_district_id_th'></div></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">รายละเอียดสถานที่ (80 ตัวอักษร)</div> 
                <div class="col-sm-7 text-left"><textarea id="destination_details_80_th"></textarea></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">รายละเอียดสถานที่ (200 ตัวอักษร)</div> 
                <div class="col-sm-7 text-left"><textarea id="destination_details_200_th"></textarea></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">คำอธิบาย</div> 
                <div class="col-sm-7 text-left"><textarea id="destination_details_long_th"></textarea></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">เวลา เปิด-ปิด</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_open_hour_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ค่าเข้าชม (ชาวไทย)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_fee_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ฤดูกาลสำหรับท่องเที่ยว</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_visit_season_th"></div> 
            </div>

        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">เบอร์โทร (ใช้ | เป็นตัวคั่น)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_info_tel_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">เบอร์แฟกซ์</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_info_fax_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อีเมล (ใช้ | เป็นตัวคั่น)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_info_email_th"></div> 
            </div>
            <div class="col-sm-2"> </div> 

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">เว็บไซต์</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_info_website_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">เพจเฟสบุ๊ค</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_social_facebook_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อินสตาแกรม</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_social_instragram_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ยูทูป</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_social_youtube_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Link ที่แสดงหน้าเว็บไซต์ (ใช้ | คั่น)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_content_ref_short_th"></div> 
            </div>

        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Link (ใช้ | เป็นตัวคั่น)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_content_ref_long_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Destination Type Tags</div> 
                <div class="col-sm-7 text-left"><div id="destination_cat_th"></div></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อัพโหลดรูปภาพ</div> 
                <div class="col-sm-7 text-left"><div id="destination_file_saved_name_th"></div></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ชื่อรูปภาพ (ALt)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_pic_alt_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">คำอธิบายรูปภาพ</div> 
                <div class="col-sm-7 text-left"><textarea id="destination_pic_detail_th"></textarea></div> 
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
                <div class="col-sm-3 text-left">Status</div> 
                <div class="col-sm-7 text-left"><div id="destination_status_eng" ></div></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Latitude</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_geo_x_eng" /></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Longtitude</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_geo_y_eng" /></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Destination Name</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_name_eng" /></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Destination Address</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_address_eng" /></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Province</div> 
                <div class="col-sm-7 text-left"><div id='destination_province_id_eng'></div></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">District</div> 
                <div class="col-sm-7 text-left"><div id='destination_district_id_eng'></div></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Destination Details (80 Charecters)</div> 
                <div class="col-sm-7 text-left"><textarea id="destination_details_80_eng"></textarea></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Destination Details (200 Charecters)</div> 
                <div class="col-sm-7 text-left"><textarea id="destination_details_200_eng"></textarea></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Detail</div> 
                <div class="col-sm-7 text-left"><textarea id="destination_details_long_eng"></textarea></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Open Hour</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_open_hour_eng"><!-- <div id='destination_open_hour_eng'></div> --></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Fee (Foreigner)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_fee_eng"><!-- <div id='destination_open_hour_eng'></div> --></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Season</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_visit_season_eng"></div> 
            </div>
        </div>


        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Telephone Number</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_info_tel_eng"></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Fax No</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_info_fax_eng"></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Email</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_info_email_eng"></div> 
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Website</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_info_website_eng"></div> 
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Facebook Page</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_social_facebook_eng"></div> 
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Instragram</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_social_instragram_eng"></div> 
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Youtube</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_social_youtube_eng"></div> 
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Link ที่แสดงหน้าเว็บ</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_content_ref_short_eng"></div> 
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Link</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_content_ref_long_eng"></div> 
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Destination Type Tags</div> 
                <div class="col-sm-7 text-left"><div id="destination_cat_eng"></div></div> 
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Upload Picture</div> 
                <div class="col-sm-7 text-left"><div id="destination_file_saved_name_eng"></div></div> 
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Picture Name (ALt)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="destination_pic_alt_eng"></div> 
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Picture Detail</div> 
                <div class="col-sm-7 text-left"><textarea id="destination_pic_detail_eng"></textarea></div> 
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

<!---->

<?php
include_once 'script.php';
?>

<script type="text/javascript">
    $(document).ready(function ()
    {
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ใส่ javascript ตรงนี้
        var theme = 'energyblue';

        var destination_status_th_source = [
            "-",
            "เปิดทำการ",
            "ปิดทำการ"
        ];
        $("#destination_status_th").jqxDropDownList({source: destination_status_th_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: 30, autoDropDownHeight: true, theme: theme});


        var destination_status_eng_source = [
            "-",
            "Enable",
            "Disable"
        ];
        $("#destination_status_eng").jqxDropDownList({source: destination_status_eng_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: 30, autoDropDownHeight: true, theme: theme});

        $("#destination_geo_x_th").jqxInput({placeHolder: "ละติจูด", height: 25, width: '98%', minLength: 1});
        $("#destination_geo_y_th").jqxInput({placeHolder: "ลองติจูด", height: 25, width: '98%', minLength: 1});

        $("#destination_geo_x_eng").jqxInput({placeHolder: "Enter a Latitude", height: 25, width: '98%', minLength: 1});
        $("#destination_geo_y_eng").jqxInput({placeHolder: "Enter a Longtitude", height: 25, width: '98%', minLength: 1});

        $("#destination_name_th").jqxInput({placeHolder: "ชื่อสถานที่", height: 25, width: '98%', minLength: 1});
        $("#destination_name_eng").jqxInput({placeHolder: "Name", height: 25, width: '98%', minLength: 1});

        $("#destination_address_th").jqxInput({placeHolder: "ที่อยู่", height: 25, width: '98%', minLength: 1});
        $("#destination_address_eng").jqxInput({placeHolder: "Address", height: 25, width: '98%', minLength: 1});

        var destination_province_id_th_source = [
            "-",
            "พังงา",
            "ภูเก็ต"
        ];
        $("#destination_province_id_th").jqxDropDownList({source: destination_province_id_th_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});

        var destination_province_id_eng_source = [
            "-",
            "Phang Nga",
            "Phuket"
        ];
        $("#destination_province_id_eng").jqxDropDownList({source: destination_province_id_eng_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});

        var destination_district_id_th_source = [
            "-",
            "กะทู้",
            "ฉลอง"
        ];
        $("#destination_district_id_th").jqxDropDownList({source: destination_district_id_th_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});

        var destination_district_id_eng_source = [
            "-",
            "Kathu",
            "Chalong"
        ];
        $("#destination_district_id_eng").jqxDropDownList({source: destination_district_id_eng_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});


        $('#destination_details_80_th').jqxTextArea({placeHolder: 'คำอธิบาย 80 ตัวอักษร', height: 90, width: '100%', minLength: 1, maxLength: 80});
        $('#destination_details_80_eng').jqxTextArea({placeHolder: 'Detail 80 Charecters', height: 90, width: '100%', minLength: 1, maxLength: 80});

        $('#destination_details_200_th').jqxTextArea({placeHolder: 'คำอธิบาย 200 ตัวอักษร', height: 90, width: '100%', minLength: 1, maxLength: 200});
        $('#destination_details_200_eng').jqxTextArea({placeHolder: 'Detail 200 Charecters', height: 90, width: '100%', minLength: 1, maxLength: 200});

        $('#destination_details_long_th').jqxTextArea({placeHolder: 'คำอธิบายทั้งหมด', height: 150, width: '100%', minLength: 1});
        $('#destination_details_long_eng').jqxTextArea({placeHolder: 'Long Detail', height: 150, width: '100%', minLength: 1});

        /*
         $("#destination_open_hour_th").jqxDateTimeInput({width: '250px', height: '25px', formatString: 't', showTimeButton: true, showCalendarButton: false});
         $("#destination_open_hour_eng").jqxDateTimeInput({width: '250px', height: '25px', formatString: 't', showTimeButton: true, showCalendarButton: false});
         */

        $("#destination_open_hour_th").jqxInput({placeHolder: "เวลา เปิด-ปิด", height: 25, width: '98%', minLength: 1});
        $("#destination_open_hour_eng").jqxInput({placeHolder: "Open Hour", height: 25, width: '98%', minLength: 1});

        $("#destination_fee_th").jqxInput({placeHolder: "ค่าเข้าชม (ชาวไทย)", height: 25, width: '98%', minLength: 1});
        $("#destination_fee_eng").jqxInput({placeHolder: "Fee (Foreigner )", height: 25, width: '98%', minLength: 1});

        $("#destination_visit_season_th").jqxInput({placeHolder: "ฤดูกาลสำหรับท่องเที่ยว", height: 25, width: '98%', minLength: 1});
        $("#destination_visit_season_eng").jqxInput({placeHolder: "Season", height: 25, width: '98%', minLength: 1});


        $("#destination_info_tel_th").jqxInput({placeHolder: "เบอร์โทร", height: 25, width: '98%', minLength: 1});
        $("#destination_info_tel_eng").jqxInput({placeHolder: "Telephone Number", height: 25, width: '98%', minLength: 1});

        $("#destination_info_fax_th").jqxInput({placeHolder: "เบอร์แฟกซ์", height: 25, width: '98%', minLength: 1});
        $("#destination_info_fax_eng").jqxInput({placeHolder: "Fax No", height: 25, width: '98%', minLength: 1});

        $("#destination_info_email_th").jqxInput({placeHolder: "อีเมล", height: 25, width: '98%', minLength: 1});
        $("#destination_info_email_eng").jqxInput({placeHolder: "Email", height: 25, width: '98%', minLength: 1});

        $("#destination_info_website_th").jqxInput({placeHolder: "เว็บไซต์", height: 25, width: '98%', minLength: 1});
        $("#destination_info_website_eng").jqxInput({placeHolder: "Website", height: 25, width: '98%', minLength: 1});

        $("#destination_social_facebook_th").jqxInput({placeHolder: "เพจเฟสบุ๊ค", height: 25, width: '98%', minLength: 1});
        $("#destination_social_facebook_eng").jqxInput({placeHolder: "Facebook Page", height: 25, width: '98%', minLength: 1});

        $("#destination_social_instragram_th").jqxInput({placeHolder: "อินสตาแกรม", height: 25, width: '98%', minLength: 1});
        $("#destination_social_instragram_eng").jqxInput({placeHolder: "Instragram", height: 25, width: '98%', minLength: 1});

        $("#destination_social_youtube_th").jqxInput({placeHolder: "ยูทูป", height: 25, width: '98%', minLength: 1});
        $("#destination_social_youtube_eng").jqxInput({placeHolder: "Youtube", height: 25, width: '98%', minLength: 1});

        $("#destination_content_ref_short_th").jqxInput({placeHolder: "Link สำหรับแสดงผลหน้าเว็บ", height: 25, width: '98%', minLength: 1});
        $("#destination_content_ref_short_eng").jqxInput({placeHolder: "Link สำหรับแสดงผลหน้าเว็บ", height: 25, width: '98%', minLength: 1});

        $("#destination_content_ref_long_th").jqxInput({placeHolder: "Link", height: 25, width: '98%', minLength: 1});
        $("#destination_content_ref_long_eng").jqxInput({placeHolder: "Link", height: 25, width: '98%', minLength: 1});

        var destination_cat_th_source = [{
                text: "ชายหาด",
                value: 1
            }, {
                text: "ประภาคาร",
                value: 2
            }, {
                text: "น้ำตก",
                value: 3
            }];

        // Create a jqxDropDownList
        $("#destination_cat_th").jqxDropDownList({checkboxes: true, source: destination_cat_th_source, displayMember: "text", valueMember: "value", width: '100%', height: 30, itemHeight: 30});
        $("#destination_cat_th").jqxDropDownList('checkIndex', 0);


        var destination_cat_eng_source = [{
                text: "Beach",
                value: 1
            }, {
                text: "Lighthouse",
                value: 2
            }, {
                text: "Waterfall",
                value: 3
            }];

        // Create a jqxDropDownList
        $("#destination_cat_eng").jqxDropDownList({checkboxes: true, source: destination_cat_eng_source, displayMember: "text", valueMember: "value", width: '100%', height: 30, itemHeight: 30});
        $("#destination_cat_eng").jqxDropDownList('checkIndex', 0);



        // Table : destination_pic
        $('#destination_file_saved_name_th').jqxFileUpload({width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload'});
        $('#destination_file_saved_name_eng').jqxFileUpload({width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload'});

        $("#destination_pic_alt_th").jqxInput({placeHolder: "ชื่อรูปภาพ สำหรับใส่ใน Tag(ALt)", height: 25, width: '98%', minLength: 1});
        $("#destination_pic_alt_eng").jqxInput({placeHolder: "Picture Name (ALt)", height: 25, width: '98%', minLength: 1});

        $('#destination_pic_detail_th').jqxTextArea({placeHolder: 'คำอธิบายรูปภาพ', height: 150, width: '100%', minLength: 1});
        $('#destination_pic_detail_eng').jqxTextArea({placeHolder: 'Picture Detail', height: 150, width: '100%', minLength: 1});

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
                                    fc: 'save_destination',
                                    lag: 'th',
                                    destination_district_id: $('#destination_district_id_th').val(),
                                    destination_province_id: $('#destination_province_id_th').val(),
                                    destination_status: $('#destination_status_th').val(),
                                    destination_geo_x: $('#destination_geo_x_th').val(),
                                    destination_geo_y: $('#destination_geo_y_th').val(),
                                    destination_info_tel: $('#destination_info_tel_th').val(),
                                    destination_info_fax: $('#destination_info_fax_th').val(),
                                    destination_info_email: $('#destination_info_email_th').val(),
                                    destination_info_website: $('#destination_info_website_th').val(),
                                    destination_social_facebook: $('#destination_social_facebook_th').val(),
                                    destination_social_instragram: $('#destination_social_instragram_th').val(),
                                    destination_social_youtube: $('#destination_social_youtube_th').val(),
                                    destination_cat: $('#destination_cat_th').val(),
                                    destination_name: $('#destination_name_th').val(),
                                    destination_address: $('#destination_address_th').val(),
                                    destination_details_80: $('#destination_details_80_th').val(),
                                    destination_details_200: $('#destination_details_200_th').val(),
                                    destination_details_long: $('#destination_details_long_th').val(),
                                    destination_open_hour: $('#destination_open_hour_th').val(),
                                    destination_fee: $('#destination_fee_th').val(),
                                    destination_visit_season: $('#destination_visit_season_th').val(),
                                    destination_content_ref_short: $('#destination_content_ref_short_th').val(),
                                    destination_content_ref_long: $('#destination_content_ref_long_th').val()
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
                                    fc: 'save_destination',
                                    lag: 'en',
                                    destination_district_id: $('#destination_district_id_en').val(),
                                    destination_province_id: $('#destination_province_id_en').val(),
                                    destination_status: $('#destination_status_en').val(),
                                    destination_geo_x: $('#destination_geo_x_en').val(),
                                    destination_geo_y: $('#destination_geo_y_en').val(),
                                    destination_info_tel: $('#destination_info_tel_en').val(),
                                    destination_info_fax: $('#destination_info_fax_en').val(),
                                    destination_info_email: $('#destination_info_email_en').val(),
                                    destination_info_website: $('#destination_info_website_en').val(),
                                    destination_social_facebook: $('#destination_social_facebook_en').val(),
                                    destination_social_instragram: $('#destination_social_instragram_en').val(),
                                    destination_social_youtube: $('#destination_social_youtube_en').val(),
                                    destination_cat: $('#destination_cat_en').val(),
                                    destination_name: $('#destination_name_en').val(),
                                    destination_address: $('#destination_address_en').val(),
                                    destination_details_80: $('#destination_details_80_en').val(),
                                    destination_details_200: $('#destination_details_200_en').val(),
                                    destination_details_long: $('#destination_details_long_en').val(),
                                    destination_open_hour: $('#destination_open_hour_en').val(),
                                    destination_fee: $('#destination_fee_en').val(),
                                    destination_visit_season: $('#destination_visit_season_en').val(),
                                    destination_content_ref_short: $('#destination_content_ref_short_en').val(),
                                    destination_content_ref_long: $('#destination_content_ref_long_en').val()
                                }
                    })
                    .done(function (msg)
                    {
                        //alert(msg);
                    });
        }
       window.open("destination.php", "_self"); 
    }
</script>
<?php
include_once 'footer.php';
