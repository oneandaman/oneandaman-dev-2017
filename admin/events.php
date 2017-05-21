<?php
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
<?php
include_once 'footer.php';
