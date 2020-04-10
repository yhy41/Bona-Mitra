<!DOCTYPE html>
<html>
<head>
	<title>pilihan masukan ke website</title>
  <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>"/>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
 <!--  buat tmapilan awal pada dengan ada tombol admin/apa lah dan dengan ada tombol guest -->


  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <td >
          <form action="<?= site_url('Login/index') ?>" method="post">
            <button  type="submit" class="btn btn-primary active" >Admin</button>
          </form>
        </td>
        <td >
          <!-- <form action=""> -->
            <button type="submit" class="btn btn-primary active"><a href="<?= site_url('pilihan/masukpasien') ?>">Guest</button>
          <!-- </form> -->
        </td>
      </tr>
    </thead>
  </table>
  </div>
</body>
</html>