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
      
        <!-- Blog Entries Column -->
        <div class="col-md-12">
          <h1 class="my-4">
            <small></small>
          </h1>
          <!-- Blog Post -->
          <div class="card mb-4">
            <div class="card-body">
              <p class="card-text">
			  <H1>Edit Data User</H1>
			  </p>
			  <div class="portlet-body form">
					<!-- BEGIN FORM-->
					<?php echo form_open('admin/ubah_data/'.$hasil->id); ?>	
          <div class="form-body">
              <div class="form-group">
                <label class="col-md-12 control-label">Username</label>
                <div class="col-md-12">
                  <textarea class="form-control" rows="1" placeholder="" name="username"><?php echo $hasil->username; ?></textarea>
                </div>
              </div>							
						<div class="form-body">
							<div class="form-group">
								<label class="col-md-12 control-label">Password</label>
								<div class="col-md-12">
									<textarea class="form-control" rows="1" placeholder="" name="password"></textarea>
								</div>
							</div>    
						<?php echo form_submit('submit', 'Update'); ?>	
						<?php echo form_close(); ?>	
            <button style="text-decoration: none;" ><a href="<?php echo site_url();?>/admin/view_user">Kembali</button>

					</form>
					<!-- END FORM-->
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

   
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
  </body>
  
	
</html>
