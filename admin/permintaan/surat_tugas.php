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
                            <a class="nav-link active" href="#">Baru</a>
                        <!-- </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dept Head ACC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ADH Acc</a>
                        </li> -->
                        <?php if( $_COOKIE['id_departement'] == 1 && $_COOKIE['id_level'] ==1  ) :?>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=permintaan/aksiSurat/rekapSuratTugas">Rekap</a>
                        </li>
                        <?php endif ?>
                    </ul>
                    <h5 class="text-center">DATA PERMINTAAN SURAT TUGAS</h5>

                 
                        <?php if( $_COOKIE['id_departement'] == 1 && $_COOKIE['id_level'] ==1  ) :?>
                    <div class="row">
                        <?php foreach($db->viewSuratTugasAdh() as $a){ ?>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-info">
                                    <i><b>Pemohon :</b>&nbsp;
                                        <?= $a->nama_karyawan ?></i><br>
                                    <?php
                                        if($a->pemohon == 1 && $a->depth == 0 && $a->adh == 0){?>
                                    <i><b>Status: </b><span class="text-red">Diajukan Pemohon</span></i>
                                    <?php }elseif($a->pemohon == 1 && $a->depth == 1 && $a->adh == 0){  ?>
                                    <i><b>Status: </b><span class="text-yellow">Dikonfirmasi Oleh Dept Head</span></i>
                                    <?php }elseif($a->pemohon == 1 && $a->depth == 1  && $a->adh == 1){  ?>
                                    <i><b>Status: </b> <span class="text-green">Dikonfirmasi Oleh ADH</span></i>
                                    <?php } ?>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover table-borderless">
                                        <tr>
                                            <td width="40%">Keperluan</td>
                                            <td>
                                                <?= $a->keperluan_dinas ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="40%">Tanggal Permohonan</td>
                                            <td>
                                                <?= $a->tanggal_berangkat ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Perusahaan Tujuan</td>
                                            <td>
                                                <?= $a->perusahaan_tujuan ?>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <a href="index.php?page=permintaan/aksiSurat/dataPermintaanSuratTugas&id=<?= $a->id_pst ?>"
                                        class="btn btn-primary btn-sm"><i style="color:white">Cek Detail</i></a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php endif ?>
                    
                    <?php if( $_COOKIE['id_departement'] == 3 && $_COOKIE['id_level'] ==2  ) :?>
                        <button type="button" data-toggle="modal" data-target="#suratTugas"
                        class="btn  btn-primary btn-flat mb-2"><i class="fa fa-plus-circle"></i> Input Data</button>
                    <div class="row">
                        <?php foreach($db->viewSuratTugasDept() as $a){ ?>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-info">
                                    <i><b>Pemohon :</b>&nbsp;
                                        <?= $a->nama_karyawan ?></i><br>
                                    <?php
                                        if($a->pemohon == 1 && $a->depth == 0 && $a->adh == 0){?>
                                    <i><b>Status: </b><span class="text-red">Diajukan Pemohon</span></i>
                                    <?php }elseif($a->pemohon == 1 && $a->depth == 1 && $a->adh == 0){  ?>
                                    <i><b>Status: </b><span class="text-yellow">Dikonfirmasi Oleh Dept Head</span></i>
                                    <?php }elseif($a->pemohon == 1 && $a->depth == 1  && $a->adh == 1){  ?>
                                    <i><b>Status: </b> <span class="text-green">Dikonfirmasi Oleh ADH</span></i>
                                    <?php } ?>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover table-borderless">
                                        <tr>
                                            <td width="40%">Keperluan</td>
                                            <td>
                                                <?= $a->keperluan_dinas ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="40%">Tanggal Permohonan</td>
                                            <td>
                                                <?= $a->tanggal_berangkat ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Perusahaan Tujuan</td>
                                            <td>
                                                <?= $a->perusahaan_tujuan ?>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <a href="index.php?page=permintaan/aksiSurat/dataPermintaanSuratTugas&id=<?= $a->id_pst ?>"
                                        class="btn btn-primary btn-sm"><i style="color:white">Cek Detail</i></a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php endif ?>
                    <?php if( $_COOKIE['id_departement'] == 3 && $_COOKIE['id_level'] ==3  ) :?>
                        <button type="button" data-toggle="modal" data-target="#suratTugas"
                        class="btn  btn-primary btn-flat mb-2"><i class="fa fa-plus-circle"></i> Input Data</button>
                    <div class="row">
                        <?php foreach($db->viewSuratTugasKrr($_COOKIE['id_karyawan']) as $a){ ?>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-info">
                                    <i><b>Pemohon :</b>&nbsp;
                                        <?= $a->nama_karyawan ?></i><br>
                                    <?php
                                        if($a->pemohon == 1 && $a->depth == 0 && $a->adh == 0){?>
                                    <i><b>Status: </b><span class="text-red">Diajukan Pemohon</span></i>
                                    <?php }elseif($a->pemohon == 1 && $a->depth == 1 && $a->adh == 0){  ?>
                                    <i><b>Status: </b><span class="text-yellow">Dikonfirmasi Oleh Dept Head</span></i>
                                    <?php }elseif($a->pemohon == 1 && $a->depth == 1  && $a->adh == 1){  ?>
                                    <i><b>Status: </b> <span class="text-green">Dikonfirmasi Oleh ADH</span></i>
                                    <?php } ?>

                                </div>
                                <div class="card-body">
                                    <table class="table table-hover table-borderless">
                                        <tr>
                                            <td width="40%">Keperluan</td>
                                            <td>
                                                <?= $a->keperluan_dinas ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="40%">Tanggal Permohonan</td>
                                            <td>
                                                <?= $a->tanggal_berangkat ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Perusahaan Tujuan</td>
                                            <td>
                                                <?= $a->perusahaan_tujuan ?>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <a href="index.php?page=permintaan/aksiSurat/dataPermintaanSuratTugas&id=<?= $a->id_pst ?>"
                                        class="btn btn-primary btn-sm"><i style="color:white">Cek Detail</i></a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
if (isset($_POST["permintaanSuratTugas"])) {
   $db->addSuratTugas($_POST);
        //    var_dump($_POST); 
    echo"<script>window.location.href='index.php?page=permintaan/surat_tugas'</script>";
    }else{
    // echo"<script>alert('Koneksi Error')</script>";
    }
?>
<audio id="notiv">
    <!-- <source src="horse.ogg" type="audio/ogg"> -->
    <source src="<?= $base_url; ?>assets/notive/sms_sms.mp3" type="audio/mpeg">
</audio>

<div class="modal fade" id="suratTugas" style="font-size:14px">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-tittle" style="padding:20px">
                <h5>FORM PERMINTAAN SURAT TUGAS</h5>
            </div>
            <div class="modal-body ">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>NRP</label>
                                <input type="text" class="form-control" id="nrpSuratTugas" required name="nrp">
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>NAMA</label>
                                <select name="id_karyawan" id="id_karyawanSurat" class="form-control" readonly>

                                </select>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>GOLONGAN</label>
                                <input type="text" class="form-control" required name="golongan">
                            </div>

                        </div>
                    </div>
                    <div>
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>JABATAN</label>
                                    <input type="text" class="form-control" required name="jabatan">
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>DIVISI</label>
                                    <input type="text" class="form-control" required name="divisi">
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>DEPARTEMENT</label>
                                    <input type="text" class="form-control" required name="departement" readonly>
                                </div>

                            </div>
                        </div>
                        <div>
                            <!-- row -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>PERUSASHAAN TUJUAN</label>
                                        <input type="text" class="form-control" required name="perusahaan_tujuan">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>KEPERLUAN DINAS</label>
                                        <input type="text" class="form-control" required name="keperluan_dinas">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>BEBAN</label>
                                        <input type="text" class="form-control" required name="beban">
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>SERIAL NUMBER /SR</label>
                                        <input type="text" class="form-control" required name="serial_number">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>DAERAH /NEGARA TUJUAN</label>
                                        <input type="text" class="form-control" required name="daerah_tujuan">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>TANGGAL BERANGKAT</label>
                                        <input type="date" class="form-control" required name="tanggal_berangkat">
                                    </div>

                                </div>
                            </div>
                            <!-- row -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>TANGGAL KEMBALI</label>
                                        <input type="date" class="form-control" required name="tanggal_kembali">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>JUMLAH HARI</label>
                                        <input type="number" class="form-control" required name="jumlah_hari">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>TRANSPORTASI</label>
                                        <input type="text" class="form-control" required name="transportasi">
                                    </div>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>PENGINAPAN</label>
                                        <input type="text" class="form-control" required name="penginapan">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>JOB PEKERJAAN</label>
                                        <input type="text" class="form-control" required name="job_pekerjaan">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>TOTAL HARDSIDE</label>
                                        <input type="number" class="form-control" required name="total_hardsite">
                                    </div>

                                </div>
                            </div>


                            <div class="modal-tittle" style="padding:20px">RINCIAN ESTIMASI PERJALANAN DINAS
                                <p>From tidak boleh kosong, untuk number silakan isi dengan 0</p>
                            </div>

                            <!-- /row -->
                            <div>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tiket By ADM</label>
                                            <input type="number" class="form-control" required name="tiketbyadm">
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tiket</label>
                                            <input type="number" class="form-control" required name="tiket">
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Airport tax</label>
                                            <input type="number" class="form-control" required name="airporttax">
                                        </div>
                                    </div>
                                </div>

                                <!--/ row -->
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Taxi</label>
                                            <input type="number" class="form-control" required name="taxi">
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tol</label>
                                            <input type="number" class="form-control" required name="tol">
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Hotel</label>
                                            <input type="number" class="form-control" required name="hotel">
                                        </div>
                                    </div>
                                </div>
                                <!--/ row -->
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>UPD</label>
                                            <input type="number" class="form-control" required name="upd">
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Fiskal</label>
                                            <input type="number" class="form-control" required name="fiskal">
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>BBM</label>
                                            <input type="number" class="form-control" required name="bbm">
                                        </div>
                                    </div>
                                </div>
                                <!-- row -->
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>lain-lain</label>
                                            <input type="number" class="form-control" required name="lainlain">
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>TOTAL ESTIMASI DILUAR TIKET BY ADM</label>
                                            <input type="number" class="form-control" required name="total_estimasi">
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>UANG MUKA YANG DIIZINKAN</label>
                                            <input type="number" class="form-control" required name="uang_diizinkan">
                                        </div>
                                    </div>
                                </div>
                                <!-- row -->
                            </div>
                        </div>
                        <button type="submit" name="permintaanSuratTugas" onclick="playAudio()"
                            class="btn btn-primary btn-block">Simpan</button>
                        <button type="button" data-dismiss="modal" class="btn btn-warning btn-block">Batal</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<script>
    function playAudio() {
        var total_estimasi = $('[name=total_estimasi]').val();
        var uang_diizinkan = $('[name=uang_diizinkan]').val();
        var total_hardsite = $('[name=total_hardsite]').val();
        if (total_estimasi == '' && uang_diizinkan == '' && total_hardsite == '') {
            alert('Data Tidak Boleh Kosong..!!')
        } else {
            document.getElementById("notiv").play();
            alert('success')
        }
    }
</script>