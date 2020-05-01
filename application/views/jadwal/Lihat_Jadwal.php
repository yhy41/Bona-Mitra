<?php $this->load->view("template/header_pasien.php") ?>
<?php $this->load->view("template/navbar.php") ?>
<div class="container">
 
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


  <div class="row mt-3">
      <div class="col md-6">
    <form id="form-search">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari perawat ... " name="keyword">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
          </div>
      </div>
    </form>
  </div>
   <h2>Jadwal Dokter</h2>
            <br>
                <a href="#form" data-toggle="modal" class="btn btn-primary">tambah data</a>
            </br>
   
    <table class="table mt-4">
      <thead>
        <tr>
             <th class="text-left" scope="col">NO</th>
            <th class="text-left" scope="col">HARI</th>
            <th class="text-left" scope="col">JAM MULAI</th>
            <th class="text-left" scope="col">JAM SELESAI</th>
            <th class="text-left" scope="col">Update</th>
            <th class="text-left" scope="col">Delete</th>
           
        </tr>
      </thead>
     <tbody id="target-perawat">
                    
      </tbody>
            </table><div class="modal fade" id="form" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Data Jadwal Praktek</h1>
                        </div>
                      <center><font color="red"><p id="pesan"></p></font></center>
                        <table class="table">
                            <tr>
                                <td>Hari</td>
                                <td><input type="text" name="hari" placeholder="input_Hari" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>JAM MULAI</td>
                                <td><input type="text" name="jam_mulai" placeholder="input_JAM_MULAI" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>JAM SELESAI</td>
                                <td><input type="text" name="jam_selesai" placeholder="input_JAM_Selesai" class="form-control"/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="button" id="btn-tambah" onclick="TambahJadwal()"  class="btn-primary">Tamnbah</button>

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
                            <h1>Data Jadwal Praktek</h1>
                        </div>
                      <center><font color="red"><p id="pesan"></p></font></center>
                        <table class="table">
                            <tr>
                                <td>Hari</td>
                                <td><input type="text" name="hari1" placeholder="input_Hari" class="form-control"  id="nama_pasien"/>
                                    <input type="text" name="id_jadwal1" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>JAM MULAI</td>
                                <td><input type="text" name="jam_mulai1" placeholder="input_JAM_MULAI" class="form-control" id="alamat" /></td>
                            </tr>
                            <tr>
                                <td>JAM SELESAI</td>
                                <td><input type="text" name="jam_selesai1" placeholder="input_JAM_Selesai" class="form-control"  id="kontak" /></td>
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

           
 
<script type="text/javascript">
             ambilData();
    function ambilData() {
        $.ajax({
            type:'POST',
            url:'<?php echo base_url()?>index.php/jadwal/LihatJadwal',
            dataType:'json',
            success: function(data){
                var baris='';
               for (var i=0; i<data.data.length; i++) {
                    baris += '<tr>'+
                                '<td>'+(i+1)+'</td>'+
                                '<td>'+data.data[i].hari+'</td>'+
                                '<td>'+data.data[i].jam_mulai+'</td>'+
                                '<td>'+data.data[i].jam_selesai+'</td>'+
                                '<td><a href="#formUbah"  data-toggle="modal" class="btn btn-primary buttonubah" id="'+data.data[i].id_jadwal+'">ubah</a>     </td>'+
                                '<td><a href=""  data-toggle="modal" class="btn btn-primary buttonhapus" id="'+data.data[i].id_jadwal+'">hapus</a></td>'+
                            '</tr>'

// onclick="ubahdata('+data[i].id_pasien+')"        

                }
                $('#target-perawat').html(baris);
                $('.buttonubah').on('click',ubahdata);
                $('.buttonhapus').on('click',HapusData);


            }

        });
    }

    function TambahJadwal(){

        $('.alert-success').hide();
        $('.alert-danger').hide();

        var hari =$("[name='hari']").val();
        var jam_mulai =$("[name='jam_mulai']").val();
        var jam_selesai =$("[name='jam_selesai']").val();


        $.ajax({
            type:'POST',
            data:'hari='+hari+'&jam_mulai='+jam_mulai+'&jam_selesai='+jam_selesai,
            url:'<?php echo base_url().'index.php/jadwal/TambahJadwal' ?>',
            dataType:'json',
            success:function(hasil){

                if(hasil.status) {
                    
                    $("#form").modal('hide');
                    ambilData();

                $('.alert-success').html(hasil.message);
                $('.alert-success').show();

                $("[name='nama_dokter']").val('');
                $("[name='alamat']").val('');
                $("[name='kontak']").val('');
                }else{

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

      var id_jadwal=$(this).attr("id");

      // var id_pasien=$(this).prev().prev().prev().prev().prev().prev().html();

         $.ajax({
            type:'POST',
            data:{id_jadwal:id_jadwal},
            url:'<?php echo base_url().'index.php/Jadwal/AmbilIdJadwal' ?>',
            dataType:'json',
            success: function(hasil){
                
                // console.log(hasil);
                $('[name="id_jadwal1"]').val(hasil.id_jadwal);
                $('[name="hari1"]').val(hasil.hari);
                $('[name="jam_mulai1"]').val(hasil.jam_mulai);
                $('[name="jam_selesai1"]').val(hasil.jam_selesai);
            }
         });
    }

    function inputUpdate(){

        $('.alert-success').hide();
        $('.alert-danger').hide();
            
        var id_jadwal =$("[name='id_jadwal1']").val();
        var hari =$("[name='hari1']").val();
        var jam_mulai =$("[name='jam_mulai1']").val();
        var jam_selesai =$("[name='jam_selesai1']").val();

        $.ajax({
            type:'POST',
             data:'id_jadwal='+id_jadwal+'&hari='+hari+'&jam_mulai='+jam_mulai+'&jam_selesai='+jam_selesai,
             url:'<?php echo base_url().'index.php/jadwal/UbahJadwal' ?>',
             dataType:'json',
             success:function(hasil){
                 $("#pesan").html(hasil.pesan);
                console.log(hasil);

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
        var tanya = confirm('apakaha antum yakin menghapus data ini ???');
        var id_jadwal=$(this).attr("id");
    if(tanya){
        $.ajax({
            type:'POST',
            data :{id_jadwal:id_jadwal},
            url:'<?php echo base_url().'index.php/jadwal/HapusJadwal' ?>',
            success:function(){
                ambilData();

            }
        });
    } 

 }

  $('#form-search').on('submit', (e) => {
        e.preventDefault();
        $.ajax({
                    type:'POST',
                    url:'<?php echo base_url()?>index.php/Jadwal/searchHandle',
                    data: $('#form-search').serialize(),
                    dataType:'json',
                    success: function(data){
                        var baris='';
                       for (var i=0; i<data.data.length; i++) {
                    baris += '<tr>'+
                                '<td>'+(i+1)+'</td>'+
                                '<td>'+data.data[i].hari+'</td>'+
                                '<td>'+data.data[i].jam_mulai+'</td>'+
                                '<td>'+data.data[i].jam_selesai+'</td>'+
                                '<td><a href="#formUbah"  data-toggle="modal" class="btn btn-primary buttonubah" id="'+data.data[i].id_jadwal+'">ubah</a>     </td>'+
                                '<td><a href=""  data-toggle="modal" class="btn btn-primary buttonhapus" id="'+data.data[i].id_jadwal+'">hapus</a></td>'+
                            '</tr>'

// onclick="ubahdata('+data[i].id_pasien+')"        

                    }
                        $('#target-perawat').html(baris);
                        $('.buttonubah').on('click',ubahdata);
                        $('.buttonhapus').on('click',HapusData);


                    }

        });
    });


</script>

<?php $this->load->view("template/footer_pasien.php") ?>