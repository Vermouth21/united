<?php
    
    include "../../config/koneksi.php";

    if($_POST['aksi']=='ajx_edd'){
        $data = $con->query("SELECT b.nama_departement, c.nama_level,a.* FROM karyawan a JOIN departement b ON a.id_departement=b.id_departement JOIN `level` c ON a.id_level=c.id_level where a.id_karyawan = '$_POST[id]'");
        $d =  $data->fetch_assoc();
        // var_dump($data);
        $new[]= $d;
        echo json_encode($new);
    }elseif($_POST['aksi']=='ajx_krr'){
        $data = $con->query("SELECT b.nama_departement, c.nama_level,a.* FROM karyawan a JOIN departement b ON a.id_departement=b.id_departement JOIN `level` c ON a.id_level=c.id_level where a.nrp = '$_POST[nrp]'");
        $d =  $data->fetch_assoc();
        // var_dump($data);
        $new[]= $d;
        echo json_encode($new);
    }
?>