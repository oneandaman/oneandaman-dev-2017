<?php
include_once 'header.php';
?>
<h1>
    Accommodation Room Tag
</h1>
<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Accommodation Room Tag</li>
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
                        {name: 'accommodation_room_tag_list_id'},
                        {name: 'accommodation_room_tag'}
                    ],
                    url: url,
                    async: false,
                    type: 'POST',
                    data:
                            {
                                fc: 'get_accommodation_room_tag',
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
                        {text: 'Accommodation Id', dataField: 'accommodation_room_tag_list_id', align: 'center', minwidth: 64, width: '20%'},
                        {text: 'Accommodation Room Tag', dataField: 'accommodation_room_tag', align: 'center', minwidth: 74.5, width: '80%'}
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
                        {name: 'accommodation_room_tag_list_id'},
                        {name: 'accommodation_room_tag'}
                    ],
                    url: url,
                    async: false,
                    type: 'POST',
                    data:
                            {
                                fc: 'get_accommodation_room_tag',
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
                        {text: 'Accommodation Id', dataField: 'accommodation_room_tag_list_id', align: 'center', minwidth: 64, width: '20%'},
                        {text: 'Accommodation Room Tag', dataField: 'accommodation_room_tag', align: 'center', minwidth: 74.5, width: '80%'}
                    ]
                });


        $('#jqxTabs').jqxTabs({width: '100%', height: '100%', position: 'top', theme: theme});
        $('#jqxTabs').jqxTabs({height: '100%'});
        
        $("#btn_create").on('click', function ()
        {
            window.open("tag_accommodation_room_form.php", "_self");
        });
        // จบใส่ javascript
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    });
</script>
<?php
include_once 'footer.php';
