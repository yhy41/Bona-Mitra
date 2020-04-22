<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/navbar.php") ?>

<div class="container">
	<?php if ($this->session->flashdata('info')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible show" role="alert">
                <?= $this->session->flashdata('info'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari riwayat Pemeriksaan ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
    	<div class="col">
    		<h3 class="text-center">Riwayat Pemeriksaan</h3>
    		<?php if (empty($periksa)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Nama Pasien</th>
                        <th class="text-center" scope="col">Nama Dokter</th>
                        <th class="text-center" scope="col">Tanggal</th>
                        <th class="text-center" scope="col">Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($periksa as $pk) : ?>
                        <td class="text-center"><?= $pk['nama_pasien']; ?></td>
                        <td class="text-center"><?= $pk['nama_dokter']; ?></td>
                        <td class="text-center"><?= $pk['tanggal']; ?></td>
                        <td class="text-center"><?= $pk['deskripsi']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>index.php/pemeriksaan/hapus/<?= $pk['id_pemeriksaan'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>            
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= site_url('pemeriksaan/PilihPasien') ?>" class="btn btn-primary">Input Pemeriksaan Baru</a>
                </div>
            </div>
    	</div>

</div>