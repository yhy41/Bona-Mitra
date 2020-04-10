<!DOCTYPE html>
<html>
    <head>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css'); ?>"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Profile</title>
	</head>

	<body>
		<main>
			<div class="profile-info">
				<figure>
					<img src="<?php echo base_url('/assets/uploads/') . $_SESSION['profile_pic'] ?>" class="img-fluid img-thumbnail">
				</figure>
				<h3>Hello, <?php echo $_SESSION['username']; ?></h3>
				<h4><a href="<?= site_url('profile/logout') ?>">Logout</a></h4>
			</div>
		</main>
	</body>
</html>