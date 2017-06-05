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
    <div class="col-sm-2"></div>
    <div class="col-sm-1"><button id="btn_create">Create</button></div>
    <div class="col-sm-1"><button id="btn_edit">Edit</button></div>
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
                    //height: '592px',
                    pagermode: "simple",
                    pageable: true,
                    source: dataAdapter,
                    theme: theme,
                    columnsresize: true,
                    columnsheight: 40,
                    rowsheight: 34,
                    columns: [
                        {text: 'Destination ID', dataField: 'destination_id', align: 'center', minwidth: 64, width: '10%'},
                        {text: 'Status', dataField: 'destination_status', align: 'center', minwidth: 64, width: '10%'},
                        {text: 'Destination Name', dataField: 'destination_name', align: 'center', minwidth: 64, width: '30%'},
                        {text: 'Category', dataField: 'destination_cat', align: 'center', minwidth: 64, width: '20%'},
                        {text: 'District', dataField: 'destination_district_id', align: 'center', minwidth: 64, width: '15%'},
                        {text: 'Province', dataField: 'destination_province_id', align: 'center', minwidth: 64, width: '15%'}
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
                    //height: '592px',
                    pagermode: "simple",
                    pageable: true,
                    source: dataAdapter_en,
                    theme: theme,
                    columnsresize: true,
                    columnsheight: 40,
                    rowsheight: 34,
                    columns: [
                        {text: 'Destination ID', dataField: 'destination_id', align: 'center', minwidth: 64, width: '10%'},
                        {text: 'Status', dataField: 'destination_status', align: 'center', minwidth: 64, width: '10%'},
                        {text: 'Destination Name', dataField: 'destination_name', align: 'center', minwidth: 64, width: '30%'},
                        {text: 'Category', dataField: 'destination_cat', align: 'center', minwidth: 64, width: '20%'},
                        {text: 'District', dataField: 'destination_district_id', align: 'center', minwidth: 64, width: '15%'},
                        {text: 'Province', dataField: 'destination_province_id', align: 'center', minwidth: 64, width: '15%'}
                    ]
                });



        $('#jqxTabs').jqxTabs({width: '100%', height: '100%', position: 'top', theme: theme});
        $('#jqxTabs').jqxTabs({height: '100%'});
        
        $("#btn_create").on('click', function ()
        {
            window.open("destination_form.php", "_self");
        });
        // จบใส่ javascript
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    });
</script>



<?php
include_once 'footer.php';
