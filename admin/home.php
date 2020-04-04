<div class="row">
  <div class="col-lg-3 col-6">
    <div class="small-box bg-info">
      <div class="inner">
        <h3>150</h3>

        <p>New Orders</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
      <div class="inner">
        <h3>53<sup style="font-size: 20px">%</sup></h3>

        <p>Bounce Rate</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>44</h3>

        <p>Jumlah Temuan</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>65</h3>

        <p>Unique Visitors</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
          <h6 class="card-title">Temuan Terbaru</h6>
      </div>
      <div class="card-body">
          <?php 
            $data = $con->query("SELECT * FROM `report_temuan_lk` ORDER BY tanggal_temuan DESC");
            foreach($data as $a){
              if($a['status']!= 1){
          ?>
          <div class="callout callout-info">
            <div class="card">
              <center>
                <img class="card-img-top" src="<?= $base_url ?>upload/temuan/<?= $a['foto_temuan'] ?>" alt="Card image" style="width:50%; height: 50%">
              </center>
              <div class="card-body">
                <h4 class="card-title"><?= $a['tempat_temuan'] ?></h4>
                <p class="card-text"><?= $a['keterangan_temuan'] ?></p>
              </div>
            </div>
            </table>
          </div>
        <?php }} ?>
      </div>
    </div>
  </div>
</div>