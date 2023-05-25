<!--::header part start::-->
<?= $this->include('home/header') ?>
<!-- Header part end-->

<!-- breadcrumb part start-->
<section class="breadcrumb_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <h2>Sign in </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb part end-->

<!--================login_part Area =================-->
<section class="login_part section_padding ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="login_part_text text-center">
                    <div class="login_part_text_iner">
                        <h2>New to our Shop?</h2>
                        <p>There are advances being made in science and technology
                            everyday, and a good example of this is the</p>
                        <a href="#" class="btn_3">Create an Account</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <h3>Welcome Back ! <br>
                            Please Sign in now</h3>
                        <form class="row contact_form" action="<?php echo base_url('auth/ak_login') ?>" method="post" novalidate="novalidate">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="username" name="username" value="<?php echo session()->getFlashdata('username') ?>" placeholder="Username">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account d-flex align-items-center">
                                    <input type="checkbox" id="f-option" name="selector">
                                    <label for="f-option">Remember me</label>
                                </div>
                                <button type="submit" value="submit" class="btn_3" name="submit">
                                    log in
                                </button>
                                <a class="lost_pass" href="#">forget password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================login_part end =================-->

<!--::footer_part start::-->
<?= $this->include('home/footer') ?>
<!--::footer_part end::-->

<!-- jquery plugins here-->
<script src="<?= base_url() ?>/assets2/js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="<?= base_url() ?>/assets2/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="<?= base_url() ?>/assets2/js/bootstrap.min.js"></script>
<!-- easing js -->
<script src="<?= base_url() ?>/assets2/js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="<?= base_url() ?>/assets2/js/swiper.min.js"></script>
<!-- swiper js -->
<script src="<?= base_url() ?>/assets2/js/mixitup.min.js"></script>
<!-- particles js -->
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