<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Asik 2018 - Pengumuman Kelulusan Online</title>
    <link rel="icon" href="<?php echo base_url('assets/images/logo3.png')?>" type="image/gif" sizes="16x16">

    <!-- Bootstrap core CSS -->
	<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/blog-home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
 
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <i class="fa fa-home"></i>
      <a class="navbar-brand" href="<?php echo site_url();?>/admin"><h4>Asik 2018</h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
    <br>
   
    <!-- Page Content -->
    <div class="container">
      <div class="jumbotron">
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-12">
          <h1 class="my-4">
            <small></small>
          </h1>       

          <!-- Blog Post -->
		  <h1>Daftar Pesan Siswa :</h1>
		  
		  
      
   
      <form method="get" action="<?php echo site_url('/admin/view_pesan') ?>" class="form-inline">
        
						<div>
            <table class="table table-striped table-hover">
                        <thead>
                           <tr>
                              <td align="center">No.</td>
                              <td align="center">Nama Pengirim</td>
                              <td align="center">Pesan</td>
                              <td align="center">Email</td>
                              <td align="center">No Telp</td>
                              

                        
                              <td align="center"colspan=1>Aksi</td>
                           </tr>

                        </thead>

					
                       <tbody> 

					   <?php foreach($data->result() as $row) { ?>
								<tr>
								  <td align="center"><?php echo $row->id?></td>
								  <td align="center"><?php echo $row->nama?></td>
								  <td align="center"><?php echo $row->pesan?></td>
								  <td align="center"><?php echo $row->email?></td>
								  <td align="center"><?php echo $row->notelp?></td>
								  
                  
                    

                  </td>
								 
								  <td align="center"><i class="fa fa-trash"></i><a href="<?php echo site_url('admin/hapus_pesan/'.$row->id); ?>"
										onClick="return confirm('Are you sure you want to delete?')">Hapus</a></td>
								</tr>		
                
						</tbody>
						<?php } ?>
                 </table>
                 <hr>
                 <div class="row">
        <div class="col">
          <?php echo $pagination; ?>
        </div>
      </div>

               </div>
				
					
          <!-- Blog Post -->
        </div>

        <!-- Sidebar Widgets Column -->
       

      </div>
      <!-- /.row -->

    </div>
	
    <!-- /.container -->

    <!-- Footer -->
    <br>
<br>


    <footer class="footer">
    <div class="container">
      <p class="text-muted">&copy; 2018 &middot; Tim IT SMK Negeri 2 Malang</p>
    </div>
  </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
  </body>
  
	
</html>
