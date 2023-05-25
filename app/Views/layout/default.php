<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GSNW STYLE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?= base_url() ?>/assets2/img/logo/logo.jpg">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/typography.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/default-css.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?= base_url() ?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <?= $this->include('layout/sidebar')  ?>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <?= $this->include('layout/header')  ?>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">GSNW STYLE</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><span>Fashion as unique as you are</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="<?= base_url() ?>/assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">settings <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="<?php echo base_url('Auth/logout') ?>">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- seo fact area start -->

                    <?= $this->renderSection('content') ?>

                    <!-- seo fact area end -->
                    <!-- Social Campain area start -->

                    <!-- Social Campain area end -->
                    <!-- Statistics area start -->

                    <!-- Statistics area end -->
                    <!-- Advertising area start -->

                    <!-- Advertising area end -->
                    <!-- sales area start -->

                    <!-- sales area end -->
                    <!-- timeline area start -->

                    <!-- timeline area end -->
                    <!-- map area start -->

                    <!-- map area end -->
                    <!-- testimonial area start -->

                    <!-- testimonial area end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. <a href="https://colorlib.com/wp/">FDA</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>


                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="<?= base_url() ?>/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?= base_url() ?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/metisMenu.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="<?= base_url() ?>/assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="<?= base_url() ?>/assets/js/pie-chart.js"></script>
    <!-- all bar chart -->
    <script src="<?= base_url() ?>/assets/js/bar-chart.js"></script>
    <!-- all map chart -->
    <script src="<?= base_url() ?>/assets/js/maps.js"></script>
    <!-- others plugins -->
    <script src="<?= base_url() ?>/assets/js/plugins.js"></script>
    <script src="<?= base_url() ?>/assets/js/scripts.js"></script>
</body>

</html>