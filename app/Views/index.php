<!--::header part start::-->
<?= $this->include('home/header') ?>


<!-- Header part end-->

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
                        <a href="<?php echo base_url('Auth/login') ?>" class="btn_1">shop now</a>
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
                                <a href="<?php echo base_url('Auth/login') ?>" class="btn_3">Explore Now</a>
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
                                <a href="<?php echo base_url('Auth/login') ?>" class="btn_3">Explore Now</a>
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
                                <a href="<?php echo base_url('Auth/login') ?>" class="btn_3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product list end-->


<!-- trending item start-->
<section class="trending_items">
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Trending Items</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($product as $key) : ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <div class="single_product_item_thumb">
                            <img src="/img/<?= $key['picture']  ?>" alt="#" class="img-fluid">
                        </div>
                        <h3> <a href="single-product.html"><?= $key['description']  ?></a> </h3>
                        <p>$<?= $key['price']  ?>.00</p>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="<?= base_url() ?>/assets2/img/tranding_item/tranding_item_2.png" alt="#" class="img-fluid">
                        <h3> <a href="single-product.html">Foam filling cotton slow rebound pillows</a> </h3>
                        <p>From $5</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="<?= base_url() ?>/assets2/img/tranding_item/tranding_item_3.png" alt="#" class="img-fluid">
                        <h3> <a href="single-product.html">Memory foam filling cotton Slow rebound pillows</a> </h3>
                        <p>From $5</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="<?= base_url() ?>/assets2/img/tranding_item/tranding_item_4.png" alt="#" class="img-fluid">
                        <h3> <a href="single-product.html">Cervical pillow for airplane
                                car office nap pillow</a> </h3>
                        <p>From $5</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="<?= base_url() ?>/assets2/img/tranding_item/tranding_item_5.png" alt="#" class="img-fluid">
                        <h3> <a href="single-product.html">Foam filling cotton slow rebound pillows</a> </h3>
                        <p>From $5</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="<?= base_url() ?>/assets2/img/tranding_item/tranding_item_6.png" alt="#" class="img-fluid">
                        <h3> <a href="single-product.html">Memory foam filling cotton Slow rebound pillows</a> </h3>
                        <p>From $5</p>
                    </div>
                </div> -->
            <?php endforeach; ?>
        </div>

    </div>
</section>
<!-- trending item end-->

<!-- client review part here -->
<section class="client_review">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="client_review_slider owl-carousel">
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="<?= base_url() ?>/assets2/img/client.png" alt="#">
                        </div>
                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                        <h5>- Micky Mouse</h5>
                    </div>
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="<?= base_url() ?>/assets2/img/client_1.png" alt="#">
                        </div>
                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                        <h5>- Micky Mouse</h5>
                    </div>
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="<?= base_url() ?>/assets2/img/client_2.png" alt="#">
                        </div>
                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                        <h5>- Micky Mouse</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- client review part end -->


<!-- feature part here -->
<section class="feature_part section_padding">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <div class="feature_part_tittle">
                    <h4>What you wear is how you present yourself to the world, especially today,
                        when human contacts are so quick. Fashion is instant language.</h4>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="feature_part_content">
                    <p>Don’t be into trends. Don’t make fashion own you, but you decide what you are,
                        what you want to express by the way you dress and the way you live.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="<?= base_url() ?>/assets2/img/icon/feature_icon_1.svg" alt="#">
                    <h4>Credit Card Support</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="<?= base_url() ?>/assets2/img/icon/feature_icon_2.svg" alt="#">
                    <h4>Online Order</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="<?= base_url() ?>/assets2/img/icon/feature_icon_3.svg" alt="#">
                    <h4>Free Delivery</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="<?= base_url() ?>/assets2/img/icon/feature_icon_4.svg" alt="#">
                    <h4>Product with Gift</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature part end -->

<!-- subscribe part here -->
<section class="subscribe_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="subscribe_part_content">
                    <h2>Get promotions & updates!</h2>
                    <p>What you wear is how you present yourself to the world,
                        especially today, when human contacts are so quick. Fashion is instant language .</p>
                    <div class="subscribe_form">
                        <input type="email" placeholder="Enter your mail">
                        <a href="#" class="btn_1">Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe part end -->

<!--::footer_part start::-->
<?= $this->include('home/footer') ?>
<!--::footer_part end::-->

<!-- jquery plugins here-->
<script src="<?= base_url() ?>/assets2/js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="<?= base_url() ?>/assets2/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="<?= base_url() ?>/assets2/js/bootstrap.min.js"></script>
<!-- magnific popup js -->
<script src="<?= base_url() ?>/assets2/js/jquery.magnific-popup.js"></script>
<!-- carousel js -->
<script src="<?= base_url() ?>/assets2/js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<!-- slick js -->
<script src="<?= base_url() ?>/assets2/js/slick.min.js"></script>
<script src="<?= base_url() ?>/assets2/js/jquery.counterup.min.js"></script>
<script src="<?= base_url() ?>/assets2/js/waypoints.min.js"></script>
<script src="<?= base_url() ?>/assets2/js/contact.js"></script>
<script src="<?= base_url() ?>/assets2/js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url() ?>/assets2/js/jquery.form.js"></script>
<script src="<?= base_url() ?>/assets2/js/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>/assets2/js/mail-script.js"></script>
<!-- custom js -->
<script src="<?= base_url() ?>/assets2/js/custom.js"></script>
</body>

</html>