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
                                    <h4>Konfirmasi Dept Head</h4>
                                </label>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="">Iya</label>
                                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                <input type="checkbox" value="1" name="yes">
                                <label for="">Tidak</label>
                                <input type="checkbox" value="0" name="no">
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" name="konfirmDepth" class="btn btn-primary btn-block">Konfirmasi</button>
                        <button data-dismiss="modal" style="color:#fff" class="btn btn-warning btn-block">Batal</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php
    if(isset($_POST['konfirmDepth'])){
        
        if(empty($_POST['yes'])){
            echo"<script>window.location='?page=permintaan/surat_tugas'</script>";
        }else{
            $db->suratTugasDh($_POST);
            echo"<script>window.location='?page=permintaan/surat_tugas'</script>";
        }       
    }
?>
<!-- /Modal -->
<!-- Modal Deph-->
<div class="modal fade" id="adhAcc">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <label for=""> <i class="fas fa-info"></i> ADH
                        ACC</label>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="">
                                    <h6>Silahkan Konfirmasi Jika Menyetujui
                                    </h6>
                                    <h4>Konfirmasi Dept Head</h4>
                                </label>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="">Iya</label>
                                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                <input type="checkbox" value="1" name="yes">
                                <label for="">Tidak</label>
                                <input type="checkbox" value="0" name="no">
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" name="konfirmAdh" class="btn btn-primary btn-block">Konfirmasi</button>
                        <button data-dismiss="modal" style="color:#fff" class="btn btn-warning btn-block">Batal</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php
    if(isset($_POST['konfirmAdh'])){
        
        if(empty($_POST['yes'])){
            echo"<script>window.location='?page=permintaan/surat_tugas'</script>";
        }else{
            $db->suratTugasAdh($_POST);
            echo"<script>window.location='?page=permintaan/surat_tugas'</script>";
        }       
    }
?>

<section class="content">
    <div class="row py-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <!-- <a href="?page=permintaan/surat_tugas" class="fas fa-times float-right"></a> -->

                    <?php foreach($db->detailSuratTugas($_GET['id']) as $a){ ?>
                    <?php
                    if($a->pemohon == 1 && $a->depth == 0 && $a->adh == 0 && $_COOKIE['id_departement'] == 3 && $_COOKIE['id_level'] ==2 ){?>
                    <button type="button" data-toggle="modal" data-target="#depthAcc"
                        class="btn btn-success btn-flat"><i class="fa fa-edit"></i> Konfirmasi Dept Head</button>
                    <?php }elseif($a->pemohon == 1 && $a->depth == 1 && $a->adh == 0 && $_COOKIE['id_departement'] == 1 && $_COOKIE['id_level'] ==1 ){  ?>
                    <button type="button" data-toggle="modal" data-target="#adhAcc" class="btn btn-success btn-flat"><i
                            class="fa fa-edit"></i> Konfirmasi Adh</button>
                    <?php }elseif($a->pemohon == 1 && $a->depth == 1  && $a->adh == 1){  ?>
                    <a href="" class="btn btn-success btn-flat"> <span class="fa fa-print"></span> Cetak</a><br>
                    

                    <?php } }?>
                </div>

                <div class="card-body table-responsive">

                    <?php foreach ($db->detailSuratTugas($_GET['id']) as $d) : ?>
                    <table id="" class="table table-bordered  text-center">
                        <thead>
                            <tr>
                                <th>NRP</th>
                                <th>NAMA</th>
                                <th>GOLONGAN</th>
                                <th>JABATAN</th>
                                <th>DIVISI</th>
                                <th>DEPARTEMENT</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><?= $d->nrp ?></td>
                                <td><?= $d->nama_karyawan ?></td>
                                <td><?= $d->golongan ?></td>
                                <td><?= $d->jabatan ?></td>
                                <td><?= $d->divisi ?></td>
                                <td><?= $d->nama_departement ?></td>
                            </tr>

                        </tbody>
                        <!-- /Batas 1 -->

                        <thead>
                            <tr>

                                <th>PERUSAHAN TUJUAN</th>
                                <th colspan="3">KEPERLUAN DINAS</th>
                                <th>BEBAN</th>
                                <th>SERIAL NUMBER SR</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><?= $d->perusahaan_tujuan ?></td>
                                <td colspan="3"><?= $d->keperluan_dinas ?></td>
                                <td><?= $d->beban ?></td>
                                <td><?= $d->serial_number ?></td>

                            </tr>

                        </tbody>
                        <!-- /Batas 2 -->
                        <thead>
                            <tr>
                                <th colspan="2">DAERAH / NEGARA TUJUAN</th>
                                <th colspan="2">TANGGAL BERANGKAT</th>
                                <th>TANGGAL KEMBALI</th>
                                <th>JUMLAH HARI</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td colspan="2"><?= $d->daerah_tujuan ?></td>
                                <td colspan="2"><?= $d->tanggal_berangkat ?></td>
                                <td><?= $d->tanggal_kembali ?></td>
                                <td><?= $d->jumlah_hari ?></td>
                            </tr>

                        </tbody>
                        <!-- /Batas 3 -->

                        <thead>
                            <tr>
                                <th>TRANSPORTASI</th>
                                <th>PENGINAPAN</th>
                                <th colspan="2">JOB PEKERJAAN</th>
                                <th colspan="2">TOTAL HARDSIDE</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><?= $d->transportasi ?></td>
                                <td><?= $d->penginapan ?></td>
                                <td colspan="2"><?= $d->job_pekerjaan ?></td>
                                <td colspan="2"><?= $d->total_hardsite ?></td>

                            </tr>

                        </tbody>
                        <!-- Batas 4 -->

                        <tr>
                            <th style="background-color:grey" colspan="6"></th>
                        </tr>

                        <thead>
                            <tr>
                                <th colspan="3">RINCIAN ESTIMASI PERJALANAN DINAS</th>
                                <th colspan="2">( Karyawan )</th>
                                <th colspan="2">( Dept. Head )</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td colspan="3"></td>
                                <td colspan="2" rowspan="5"><?= $d->nama_karyawan ?></td>
                                <td colspan="2" rowspan="5">
                                    <?php if($d->depth == 1){?>
                                    <span class="text-green"> <b>Sukses</b> </span>
                                    <?php  }else{ ?>

                                    <?php }?>
                                </td>

                            </tr>
                            <tr>
                                <th>Tiket By ADM</td>
                                <td>=</td>
                                <td><?= $d->tiketbyadm ?></td>
                            </tr>
                            <tr>
                                <th>Tiket</td>
                                <td>=</td>
                                <td><?= $d->tiket ?></td>
                            </tr>
                            <tr>
                                <th>Airport tax</td>
                                <td>=</td>
                                <td><?= $d->airporttax ?></td>
                            </tr>
                            <tr>
                                <th>Taxi</td>
                                <td>=</td>
                                <td><?= $d->taxi ?></td>
                            </tr>
                            <tr>
                                <th>Tol</td>
                                <td>=</td>
                                <td><?= $d->tol ?></td>
                                <th colspan="4" rowspan="7">( ADH )<br><br>
                                    <?php if($d->adh == 1){?>
                                    <span class="text-green">Sukses</span>
                                    <?php  }else{ ?>

                                    <?php }?>
                                    </td>
                            </tr>
                            <tr>
                                <th>Hotel</td>
                                <td>=</td>
                                <td><?= $d->hotel ?></td>

                            </tr>
                            <tr>
                                <th>UPD</td>
                                <td>=</td>
                                <td><?= $d->upd ?></td>
                            </tr>
                            <tr>
                                <th>Fiskal</td>
                                <td>=</td>
                                <td><?= $d->fiskal ?></td>
                            </tr>
                            <tr>
                                <th>BBM</td>
                                <td>=</td>
                                <td><?= $d->bbm ?></td>
                            </tr>
                            <tr>
                                <th>Lain-lain</td>
                                <td>=</td>
                                <td><?= $d->lainlain ?></td>
                            <tr>
                                <th style="background-color:grey" colspan="3"></th>

                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th colspan="2">TOTAL ESTIMASI DILUAR TIKET BY ADM</td>
                                <td><?= $d->total_estimasi ?></td>
                                <td class="text-left" colspan="4" rowspan="2"> - Form ini harus disetujui Atasan
                                    /Pemberi tugas <br> - Total Estimasi bukan merupakan acuan untuk mengambil UM
                                    perjalanan dinas <br> - Deklarasi dilaksanakan selambat -lambatnya 3 hari setelah
                                    kembali dari dinas </td>
                            </tr>
                            <tr>
                                <th colspan="2">UANG MUKA YANG DIIZINKAN</td>
                                <td><?= $d->uang_diizinkan ?></td>
                            </tr>
                        </tbody>

                        <!-- Batas 5-->
                    </table>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>