<footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y') ?> <a href="">United Tractors</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="<?= $base_url ?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?= $base_url ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?= $base_url ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= $base_url ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?= $base_url ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?= $base_url ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?= $base_url ?>assets/dist/js/adminlte.js"></script>
<script src="<?= $base_url ?>assets/dist/js/demo.js"></script>
<script src="<?= $base_url ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= $base_url ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?= $base_url ?>assets/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      responsive: true
    });
  });
</script>

<script>
  $(document).ready(function () { // Ketika halaman sudah diload dan siap
    $("#btn-tambah-form").click(function () { // Ketika tombol Tambah Data Form di klik
      var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
      var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya

      // Kita akan menambahkan form dengan menggunakan append
      // pada sebuah tag div yg kita beri id insert-form
      $("#insert-form").append(

       " <tr>" +
          "<td>" + nextform + "</td>" +
          "<td>"+"<input type='date' class='form-control' required name='tanggal[]'>"+" </td>" +
          "<td>"+"<input type='text' class='form-control' required name='deskripsi'>"+"</td>" +
          "<td>"+"<input type='number' class='form-control' required name='jumlah[]'>"+"</td>" +
          "<td>"+"<input type='text' class='form-control' required name='keterangan[]'>"+"</td>" +
        "</tr>"

      );

      $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
    });
      // Buat fungsi untuk mereset form ke semula
      $("#btn-reset-form").click(function () {
      $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
      $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
    });



  //@rafisahendra - Untuk pengambilan data disurat
    $('#nrpSuratTugas').on('keyup', function (){
   
     var nrp = $('#nrpSuratTugas').val();
     if(nrp == ''){
      $('#id_karyawanSurat').val('');
      $('[name="departement"]').val('')
     }else{
      $.ajax({
            url: 'permintaan/aksiSurat/ajx.php',
            type:'POST',
            data: 'nrp=' + nrp,
            dataType:'json',
            success: function (data) {
              var dept = data[0].nama_departement;
              var baris = '';
              var i;
              baris='';
              for (i = 0; i < data.length; i++) {
                baris += '<option value=' + data[i].id_karyawan + '>' + data[i].nama_karyawan +
                '</option>';
                
              }
              $('#id_karyawanSurat').html(baris);
              $('[name="departement"]').val(dept)
            }
      })
     }
  });

  //@rafisahendra - Untuk hilangkan pesan cek
  $('#nrpkrr').on('keyup', function (){
      $('#cek_nrp').html('')
    });
   

  //@rafisahendra - Untuk cek nrp karyawan
  $('#nama_karyawan').on('keydown', function (){
   
   var nrp = $('#nrpkrr').val();
    $.ajax({
          url: 'permintaan/aksiSurat/ajx.php',
          type:'POST',
          data: 'nrp=' + nrp+'&aksi=ajx_krr',
          dataType:'json',
          success: function (data) {
            var nrp_db = data[0].nrp;
            var nama = data[0].nama_karyawan;
          
        if(nrp_db > 1){
            $('#cek_nrp').html(`
            <i class="text-red">NRP sudah ada :<span style="color:#000">`+ nrp_db +` | `+nama+`</span> </i>
            `);
        }
           
          }
    })
   
});


  });

function reset(){
      $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
}
window.onload = reset();


</script>

</body>
</html>