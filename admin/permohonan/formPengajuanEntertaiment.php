<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">Form Pengajuan Entertaiment</li>
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
                <h2 class="text-center"><i class="fas fa-"></i>PT. UNITED TRACTORS Tbk- BRANCH PADANG  <u><br>fORM PENGAJUAN ENTERTAIMENT</u> </h2>
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
                                <label for="">Nama Tamu</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama Tamu"
                                        name="nama_tamu[]">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Jabatan</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Jabatan"
                                        name="jabatan[]">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Nama Perusahaan</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Nama Perusahaan" name="nama_perusahaan[]">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Tanggal Jamuan</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="tanggal_jamuan[]">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Tempat Jamuan</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Tempat Jamuan" name="tempat_jamuan[]">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Alamat</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat[]">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Dalam Rangka</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="dalamrangka[]" placeholder="Dalam Rangka">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Total</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Departemen / Division" name="departement[]">
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


            <div class="col-md-12">
                <div class="callout callout-info">
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama Tamu</th>
                                            <th>Jabatan</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Tanggal Jamuan</th>
                                            <th>Tempat Jamuan</th>
                                            <th>Alamat</th>
                                            <th>Dalam Rangka</th>
                                            <th>Total</th>
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
                                            <td>-</td>\
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                    <tr>
                                        <td colspan="5"></td>
                                        <td colspan="2">TOTAL AMOUNT</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">BOH</th>
                                        <th colspan="3">ADH</th>
                                        <th colspan="3">Aksi</th>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <button type="button" data-toggle="modal" data-target="#depthAcc" class="btn btn-warning btn-sm"><i class="fa fa-check"> BOH Acc</i></button>
                                        </td>
                                        <td colspan="3">
                                            <button type="button" data-toggle="modal" data-target="#adhAcc" class="btn btn-warning btn-sm"><i class="fa fa-check"> ADH Acc</i></button>
                                        </td>
                                        <td  colspan="3" class="text-center">
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
//   function addRow(tableID) {

//    var table = document.getElementById(tableID);
//    var rowCount = table.rows.length;
//    var row = table.insertRow(rowCount);

//    var cell1 = row.insertCell(0);
//    var element1 = document.createElement("input");
//    element1.type = "checkbox";
//    element1.name="chkbox[]";
//    cell1.appendChild(element1);

//    var cell2 = row.insertCell(1);
//    var element3 = document.createElement("input");
//    element3.type = "text";
//    element3.name = "txtbox[]";
//    cell2.appendChild(element3);


//    var cell3 = row.insertCell(2);
//    var element2 = document.createElement("input");
//    element2.type = "text";
//    element2.name = "txtbox[]";
//    cell3.appendChild(element2);

//   }

//   function deleteRow(tableID) {
//    try {
//    var table = document.getElementById(tableID);
//    var rowCount = table.rows.length;

//    for(var i=0; i<rowCount; i++) {
//     var row = table.rows[i];
//     var chkbox = row.cells[0].childNodes[0];
//     if(null != chkbox && true == chkbox.checked) {
//      table.deleteRow(i);
//      rowCount--;
//      i--;
//     }


//    }
//    }catch(e) {
//     alert(e);
//    }
//   }

 </script>