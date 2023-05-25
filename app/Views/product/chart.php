<?= $this->extend('./layout/default') ?>

<?= $this->section('content') ?>


<div class="main-content-inner">
    <!-- bar chart start -->
    <div class="row">
        <?php
        foreach ($product as $key) {
            $stock[] = $key['stock'];
        } ?>




        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <div class="col-lg-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <canvas id="myChart"></canvas>
                    <script>
                        const labels = [
                            'January',
                            'February',
                            'March',
                            'April',
                            'May',
                            'June',
                        ];
                        const data = {
                            labels: <?= json_encode($stock) ?>,
                            datasets: [{
                                label: 'chart',
                                backgroundColor: 'rgb(255, 99, 132)',
                                borderColor: 'rgb(255, 99, 132)',
                                data: <?= json_encode($stock) ?>,
                            }]
                        };

                        const config = {
                            type: 'bar',
                            data: data,
                            options: {}
                        };
                        const myChart = new Chart(
                            document.getElementById('myChart'),
                            config
                        );
                    </script>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <div id="ambarchart5"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <div id="ambarchart6"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- bar chart end -->
</div>
<!-- line chart end -->

<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script src="<?= base_url('Chart.bundle.mi.js') ?>"></script>
<?= $this->endSection() ?>