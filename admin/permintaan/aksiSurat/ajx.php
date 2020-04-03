<?php
    
    include "../../../config/koneksi.php";
    $data = $con->query("SELECT b.nama_departement, a.* FROM karyawan a JOIN departement b ON a.id_departement=b.id_departement where nrp = '$_POST[nrp]'");
    $d =  $data->fetch_assoc();
    // var_dump($data);
    $new[]= $d;
    echo json_encode($new);


?>