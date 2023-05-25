<?= $this->extend('./layout2/default') ?>

<?= $this->section('content') ?>

<section class="breadcrumb_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <h2>product list</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb part end-->

<!-- product list part start-->
<section class="product_list section_padding">
    <div class="container">

        <div class="col-md-12">
            <div class="product_list">
                <div class="row">
                    <?php
                    foreach ($product as $key) : ?>
                        <div class="col-lg-4 pb-3">

                            <div class="single_product_item">
                                <img src="/img/<?= $key['picture']  ?>" alt="" class="img-fluid">
                                <h3> <a href=""><?= $key['description']  ?></a> </h3>
                                <p>$<?= $key['price']  ?>.00</p>
                                <a href="#" class="btn_3" data-toggle="modal" data-target="#exampleModal<?= $key['kode_product'] ?>">add to cart</a>

                            </div>

                        </div>

                    <?php endforeach; ?>
                </div>

                <div class="load_more_btn text-center">
                    <a href="#" class="btn_3">Load More</a>
                </div>
            </div>
            <!-- Modal -->
            <?php $i = 1;
            foreach ($product as $key) { ?>
                <div class="modal fade" id="exampleModal<?= $key['kode_product'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('product/edit/' . $key['kode_product']) ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <img src="/img/<?= $key['picture']  ?>" alt="" class="img-fluid">
                                    <h3> <a><?= $key['description']  ?></a> </h3>
                                    <p>$<?= $key['price']  ?>.00</p>
                                    <div class="form-group">
                                        <label for="field-5" class="control-label">quantity</label>
                                        <input type="number" class="form-control" id="field-5" name="stock" value="1" min="0">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end modal -->
            <?php } ?>
        </div>

    </div>
</section>


<?= $this->endSection() ?>