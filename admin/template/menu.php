<aside class="main-sidebar sidebar-light-primary elevation-4">
  <a href="" class="brand-link">
    <img src="<?= $base_url ?>assets/images/ut2.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light"><?= $_SESSION['nama'] ?></span>
  </a>
  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview menu-open">
          <a href="index.php" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-server"></i>
            <p>
              ADH
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="?page=adh/financial_highlights" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Financial Highlights</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?page=adh/pica" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pica</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-server"></i>
            <p>
              GA
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="?page=permintaan/permintaan_solar" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Permintaan Solar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=permintaan/aksiSolar/viewPermintaanSolar" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Permintaan Solar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?page=permintaan/peminjaman_kop" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Peminjaman Kendaraan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=permintaan/surat_izin_keluar" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Surat Izin Keluar</p>
              </a>
            </li>
          </ul>
        </li>
        <?php if( $_COOKIE['id_departement'] == 3 ||  $_COOKIE['id_departement'] == 1 ):?>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-server"></i>
            <p>
              Cashier
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="?page=permohonan/permohonanAdvance" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Advance Karyawan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=permohonan/suratPermohonanCuti" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cuti Karyawan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=permohonan/fasilitasKomunikasi" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fasilitas Komunikasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=permohonan/fasilitasPengobatan" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fasilitas Pengobatan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=permohonan/deklarasi_karyawan" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Deklarasi Karyawan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=permintaan/surat_tugas" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Permintaan Surat Tugas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/fixed-footer.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Deklarasi Perjalanan Dinas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=permohonan/formPengajuanEntertaiment" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pengajuan Entertaiment</p>
              </a>
            </li>
          </ul>
        </li>
        <?php endif ?>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-server"></i>
            <p>
              Safety
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?page=temuan/inputTemuan" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Input Temuan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?page=temuan/temuan" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Report Temuan LK3</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-server"></i>
            <p>
              Sekretaris
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="?page=sekretaris/permintaanPembelian" class="nav-link" data-toggle="tooltip"
                title="Permintaan Pembelian Barang /Jasa">
                <i class="far fa-circle nav-icon"></i>
                <p>Permintaan Pembelian Barang /Jasa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?page=sekretaris/orderPembelian" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Order Pembelian</p>
              </a>
            </li>
          </ul>
        </li>
        <?php if( $_COOKIE['id_karyawan'] == 1):?>
        <li class="nav-item">
          <a href="?page=karyawan/dataKaryawan" class="nav-link">
            <i class="nav-icon fa fa-users"></i>
            <p>
              Data Karyawan
            </p>
          </a>
        </li>
        <?php endif ?>
      </ul>
    </nav>
  </div>
</aside>