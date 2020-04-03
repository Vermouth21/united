<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">Permohonan Advance</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<style>
.a {color:red;}
</style>
<section class="content row-py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <form action="" method="POST">
                    <div class="callout callout-info">
                        <h2 class="text-center"><i class="fas fa-"></i> <u>FORM PERMOHONAN ADVANCE KARYAWAN</u> </h2>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-1 text-left">Tanggal :</div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="tanggal_permintaan">
                                </div>
                            </div>
                        </div>

                        <!-- row -->
                        <p><i>Mohon DIberikan Uang Muka / Advance Karyawan Kepada :</i></p>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Nama Karyawan</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama Karyawan"
                                        name="nama_karyawan">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">NRP</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="NRP" name="nrp">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Untuk Keperluan</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Untuk Keperluan" name="untuk_keperluan">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Sejumlah</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="number " class="form-control" placeholder="Sejumlah" name="sejumlah">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Terbilang</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Terbilang" name="terbilang">
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
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama Karyawan</th>
                                            <th>NRP</th>
                                            <th>Untuk Keperluan</th>
                                            <th>Sejumlah</th>
                                            <th>Terbilang</th>
                                            <th width="130">BOH</th>
                                            <th width="130">ADH</th>
                                            <th width="180">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>
                                                <button type="button" data-toggle="modal" data-target="#depthAcc"
                                                    class="btn btn-warning btn-sm"><i class="fa fa-check"> BOH
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
                                                                    <label for="">
                                                                        <h6>Silahkan Konfirmasi Jika Menyetujui</h6>
                                                                        <h4>Konfirmasi DeptH</h4>
                                                                    </label>
                                                               
                                                                        <label for="">Iya</label>
                                                                        <input type="checkbox" value="1" name="yes">
                                                                
                                                                        <label for="">Tidak</label>
                                                                        <input type="checkbox" value="Ditolak" name="no">
                                                                   
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
                                                                    <label for="">
                                                                        <h6>Silahkan Konfirmasi Jika Menyetujui</h6>
                                                                        <h4>Konfirmasi ADH</h4>
                                                                    </label>
                                                               
                                                                        <label for="">Iya</label>
                                                                        <input type="checkbox" value="1" name="yes">
                                                                
                                                                        <label for="">Tidak</label>
                                                                        <input type="checkbox" value="Ditolak" name="no">
                                                                   
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