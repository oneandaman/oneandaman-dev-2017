<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Template</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- jQWidgets CSS -->
        <link rel="stylesheet" href="../jqwidgets/styles/jqx.base.css" type="text/css" />
        <link href="../jqwidgets/styles/jqx.energyblue.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap core CSS -->
        <link href="../styles/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link href="../styles/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Ionicons -->
        <link href="../ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link href="../dist/css/skins/skin-blue.css" rel="stylesheet" type="text/css"/>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="../html5shiv/dist/html5shiv.min.js" type="text/javascript"></script>
        <script src="../Respond/dest/respond.min.js" type="text/javascript"></script>
        <![endif]-->
        <link href="../styles/style.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <section class="content">
            <!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
            <!-- Main row -->
            <div class="row">
                <div class="col-sm-12"></div>
            </div>



            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">สถานะ</div> 
                    <div class="col-sm-7 text-left"><div id="destination_status_th" ></div></div> 
                </div>
                <div class="col-sm-2"> </div>
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Status</div> 
                    <div class="col-sm-7 text-left"><div id="destination_status_eng" ></div></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">ละติจูด</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_geo_x_th" /></div> 
                </div>
                <div class="col-sm-2"> </div>
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Latitude</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_geo_x_eng" /></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">ลองติจูด</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_geo_y_th" /></div> 
                </div>
                <div class="col-sm-2"> </div>
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Longtitude</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_geo_y_eng" /></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">ประเภทเส้นทางท่องเที่ยว</div> 
                    <div class="col-sm-7 text-left"><div id='destination_route_cat_th'></div></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Travel Route</div> 
                    <div class="col-sm-7 text-left"><div id='destination_route_cat_eng'></div></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">ชื่อสถานที่</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_name_th" /></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Destination Name</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_name_eng" /></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">ที่อยู่</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_address_th" /></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Destination Address</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_address_eng" /></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">จังหวัด</div> 
                    <div class="col-sm-7 text-left"><div id='destination_province_th'></div></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Province</div> 
                    <div class="col-sm-7 text-left"><div id='destination_province_eng'></div></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">ตำบล</div> 
                    <div class="col-sm-7 text-left"><div id='destination_district_th'></div></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">District</div> 
                    <div class="col-sm-7 text-left"><div id='destination_district_eng'></div></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">รายละเอียดสถานที่ (80 ตัวอักษร)</div> 
                    <div class="col-sm-7 text-left"><textarea id="destination_details_80_th"></textarea></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Destination Details (80 Charecters)</div> 
                    <div class="col-sm-7 text-left"><textarea id="destination_details_80_eng"></textarea></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">รายละเอียดสถานที่ (200 ตัวอักษร)</div> 
                    <div class="col-sm-7 text-left"><textarea id="destination_details_200_th"></textarea></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Destination Details (200 Charecters)</div> 
                    <div class="col-sm-7 text-left"><textarea id="destination_details_200_eng"></textarea></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">คำอธิบาย</div> 
                    <div class="col-sm-7 text-left"><textarea id="destination_details_long_th"></textarea></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Detail</div> 
                    <div class="col-sm-7 text-left"><textarea id="destination_details_long_eng"></textarea></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">เวลา เปิด-ปิด</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_open_hour_th"></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Open Hour</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_open_hour_eng"><!-- <div id='destination_open_hour_eng'></div> --></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">ค่าเข้าชม (ชาวไทย)</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_fee_th_th"></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Fee (Thai People)</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_fee_th_eng"><!-- <div id='destination_open_hour_eng'></div> --></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">ค่าเข้าชม (ชาวต่างชาติ)</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_fee_en_th"></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Fee (Foreigner)</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_fee_en_eng"><!-- <div id='destination_open_hour_eng'></div> --></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">ฤดูกาลสำหรับท่องเที่ยว</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_visit_season_th"></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Season</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_visit_season_eng"></div> 
                </div>
            </div>


            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">เบอร์โทร (ใช้ | เป็นตัวคั่น)</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_info_tel_th"></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Telephone Number</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_info_tel_eng"></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">เบอร์แฟกซ์</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_info_fax_th"></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Fax No</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_info_fax_eng"></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">อีเมล (ใช้ | เป็นตัวคั่น)</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_info_email_th"></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Email</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_info_email_eng"></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">เว็บไซต์</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_info_website_th"></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Website</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_info_website_eng"></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">เพจเฟสบุ๊ค</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_social_facebook_th"></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Facebook Page</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_social_facebook_eng"></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">อินสตาแกรม</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_social_instragram_th"></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Instragram</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_social_instragram_eng"></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">ยูทูป</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_social_youtube_th"></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Youtube</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_social_youtube_eng"></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Link ที่แสดงหน้าเว็บ (ใช้ | คั่น)</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_content_ref_short_th"></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Link ที่แสดงหน้าเว็บ</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_content_ref_short_eng"></div> 
                </div>
            </div>


            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Link (ใช้ | เป็นตัวคั่น)</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_content_ref_long_th"></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Link</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_content_ref_long_eng"></div> 
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">ประเภทกิจกรรม</div> 
                    <div class="col-sm-7 text-left"><div id="destination_activity_tags_id_th"></div></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Activity Tags</div> 
                    <div class="col-sm-7 text-left"><div id="destination_activity_tags_id_eng"></div></div> 
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Destination Type Tags</div> 
                    <div class="col-sm-7 text-left"><div id="destination_type_tags_id_th"></div></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Destination Type Tags</div> 
                    <div class="col-sm-7 text-left"><div id="destination_type_tags_id_eng"></div></div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">อัพโหลดรูปภาพ</div> 
                    <div class="col-sm-7 text-left"><div id="file_saved_name_th"></div></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Upload Picture</div> 
                    <div class="col-sm-7 text-left"><div id="file_saved_name_eng"></div></div> 
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">ชื่อไฟล์</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="file_display_name_th"></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">File Name</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="file_display_name_eng"></div> 
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">ชื่อรูปภาพ (ALt)</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_pic_alt_th"></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Picture Name (ALt)</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="destination_pic_alt_eng"></div> 
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">คำอธิบายรูปภาพ</div> 
                    <div class="col-sm-7 text-left"><textarea id="destination_pic_detail_th"></textarea></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Picture Detail</div> 
                    <div class="col-sm-7 text-left"><textarea id="destination_pic_detail_eng"></textarea></div> 
                </div>
            </div>
            
            
            

            <!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        </section>


        <!-- Bootstrap 3.3.6 -->
        <script type="text/javascript" src="../scripts/jquery-1.11.1.min.js"></script>
        <script src="../jqwidgets/jqx-all.js" type="text/javascript"></script>

        <script src="../scripts/bootstrap.min.js" type="text/javascript"></script>
        <script src="../dist/js/app.min.js"></script>

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

                var destination_route_cat_th_source = [
                    "-",
                    "ประเภท 01",
                    "ประเภท 02",
                    "ประเภท 03"
                ];
                $("#destination_route_cat_th").jqxDropDownList({source: destination_route_cat_th_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});

                var destination_route_cat_eng_source = [
                    "-",
                    "Category Code 01",
                    "Category Code 02",
                    "Category Code 03"
                ];
                $("#destination_route_cat_eng").jqxDropDownList({source: destination_route_cat_eng_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});

                $("#destination_name_th").jqxInput({placeHolder: "ชื่อสถานที่", height: 25, width: '98%', minLength: 1});
                $("#destination_name_eng").jqxInput({placeHolder: "Name", height: 25, width: '98%', minLength: 1});

                $("#destination_address_th").jqxInput({placeHolder: "ที่อยู่", height: 25, width: '98%', minLength: 1});
                $("#destination_address_eng").jqxInput({placeHolder: "Address", height: 25, width: '98%', minLength: 1});

                var destination_province_th_source = [
                    "-",
                    "พงงา",
                    "ภูเก็ต"
                ];
                $("#destination_province_th").jqxDropDownList({source: destination_province_th_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});

                var destination_province_eng_source = [
                    "-",
                    "Phang Nga",
                    "Phuket"
                ];
                $("#destination_province_eng").jqxDropDownList({source: destination_province_eng_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});

                var destination_district_th_source = [
                    "-",
                    "กะทู้",
                    "ฉลอง"
                ];
                $("#destination_district_th").jqxDropDownList({source: destination_district_th_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});

                var destination_district_eng_source = [
                    "-",
                    "Kathu",
                    "Chalong"
                ];
                $("#destination_district_eng").jqxDropDownList({source: destination_district_eng_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});


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

                $("#destination_fee_th_th").jqxInput({placeHolder: "ค่าเข้าชม (ชาวไทย)", height: 25, width: '98%', minLength: 1});
                $("#destination_fee_th_eng").jqxInput({placeHolder: "Fee (Thai People)", height: 25, width: '98%', minLength: 1});

                $("#destination_fee_en_th").jqxInput({placeHolder: "ค่าเข้าชม (ชาวต่างชาติ)", height: 25, width: '98%', minLength: 1});
                $("#destination_fee_en_eng").jqxInput({placeHolder: "Fee (Foreigner )", height: 25, width: '98%', minLength: 1});

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

                var destination_activity_tags_id_th_source = [{
                        text: "ท่องเที่ยวตามธรรมชาติ",
                        value: 1
                    }, {
                        text: "เส้นทางจักรยาน",
                        value: 2
                    }, {
                        text: "กิจกรรมผาดโผน",
                        value: 3
                    }];

                // Create a jqxDropDownList
                $("#destination_activity_tags_id_th").jqxDropDownList({checkboxes: true, source: destination_activity_tags_id_th_source, displayMember: "text", valueMember: "value", width: '100%',height: 30 ,itemHeight: 30});
                $("#destination_activity_tags_id_th").jqxDropDownList('checkIndex', 0);

                
                var destination_activity_tags_id_eng_source = [{
                        text: "Eco Tours",
                        value: 1
                    }, {
                        text: "Biking Trails",
                        value: 2
                    }, {
                        text: "Farms",
                        value: 3
                    }];

                // Create a jqxDropDownList
                $("#destination_activity_tags_id_eng").jqxDropDownList({checkboxes: true, source: destination_activity_tags_id_eng_source, displayMember: "text", valueMember: "value", width: '100%',height: 30 ,itemHeight: 30});
                $("#destination_activity_tags_id_eng").jqxDropDownList('checkIndex', 0);

                
                var destination_type_tags_id_th_source = [{
                        text: "ชายหาด",
                        value: 1
                    }, {
                        text: "ประภาคาร",
                        value: 2
                    }];

                // Create a jqxDropDownList
                $("#destination_type_tags_id_th").jqxDropDownList({checkboxes: true, source: destination_type_tags_id_th_source, displayMember: "text", valueMember: "value", width: '100%',height: 30 ,itemHeight: 30});
                $("#destination_type_tags_id_th").jqxDropDownList('checkIndex', 0);
                
                
                var destination_type_tags_id_eng_source = [{
                        text: "Beach",
                        value: 1
                    }, {
                        text: "Lighthouse",
                        value: 2
                    }];

                // Create a jqxDropDownList
                $("#destination_type_tags_id_eng").jqxDropDownList({checkboxes: true, source: destination_type_tags_id_eng_source, displayMember: "text", valueMember: "value", width: '100%',height: 30 ,itemHeight: 30});
                $("#destination_type_tags_id_eng").jqxDropDownList('checkIndex', 0);
                
                
                // Table : destination_pic
                $('#file_saved_name_th').jqxFileUpload({ width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload' });
                $('#file_saved_name_eng').jqxFileUpload({ width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload' });
                
                
                $("#file_display_name_th").jqxInput({placeHolder: "ชื่อไฟล์", height: 25, width: '98%', minLength: 1});
                $("#file_display_name_eng").jqxInput({placeHolder: "File Name", height: 25, width: '98%', minLength: 1});
                
                $("#destination_pic_alt_th").jqxInput({placeHolder: "ชื่อรูปภาพ สำหรับใส่ใน Tag(ALt)", height: 25, width: '98%', minLength: 1});
                $("#destination_pic_alt_eng").jqxInput({placeHolder: "Picture Name (ALt)", height: 25, width: '98%', minLength: 1});
                
                $('#destination_pic_detail_th').jqxTextArea({placeHolder: 'คำอธิบายรูปภาพ', height: 150, width: '100%', minLength: 1});
                $('#destination_pic_detail_eng').jqxTextArea({placeHolder: 'Picture Detail', height: 150, width: '100%', minLength: 1});
                
                
                // จบใส่ javascript
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            });
        </script>


    </body>
</html>
