<?php
function permintaanSolar($post)
{
	global $con;
	$tanggal =  $post["tanggal_permintaan"];
	$nama_karyawan = $_COOKIE['id_karyawan'];
	$departement = mysqli_real_escape_string($con, $post["departement"]);
	$jumlah_solar = mysqli_real_escape_string($con, $post["jumlah_solar"]);
	$keperluan_solar = mysqli_real_escape_string($con, $post["keperluan_solar"]);
	$pemohon = mysqli_real_escape_string($con, $post["pemohon"]);

	$query = "INSERT INTO `permintaan_solar`(`id_karyawan`, `tanggal_permintaan`, `jumlah_solar`, `keperluan_solar`, `pemohon`) VALUES ('$nama_karyawan','$tanggal','$jumlah_solar','$keperluan_solar','$pemohon')";
	// echo $query; exit;
	$con->query($query);
	return mysqli_affected_rows($con);
}

function accAdh($post)
{
	global $con;
	$id = mysqli_real_escape_string($con, $post["id"]);
	$yes = mysqli_real_escape_string($con, $post["yes"]);
	$query = "UPDATE `permintaan_solar` SET depth='$yes' WHERE id_permintaan_solar='$id'";
	// echo $query; exit;
	$con->query($query);
	return mysqli_affected_rows($con);
}

function accAdm($post)
{
	global $con;
	$id = mysqli_real_escape_string($con, $post["id"]);
	$yes = mysqli_real_escape_string($con, $post["yes"]);
	$query = "UPDATE `permintaan_solar` SET Adh='$yes' WHERE id_permintaan_solar='$id'";
	// echo $query; exit;
	$con->query($query);
	return mysqli_affected_rows($con);
}
?>