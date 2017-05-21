<?php
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
                <div class="col-sm-2"><input type="text" id="destination_name_search" /></div>
                <div class="col-sm-1"><button id="btn_create">Create</button></div>
                <div class="col-sm-1"><button id="btn_edit">Edit</button></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div style="width: 5px; height: 5px;"></div>
                    <div id='grid_dash'></div>
                </div>
            </div>

        <div id="popupWindow">
            <div>
                Edit</div>
            <div style="overflow: hidden;">
                <form id="testForm" action="./">
                    <table>

                        <tr>
                            <td colspan="2">Destination Name
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input id="destination_name" required /> 
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">Province
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div id='destination_province'></div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">District
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div id='destination_district'></div>
                            </td>
                        </tr>


                        <tr>
                            <td align="right">
                            </td>
                            <td style="padding-top: 10px;" align="right">
                                <input style="margin-right: 5px;" type="button" id="Save" value="Save" />
                                <input id="Cancel" type="button" value="Cancel" />
                            </td>
                        </tr>
                    </table>
                </form>
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
                $("#destination_name_search").jqxInput({placeHolder: "Search by Name", height: 25, width: 200, minLength: 1});

                $("#destination_name").jqxInput({placeHolder: " ", height: 25, width: 200, minLength: 1});

                var destination_province_source = [
                    "-",
                    "พังงา",
                    "ภูเก็ต"
                ];
                $("#destination_province").jqxDropDownList({source: destination_province_source, selectedIndex: 2, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});


                var destination_district_source = [
                    "-",
                    "กะทู้",
                    "ฉลอง",
                    "เมืองภูเก็ต"
                ];
                $("#destination_district").jqxDropDownList({source: destination_district_source, selectedIndex: 3, itemHeight: 30, width: '100%', height: '30', autoDropDownHeight: true, theme: theme});



                // prepare the data

                /*
                 var data = null;
                 var source =
                 {
                 datatype: "json",
                 datafields: [
                 {name: 'destination_name'},
                 {name: 'destination_status'},
                 {name: 'destination_route_cat'},
                 {name: 'destination_district'},
                 {name: 'destination_province'},
                 {name: 'destination_open_hour'},
                 {name: 'destination_info_tel'},
                 {name: 'destination_info_email'}
                 ],
                 localdata: data
                 };
                 var dataAdapter = new $.jqx.dataAdapter(source);
                 
                 */

                //แบบ เก็บลง datasource ใช้กับ Select ค่าที่รับกลับจะต้องเป็น json
                var url = "database/query.php";
                // prepare the data
                var source =
                        {
                            datatype: "json",
                            datafields: [
                                {name: 'id'},
                                {name: 'destination_name'},
                                {name: 'destination_province'},
                                {name: 'destination_district'}
                            ],
                            url: url,
                            async: false,
                            type: 'POST',
                            data:
                                    {
                                        fc: 'show_destination'
                                    }
                        };
//                alert(JSON.stringify(source, null, 4));

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
                                {text: 'Name', dataField: 'destination_name', align: 'center', minwidth: 64, width: '50%'},
                                {text: 'District', dataField: 'destination_district', align: 'center', minwidth: 64, width: '20%'},
                                {text: 'Province', dataField: 'destination_province', align: 'center', minwidth: 64, width: '20%'},
                                {text: 'Edit', datafield: 'Edit', align: 'center', columntype: 'button', cellsrenderer: function ()
                                    {
                                        return "Edit";
                                    }, buttonclick: function (row)
                                    {
                                        // open the popup window when the user clicks a button.
                                        editrow = row;
                                        var offset = $("#grid_dash").offset();
                                        $("#popupWindow").jqxWindow({position: {x: parseInt(offset.left) + 60, y: parseInt(offset.top) + 60}});
                                        // get the clicked row's data and initialize the input fields.
                                        var dataRecord = $("#grid_dash").jqxGrid('grid_dash', editrow);
                                        $("#destination_name").val(dataRecord.destination_name);
                                        $("#destination_district").val(dataRecord.destination_district);
                                        $("#destination_province").val(dataRecord.destination_province);
                                        // show the popup window.
                                        $("#popupWindow").jqxWindow('show');

                                    }
                                }


                            ]
                        });

            });
        </script>



<?php
include_once 'footer.php';