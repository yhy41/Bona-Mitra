<?php $this->load->view("template_Guest/header.php") ?>
<?php $this->load->view("template_Guest/navbar.php") ?>

    <!-- isi -->

<div class="container">
  <h2>Masukan Komentar Anda Untuk Klinik Kami</h2>
  <form action="<?= site_url('Input_Masukan/feedback') ?>" method="post">
    <div class="form-group">
      <label for="email">Nama :</label>
      <input type="input" class="form-control" id="email" placeholder="Enter nama" name="nama_tamu">
    </div>
    <div class="form-group">
      <label for="pwd">Masukan :</label>
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilih
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a id="Saran" name="kategori" value="Saran">Saran</a></li>
            <li><a id="Komentar" name="kategori" value="Komentar" >Komentar</a></li>
            <li><a id="Kritik" name="kategori" value="Kritik">Kritik</a></li>
        </ul>
      </div>
    </div>
  
    <div class="form-group">
      <label for="pwd">Email :</label>
      <input type="email" class="form-control" id="pwd" placeholder="Enter email" name="email_tamu">
    </div>
    <div class="form-group">
      <label for="comment">Masukan yang ingin anda sampaikan :</label>
      <textarea class="form-control" rows="5" id="Saran" name="isi"></textarea>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="Pernyataan"> saya menyatakan ini dengan Kondisi Normal </label>
    </div>
    <button type="submit" class="btn btn-default">Kirim</button>

<?php $this->load->view("template_Guest/footer.php") ?>
