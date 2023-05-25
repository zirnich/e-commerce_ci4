<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<?php
$session = session();
$error = $session->getFlashdata('error');
?>

<?php if ($error) { ?>
    <p style="color:red">Terjadi Kesalahan:
    <ul>
        <?php foreach ($error as $e) { ?>
            <li><?php echo $e ?></li>
        <?php } ?>
    </ul>
    </p>
<?php } ?>
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">add Product</h4>

            <form action="<?php echo base_url('Product/save'); ?>" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="name_product">Name Product</label>
                    <input type="text" class="form-control" placeholder="name" name="name_product" autofocus>
                </div>
                <div class="form-group">
                    <label for="description">description</label>
                    <input type="text" class="form-control" placeholder="description" name="description">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" placeholder="price" name="price">
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" placeholder="stock" name="stock">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="picture" class="control-label">Picture</label>
                        <input type="file" class="form-control" id="picture" name="picture">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Add product</button>
            </form>



        </div>
    </div>
</div>




<?= $this->endSection() ?>