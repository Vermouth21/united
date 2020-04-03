<?php
include_once "../config/koneksi.php";

if(isset($_POST['register']))
{
	$id_departemen = mysqli_real_escape_string($con, $_POST['id_departemen']);
	$id_level = mysqli_real_escape_string($con, $_POST['id_level']);
	$nrp = mysqli_real_escape_string($con, $_POST['nrp']);
	$nama_karyawan = mysqli_real_escape_string($con, $_POST['nama_karyawan']);
	$tempat_lahir = mysqli_real_escape_string($con, $_POST['tempat_lahir']);
	$tanggal_lahir = mysqli_real_escape_string($con, $_POST['tanggal_lahir']);
	$pekerjaan = mysqli_real_escape_string($con, $_POST['pekerjaan']);
	$agama = mysqli_real_escape_string($con, $_POST['agama']);
	$jenis_kelamin = mysqli_real_escape_string($con, $_POST['jenis_kelamin']);
	$golongan_darah = mysqli_real_escape_string($con, $_POST['golongan_darah']);
	$notelp = mysqli_real_escape_string($con, $_POST['notelp']);
	$alamat = mysqli_real_escape_string($con, $_POST['alamat']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$pass = password_hash($password, PASSWORD_DEFAULT);
	$register = $con->query("INSERT INTO `karyawan`(`id_departement`, `id_level`, `nrp`, `nama_karyawan`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `agama`, `jenis_kelamin`, `golongan_darah`, `notelp`, `alamat`, `email`, `password`) VALUES ('$id_departemen','$id_level','$nrp','$nama_karyawan','$tempat_lahir','$tanggal_lahir','$pekerjaan','$agama','$jenis_kelamin','$golongan_darah','$notelp','$alamat','$email','$pass')");
	if(!empty($register))
	{
		setcookie('pesan', "Registrasi Berhasil.!", time() + 1, "/");
    	header("Location: ../index.php");
	}else{
		setcookie('error', "Registrasi Gagal.!", time() + 1, "/");
    	header("Location: ../register.php");
	}
}
elseif(isset($_POST['login']))
{
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$pass = mysqli_real_escape_string($con, $_POST['pass']);
	$data = $con->query("SELECT * FROM karyawan WHERE email='$email'")->fetch_array();
	if($data['email'] == $email)
	{
		if(password_verify($pass, $data['password']))
		{
			session_start();
			$_SESSION['nama'] = $data['nama_karyawan'];
			$_SESSION['id_departemen'] = $data['id_departement'];
			setcookie('id_karyawan', "$data[id_karyawan]", time() + (86400 * 30), "/");
			setcookie('id_departement', "$data[id_departement]", time() + (86400 * 30), "/");
	    setcookie('id_level', "$data[id_level]", time() + (86400 * 30), "/");
			setcookie('nrp', "$data[nrp]", time() + (86400 * 30), "/");
			// setcookie('nama_karyawan', "$data[nama_karyawan]", time() + (86400 * 30), "/");
			setcookie('tempat_lahir', "$data[tempat_lahir]", time() + (86400 * 30), "/");
	    setcookie('pekerjaan', "$data[pekerjaan]", time() + (86400 * 30), "/");
			setcookie('agama', "$data[agama]", time() + (86400 * 30), "/");
			setcookie('jenis_kelamin', "$data[jenis_kelamin]", time() + (86400 * 30), "/");
			setcookie('golongan_darah', "$data[golongan_darah]", time() + (86400 * 30), "/");
	    setcookie('notelp', "$data[notelp]", time() + (86400 * 30), "/");
			setcookie('alamat', "$data[alamat]", time() + (86400 * 30), "/");
			setcookie('email', "$data[email]", time() + (86400 * 30), "/");
	    setcookie('pesan', "Selamat Datang.!!", time() + 1, "/");
    		header("Location: ../admin/index.php");
		}else{
			setcookie('error', "Password Salah.!", time() + 1, "/");
    		header("Location: ../index.php");
		}
	}else{
			setcookie('error', "Email Salah.!", time() + 1, "/");
    		header("Location: ../index.php");
	}
}