<?php $this->load->view("template_Guest/header.php") ?>
<?php $this->load->view("template_Guest/navbar.php") ?>

    <!-- isi -->

<div class="container">
  <h2>Masukan Saran Anda Untuk Klinik Kami</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Nama :</label>
      <input type="input" class="form-control" id="email" placeholder="Enter nama" name="Nama">
    </div>
    <div class="form-group">
      <label for="pwd">Email :</label>
      <input type="email" class="form-control" id="pwd" placeholder="Enter email" name="Email">
    </div>
    <div class="form-group">
      <label for="comment">Saran :</label>
      <textarea class="form-control" rows="5" id="Saran" name="Saran"></textarea>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="Pernyataan"> saya menyatakan ini dengan Kondisi Normal </label>
    </div>
    <button type="submit" class="btn btn-default">Kirim</button>
 <?php $this->load->view("template_Guest/footer.php") ?>