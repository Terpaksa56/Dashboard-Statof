<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>

<style>
    h3 {
        text-align: center;
    }

    .container-white {
        width: 40%;
        margin: auto;
        /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    border-radius: 10px; */
    }

    table {
        width: 70%;
        margin-top: 20px;
    }

    th,
    td {
        text-align: center;
        padding: 8px;
    }

    .dropdown {
        margin-left: 10px;
    }
</style>
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Pilih Kategori
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href=<?= base_url("table") ?>>Kependudukan</a>
        <!-- <a class="dropdown-item" href=<?= base_url("table_kepadatan") ?>>Kepadatan Penduduk</a> -->
        <a class="dropdown-item" href=<?= base_url("table_IPM") ?>>Indeks Pembangunan Manusia</a>
        <a class="dropdown-item" href=<?= base_url("table_IKK") ?>>Inflasi, Kemiskinan, dan Ketenagakerjaan</a>
        <a class="dropdown-item" href=<?= base_url("table_LajuPertumbuhan") ?>>Laju Pertumbuhan PDRB ADHK</a>
    </div>
</div>
<div class="row">
    <div class="container-white">
        <h3>LAJU PERTUMBUHAN PDRB ADHK SERI 2010 MENURUT LAPANGAN USAHA (Persen)</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">2022</th>
                    <th scope="col">2021</th>
                    <th scope="col">2020</th>
                    <th scope="col">2019</th>
                    <th scope="col">2018</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_data_LajuPertumbuhan as $data) : ?>
                    <tr>
                        <td><?= $data->ID; ?></td>
                        <td><?= $data->{'Keterangan'}; ?></td>
                        <td><?= $data->{'2022'}; ?></td>
                        <td><?= $data->{'2021'}; ?></td>
                        <td><?= $data->{'2020'}; ?></td>
                        <td><?= $data->{'2019'}; ?></td>
                        <td><?= $data->{'2018'}; ?></td>
                        <!-- Add more cells based on your KotaSalatiga model columns -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>