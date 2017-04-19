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

                $('#destination_details_200_th').jqxTextArea({placeHolder: 'คำอธิบาย 200 ตัวอักษร', height: 90, width: '100%', minLength: 1, maxLength: 200});
                $('#destination_details_200_eng').jqxTextArea({placeHolder: 'Detail 200 Charecters', height: 90, width: '100%', minLength: 1, maxLength: 200});
                
                
                // จบใส่ javascript
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            });
        </script>


    </body>
</html>