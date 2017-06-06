<?php
include_once 'header.php';
?>
<h1>
    Accommodations
    <small>Form</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="accommodation.php">Accommodations</a></li>
    <li class="active">Accommodations Form</li>
</ol>
<?php
include_once 'topic.php';
?>

<!-- Main row -->
<div id='jqxTabs'>
    <ul>
        <li style="margin-left: 30px;">ภาษาไทย</li>
        <li>English</li>

    </ul>
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">สถานะ</div> 
                <div class="col-sm-7 text-left"><div id="accommodation_status_th" ></div></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ละติจูด</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_geo_x_th" /></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ลองติจูด</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_geo_y_th" /></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ชื่อสถานที่</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_name_th" /></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ที่อยู่</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_address_th" /></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">จังหวัด</div> 
                <div class="col-sm-7 text-left"><div id='accommodation_province_id_th'></div></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อำเภอ</div> 
                <div class="col-sm-7 text-left"><div id='accommodation_district_id_th'></div></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">รายละเอียดสถานที่ (80 ตัวอักษร)</div> 
                <div class="col-sm-7 text-left"><textarea id="accommodation_details_80_th"></textarea></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">รายละเอียดสถานที่ (200 ตัวอักษร)</div> 
                <div class="col-sm-7 text-left"><textarea id="accommodation_details_200_th"></textarea></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">คำอธิบาย</div> 
                <div class="col-sm-7 text-left"><textarea id="accommodation_details_long_th"></textarea></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ราคาที่พักเริ่มต้น</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_start_price_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ราคาที่พักสูงสุด</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_top_price_th"></div> 
            </div>

        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">เบอร์โทร (ใช้ | เป็นตัวคั่น)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_info_tel_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อีเมล (ใช้ | เป็นตัวคั่น)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_info_email_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">เว็บไซต์</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_info_website_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">เพจเฟสบุ๊ค</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_social_facebook_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อินสตาแกรม</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_social_instragram_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ยูทูป</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_social_youtube_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Book via hotels.com (Link)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_book_via_hotels_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Book via agoda.com (Link)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_book_via_agoda_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Book via booking.com (Link)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_book_via_booking_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Link ที่แสดงหน้าเว็บ (ใช้ | คั่น)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_review_ref_short_th"></div> 
            </div>

        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Link (ใช้ | เป็นตัวคั่น)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_review_ref_long_th"></div> 
            </div>

        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">สิ่งรอบๆที่พัก</div> 
                <div class="col-sm-7 text-left"><textarea id="accommodation_around_dec_th"></textarea></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ระยะทางจากทีพักถึงสนามบิน</div> 
                <div class="col-sm-7 text-left"><textarea id="accommodation_distance_airport_th"></textarea></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ระยะทางจากทีพักถึงตัวเมือง</div> 
                <div class="col-sm-7 text-left"><textarea id="accommodation_distance_town_th"></textarea></div> 
            </div>

        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Accommodation Type Tags</div> 
                <div class="col-sm-7 text-left"><div id="accommodation_cat_th"></div></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อัพโหลดรูปภาพ</div> 
                <div class="col-sm-7 text-left"><div id="accommodation_file_saved_name_th"></div></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ชื่อรูปภาพ (ALt)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_pic_alt_th"></div> 
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">คำอธิบายรูปภาพ</div> 
                <div class="col-sm-7 text-left"><textarea id="accommodation_pic_detail_th"></textarea></div> 
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
                <div class="col-sm-7 text-left"><div id="accommodation_status_eng" ></div></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Latitude</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_geo_x_eng" /></div> 
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Longtitude</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_geo_y_eng" /></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Destination Name</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_name_eng" /></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Destination Address</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_address_eng" /></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Province</div> 
                <div class="col-sm-7 text-left"><div id='accommodation_province_id_eng'></div></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">District</div> 
                <div class="col-sm-7 text-left"><div id='accommodation_district_id_eng'></div></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Destination Details (80 Charecters)</div> 
                <div class="col-sm-7 text-left"><textarea id="accommodation_details_80_eng"></textarea></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Destination Details (200 Charecters)</div> 
                <div class="col-sm-7 text-left"><textarea id="accommodation_details_200_eng"></textarea></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Detail</div> 
                <div class="col-sm-7 text-left"><textarea id="accommodation_details_long_eng"></textarea></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Start Price</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_start_price_eng"><!-- <div id='accommodation_open_hour_eng'></div> --></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Top Price</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_top_price_eng"><!-- <div id='accommodation_open_hour_eng'></div> --></div> 
            </div>
        </div>


        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Telephone Number</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_info_tel_eng"></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Email</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_info_email_eng"></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Website</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_info_website_eng"></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Facebook Page</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_social_facebook_eng"></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Instragram</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_social_instragram_eng"></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Youtube</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_social_youtube_eng"></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Book via hotels.com (Link)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_book_via_hotels_eng"></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Book via agoda.com (Link)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_book_via_agoda_eng"></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Book via booking.com (Link)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_book_via_booking_eng"></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Link ที่แสดงหน้าเว็บ</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_review_ref_short_eng"></div> 
            </div>
        </div>


        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Link</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_review_ref_long_eng"></div> 
            </div>
        </div>


        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Around</div> 
                <div class="col-sm-7 text-left"><textarea id="accommodation_around_dec_eng"></textarea></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Distance to airport</div> 
                <div class="col-sm-7 text-left"><textarea id="accommodation_distance_airport_eng"></textarea></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Distance to town</div> 
                <div class="col-sm-7 text-left"><textarea id="accommodation_distance_town_eng"></textarea></div> 
            </div>
        </div>


        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Destination Type Tags</div> 
                <div class="col-sm-7 text-left"><div id="accommodation_cat_eng"></div></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Upload Picture</div> 
                <div class="col-sm-7 text-left"><div id="accommodation_file_saved_name_eng"></div></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Picture Name (ALt)</div> 
                <div class="col-sm-7 text-left"><input type="text" id="accommodation_pic_alt_eng"></div> 
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">Picture Detail</div> 
                <div class="col-sm-7 text-left"><textarea id="accommodation_pic_detail_eng"></textarea></div> 
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

        var accommodation_status_th_source = [
            "-",
            "เปิดทำการ",
            "ปิดทำการ"
        ];
        $("#accommodation_status_th").jqxDropDownList({source: accommodation_status_th_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: 30, autoDropDownHeight: true, theme: theme});


        var accommodation_status_eng_source = [
            "-",
            "Enable",
            "Disable"
        ];
        $("#accommodation_status_eng").jqxDropDownList({source: accommodation_status_eng_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: 30, autoDropDownHeight: true, theme: theme});

        $("#accommodation_geo_x_th").jqxInput({placeHolder: "ละติจูด", height: 25, width: '98%', minLength: 1});
        $("#accommodation_geo_y_th").jqxInput({placeHolder: "ลองติจูด", height: 25, width: '98%', minLength: 1});

        $("#accommodation_geo_x_eng").jqxInput({placeHolder: "Enter a Latitude", height: 25, width: '98%', minLength: 1});
        $("#accommodation_geo_y_eng").jqxInput({placeHolder: "Enter a Longtitude", height: 25, width: '98%', minLength: 1});

        $("#accommodation_name_th").jqxInput({placeHolder: "ชื่อสถานที่", height: 25, width: '98%', minLength: 1});
        $("#accommodation_name_eng").jqxInput({placeHolder: "Name", height: 25, width: '98%', minLength: 1});

        $("#accommodation_address_th").jqxInput({placeHolder: "ที่อยู่", height: 25, width: '98%', minLength: 1});
        $("#accommodation_address_eng").jqxInput({placeHolder: "Address", height: 25, width: '98%', minLength: 1});

        $("#accommodation_start_price_th").jqxInput({placeHolder: "ละติจูด", height: 25, width: '98%', minLength: 1});
        $("#accommodation_start_price_eng").jqxInput({placeHolder: "ลองติจูด", height: 25, width: '98%', minLength: 1});




        $("#accommodation_top_price_th").jqxInput({placeHolder: "ราคาที่พักสูงสุด", height: 25, width: '98%', minLength: 1});
        $("#accommodation_top_price_eng").jqxInput({placeHolder: "Top Price", height: 25, width: '98%', minLength: 1});

        $("#accommodation_info_tel_th").jqxInput({placeHolder: "เบอร์โทร", height: 25, width: '98%', minLength: 1});
        $("#accommodation_info_tel_eng").jqxInput({placeHolder: "Telephone Number", height: 25, width: '98%', minLength: 1});

        $("#accommodation_info_email_th").jqxInput({placeHolder: "อีเมล", height: 25, width: '98%', minLength: 1});
        $("#accommodation_info_email_eng").jqxInput({placeHolder: "Email", height: 25, width: '98%', minLength: 1});

        $("#accommodation_info_website_th").jqxInput({placeHolder: "เว็บไซต์", height: 25, width: '98%', minLength: 1});
        $("#accommodation_info_website_eng").jqxInput({placeHolder: "Website", height: 25, width: '98%', minLength: 1});

        $("#accommodation_social_facebook_th").jqxInput({placeHolder: "เพจเฟสบุ๊ค", height: 25, width: '98%', minLength: 1});
        $("#accommodation_social_facebook_eng").jqxInput({placeHolder: "Facebook Page", height: 25, width: '98%', minLength: 1});

        $("#accommodation_social_instragram_th").jqxInput({placeHolder: "อินสตาแกรม", height: 25, width: '98%', minLength: 1});
        $("#accommodation_social_instragram_eng").jqxInput({placeHolder: "Instragram", height: 25, width: '98%', minLength: 1});

        $("#accommodation_social_youtube_th").jqxInput({placeHolder: "ยูทูป", height: 25, width: '98%', minLength: 1});
        $("#accommodation_social_youtube_eng").jqxInput({placeHolder: "Youtube", height: 25, width: '98%', minLength: 1});

        $("#accommodation_book_via_hotels_th").jqxInput({placeHolder: "Book via hotels.com", height: 25, width: '98%', minLength: 1});
        $("#accommodation_book_via_hotels_eng").jqxInput({placeHolder: "Book via hotels.com", height: 25, width: '98%', minLength: 1});

        $("#accommodation_book_via_agoda_th").jqxInput({placeHolder: "Book via agoda.com", height: 25, width: '98%', minLength: 1});
        $("#accommodation_book_via_agoda_eng").jqxInput({placeHolder: "Book via agoda.com", height: 25, width: '98%', minLength: 1});

        $("#accommodation_book_via_booking_th").jqxInput({placeHolder: "Book via booking.com", height: 25, width: '98%', minLength: 1});
        $("#accommodation_book_via_booking_eng").jqxInput({placeHolder: "Book via booking.com", height: 25, width: '98%', minLength: 1});


        $("#accommodation_review_ref_short_th").jqxInput({placeHolder: "Link สำหรับแสดงผลหน้าเว็บ", height: 25, width: '98%', minLength: 1});
        $("#accommodation_review_ref_short_eng").jqxInput({placeHolder: "Link สำหรับแสดงผลหน้าเว็บ", height: 25, width: '98%', minLength: 1});

        $("#accommodation_review_ref_long_th").jqxInput({placeHolder: "Link", height: 25, width: '98%', minLength: 1});
        $("#accommodation_review_ref_long_eng").jqxInput({placeHolder: "Link", height: 25, width: '98%', minLength: 1});


        $('#accommodation_around_dec_th').jqxTextArea({placeHolder: 'สิ่งรอบๆที่พัก', height: 90, width: '100%', minLength: 1, maxLength: 200});
        $('#accommodation_around_dec_eng').jqxTextArea({placeHolder: 'Around', height: 90, width: '100%', minLength: 1, maxLength: 200});


        $("#accommodation_distance_airport_th").jqxInput({placeHolder: "ระยะทางจากทีพักถึงสนามบิน", height: 25, width: '98%', minLength: 1});
        $("#accommodation_distance_airport_eng").jqxInput({placeHolder: "Distance to airport", height: 25, width: '98%', minLength: 1});

        $("#accommodation_distance_town_th").jqxInput({placeHolder: "ระยะทางจากทีพักถึงตัวเมือง", height: 25, width: '98%', minLength: 1});
        $("#accommodation_distance_town_eng").jqxInput({placeHolder: "Distance to town", height: 25, width: '98%', minLength: 1});


        $("#accommodation_details_80_th").jqxTextArea({placeHolder: "คำอธิบาย 80 ตัวอักษร", height: 90, width: '100%', minLength: 1, maxLength: 80});
        $("#accommodation_details_80_eng").jqxTextArea({placeHolder: "Detail 80 Charecters", height: 90, width: '100%', minLength: 1, maxLength: 80});

        $("#accommodation_details_200_th").jqxTextArea({placeHolder: "คำอธิบาย 200 ตัวอักษร", height: 90, width: '100%', minLength: 1, maxLength: 200});
        $("#accommodation_details_200_eng").jqxTextArea({placeHolder: "Detail 200 Charecters", height: 90, width: '100%', minLength: 1, maxLength: 200});

        $("#accommodation_details_long_th").jqxTextArea({placeHolder: "คำอธิบายทั้งหมด", height: 150, width: '100%', minLength: 1});
        $("#accommodation_details_long_eng").jqxTextArea({placeHolder: "Long Detail", height: 150, width: '100%', minLength: 1});


        var accommodation_province_id_th_source = [
            "-",
            "พังงา",
            "ภูเก็ต"
        ];
        $("#accommodation_province_id_th").jqxDropDownList({source: accommodation_province_id_th_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});

        var accommodation_province_id_eng_source = [
            "-",
            "Phang Nga",
            "Phuket"
        ];
        $("#accommodation_province_id_eng").jqxDropDownList({source: accommodation_province_id_eng_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});

        var accommodation_district_id_th_source = [
            "-",
            "กะทู้",
            "ฉลอง"
        ];
        $("#accommodation_district_id_th").jqxDropDownList({source: accommodation_district_id_th_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});

        var accommodation_district_id_eng_source = [
            "-",
            "Kathu",
            "Chalong"
        ];
        $("#accommodation_district_id_eng").jqxDropDownList({source: accommodation_district_id_eng_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});



        var accommodation_cat_th_source = [{
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
        $("#accommodation_cat_th").jqxDropDownList({checkboxes: true, source: accommodation_cat_th_source, displayMember: "text", valueMember: "value", width: '100%', height: 30, itemHeight: 30});
        $("#accommodation_cat_th").jqxDropDownList('checkIndex', 0);


        var accommodation_cat_eng_source = [{
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
        $("#accommodation_cat_eng").jqxDropDownList({checkboxes: true, source: accommodation_cat_eng_source, displayMember: "text", valueMember: "value", width: '100%', height: 30, itemHeight: 30});
        $("#accommodation_cat_eng").jqxDropDownList('checkIndex', 0);



        // Table : accommodation_pic
        $('#accommodation_file_saved_name_th').jqxFileUpload({width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload'});
        $('#accommodation_file_saved_name_eng').jqxFileUpload({width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload'});

        $("#accommodation_pic_alt_th").jqxInput({placeHolder: "ชื่อรูปภาพ สำหรับใส่ใน Tag(ALt)", height: 25, width: '98%', minLength: 1});
        $("#accommodation_pic_alt_eng").jqxInput({placeHolder: "Picture Name (ALt)", height: 25, width: '98%', minLength: 1});

        $('#accommodation_pic_detail_th').jqxTextArea({placeHolder: 'คำอธิบายรูปภาพ', height: 150, width: '100%', minLength: 1});
        $('#accommodation_pic_detail_eng').jqxTextArea({placeHolder: 'Picture Detail', height: 150, width: '100%', minLength: 1});


        $('#jqxTabs').jqxTabs({width: '100%', height: '100%', position: 'top', theme: theme});
        $('#jqxTabs').jqxTabs({height: '100%'});


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

        // จบใส่ javascript
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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
                                    fc: 'save_accommodation',
                                    lag: 'th',
                                    accommodation_district_id: $('#accommodation_district_id_th').val(),
                                    accommodation_province_id: $('#accommodation_province_id_th').val(),
                                    accommodation_status: $('#accommodation_status_th').val(),
                                    accommodation_geo_x: $('#accommodation_geo_x_th').val(),
                                    accommodation_geo_y: $('#accommodation_geo_y_th').val(),
                                    accommodation_info_tel: $('#accommodation_info_tel_th').val(),
                                    accommodation_info_website: $('#accommodation_info_website_th').val(),
                                    accommodation_info_email: $('#accommodation_info_email_th').val(),
                                    accommodation_social_facebook: $('#accommodation_social_facebook_th').val(),
                                    accommodation_social_instragram: $('#accommodation_social_instragram_th').val(),
                                    accommodation_social_youtube: $('#accommodation_social_youtube_th').val(),
                                    accommodation_book_via_hotels: $('#accommodation_book_via_hotels_th').val(),
                                    accommodation_book_via_agoda: $('#accommodation_book_via_agoda_th').val(),
                                    accommodation_book_via_booking: $('#accommodation_book_via_booking_th').val(),
                                    accommodation_start_price: $('#accommodation_start_price_th').val(),
                                    accommodation_top_price: $('#accommodation_top_price_th').val(),
                                    accommodation_cat: $('#accommodation_cat_th').val(),
                                    accommodation_name: $('#accommodation_name_th').val(),
                                    accommodation_address: $('#accommodation_address_th').val(),
                                    accommodation_details_80: $('#accommodation_details_80_th').val(),
                                    accommodation_details_200: $('#accommodation_details_200_th').val(),
                                    accommodation_details_long: $('#accommodation_details_long_th').val(),
                                    accommodation_review_ref_short: $('#accommodation_review_ref_short_th').val(),
                                    accommodation_review_ref_long: $('#accommodation_review_ref_long_th').val(),
                                    accommodation_around_dec: $('#accommodation_around_dec_th').val(),
                                    accommodation_distance_airport: $('#accommodation_distance_airport_th').val(),
                                    accommodation_distance_town: $('#accommodation_distance_town_th').val()
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
                                    fc: 'save_accommodation',
                                    lag: 'en',
                                    accommodation_district_id: $('#accommodation_district_id_en').val(),
                                    accommodation_province_id: $('#accommodation_province_id_en').val(),
                                    accommodation_status: $('#accommodation_status_en').val(),
                                    accommodation_geo_x: $('#accommodation_geo_x_en').val(),
                                    accommodation_geo_y: $('#accommodation_geo_y_en').val(),
                                    accommodation_info_tel: $('#accommodation_info_tel_en').val(),
                                    accommodation_info_website: $('#accommodation_info_website_en').val(),
                                    accommodation_info_email: $('#accommodation_info_email_en').val(),
                                    accommodation_social_facebook: $('#accommodation_social_facebook_en').val(),
                                    accommodation_social_instragram: $('#accommodation_social_instragram_en').val(),
                                    accommodation_social_youtube: $('#accommodation_social_youtube_en').val(),
                                    accommodation_book_via_hotels: $('#accommodation_book_via_hotels_en').val(),
                                    accommodation_book_via_agoda: $('#accommodation_book_via_agoda_en').val(),
                                    accommodation_book_via_booking: $('#accommodation_book_via_booking_en').val(),
                                    accommodation_start_price: $('#accommodation_start_price_en').val(),
                                    accommodation_top_price: $('#accommodation_top_price_en').val(),
                                    accommodation_cat: $('#accommodation_cat_en').val(),
                                    accommodation_name: $('#accommodation_name_en').val(),
                                    accommodation_address: $('#accommodation_address_en').val(),
                                    accommodation_details_80: $('#accommodation_details_80_en').val(),
                                    accommodation_details_200: $('#accommodation_details_200_en').val(),
                                    accommodation_details_long: $('#accommodation_details_long_en').val(),
                                    accommodation_review_ref_short: $('#accommodation_review_ref_short_en').val(),
                                    accommodation_review_ref_long: $('#accommodation_review_ref_long_en').val(),
                                    accommodation_around_dec: $('#accommodation_around_dec_en').val(),
                                    accommodation_distance_airport: $('#accommodation_distance_airport_en').val(),
                                    accommodation_distance_town: $('#accommodation_distance_town_en').val()
                                }
                    })
                    .done(function (msg)
                    {
                        //alert(msg);
                    });
        }
        
        window.open("accommodation.php", "_self"); 
    }

</script>


<?php
include_once 'footer.php';
