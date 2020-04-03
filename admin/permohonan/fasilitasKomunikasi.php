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
                    <li class="breadcrumb-item active">Fasilitas Komunikasi</li>
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
                            <div class="col-md-6" style="margin-bottom:10px;">
                                <P>Lampiran 1. NOMOR :SK/014/KEP/9980_A/IX/10</P>
                            </div>
                        </div>



                        <!-- row -->
                        <h3 class="text-center"><i class="fas fa-"></i> <u>FORM PERMOHONAN FASILITAS KOMUNIKASI</u>
                        </h3>
                        <p>Besama Ini mohon iiranya diberikan penggantian atas biaya komunikasi yang saya keluarkan
                            untuk keperluan kantor :</p>

                        <!-- row -->
                        <div class="row">
                            <div class="col-md-4">
                                <p for="">Nama /NRP</p>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama " name="nama">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="NRP " name="nrp">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p>Jabatan ( Beri tanda <span class="fa fa-check"></span> )</p>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="" name="jabatan">
                                </div>
                            </div>


                        </div>
                        <!-- /row -->
                        <div class="row">

                            <div class="col-md-2"></div>
                            <div class="col-md-6">
                                <p>Check Sheet</p>
                                <hr>
                                <table class="table table-borderless">
                                    <tr>

                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Dereksi
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Devision Head/ Deputy
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Ho Dept. Head/ Deputy
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Branch Operation Head
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Site Operation Head
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Kepala Perwakilan
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Dept. Head Cabang / Site
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Section Head /Staff Ahli
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Supervisor
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="check[]" id=""></td>
                                        <td class="align-middle">- Jabatan yang lain
                                            <hr>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>

                        <!-- /row -->
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-4">
                                <p for="">Divisi /Dept</p>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Divisi " name="divisi">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Dept " name="dept">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p>Lokasi (HO/Cab/Site)</p>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="" name="lokasi">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p>Besar Pengeluaran</p>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Rp." name="pengeluaran">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p>,-(detail lampiran)</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <p>Besar Penggantian</p>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Rp." name="penggantian">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p>,-(diisi oleh GAD/Adm Dept Cab/Site)</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p>Tgl/bulan Pemakaian</p>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="" name="tanggal_pemakaian">
                                </div>
                            </div>
                            <div class="col-md-12">
                                Demikian permohonan kami, atas perhatian dan kerjasamanya kami sampaikan terimakasih.
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="input" class="form-control" placeholder="" name="Lokasi">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="tanggal_claim">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <p>(Lokasi dan bln/tgl/thn claim)</p>
                            </div>



                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>
                                        <h4>Pemohon</h4>
                                    </label>
                                    <input type="checkbox" value="1" name="pemohon">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-sm">Submit </button>
                                    <button type="reset" class="btn btn-warning btn-sm" style="color:#fff">Clear
                                        Form</button>
                                </div>
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