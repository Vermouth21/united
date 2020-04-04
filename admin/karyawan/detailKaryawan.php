  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1>Profile</h1>
              </div>
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                      <li class="breadcrumb-item active">User Profile</li>
                  </ol>
              </div>
          </div>
      </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
          <?php foreach($db->viewDetailKaryawan($_GET['id']) as $d) : ?>
          <div class="row">
              <div class="col-md-3">

                  <!-- Profile Image -->
                  <div class="card card-primary card-outline">
                      <div class="card-body box-profile">
                          <div class="text-center">
                              <img class="img-responsive" width="190px" src="../upload/karyawan/<?= $d->foto_karyawan?>"
                                  alt="NO IMAGE">
                          </div>

                          <h3 class="profile-username text-center"><?= $d->nama_karyawan ?></h3>

                          <p class="text-muted text-center"><?= $d->pekerjaan ?></p>

                          <ul class="list-group list-group-unbordered mb-3">
                              <li class="list-group-item">
                                  <b>Departement</b> <a class="float-right"><?= $d->nama_departement ?></a>
                              </li>
                              <li class="list-group-item">
                                  <b>NRP</b> <a class="float-right"><?= $d->nrp ?></a>
                              </li>

                              <li class="list-group-item">
                                  <b>level</b> <a class="float-right"><?= $d->nama_level ?></a>
                              </li>
                                 <!-- Button to Open the Modal -->
                                 <hr>
                        <button type="button" class="btn btn-primary btn-flat" onclick="editPassword(<?= $d->id_karyawan ?>)">
                        Ubah Password
                        </button>
                          </ul>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->

                  <!-- About Me Box -->
                  <!-- /.card -->
              </div>
              <div class="col-md-8">
                  <div class="card card-primary card-outline" >
                      <div class="card-header ">
                          <h3 class="card-title">Detail Karyawan</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                          <strong><i class="fas fa-calendar mr-1"></i> Tempat/ Tanggal Lahir</strong>

                          <p class="text-muted">
                              <?= $d->tempat_lahir.' / '.$d->tanggal_lahir ?>
                          </p>

                          <hr>

                          <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                          <p class="text-muted"><?= $d->alamat ?></p>

                          <hr>

                          <strong><i class="fas fa-phone-alt mr-1"></i> NoHp</strong>

                          <p class="text-muted"><?= $d->notelp ?></p>

                          <hr>

                          <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                          <p class="text-muted"><?= $d->email ?></p>

                          <hr>


                          <strong><i class="fas fa-file-alt mr-1"></i> Agama</strong>

                          <p class="text-muted">
                              <?= $d->agama ?>
                          </p>

                          <hr>

                          <strong><i class="fas fa-tint mr-1"></i> Golongan Darah</strong>

                          <p class="text-muted">
                              <?= $d->golongan_darah ?>
                          </p>

                          <hr>

                          <strong><i class="fas fa-restroom mr-1"></i> Jenis kelamin</strong>

                          <p class="text-muted">
                              <?= $d->jenis_kelamin ?>
                          </p>

                          <hr>
                      </div>
                      <!-- /.card-body -->
                  </div>
              </div>
          </div>
          <?php endforeach ?>
          <!-- /.row -->
      </div><!-- /.container-fluid -->
  </section>



<!-- The Modal -->
<div class="modal" id="ubahPass">
  <div class="modal-dialog">
  <form action="" method="post" id="reset_form1">
  <div class="modal-content">

<!-- Modal Header -->
<div class="modal-header">
  <h5 class="modal-title">Ubah Password</h5>
  <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<!-- Modal body -->
<div class="modal-body">
 <div class="form-group">
 <label for="">Password lama</label>
 <input type="hidden" class="form-control" name="id_karyawan">
 <input type="text" class="form-control" disabled name="password_lama">
 </div>
 <div class="form-group">
 <label for="">Password Baru</label>
 <input type="password" class="form-control"  name="password_baru">
 </div>
 <div class="form-group">
 <label for="">Konfirmasi Password Baru</label>
 <input type="password" class="form-control"  name="konfirmasi_password_baru">
 </div>
 <div id="pesan"></div>
</div>

<!-- Modal footer -->
<div class="modal-footer">
  <button type="submit" name='ubahPassword' onclick="reset_form()" class="btn btn-danger btn-flat btn-sm"> <span class="fas fa-lock"></span> Konfirmasi</button>
</div>

</div>
  </form>
  </div>
</div>
<?php 
if(isset($_POST['ubahPassword'])){

    if($_POST['password_baru'] == $_POST['konfirmasi_password_baru']){
        echo"<script>alert('success')</script>";
        $db->ubahPassword($_POST);
    }else{
        echo"<script>alert('Perikasa password kembali ')</script>";
    }
}

?>
<script>
function editPassword(values) {
 
 $.ajax({
     type: "POST",
     data: 'id=' + values,
     url: "karyawan/ajx.php",
     dataType: 'json',
     success: function (request) {
        $('#ubahPass').modal();
         $('[name="id_karyawan"]').val(request[0].id_karyawan);
         $('[name="password_lama"]').val(request[0].password_view);
        
     }
 });
}


</script>

