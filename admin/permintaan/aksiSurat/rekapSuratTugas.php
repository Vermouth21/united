<?php
if(isset($_POST['accAdh']))
{
    accAdh($_POST);
}elseif(isset($_POST['accAdm']))
{
    accAdm($_POST);
}
// $id = $_GET['id'];
// $data = $con->query("SELECT a.id_karyawan,a.nama_karyawan,b.*,c.nama_departement FROM karyawan a LEFT JOIN permintaan_solar b ON a.id_karyawan=b.id_karyawan LEFT JOIN departement c ON c.id_departement=a.id_departement WHERE b.id_permintaan_solar='$id'");
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Data Permintaa Surat Tugas</li>
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
                <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link " href="?page=permintaan/surat_tugas">Baru</a>
                        <!-- </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dept Head ACC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ADH Acc</a>
                        </li> -->
                        <?php if( $_COOKIE['id_departement'] == 1 && $_COOKIE['id_level'] ==1  ) :?>
                        <li class="nav-item">
                            <a class="nav-link active" href="?page=permintaan/aksiSurat/rekapSuratTugas">Rekap</a>
                        </li>
                        <?php endif ?>
                    </ul>
                    <!-- Table row -->
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama Karyawan</th>
                                            <th>Department</th>
                                            <th>Keperluan</th>
                                            <th>Tujuan</th>
                                            <th width="120">Dept Head</th>
                                            <th width="110">Admin Dept Head</th>
                                            <th width="60">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($db->viewSuratTugasRekap() as $i => $a){?>
                                        <tr>
                                            <td><?= $i+1 ?></td>
                                            <td><?= $a->nama_karyawan  ?></td>
                                            <td><?= $a->nama_departement  ?></td>
                                            <td><?= $a->keperluan_dinas  ?></td>
                                            <td><?= $a->perusahaan_tujuan  ?></td>
                                            <td>
                                            <?php if($a->depth != 1){ ?>
                                                <center>
                                                    <button type="button" data-toggle="modal" data-target="#depthAcc"
                                                    class="btn btn-warning btn-sm btn-flat"><i class="fa fa-check">Acc</i></button>
                                                </center>
                                            <?php }else{ ?>
                                                <center>
                                                    <button type="button" class="btn btn-success btn-sm btn-flat"><i class="fa fa-check"> Success</i></button>
                                                </center>
                                            <?php } ?>
                                            </td>
                                            <td>
                                            <?php if($a->adh != 1){ ?>
                                                <center>
                                                    <button type="button" data-toggle="modal" data-target="#adhAcc" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-check">Acc</i></button>
                                                </center>
                                            <?php }else{ ?>
                                                <center>
                                                    <button type="button" class="btn btn-success btn-sm btn-flat"><i class="fa fa-check"> Success</i></button>
                                                </center>
                                            <?php } ?>
                                            </td>
                                            <td class="text-center">
                                                <a href="index.php?page=permintaan/aksiSurat/dataPermintaanSuratTugas&id=<?= $a->id_pst ?>" class="btn btn-danger btn-sm btn-flat" style="color:#fff">Detail</a>
                                               <!--  <a href="" class="btn btn-info btn-sm" style="color:#fff">Edit</a> -->
                                                <!-- <a href="" class="btn btn-warning btn-sm" style="color:#fff">Delete</a> -->
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Deph-->

<div class="modal fade" id="depthAcc">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <label for=""> <i class="fas fa-info"></i> Dept Head
                        ACC</label>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="">
                                    <h6>Silahkan Konfirmasi Jika Menyetujui
                                    </h6>
                                    <h4>Konfirmasi DeptH</h4>
                                </label>
                            </div>

                            <div class="col-md-6 mt-4">
                                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                <label for="">Iya</label>
                                <input type="checkbox" value="1" name="yes">

                                <label for="">Tidak</label>
                                <input type="checkbox" value="2"
                                    name="yes">
                            </div>

                        </div>
                    </div>

                    <div>
                        <button type="submit" name="accAdh"
                            class="btn btn-primary btn-block">Konfirmasi</button>
                        <button data-dismiss="modal" style="color:#fff"
                            class="btn btn-warning btn-block">Batal</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- /Modal -->

<!-- Modal Deph-->

<div class="modal fade" id="adhAcc">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <label for=""> <i class="fas fa-info"></i> Admin Dept
                        Head
                        ACC</label>
                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="">
                                    <h6>Silahkan Konfirmasi Jika Menyetujui
                                    </h6>
                                    <h4>Konfirmasi ADH</h4>
                                </label>
                            </div>

                            <div class="col-md-6 mt-4">
                                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                <label for="">Iya</label>
                                <input type="checkbox" value="1" name="yes">

                                <label for="">Tidak</label>
                                <input type="checkbox" value="2"
                                    name="no">
                            </div>

                        </div>
                    </div>


                    <div>
                        <button type="submit" name="accAdm"
                            class="btn btn-primary btn-block">Konfirmasi</button>
                        <button data-dismiss="modal" style="color:#fff"
                            class="btn btn-warning btn-block">Batal</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- /Modal -->