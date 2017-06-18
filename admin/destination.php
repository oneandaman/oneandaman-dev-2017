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
            Destinations
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Destinations</li>
        </ol>
        <?php
        include_once 'topic.php';
        ?>
        <!-- Main row -->
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
                        <div id='grid_dash_destination_th'></div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-sm-12">
                        <div style="width: 5px; height: 5px;"></div>
                        <div id='grid_dash_destination_en'></div>
                    </div>
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


                //แบบ เก็บลง datasource ใช้กับ Select ค่าที่รับกลับจะต้องเป็น json
                var url = "database/query.php";
                // prepare the data
                var source =
                        {
                            datatype: "json",
                            datafields: [
                                {name: 'destination_id'},
                                {name: 'destination_status'},
                                {name: 'destination_name'},
                                {name: 'destination_district_id'},
                                {name: 'destination_province_id'},
                                {name: 'destination_cat'}
                            ],
                            url: url,
                            async: false,
                            type: 'POST',
                            data:
                                    {
                                        fc: 'get_destination',
                                        lag: 'th'
                                    }
                        };
                //                alert(JSON.stringify(source, null, 4));

                var dataAdapter = new $.jqx.dataAdapter(source);
                $("#grid_dash_destination_th").jqxGrid(
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
                                {text: 'รหัส', dataField: 'destination_id', align: 'center', cellsalign: 'center', minwidth: 64, width: '10%'},
                                {text: 'สถานะ', dataField: 'destination_status', align: 'center', minwidth: 64, width: '10%'},
                                {text: 'ชื่อ', dataField: 'destination_name', align: 'center', minwidth: 64, width: '30%'},
                                {text: 'ประเภท', dataField: 'destination_cat', align: 'center', cellsalign: 'center', minwidth: 64, width: '20%'},
                                {text: 'อำเภอ', dataField: 'destination_district_id', align: 'center', cellsalign: 'center', minwidth: 64, width: '15%'},
                                {text: 'จังหวัด', dataField: 'destination_province_id', align: 'center', cellsalign: 'center', minwidth: 64, width: '15%'}
                            ]
                        });
                //////////////////////////////////////////////////////////////////////////////////
                //แบบ เก็บลง datasource ใช้กับ Select ค่าที่รับกลับจะต้องเป็น json
                var url_en = "database/query.php";
                // prepare the data
                var source_en =
                        {
                            datatype: "json",
                            datafields: [
                                {name: 'destination_id'},
                                {name: 'destination_status'},
                                {name: 'destination_name'},
                                {name: 'destination_district_id'},
                                {name: 'destination_province_id'},
                                {name: 'destination_cat'}
                            ],
                            url: url_en,
                            async: false,
                            type: 'POST',
                            data:
                                    {
                                        fc: 'get_destination',
                                        lag: 'en'
                                    }
                        };
                var dataAdapter_en = new $.jqx.dataAdapter(source_en);
                $("#grid_dash_destination_en").jqxGrid(
                        {
                            width: '100%',
                            height: '420px',
                            pagermode: "simple",
                            pageable: true,
                            source: dataAdapter_en,
                            theme: theme,
                            columnsresize: true,
                            columnsheight: 40,
                            rowsheight: 34,
                            columns: [
                                {text: 'รหัส', dataField: 'destination_id', align: 'center', cellsalign: 'center', minwidth: 64, width: '10%'},
                                {text: 'สถานะ', dataField: 'destination_status', align: 'center', minwidth: 64, width: '10%'},
                                {text: 'ชื่อ', dataField: 'destination_name', align: 'center', minwidth: 64, width: '30%'},
                                {text: 'ประเภท', dataField: 'destination_cat', align: 'center', cellsalign: 'center', minwidth: 64, width: '20%'},
                                {text: 'อำเภอ', dataField: 'destination_district_id', align: 'center', cellsalign: 'center', minwidth: 64, width: '15%'},
                                {text: 'จังหวัด', dataField: 'destination_province_id', align: 'center', cellsalign: 'center', minwidth: 64, width: '15%'}
                            ]
                        });
                $('#jqxTabs').jqxTabs({width: '100%', height: '100%', position: 'top', theme: theme});
                $('#jqxTabs').jqxTabs({height: '100%'});
                $("#btn_create").on('click', function ()
                {
                    window.open("destination_form.php", "_self");
                });
                $("#btn_preview").on('click', function ()
                {


                    var selectedItem = $('#jqxTabs').jqxTabs('selectedItem');
                    if (selectedItem == 0)
                    {
                        var rowindex = $('#grid_dash_destination_th').jqxGrid('getselectedrowindex');
                        var value = $('#grid_dash_destination_th').jqxGrid('getcellvalue', rowindex, "destination_id");
                        var province = $('#grid_dash_destination_th').jqxGrid('getcellvalue', rowindex, "destination_province_id");
                        if (value != null)
                        {

                            var url = '';
                            switch (province)
                            {
                                case 'ภูเก็ต':
                                    url = '../th/destination/phuket/phuket-destination.php?did=' + value;
                                    break;
                                case 'กระบี่':
                                    url = '../th/destination/krabi/krabi-destination.php?did=' + value;
                                    break;
                                case 'พังงา':
                                    url = '../th/destination/phangnga/phangnga-destination.php?did=' + value;
                                    break;
                                case 'ระนอง':
                                    url = '../th/destination/ranong/ranong-destination.php?did=' + value;
                                    break;
                                case 'ตรัง':
                                    url = '../th/destination/trang/trang-destination.php?did=' + value;
                                    break;
                                default:
                                    url = '../th/destination/phuket/phuket-destination.php?did=' + value;
                            }

                            openInNewTab(url);
                        }
                    } else if (selectedItem == 1)
                    {
                        var rowindex = $('#grid_dash_destination_en').jqxGrid('getselectedrowindex');
                        var value = $('#grid_dash_destination_en').jqxGrid('getcellvalue', rowindex, "destination_id");
                        var province = $('#grid_dash_destination_en').jqxGrid('getcellvalue', rowindex, "destination_province_id");
                        if (value != null)
                        {

                            var url = '';
                            switch (province)
                            {
                                case 'Phuket':
                                    //url = 'test.php?lg=en&des_id=' + value;
                                    url = '../en/destination/phuket/phuket-destination.php?did=' + value;
                                    break;
                                case 'Krabi':
                                    url = '../en/destination/krabi/krabi-destination.php?did=' + value;
                                    break;
                                case 'Phang Nga':
                                    url = '../en/destination/phangnga/phangnga-destination.php?did=' + value;
                                    break;
                                case 'Ranong':
                                    url = '../en/destination/ranong/ranong-destination.php?did=' + value;
                                    break;
                                case 'Trang':
                                    url = '../en/destination/trang/trang-destination.php?did=' + value;
                                    break;
                                default:
                                    url = '../en/destination/phuket/phuket-destination.php?did=' + value;
                            }

                            openInNewTab(url);
                        }
                    }


                });



                $("#btn_edit").on('click', function ()
                {
                    var selectedItem = $('#jqxTabs').jqxTabs('selectedItem');
                    if (selectedItem == 0)
                    {
                        var rowindex = $('#grid_dash_destination_th').jqxGrid('getselectedrowindex');
                        var value = $('#grid_dash_destination_th').jqxGrid('getcellvalue', rowindex, "destination_id");
                        if (value != null)
                        {
                            var url = 'destination_form_edit.php?did=' + value;
                            openSameWindows(url);
                        }
                    } else if (selectedItem == 1)
                    {
                        var rowindex = $('#grid_dash_destination_en').jqxGrid('getselectedrowindex');
                        var value = $('#grid_dash_destination_en').jqxGrid('getcellvalue', rowindex, "destination_id");

                        if (value != null)
                        {
                            var url = 'destination_form_edit.php?did=' + value;
                            openSameWindows(url);
                        }
                    }
                });




                function openInNewTab(url)
                {
                    var win = window.open(url, '_blank');
                    win.focus();
                }
                function openSameWindows(url)
                {
                    var win = window.open(url, '_self');
                    win.focus();
                }




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
