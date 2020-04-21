<?php $this->load->view("template/header_pasien.php") ?>
<?php $this->load->view("template_Guest/navbar.php") ?>
<style type="text/css">
  body{
      background: url("<?php echo base_url()?>assets/rs1.jpg") no-repeat;
      background-size: 100%;
    }
  h2{
      font-family: fantasy;
      text-transform: uppercase;
      color: #008B8B;
    }
</style>

    <!-- isi -->

<div class="container">
  <h2>Feedback Dari Anda Sangat Berharga Bagi Klinik Kami</h2>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible" role="alert" style="display: none">
                
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-danger alert-dismissible" role="alert" style="display: none">
                
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
  <form>
    <div class="form-group">
      <label for="email">Nama :</label>
      <input type="input" class="form-control" id="email" placeholder="Enter nama" name="nama_tamu">
    </div>
    <div class="form-group">
      <label for="pwd">Kategori :</label>
      <div class="form-check-inline">
        <?= form_radio('kategori','Saran','true', ['class'=>'form-check-input']) ?>
        Saran
      </div>
      <div class="form-check-inline">
        <?= form_radio('kategori','Kritik','', ['class'=>'form-check-input']) ?>
        Kritik
      </div>
      <div class="form-check-inline">
        <?= form_radio('kategori','Komentar','', ['class'=>'form-check-input']) ?>
        Komentar
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
      <label style="color: red;"><input type="checkbox" name="Pernyataan"><b>saya menyatakan ini dengan Kondisi Normal</b> </label>
    </div>
    <button type="button" id="btn-tambah" onclick="Tambah()"  class="btn-primary">Tamnbah</button>

<script type="text/javascript">
  
function Tambah(){
        $('.alert-success').hide();
        $('.alert-danger').hide();
        var nama_tamu =$("[name='nama_tamu']").val();
        var kategori =$("[name='kategori']").val();
        var email_tamu =$("[name='email_tamu']").val();
        var isi =$("[name='isi']").val();


        $.ajax({
            type:'POST',
            data:'nama_tamu='+nama_tamu+'&kategori='+kategori+'&email_tamu='+email_tamu+'&isi='+isi,
            url:'<?php echo base_url().'index.php/Input_Masukan/feedback' ?>',
            dataType:'json',
            success:function(hasil){
                if(hasil.status) {
                  $('.alert-success').html(hasil.message);
                  $('.alert-success').show();
                  
                  $("[name='nama_tamu']").val('');
                  $("[name='kategori']").val('');
                  $("[name='email_tamu']").val('');
                  $("[name='isi']").val('');
                } else {
                  $('.alert-danger').html(hasil.message);
                  $('.alert-danger').show();
                }
            }
        });

    }

</script>
<?php $this->load->view("template/footer_pasien.php") ?>
