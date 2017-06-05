<?php
include_once 'header.php';
?>
<h1>
    Accommodation
</h1>
<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Accommodation</li>
</ol>
<?php
include_once 'topic.php';
?>
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


        // prepare the data
        var url = "database/query.php";
        // prepare the data
        var source =
                {
                    datatype: "json",
                    datafields: [
                        {name: 'accommodation_id'},
                        {name: 'accommodation_status'},
                        {name: 'accommodation_name'},
                        {name: 'accommodation_district_id'},
                        {name: 'accommodation_province_id'}
                    ],
                    url: url,
                    async: false,
                    type: 'POST',
                    data:
                            {
                                fc: 'get_accommodation',
                                lag: 'th'
                            }
                };
        var dataAdapter = new $.jqx.dataAdapter(source);

        $("#grid_dash_th").jqxGrid(
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
                        {text: 'Accommodation Id', dataField: 'accommodation_id', align: 'center', minwidth: 64, width: '30%'},
                        {text: 'Status', dataField: 'accommodation_status', align: 'center', minwidth: 74.5, width: '15%'},
                        {text: 'Accommodation Name', dataField: 'accommodation_name', align: 'center', minwidth: 74.5, width: '25%'},
                        {text: 'District', dataField: 'accommodation_district_id', align: 'center', minwidth: 64, width: '15%'},
                        {text: 'Province', dataField: 'accommodation_province_id', align: 'center', minwidth: 64, width: '15%'}
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
                        {name: 'accommodation_id'},
                        {name: 'accommodation_status'},
                        {name: 'accommodation_name'},
                        {name: 'accommodation_district_id'},
                        {name: 'accommodation_province_id'}
                    ],
                    url: url,
                    async: false,
                    type: 'POST',
                    data:
                            {
                                fc: 'get_accommodation',
                                lag: 'en'
                            }
                };
        var dataAdapter = new $.jqx.dataAdapter(source);

        $("#grid_dash_en").jqxGrid(
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
                        {text: 'Accommodation Id', dataField: 'accommodation_id', align: 'center', minwidth: 64, width: '30%'},
                        {text: 'Status', dataField: 'accommodation_status', align: 'center', minwidth: 74.5, width: '15%'},
                        {text: 'Accommodation Name', dataField: 'accommodation_name', align: 'center', minwidth: 74.5, width: '25%'},
                        {text: 'District', dataField: 'accommodation_district_id', align: 'center', minwidth: 64, width: '15%'},
                        {text: 'Province', dataField: 'accommodation_province_id', align: 'center', minwidth: 64, width: '15%'}
                    ]
                });


        $('#jqxTabs').jqxTabs({width: '100%', height: '100%', position: 'top', theme: theme});
        $('#jqxTabs').jqxTabs({height: '100%'});


        $("#btn_create").on('click', function ()
        {
            window.open("accommodation_form.php", "_self");
        });


        // จบใส่ javascript
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    });
</script>
<?php
include_once 'footer.php';
