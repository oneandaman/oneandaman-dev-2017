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
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2"><input type="text" id="event_name_search" /></div>
                <div class="col-sm-1"><button id="btn_create">Create</button></div>
                <div class="col-sm-1"><button id="btn_edit">Edit</button></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div style="width: 5px; height: 5px;"></div>
                    <div id='grid_dash'></div>
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
                
                $("#btn_create").jqxButton({theme: theme, width: '100%', height: 30});
                $("#btn_edit").jqxButton({theme: theme, width: '100%', height: 30});
                
                $("#event_name_search").jqxInput({placeHolder: "Search by Name", height: 25, width: 200, minLength: 1});
                // prepare the data
                var data = null;
                var source =
                        {
                            datatype: "json",
                            datafields: [
                                {name: 'event_name'},
                                {name: 'event_detail'},
                                {name: 'event_start_date'},
                                {name: 'event_end_date'}
                            ],
                            localdata: data
                        };
                var dataAdapter = new $.jqx.dataAdapter(source);

                $("#grid_dash").jqxGrid(
                        {
                            width: '100%',
                            //height: '592px',
                            pagermode: "simple",
                            pageable: true,
                            source: dataAdapter,
                            theme: theme,
                            columnsresize: true,
                            columnsheight: 40,
                            rowsheight: 34,
                            columns: [
                                {text: 'Event Name', dataField: 'event_name', align: 'center', minwidth: 64, width: '50%'},
                                {text: 'Start Date', dataField: 'event_start_date', align: 'center', minwidth: 74.5, width: '25%'},
                                {text: 'End Date', dataField: 'event_end_date', align: 'center', minwidth: 74.5, width: '25%'}
                            ]
                        });

                // จบใส่ javascript
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            });
        </script>


    </body>
</html>
