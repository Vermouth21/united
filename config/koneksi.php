<?php
$base_url = "http://localhost/ut/";
$con = new mysqli('localhost','root','','db_ut') or die(mysql_errno());

function query($query){
        global $con;
        $result = mysqli_query($con, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows; 
    }


function ind($tgl){
    $tanggal = substr($tgl,8,2);
    $bulan = ambilBulan(substr($tgl,5,2));
    $tahun = substr($tgl,0,4);
    return $tanggal.' '.$bulan.' '.$tahun;		 
}	

function ambilBulan($bln){
        switch ($bln){
            case 1: 
                return "Januari";
                break;
            case 2:
                return "Februari";
                break;
            case 3:
                return "Maret";
                break;
            case 4:
                return "April";
                break;
            case 5:
                return "Mei";
                break;
            case 6:
                return "Juni";
                break;
            case 7:
                return "Juli";
                break;
            case 8:
                return "Agustus";
                break;
            case 9:
                return "September";
                break;
            case 10:
                return "Oktober";
                break;
            case 11:
                return "November";
                break;
            case 12:
                return "Desember";
                break;
        }
    } 

// ==================================================
    // Laporan Mas Adit
// ==================================================
if(isset($_POST['temuanSimpan']))
{
    $id_karyawan = mysqli_real_escape_string($con,$_COOKIE['id_karyawan']);
    $tanggal_temuan = mysqli_real_escape_string($con, $_POST['tanggal_temuan']);
    $tempat_temuan = mysqli_real_escape_string($con, $_POST['tempat_temuan']);
    $keterangan_temuan = mysqli_real_escape_string($con, $_POST['keterangan_temuan']);
    $namaFile = $_FILES['foto']['name'];
    $namaSementara = $_FILES['foto']['tmp_name'];
    $dirUpload = "../upload/temuan/";
    $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    $save = $con->query("INSERT INTO `report_temuan_lk`(`id_karyawan`, `tanggal_temuan`, `tempat_temuan`, `foto_temuan`,`keterangan_temuan`) VALUES ('$id_karyawan','$tanggal_temuan','$tempat_temuan', '$namaFile','$keterangan_temuan')");
    if($save == true)
    {
        setcookie('pesan', "Temuan Dilaporkan.!", time() + 1, "/");
        header("Location: ../admin/index.php");
    }   
    else
    {
        setcookie('error', "Kesalahan Sambungan.!", time() + 1, "/");
        header("Location: ../admin/index.php");
    }
}
elseif(isset($_POST['clear']))
{
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $clear = $con->query("UPDATE report_temuan_lk SET status='1' WHERE id_temuan='$id'");

    if($clear == true)
    {
        setcookie('pesan', "Success.!", time() + 1, "/");
        header("Location: ../admin/index.php");
    }   
    else
    {
        setcookie('error', "Kesalahan Sambungan.!", time() + 1, "/");
        header("Location: ../admin/index.php");
    }
}

?>