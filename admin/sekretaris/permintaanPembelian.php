<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">PERMINTAAN PEMBELIAN BARANG / JASA</li>
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
                        <h2 class="text-center"><i class="fas fa-"></i> <u>PERMINTAAN PEMBELIAN BARANG / JASA</u> </h2>
                           
                            <table align="right">
                                <tr>
                                    <td>No :</td>
                                    <td><input type="text" style="width:60px" name="no"></td>
                                    <td>/</td>
                                    <td><input type="text" style="width:60px" name="bulan"></td>
                                    <td>/</td>
                                    <td><input type="text" style="width:60px" name="tahun"></td>
                                    <td>&nbsp;&nbsp;&nbsp;Tanggal :</td>
                                    <td><input type="date" class="form-control" name="tanggal"></td>
                                </tr>
                            </table>

                        <table class="table">
                            <tr>
                                <td rowspan="2">
                                    <div class="form-group">
                                        <textarea name="kepada[]" class="form-control" style="height:100px" placeholder="Kepada (Vendor yang ditunjuk)"></textarea>
                                    </div>
                                </td>
                                <td><input type="text" placeholder="Cabang / Dept " name="cabangDept[]" class="form-control"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" placeholder="Diperlukan Untuk" name="diperlukan_untuk[]"></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="text" name="jenis_kegiatan[]" class="form-control" placeholder="Jenis Kegiatan">
                                        <input type="text" name="pembebanan[]" class="form-control" placeholder="Pembebanan">
                                        <input type="text" name="unitModel[]" class="form-control" placeholder="Unit MOdel">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" name="jenis_kegiatan[]" class="form-control" placeholder="Jenis Kegiatan">
                                        <input type="text" name="pembebanan[]" class="form-control" placeholder="Pembebanan">
                                        <input type="text" name="unitModel[]" class="form-control" placeholder="Unit MOdel">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="callout callout-info">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Nama Barang / Material / Jasa</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama Barang / Material / Jasa"
                                        name="namaBarang[]">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Part Number / Model / Ukuran</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Part Number / Model / Ukuran"
                                        name="partNumber[]">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Qty</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="qty[]" placeholder="Qty">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Harga satuan</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Harga Satuan" name="hargasatuan[]">
                                </div>
                            </div>
                        </div>
                    </div>
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
            </div>

            <div class="col-md-12">
                <div class="callout callout-info">
                            <div class="card-body table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama Barang / material/jasa</th>
                                            <th>Part Number</th>
                                            <th>Qty</th>
                                            <th>Harga Satuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                    <tr>
                                        <th style="text-align:center">Supervisor</th>
                                        <th style="text-align:center">Dept Head</th>
                                        <th style="text-align:center">ADH</th>
                                        <th style="text-align:center">BOH</th>
                                        <th style="text-align:center">Aksi</th>
                                    </tr>
                                    <tr>
                                        <td>
                                        <center>
                                            <button type="button" data-toggle="modal" data-target="#depthAcc" class="btn btn-warning btn-sm"><i class="fa fa-check"> Supervisor Acc</i></button>
                                        </center>
                                        </td>
                                        <td>
                                        <center>
                                            <button type="button" data-toggle="modal" data-target="#adhAcc" class="btn btn-warning btn-sm"><i class="fa fa-check"> Dept Head Acc</i></button>
                                        </center>
                                        </td>
                                        <td>
                                        <center>
                                            <button type="button" data-toggle="modal" data-target="#depthAcc" class="btn btn-warning btn-sm"><i class="fa fa-check"> ADH Acc</i></button>
                                        </center>
                                        </td>
                                        <td>
                                        <center>
                                            <button type="button" data-toggle="modal" data-target="#adhAcc" class="btn btn-warning btn-sm"><i class="fa fa-check"> BHO Acc</i></button>
                                        </center>
                                        </td>
                                        <td  class="text-center">
                                        <a href="" class="btn btn-danger btn-sm" style="color:#fff">cetak</a>
                                            <a href="" class="btn btn-info btn-sm" style="color:#fff">Edit</a>
                                            <a href="" class="btn btn-warning btn-sm" style="color:#fff">Delete</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
