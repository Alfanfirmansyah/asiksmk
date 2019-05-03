<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Asik 2018 - Pengumuman Kelulusan Online</title>
   <link rel="icon" href="<?php echo base_url('assets/images/logo3.png')?>" type="image/gif" sizes="16x16">
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/blog-home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <i class="fa fa-home"></i>
      <a class="navbar-brand" href="<?php echo site_url();?>/welcome/cari"><h4>Asik 2018</h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive">
          
          <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url();?>/admin/view_user">Tambah User</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url();?>/admin/view_settanggal">SetTanggal</a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url();?>/admin/form">Import Data Siswa</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url();?>/admin/form2">Import Nilai</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url();?>/admin/list_data">Lihat Data</a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url();?>/admin/view_pesan">Pesan</a>
            </li>
            &nbsp &nbsp &nbsp
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/login/logout"> Hai, <?php echo $this->session->userdata("nama"); ?><h7 style ="color:#f4f4f2;"> | Logout</h7></a>
              
              </a>
            </li>
          </ul>
        
      </div>
    </nav>
    <br>
    <marquee><strong><h5>Selamat datang di Aplikasi sistem informasi kelulusan... (Pengumuman) untuk Siswa kelas 12 pengumuman kelulusan UN dapat dilihat pada tanggal 12 mei 2018 jam 12.00 WIB. (Pemberitahuan) Jangan Mempercayai info kelulusan UN selain dari Aplikasi ini apapun media informasinya. by Tim IT SMK Negeri 2 Malang</h5></strong></marquee>
    <hr>
   <div class="container">
<h3>Import Data Siswa</h3>
<hr>
<div class="jumbotron">
      <div class="container">
        <form method="post" action="<?php echo base_url("index.php/admin/form"); ?>" enctype="multipart/form-data">
    <!-- 
    -- Buat sebuah input type file
    -- class pull-left berfungsi agar file input berada di sebelah kiri
    -->

    <input type="file" name="file">
    
    <!--
    -- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
    -->

    <input type="submit" value="upload" name="preview">
  </form>

      <form method="post" action="<?php echo base_url("index.php/admin/import"); ?>" enctype="multipart/form-data">
    <!-- 
    -- Buat sebuah input type file
    -- class pull-left berfungsi agar file input berada di sebelah kiri
    -->
    <br>Import Ke Database*: <br>
<input type="submit" value="Import" class="btn btn-primary">
</form><br>
<p>
* file yang bisa di import adalah .xls (Excel 2003-2007).</p>
download contoh file excel <a href="../../excel/contoh format data siswa/import_data.xlsx">Download</a> <br>
*) Jangan lupa Kosongkan Data Terlebih Dahulu Sebelum diimport.
  </form>
  <form method="post" action="<?php echo base_url("index.php/admin/truncate"); ?>">

    <!-- 
    -- Buat sebuah input type file
    -- class pull-left berfungsi agar file input berada di sebelah kiri
    -->
    
    
    <!--
    -- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
    -->
    <br>
    <input type="submit" value="Kosongkan Data" class="btn btn-primary">
  </form>

      </div>

    </div>
<div class="well">

	

</div>
<p class="text-muted">&copy; 2018 &middot; Tim IT SMK Negeri 2 Malang</p>
</div>
</body>
</html>