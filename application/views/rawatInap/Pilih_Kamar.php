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
                    <input type="text" class="form-control" placeholder="Cari Pemeriksaan Pasien ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
    	<div class="col">
    		<h3 class="text-center">Pilih Kamar Rawat Inap Pasien</h3>
    		<?php if (empty($kamar)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">ID Kamar</th>
                        <th class="text-center" scope="col">Nama Kamar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($kamar as $km) : ?>
                        <td class="text-center"><?= $km['id_kamar']; ?></td>
                        <td class="text-center"><?= $km['nama_kamar']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>index.php/rawatInap/InputRawatInap/<?= $km['id_kamar'] ?>/<?= $id_pemeriksaan?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin memilih data ini?');" ?>pilih</a>            
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

    	</div>

</div>