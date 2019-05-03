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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
     <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url();?>/welcome/about">Tentang</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url();?>/welcome/panduan">Panduan</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url();?>/welcome/contact">Hubungi</a>
            </li>
            &nbsp &nbsp &nbsp
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/login">Login</a>
              
              </a>
            </li>
          </ul>
        
      </div>
    </nav>
    <br>
    <marquee><strong><h5>Selamat datang di Aplikasi sistem informasi kelulusan... (Pengumuman) untuk Siswa kelas 12 pengumuman kelulusan UN dapat dilihat pada tanggal 12 mei 2018 jam 12.00 WIB. (Pemberitahuan) Jangan Mempercayai info kelulusan UN selain dari Aplikasi ini apapun media informasinya. by Tim IT SMK Negeri 2 Malang</h5></strong></marquee>
    <hr>
    <br>
  <div class="container">
  <h3>Pengumuman Kelulusan</h3>
  <hr>
    <?php
 if(count($cari)>0){
      foreach ($cari as $data) {
        
      echo "<table class='table table-bordered'>";
      echo "<tr><td>Nomor ujian</td><td>$data->no_ujian</td></tr>";
      echo "<tr><td>Nama Siswa</td><td>$data->nama</td></tr>";
      echo "<tr><td>Kompetensi Keahlian</td><td>$data->jurusan</td></tr>";
      echo "</table>";

      echo "<table class='table table-bordered'>";
      echo "<thead>";
      echo "<tr>
          <th>Bahasa Indonesia</th>
          <th>Bahasa Inggris</th>
          <th>Matematika</th>
          <th>Kejuruan</th>
        </tr>";
        echo "</thead>";
          echo "<tbody>";
          echo"<td>$data->bi</td>";
          echo"<td>$data->mat</td>";
          echo"<td>$data->bing</td>";
          echo"<td>$data->kejuruan</td>";
          echo "</tbody>";
     
      echo "</table>";

                                         $n1 = $data->bi;
                                         $n2 = $data->mat;
                                         $n3 = $data->bing;
                                         $n4 = $data->kejuruan;
                                        $total = ($n1+$n2+$n3+$n4)/4;
                                        $rata = $total;
       
      if($rata > 7.5) {
        echo "<div class='alert alert-success' role='alert'><strong>SELAMAT !</strong> Anda dinyatakan Lulus</div>";
        echo "<p>Untuk melihat pengumuman kelulusan keseluruhan siswa <a href='../../assets/file/pengumuman.pdf' target='_blank'>klik disini.</a></p>";

       
      }
    else {
      echo "<div class='alert alert-danger' role='alert'><strong>MAAF !</strong> Anda dinyatakan Tidak Lulus</div>";
      echo "<p>Untuk melihat pengumuman kelulusan keseluruhan siswa <a href='../../assets/file/pengumuman.pdf' target='_blank'>klik disini.</a></p>";
    }

      
}
}
    else
    {
      echo 'nomor ujian yang anda inputkan tidak ditemukan! periksa kembali nomor ujian anda.';
    }
      
      
      
    
 
    
 
    ?>
 
  </div>
  <br>
<br>


    <footer class="footer">
    <div class="container">
      <p class="text-muted">&copy; 2018 &middot; Tim IT SMK Negeri 2 Malang</p>
    </div>
  </footer>
  </body>
</html>