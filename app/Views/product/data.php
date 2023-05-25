<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>




<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Product</h4>
            <div class="text-right" style="margin-bottom: 15px;">

                <div class="col-md-12">
                    <a href="<?= site_url('Product/create') ?>" class="btn btn-primary">Add Item</a>
                </div>
            </div>
            <div class="single-table datatable-dark">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead class="text-uppercase">
                            <tr>
                                <th scope="col">no</th>
                                <!-- <th scope="col">Kode Product</th> -->
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Picture</th>
                                <th scope="col">Action</th>
                            </tr>

                        </thead>
                        <tbody>


                            <?php $i = 1;
                            foreach ($product as $key) : ?>
                                <tr>
                                    <th scope="row"><?= $i++;  ?></th>

                                    <td><?= $key['name_product'] ?></td>
                                    <td><?= $key['description'] ?></td>
                                    <td>$<?= $key['price']  ?>.00</td>
                                    <td><?= $key['stock'] ?></td>
                                    <td><img src="/img/<?= $key['picture']  ?>" style="width: 45px; height: 50px;"></td>
                                    <td><button type="button" data-toggle="modal" data-target="#exampleModal<?= $key['kode_product'] ?>" class="btn btn-warning btn-sm fa fa-pencil"></button>
                                        <a href="<?= base_url('product/delete/' . $key['kode_product']) ?>" class="btn btn-danger btn-sm fa fa-trash"></a>
                                    </td>

                                </tr>

                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>

            </div>

        </div>
    </div>

    <!-- onclick="return confirm(are you sure you want to delete)" -->
    <!-- modal -->
    <?php $i = 1;
    foreach ($product as $key) { ?>
        <div class="modal fade" id="exampleModal<?= $key['kode_product'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">

                <!--    Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">edit</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>


                    <form action="<?= base_url('product/edit/' . $key['kode_product']) ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row">


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Name</label>
                                        <input type="text" class="form-control" id="field-2" name="name_product" value="<?= $key['name_product'] ?>">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-4" class="control-label">description</label>
                                        <input type="text" class="form-control" id="field-4" name="description" value="<?= $key['description']  ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-4" class="control-label">price</label>
                                        <input type="number" class="form-control" id="field-4" name="price" value="<?= $key['price']  ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-5" class="control-label">Stock</label>
                                        <input type="number" class="form-control" id="field-5" name="stock" value="<?= $key['stock'] ?>">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-6" class="control-label">Picture</label>
                                        <input type="file" class="form-control" id="picture" name="picture">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>

                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <!-- end modal -->

    <?php } ?>
</div>
<?= $this->endSection() ?>