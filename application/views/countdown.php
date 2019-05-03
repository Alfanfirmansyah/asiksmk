<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
?>
<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>
<html>

<!-- Head -->
<head>
	
    <title>Asik 2018 - Pengumuman Kelulusan Online</title>
    <link rel="icon" href="<?php echo base_url('assets/images/logo3.png')?>" type="image/gif" sizes="16x16">

    <!-- For-Mobile-Apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="UTF-8">
        <meta name="keywords" content="Countdown Timer Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //For-Mobile-Apps -->

    <!-- Style -->
        <link href="<?php echo base_url();?>assets/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css"/>
    <!-- //Style -->

    <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!-- Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>
<div id="pesan"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>
            var url = "<?php echo base_url();?>index.php/welcome/cari"; // url tujuan
            var home = "Halaman Home"
            var count = 15; // dalam detik
            function countDown() {
                if (count > 0) {
                    count--;
                    var waktu = count + 1;
                    $('#pesan').html('Anda akan di redirect ke ' + home + ' dalam ' + waktu + ' detik.');
                    setTimeout("countDown()", 1000);
                } else {
                    window.location.href = url;
                }
            }
            countDown();
        </script>
    <div class="container">
        <h1>PENGUMUMAN KELULUSAN</h1>
        <div class="clear-loading spinner">
            <span></span>
        </div>
    </div>

    <div class="wrapper">
        <h2>Perhatian !</h2>
        <h3>Pengumuman kelulusan dapat dilihat pada : <span class="sub-message"> </span></h3>

        <div class="clock">
            <div class="column days">
                <div class="timer" id="days"></div>
                <div class="text">HARI</div>
            </div>
            <div class="timer days">:</div>
            <div class="column">
                <div class="timer" id="hours"></div>
                <div class="text">JAM</div>
            </div>
            <div class="timer">:</div>
            <div class="column">
                <div class="timer" id="minutes"></div>
                <div class="text">MENIT</div>
            </div>
            <div class="timer">:</div>
            <div class="column">
                <div class="timer" id="seconds"></div>
                <div class="text">DETIK</div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p class="text-muted">&copy; 2018 &middot; Tim IT SMK Negeri 2 Malang</p>
    </div>

    <!-- Custom-JavaScript-File-Links -->

        <script  src="<?php echo base_url();?>assets/js/jquery-1.12.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/moment.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/moment-timezone-with-data.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/timer.js"></script>
    <!-- //Custom-JavaScript-File-Links -->

</body>
<!-- //Body -->

</html>