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
                    <div class="col-sm-5 text-right">ชื่อเมนูแนะนำ</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="restaurant_manu_name_th" /></div> 
                </div>
                <div class="col-sm-2"> </div>
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Menu Name</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="restaurant_manu_name_eng" /></div> 
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
                    <div class="col-sm-5 text-right">ชื่อไฟล์รูปภาพ (ภาษาไทย)</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="file_display_name_th"></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Picture File Name (ENG)</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="file_display_name_eng"></div> 
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">ชื่อรูปภาพ (ALt)</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="restaurant_pic_alt_th"></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Picture Name (ALt)</div> 
                    <div class="col-sm-7 text-left"><input type="text" id="restaurant_pic_alt_eng"></div> 
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">คำอธิบายรูปภาพ</div> 
                    <div class="col-sm-7 text-left"><textarea id="restaurant_pic_detail_th"></textarea></div> 
                </div>
                <div class="col-sm-2"> </div> 
                <div class="col-sm-5">
                    <div class="col-sm-5 text-right">Picture Detail</div> 
                    <div class="col-sm-7 text-left"><textarea id="restaurant_pic_detail_eng"></textarea></div> 
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

               
                $("#restaurant_manu_name_th").jqxInput({placeHolder: "ชื่อเมนูแนะนำ", height: 25, width: '98%', minLength: 1});
                $("#restaurant_manu_name_eng").jqxInput({placeHolder: "Menu Name", height: 25, width: '98%', minLength: 1});
               
                // Table : restaurant_menu_pic
                $('#file_saved_name_th').jqxFileUpload({ width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload' });
                $('#file_saved_name_eng').jqxFileUpload({ width: '100%', uploadUrl: '#.php', fileInputName: 'fileToUpload' });
                
                
                $("#file_display_name_th").jqxInput({placeHolder: "e.g. ภูเก็ต_ร้านอาหาร_ทุ่งคากาแฟ.jpg", height: 25, width: '98%', minLength: 1});
                $("#file_display_name_eng").jqxInput({placeHolder: "e.g. phuket_resturant_tuk-ka-coffee.jpg", height: 25, width: '98%', minLength: 1});
                
                $("#restaurant_pic_alt_th").jqxInput({placeHolder: "ชื่อรูปภาพ สำหรับใส่ใน Tag(ALt)", height: 25, width: '98%', minLength: 1});
                $("#restaurant_pic_alt_eng").jqxInput({placeHolder: "Picture Name (ALt)", height: 25, width: '98%', minLength: 1});
                
                $('#restaurant_pic_detail_th').jqxTextArea({placeHolder: 'คำอธิบายรูปภาพ', height: 150, width: '100%', minLength: 1});
                $('#restaurant_pic_detail_eng').jqxTextArea({placeHolder: 'Picture Detail', height: 150, width: '100%', minLength: 1});
                
                
                // จบใส่ javascript
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            });
        </script>


    </body>
</html>
