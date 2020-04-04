<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active"><a href="?page=permintaan/aksiSolar/viewPermintaanSolar">Detail Permintaan Solar</a></li>
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
                        <h3 class="text-center"><i class="fas fa-"></i> <u>FORM PERMINTAAN SOLAR</u> </h3>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-1 text-left">Tanggal :</div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="date" required class="form-control" name="tanggal_permintaan">
                                </div>
                            </div>
                        </div>

                        <!-- row -->
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Nama Karyawan</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" readonly class="form-control" value="<?= $_SESSION['nama'] ?>" 
                                        name="nama_karyawan">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Departement</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" id="department" class="form-control" placeholder="department" required name="departement">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Jumlah Solar Yang Diminta</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="number" required class="form-control" placeholder="Masukan Jumlah Solar"
                                        name="jumlah_solar">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="">Untuk keperluan</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <textarea class="ckeditor" required id="ckedtor" name="keperluan_solar"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                </form>

                <!-- /.invoice -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<script>
function playAudio() 
{ 
    var nama_karyawan = $('#department').val();
    if(nama_karyawan == '')
    {
        alert('Data Tidak Boleh Kosong..!!')
    }else{
        document.getElementById("notiv").play(); 
        alert('success')
    }
} 
</script>