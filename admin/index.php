<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- jQWidgets CSS -->
        <link rel="stylesheet" href="jqwidgets/styles/jqx.base.css" type="text/css" />
        <!-- Bootstrap core CSS -->
        <link href="styles/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link href="styles/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Ionicons -->
        <link href="ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link href="dist/css/skins/skin-blue.css" rel="stylesheet" type="text/css"/>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="html5shiv/dist/html5shiv.min.js" type="text/javascript"></script>
        <script src="Respond/dest/respond.min.js" type="text/javascript"></script>
        <![endif]-->
        <link href="styles/style.css" rel="stylesheet" type="text/css"/>

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b>LTE</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="dist/img/blank.gif" class="user-image" alt="User Image">
                                    <span class="hidden-xs">User Name</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="dist/img/blank.gif" class="img-circle" alt="User Image">

                                        <p>
                                            User Name
                                            <small>Administrator</small>
                                        </p>
                                    </li>

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
            </header>

            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <!-- /.search form -->

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-files-o"></i>
                                <span>Layout Options</span>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg-green">new</small>
                                    <small class="label label-primary pull-right">4</small>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/layout/top-nav.html">Top Navigation</a></li>
                                <li><a href="pages/layout/boxed.html">Boxed</a></li>
                                <li><a href="pages/layout/fixed.html">Fixed</a></li>
                                <li><a href="pages/layout/collapsed-sidebar.html">Collapsed Sidebar</a></li>
                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>UI Elements</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                                <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                                <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                                <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                                <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                                <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                            </ul>
                        </li>
                        <li class="header">LABELS</li>
                        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Test</span></a></li>

                    </ul>
                </section>
                <!-- /.sidebar -->



            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Main row -->
                    Content
                    <!-- /.row (main row) -->

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; 2017 <a href="#">Company Name</a>.</strong> All rights reserved.
            </footer>
        </div>

        <!-- Bootstrap 3.3.6 -->
        <script type="text/javascript" src="scripts/jquery-1.11.1.min.js"></script>
        <script src="jqwidgets/jqxcore.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxbuttons.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxinput.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxwindow.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxdata.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxscrollbar.js" type="text/javascript"></script>
        <script src="jqwidgets/jqxmenu.js" type="text/javascript"></script>

        <script src="scripts/bootstrap.min.js" type="text/javascript"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="scripts/jquery.foggy.min.js" type="text/javascript"></script>
        <!--<script src="scripts/number_input.js" type="text/javascript"></script>-->


    </body>
</html>
