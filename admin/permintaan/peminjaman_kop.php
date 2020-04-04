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
                    <li class="breadcrumb-item active">Peminjaman Kendaraan Operasional Perusahaan</li>
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
                            <div class="col-md-6 text-center">
                                <div class="row">
                                    <div class="col-md-6">Tanggal :</div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="tanggal_permintaan" value="<?php echo "$tgl"?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">Nama :</div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nama" placeholder="nama" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">Dept :</div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="dept" placeholder="dept" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- row -->
                        <h3 class="text-center"><i class="fas fa-"></i> <u>FORM PEMINJAMAN KENDARAAN OPERASIONAL PERUSAHAAN</u> </h3>
                        <div class="row">

                            <div class="col-md-6">
                                <table class="table table-borderless table-responsive">
                                    <tr>
                                        <td class="align-middle">Tanggal</td>
                                        <td><input type="date" class="form-control" name="tgl_awal" required></td>
                                        <td class="align-middle"style="padding:12px 0px">s/d</td>
                                        <td><input type="date" class="form-control" name="tgl_akhir" required></td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">Waktu</td>
                                        <td><input type="time" class="form-control" name="tgl_awal" required></td>
                                        <td class="align-middle"style="padding:12px 0px">s/d</td>
                                        <td><input type="time" class="form-control" name="tgl_akhir" required></td>
                                    </tr>
                                </table>
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="align-middle"> Keperluan</td>
                                        <td class="text-center"><input type="radio" name="keperluan[]" id="">Dinas</td>
                                        <td class="text-center"><input type="radio" name="keperluan[]" id="">Pribadi</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">Pengemudi</td>
                                        <td colspan="2"><input type="text" name="pengemudi" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Tujuan</td>
                                        <td colspan="2"><textarea name="tujuan" id="" cols="30" rows="5" class="form-control"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan Lainnya</td>
                                        <td colspan="2"><textarea name="keterangan" id="" cols="30" rows="5" class="form-control"></textarea></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <td rowspan="3" class="align-middle">Mobil</td>
                                        <td class="align-middle text-right">Type</td>
                                        <td><input type="text" class="form-control" name="type_mobil" required></td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle text-right">No. Plat</td>
                                        <td><input type="text" class="form-control" name="no_plat" required></td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle text-right">KM</td>
                                        <td><input type="text" class="form-control" name="km" required></td>
                                    </tr>
                                </table>
                                <p>Check Sheet</p><hr>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td class="align-middle">- Pajak Kendaraan</td>
                                                <td><input type="checkbox" name="check[]" id=""></td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">- STNK</td>
                                                <td><input type="checkbox" name="check[]" id=""></td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">- Ijin Kaca Film</td>
                                                <td><input type="checkbox" name="check[]" id=""></td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">- Kunci-kunci</td>
                                                <td><input type="checkbox" name="check[]" id=""></td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">- P3K</td>
                                                <td><input type="checkbox" name="check[]" id=""></td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">- Segitiga Pengaman</td>
                                                <td><input type="checkbox" name="check[]" id=""></td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">- Dongkrak</td>
                                                <td><input type="checkbox" name="check[]" id=""></td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">- Ban Cadangan</td>
                                                <td><input type="checkbox" name="check[]" id=""></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td class="align-middle">- APAR</td>
                                                <td><input type="checkbox" name="check[]" id=""></td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">- Safety Belt</td>
                                                <td><input type="checkbox" name="check[]" id=""></td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">- Body Kendaraan</td>
                                                <td><input type="checkbox" name="check[]" id=""></td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">- Air Radiator & Baterai</td>
                                                <td><input type="checkbox" name="check[]" id=""></td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">- Oli Mesin</td>
                                                <td><input type="checkbox" name="check[]" id=""></td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">- Minyak Rem</td>
                                                <td><input type="checkbox" name="check[]" id=""></td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">- Tekanan Ban</td>
                                                <td><input type="checkbox" name="check[]" id=""></td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">- Bahan Bakar *</td>
                                                <td><input type="checkbox" name="check[]" id=""></td>
                                            </tr>
                                        </table>
                                    </div>
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
                                                                            <input type="checkbox" value="0"
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
                                                                <label for=""> <i class="fas fa-info"></i> Admin Dept Head
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

                                                                        <div class="col-md-6 mt-4" >
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