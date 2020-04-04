<?php
$data = $con->query("SELECT a.id_karyawan,a.nama_karyawan,b.* FROM karyawan a LEFT JOIN permintaan_solar b ON a.id_karyawan=b.id_karyawan ORDER BY b.tanggal_permintaan DESC");
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Data Permintaan Solar</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content row-py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                  <!-- Main content -->
                <div class="callout callout-info">
                    <div class="row">
                        <?php foreach($data as $a){ ?>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-info">
                                    <i><b>Pemohon :</b>&nbsp;<?= $a['nama_karyawan'] ?></i>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover table-borderless">
                                        <tr>
                                            <td width="40%">Jumlah Solar</td>
                                            <td><?= $a['jumlah_solar'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Keperluan</td>
                                            <td><?= $a['keperluan_solar'] ?></td>
                                        </tr>
                                    </table>
                                    <br>
                                    <a href="index.php?page=permintaan/aksiSolar/data_permintaan_solar&id=<?= $a['id_permintaan_solar'] ?>" class="btn btn-primary btn-sm"><i style="color:white">Cek Detail</i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>