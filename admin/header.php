<!DOCTYPE html>
<!--
Project    : OneAndaman-Dev
Created on : 17/05/2017
Author     : Nattapong  Kothong
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>One Andaman</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- jQWidgets CSS -->
        <link rel="stylesheet" href="jqwidgets/styles/jqx.base.css" type="text/css" />
        <link href="jqwidgets/styles/jqx.energyblue.css" rel="stylesheet" type="text/css"/>
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
        <style>
            .row
            {
                margin-left: 0;
                margin-right: 0;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            #cover {position: fixed; height: 100%; width: 100%; top:0; left: 0; background: #FFF; z-index:9999;}
        </style>

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div id="cover"></div>
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="../index.php" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>O</b>AM</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>One</b>Andaman</span>
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
                                    <span class="hidden-xs"><?php echo $_SESSION['backend_user_name']; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="dist/img/blank.gif" class="img-circle" alt="User Image">

                                        <p>
                                            <?php echo $_SESSION['backend_user_name']; ?>
                                            <small><?php echo $_SESSION['backend_user_group']; ?></small>
                                        </p>
                                    </li>

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <!-- <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div> -->
                                        <div class="pull-right">
                                            <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
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
                <!--
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                -->
                <!-- /.search form -->

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>

                        <?php
                        if ($_SESSION['backend_user_group'] == 'seo-team' || $_SESSION['backend_user_group'] == 'content-team' || $_SESSION['backend_user_group'] == 'admin')
                        {
                            ?>
                            <li class="active treeview">
                                <a href="destination.php"><i class="fa fa-map"></i><span>Destinations</span></a>
                            </li>

                            <li class="treeview">
                                <a href="restaurant.php"><i class="fa fa-cutlery"></i><span>Restaurants</span></a>
                            </li>

                            <li class="treeview">
                                <a href="accommodation.php"><i class="fa fa-bed"></i><span>Accommodations</span></a>
                            </li>
                            <?php
                        }
                        if ($_SESSION['backend_user_group'] == 'seo-team' || $_SESSION['backend_user_group'] == 'admin')
                        {
                            ?>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-tags"></i>
                                    <span>Tags</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="tag_destination_type.php"><i class="fa fa-tag"></i> Destination Type Tag</a></li>
                                    <li><a href="tag_destination_activity.php"><i class="fa fa-tag"></i> Destination Activity Tag</a></li>
                                    <li><a href="tag_restaurant_type.php"><i class="fa fa-tag"></i> Restaurant Type Tag</a></li>
                                    <li><a href="tag_accommodation_type.php"><i class="fa fa-tag"></i> Accommodation Type Tag</a></li>
                                    <li><a href="tag_accommodation_room.php"><i class="fa fa-tag"></i> Accommodation Room Tag</a></li>
                                </ul>
                            </li>
                            <?php
                        }

                        if ($_SESSION['backend_user_group'] == 'seo-team' || $_SESSION['backend_user_group'] == 'content-team' || $_SESSION['backend_user_group'] == 'admin')
                        {
                            ?>
                            <li class="treeview">
                                <a href="events.php">
                                    <i class="fa fa-calendar"></i>
                                    <span>Events</span>
                                </a>
                            </li>
                            <?php
                        }
                        ?>

                        <!-- <li class="header">SEO</li>
                        <li class="treeview">
                            <a href="keyword.php">
                                <i class="fa fa-code"></i> 
                                <span>Keyword</span>
                            </a>
                        </li> -->

                        <?php
                        if ($_SESSION['backend_user_group'] == 'admin')
                        {
                            ?>
                            <li class="header">Admin</li>
                            <li class="treeview">
                                <a href="user.php">
                                    <i class="fa fa-user"></i> 
                                    <span>Backend User</span>
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </section>
                <!-- /.sidebar -->

            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
