<!-- Content Header (Page header) -->
<?php
    $tgl = date('Y-m-d');
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Data Karyawan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<div class="callout callout-info">
    <!-- Table row -->
    <div class="row">
        <div class="col-12 table-responsive">
            <div class="card-body">
                <button   data-toggle="modal" data-target="#addAnggota" class="btn btn-flat btn-info btn-sm mb-2"><i
                        class="fa fa-plus-circle"></i> Tambah Data</button>
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nrp</th>
                            <th>Nama Karyawan</th>
                            <th>Jenis Kelamin</th>
                            <th>Department</th>
                            <th>No Telepon</th>
                            <th>Email</th>
                            <th >Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($db->viewKaryawan() as $no => $d) :?>
                        <tr>
                            <td><?= $no+1 ?></td>
                            <td><?= $d->nrp ?></td>
                            <td><?= $d->nama_karyawan ?></td>
                            <td><?= $d->jenis_kelamin ?></td>
                            <td><?= $d->nama_departement ?></td>
                            <td><?= $d->notelp ?></td>
                            <td><?= $d->email ?></td>


                            <td >
                                <a style="width:60px;color:#fff" href="?page=karyawan/detailKaryawan&id=<?= $d->id_karyawan ?>" class="btn btn-danger btn-sm btn-flat mb-1">Detail</a>
                            <button style="width:60px;color:#fff"  type="button" onclick="editKaryawan('<?=  $d->id_karyawan  ?>')" class="btn btn-flat btn-sm btn-info mb-1" style="border-radius:2px;">Edit</button>
                                <a style="width:60px;color:#fff" href="?page=karyawan/dataKaryawan&delete=<?= $d->id_karyawan?>&foto=<?= $d->foto_karyawan?>""  class="btn btn-warning btn-sm btn-flat mb-1">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>


<div class="modal fade" id="addAnggota">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <form action="" method="post" id="submit_form" enctype="multipart/form-data">
                    <label for=""> <i class="fas fa-"></i>
                        <h4 id="judul_modal">Tambah Data Karyawan</h4>
                    </label>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">NRP</label>
                            <input type="text" class="form-control" placeholder="Tap untuk mengetik" required name="nrp" id="nrpkrr">
                            <span id="cek_nrp"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Tap untuk mengetik" required name="nama_karyawan" id="nama_karyawan">
                        </div>
                    </div>
              
                   
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Departement</label>
                         <select required name="departement" id="" class="form-control">
                         <option value="">-- Pilih Departement --</option>
                         <?php foreach($db->viewDepartement() as $d) : ?>
                            <option value="<?php echo $d->id_departement ?>"><?= $d->nama_departement?></option>
                            <?php endforeach ?>
                         </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Posisi/ Level</label>    
                        <select required name="level" id="" class="form-control">
                        <option value="">Pilih Level --</option>
                        <?php foreach($db->viewLevel() as $d) : ?>
                            <option value="<?php echo $d->id_level ?>"><?= $d->nama_level?></option>
                            <?php endforeach ?>
                         </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" placeholder="Tap untuk mengetik" required name="tempat_lahir">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" placeholder="Tap untuk mengetik" required name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Foto Karyawan</label>
                            <input type="file" class="form-control"  name="foto">
                            <input type="hidden" name="fotolama">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Pekerjaan</label>
                            <input type="text" class="form-control" placeholder="Tap untuk mengetik" required name="pekerjaan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Agama</label>
                            <input type="text" class="form-control" placeholder="Tap untuk mengetik" required name="agama">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                           <select name="jenis_kelamin" id="" required class="form-control">
                            <option value="">-- Pilih --</option>
                           <option value="laki-laki">Laki-laki</option>
                           <option value="Perempuan">Perempuan</option>
                           </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Golongan Darah</label>
                            <input type="text" class="form-control" placeholder="Tap untuk mengetik" required name="golongan_darah">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Nomor Telepon</label>
                            <input type="text" class="form-control" placeholder="Tap untuk mengetik" required name="notelp">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Alamat</label>
                            <input type="text" class="form-control" placeholder="Tap untuk mengetik" required name="alamat">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Tap untuk mengetik" required name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Password</label>
                            <input type="text" class="form-control" placeholder="Tap untuk mengetik" required name="password">
                        </div>
                    </div>
                    </div>
                    <div>
                        
                        <button type="submit" onclick="playAudio()" name="btnTambahKaryawan" class="btn btn-primary btn-block">Simpan</button>
                        <button data-dismiss="modal" style="color:#fff" class="btn btn-warning btn-block">Batal</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="eddKaryawan">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <form action="" method="post" id="submit_form" enctype="multipart/form-data">
                    <label for=""> <i class="fas fa-"></i>
                        <h4 id="judul_modal">Edit Data Karyawan</h4>
                    </label>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">NRP</label>
                            <input type="text" class="form-control" placeholder="Tap untuk mengetik" required name="nrp">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Tap untuk mengetik" required name="nama_karyawan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Departement</label>
                         <select required name="departement" id="" class="form-control">
                         <option value="">-- Pilih Departement --</option>
                         <?php foreach($db->viewDepartement() as $d) : ?>
                            <option value="<?php echo $d->id_departement ?>"><?= $d->nama_departement?></option>
                            <?php endforeach ?>
                         </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Posisi/ Level</label>    
                        <select required name="level" id="" class="form-control">
                        <option value="">Pilih Level --</option>
                        <?php foreach($db->viewLevel() as $d) : ?>
                            <option value="<?php echo $d->id_level ?>"><?= $d->nama_level?></option>
                            <?php endforeach ?>
                         </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" placeholder="Tap untuk mengetik" required name="tempat_lahir">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" placeholder="Tap untuk mengetik" required name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Foto Karyawan</label>
                            <input type="file" class="form-control"  name="foto">
                            <input type="hidden" name="fotolama">
                            <input type="hidden" name="id_karyawan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Pekerjaan</label>
                            <input type="text" class="form-control" placeholder="Tap untuk mengetik" required name="pekerjaan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Agama</label>
                            <input type="text" class="form-control" placeholder="Tap untuk mengetik" required name="agama">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                           <select name="jenis_kelamin" id="" required class="form-control">
                            <option value="">-- Pilih --</option>
                           <option value="laki-laki">Laki-laki</option>
                           <option value="Perempuan">Perempuan</option>
                           </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Golongan Darah</label>
                            <input type="text" class="form-control" placeholder="Tap untuk mengetik" required name="golongan_darah">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Nomor Telepon</label>
                            <input type="text" class="form-control" placeholder="Tap untuk mengetik" required name="notelp">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Alamat</label>
                            <input type="text" class="form-control" placeholder="Tap untuk mengetik" required name="alamat">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Tap untuk mengetik" required name="email">
                        </div>
                    </div>
                   
                    </div>
                    <div>
                        
                        <button type="submit" onclick="playAudio()" name="btnUpdate" class="btn btn-primary btn-block">Update</button>
                        <button data-dismiss="modal" style="color:#fff" class="btn btn-warning btn-block">Batal</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?php
if(isset($_POST["btnTambahKaryawan"])) {
   
        $db->addDataKaryawan($_POST);
        echo"<script>window.location.href='index.php?page=karyawan/dataKaryawan'</script>";
    }elseif(isset($_GET['delete'])){
        $db->delDataKaryawan($_GET); 
        echo"<script>alert('success')</script>";
        echo"<script>window.location.href='index.php?page=karyawan/dataKaryawan'</script>";
    }elseif(isset($_POST["btnUpdate"])) {
   
        $db->updDataKaryawan($_POST);
        echo"<script>window.location.href='index.php?page=karyawan/dataKaryawan'</script>";
    }
?>
<audio id="notiv">
    <source src="<?= $base_url; ?>assets/notive/sms_sms.mp3" type="audio/mpeg">
</audio>
<script>
    function playAudio() {
        var email = $('[name=email]').val();
        if (email == '') {
            alert('Data Tidak Boleh Kosong..!!')
        } else {
            document.getElementById("notiv").play();
            alert('success')
        }
    }

 function editKaryawan(values) {
 
 $.ajax({
     type: "POST",
     data: 'id=' + values+'&aksi=ajx_edd',
     url: "karyawan/ajx.php",
     dataType: 'json',
     success: function (request) {
$('#eddKaryawan').modal();
         $('[name="id_karyawan"]').val(request[0].id_karyawan);
         $('[name="nama_karyawan"]').val(request[0].nama_karyawan);
         $('[name="nrp"]').val(request[0].nrp);
         $('[name="tempat_lahir"]').val(request[0].tempat_lahir);
         $('[name="tanggal_lahir"]').val(request[0].tanggal_lahir);
         $('[name="pekerjaan"]').val(request[0].pekerjaan);
         $('[name="agama"]').val(request[0].agama);
         $('[name="golongan_darah"]').val(request[0].golongan_darah);
         $('[name="notelp"]').val(request[0].notelp);
         $('[name="alamat"]').val(request[0].alamat);
         $('[name="email"]').val(request[0].email);
         $('[name="departement"]').val(request[0].id_departement);
         $('[name="level"]').val(request[0].id_level);
         $('[name="departement"]').val(request[0].id_departement);
         $('[name="jenis_kelamin"]').val(request[0].jenis_kelamin);
         $('[name="fotolama"]').val(request[0].foto_karyawan);
     }
 });



}
</script>

