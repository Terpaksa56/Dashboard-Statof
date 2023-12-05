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
            <h2>Indeks Pembangunan Manusia</h2>
            <!-- <canvas id="populationChart" width="100" height="50"></canvas> -->
            <!-- <br>
        <h3>Berdasarkan Kepadatan Penduduk</h3>
        <canvas id="densityChart" width="100" height="50"></canvas> -->
        </div>
        <div class="column">
            <h2>Angka Harapan Hidup</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="column">
        <div class="container-white">
            <canvas class="IPMlinechart" id="IPMLineChart" width="100" height="50"></canvas>
        </div>
    </div>
    <div class="column">
        <div class="container-white">
            <canvas class="AHPbarchart" id="HarapanHidupBarChart" width="100" height="50"></canvas>
        </div>
    </div>
</div>
<div class="container-white">
    <!-- Add a canvas element for the chart -->
    <div class="row">
        <div class="column">
            <h2>Pengeluaran Per Kapita</h2>
            <!-- <canvas id="populationChart" width="100" height="50"></canvas> -->
            <!-- <br>
        <h3>Berdasarkan Kepadatan Penduduk</h3>
        <canvas id="densityChart" width="100" height="50"></canvas> -->
        </div>
        <div class="column">
            <h2>Rata-Rata Sekolah (Tahun)</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="column">
        <div class="container-white">
            <canvas class="PKbarchart" id="PengeluaranPerkapitaBarChart" width="100" height="50"></canvas>
        </div>
    </div>
    <div class="column">
        <div class="container-white">
            <canvas class="RSlinechart" id="RataSekolahLineChart" width="100" height="50"></canvas>
        </div>
    </div>
</div>

<!-- Include Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Extract data for Angka Harapan Hidup
    var IPM2022 = <?= json_encode(array_column($all_data_IndeksPembangunan, '2022')); ?>;
    var IPM2021 = <?= json_encode(array_column($all_data_IndeksPembangunan, '2021')); ?>;
    var IPM2020 = <?= json_encode(array_column($all_data_IndeksPembangunan, '2020')); ?>;
    var IPM2019 = <?= json_encode(array_column($all_data_IndeksPembangunan, '2019')); ?>;
    var IPM2018 = <?= json_encode(array_column($all_data_IndeksPembangunan, '2018')); ?>;

    // Extract years
    var years = ['2018', '2019', '2020', '2021', '2022'];
    var ipmData = IPM2018.concat(IPM2019, IPM2020, IPM2021, IPM2022);
    // Create a line chart for Indeks Pembangunan Manusia
    var ctxLine = document.getElementById('IPMLineChart').getContext('2d');
    var lineChart = new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: years,
            datasets: [{

                label: 'IPM',
                data: ipmData,
                borderColor: 'rgb(153, 102, 255)',
                borderWidth: 1,
                fill: false
                // 82.41,83.12,83.14,83.6,84.35
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: false
                },
            }
        }
    });

    var RataLS2022 = <?= json_encode(array_column($all_data_LamaSekolah, 'Rata2022')); ?>;
    var RataLS2021 = <?= json_encode(array_column($all_data_LamaSekolah, 'Rata2021')); ?>;
    var RataLS2020 = <?= json_encode(array_column($all_data_LamaSekolah, 'Rata2020')); ?>;
    var RataLS2019 = <?= json_encode(array_column($all_data_LamaSekolah, 'Rata2019')); ?>;
    var RataLS2018 = <?= json_encode(array_column($all_data_LamaSekolah, 'Rata2018')); ?>;

    // Extract data for Harapan Lama Sekolah
    var HarapanLS2022 = <?= json_encode(array_column($all_data_LamaSekolah, 'Harapan2022')); ?>;
    var HarapanLS2021 = <?= json_encode(array_column($all_data_LamaSekolah, 'Harapan2021')); ?>;
    var HarapanLS2020 = <?= json_encode(array_column($all_data_LamaSekolah, 'Harapan2020')); ?>;
    var HarapanLS2019 = <?= json_encode(array_column($all_data_LamaSekolah, 'Harapan2019')); ?>;
    var HarapanLS2018 = <?= json_encode(array_column($all_data_LamaSekolah, 'Harapan2018')); ?>;

    // Extract years
    var years1 = ['2018', '2019', '2020', '2021', '2022'];

    // Create a line chart for Rata-Rata Lama Sekolah and Harapan Lama Sekolah
    var ctxLine = document.getElementById('RataSekolahLineChart').getContext('2d');
    var lineChart = new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: years1,
            datasets: [{
                label: 'Rata-Rata Lama Sekolah',
                data: [10.4, 10.41, 10.42, 10.66, 10.95],
                borderColor: 'rgb(153, 102, 255)',
                borderWidth: 1,
                fill: false
            }, {
                label: 'Harapan Lama Sekolah',
                data: [15, 15.34, 15.41, 15.42, 15.43],
                borderColor: 'rgb(255, 99, 132)',
                borderWidth: 1,
                fill: false
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: false
                },
            }
        }
    });
    console.log('RataLS2018:', RataLS2018);
    console.log('RataLS2019:', RataLS2019);

    // Extract data for Kepadatan Penduduk
    var HarapanHidup2022 = <?= json_encode(array_column($all_data_AngkaHarapanHidup, '2022')); ?>;
    var HarapanHidup2021 = <?= json_encode(array_column($all_data_AngkaHarapanHidup, '2021')); ?>;
    var HarapanHidup2020 = <?= json_encode(array_column($all_data_AngkaHarapanHidup, '2020')); ?>;
    var HarapanHidup2019 = <?= json_encode(array_column($all_data_AngkaHarapanHidup, '2019')); ?>;
    var HarapanHidup2018 = <?= json_encode(array_column($all_data_AngkaHarapanHidup, '2018')); ?>;
    var years = ['Laki-Laki', 'Perempuan', 'Laki-Laki dan Perempuan']
    // Create a bar chart for Kepadatan Penduduk
    var ctxBar = document.getElementById('HarapanHidupBarChart').getContext('2d');
    var barChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: years,
            datasets: [{
                    label: '2022',
                    data: HarapanHidup2022,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: '2021',
                    data: HarapanHidup2021,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: '2020',
                    data: HarapanHidup2020,
                    backgroundColor: 'rgba(255, 205, 86, 0.2)',
                    borderColor: 'rgba(255, 205, 86, 1)',
                    borderWidth: 1
                },
                {
                    label: '2019',
                    data: HarapanHidup2019,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: '2018',
                    data: HarapanHidup2018,
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgb(153, 102, 255)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: false
                }
            }
        }
    });

    // Extract data for Pengeluaran Per Kapita
    var PengeluaranPerkapita2022 = <?= json_encode(array_column($all_data_PengeluaranPerkapita, '2022')); ?>;
    var PengeluaranPerkapita2021 = <?= json_encode(array_column($all_data_PengeluaranPerkapita, '2021')); ?>;
    var PengeluaranPerkapita2020 = <?= json_encode(array_column($all_data_PengeluaranPerkapita, '2020')); ?>;
    var PengeluaranPerkapita2019 = <?= json_encode(array_column($all_data_PengeluaranPerkapita, '2019')); ?>;
    var PengeluaranPerkapita2018 = <?= json_encode(array_column($all_data_PengeluaranPerkapita, '2018')); ?>;
    var years = ['Pengeluaran Per Kapita']
    // Create a bar chart for Pengeluaran Per Kapita
    var ctxBar = document.getElementById('PengeluaranPerkapitaBarChart').getContext('2d');
    var barChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: years,
            datasets: [{
                    label: '2022',
                    data: PengeluaranPerkapita2022,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: '2021',
                    data: PengeluaranPerkapita2021,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: '2020',
                    data: PengeluaranPerkapita2020,
                    backgroundColor: 'rgba(255, 205, 86, 0.2)',
                    borderColor: 'rgba(255, 205, 86, 1)',
                    borderWidth: 1
                },
                {
                    label: '2019',
                    data: PengeluaranPerkapita2019,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: '2018',
                    data: PengeluaranPerkapita2018,
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgb(153, 102, 255)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: false
                }
            }
        }
    });
</script>

<?= $this->endSection(); ?>