<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">Permintaan Cuti</li>
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
                        <h2 class="text-center"><i class="fas fa-"></i> <u>SURAT PERMOHONAN CUTI KARYAWAN PT. UNITED TRACTORS</u> </h2>
                            <br>
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
                                <label for="">N R P P</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="N R P P"
                                        name="nrpp">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Tanggal Mulai Bekerja</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="tanggal_mulai_bekerja">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Departemen / Division</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Departemen / Division" name="departement">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Jabatan</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Jabatan" name="jabatan">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Alamat</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                   <textarea name="alamat" id="ckeditor" class="ckeditor"></textarea>
                                </div>
                            </div>

                            <div class="col-md-11">
                                <div class="form-group">
                                    <label>Hendak mengajukan permohonan CUTI untuk keperluan :</label>
                                    <textarea name="keperluan" class="ckeditor" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Dari tanggal</label>
                            </div>
                            <div class="col-md-7">
                                <table class="table-hover">
                                    <tr>
                                        <td><input type="date" name="tanggal_mulai" class="form-control"></td>
                                        <td><center>S/d</center></td>
                                        <td><input type="date" name="tanggal_selesai" class="form-control"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <label for="">Untuk periode tahun</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Untuk Periode Tahun" name="periode_tahun">
                                </div>
                            </div><br>
                            <div class="col-md-11">
                                <hr><h3><b>Catatan</b></h3><hr>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                        <table class="table table-borderless">
                                            <tr>
                                                <td>Cuti Periode</td>
                                                <td><input type="text" class="form-control" placeholder="Cuti Periode"  name="cuti_periode[]"></td>
                                                <td>=</td>
                                                <td><input type="number" class="form-control" placeholder="Jumlah Hari"  name="jumlah_hari[]"></td>
                                                <td>Hari</td>
                                            </tr>
                                            <tr>
                                                <td>Cuti Periode</td>
                                                <td><input type="text" class="form-control" placeholder="Cuti Periode"  name="cuti_periode[]"></td>
                                                <td>=</td>
                                                <td><input type="number" class="form-control" placeholder="Jumlah Hari"  name="jumlah_hari[]"></td>
                                                <td>Hari</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><center>Jumlah</center></td>
                                                <td>=</td>
                                                <td><input type="number" class="form-control" placeholder="Jumlah Hari"  name="jumlah_hari[]"></td>
                                                <td>Hari</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><center>Diambil</center> </td>
                                                <td>=</td>
                                                <td><input type="number" class="form-control" name="jumlah_hari[]" placeholder="Jumlah Hari"></td>
                                                <td>Hari</td>
                                            </tr>
                                            <tr>
                                                <td>Periode</td>
                                                <td><input type="text" placeholder="Periode" class="form-control" name="periode[]"></td>
                                                <td>=</td>
                                                <td><input type="number" class="form-control" placeholder="Jumlah Hari" name="sisa_hari[]"></td>
                                                <td>Hari</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Untuk periode tahun</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Untuk Periode Tahun" name="periode_tahun">
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