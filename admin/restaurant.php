<?php
include_once 'header.php';
?>
<h1>
    Restaurants
</h1>
<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Restaurants</li>
</ol>
<?php
include_once 'topic.php';
?>
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-2"></div>
    <div class="col-sm-2"></div>
    <div class="col-sm-2"></div>
    <div class="col-sm-2"><input type="text" id="restaurant_name_search" /></div>
    <div class="col-sm-1"><button id="btn_create">Create</button></div>
    <div class="col-sm-1"><button id="btn_edit">Edit</button></div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div style="width: 5px; height: 5px;"></div>
        <div id='grid_dash'></div>
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

        $("#restaurant_name_search").jqxInput({placeHolder: "Search by Name", height: 25, width: 200, minLength: 1});
        // prepare the data
        var data = null;
        var source =
                {
                    datatype: "json",
                    datafields: [
                        {name: 'restaurant_name'},
                        {name: 'restaurant_status'},
                        {name: 'restaurant_route_cat'},
                        {name: 'restaurant_type_tags'},
                        {name: 'restaurant_district'},
                        {name: 'restaurant_province'},
                        {name: 'restaurant_open_hour'},
                        {name: 'restaurant_info_tel'}
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
                        {text: 'Name', dataField: 'restaurant_name', align: 'center', minwidth: 64, width: '30%'},
                        {text: 'Status', dataField: 'restaurant_status', align: 'center', minwidth: 74.5, width: '15%'},
                        {text: 'Travel Route', dataField: 'restaurant_route_cat', align: 'center', minwidth: 74.5, width: '25%'},
                        {text: 'District', dataField: 'restaurant_district', align: 'center', minwidth: 64, width: '15%'},
                        {text: 'Province', dataField: 'restaurant_province', align: 'center', minwidth: 64, width: '15%'}
                    ]
                });

        // จบใส่ javascript
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    });
</script>
<?php
include_once 'footer.php';
