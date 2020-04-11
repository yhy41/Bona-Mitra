<!DOCTYPE html>
<html>
    <head>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css'); ?>"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Login</title>
	</head>
	
	<body>
		<h1 style="text-align: center;">LOG-IN Admin Klink Bona</h1>
		<form action="<?= site_url('login/login') ?>" method="post">
			<h2>Login</h2>
			<?php if(isset($error_message)) { ?>
			<div class="alert alert-danger" role="alert">
				<?= $error_message ?>
			</div>
			<?php } ?>
			<div class="form-group">
				<input type="text" class="form-control" name="Username" placeholder="Username" required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="Password" placeholder="Password" required>
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
			<p>Don't have an account? Register <a href="<?= site_url('register/index') ?>">here</a></p>
		</form>
	</body>
</html>