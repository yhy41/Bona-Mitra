<?php $this->load->view("template/header.php") ?>
<?php $this->load->view("template/navbar.php") ?>

<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Perawat <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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
                    <input type="text" class="form-control" placeholder="Cari data Perawat ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Perawat</h3>
            <?php if (empty($perawat)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <!-- <th class="text-center" scope="col">NoId</th> -->
                        <th class="text-center" scope="col">Nama</th>
                        <th class="text-center" scope="col">Alamat</th>
                        <th class="text-center" scope="col">Kontak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($perawat as $pr) : ?>
                        <!-- <td class="text-center"><?= $pr['id_perawat']; ?></td> -->
                        <td class="text-center"><?= $pr['nama_perawat']; ?></td>
                        <td class="text-center"><?= $pr['alamat']; ?></td>
                        <td class="text-center"><?= $pr['kontak']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>index.php/perawat/hapus/<?= $pr['id_perawat'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                             <a href="<?= base_url(); ?>index.php/perawat/ubah/<?= $pr['id_perawat'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin mengubah data ini?');" ?>ubah</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= site_url('perawat/TambahPerawat') ?>" class="btn btn-primary">Tambah Data Perawat</a>
                </div>
            </div>

        </div>
    </div>
<?php $this->load->view("template/footer.php") ?>
