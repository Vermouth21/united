<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
             
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Izin keluar kantor</li>
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
                        <h3 class="text-center"><i class="fas fa-"></i> <u>SURAT IZIN KELUAR KANTOR</u> </h3>
                       

                        <!-- row -->
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Nama </label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama Karyawan"
                                        name="id_karyawan">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">No.Pegawai</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="No Pegawai" name="nip">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Dept. / Bagian</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="number " class="form-control" placeholder="Masukan Dept / Bagian"
                                        name="departement">
                                </div>
                            </div>

                        
                            <div class="col-md-4">
                                <label for="">Denngan Inin mengajukan izin keluar kantor dengan keperluan :</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <textarea class="ckeditor" id="ckedtor"
                                        name="keperluan_solar"></textarea>
                                </div>
                                </div>
                                <div class="col-md-4">
                                <label for="">Dari Jam</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="number " class="form-control" placeholder="Masukan Jam keluar"
                                        name="departement">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Sampai Dengan</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="number " class="form-control" placeholder="Masukan Jam kembali"
                                        name="departement">
                                </div>
                                </div>
                                <div class="col-md-4">
                                <label for=""></label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                   <b>Demikian atas perhatian serta kebijaksanaan bapak kami ucapkan terimakasih</b>
                                </div>

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