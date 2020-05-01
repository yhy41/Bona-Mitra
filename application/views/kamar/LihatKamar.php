<?php $this->load->view("template/header_pasien.php") ?>
<?php $this->load->view("template/navbar.php") ?>


<div class="container">
  <h3 class="text-center">Informasi Kamar</h3>
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


    <div class="row mt-">
        <div class="col md-4">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari nama Kamar ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <br>
              <a href="#form" data-toggle="modal" class="btn btn-primary">tambah data</a>
            </br>
            <table class="table mt-5">
                <thead>
                    <tr>
                      <th class="text-left" scope="col">ID KAMAR</th>
                      <th class="text-left" scope="col">NAMA KAMAR</th>
                      <th class="text-left" scope="col">Update</th>
                      <th class="text-left" scope="col">Delete</th>
                    </tr>
                 <tbody id="target-perawat">
                    
                </tbody>
            </table><div class="modal fade" id="form" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Data Kamar</h1>
                        </div>
                      <center><font color="red"><p id="pesan"></p></font></center>
                        <table class="table">
                            <tr>
                                <td>Nama Kamar</td>
                                <td><input type="text" name="nama_kamar" placeholder="input_nama" class="form-control" /></td>
                            </tr>
          
                            <tr>
                                <td></td>
                                <td>
                                    <button type="button" id="btn-tambah" onclick="TambahKamar()"  class="btn-primary">Tamnbah</button>

                                    <button type="button" data-dismiss="modal" class="btn-primary">Batal</button>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>



            <!-- MODAL EDIT -->
        <div class="modal fade" id="formUbah" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Data Kamar</h1>
                        </div>
                      <center><font color="red"><p id="pesan"></p></font></center>
                        <table class="table">
                            <tr>
                                <td>Nama Kamar</td>
                                <td><input type="text" name="nama_kamar1" placeholder="input_nama" class="form-control"  id="nama_pasien"/>
                                    <input type="text" name="id_kamar1" value="" />
                                </td>
                            </tr>
                        
                            <tr>
                                <td></td>
                                <td>
                                    <button type="button" id="btn-ubah" onclick="inputUpdate()" class="btn-primary">Ubah</button>

                                   
                                    <button type="button" data-dismiss="modal" class="btn-primary">Batal</button>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        <!--END MODAL EDIT-->

           
                      
        </div>
    </div>
</div>

<script type="text/javascript">
             ambilData();
    function ambilData() {
        $.ajax({
            type:'POST',
            url:'<?php echo base_url()?>index.php/kamar/LihatKamar',
            dataType:'json',
            success: function(data){
                var baris='';
               for (var i=0; i<data.length; i++) {
                    baris += '<tr>'+
                                '<td>'+(i+1)+'</td>'+
                                '<td>'+data[i].nama_kamar+'</td>'+
                                
                                '<td><a href="#formUbah"  data-toggle="modal" class="btn btn-primary buttonubah" id="'+data[i].id_kamar+'">ubah</a>     </td>'+
                                '<td><a href=""  data-toggle="modal" class="btn btn-primary buttonhapus" id="'+data[i].id_kamar+'">hapus</a></td>'+
                            '</tr>'

// onclick="ubahdata('+data[i].id_pasien+')"        

                }
                $('#target-perawat').html(baris);
                $('.buttonubah').on('click',ubahdata);
                $('.buttonhapus').on('click',HapusData);


            }

        });
    }

    function TambahKamar(){
        $('.alert-success').hide();
        $('.alert-danger').hide();
        var nama_kamar =$("[name='nama_kamar']").val();

        $.ajax({
            type:'POST',
            data:'nama_kamar='+nama_kamar,
            url:'<?php echo base_url().'index.php/Kamar/TambahKamar' ?>',
            dataType:'json',
            success:function(hasil){
                if(hasil.status) {
                    $("#form").modal('hide');
                    ambilData();

                $('.alert-success').html(hasil.message);
                $('.alert-success').show();

                $("[name='nama_kamar']").val('');

                }else {
                  $("#form").modal('hide');
                    ambilData();
                  $('.alert-danger').html(hasil.message);
                  $('.alert-danger').show();
                }
            }
        });

    }

        // ambil id dari database
    function ubahdata(){

      var id_kamar=$(this).attr("id");

         $.ajax({
            type:'POST',
            data:{id_kamar:id_kamar},
            url:'<?php echo base_url().'index.php/kamar/AmbilIdKamar' ?>',
            dataType:'json',
            success: function(hasil){
                
                // console.log(hasil);
                $('[name="id_kamar1"]').val(hasil.id_kamar);
                $('[name="nama_kamar1"]').val(hasil.nama_kamar);
            }
         });
    }




    function inputUpdate(){
        $('.alert-success').hide();
        $('.alert-danger').hide();
        var id_kamar =$("[name='id_kamar1']").val();
        var nama_kamar =$("[name='nama_kamar1']").val();

        $.ajax({
            type:'POST',
             data:'id_kamar='+id_kamar+'&nama_kamar='+nama_kamar,
             url:'<?php echo base_url().'index.php/kamar/UbahKamar' ?>',
             dataType:'json',
             success:function(hasil){
                 $("#pesan").html(hasil.pesan);

                if(hasil.status) {
                        $("#formUbah").modal('hide');
                        ambilData();
                        $('.alert-success').html(hasil.message);
                        $('.alert-success').show();

                }else{
                      $("#formUbah").modal('hide');
                        ambilData();
                        $('.alert-danger').html(hasil.message);
                        $('.alert-danger').show();

                }
            }
        });
    }



    function HapusData() {
        $('.alert-success').hide();
        $('.alert-danger').hide();
        var tanya = confirm('apakaha antum yakin menghapus data ini ???');
        var id_kamar=$(this).attr("id");
    if(tanya){
        $.ajax({
            type:'POST',
            data :{id_kamar:id_kamar},
            url:'<?php echo base_url().'index.php/kamar/HapusKamar' ?>',
            success:function(hasil){
                  ambilData();
                if(hasil.status) {
              
                $('.alert-success').html(hasil.message);
                $('.alert-success').show();

                }
            }
        });
    } 

}


</script>
<?php $this->load->view("template/footer_pasien.php") ?>