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
        <h1>
            Events
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Events</li>
        </ol>
        <?php
        include_once 'topic.php';
        ?>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-1"></div>
            <div class="col-sm-1"><button id="btn_create">Create</button></div>
            <div class="col-sm-1"><button id="btn_edit">Edit</button></div>
            <div class="col-sm-1"><button id="btn_preview">Preview</button></div>
        </div>
        <div id='jqxTabs'>
            <ul>
                <li style="margin-left: 30px;">ภาษาไทย</li>
                <li>English</li>

            </ul>
            <div>
                <div class="row">
                    <div class="col-sm-12">
                        <div style="width: 5px; height: 5px;"></div>
                        <div id='grid_dash_th'></div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-sm-12">
                        <div style="width: 5px; height: 5px;"></div>
                        <div id='grid_dash_en'></div>
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

                $("#btn_create").jqxButton({theme: theme, width: '100%', height: 30});
                $("#btn_edit").jqxButton({theme: theme, width: '100%', height: 30});
                $("#btn_preview").jqxButton({theme: theme, width: '100%', height: 30});


                // prepare the data
                var url = "database/query.php";
                // prepare the data
                var source =
                        {
                            datatype: "json",
                            datafields: [
                                {name: 'event_name'},
                                {name: 'event_venue'},
                                {name: 'event_venue_province_id'},
                                {name: 'event_start_date'},
                                {name: 'event_end_date'}
                            ],
                            url: url,
                            async: false,
                            type: 'POST',
                            data:
                                    {
                                        fc: 'get_event',
                                        lag: 'th'
                                    }
                        };
                var dataAdapter = new $.jqx.dataAdapter(source);

                $("#grid_dash_th").jqxGrid(
                        {
                            width: '100%',
                            height: '420px',
                            pagermode: "simple",
                            pageable: true,
                            source: dataAdapter,
                            theme: theme,
                            columnsresize: true,
                            columnsheight: 40,
                            rowsheight: 34,
                            columns: [
                                {text: 'ชื่อกิจกรรม', dataField: 'event_name', align: 'center', minwidth: 64, width: '40%'},
                                {text: 'สถานที่จัดกิจกรรม', dataField: 'event_venue', align: 'center', minwidth: 64, width: '20%'},
                                {text: 'จังหวัด', dataField: 'event_venue_province_id', align: 'center', cellsalign: 'center', minwidth: 64, width: '10%'},
                                {text: 'วันที่เริ่มกิจกรรม', dataField: 'event_start_date', align: 'center', cellsalign: 'center', minwidth: 64, width: '15%'},
                                {text: 'วันที่สิ้นสุดกิจกรรม', dataField: 'event_end_date', align: 'center', cellsalign: 'center', minwidth: 74.5, width: '15%'}
                            ]
                        });

                ////////////////////////////////////////////////
                // prepare the data
                // prepare the data
                var url = "database/query.php";
                // prepare the data
                var source =
                        {
                            datatype: "json",
                            datafields: [
                                {name: 'event_name'},
                                {name: 'event_venue'},
                                {name: 'event_venue_province_id'},
                                {name: 'event_start_date'},
                                {name: 'event_end_date'}
                            ],
                            url: url,
                            async: false,
                            type: 'POST',
                            data:
                                    {
                                        fc: 'get_event',
                                        lag: 'en'
                                    }
                        };
                var dataAdapter = new $.jqx.dataAdapter(source);

                $("#grid_dash_en").jqxGrid(
                        {
                            width: '100%',
                            height: '420px',
                            pagermode: "simple",
                            pageable: true,
                            source: dataAdapter,
                            theme: theme,
                            columnsresize: true,
                            columnsheight: 40,
                            rowsheight: 34,
                            columns: [
                                {text: 'ชื่อกิจกรรม', dataField: 'event_name', align: 'center', minwidth: 64, width: '40%'},
                                {text: 'สถานที่จัดกิจกรรม', dataField: 'event_venue', align: 'center', minwidth: 64, width: '20%'},
                                {text: 'จังหวัด', dataField: 'event_venue_province_id', align: 'center', cellsalign: 'center', minwidth: 64, width: '10%'},
                                {text: 'วันที่เริ่มกิจกรรม', dataField: 'event_start_date', align: 'center', cellsalign: 'center', minwidth: 64, width: '15%'},
                                {text: 'วันที่สิ้นสุดกิจกรรม', dataField: 'event_end_date', align: 'center', cellsalign: 'center', minwidth: 74.5, width: '15%'}
                            ]
                        });


                $('#jqxTabs').jqxTabs({width: '100%', height: '100%', position: 'top', theme: theme});
                $('#jqxTabs').jqxTabs({height: '100%'});

                $("#btn_create").on('click', function ()
                {
                    window.open("events_form.php", "_self");
                });
                // จบใส่ javascript
                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            });
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
