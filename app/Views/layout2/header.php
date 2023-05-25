<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html"> <img src="<?= base_url("") ?>/assets2/img/logo/logo.jpg" width="188" height="58" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Buyercontroller') ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('Buyercontroller/shop') ?>">product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Others
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                    <a class="dropdown-item" href="<?php echo base_url('Buyercontroller/cart') ?>">shopping cart</a>
                                    <a class="dropdown-item" href="<?php echo base_url('Auth/logout') ?>"> Logout</a>

                                </div>
                            </li>


                        </ul>
                    </div>
                    <div class="hearer_icon d-flex align-items-center">
                        <ul class="navbar-nav">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a href="">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <!-- <div class="col-sm-6">
                                <div data-toggle="dropdown"> <a><i> <img src="<?= base_url() ?>/assets2/img/icon/gear1.svg" height="22" width="22" alt=""></i></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" type="button" href="<?php echo site_url('Auth/logout') ?>">Log Out</a>
                                        <a class="dropdown-item" href="#">shopping cart</a>
                                    </div>
                                </div>
                            </div> -->



                </nav>
            </div>
        </div>
    </div>
    <!-- <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div> -->
</header>