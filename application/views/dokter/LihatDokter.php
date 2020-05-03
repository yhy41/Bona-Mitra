<?php $this->load->view("template/header_dokter.php") ?>
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

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Dokter</h3>
            <form id="form-search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari dokter ... " name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                </div>
            </form>
            <br>
                <a href="#form" data-toggle="modal" class="btn btn-primary">tambah data</a>
            </br>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-left" scope="col">No</th>
                        <th class="text-left" scope="col">Nama</th>
                        <th class="text-left" scope="col">Alamat</th>
                        <th class="text-left" scope="col">Kontak</th>
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
                            <h1>Data Dokter</h1>
                        </div>
                      <center><font color="red"><p id="pesan"></p></font></center>
                        <table class="table">
                            <tr>
                                <td>Nama Dokter</td>
                                <td><input type="text" name="nama_dokter" placeholder="nama dokter" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" name="alamat" placeholder="alamat dokter" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td>Kontak</td>
                                <td><input type="text" name="kontak" placeholder="kontak dokter" class="form-control"/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="button" id="btn-tambah" onclick="TambahDokter()"  class="btn-primary">Tambah</button>

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
                            <h1>Data Dokter</h1>
                        </div>
                      <center><font color="red"><p id="pesan"></p></font></center>
                        <table class="table">
                            <tr>
                                <td>Nama Dokter</td>
                                <td><input type="text" name="nama_dokter1" placeholder="nama dokter" class="form-control"  id="nama_pasien"/>
                                    <input type="text" name="id_dokter1" value="" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" name="alamat1" placeholder="alamat dokter" class="form-control" id="alamat" /></td>
                            </tr>
                            <tr>
                                <td>Kontak</td>
                                <td><input type="text" name="kontak1" placeholder="kontak dokter" class="form-control"  id="kontak" /></td>
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
            url:'<?php echo base_url()?>index.php/dokter/LihatDokter',
            dataType:'json',
            success: function(data){
                var baris='';
               for (var i=0; i<data.data.length; i++) {
                    baris += '<tr>'+
                                '<td>'+(i+1)+'</td>'+
                                '<td>'+data.data[i].nama_dokter+'</td>'+
                                '<td>'+data.data[i].alamat+'</td>'+
                                '<td>'+data.data[i].kontak+'</td>'+
                                '<td><a href="#formUbah"  data-toggle="modal" class="btn btn-primary buttonubah" id="'+data.data[i].id_dokter+'">ubah</a>     </td>'+
                                '<td><a href=""  data-toggle="modal" class="btn btn-primary buttonhapus" id="'+data.data[i].id_dokter+'">hapus</a></td>'+
                            '</tr>'       
                }
                $('#target-perawat').html(baris);
                $('.buttonubah').on('click',ubahdata);
                $('.buttonhapus').on('click',HapusData);


            }

        });
    }

    function TambahDokter(){

        $('.alert-success').hide();
        $('.alert-danger').hide();

        var nama_dokter =$("[name='nama_dokter']").val();
        var alamat =$("[name='alamat']").val();
        var kontak =$("[name='kontak']").val();


        $.ajax({
            type:'POST',
            data:'nama_dokter='+nama_dokter+'&alamat='+alamat+'&kontak='+kontak,
            url:'<?php echo base_url().'index.php/dokter/TambahDokter' ?>',
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

      var id_dokter=$(this).attr("id");

      // var id_pasien=$(this).prev().prev().prev().prev().prev().prev().html();

         $.ajax({
            type:'POST',
            data:{id_dokter:id_dokter},
            url:'<?php echo base_url().'index.php/dokter/AmbilIdDokter' ?>',
            dataType:'json',
            success: function(hasil){
                
                // console.log(hasil);
                $('[name="id_dokter1"]').val(hasil.id_dokter);
                $('[name="nama_dokter1"]').val(hasil.nama_dokter);
                $('[name="alamat1"]').val(hasil.alamat);
                $('[name="kontak1"]').val(hasil.kontak);
            }
         });
    }

    function inputUpdate(){

        $('.alert-success').hide();
        $('.alert-danger').hide();
            
        var id_dokter =$("[name='id_dokter1']").val();
        var nama_dokter =$("[name='nama_dokter1']").val();
        var alamat =$("[name='alamat1']").val();
        var kontak =$("[name='kontak1']").val();

        $.ajax({
            type:'POST',
             data:'id_dokter='+id_dokter+'&nama_dokter='+nama_dokter+'&alamat='+alamat+'&kontak='+kontak,
             url:'<?php echo base_url().'index.php/dokter/UbahDokter' ?>',
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
        var tanya = confirm('Apakah Antum Yakin Menghapus Data Ini ???');
        var id_dokter=$(this).attr("id");
        if(tanya){
            $.ajax({
                type:'POST',
                data :{id_dokter:id_dokter},
                url:'<?php echo base_url().'index.php/dokter/HapusDokter' ?>',
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
                    url:'<?php echo base_url()?>index.php/dokter/searchHandle',
                    data: $('#form-search').serialize(),
                    dataType:'json',
                    success: function(data){
                        var baris='';
                       for (var i=0; i<data.data.length; i++) {
                    baris += '<tr>'+
                                '<td>'+(i+1)+'</td>'+
                                '<td>'+data.data[i].nama_dokter+'</td>'+
                                '<td>'+data.data[i].alamat+'</td>'+
                                '<td>'+data.data[i].kontak+'</td>'+
                                '<td><a href="#formUbah"  data-toggle="modal" class="btn btn-primary buttonubah" id="'+data.data[i].id_dokter+'">ubah</a>     </td>'+
                                '<td><a href=""  data-toggle="modal" class="btn btn-primary buttonhapus" id="'+data.data[i].id_dokter+'">hapus</a></td>'+
                            '</tr>'

       

                    }
                        $('#target-perawat').html(baris);
                        $('.buttonubah').on('click',ubahdata);
                        $('.buttonhapus').on('click',HapusData);

                    }

        });
    });
</script>

<?php $this->load->view("template/footer_pasien.php") ?>
