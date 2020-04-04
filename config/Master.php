<!-- <?php

function accAdh_permintaanSuratTugas($post)
{
	global $con;
	$id = mysqli_real_escape_string($con, $post["id"]);
	$yes = mysqli_real_escape_string($con, $post["yes"]);
	$query = "UPDATE `permintaan_solar` SET depth='$yes' WHERE id_permintaan_solar='$id'";
	// echo $query; exit;
	$con->query($query);
	return mysqli_affected_rows($con);
}

function accAdm_permintaanSuratTugas($post)
{
	global $con;
	$id = mysqli_real_escape_string($con, $post["id"]);
	$yes = mysqli_real_escape_string($con, $post["yes"]);
	$query = "UPDATE `permintaan_solar` SET Adh='$yes' WHERE id_permintaan_solar='$id'";
	// echo $query; exit;
	$con->query($query);
	return mysqli_affected_rows($con);
}
?> -->

<?php
include 'GrandMaster.php';

class Master extends GrandMaster{

	//======================================== Surat Tugas ==============================
	function viewSuratTugasKrr($id){
		$stmt =  $this->tampil("SELECT a.id_karyawan,a.nama_karyawan,c.nama_departement,b.* FROM karyawan a  JOIN permintaan_surat_tugas b ON a.id_karyawan=b.id_karyawan JOIN departement c ON a.id_departement=c.id_departement where a.id_karyawan ='$id' ORDER BY b.id_pst DESC");
		
		return $stmt ;
	  }
    function viewSuratTugasDept(){ //view untuk depthead
		$stmt =  $this->tampil("SELECT a.id_karyawan,a.nama_karyawan,c.nama_departement,b.* FROM karyawan a  JOIN permintaan_surat_tugas b ON a.id_karyawan=b.id_karyawan JOIN departement c ON a.id_departement=c.id_departement where b.pemohon =1 and b.depth= 0 and b.adh = 0 ORDER BY b.id_pst DESC");
        return $stmt ;
	  }
	  
	  function viewSuratTugasAdh(){ //view untuk adh
		$stmt =  $this->tampil("SELECT a.id_karyawan,a.nama_karyawan,c.nama_departement,b.* FROM karyawan a  JOIN permintaan_surat_tugas b ON a.id_karyawan=b.id_karyawan JOIN departement c ON a.id_departement=c.id_departement where b.pemohon =1 and b.depth= 1 and b.adh = 0 ORDER BY b.id_pst DESC");
        return $stmt ;
	  }
	  
	  function viewSuratTugasRekap(){ //view untuk rekap
		$stmt =  $this->tampil("SELECT a.id_karyawan,a.nama_karyawan,c.nama_departement,b.* FROM karyawan a  JOIN permintaan_surat_tugas b ON a.id_karyawan=b.id_karyawan JOIN departement c ON a.id_departement=c.id_departement where b.pemohon =1 and b.depth= 1 and b.adh = 1 ORDER BY b.id_pst DESC");
        return $stmt ;
      }

      function addSuratTugas($post){

		$nrp = mysqli_real_escape_string($this->db, $post["nrp"]);
		$id_karyawan = mysqli_real_escape_string($this->db, $post["id_karyawan"]);
		$golongan = mysqli_real_escape_string($this->db, $post["golongan"]);
		$jabatan = mysqli_real_escape_string($this->db, $post["jabatan"]);
		$divisi = mysqli_real_escape_string($this->db, $post["divisi"]);
		$department = mysqli_real_escape_string($this->db, 1);
		$perusahaan_tujuan = mysqli_real_escape_string($this->db, $post["perusahaan_tujuan"]);
		$keperluan_dinas = mysqli_real_escape_string($this->db, $post["keperluan_dinas"]);
		$beban = mysqli_real_escape_string($this->db, $post["beban"]);
		$serial_number = mysqli_real_escape_string($this->db, $post["serial_number"]);
		$daerah_tujuan = mysqli_real_escape_string($this->db, $post["daerah_tujuan"]);
		$tanggal_berangkat = mysqli_real_escape_string($this->db, $post["tanggal_berangkat"]);
		$tanggal_kembali = mysqli_real_escape_string($this->db, $post["tanggal_kembali"]);
		$jumlah_hari = mysqli_real_escape_string($this->db, $post["jumlah_hari"]);
		$transportasi = mysqli_real_escape_string($this->db, $post["transportasi"]);
		$penginapan = mysqli_real_escape_string($this->db, $post["penginapan"]);
		$job_pekerjaan = mysqli_real_escape_string($this->db, $post["job_pekerjaan"]);
		$total_hardsite = mysqli_real_escape_string($this->db, $post["total_hardsite"]);
		$tiketbyadm = $post['tiketbyadm'];
		$tiket 		= $post['tiket'];
		$airporttax = $post['airporttax'];
		$taxi 		= $post['taxi'];
		$tol 		= $post['tol'];
		$hotel		= $post['hotel'];
		$upd 		= $post['upd'];
		$fiskal     = $post['fiskal'];
		$bbm 		= $post['bbm'];
		$lainlain	= $post['lainlain'];
		$total_estimasi = $post['total_estimasi'];
		$uang_diizinkan = $post['uang_diizinkan'];
		
		$sql ="INSERT INTO `permintaan_surat_tugas`( `id_karyawan`, `golongan`, `jabatan`, `divisi`, `perusahaan_tujuan`, `keperluan_dinas`, `beban`, `serial_number`, `daerah_tujuan`, `tanggal_berangkat`, `tanggal_kembali`, `jumlah_hari`, `transportasi`, `penginapan`, `job_pekerjaan`, `total_hardsite`, `pemohon`, `depth`, `adh`, `tiketbyadm`, `tiket`, `airporttax`, `taxi`, `tol`, `hotel`, `upd`, `fiskal`, `bbm`, `lainlain`, `total_estimasi`, `uang_diizinkan`) VALUES('$id_karyawan','$golongan','$jabatan','$divisi','$perusahaan_tujuan','$keperluan_dinas','$beban','$serial_number','$daerah_tujuan','$tanggal_berangkat','$tanggal_kembali','$jumlah_hari','$transportasi','$penginapan','$job_pekerjaan','$total_hardsite','1','0','0','$tiketbyadm','$tiket','$airporttax','$taxi','$tol','$hotel','$upd','$fiskal','$bbm','$lainlain','$total_estimasi','$uang_diizinkan')";
		 
		$stmt =  $this->query_all($sql);
        return $stmt ;
      }

	  function detailSuratTugas($id){
		$stmt =  $this->tampil("SELECT a.id_karyawan,a.nama_karyawan,a.nrp, c.* , b.* FROM karyawan a  JOIN permintaan_surat_tugas b ON a.id_karyawan=b.id_karyawan JOIN departement c ON a.id_departement=c.id_departement Where b.id_pst = $id ");
		return $stmt ;
	  }

      function biodata_hapus($id){
        $stmt =  $this->query_all("DELETE  from tbl_biodata Where id_biodata=$id ");
        return $stmt ;
      }


      function biodata_update($id, $nm , $email, $alt){
        $stmt =  $this->query_all("UPDATE tbl_biodata SET nama='$nm',email ='$email' , alamat='$alt' where id_biodata = $id ");
        return $stmt ;
	  }

	  function suratTugasDh($post){ //Konfirmasi surat dept head
		  
		$stmt =  $this->query_all("UPDATE permintaan_surat_tugas SET depth='$_POST[yes]' where id_pst = '$_POST[id]' ");
        return $stmt ;
	  }
	  function suratTugasAdh($post){ //Konfirmasi surat Adh
		  
		$stmt =  $this->query_all("UPDATE permintaan_surat_tugas SET adh='$_POST[yes]' where id_pst = '$_POST[id]' ");
        return $stmt ;
	  }
	  
//======================================== /Surat Tugas ==============================



//======================================== Departement ===============================
 function viewDepartement(){
		  $stmt = $this->tampil("SELECT * FROM departement");
		  return $stmt;
	  }

//======================================== /Departement ==============================
//======================================== Level ===============================
function viewLevel(){
	$stmt = $this->tampil("SELECT * FROM `level`");
	return $stmt;
}


//======================================== /Level ==============================



//======================================== Karyawan ===============================

function viewKaryawan(){
	$stmt = $this->tampil("SELECT * FROM karyawan a JOIN departement b ON a.id_departement=b.id_departement ORDER BY a.nrp");
	return $stmt;
}
function viewDetailKaryawan($id){
	$stmt = $this->tampil("SELECT * FROM karyawan a JOIN departement b ON a.id_departement=b.id_departement JOIN `level` c ON a.id_level=c.id_level  where id_karyawan='$id'");
	return $stmt;
}

function addDataKaryawan($post){

	$nama_karyawan = mysqli_real_escape_string($this->db, $post["nama_karyawan"]);
	$nrp = mysqli_real_escape_string($this->db, $post["nrp"]);
	$departement = mysqli_real_escape_string($this->db, $post["departement"]);
	$level = mysqli_real_escape_string($this->db, $post["level"]);
	$tempat_lahir = mysqli_real_escape_string($this->db, $post["tempat_lahir"]);
	$tanggal_lahir = mysqli_real_escape_string($this->db, $post["tanggal_lahir"]);
	$pekerjaan = mysqli_real_escape_string($this->db, $post["pekerjaan"]);
	$agama = mysqli_real_escape_string($this->db, $post["agama"]);
	$jenis_kelamin = mysqli_real_escape_string($this->db, $post["jenis_kelamin"]);
	$golongan_darah = mysqli_real_escape_string($this->db, $post["golongan_darah"]);
	$notelp = mysqli_real_escape_string($this->db, $post["notelp"]);
	$alamat = mysqli_real_escape_string($this->db, $post["alamat"]);
	$email = mysqli_real_escape_string($this->db, $post["email"]);
	$pass = mysqli_real_escape_string($this->db, $post["password"]);
	$password = password_hash($pass, PASSWORD_DEFAULT);

	$upload = $_FILES['foto']['name'];
	$namaFile = uniqid().'_'.$upload;
    $lokasi = $_FILES['foto']['tmp_name'];
    $terupload = move_uploaded_file($lokasi, '../upload/karyawan/'.$namaFile);
	
	$sql ="INSERT INTO `karyawan`(`id_departement`, `id_level`, `nrp`, `nama_karyawan`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `agama`, `jenis_kelamin`, `golongan_darah`, `notelp`, `alamat`, `email`, `password`,password_view,foto_karyawan)VALUES('$departement','$level','$nrp','$nama_karyawan','$tempat_lahir','$tanggal_lahir','$pekerjaan','$agama','$jenis_kelamin','$golongan_darah','$notelp','$alamat' ,'$email' ,'$password','$pass','$namaFile')";

	$stmt =  $this->query_all($sql);
	return $stmt ;
  }

  public function delDataKaryawan($get){

	unlink('../upload/karyawan/'.$get['foto']);
	$stmt = $this->query_all("DELETE from karyawan where id_karyawan = '$get[delete]'");
	return $stmt;

  }

  function updDataKaryawan($post){

	$id_karyawan = mysqli_real_escape_string($this->db, $post["id_karyawan"]);
	$nama_karyawan = mysqli_real_escape_string($this->db, $post["nama_karyawan"]);
	$nrp = mysqli_real_escape_string($this->db, $post["nrp"]);
	$departement = mysqli_real_escape_string($this->db, $post["departement"]);
	$level = mysqli_real_escape_string($this->db, $post["level"]);
	$tempat_lahir = mysqli_real_escape_string($this->db, $post["tempat_lahir"]);
	$tanggal_lahir = mysqli_real_escape_string($this->db, $post["tanggal_lahir"]);
	$pekerjaan = mysqli_real_escape_string($this->db, $post["pekerjaan"]);
	$agama = mysqli_real_escape_string($this->db, $post["agama"]);
	$jenis_kelamin = mysqli_real_escape_string($this->db, $post["jenis_kelamin"]);
	$golongan_darah = mysqli_real_escape_string($this->db, $post["golongan_darah"]);
	$notelp = mysqli_real_escape_string($this->db, $post["notelp"]);
	$alamat = mysqli_real_escape_string($this->db, $post["alamat"]);
	$email = mysqli_real_escape_string($this->db, $post["email"]);
	$pass = mysqli_real_escape_string($this->db, $post["password"]);
	$password = password_hash($pass, PASSWORD_DEFAULT);

	$lokasi = $_FILES['foto']['tmp_name'];
	
	if($lokasi==''){
		$namaFile = $_POST['fotolama'];
	  }else{
		unlink('../upload/karyawan/'.$_POST['fotolama']);
		$upload = $_FILES['foto']['name'];
		$namaFile = uniqid().'_'.$upload;
		$terupload = move_uploaded_file($lokasi, '../upload/karyawan/'.$namaFile);
	  }
   

	  $stmt = $this->query_all("UPDATE `karyawan` SET `id_departement`='$departement',`id_level`='$level',`nrp`='$nrp',`nama_karyawan`='$nama_karyawan',`tempat_lahir`='$tempat_lahir',`tanggal_lahir`='$tanggal_lahir',`pekerjaan`='$pekerjaan',`agama`='$agama',`jenis_kelamin`='$jenis_kelamin',`golongan_darah`='$golongan_darah',`notelp`='$notelp',`alamat`='$alamat',`email`='$email',`foto_karyawan`='$namaFile' WHERE `id_karyawan`='$id_karyawan'");
	  return $stmt;
  }


  function ubahPassword($post){

	$id_karyawan = mysqli_real_escape_string($this->db, $post["id_karyawan"]);
	$password_view = mysqli_real_escape_string($this->db, $post["password_baru"]);
	$password = password_hash($password_view, PASSWORD_DEFAULT);

	$stmt = $this->query_all("UPDATE `karyawan` SET `password`='$password',`password_view`='$password_view' WHERE `id_karyawan`='$id_karyawan'");
		

  }
//======================================== /Karyawan ==============================


}
?>