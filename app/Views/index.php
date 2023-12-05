<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>
<style>
    .container-white {
        padding: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: 0.3s;
    }

    .row {
        display: flex;
    }

    .p-5 {
        display: flex;
    }

    .column {
        flex: 50%;
        text-align: center;
    }

    h2 {
        text-align: center;
        font-size: 20px;
    }

    h1 {
        text-align: center;
    }

    canvas {
        width: 40%;
    }

    .dropdown {
        padding-left: 8px;

    }
</style>
<div>
    <h1>Kota Salatiga</h1>
</div>
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Pilih Kategori
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href=<?= base_url("index") ?>>Kependudukan</a>
        <a class="dropdown-item" href=<?= base_url("index_IPM") ?>>Indeks Pembangunan Manusia</a>
        <a class="dropdown-item" href=<?= base_url("index_IKK") ?>>Inflasi, Kemiskinan, dan Ketenagakerjaan</a>
        <a class="dropdown-item" href=<?= base_url("index_PDRB") ?>>Laju Pertumbuhan PDRB ADHK</a>
    </div>
</div>
<div class="container-white">
    <!-- Add a canvas element for the chart -->
    <div class="row">
        <div class="column">
            <h2>Berdasarkan Jumlah Penduduk</h2>
            <!-- <canvas id="populationChart" width="100" height="50"></canvas> -->
            <!-- <br>
        <h3>Berdasarkan Kepadatan Penduduk</h3>
        <canvas id="densityChart" width="100" height="50"></canvas> -->
        </div>
        <div class="column">
            <h2>Berdasarkan Kepadatan Penduduk</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="column">
        <div class="container-white">
            <canvas class="barchart" id="populationChart" width="100" height="50"></canvas>
        </div>
    </div>
    <div class="column">
        <div class="container-white">
            <canvas id="densityChart" width="100" height="50"></canvas>
        </div>
    </div>
</div>

<!-- Include Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Extract data for each location
    var Data2022 = <?= json_encode(array_column($all_data_JumlahPenduduk, '2022')); ?>;
    var Data2021 = <?= json_encode(array_column($all_data_JumlahPenduduk, '2021')); ?>;
    var Data2020 = <?= json_encode(array_column($all_data_JumlahPenduduk, '2020')); ?>;
    var Data2019 = <?= json_encode(array_column($all_data_JumlahPenduduk, '2019')); ?>;
    var Data2018 = <?= json_encode(array_column($all_data_JumlahPenduduk, '2018')); ?>;

    // Extract years
    var years = ['Argomulyo', 'Sidomukti', 'Sidorejo', 'Tingkir'];

    // Create a bar chart
    var ctx = document.getElementById('populationChart').getContext('2d');
    var populationChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: years,
            datasets: [{
                    label: '2022',
                    data: Data2022,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: '2021',
                    data: Data2021,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: '2020',
                    data: Data2020,
                    backgroundColor: 'rgba(255, 205, 86, 0.2)',
                    borderColor: 'rgba(255, 205, 86, 1)',
                    borderWidth: 1
                },
                {
                    label: '2019',
                    data: Data2019,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: '2018',
                    data: Data2018,
                    backgroundColor: 'rgba(153, 102, 255, 0.2)', // Light Purple Color
                    borderColor: 'rgb(153, 102, 255)', // Light Purple Color
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Extract data for population density
    var Density2022 = <?= json_encode(array_column($all_data_KepadatanPenduduk, '2022')); ?>;
    var Density2021 = <?= json_encode(array_column($all_data_KepadatanPenduduk, '2021')); ?>;
    var Density2020 = <?= json_encode(array_column($all_data_KepadatanPenduduk, '2020')); ?>;
    var Density2019 = <?= json_encode(array_column($all_data_KepadatanPenduduk, '2019')); ?>;
    var Density2018 = <?= json_encode(array_column($all_data_KepadatanPenduduk, '2018')); ?>;

    // Create a bar chart for population density
    var densityCtx = document.getElementById('densityChart').getContext('2d');
    var densityChart = new Chart(densityCtx, {
        type: 'bar',
        data: {
            labels: years,
            datasets: [{
                    label: '2022',
                    data: Density2022,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: '2021',
                    data: Density2021,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: '2020',
                    data: Density2020,
                    backgroundColor: 'rgba(255, 205, 86, 0.2)',
                    borderColor: 'rgba(255, 205, 86, 1)',
                    borderWidth: 1
                },
                {
                    label: '2019',
                    data: Density2019,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: '2018',
                    data: Density2018,
                    backgroundColor: 'rgba(153, 102, 255, 0.2)', // Light Purple Color
                    borderColor: 'rgb(153, 102, 255)', // Light Purple Color
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });


</script>

<?= $this->endSection(); ?>