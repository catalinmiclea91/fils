<?php
    $no_visible_elements= !$admin_is_logged;
    $admin_username = $this->session->userdata('username');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        Copyright 2012 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0
    -->
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- The styles -->
    <link id="bs-css" href="/assets/admin/css/bootstrap-simplex.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }
    </style>
    <link href="/assets/admin/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/assets/admin/css/charisma-app.css" rel="stylesheet">
    <link href="/assets/admin/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
    <link href='/assets/admin/css/fullcalendar.css' rel='stylesheet'>
    <link href='/assets/admin/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
    <link href='/assets/admin/css/chosen.css' rel='stylesheet'>
    <link href='/assets/admin/css/uniform.default.css' rel='stylesheet'>
    <link href='/assets/admin/css/colorbox.css' rel='stylesheet'>
    <link href='/assets/admin/css/jquery.cleditor.css' rel='stylesheet'>
    <link href='/assets/admin/css/jquery.noty.css' rel='stylesheet'>
    <link href='/assets/admin/css/noty_theme_default.css' rel='stylesheet'>
    <link href='/assets/admin/css/elfinder.min.css' rel='stylesheet'>
    <link href='/assets/admin/css/elfinder.theme.css' rel='stylesheet'>
    <link href='/assets/admin/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='/assets/admin/css/opa-icons.css' rel='stylesheet'>
    <link href='/assets/admin/css/uploadify.css' rel='stylesheet'>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="/assets/admin/img/favicon.ico">

</head>

<body>
<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
    <!-- topbar starts -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.html"> <img alt="FILS Logo" src="/assets/admin/img/logo20.png" /> <span>FILS</span></a>

                <!-- user dropdown starts -->
                <div class="btn-group pull-right" >
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-user"></i><span class="hidden-phone"> <?= ucfirst($admin_username); ?></span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="/admin-logout">Logout</a></li>
                    </ul>
                </div>
                <!-- user dropdown ends -->

<!--                <div class="top-nav nav-collapse">
                    <ul class="nav">
                        <li><a href="#">Visit Site</a></li>
                        <li>
                            <form class="navbar-search pull-left">
                                <input placeholder="Search" class="search-query span2" name="query" type="text">
                            </form>
                        </li>
                    </ul>
                </div>-->
            </div>
        </div>
    </div>
    <!-- topbar ends -->
<?php } ?>
<div class="container-fluid">
    <div class="row-fluid">
        <?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>

        <!-- left menu starts -->
        <div class="span2 main-menu-span">
            <div class="well nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li class="nav-header hidden-tablet">Administrare Pagini</li>
                    <li class="active"><a class="ajax-link" href="index.html"><i class="icon-home"></i><span class="hidden-tablet"> Prima pagina</span></a></li>
                    <li><a class="ajax-link" href="index.html"><i class="icon-picture"></i><span class="hidden-tablet"> Slider</span></a></li>
                    <li><a class="ajax-link" href="index.html"><i class="icon-ban-circle"></i><span class="hidden-tablet"> Etc...</span></a></li>
                    <li><a class="ajax-link" href="index.html"><i class="icon-ban-circle"></i><span class="hidden-tablet"> Etc...</span></a></li>

                    <li class="nav-header hidden-tablet">Traduceri</li>
                    <li><a class="ajax-link" href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> Romana</span></a></li>
                    <li><a class="ajax-link" href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Engleza</span></a></li>
                    <li><a class="ajax-link" href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Exemplu..</span></a></li>
                </ul>
            </div><!--/.well -->
        </div><!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>
                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="span10">
            <!-- content starts -->
            <?php } ?>
