<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>


<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">transaksi</h4>
            <div class="text-right" style="margin-bottom: 15px;">

                <div class="col-md-12">

                </div>
            </div>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead class="text-uppercase">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">date</th>
                                <th scope="col">Kode Product</th>
                                <th scope="col">kode user</th>
                                <th scope="col">jumlah beli</th>
                                <th scope="col">total</th>
                                <th scope="col">alamat</th>
                                <th scope="col">status</th>
                                <th scope="col">action</th>
                            </tr>

                        </thead>
                        <tbody>


                            <?php $i = 1;
                            foreach ($transaksi as $key) : ?>
                                <tr>
                                    <th scope="row"><?= $i++;  ?></th>
                                    <td><?= $key['date'] ?></td>
                                    <td><?= $key['id_barang'] ?></td>
                                    <td><?= $key['id_pembeli'] ?></td>
                                    <td><?= $key['qty']  ?></td>
                                    <td><?= $key['total_harga'] ?></td>
                                    <td><?= $key['alamat'] ?></td>
                                    <td><?= $key['status'] ?></td>
                                    <td><button type="button" data-toggle="modal" data-target="#exampleModal<?= $key['id'] ?>" class="btn btn-warning btn-sm fa fa-pencil"></button>

                                    </td>

                                </tr>

                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>

            </div>

        </div>
    </div>

    <?php $i = 1;
    foreach ($transaksi as $key) { ?>
        <div class="modal fade" id="exampleModal<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">

                <!--    Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">edit</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>


                    <form action="<?= base_url('transaksi/edit/' . $key['id']) ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row">


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Name</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="<?= $key['status']  ?>">--Pilih Status--</option>
                                            <option value="Waiting">Waiting</option>
                                            <option value="Process">Process</option>
                                            <option value="Cancel">Cancel</option>
                                            <option value="Complete">Complete</option>
                                        </select>
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




    <?= $this->endSection() ?>