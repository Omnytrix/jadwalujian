<!doctype html>
<html lang="en">
<head id="header" class="fixed-top">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		  rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<title>Login</title>

</head>
<body background="<?=base_url('assets/agency/bgfh1.jpg')?>" >
<div class="container mt-5">

	<div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
		<div class="card text-white bg-secondary mb-3" style="max-width: fit-content">
			<div class="card-header">
				Login
			</div>
			<div class="card-body">

				<?php if ($this->session->flashdata('Pesan')) { ?>
					<div class="alert alert-danger animate__animated animate__shakeX">
						<?php echo $this->session->flashdata('Pesan'); ?>
					</div>
				<?php } ?>

				<form action="<?= site_url('login/proses') ?>" method="post">
					<div class="form-group">
						<label for="">Username :</label>
						<input type="text" name="txtusername" class="form-control">
					</div>

					<div class="form-group">
						<label for="">Password :</label>
						<input type="password" name="txtpassword" class="form-control">
					</div>
					<input type="submit" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>
