<?= $this->extend('./layout/default') ?>

<?= $this->section('content') ?>



<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Welcome to Seller GSNW STYLE </h4>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script src="<?= base_url('Chart.bundle.mi.js') ?>"></script>
<?= $this->endSection() ?>