<?php

use App\Controllers\Inventory;
?>
<div class="sidebar-header">
    <div class="logo">
        <a href="index.html"><img src="<?= base_url() ?>/assets2/img/logo/logo_transparent1.png" alt="logo"></a>
    </div>
</div>
<div class="main-menu">
    <div class="menu-inner">
        <nav>
            <ul class="metismenu" id="menu">

                <li><a href="<?= site_url('Product/home') ?>"><i class="ti-map-alt"></i> <span>Dashboard</span></a></li>
                <li><a href="<?= site_url('product') ?>"><i class="ti-map-alt"></i> <span>Product</span></a></li>
                <li><a href="<?= site_url('transaksi') ?>"><i class="ti-receipt"></i> <span>Transaction</span></a></li>
                <li><a href="<?= site_url('product/chart') ?>"><i class="ti-receipt"></i> <span>Chart/Graph</span></a></li>

                <!-- <li class="">
                    <a href=" " aria-expanded="true"><i class=""></i><span>dashboard</span></a>
                    <ul class="collapse">
                        <li><a href="index.html">ICO dashboard</a></li>
                        <li><a href="index2.html">Ecommerce dashboard</a></li>
                        <li class=""><a href="index3.html">SEO dashboard</a></li>
                    </ul>
                </li> -->


            </ul>
        </nav>
    </div>
</div>