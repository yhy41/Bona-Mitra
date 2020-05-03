<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/navbar.php") ?>

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Komentar Pengunjung</h3>
            <table class="table mt-5">
                <thead>
                    <tr>
                         <th class="text-left" scope="col">No</th>
                        <th class="text-left" scope="col">Nama Tamu</th>
                        <th class="text-left" scope="col">Email Tamu</th>
                        <th class="text-left" scope="col">Kategori</th>
                        <th class="text-left" scope="col">Isi</th>
                         <th class="text-left" scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody id="target-perawat">

                </tbody>
            </table>
            <!-- <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <?php if (!empty($komentar)) : ?>
                        <a href="<?= base_url(); ?>index.php/feedback/hapusSemua/<?= $km['kategori'] ?>" class="btn btn-primary">Hapus Semua</a>
                    <?php endif; ?>
                </div>
            </div> -->

        </div>
    </div>
</div>

<script type="text/javascript">
       ambilData();
    function ambilData() {
        $.ajax({
            type:'POST',
            url:'<?php echo base_url()?>index.php/feedback/LihatKomentar',
            dataType:'json',
            success: function(data){
                var baris='';
               for (var i=0; i<data.length; i++) {
                    baris += '<tr>'+
                                '<td>'+(i+1)+'</td>'+
                                '<td>'+data[i].nama_tamu+'</td>'+
                                '<td>'+data[i].email_tamu+'</td>'+
                                '<td>'+data[i].kategori+'</td>'+
                                '<td>'+data[i].isi+'</td>'+
                                '<td><a href=""  data-toggle="modal" class="btn btn-primary buttonhapus" id="'+data[i].id_feedback+'">hapus</a></td>'+
                            '</tr>'

// onclick="ubahdata('+data[i].id_pasien+')"        

                }
                $('#target-perawat').html(baris);
               
                $('.buttonhapus').on('click',HapusData);


            }

        });
    }

    function HapusData() {
        var tanya = confirm('apakaha antum yakin menghapus data ini ???');
        var id_feedback=$(this).attr("id");
    if(tanya){
        $.ajax({
            type:'POST',
            data :{id_feedback:id_feedback},
            url:'<?php echo base_url().'index.php/feedback/Hapuskomentar' ?>',
            success:function(){
                ambilData();

            }
        });
    } 

 }


</script>

<?php $this->load->view("template/footer_pasien.php") ?>