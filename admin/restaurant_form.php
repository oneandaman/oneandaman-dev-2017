<?php
include_once 'header.php';
?>
<h3>
    Create Form
</h3>
<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="restaurant.php">Restaurants</a></li>
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
                <div class="col-sm-3 text-left">สถานะ</div> 
                <div class="col-sm-6 text-left"><div id="restaurant_status_th" ></div></div> 
                <div class="col-sm-3 text-left">*สถานะของร้าน (enable/disable)</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ละติจูด</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_geo_x_th" /></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ลองติจูด</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_geo_y_th" /></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ประเภทร้านอาหาร </div> 
                <div class="col-sm-6 text-left"><div id='restaurant_cat_th'></div></div> 
                <div class="col-sm-3 text-left">*</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ชื่อสถานที่</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_name_th" /></div> 
                <div class="col-sm-3 text-left">*</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ที่อยู่</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_address_th" /></div> 
                <div class="col-sm-3 text-left">*</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">จังหวัด</div> 
                <div class="col-sm-6 text-left"><div id='restaurant_province_id_th'></div></div> 
                <div class="col-sm-3 text-left">*</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อำเภอ</div> 
                <div class="col-sm-6 text-left"><div id='restaurant_district_id_th'></div></div> 
                <div class="col-sm-3 text-left">*</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">รายละเอียด (80 ตัวอักษร)</div> 
                <div class="col-sm-6 text-left"><textarea id="restaurant_details_80_th"></textarea></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">รายละเอียด (200 ตัวอักษร)</div> 
                <div class="col-sm-6 text-left"><textarea id="restaurant_details_200_th"></textarea></div>
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">คำอธิบาย</div> 
                <div class="col-sm-6 text-left"><textarea id="restaurant_details_long_th"></textarea></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">เวลาเปิด-ปิด</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_open_hour_th"></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">เบอร์โทร</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_info_tel_th"></div> 
                <div class="col-sm-3 text-left">(หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น และใช้รูปแบบ +66(0) 99999 9999 เช่น +66 2623 5500 ext.3100|+66(0) 83994 3565 เป็นต้น)</div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">เว็บไซต์</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_info_website_th"></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อีเมล</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_info_email_th"></div> 
                <div class="col-sm-3 text-left">(หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น)</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">เพจเฟสบุ๊ค</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_social_facebook_th"></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อินสตาแกรม</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_social_instragram_th"></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ยูทูป</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_social_youtube_th"></div> 
                 <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อ้างอิงเนื่อหา (สั้น)</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_review_ref_short_th"></div> 
                <div class="col-sm-3 text-left">Link ที่มาสั้นๆสำหรับแสดงผลหน้าเว็บไซต์ (หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น)</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อ้างอิงเนื่อหา (ยาว)</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_review_ref_long_th"></div> 
                <div class="col-sm-3 text-left">Link เต็ม สำหรับไปยังหน้าเว็บไซต์นั้นๆ (หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น)</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อัพโหลดรูปภาพ</div> 
                <div class="col-sm-6 text-left"><div id="restaurant_file_saved_name_th"></div></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ชื่อรูปภาพ</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_pic_alt_th"></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">คำอธิบายรูปภาพ</div> 
                <div class="col-sm-6 text-left"><textarea id="restaurant_pic_detail_th"></textarea></div> 
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

    <div> <!-- English Tab-->
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">สถานะ</div> 
                <div class="col-sm-6 text-left"><div id="restaurant_status_eng" ></div></div> 
                <div class="col-sm-3 text-left">*สถานะของร้าน (enable/disable)</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ละติจูด</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_geo_x_eng" /></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ลองติจูด</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_geo_y_eng" /></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ประเภทร้านอาหาร</div> 
                <div class="col-sm-6 text-left"><div id='restaurant_cat_eng'></div></div> 
                <div class="col-sm-3 text-left">*</div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ชื่อสถานที่</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_name_eng" /></div> 
                <div class="col-sm-3 text-left">*</div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ที่อยู่</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_address_eng" /></div> 
                <div class="col-sm-3 text-left">*</div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">จังหวัด</div> 
                <div class="col-sm-6 text-left"><div id='restaurant_province_id_eng'></div></div> 
                <div class="col-sm-3 text-left">*</div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อำเภอ</div> 
                <div class="col-sm-6 text-left"><div id='restaurant_district_id_eng'></div></div> 
                <div class="col-sm-3 text-left">*</div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">รายละเอียด (80 ตัวอักษร)</div> 
                <div class="col-sm-6 text-left"><textarea id="restaurant_details_80_eng"></textarea></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">รายละเอียด (200 ตัวอักษร)</div> 
                <div class="col-sm-6 text-left"><textarea id="restaurant_details_200_eng"></textarea></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">คำอธิบาย</div> 
                <div class="col-sm-6 text-left"><textarea id="restaurant_details_long_eng"></textarea></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">เวลาเปิด-ปิด</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_open_hour_eng"></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">เบอร์โทร</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_info_tel_eng"></div> 
                <div class="col-sm-3 text-left">(หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น และใช้รูปแบบ +66(0) 99999 9999 เช่น +66 2623 5500 ext.3100|+66(0) 83994 3565 เป็นต้น)</div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">เว็บไซต์</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_info_website_eng"></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อีเมล</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_info_email_eng"></div> 
                <div class="col-sm-3 text-left">(หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น)</div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">เพจเฟสบุ๊ค</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_social_facebook_eng"></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อินสตาแกรม</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_social_instragram_eng"></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ยูทูป</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_social_youtube_eng"></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อ้างอิงเนื่อหา (สั้น)</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_review_ref_short_eng"></div> 
                <div class="col-sm-3 text-left">Link ที่มาสั้นๆสำหรับแสดงผลหน้าเว็บไซต์ (หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น)</div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อ้างอิงเนื่อหา (ยาว)</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_review_ref_long_eng"></div> 
                <div class="col-sm-3 text-left">Link เต็ม สำหรับไปยังหน้าเว็บไซต์นั้นๆ (หากมีมากกว่า 1 ให้ใช้เครื่องหมาย | เป็นตัวคั่น)</div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">อัพโหลดรูปภาพ</div> 
                <div class="col-sm-6 text-left"><div id="restaurant_file_saved_name_eng"></div></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>


        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">ชื่อรูปภาพ</div> 
                <div class="col-sm-6 text-left"><input type="text" id="restaurant_pic_alt_eng"></div> 
                <div class="col-sm-3 text-left"></div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3 text-left">คำอธิบายรูปภาพ</div> 
                <div class="col-sm-6 text-left"><textarea id="restaurant_pic_detail_eng"></textarea></div> 
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

        var restaurant_status_th_source = [
            "-",
            "เปิดทำการ",
            "ปิดทำการ"
        ];
        $("#restaurant_status_th").jqxDropDownList({source: restaurant_status_th_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: 30, autoDropDownHeight: true, theme: theme});


        var restaurant_status_eng_source = [
            "-",
            "Enable",
            "Disable"
        ];
        $("#restaurant_status_eng").jqxDropDownList({source: restaurant_status_eng_source, selectedIndex: 0, itemHeight: 30, width: '100%', height: 30, autoDropDownHeight: true, theme: theme});

        $("#restaurant_geo_x_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#restaurant_geo_x_eng").jqxInput({height: 25, width: '98%', minLength: 1});

        $("#restaurant_geo_y_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#restaurant_geo_y_eng").jqxInput({height: 25, width: '98%', minLength: 1});
        
        
        
         var source_restaurant_type_th =
                {
                    datatype: "json",
                    datafields: [
                        {name: 'restaurant_type_tag_list_id'},
                        {name: 'restaurant_type_tag'}
                    ],
                    url: url,
                    async: false,
                    type: 'POST',
                    data:
                            {
                                fc: 'get_restaurant_type_tag_list',
                                lag: 'th'
                            }
                };
        var restaurant_type_tag_source_th = new $.jqx.dataAdapter(source_restaurant_type_th);
        
        $("#restaurant_cat_th").jqxDropDownList({source: restaurant_type_tag_source_th, selectedIndex: 0, 
                                                            itemHeight: 30, width: '100%', height: '30', dropDownHeight: 200, 
                                                            theme: theme , displayMember: 'restaurant_type_tag', valueMember: 'restaurant_type_tag_list_id'});

        
        var source_restaurant_type_en =
                {
                    datatype: "json",
                    datafields: [
                        {name: 'restaurant_type_tag_list_id'},
                        {name: 'restaurant_type_tag'}
                    ],
                    url: url,
                    async: false,
                    type: 'POST',
                    data:
                            {
                                fc: 'get_restaurant_type_tag_list',
                                lag: 'en'
                            }
                };
        var restaurant_type_tag_source_en = new $.jqx.dataAdapter(source_restaurant_type_en);
        
        $("#restaurant_cat_eng").jqxDropDownList({source: restaurant_type_tag_source_en, selectedIndex: 0, 
                                                            itemHeight: 30, width: '100%', height: '30', dropDownHeight: 200, 
                                                            theme: theme , displayMember: 'restaurant_type_tag', valueMember: 'restaurant_type_tag_list_id'});

       
        $("#restaurant_name_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#restaurant_name_eng").jqxInput({height: 25, width: '98%', minLength: 1});

        $("#restaurant_address_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#restaurant_address_eng").jqxInput({height: 25, width: '98%', minLength: 1});
        
        
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
        
        $("#restaurant_province_id_th").jqxDropDownList({source: province_source_th, selectedIndex: 0, 
                                                            itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, 
                                                            theme: theme , displayMember: 'province_name', valueMember: 'province_id'});

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
        
        $("#restaurant_province_id_eng").jqxDropDownList({source: province_source_en, selectedIndex: 0, 
                                                            itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, 
                                                            theme: theme , displayMember: 'province_name', valueMember: 'province_id'});

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
                                province_id: $("#restaurant_province_id_th").val()
                            }
                };
        var district_source_th = new $.jqx.dataAdapter(source_district_th);
        
        $("#restaurant_district_id_th").jqxDropDownList({source: district_source_th, selectedIndex: 0, 
                                                            itemHeight: 30, width: '100%', height: '30', dropDownHeight: 200,
                                                            theme: theme , displayMember: 'district_name', valueMember: 'district_id'});
        
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
                                province_id: $("#restaurant_province_id_eng").val()
                            }
                };
        var district_source_en = new $.jqx.dataAdapter(source_district_en);
        
        $("#restaurant_district_id_eng").jqxDropDownList({source: district_source_en, selectedIndex: 0, 
                                                            itemHeight: 30, width: '100%', height: '30', dropDownHeight: 200,
                                                            theme: theme , displayMember: 'district_name', valueMember: 'district_id'});



        $('#restaurant_details_80_th').jqxTextArea({height: 90, width: '100%', minLength: 1, maxLength: 80});
        $('#restaurant_details_80_eng').jqxTextArea({height: 90, width: '100%', minLength: 1, maxLength: 80});

        $('#restaurant_details_200_th').jqxTextArea({height: 90, width: '100%', minLength: 1, maxLength: 200});
        $('#restaurant_details_200_eng').jqxTextArea({height: 90, width: '100%', minLength: 1, maxLength: 200});

        $('#restaurant_details_long_th').jqxTextArea({height: 150, width: '100%', minLength: 1});
        $('#restaurant_details_long_eng').jqxTextArea({height: 150, width: '100%', minLength: 1});

        $("#restaurant_open_hour_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#restaurant_open_hour_eng").jqxInput({height: 25, width: '98%', minLength: 1});

        $("#restaurant_info_tel_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#restaurant_info_tel_eng").jqxInput({height: 25, width: '98%', minLength: 1});

        $("#restaurant_info_website_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#restaurant_info_website_eng").jqxInput({height: 25, width: '98%', minLength: 1});

        $("#restaurant_info_email_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#restaurant_info_email_eng").jqxInput({height: 25, width: '98%', minLength: 1});

        $("#restaurant_social_facebook_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#restaurant_social_facebook_eng").jqxInput({height: 25, width: '98%', minLength: 1});

        $("#restaurant_social_instragram_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#restaurant_social_instragram_eng").jqxInput({height: 25, width: '98%', minLength: 1});

        $("#restaurant_social_youtube_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#restaurant_social_youtube_eng").jqxInput({height: 25, width: '98%', minLength: 1});

        $("#restaurant_review_ref_short_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#restaurant_review_ref_short_eng").jqxInput({height: 25, width: '98%', minLength: 1});

        $("#restaurant_review_ref_long_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#restaurant_review_ref_long_eng").jqxInput({height: 25, width: '98%', minLength: 1});




        // Table : restaurant_menu_pic
        $('#restaurant_file_saved_name_th').jqxFileUpload({width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload'});
        $('#restaurant_file_saved_name_eng').jqxFileUpload({width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload'});

        $("#restaurant_pic_alt_th").jqxInput({height: 25, width: '98%', minLength: 1});
        $("#restaurant_pic_alt_eng").jqxInput({height: 25, width: '98%', minLength: 1});

        $('#restaurant_pic_detail_th').jqxTextArea({height: 150, width: '100%', minLength: 1});
        $('#restaurant_pic_detail_eng').jqxTextArea({height: 150, width: '100%', minLength: 1});

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
        
         $('#restaurant_province_id_th').on('change', function (event)
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
                                province_id: $("#restaurant_province_id_th").val()
                            }
                };
        var district_source_th = new $.jqx.dataAdapter(source_district_th);
        
        $("#restaurant_district_id_th").jqxDropDownList({source: district_source_th});
        
         });

        $('#restaurant_province_id_eng').on('change', function (event)
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
                                province_id: $("#restaurant_province_id_eng").val()
                            }
                };
        var district_source_en = new $.jqx.dataAdapter(source_district_en);
        
        $("#restaurant_district_id_eng").jqxDropDownList({source: district_source_en});
                                                        
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
                                    fc: 'save_restaurant',
                                    lag: 'th',

                                    restaurant_district_id: $('#restaurant_district_id_th').val(),
                                    restaurant_province_id: $('#restaurant_province_id_th').val(),
                                    restaurant_status: $('#restaurant_status_th').val(),
                                    restaurant_geo_x: $('#restaurant_geo_x_th').val(),
                                    restaurant_geo_y: $('#restaurant_geo_y_th').val(),
                                    restaurant_info_tel: $('#restaurant_info_tel_th').val(),
                                    restaurant_info_website: $('#restaurant_info_website_th').val(),
                                    restaurant_info_email: $('#restaurant_info_email_th').val(),
                                    restaurant_social_facebook: $('#restaurant_social_facebook_th').val(),
                                    restaurant_social_instragram: $('#restaurant_social_instragram_th').val(),
                                    restaurant_social_youtube: $('#restaurant_social_youtube_th').val(),
                                    restaurant_cat: $('#restaurant_cat_th').val(),
                                    restaurant_name: $('#restaurant_name_th').val(),
                                    restaurant_address: $('#restaurant_address_th').val(),
                                    restaurant_details_80: $('#restaurant_details_80_th').val(),
                                    restaurant_details_200: $('#restaurant_details_200_th').val(),
                                    restaurant_details_long: $('#restaurant_details_long_th').val(),
                                    restaurant_open_hour: $('#restaurant_open_hour_th').val(),
                                    restaurant_review_ref_short: $('#restaurant_review_ref_short_th').val(),
                                    restaurant_review_ref_long: $('#restaurant_review_ref_long_th').val()
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
                                    fc: 'save_restaurant',
                                    lag: 'en',
                                    restaurant_district_id: $('#restaurant_district_id_en').val(),
                                    restaurant_province_id: $('#restaurant_province_id_en').val(),
                                    restaurant_status: $('#restaurant_status_en').val(),
                                    restaurant_geo_x: $('#restaurant_geo_x_en').val(),
                                    restaurant_geo_y: $('#restaurant_geo_y_en').val(),
                                    restaurant_info_tel: $('#restaurant_info_tel_en').val(),
                                    restaurant_info_website: $('#restaurant_info_website_en').val(),
                                    restaurant_info_email: $('#restaurant_info_email_en').val(),
                                    restaurant_social_facebook: $('#restaurant_social_facebook_en').val(),
                                    restaurant_social_instragram: $('#restaurant_social_instragram_en').val(),
                                    restaurant_social_youtube: $('#restaurant_social_youtube_en').val(),
                                    restaurant_cat: $('#restaurant_cat_en').val(),
                                    restaurant_name: $('#restaurant_name_en').val(),
                                    restaurant_address: $('#restaurant_address_en').val(),
                                    restaurant_details_80: $('#restaurant_details_80_en').val(),
                                    restaurant_details_200: $('#restaurant_details_200_en').val(),
                                    restaurant_details_long: $('#restaurant_details_long_en').val(),
                                    restaurant_open_hour: $('#restaurant_open_hour_en').val(),
                                    restaurant_review_ref_short: $('#restaurant_review_ref_short_en').val(),
                                    restaurant_review_ref_long: $('#restaurant_review_ref_long_en').val()
                                }
                    })
                    .done(function (msg)
                    {
                        //alert(msg);
                    });
        }
        
        window.open("restaurant.php", "_self");
    }
</script>
<?php
include_once 'footer.php';
