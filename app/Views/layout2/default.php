<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GSNW STYLE</title>
    <link rel="icon" href="<?= base_url() ?>/assets2/img/logo/logo.jpg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets2/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets2/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets2/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets2/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets2/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets2/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets2/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets2/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets2/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <?= $this->include('layout2/header')  ?>
    <!-- Header part end-->



    <!-- product list start-->
    <?= $this->renderSection('content') ?>
    <!-- product list end-->


    <!-- trending item start-->

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
                            when human contacts are so quick. Fashion is instant language..</h4>
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


    <!--::footer_part start::-->
    <?= $this->include('layout2/footer')  ?>
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
    <script src="<?= base_url() ?>/assets2/js/jquery.nice-select.min.js"></script>
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