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
            <h2>Berdasarkan Kemiskinan</h2>
            <!-- <canvas id="populationChart" width="100" height="50"></canvas> -->
            <!-- <br>
        <h3>Berdasarkan Kepadatan Penduduk</h3>
        <canvas id="densityChart" width="100" height="50"></canvas> -->
        </div>
        <div class="column">
            <h2>Indeks Yang Mempengaruhi Kemiskinan</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="column">
        <div class="container-white">
            <canvas class="Kemiskinanlinechart" id="KemiskinanLineChart" width="100" height="50"></canvas>
        </div>
    </div>
    <div class="column">
        <div class="container-white">
            <canvas class="IndeksYangMempengaruhiBarchart" id="IndeksYangMempengaruhiBarChart" width="100" height="50"></canvas>
        </div>
    </div>
</div>
<div class="container-white">
    <!-- Add a canvas element for the chart -->
    <div class="row">
        <div class="column">
            <h2>Berdasarkan Inflasi</h2>
            <!-- <canvas id="populationChart" width="100" height="50"></canvas> -->
            <!-- <br>
        <h3>Berdasarkan Kepadatan Penduduk</h3>
        <canvas id="densityChart" width="100" height="50"></canvas> -->
        </div>
        <div class="column">
            <h2>Berdasarkan Ketenagakerjaan</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="column">
        <div class="container-white">
            <canvas class="InflasiLineChart" id="InflasiLineChart" width="100" height="50"></canvas>
        </div>
    </div>
    <div class="column">
        <div class="container-white">
            <canvas class="KetenagakerjaanLineChart" id="KetenagakerjaanLineChart" width="100" height="50"></canvas>
        </div>
    </div>
</div>

<!-- Include Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Extract years
    // Data
    var years = [2022, 2021, 2020, 2019, 2018];
    var garisKemiskinan = [518815, 480903, 454154, 418955, 380858];
    var persentaseMiskin = [4.73, 5.14, 4.94, 4.76, 4.84];

    // Combine years with 'Garis Kemiskinan' for Chart.js labels
    var combinedData = years.map((year, index) => ({
        year: year,
        garisKemiskinan: garisKemiskinan[index],
        persentaseMiskin: persentaseMiskin[index]
    }));

    // Prepare data for Chart.js
    var data = {
        labels: combinedData.map(entry => entry.year),
        datasets: [{
                label: 'Garis Kemiskinan',
                yAxisID: 'y-axis-1',
                data: combinedData.map(entry => entry.garisKemiskinan),
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                type: 'line'
            },
            {
                label: 'Persentase Penduduk Miskin',
                yAxisID: 'y-axis-2',
                data: combinedData.map(entry => entry.persentaseMiskin),
                backgroundColor: 'rgba(255, 205, 86, 0.2)',
                borderColor: 'rgba(255, 205, 86, 1)',
                type: 'line'
            }
        ]
    };

    // Chart configuration
    var options = {
        scales: {
            x: {
                type: 'category',
                labels: combinedData.map(entry => entry.year),
                scaleLabel: {
                    display: true,
                    labelString: 'Tahun'
                }
            },
            y: {
                id: 'y-axis-1',
                type: 'linear',
                position: 'left',
                scaleLabel: {
                    display: true,
                    labelString: 'Garis Kemiskinan'
                }
            },
            y2: {
                id: 'y-axis-2',
                type: 'linear',
                position: 'right',
                scaleLabel: {
                    display: true,
                    labelString: 'Persentase Penduduk Miskin (%)'
                }
            }
        }
    };

    // Create the line chart
    var ctx = document.getElementById('KemiskinanLineChart').getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: options
    });

    // Extract data for Indeks Yang Mempengaruhi Kemiskinan
    var IYM2022 = <?= json_encode(array_column($all_data_IndeksYangMempengaruhi, '2022')); ?>;
    var IYM2021 = <?= json_encode(array_column($all_data_IndeksYangMempengaruhi, '2021')); ?>;
    var IYM2020 = <?= json_encode(array_column($all_data_IndeksYangMempengaruhi, '2020')); ?>;
    var IYM2019 = <?= json_encode(array_column($all_data_IndeksYangMempengaruhi, '2019')); ?>;
    var IYM2018 = <?= json_encode(array_column($all_data_IndeksYangMempengaruhi, '2018')); ?>;
    var years = ['Indeks kedalaman Kemiskinan', 'Indeks Keparahan Kemiskinan']
    // Create a bar chart for Kepadatan Penduduk
    var ctxBar = document.getElementById('IndeksYangMempengaruhiBarChart').getContext('2d');
    var barChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: years,
            datasets: [{
                    label: '2022',
                    data: IYM2022,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: '2021',
                    data: IYM2021,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: '2020',
                    data: IYM2020,
                    backgroundColor: 'rgba(255, 205, 86, 0.2)',
                    borderColor: 'rgba(255, 205, 86, 1)',
                    borderWidth: 1
                },
                {
                    label: '2019',
                    data: IYM2019,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: '2018',
                    data: IYM2018,
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

    // Extract data for Inflasi
    var Inflasi2022 = <?= json_encode(array_column($all_data_Inflasi, '2022')); ?>;
    var Inflasi2021 = <?= json_encode(array_column($all_data_Inflasi, '2021')); ?>;
    var Inflasi2020 = <?= json_encode(array_column($all_data_Inflasi, '2020')); ?>;
    var Inflasi2019 = <?= json_encode(array_column($all_data_Inflasi, '2019')); ?>;
    var Inflasi2018 = <?= json_encode(array_column($all_data_Inflasi, '2018')); ?>;

    // Extract years
    var years = ['2018', '2019', '2020', '2021', '2022'];
    var InflasiData = Inflasi2018.concat(Inflasi2019, Inflasi2020, Inflasi2021, Inflasi2022);
    // Create a line chart for Inflasi
    var ctxLine = document.getElementById('InflasiLineChart').getContext('2d');
    var lineChart = new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: years,
            datasets: [{

                label: 'Inflasi',
                data: InflasiData,
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

    // Extract years
    var years1 = ['2018', '2019', '2020', '2021', '2022'];

    // Create a line chart for Ketenagakerjaan
    var ctxLine = document.getElementById('KetenagakerjaanLineChart').getContext('2d');
    var lineChart = new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: years1,
            datasets: [{
                label: 'Tingkat Pengangguran Terbuka',
                data: [4.23, 4.33, 7.44, 7.26, 5.58],
                borderColor: 'rgb(153, 102, 255)',
                borderWidth: 1,
                fill: false
            }, {
                label: 'TIngkat Pengangguran Angkatan Kerja',
                data: [72.15, 66.96, 70.23, 70.36, 71],
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
</script>

<?= $this->endSection(); ?>