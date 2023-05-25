<?= $this->extend('./layout2/default') ?>

<?= $this->section('content') ?>

<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h1>Best quality
                            T-Shirt</h1>
                        <p>Create your own style… let it be unique for yourself and yet identifiable for others.</p>
                        <a href="<?php echo base_url('Buyercontroller/shop') ?>" class="btn_1">shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner_img">
        <img src="<?= base_url() ?>/assets2/img/product/shani.jpg" alt="#" class="img-fluid">
        <img src="<?= base_url() ?>/assets2/img/banner_pattern.png " alt="#" class="pattern_img img-fluid">
    </div>
</section>
<!-- banner part start-->

<!-- product list start-->
<section class="single_product_list">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single_product_iner">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_img">
                                <img src="<?= base_url() ?>/assets2/img/product/anin.png" class="img-fluid" alt="#">
                                <img src="<?= base_url() ?>/assets2/img/product_overlay.png" alt="#" class="product_overlay img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <div class="single_product_content">
                                <h5>Started from $15</h5>
                                <h2> <a href="single-product.html">Like the wind that will always breathe joy in your days.</a> </h2>
                                <a href="<?php echo base_url('Buyercontroller/shop') ?>" class="btn_3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_product_iner">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_img">
                                <img src="<?= base_url() ?>/assets2/img/product/ashel.png" class="img-fluid" alt="#">
                                <img src="<?= base_url() ?>/assets2/img/product_overlay.png" alt="#" class="product_overlay img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <div class="single_product_content">
                                <h5>Started from $15</h5>
                                <h2> <a href="single-product.html">like the morning dew that cools the mood</a> </h2>
                                <a href="<?php echo base_url('Buyercontroller/shop') ?>" class="btn_3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_product_iner">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_img">
                                <img src="<?= base_url() ?>/assets2/img/product/eli.png" class="img-fluid" alt="#">
                                <img src="<?= base_url() ?>/assets2/img/product_overlay.png" alt="#" class="product_overlay img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <div class="single_product_content">
                                <h5>Started from $15</h5>
                                <h2> <a href="single-product.html">A little progress every day adds up to big results </a> </h2>
                                <a href="<?php echo base_url('Buyercontroller/shop') ?>" class="btn_3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product list end-->


<?= $this->endSection() ?>