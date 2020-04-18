<?php $this->load->view("template_Info/header.php") ?>
<?php $this->load->view("template_Info/navbar.php") ?>
<style type="text/css">
  body{
    background: url("<?php echo base_url()?>assets/nurse.jpg") no-repeat;
  }
  h1{
      font-family: fantasy;
      text-transform: uppercase;
      color: #008B8B;
  }
</style>

<h1 style="text-align: center;">Daftar Dokter Di Klinik Bona</h1>

<div class="container">
  <table class="table table-dark,table-responsive">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NO Kerja</th>
      <th scope="col">Nama</th>
      <th scope="col">NoHp</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
 
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>

    </tr>
  </tbody>
</table>
   <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= site_url('pasien/TambahPasien') ?>" class="btn btn-primary">Lihat Jadwal Perawat</a>
                </div>
  </div>
<?php $this->load->view("template_Info/footer.php") ?>
