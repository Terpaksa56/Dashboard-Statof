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
    <div class="column">
        <h2>LAJU PERTUMBUHAN PDRB ADHK SERI 2010 MENURUT LAPANGAN USAHA (Persen)</h2>
    </div>
</div>

<div class="column">
    <div class="container-white">
        <canvas class="PDRBLineChart" id="PDRBLineChart" width="100" height="50"></canvas>
    </div>

</div>

<!-- Include Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
        // Your data
        const years = [2018, 2019, 2020, 2021, 2022];
    const dataA = [4.55, 3.18, -1.38, 2.6, 3.59];
    const dataB = [-0.17, 1.36, -1.06, -2.83, -9.97];

    // Create datasets for each data series
    const datasets = [
      { label: 'A - Pertanian, Kehutanan, dan Perikanan', data: dataA,backgroundColor: 'rgba(153, 102, 255, 0.2)' ,borderColor: 'rgb(153, 102, 255)' },
      { label: 'B - Pertambangan dan Penggalian', data: dataB,backgroundColor: 'rgba(54, 162, 235, 0.2)',borderColor: 'rgba(54, 162, 235, 1)' }
    ];

    // Configure the chart
    const config = {
      type: 'line',
      data: {
        labels: years,
        datasets: datasets,
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top',
          },
        },
      },
    };

    // Render the chart
    const ctx = document.getElementById('PDRBLineChart').getContext('2d');
    const myLineChart = new Chart(ctx, config);
</script>

<?= $this->endSection(); ?>