<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">Order Pembelian</li>
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
                <h2 class="text-center"><i class="fas fa-"></i><u>ORDER PEMBELIAN</u> </h2>
                <br>
                <div align="center">
                    <button onclick="addRow()" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                </div>
            </div>
        </div>
            <form action="" method="POST">
            <div class="col-12">
                <div class="callout callout-info  table-responsive">
                    <table class="table">
                    <thead>
                        <tr>
                            <td style="width:250px"><input type="text" name="no_orderan" class="form-control" placeholder="No Orderan"></td>
                            <td style="width:250px"><input type="text" name="kepada" class="form-control" placeholder="Kepada"></td>
                        </tr>
                        <tr>
                            <td><input type="date" name="tanggal" class="form-control" placeholder="Tanggal"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="divisi_cabang" placeholder="Divisi / Cabang" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="reverenci" placeholder="Reverenci" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="pembayaran" class="form-control" placeholder="Pembayaran"></td>
                            <td><input type="text" name="beban" class="form-control" placeholder="Beban"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="pembayaran" class="form-control" placeholder="Term of payment"></td>
                            <td><input type="text" name="beban" class="form-control" placeholder="Bccount"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="pembayaran" class="form-control" placeholder="Currency"></td>
                            <td><input type="text" name="beban" class="form-control" placeholder="S / R No"></td>
                        </tr>
                    </thead>
                    </table>
                </div>
            </div>

                <div id="formInput" class="col-12">
                    <div class="callout callout-info">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Part Number <br> Model / Ukuran</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Part Number"
                                        name="partNumber[]">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Nama / Jenis Barang <br> Keterangan Lain</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama / Jenis Barang"
                                        name="jenisBarang[]">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Qty</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Qty" name="qty[]">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Satuan</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Harga Satuan" name="hargaSatuan[]">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Jumlah</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Jumlah" name="jumlah[]">
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
                                <h4>ADH / BOH</h4>
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


            <div class="col-md-12">
                <div class="callout callout-info">
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Part Number <br>Model / Ukuran</th>
                                            <th>Nama / Jenis Barang <br> Keterangan Lain</th>
                                            <th>Qty</th>
                                            <th>Harga Satuan</th>
                                            <th>Jumlah</th>
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
                                        </tr>
                                    </tbody>
                                    <tr>
                                        <td colspan="5" style="text-align:justify; font-size:11px">Subtotal</td>
                                        <td><input type="number" class="form-control" name="subtotal"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style="text-align:justify; font-size:11px">Penalty/ Discoount/ PPH PSI 23</td>
                                        <td><input type="number" class="form-control" name="penalty"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style="text-align:justify; font-size:11px">PPN 10%</td>
                                        <td><input type="number" class="form-control" name="subtotal"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style="text-align:justify; font-size:11px">Total Pembayaran</td>
                                        <td><input type="number" class="form-control" name="subtotal"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"><input type="text" class="form-control" name="terbilang" placeholder="Terbilang"></td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">Supplier</th>
                                        <th colspan="2">ADH/BOH</th>
                                        <th colspan="2">Aksi</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="button" data-toggle="modal" data-target="#depthAcc" class="btn btn-warning btn-sm"><i class="fa fa-check"> Supplier Acc </i></button>
                                        </td>
                                        <td colspan="2">
                                            <button type="button" data-toggle="modal" data-target="#adhAcc" class="btn btn-warning btn-sm"><i class="fa fa-check"> ADH/BOH Acc</i></button>
                                        </td>
                                        <td  colspan="2" class="text-center">
                                        <a href="" class="btn btn-danger btn-sm" style="color:#fff">cetak</a>
                                            <a href="" class="btn btn-info btn-sm" style="color:#fff">Edit</a>
                                            <a href="" class="btn btn-warning btn-sm" style="color:#fff">Delete</a>
                                        </td>
                                    </tr>
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