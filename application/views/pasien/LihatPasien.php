<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lihat Pasien</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Dokter <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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
                    <input type="text" class="form-control" placeholder="Cari data Pasien ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Pasien</h3>
            <?php if (empty($pasien)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">NoId</th>
                        <th class="text-center" scope="col">Nama</th>
                        <th class="text-center" scope="col">Tanggal_Lahir</th>
                        <th class="text-center" scope="col">Alamat</th>
                        <th class="text-center" scope="col">Email</th>
                        <th class="text-center" scope="col">Kontak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($pasien as $ps) : ?>
                        <td class="text-center"><?= $ps['id_pasien']; ?></td>
                        <td class="text-center"><?= $ps['nama_pasien']; ?></td>
                        <td class="text-center"><?= $ps['tanggal_lahir']; ?></td>
                        <td class="text-center"><?= $ps['alamat']; ?></td>
                        <td class="text-center"><?= $ps['email']; ?></td>
                        <td class="text-center"><?= $ps['kontak']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>index.php/pasien/hapus/<?= $ps['id_pasien'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                             <a href="<?= base_url(); ?>index.php/pasien/ubah/<?= $ps['id_pasien'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin mengubah data ini?');" ?>ubah</a>
                           <!--  <a href="<?= base_url(); ?>dokter/ubah/<?= $mhs['id'] ?>" class="badge badge-success float-center" ?>ubah</a>
 -->                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= site_url('pasien/TambahPasien') ?>" class="btn btn-primary">Tambah Data Dokter</a>
                </div>
            </div>

        </div>
    </div>
</div> 

</body>
</html>
