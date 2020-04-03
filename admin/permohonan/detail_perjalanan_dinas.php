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
            <div class="col-12">
                <!-- Main content -->
                <div class="callout callout-info">
                    <!-- Table row -->
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
                                <label for="">Tanggal</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="tanggal[]">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Lokasi</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Lokasi"
                                        name="lokasi[]">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Tiket</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Tiket" name="tiket[]">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Hotel</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Hotel" name="hotel[]">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Taksi</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Taksi" name="taksi[]">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Makan / UPD</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Makan / UPD" name="makan_upd[]">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Airport Tax</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Airport Tax" name="airport_tax[]">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Others</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Others" name="others[]">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Keterangan</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Keterangan" name="keterangan[]">
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
                                <h5 class="text-center"><b>PT UNITED TRACTORS Tbk - BRANCH PADANG</b></h5>
                                <h5 class="text-center"><b> DEKLARASI PERJALANAN DINAS </b></h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <table class="table table-borderless table-responsive">
                                            <tr>
                                                <td>Nama</td>
                                                <td>:</td>
                                                <td></td>
                                            </tr> 
                                            <tr>
                                                <td>NRP</td>
                                                <td>:</td>
                                                <td></td>
                                            </tr> 
                                            <tr>
                                                <td>Dept/Cab</td>
                                                <td>:</td>
                                                <td></td>
                                            </tr> 
                                        </table>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <table class="table table-borderless table-responsive">
                                            <tr>
                                                <td>No Surat Tugas</td>
                                                <td>:</td>
                                                <td></td>
                                            </tr> 
                                            <tr>
                                                <td>Tujuan & Keperluan</td>
                                                <td>:</td>
                                                <td></td>
                                            </tr> 
                                            <tr>
                                                <td>Beban</td>
                                                <td>:</td>
                                                <td></td>
                                            </tr> 
                                        </table>
                                    </div>
                                </div>
                                <table class="table table-bordered table-hover table-responsive">
                                    <thead>
                                        <tr class="text-center">
                                            <th rowspan="2" class="align-middle">No</th>
                                            <th rowspan="2" class="align-middle">Tanggal</th>
                                            <th rowspan="2" class="align-middle">Lokasi</th>
                                            <th colspan="6" class="align-middle">Pengeluaran</th>
                                            <th rowspan="2" class="align-middle">Keterangan</th>
                                        </tr>
                                        <tr>
                                            <th class="align-middle">Tiket</th>
                                            <th class="align-middle">Hotel</th>
                                            <th class="align-middle">Taksi</th>
                                            <th class="align-middle">Makan / UPD</th>
                                            <th class="align-middle">Airport Tax</th>
                                            <th class="align-middle">Other</th>
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
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th>Total</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th colspan="8" class="align-middle">Total</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- /.invoice -->
            </div><!-- /.col -->
            <div class="col-12">
                <!-- Main content -->
                <div class="callout callout-info">
                    <!-- Table row -->
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="" method="POST">
                                            <div id="formInput" class="col-12">
                                                <div class="callout callout-info">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="">Total Uang Muka</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Total Uang Muka" name="total_uang_muka">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /row -->
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="callout callout-info">
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-info btn-sm">Submit </button>
                                                            <button type="reset" class="btn btn-warning btn-sm" style="color:#fff">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table table-bordered table-hover table-responsive">
                                            <tbody>
                                                <tr>
                                                    <td>Total Uang Muka</td>
                                                    <td>Rp.000</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Pengeluaran</td>
                                                    <td>Rp.000</td>
                                                </tr>
                                                <tr>
                                                    <td>Kembali ke Perusahaan/Karyawan</td>
                                                    <td>Rp.000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
<script language="javascript">
function addRow()
{
    $('#formInput').clone().appendTo("#clone");
}
</script>