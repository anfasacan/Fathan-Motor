<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="{{asset('img/logo.png')}}"/>
<title>Fathan - Motor</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="{{asset ('img/favicon.ico') }}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{asset ('img/apple-touch-icon.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{asset ('img/apple-touch-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{asset ('img/apple-touch-icon-114x114.png') }}">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="{{asset ('css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset ('fonts/font-awesome/css/font-awesome.css') }}">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="{{asset ('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset ('css/nivo-lightbox/nivo-lightbox.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset ('css/nivo-lightbox/default.css') }}">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

</head>
<body>

    <nav id="menu" class="navbar navbar-default navbar-fixed-top" style="background-color: #363636">
        <div class="container"> 
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand page-scroll" href="/#page-top">Fathan - Motor</a> </div>
          
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/#about" class="page-scroll">Tentang</a></li>
              <li><a href="/#services" class="page-scroll">Informasi Terbaru</a></li>
              <li><a href="/#portfolio" class="page-scroll">Gallery</a></li>
              <li><a href="/#team" class="page-scroll">Tim</a></li>
              <li><a href="/#testimoni" class="page-scroll">Testimoni</a></li>
              <li><a href="/#contact" class="page-scroll">Kontak</a></li>
            </ul>
          </div>
        </div>
    </nav>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
    {{-- pemisah --}}
<div class="container">
    <div class="section-title text-center center">
      <h2>Hubungi Kami Via Whatsapp</h2>
      <hr>
    </div>
    <center>
    <div class="row">
        <div class="contact-wrap">

            <form  method="POST" action="/kirim" class="contact-form"  enctype="multipart/form-data">
                {{ csrf_field() }}
                
                
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="font-size: 150%" for="name">Nama</label>
                            <center><input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama"></center>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-sm-6">     
                        <div class="form-group">
                            <label style="font-size: 150%" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email anda">
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label style="font-size: 150%" for="pesan">Pesan</label>
                            <textarea name="pesan" id="pesan" cols="30" rows="10" class="form-control" placeholder="Masukkan pesan anda bitch"></textarea>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            
                            <input type="submit" value="Kirim" class="btn btn-primary">
                            
                            {{-- <button type="submit" class="btn btn-primary mr-2">Tambah Data</button> --}}
                        </div>
                    </div>
                </div>
            </form>		
        </div>
    </div>
    </center>
  </div>

{{-- <script type="text/javascript" src="{{asset ('js/jquery.1.11.1.js') }}"></script> 
<script type="text/javascript" src="{{asset ('js/bootstrap.js') }}"></script> 
<script type="text/javascript" src="{{asset ('js/SmoothScroll.js') }}"></script> 
<script type="text/javascript" src="{{asset ('js/nivo-lightbox.js') }}"></script> 
<script type="text/javascript" src="{{asset ('js/jquery.isotope.js') }}"></script> 
<script type="text/javascript" src="{{asset ('js/jqBootstrapValidation.js') }}"></script> 
<script type="text/javascript" src="{{asset ('js/contact_me.js') }}"></script> 
<script type="text/javascript" src="{{asset ('js/main.js') }}"></script> --}}
</body>
</html>