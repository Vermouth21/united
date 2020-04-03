<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Report Temuan LK3</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="row py-3">
        <div class="col-12">
          	<div class="card">
            	<div class="card-header">
						
						<br>
						<h5><center>Data Temuan</center></h5>
					<!-- <button type="button" data-toggle="modal" data-target="#reportTemuan" class="btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i> Input Temuan</button> -->
				</div>
				
            	<div class="card-body table-responsive">
              		<table id="example1" class="table table-bordered table-hover">
						<thead>
							<tr>
								<td>No</td>
								<td>Tanggal</td>
								<td>Nama Pelapor</td>
								<td>Foto</td>
								<td>Keterangan</td>
								<td width="60px">Action</td>
							</tr>
						</thead>
						<tbody>
							<?php
								$data = $con->query("SELECT report_temuan_lk.*,karyawan.* FROM report_temuan_lk JOIN karyawan WHERE report_temuan_lk.id_karyawan=karyawan.id_karyawan ORDER BY report_temuan_lk.id_temuan DESC");
								foreach($data as $i => $a):
									if($a['status'] == NULL)
									{
							?>
							<tr>
								<td><?= $i+1 ?></td>
								<td><?= ind($a['tanggal_temuan']) ?></td>
								<td><?= $a['nama_karyawan'] ?></td>
								<td><img src="../upload/temuan/<?= $a['foto_temuan'] ?>" width="100px"></td>
								<td><?= substr(strip_tags($a['keterangan_temuan']),0,250) ?></td>
								<td>
									<form action="" method="POST" enctype="multipart/form-data">
										<input type="hidden" name="id" value="<?= $a['id_temuan'] ?>">
										<button type="submit" name="clear" class="btn btn-success"><i class="fa fa-check-square"></i>&nbsp; Clear</button>
									</form>
								</td>
							</tr>
									<?php }; endforeach ?>
						</tbody>
			  		</table>
				</div>
			</div>
		</div>
	</div>
</section>