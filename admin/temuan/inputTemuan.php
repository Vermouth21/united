<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Input Temuan LK3</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content row-py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="callout callout-info">
                	<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Tanggal</label>
							<input type="date" class="form-control" required name="tanggal_temuan">
						</div>
						<div class="form-group">
							<label>Tempat</label>
							<input type="text" class="form-control" required name="tempat_temuan">
						</div>
						<div class="form-group">
							<label>Foto</label>
							<input type="file" class="form-control" name="foto">
						</div>
						<div class="form-group">
							<label>Keterangan</label>
							<textarea name="keterangan_temuan" class="ckeditor" id="ckedtor"></textarea>
						</div>
						<div>
							<button type="submit" name="temuanSimpan" class="btn btn-primary btn-block">Laporkan</button>
							<button type="button" data-dismiss="modal" class="btn btn-warning btn-block">Batal</button>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
</section>