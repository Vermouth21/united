<?php include "../config/koneksi.php" ?>
<?php include "template/header.php" ?>
<?php
session_start();
  if(!isset($_COOKIE['id_karyawan']))
  {
    setcookie('pesan', "Login Telah Berakhir", time() + 1, "/");
    header("Location: ../index.php");
  }    
?>
<?php require '../config/function.php'; ?>
<?php include '../config/Master.php'; $db = new Master();?>
<?php include "template/menu.php" ?>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
        <?php
            if(!empty($_GET["page"])){
                include_once($_GET["page"].".php");
            }else{
                include "home.php";
            }
        ?>
        </div>
    </section>
</div>
<?php include "template/pesan.php" ?>
<?php include "template/footer.php" ?>