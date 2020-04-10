<!DOCTYPE html>
<html>
    <head>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css'); ?>"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Register</title>
	</head>
	
	<body>
		<form action="<?= site_url('register/register') ?>" method="post" enctype="multipart/form-data">
			<h2>Register</h2>
			<?php if(isset($error_message)) { ?>
			<div class="alert alert-danger" role="alert">
				<?= $error_message ?>
			</div>
			<?php } ?>
			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Username" required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Password" required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="re-password" placeholder="Re-Enter Password" required>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Profile Picture</span>
				</div>
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="uploadImage" name="uploadImage" accept='image/*' required>
					<label class="custom-file-label text-left" for="uploadImage">Choose file</label>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Register</button>
			<p>Already have an account? Login <a href="<?= site_url('login/index') ?>">here</a></p>
		</form>
		<script src="<?php echo base_url('assets/jquery-3.2.1.min.js'); ?>"></script>
		<script>
			$('.custom-file-input').on('change', function() { 
				let fileName = $(this).val().split('\\').pop(); 
				$(this).next('.custom-file-label').addClass("selected").html(fileName); 
			});
		</script>
	</body>
</html>