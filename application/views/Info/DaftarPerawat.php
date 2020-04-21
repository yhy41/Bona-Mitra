<?php $this->load->view("template/header_pasien.php") ?>
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
  table    { border:ridge 1px black; background-color:#C0C0C0; color:black; }
  table td { border:inset 1px black; }
</style>

<h1 style="text-align: center;">Daftar Perawat Di Klinik Bona</h1>

<div class="container">
  <div class="col md-6">
    <form action="" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari perawat ... " name="keyword">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
          </div>
      </div>
    </form>
  </div>
  <table class="table table-dark,table-responsive">
  <thead>
    <tr>
        <th class="text-center" scope="col">ID</th>
        <th class="text-center" scope="col">Nama</th>
        <th class="text-center" scope="col">Alamat</th>
        <th class="text-center" scope="col">Kontak</th>
    </tr>
  </thead>
  <tbody id="target-perawat">
   
  </tbody>
</table>
  </div>
  <script type="text/javascript">
       ambilData();
    function ambilData() {
        $.ajax({
            type:'POST',
            url:'<?php echo base_url()?>index.php/perawat/LihatPerawat',
            dataType:'json',
            success: function(data){
                var baris='';
               for (var i=0; i<data.length; i++) {
                    baris += '<tr>'+
                                '<td>'+(i+1)+'</td>'+
                                '<td>'+data[i].nama_perawat+'</td>'+
                                '<td>'+data[i].alamat+'</td>'+
                                '<td>'+data[i].kontak+'</td>'+
                            '</tr>'

// onclick="ubahdata('+data[i].id_pasien+')"        

                }
                $('#target-perawat').html(baris);
            }

        });
    }


  </script>
<?php $this->load->view("template/footer.php") ?>
