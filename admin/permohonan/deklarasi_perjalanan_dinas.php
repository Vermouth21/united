<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Deklarasi Perjalanan Dinas</li>
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
            <div class="col-md-12">
                <div class="callout callout-info">
                    <h2 class="text-center"><i class="fas fa-"></i>PT. UNITED TRACTORS Tbk- BRANCH PADANG  <u><br>DEKLARASI PERJALANAN DINAS</u> </h2>
                    <br>
                    <div align="center">
                        <button onclick="addRow()" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                        <!-- <button onclick="deleteRow()" class="btn btn-danger btn-sm"><i class="fa fa-minus"></i></button> -->
                    </div>
                </div>
            </div>
            <form action="" method="POST">
                <div id="formInput" class="col-12">
                    <div class="callout callout-info">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Nama</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama"
                                        name="nama[]">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">NRP</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="NRP"
                                        name="nrp[]">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Dept / Cab</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Dept / Cab" name="dept_cab[]">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">No Surat Tugas</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="No Surat Tugas" name="no_surat_tugas[]">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Tujuan & Keperluan</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Tujuan & Keperluan" name="tujuan_keperluan[]">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Beban</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Beban" name="beban[]">
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                </div>
                <div id="clone"></div>
                <div class="col-md-12">
                    <div class="callout callout-info">
                        <div class="col-md-7">
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
                </div>
            </form>

            <div class="col-12">
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
                                            <th>NRP</th>
                                            <th>Dept/Cab</th>
                                            <th>No Surat Tugas</th>
                                            <th>Tujuan & Keperluan</th>
                                            <th>Beban</th>
                                            <th colspan="3">Aksi</th>
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
                                            <td>-</td>
                                            <td>
                                                <button type="button" data-toggle="modal" data-target="#depthAcc" class="btn btn-warning btn-sm"><i class="fa fa-check"> Dept. Head Acc</i></button>
                                            </td>
                                            <td>
                                                <button type="button" data-toggle="modal" data-target="#adhAcc" class="btn btn-warning btn-sm"><i class="fa fa-check"> ADH Acc</i></button> 
                                            </td>
                                            <td>
                                                <a href="?page=permohonan/detail_perjalanan_dinas" class="btn btn-danger btn-sm" style="color:#fff">Detail</a>
                                            </td>
                                            <!-- Modal Deph-->

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

<script language="javascript">
function addRow()
{
    $('#formInput').clone().appendTo("#clone");
}
</script>