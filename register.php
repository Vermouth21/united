<?php include_once "config/koneksi.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link rel="stylesheet" href="<?= $base_url ?>assets/login/css/bootstrap.css">
    <link rel="icon" type="<?= $base_url ?>assets/login/image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?= $base_url ?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= $base_url ?>assets/login/vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="<?= $base_url ?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?= $base_url ?>assets/login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?= $base_url ?>assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= $base_url ?>assets/login/css/main.css">
</head>
<body style="background-color:#ffd800; ">
<div class="container py-3">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					<h6 class="card-title">Register Akun</h6>
				</div>
				<form action="auth/function.php" method="POST" enctype="multipart/form-data">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<select class="form-control" name="id_departemen" id="">
										<option value="">-PILIH DEPARTEMENT-</option>
									</select>
								</div>
								<div class="form-group">
									<select class="form-control" name="id_level" id="">
										<option value="">-PILIH JABATAN-</option>
									</select>
								</div>
								<div class="form-group">
									<input type="text" name="nrp" class="form-control" required placeholder="NRP">
								</div>
								<div class="form-group">
									<textarea name="alamat" class="form-control" id="" cols="30" placeholder="Alamat" rows="10"></textarea>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="nama_karyawan" class="form-control" required placeholder="Nama Lengkap">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-6">
											<input type="text" name="tempat_lahir" class="form-control" required placeholder="Tempat Lahir">
										</div>
										<div class="col-md-6">
											<input type="date" name="tanggal_lahir" class="form-control" required placeholder="Tanggal Lahir">
										</div>
									</div>
								</div>
								<div class="form-group">
									<select class="form-control" name="jenis_kelamin" id="">
										<option value="">-JENIS KELAMIN-</option>
									</select>
								</div>
								<div class="form-group">
									<select class="form-control" name="golongan_darah" id="">
										<option value="">-GOLONGAN DARAH-</option>
									</select>
								</div>
								<div class="form-group">
									<input type="text" name="pekerjaan" class="form-control" required placeholder="Pekerjaan">
								</div>
								<div class="form-group">
									<input type="number" name="notelp" class="form-control" required placeholder="Nomer Telpon">
								</div>
								<div class="form-group">
									<input type="email" name="email" class="form-control" required placeholder="Email">
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control" required placeholder="Password">
								</div>
							</div>
						</div>
						<div>
							<button type="submit" class="btn btn-primary btn-block" name="register">Registrasi</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	<?php 
		error_reporting(0);
		if($_GET['pesan']== 3){ ?>
		<script src="<?= $base_url ?>assets/jquery/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script type="text/javascript">
			Swal.fire({
			  icon: 'error',
			  title: 'Oops...',
			  text: 'Registrasi Gagal!'			
			})
		</script>
	<?php } ?>
	<script src="<?= $base_url ?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= $base_url ?>assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= $base_url ?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= $base_url ?>assets/login/vendor/select2/select2.min.js"></script>
	<script src="<?= $base_url ?>assets/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="<?= $base_url ?>assets/login/js/main.js"></script>
</body>
</html>