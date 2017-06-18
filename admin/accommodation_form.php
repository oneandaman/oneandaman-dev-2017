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
            <li><a href="accommodation.php">Accommodations</a></li>
            <li class="active">Create Form</li>
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
                        <div class="col-sm-2 text-left">สถานะ</div> 
                        <div class="col-sm-5 text-left"><div id="accommodation_status_th" ></div></div> 
                        <div class="col-sm-5 text-left">*สถานะของที่พัก(Enable/Disable)</div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ละติจูด</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_geo_x_th" /></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ลองติจูด</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_geo_y_th" /></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ชื่อสถานที่</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_name_th" /></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ที่อยู่</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_address_th" /></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">จังหวัด</div> 
                        <div class="col-sm-5 text-left"><div id='accommodation_province_id_th'></div></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อำเภอ</div> 
                        <div class="col-sm-5 text-left"><div id='accommodation_district_id_th'></div></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">รายละเอียด (80 ตัวอักษร)</div> 
                        <div class="col-sm-5 text-left"><textarea id="accommodation_details_80_th"></textarea></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">รายละเอียด (200 ตัวอักษร)</div> 
                        <div class="col-sm-5 text-left"><textarea id="accommodation_details_200_th"></textarea></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">คำอธิบาย</div> 
                        <div class="col-sm-5 text-left"><textarea id="accommodation_details_long_th"></textarea></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ราคาที่พักเริ่มต้น</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_start_price_th"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ราคาที่พักสูงสุด</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_top_price_th"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">เบอร์โทร</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_info_tel_th"></div> 
                        <div class="col-sm-5 text-left">(หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น และใช้รูปแบบ +66(0) 99999 9999 เช่น +66 2623 5500|+66(0) 83994 3565 เป็นต้น)</div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อีเมล</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_info_email_th"></div> 
                        <div class="col-sm-5 text-left">(หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น)</div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">เว็บไซต์</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_info_website_th"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">เพจเฟสบุ๊ค</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_social_facebook_th"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อินสตาแกรม</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_social_instragram_th"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ยูทูป</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_social_youtube_th"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">Book via hotels.com </div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_book_via_hotels_th"></div> 
                        <div class="col-sm-5 text-left">Link สำหรับจองที่พักผ่านเว็บไซต์ hotels.com</div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">Book via agoda.com</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_book_via_agoda_th"></div> 
                        <div class="col-sm-5 text-left">Link สำหรับจองที่พักผ่านเว็บไซต์ agoda.com</div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">Book via booking.com</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_book_via_booking_th"></div> 
                        <div class="col-sm-5 text-left">Link สำหรับจองที่พักผ่านเว็บไซต์ booking.com</div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อ้างอิงเนื่อหา (สั้น)</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_review_ref_short_th"></div> 
                        <div class="col-sm-5 text-left">Link ที่มาสั้นๆสำหรับแสดงผลหน้าเว็บไซต์ (หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น)</div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อ้างอิงเนื่อหา (ยาว)</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_review_ref_long_th"></div> 
                        <div class="col-sm-5 text-left">Link เต็ม สำหรับไปยังหน้าเว็บไซต์นั้นๆ (หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น)</div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">สิ่งรอบๆที่พัก</div> 
                        <div class="col-sm-5 text-left"><textarea id="accommodation_around_dec_th"></textarea></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ระยะทางจากทีพักถึงสนามบิน</div> 
                        <div class="col-sm-5 text-left"><textarea id="accommodation_distance_airport_th"></textarea></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ระยะทางจากทีพักถึงตัวเมือง</div> 
                        <div class="col-sm-5 text-left"><textarea id="accommodation_distance_town_th"></textarea></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ประเภทที่พัก</div> 
                        <div class="col-sm-5 text-left"><div id="accommodation_cat_th"></div></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อัพโหลดรูปภาพ</div> 
                        <div class="col-sm-5 text-left"><div id="accommodation_file_saved_name_th"></div></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ชื่อรูปภาพ</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_pic_alt_th"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">คำอธิบายรูปภาพ</div> 
                        <div class="col-sm-5 text-left"><textarea id="accommodation_pic_detail_th"></textarea></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>

                </div>
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
                        <div class="col-sm-5 text-left"><div id="accommodation_status_eng" ></div></div> 
                        <div class="col-sm-5 text-left">*สถานะของที่พัก(Enable/Disable)</div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ละติจูด</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_geo_x_eng" /></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ลองติจูด</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_geo_y_eng" /></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ชื่อสถานที่</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_name_eng" /></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ที่อยู่</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_address_eng" /></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">จังหวัด</div> 
                        <div class="col-sm-5 text-left"><div id='accommodation_province_id_eng'></div></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อำเภอ</div> 
                        <div class="col-sm-5 text-left"><div id='accommodation_district_id_eng'></div></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">รายละเอียด (80 ตัวอักษร)</div> 
                        <div class="col-sm-5 text-left"><textarea id="accommodation_details_80_eng"></textarea></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">รายละเอียด (200 ตัวอักษร)</div> 
                        <div class="col-sm-5 text-left"><textarea id="accommodation_details_200_eng"></textarea></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">คำอธิบาย</div> 
                        <div class="col-sm-5 text-left"><textarea id="accommodation_details_long_eng"></textarea></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ราคาที่พักเริ่มต้น</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_start_price_eng"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ราคาที่พักสูงสุด</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_top_price_eng"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>


                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">เบอร์โทร</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_info_tel_eng"></div> 
                        <div class="col-sm-5 text-left">(หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น และใช้รูปแบบ +66(0) 99999 9999 เช่น +66 2623 5500|+66(0) 83994 3565 เป็นต้น)</div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อีเมล</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_info_email_eng"></div> 
                        <div class="col-sm-5 text-left">(หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น)</div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">เว็บไซต์</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_info_website_eng"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">เพจเฟสบุ๊ค</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_social_facebook_eng"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อินสตาแกรม</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_social_instragram_eng"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ยูทูป</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_social_youtube_eng"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">Book via hotels.com</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_book_via_hotels_eng"></div> 
                        <div class="col-sm-5 text-left">Link สำหรับจองที่พักผ่านเว็บไซต์ hotels.com</div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">Book via agoda.com</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_book_via_agoda_eng"></div> 
                        <div class="col-sm-5 text-left">Link สำหรับจองที่พักผ่านเว็บไซต์ agoda.com</div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">Book via booking.com</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_book_via_booking_eng"></div> 
                        <div class="col-sm-5 text-left">Link สำหรับจองที่พักผ่านเว็บไซต์ booking.com</div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อ้างอิงเนื่อหา (สั้น)</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_review_ref_short_eng"></div> 
                        <div class="col-sm-5 text-left">Link ที่มาสั้นๆสำหรับแสดงผลหน้าเว็บไซต์ (หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น)</div>
                    </div>
                </div>


                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อ้างอิงเนื่อหา (ยาว)</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_review_ref_long_eng"></div> 
                        <div class="col-sm-5 text-left">Link เต็ม สำหรับไปยังหน้าเว็บไซต์นั้นๆ (หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น)</div>
                    </div>
                </div>


                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">สิ่งรอบๆที่พัก</div> 
                        <div class="col-sm-5 text-left"><textarea id="accommodation_around_dec_eng"></textarea></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ระยะทางจากทีพักถึงสนามบิน</div> 
                        <div class="col-sm-5 text-left"><textarea id="accommodation_distance_airport_eng"></textarea></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ระยะทางจากทีพักถึงตัวเมือง</div> 
                        <div class="col-sm-5 text-left"><textarea id="accommodation_distance_town_eng"></textarea></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>


                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ประเภทที่พัก</div> 
                        <div class="col-sm-5 text-left"><div id="accommodation_cat_eng"></div></div> 
                        <div class="col-sm-5 text-left">*</div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">อัพโหลดรูปภาพ</div> 
                        <div class="col-sm-5 text-left"><div id="accommodation_file_saved_name_eng"></div></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">ชื่อรูปภาพ</div> 
                        <div class="col-sm-5 text-left"><input type="text" id="accommodation_pic_alt_eng"></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left">คำอธิบายรูปภาพ</div> 
                        <div class="col-sm-5 text-left"><textarea id="accommodation_pic_detail_eng"></textarea></div> 
                        <div class="col-sm-5 text-left"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2 text-left"></div> 
                        <div class="col-sm-5 text-left"><button id="btn_save_en">Save</button></div> 
                        <div class="col-sm-5 text-left"></div>
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

                var accommodation_status_th_source = [
                    {text_status: "เปิดทำการ", value_status: "1"},
                    {text_status: "ปิดทำการ", value_status: "0"}
                ];
                $("#accommodation_status_th").jqxDropDownList({source: accommodation_status_th_source,displayMember:'text_status', valueMember:'value_status',  selectedIndex: 0, itemHeight: 30, width: '100%', height: 30, autoDropDownHeight: true, theme: theme});


                var accommodation_status_eng_source = 
                        [
                    {text_status: "Enable", value_status: "1"},
                    {text_status: "Disable", value_status: "0"}
                ];
                
                $("#accommodation_status_eng").jqxDropDownList({source: accommodation_status_eng_source,displayMember:'text_status', valueMember:'value_status', selectedIndex: 0, itemHeight: 30, width: '100%', height: 30, autoDropDownHeight: true, theme: theme});
                
                
                $("#accommodation_geo_x_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_geo_y_th").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#accommodation_geo_x_eng").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_geo_y_eng").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#accommodation_name_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_name_eng").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#accommodation_address_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_address_eng").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#accommodation_start_price_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_start_price_eng").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#accommodation_top_price_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_top_price_eng").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#accommodation_info_tel_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_info_tel_eng").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#accommodation_info_email_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_info_email_eng").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#accommodation_info_website_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_info_website_eng").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#accommodation_social_facebook_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_social_facebook_eng").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#accommodation_social_instragram_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_social_instragram_eng").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#accommodation_social_youtube_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_social_youtube_eng").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#accommodation_book_via_hotels_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_book_via_hotels_eng").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#accommodation_book_via_agoda_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_book_via_agoda_eng").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#accommodation_book_via_booking_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_book_via_booking_eng").jqxInput({height: 25, width: '98%', minLength: 1});


                $("#accommodation_review_ref_short_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_review_ref_short_eng").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#accommodation_review_ref_long_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_review_ref_long_eng").jqxInput({height: 25, width: '98%', minLength: 1});


                $('#accommodation_around_dec_th').jqxTextArea({height: 90, width: '100%', minLength: 1, maxLength: 200});
                $('#accommodation_around_dec_eng').jqxTextArea({height: 90, width: '100%', minLength: 1, maxLength: 200});


                $("#accommodation_distance_airport_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_distance_airport_eng").jqxInput({height: 25, width: '98%', minLength: 1});

                $("#accommodation_distance_town_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_distance_town_eng").jqxInput({height: 25, width: '98%', minLength: 1});


                $("#accommodation_details_80_th").jqxTextArea({height: 90, width: '100%', minLength: 1, maxLength: 80});
                $("#accommodation_details_80_eng").jqxTextArea({height: 90, width: '100%', minLength: 1, maxLength: 80});

                $("#accommodation_details_200_th").jqxTextArea({height: 90, width: '100%', minLength: 1, maxLength: 200});
                $("#accommodation_details_200_eng").jqxTextArea({height: 90, width: '100%', minLength: 1, maxLength: 200});

                $("#accommodation_details_long_th").jqxTextArea({height: 150, width: '100%', minLength: 1});
                $("#accommodation_details_long_eng").jqxTextArea({height: 150, width: '100%', minLength: 1});


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
                var accommodation_province_source_th = new $.jqx.dataAdapter(source_province_th);

                $("#accommodation_province_id_th").jqxDropDownList({source: accommodation_province_source_th, selectedIndex: 0,
                    itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true,
                    theme: theme, displayMember: 'province_name', valueMember: 'province_id'});

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
                                        lag: 'en'
                                    }
                        };
                var accommodation_province_source_th = new $.jqx.dataAdapter(source_province_th);

                $("#accommodation_province_id_eng").jqxDropDownList({source: accommodation_province_source_th, selectedIndex: 0,
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
                                        province_id: $("#accommodation_province_id_th").val()
                                    }
                        };
                var accommodation_district_source_th = new $.jqx.dataAdapter(source_district_th);

                $("#accommodation_district_id_th").jqxDropDownList({source: accommodation_district_source_th, selectedIndex: 0,
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
                                        province_id: $("#accommodation_province_id_eng").val()
                                    }
                        };
                var accommodation_district_source_en = new $.jqx.dataAdapter(source_district_en);
                $("#accommodation_district_id_eng").jqxDropDownList({source: accommodation_district_source_en, selectedIndex: 0,
                    itemHeight: 30, width: '100%', height: '30', dropDownHeight: 200,
                    theme: theme, displayMember: 'district_name', valueMember: 'district_id'});


                var source_th =
                        {

                            datatype: "json",
                            datafields: [
                                {name: 'accommodation_type_tag_list_id'},
                                {name: 'accommodation_type_tag'}
                            ],

                            url: url,
                            async: false,
                            type: 'POST',
                            data:
                                    {
                                        fc: 'get_accommodation_type_tag_list',
                                        lag: 'th'
                                    }
                        };

                var accommodation_type_tag_source_th = new $.jqx.dataAdapter(source_th);
                $("#accommodation_cat_th").jqxDropDownList({source: accommodation_type_tag_source_th, selectedIndex: 0, itemHeight: 30,
                    width: '100%', height: '30', dropDownHeight: 200, theme: theme,
                    displayMember: 'accommodation_type_tag', valueMember: 'accommodation_type_tag_list_id'});


                var source_en =
                        {

                            datatype: "json",
                            datafields: [
                                {name: 'accommodation_type_tag_list_id'},
                                {name: 'accommodation_type_tag'}
                            ],

                            url: url,
                            async: false,
                            type: 'POST',
                            data:
                                    {
                                        fc: 'get_accommodation_type_tag_list',
                                        lag: 'en'
                                    }
                        };

                var accommodation_type_tag_source_en = new $.jqx.dataAdapter(source_en);
                // Create a jqxDropDownList
                $("#accommodation_cat_eng").jqxDropDownList({source: accommodation_type_tag_source_en, selectedIndex: 0, itemHeight: 30,
                    width: '100%', height: '30', dropDownHeight: 200, theme: theme,
                    displayMember: 'accommodation_type_tag', valueMember: 'accommodation_type_tag_list_id'});


                // Table : accommodation_pic
                $('#accommodation_file_saved_name_th').jqxFileUpload({width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload'});
                $('#accommodation_file_saved_name_eng').jqxFileUpload({width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload'});

                $("#accommodation_pic_alt_th").jqxInput({height: 25, width: '98%', minLength: 1});
                $("#accommodation_pic_alt_eng").jqxInput({height: 25, width: '98%', minLength: 1});

                $('#accommodation_pic_detail_th').jqxTextArea({height: 150, width: '100%', minLength: 1});
                $('#accommodation_pic_detail_eng').jqxTextArea({height: 150, width: '100%', minLength: 1});


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



                $('#accommodation_province_id_th').on('change', function (event)
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
                                            province_id: $("#accommodation_province_id_th").val()
                                        }
                            };
                    var accommodation_district_source_th = new $.jqx.dataAdapter(source_district_th);
                    $("#accommodation_district_id_th").jqxDropDownList({source: accommodation_district_source_th});
                });

                $('#accommodation_province_id_eng').on('change', function (event)
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
                                            province_id: $("#accommodation_province_id_eng").val()
                                        }
                            };
                    var accommodation_district_source_en = new $.jqx.dataAdapter(source_district_en);
                    $("#accommodation_district_id_eng").jqxDropDownList({source: accommodation_district_source_en});
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
    }//End Check Time Out
}//End Check Session
else
{
    ?>
    <meta http-equiv='refresh' content='0;URL=login.php'>
    <?php
}
