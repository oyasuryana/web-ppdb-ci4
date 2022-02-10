<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi PPDB</title>

    <link href="<?=base_url('/css/bootstrap.min.css');?>" rel="stylesheet">
    
    <style>
    body {
        min-height: 2000px;
    }

    .navbar-static-top {
        margin-bottom: 19px;
    }
    </style>

  </head>

  <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">PPDB</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PPDBaps</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?=base_url('dashboard');?>">Home</a></li>
            <li><a href="/tampil-fasilitas">Fasilitas</a></li>
            <li><a href="#">Kamar</a></li>
            <li><a href="#">Pendaftaran</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <?php
      if(isset($judulHalaman)){
         $this->renderSection('isi_web'); 
      }else {

      }
    ?>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url('/js/jquery.min.js');?>"></script>
    <script src="<?=base_url('/js/bootstrap.min.js');?>"></script>
  </body>
</html>

