<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Deklarasi Karyawan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<style>
</style>
<section class="content row-py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <form action="" method="POST">
                    <div class="callout callout-info">
                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th colspan="4" class="text-center">FORM DEKLARASI KARYAWAN</th>
                                                <th class="text-right"><button id="btn-tambah-form"
                                                        class="btn btn-info btn-sm "><span
                                                            class="fa fa-plus-circle"></span> Add</button>
                                                    <button style="margin-left:5px;" id="btn-reset-form" class="btn btn-danger btn-sm "><span
                                                            class="fa fa-reply"></span> Reset</button></th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Deskripsi</th>
                                                <th>Jumlah</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody id="insert-form">

                                            <tr>
                                                <td>1</td>
                                                <td><input type="date" class="form-control" name="tanggal[]"> </td>
                                                <td><input type="text" class="form-control" name="deskripsi[]"></td>
                                                <td><input type="number" class="form-control" name="jumlah[]"></td>
                                                <td><input type="text" class="form-control" name="keteangan[]"></td>
                                            </tr>




                                        </tbody>

                                        <tr>
                                            <td colspan="3">Uang Muka</td>
                                            <td><input type="number" class="form-control" name=""></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Jumlah Pengeluaran Actual</td>
                                            <td><input type="number" class="form-control" name=""></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Kembeli Ke Perusahaan</td>
                                            <td><input type="number" class="form-control" name=""></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Kembali Ke karyawan</td>
                                            <td><input type="number" class="form-control" name=""></td>
                                        </tr>
                                    </table>
                                    <div class="row" style="margin-top:10px;">
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
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>

                </form>
                <input type="hidden" id="jumlah-form" value="1">
                <!-- Main content -->
                </div>
                <div class="callout callout-info">
                    <!-- Table row -->
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama Pegawai</th>
                                            <th>No. Pegawai</th>
                                            <th>Department</th>
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
                                                <a href="" class="btn btn-danger btn-sm" style="color:#fff">Detail</a>
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