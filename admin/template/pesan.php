<?php if(isset($_COOKIE['pesan'])){ ?>
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