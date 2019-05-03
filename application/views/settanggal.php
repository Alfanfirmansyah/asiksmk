<!DOCTYPE html>
<html>
<head>
	<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/blog-home.css" rel="stylesheet">
	<title>Asik 2018 - Pengumuman Kelulusan Online</title>
	<link rel="icon" href="<?php echo base_url('assets/images/logo3.png')?>" type="image/gif" sizes="16x16">
</head>
<body>
	<br>
	<marquee><strong><h5>Selamat datang di Aplikasi sistem informasi kelulusan... (Pengumuman) untuk Siswa kelas 12 pengumuman kelulusan UN dapat dilihat pada tanggal 12 mei 2018 jam 12.00 WIB. (Pemberitahuan) Jangan Mempercayai info kelulusan UN selain dari Aplikasi ini apapun media informasinya. by Tim IT SMK Negeri 2 Malang</h5></strong></marquee>
	<br>
	<hr>
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
        
      
    </nav>
<br>
<br>
<div class="container">
	<h1>Set Tanggal Kelulusan</h1>
<hr>
	<div class="jumbotron">

<form action="<?php echo site_url();?>/admin/settanggal" class="form-horizontal" method="post">							
						<div class="form-body">
							<div class="form-group">
								<label class="col-md-12 control-label">Input Tanggal Kelulusan</label>
								<div class="col-md-12">
									<input type="text" class="form-control" placeholder="Masukkan Tanggal Kelulusan" name="settanggal">
								</div>
							</div>

						<div class="modal-footer">
							<button type="reset" value="reset" class="btn red">Reset</button>
							<button type="submit" class="btn red">Submit</button>
							
						</div>
					</form>
				</div>
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

