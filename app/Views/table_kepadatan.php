<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>

<style>
  h3 {
    text-align: center;
  }

  .container {
    width: 50%;
    margin: auto;
  }

  table {
    width: 100%;
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
    <a class="dropdown-item" href=<?= base_url("table") ?>>Jumlah Penduduk</a>
    <a class="dropdown-item" href=<?= base_url("table_kepadatan") ?>>Kepadatan Penduduk</a>
    <a class="dropdown-item" href=<?= base_url("table_IPM") ?>>Indeks Pembangunan Manusia</a>
  </div>
</div>
<div class="container">
  <h3>Kepadatan Penduduk</h3>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Kepadatan Penduduk</th>
        <th scope="col">2022</th>
        <th scope="col">2021</th>
        <th scope="col">2020</th>
        <th scope="col">2019</th>
        <th scope="col">2018</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($all_data_KepadatanPenduduk as $data) : ?>
        <tr>
          <td><?= $data->ID; ?></td>
          <td><?= $data->{'Kepadatan'}; ?></td>
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

<?= $this->endSection(); ?>