<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB Online SMK Nusantara</title>
    <meta name="description" content="">
	<meta name="author" content="Cemre Tellioğlu Tunçay">
	<link rel="icon" type="<?=base_url('image/png');?>" href="favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="<?=base_url('image/png');?>" href="favicon-16x16.png" sizes="16x16" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap&subset=latin-ext" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?=base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('css/style.css');?>" rel="stylesheet">
    <link href="<?=base_url('css/responsive.css');?>" rel="stylesheet">

  </head>
  <body>
			<div class="col-md-12 noPadding fixedArea">
			  <div class="container topOff">
				<div class="col-lg-2 col-md-2 col-xs-4 col-sm-2">
					<img alt="Bootstrap Image Preview" src="<?=base_url('img/kloof.jpg');?>">
				</div>
				<div class="col-lg-8 col-md-8 col-xs-8 col-sm-10">
					<nav class="navbar navbar-expand-lg navbar-light bg-light myNavbar">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							</div>
						
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav myNavUl">
								<li class="nav-item"><a href="<?=site_url();?>" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Home</a></li>
								
								<li class="nav-item"><a href="<?=site_url('/fasilitas');?>" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Fasilitas</a></li>
								
								<li class="nav-item"><a href="<?=site_url('/jurusan');?>" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Jurusan</a></li>
								
								<li class="nav-item"><a href="<?=site_url('/daftar');?>" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Daftar</a></li>
								
							</ul>
						</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>

					
				</div>
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 marginTop ">
					<ul class="list-inline centerMobil">
						<li><a href="#"><img src="<?=base_url('img/face.png');?>"></a></li>
						<li><a href="#"><img src="<?=base_url('img/twit.png');?>"></a></li>
						<li><a href="#"><img src="<?=base_url('img/google-plus.png');?>"></a></li>
					  </ul>					
				</div>
			</div>
			</div>

			<!-- konten-->
			<div id="section2" class="col-md-12 noPadding text-center">
					<h1 class="mainText">
					<?=isset($judulhalaman) ? $judulhalaman : 'Selamat Datang';?>

					</h1>
					<img src="<?=base_url('img/shapegreen.png');?>">
					<div class="col-md-12 text-justify" style="min-height:300px;">
						<?php
						if(isset($intro)){
							echo $intro;
							echo $this->renderSection('isi_web');
						} else {
							
							echo 
							'<p class="col-md-8 col-md-offset-2 myTextMain">SMK NUSANTARA  adalah salah satu lembaga pendidikan yang berada di bawah naungan yayasan Nusabtara yang berdiri sejak tahun 2006. Sebagai lembaga pendidikan, SMK NUSANTARA tanggap dengan perkembangan teknologi yang semakin canggih, sehingga Dengan dukungan SDM yang di miliki, sekolah ini siap untuk berkompetisi dengan sekolah lain dalam pelayanan informasi publik. Teknologi Informasi Web khususnya, menjadi sarana bagi SMK NUSANTARA untuk memberi pelayanan informasi secara cepat, jelas, dan akuntable. Dari layanan ini pula, sekolah siap menerima saran dari semua pihak yang akhirnya dapat menjawab Kebutuhan masyarakat </p>'; 
					}?>
					</div>
			</div>
			<!-- konten-->

			<div class="col-md-12 noPadding text-center backFooter">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-md-4 col-xs-12 marginTop">
							<h3 class="footertext">All Right Reserved@Cemreworks </h3>
						</div>

						<div class="col-md-4 col-xs-12 marginTop">
							<img alt="Bootstrap Image Preview" src="<?=base_url('img/kloof.jpg');?>">

						</div>
						<div class="col-md-4 col-xs-12 marginTop ">
							<ul class="list-inline centerMobil>
								<li><a href="#"><img src="<?=base_url('img/face.png');?>"/></a></li>
								<li><a href="#"><img src="<?=base_url('img/twit.png');?>"/></a></li>
								<li><a href="#"><img src="<?=base_url('img/google-plus.png');?>"/></a></li>
							  </ul>	
						</div>
					</div>
				</div>
			</div>

	<script src="<?=base_url('js/jquery.min.js');?>"></script>
	<script src="<?=base_url('js/jquery-easing/jquery.easing.min.js');?>"></script>
	<script src="<?=base_url('js/bootstrap.min.js');?>"></script>
	<script src="<?=base_url('js/ajax-mail.js');?>"></script>
	<script src="<?=base_url('js/jquery.nicescroll.min.js');?>"></script>
    <script src="<?=base_url('js/scripts.js');?>"></script>
  </body>
</html>