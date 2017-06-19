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
        <h3>
            Create Form
        </h3>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="destination.php">Destinations</a></li>
            <li class="active">Create Form</li>
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
                        <div class="col-sm-2 text-left">สถานะ</div> 
                        <div class="col-sm-5 text-left"><div id="destination_status_th" ></div></div> 
                        <div class="col-sm-5 text-left">*สถานะของสถานที่(Enable/Disable)</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ละติจูด</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_geo_x_th" /></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ลองติจูด</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_geo_y_th" /></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ชื่อสถานที่</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_name_th" /></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ประเภทแหล่งท่องเที่ยว</div> 
                        <div class="col-sm-5 text-left"><div id="destination_cat_th"></div></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">กิจกรรมแหล่งท่องเที่ยว</div> 
                        <div class="col-sm-5 text-left"><div id="destination_activity_th"></div></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ที่อยู่</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_address_th" /></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">จังหวัด</div> 
                        <div class="col-sm-5 text-left"><div id='destination_province_id_th'></div></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อำเภอ</div> 
                        <div class="col-sm-5 text-left"><div id='destination_district_id_th'></div></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">รายละเอียด (80 ตัวอักษร)</div> 
                        <div class="col-sm-5 text-left"><textarea id="destination_details_80_th"></textarea></div> 
                        <div class="col-sm-5 text-left">*ยังไม่รองรับเครื่องหมาย (')</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">รายละเอียด (200 ตัวอักษร)</div> 
                        <div class="col-sm-5 text-left"><textarea id="destination_details_200_th"></textarea></div> 
                        <div class="col-sm-5 text-left">*ยังไม่รองรับเครื่องหมาย (')</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">คำอธิบาย</div> 
                        <div class="col-sm-5 text-left"><textarea id="destination_details_long_th"></textarea></div> 
                        <div class="col-sm-5 text-left">*ยังไม่รองรับเครื่องหมาย (')</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">เวลาเปิด-ปิด</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_open_hour_th"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ค่าเข้าชม</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_fee_th"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ฤดูกาลสำหรับท่องเที่ยว</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_visit_season_th"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">เบอร์โทร</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_info_tel_th"></div> 
                        <div class="col-sm-5 text-left">(หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น และใช้รูปแบบ +66(0) 99999 9999 เช่น +66 2623 5500 |+66(0) 83994 3565 เป็นต้น)</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">เบอร์แฟกซ์</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_info_fax_th"></div>
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อีเมล</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_info_email_th"></div> 
                        <div class="col-sm-5 text-left">(หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น)</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">เว็บไซต์</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_info_website_th"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">เพจเฟสบุ๊ค</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_social_facebook_th"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อินสตาแกรม</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_social_instragram_th"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ยูทูป</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_social_youtube_th"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อ้างอิงเนื่อหา#1</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_content_ref_1_th"></div> 
                        <div class="col-sm-5 text-left">Link ที่มาสำหรับแสดงผลหน้าเว็บไซต์</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อ้างอิงเนื่อหา#2</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_content_ref_2_th"></div> 
                        <div class="col-sm-5 text-left">Link ที่มาสำหรับแสดงผลหน้าเว็บไซต์</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อ้างอิงเนื่อหา#3</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_content_ref_3_th"></div> 
                        <div class="col-sm-5 text-left">Link ที่มาสำหรับแสดงผลหน้าเว็บไซต์</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อ้างอิงเนื่อหา#4</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_content_ref_4_th"></div> 
                        <div class="col-sm-5 text-left">Link ที่มาสำหรับแสดงผลหน้าเว็บไซต์</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อ้างอิงเนื่อหา#5</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_content_ref_5_th"></div> 
                        <div class="col-sm-5 text-left">Link ที่มาสำหรับแสดงผลหน้าเว็บไซต์</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ปรับปรุงล่าสุด</div> 
                        <div class="col-sm-5 text-left"><div id="destination_update_th"></div></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <!--
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อัพโหลดรูปภาพ</div> 
                        <div class="col-sm-5 text-left"><div id="destination_file_saved_name_th"></div></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ชื่อรูปภาพ</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_pic_alt_th"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">คำอธิบายรูปภาพ</div> 
                        <div class="col-sm-5 text-left"><textarea id="destination_pic_detail_th"></textarea></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>
                -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left"></div> 
                        <div class="col-sm-5 text-left"><button id="btn_save_th">บันทึก</button></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>

            </div>
            <div><!-- English Tab-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">สถานะ</div> 
                        <div class="col-sm-5 text-left"><div id="destination_status_en" ></div></div> 
                        <div class="col-sm-5 text-left">*สถานะของสถานที่(Enable/Disable)</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ละติจูด</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_geo_x_en" /></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ลองติจูด</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_geo_y_en" /></div>
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ชื่อสถานที่</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_name_en" /></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ประเภทแหล่งท่องเที่ยว</div> 
                        <div class="col-sm-5 text-left"><div id="destination_cat_en"></div></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">กิจกรรมแหล่งท่องเที่ยว</div> 
                        <div class="col-sm-5 text-left"><div id="destination_activity_en"></div></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ที่อยู่</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_address_en" /></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">จังหวัด</div> 
                        <div class="col-sm-5 text-left"><div id='destination_province_id_en'></div></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อำเภอ</div> 
                        <div class="col-sm-5 text-left"><div id='destination_district_id_en'></div></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">รายละเอียด (80 ตัวอักษร)</div> 
                        <div class="col-sm-5 text-left"><textarea id="destination_details_80_en"></textarea></div> 
                        <div class="col-sm-5 text-left">*ยังไม่รองรับเครื่องหมาย (')</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">รายละเอียด (200 ตัวอักษร)</div> 
                        <div class="col-sm-5 text-left"><textarea id="destination_details_200_en"></textarea></div> 
                        <div class="col-sm-5 text-left">*ยังไม่รองรับเครื่องหมาย (')</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">คำอธิบาย</div> 
                        <div class="col-sm-5 text-left"><textarea id="destination_details_long_en"></textarea></div> 
                        <div class="col-sm-5 text-left">*ยังไม่รองรับเครื่องหมาย (')</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">เวลาเปิด-ปิด</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_open_hour_en"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ค่าเข้าชม</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_fee_en"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ฤดูกาลสำหรับท่องเที่ยว</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_visit_season_en"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">เบอร์โทร</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_info_tel_en"></div> 
                        <div class="col-sm-5 text-left">(หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น และใช้รูปแบบ +66(0) 99999 9999 เช่น +66 2623 5500 |+66(0) 83994 3565 เป็นต้น)</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">เบอร์แฟกซ์</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_info_fax_en"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อีเมล</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_info_email_en"></div> 
                        <div class="col-sm-5 text-left">(หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น)</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">เว็บไซต์</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_info_website_en"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">เพจเฟสบุ๊ค</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_social_facebook_en"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อินสตาแกรม</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_social_instragram_en"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ยูทูป</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_social_youtube_en"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อ้างอิงเนื่อหา#1</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_content_ref_1_en"></div> 
                        <div class="col-sm-5 text-left">Link ที่มาสำหรับแสดงผลหน้าเว็บไซต์</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อ้างอิงเนื่อหา#2</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_content_ref_2_en"></div> 
                        <div class="col-sm-5 text-left">Link ที่มาสำหรับแสดงผลหน้าเว็บไซต์</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อ้างอิงเนื่อหา#3</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_content_ref_3_en"></div> 
                        <div class="col-sm-5 text-left">Link ที่มาสำหรับแสดงผลหน้าเว็บไซต์</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อ้างอิงเนื่อหา#4</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_content_ref_4_en"></div> 
                        <div class="col-sm-5 text-left">Link ที่มาสำหรับแสดงผลหน้าเว็บไซต์</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อ้างอิงเนื่อหา#5</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_content_ref_5_en"></div> 
                        <div class="col-sm-5 text-left">Link ที่มาสำหรับแสดงผลหน้าเว็บไซต์</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ปรับปรุงล่าสุด</div> 
                        <div class="col-sm-5 text-left"><div id="destination_update_en"></div></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <!--
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อัพโหลดรูปภาพ</div> 
                        <div class="col-sm-5 text-left"><div id="destination_file_saved_name_en"></div></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ชื่อรูปภาพ</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="destination_pic_alt_en"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">คำอธิบายรูปภาพ</div> 
                        <div class="col-sm-5 text-left"><textarea id="destination_pic_detail_en"></textarea></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left"></div> 
                        <div class="col-sm-5 text-left"><button id="btn_save_en">Save</button></div> 
                        <div class="col-sm-5 text-left"></div>
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
                var url = "database/query.php";
                var theme = 'energyblue';

                var destination_status_th_source = [
                    {text_status: "เปิดทำการ", value_status: "1"},
                    {text_status: "ปิดทำการ", value_status: "0"}
                ];
                $("#destination_status_th").jqxDropDownList({source: destination_status_th_source,displayMember:'text_status', valueMember:'value_status',  selectedIndex: 0, itemHeight: 30, width: '100%', height: 30, autoDropDownHeight: true, theme: theme});


                var destination_status_eng_source = 
                        [
                    {text_status: "Enable", value_status: "1"},
                    {text_status: "Disable", value_status: "0"}
                ];
                
                $("#destination_status_en").jqxDropDownList({source: destination_status_eng_source,displayMember:'text_status', valueMember:'value_status', selectedIndex: 0, itemHeight: 30, width: '100%', height: 30, autoDropDownHeight: true, theme: theme});
                
                
                $("#destination_geo_x_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_geo_y_th").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#destination_geo_x_en").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_geo_y_en").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#destination_name_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_name_en").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#destination_address_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_address_en").jqxInput({height: 25, width: '98%', minLength: 1});


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

                $("#destination_province_id_th").jqxDropDownList({source: province_source_th, selectedIndex: 0,
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

                $("#destination_province_id_en").jqxDropDownList({source: province_source_en, selectedIndex: 0,
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
                                        province_id: $("#destination_province_id_th").val()
                                    }
                        };
                var district_source_th = new $.jqx.dataAdapter(source_district_th);

                $("#destination_district_id_th").jqxDropDownList({source: district_source_th, selectedIndex: 0,
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
                                        province_id: $("#destination_province_id_en").val()
                                    }
                        };
                var district_source_en = new $.jqx.dataAdapter(source_district_en);

                $("#destination_district_id_en").jqxDropDownList({source: district_source_en, selectedIndex: 0,
                    itemHeight: 30, width: '100%', height: '30', dropDownHeight: 200,
                    theme: theme, displayMember: 'district_name', valueMember: 'district_id'});

                $('#destination_details_80_th').jqxEditor({height: 200, width: '100%', theme: theme});
                $('#destination_details_80_en').jqxEditor({height: 200, width: '100%', theme: theme});

                $('#destination_details_200_th').jqxEditor({height: 250, width: '100%', theme: theme});
                $('#destination_details_200_en').jqxEditor({height: 250, width: '100%', theme: theme});

                $('#destination_details_long_th').jqxEditor({height: 250, width: '100%', theme: theme});
                $('#destination_details_long_en').jqxEditor({height: 250, width: '100%', theme: theme});

                $("#destination_open_hour_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_open_hour_en").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#destination_fee_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_fee_en").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#destination_visit_season_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_visit_season_en").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#destination_info_tel_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_info_tel_en").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#destination_info_fax_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_info_fax_en").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#destination_info_email_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_info_email_en").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#destination_info_website_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_info_website_en").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#destination_social_facebook_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_social_facebook_en").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#destination_social_instragram_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_social_instragram_en").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#destination_social_youtube_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_social_youtube_en").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#destination_content_ref_1_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_content_ref_1_en").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#destination_content_ref_2_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_content_ref_2_en").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#destination_content_ref_3_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_content_ref_3_en").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#destination_content_ref_4_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_content_ref_4_en").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#destination_content_ref_5_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#destination_content_ref_5_en").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#destination_update_th").jqxDateTimeInput({width: '300px', height: '25px', formatString: 'yyyy-MM-dd'});
                $("#destination_update_en").jqxDateTimeInput({width: '300px', height: '25px', formatString: 'yyyy-MM-dd'});

                var destination_cat_th_source =
                        {
                            datatype: "json",
                            datafields: [
                                {name: 'destination_type_tag_list_id'},
                                {name: 'destination_type_tag'}
                            ],
                            url: url,
                            async: false,
                            type: 'POST',
                            data:
                                    {
                                        fc: 'get_destination_type_tag',
                                        lag: 'th'
                                    }
                        };
                var destination_cat_th = new $.jqx.dataAdapter(destination_cat_th_source);

                $("#destination_cat_th").jqxDropDownList({checkboxes: true, source: destination_cat_th, displayMember: "destination_type_tag",
                    valueMember: "destination_type_tag_list_id", itemHeight: 30, width: '100%', height: '30', dropDownHeight: 200,
                    theme: theme});
                $("#destination_cat_th").jqxDropDownList('checkIndex', 0);

                var destination_cat_eng_source =
                        {
                            datatype: "json",
                            datafields: [
                                {name: 'destination_type_tag_list_id'},
                                {name: 'destination_type_tag'}
                            ],
                            url: url,
                            async: false,
                            type: 'POST',
                            data:
                                    {
                                        fc: 'get_destination_type_tag',
                                        lag: 'en'
                                    }
                        };
                var destination_cat_en = new $.jqx.dataAdapter(destination_cat_eng_source);

                $("#destination_cat_en").jqxDropDownList({checkboxes: true, source: destination_cat_en, displayMember: "destination_type_tag",
                    valueMember: "destination_type_tag_list_id", itemHeight: 30, width: '100%', height: '30', dropDownHeight: 200,
                    theme: theme});
                $("#destination_cat_en").jqxDropDownList('checkIndex', 0);







                var destination_activity_th_source =
                        {
                            datatype: "json",
                            datafields: [
                                {name: 'destination_activity_tag_list_id'},
                                {name: 'destination_activity_tag'}
                            ],
                            url: url,
                            async: false,
                            type: 'POST',
                            data:
                                    {
                                        fc: 'get_destination_activity_tag',
                                        lag: 'th'
                                    }
                        };
                var destination_activity_th = new $.jqx.dataAdapter(destination_activity_th_source);

                $("#destination_activity_th").jqxDropDownList({checkboxes: true, source: destination_activity_th, displayMember: "destination_activity_tag",
                    valueMember: "destination_activity_tag_list_id", itemHeight: 30, width: '100%', height: '30', dropDownHeight: 200,
                    theme: theme});
                $("#destination_activity_th").jqxDropDownList('checkIndex', 0);


                var destination_activity_eng_source =
                        {
                            datatype: "json",
                            datafields: [
                                {name: 'destination_activity_tag_list_id'},
                                {name: 'destination_activity_tag'}
                            ],
                            url: url,
                            async: false,
                            type: 'POST',
                            data:
                                    {
                                        fc: 'get_destination_activity_tag',
                                        lag: 'en'
                                    }
                        };
                var destination_activity_en = new $.jqx.dataAdapter(destination_activity_eng_source);

                $("#destination_activity_en").jqxDropDownList({checkboxes: true, source: destination_activity_en, displayMember: "destination_activity_tag",
                    valueMember: "destination_activity_tag_list_id", itemHeight: 30, width: '100%', height: '30', dropDownHeight: 200,
                    theme: theme});
                $("#destination_activity_en").jqxDropDownList('checkIndex', 0);








                // Table : destination_pic
                /*
                 $('#destination_file_saved_name_th').jqxFileUpload({width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload'});
                 $('#destination_file_saved_name_en').jqxFileUpload({width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload'});
                 
                 $("#destination_pic_alt_th").jqxInput({height: 25, width: '98%', minLength: 1});
                 $("#destination_pic_alt_en").jqxInput({height: 25, width: '98%', minLength: 1});
                 
                 $('#destination_pic_detail_th').jqxTextArea({height: 150, width: '100%', minLength: 1});
                 $('#destination_pic_detail_en').jqxTextArea({height: 150, width: '100%', minLength: 1});
                 */

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

                $('#destination_province_id_th').on('change', function (event)
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
                                            province_id: $("#destination_province_id_th").val()
                                        }
                            };
                    var district_source_th = new $.jqx.dataAdapter(source_district_th);

                    $("#destination_district_id_th").jqxDropDownList({source: district_source_th});
                });

                $('#destination_province_id_en').on('change', function (event)
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
                                            province_id: $("#destination_province_id_en").val()
                                        }
                            };
                    var district_source_en = new $.jqx.dataAdapter(source_district_en);

                    $("#destination_district_id_en").jqxDropDownList({source: district_source_en});
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
                                            destination_content_ref_1: $('#destination_content_ref_1_th').val(),
                                            destination_content_ref_2: $('#destination_content_ref_2_th').val(),
                                            destination_content_ref_3: $('#destination_content_ref_3_th').val(),
                                            destination_content_ref_4: $('#destination_content_ref_4_th').val(),
                                            destination_content_ref_5: $('#destination_content_ref_5_th').val(),
                                            destination_update: $('#destination_update_th').val(),
                                            destination_activity: $('#destination_activity_th').val()
                                        }
                            })
                            .done(function (msg)
                            {
                                //alert(msg);
                            });
                }
                else if (lang === 'en')
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
                                            destination_content_ref_long: $('#destination_content_ref_long_en').val(),
                                            destination_content_ref_1: $('#destination_content_ref_1_en').val(),
                                            destination_content_ref_2: $('#destination_content_ref_2_en').val(),
                                            destination_content_ref_3: $('#destination_content_ref_3_en').val(),
                                            destination_content_ref_4: $('#destination_content_ref_4_en').val(),
                                            destination_content_ref_5: $('#destination_content_ref_5_en').val(),
                                            destination_update: $('#destination_update_en').val(),
                                            destination_activity: $('#destination_activity_en').val()
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
    }//End Check Time Out
}//End Check Session
else
{
    ?>
    <meta http-equiv='refresh' content='0;URL=login.php'>
    <?php
}