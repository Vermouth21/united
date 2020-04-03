<!-- Content Header (Page header) -->
<?php
    $tgl = date('Y-m-d');
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Fasilitas pengobatan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content row-py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <form action="" method="POST">
                    <div class="callout callout-info">
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6 text-left">
                                <div class="row">
                                    <div class="col-md-4">No. :</div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="no"
                                                value="Form 001/SK-Bantuan Pengobatan-HC-MLK3">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">Revisi :</div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="revisi" placeholder="9"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">Hal :</div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="hal" placeholder="........."
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">Dari :</div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="dari" placeholder=".........."
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- row -->
                        <h3 class="text-center"><u>FASILITAS PENGOBATAN</u> </h3>
                        <h6 class="text-left">Mohon Disisi lengkap</h6>
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <div class="row">
                                    <div class="col-md-4">No. :</div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="no"
                                                value="Form 001/SK-Bantuan Pengobatan-HC-MLK3">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">Revisi :</div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="revisi" placeholder="9"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">Hal :</div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="hal" placeholder="........."
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">Dari :</div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="dari" placeholder=".........."
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>

                            <div class="col-md-6">
                                <p>Jenis Tindakan (Mohon Diisi lengkap) </p>
                                <hr>
                                <table class="table table-borderless">
                                    <tr>

                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Pengobatan

                                        </td>
                                    </tr>
                                    <tr>

                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Vitamin

                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Imunisasi*

                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Laboratorium*

                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Rogen*

                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- USG (Hamil)*

                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- USG (Non Hamil)**

                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Exstraksi Serumen

                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">-KB (Kelurga Berencana)

                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Kontrol Pasca Rawat Inap ,tgl rawat Inap

                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Kontrol Pasca persalinan ,tgl rawat Inap

                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <p>Check Sheet</p>
                                <hr>
                                <table class="table table-borderless">
                                    <tr>

                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Operasi Kecil

                                        </td>
                                        <td rowspan="4"></td>
                                    </tr>
                                    <tr>

                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Pengobatan Alternatif***

                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Penyakit kronis menahun**

                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Kacamata (Sertakan ukuran kacamata)

                                        </td>

                                    </tr>

                                </table>
                                <div class="row">
                                    <div class="col-sm-3">Kanan</div>


                                    <div class="col-sm-3"><input type="text" placeholder="______________"
                                            class="form-control"></div>
                                    <div class="col-sm-3">Kiri</div>
                                    <div class="col-sm-3"><input type="text" placeholder="______________"
                                            class="form-control"></div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">Perawatan Gigi</div>
                                    <div class="col-sm-6">Nomor Gigi</div>

                                    <div class="col-sm-6"><input type="checkbox" name="check[]" id="">Cabut Gigi</div>
                                    <div class="col-sm-6"><input type="text" class="form-control"></div>

                                    <div class="col-sm-6"><input type="checkbox" name="check[]" id="">Penambalan</div>
                                    <div class="col-sm-6"><input type="text" class="form-control"></div>

                                    <div class="col-sm-6"><input type="checkbox" name="check[]" id="">Operasi Gigi</div>
                                    <div class="col-sm-6"><input type="text" class="form-control"></div>

                                    <div class="col-sm-6"><input type="checkbox" name="check[]" id="">Gigi Palsu</div>
                                    <div class="col-sm-6"><input type="text" class="form-control"></div>
                                    <div class="col-sm-6"><input type="checkbox" name="check[]" id="">Scalling</div>
                                    <div class="col-sm-6"><input type="text" class="form-control"></div>
                                </div>

                            </div>
                            <div class="col-md-6">
                            <div class="row">
                                    <div class="col-sm-12">Permohonan Ini diperuntukan bagi</div>
                                   
                                    <div class="col-sm-6"><input type="checkbox" name="check[]" id="">Karyawan</div>
                                    <div class="col-sm-6"><input type="text" class="form-control"></div>

                                    <div class="col-sm-6"><input type="checkbox" name="check[]" id="">Pasangan</div>
                                    <div class="col-sm-6"><input type="text" class="form-control"></div>

                                    <div class="col-sm-6"><input type="checkbox" name="check[]" id="">Anak 1</div>
                                    <div class="col-sm-6"><input type="text" class="form-control"></div>
                               
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                                    <div class="col-sm-12">Permohonan Ini diperuntukan bagi</div>
                                   
                                    <div class="col-sm-6"><input type="checkbox" name="check[]" id="">Anak 2</div>
                                    <div class="col-sm-6"><input type="text" class="form-control"></div>

                                    <div class="col-sm-6"><input type="checkbox" name="check[]" id="">Anak 3</div>
                                    <div class="col-sm-6"><input type="text" class="form-control"></div>

                                    <div class="col-sm-6"><input type="checkbox" name="check[]" id="">Anak </div>
                                    <div class="col-sm-6"><input type="text" class="form-control"></div>
                               
                            </div>
                            </div>

                            <div class="col-md-6" style="margin-top:30px">
                            <div class="row">
                                 
                                   
                                    <div class="col-sm-6">Jumlalh Kuitansi</div>
                                    <div class="col-sm-6"><input type="text" class="form-control" placeholder='..................................Lembar'></div>

                                    <div class="col-sm-6">Jumlah Total</div>
                                    <div class="col-sm-6"><input type="text" class="form-control" placeholder='Rp........'></div>

                                  
                               
                            </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label for="">
                                        <h4>Pemohon</h4>
                                    </label>
                                    <input type="checkbox" value="1" name="pemohon">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-sm">Submit </button>
                                    <button type="reset" class="btn btn-warning btn-sm" style="color:#fff">Clear
                                        Form</button>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                </form>

                <!-- Main content -->
                <div class="callout callout-info">
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
                                            <th>Jumlah Solar</th>
                                            <th>Untuk Keperluan</th>
                                            <th width="120">Dept Head</th>
                                            <th width="110">Admin Dept Head</th>
                                            <th width="170">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>
                                                <button type="button" data-toggle="modal" data-target="#depthAcc"
                                                    class="btn btn-warning btn-sm"><i class="fa fa-check"> DeptH
                                                        Acc</i></button>

                                            </td>
                                            <td>
                                                <button type="button" data-toggle="modal" data-target="#adhAcc"
                                                    class="btn btn-warning btn-sm"><i class="fa fa-check"> ADH
                                                        Acc</i></button>
                                            </td>
                                            <td class="text-center">
                                                <a href="" class="btn btn-danger btn-sm" style="color:#fff">cetak</a>
                                                <a href="" class="btn btn-info btn-sm" style="color:#fff">Edit</a>
                                                <a href="" class="btn btn-warning btn-sm" style="color:#fff">Delete</a>
                                            </td>

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
                                                                            <label for="">Iya</label>
                                                                            <input type="checkbox" value="1" name="yes">

                                                                            <label for="">Tidak</label>
                                                                            <input type="checkbox" value="Ditolak"
                                                                                name="no">
                                                                        </div>

                                                                    </div>
                                                                </div>


                                                                <div>
                                                                    <button type="submit" name="temuanSimpan"
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
                                                                            <label for="">Iya</label>
                                                                            <input type="checkbox" value="1" name="yes">

                                                                            <label for="">Tidak</label>
                                                                            <input type="checkbox" value="Ditolak"
                                                                                name="no">
                                                                        </div>

                                                                    </div>
                                                                </div>


                                                                <div>
                                                                    <button type="submit" name="temuanSimpan"
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


                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- /.invoice -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>