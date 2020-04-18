<?php $this->load->view("template_Info/header.php") ?>
<?php $this->load->view("template_Info/navbar.php") ?>

<h1 style="text-align: center;">Daftar Pasien Di Klinik Bona</h1>

<div class="container">
  <table class="table table-dark,table-responsive">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NO Induk</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">NoHp</th>
      <th scope="col">Tanggal-Masuk</th>
      <th scope="col">Kamar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>Otto</td>
    </tr>
  </tbody>
</table>
   <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= site_url('pasien/TambahPasien') ?>" class="btn btn-primary">Info Kamar Pasien</a>
                </div>
  </div>
<?php $this->load->view("template_Info/footer.php") ?>