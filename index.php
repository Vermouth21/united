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
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= $base_url ?>assets/images/ut.png" alt="IMG">
				</div>

                <form class="login100-form validate-form" action="auth/function.php" method="POST" enctype="multipart/form-data">
					<span class="login100-form-title">
						<img src="<?= $base_url ?>assets/images/ut1.jpg" width="150px">
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Silahkan Isi Email Terlebuh Dahulu">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password Tidak Boleh Kosong">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="text-center p-t-12">
                        
					</div>
                    
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="login" type="submit">
                            Login
                        </button>
                    </div>

				</form>
			</div>
		</div>
	</div>
	<?php 
		if(isset($_COOKIE['pesan'])){ ?>
		<script src="<?= $base_url ?>assets/jquery/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script type="text/javascript">
			Swal.fire(
			  'Good job!',
			  '<?= $_COOKIE['pesan']?>',
			  'success'
			)
		</script>
	<?php }elseif(isset($_COOKIE['error'])){ ?>
		<script src="<?= $base_url ?>assets/jquery/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script type="text/javascript">
			Swal.fire({
			  icon: 'error',
			  title: 'Oops...',
			  text: '<?= $_COOKIE['error'] ?>'			
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