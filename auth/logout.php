<?php
session_start();
session_destroy();
date_default_timezone_set("Asia/Jakarta");
setcookie('id_karyawan', "$data[id_karyawan]", time() + (86400 * 30), "/");
setcookie('id_departemen', "", time() + (86400 * 30), "/");
setcookie('id_level', "", time() + (86400 * 30), "/");
setcookie('nrp', "", time() + (86400 * 30), "/");
// setcookie('nama_karyawan', "", time() + (86400 * 30), "/");
setcookie('tempat_lahir', "", time() + (86400 * 30), "/");
setcookie('pekerjaan', "", time() + (86400 * 30), "/");
setcookie('agama', "", time() + (86400 * 30), "/");
setcookie('jenis_kelamin', "", time() + (86400 * 30), "/");
setcookie('golongan_darah', "", time() + (86400 * 30), "/");
setcookie('notelp', "", time() + (86400 * 30), "/");
setcookie('alamat', "", time() + (86400 * 30), "/");
setcookie('email', "", time() + (86400 * 30), "/");
setcookie('pesan', "Anda Telah Keluar!!", time() + 1, "/");
header("Location: ../index.php");

?>