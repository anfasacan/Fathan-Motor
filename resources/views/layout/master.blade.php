
<!DOCTYPE html>
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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Fathan - Motor</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">Tentang</a></li>
        <li><a href="#services" class="page-scroll">Informasi Terbaru</a></li>
        <li><a href="#portfolio" class="page-scroll">Gallery</a></li>
        <li><a href="#team" class="page-scroll">Tim</a></li>
        <li><a href="#testimoni" class="page-scroll">Testimoni</a></li>
        <li><a href="#contact" class="page-scroll">Kontak</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1><strong>Fathan</strong> <span>-</span> Motor</h1>
            <p>Spesialis Kaca Film Gedung dan Mobil - Cutting Plat Nomor</p>
            <!-- Button trigger modal -->
            <a href="https://api.whatsapp.com/send?phone=6281514472908" target="_blank" type="button" class="btn btn-custom btn-lg page-scroll"><i class="fa fa-whatsapp"></i>
              Hubungi via Whatsapp
            </a></div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Tentang Fathan Motor</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6 text-center"> <img src="img/intro-bg2.jpg" width="100%" height="550px" alt=""> </div>
      {{-- <div class="col-xs-12 col-md-6"> --}}
        <div class="about-text text-justify">
          <p>Kami adalah perusahaan yang bergerak dalam bidang penjualan sekaligus pemasangan kaca film untuk kendaraan, gedung, kantor dll. Kami berkomitmen sebagai sebuah usaha yang khusus melayani pemasangan kaca film.</p>
          
          <p>Hal tersebut kami lakukan dengan harapan dan tujuan agar konsentrasi dan keahlian kami tetap fokus dan terjaga demi untuk mendapatkan sebuah kemampuan dan keakuratan dalam hal spesialisasi pemasangan kaca film agar dapat memberikan kepuasan yang lebih lagi kepada setiap konsumen.</p>
          
          <h3>Kaca Film Mobil</h3>
          <p>Bagi Anda yang baru memiliki mobil ada baiknya memasang kaca film. Bukan hanya mengurangi intensitas cahaya, penggunaan kaca film yang lebih gelap dipercaya akan lebih safety dari tindakan krimal.</p>
          
          <p>Fungsi</p>
         
            <li>Menjaga Privasi</li>
            <li>Mengurangi Resiko Kejahatan</li>
            <li>Efisiensi Energi</li>
            <li>Meningkatkan keamanan</li>
          
          <h3>Kaca Film Gedung</h3>
          <p>Kaca yang digunakan dalam bangunan bersifat tembus pandang sehingga dapat meneruskan cahaya dan panas matahari. Namun, dalam aplikasinya, kaca tidak selalu dibuat tembus padang. Kaca dapat juga dibuat menjadi semi tembus pandang atau sama sekali tidak tembus pandang.</p>
          
          <p>Fungsi : </p>
          
            <li>Meningkatkan Keamanan</li>
            <li>Membuat Gedung Lebih Elegan</li>
            <li>Menjaga Privasi dalam Gedung</li>
            <li>Penolak Panas</li>
            <li>Mencegah Kanker Kulit</li>
          
        </div>
      </div>
    </div>
  </div>
</div>
{{-- modal penawaran --}}

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        {{-- test --}}
<form action="/kirim" name="yourForm" id="theForm" method="post"> 
  {{ csrf_field() }}   
  <input type="text" name="fname" id="fname" />    
</form>
<button type="submit" value="submit"> </button>
{{-- test --}}
<div class="card-body">
  <h4 class="card-title">Tambah Tim</h4>
  <p class="card-description">
    Tempat menambah data.

    @if(count($errors->all()))
      @foreach ($errors->all() as $error)
          <div class="alert alert-danger">
              <Strong>Oops!</Strong> {{$error}}
          </div>
      @endforeach
    @endif

    @if(Session::has('success'))
      <div class="alert alert-success text-center">
          <strong>Success!</strong> {{Session::get('success')}}
      </div>
    @endif

  </p>
  <form  method="POST" class="forms-sample" action="/admin_tim/tambahkan" enctype="multipart/form-data">
    
    @csrf

    <div class="form-group">
      <label for="id">Nomer</label>
      <input type="number" class="form-control" id="id" placeholder="Masukkan Nomer" name="id" value="{{old('id')}}">
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="{{old('nama')}}">
      </div>


    <div class="form-group">
      <label for="jabatan">Jabatan</label>
      <input type="text" class="form-control" id="jabatan" placeholder="Masukkan Jabatan" name="jabatan" value="{{old('jabatan')}}">
    </div>

    <div class="form-group">
      <label for="foto">File Foto</label>
      <input type="file" class="form-control" id="foto" placeholder="foto" name="foto">
    </div>


          <button type="submit" class="btn btn-primary mr-2">Tambah Data</button>
          <a href="/admin_tim" type="button" class="btn btn-success">Kembali!</a>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>
                        {{-- modal --}}
<!-- Services Section -->


<div id="services">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 section-title text-center">
      <h2>Informasi Terbaru</h2>
      <hr>
      <p>Informasi dan Berita Terbaru dari Fathan - Motor.</p>
    </div>
    <div class="row">
      @foreach ($artikel as $art)
      <div class="col-xs-12 col-sm-4 service"> <img src="img/poto/artikel/{{$art->gambar}}"  alt="Project Title" width="100%" height="300px">
        <h3>{{$art->judul}}</h3>
        <?php
        echo substr($art->isi,0,200); 
        ?>
        <br>
        <a href="/artikel/{{$art->id}}" class="btn btn-custom btn-lg page-scroll">Selengkapnya</a>
        <br>
        <br>
        <br>
      </div>
      @endforeach
      {{--  --}}
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Gallery Fathan - Motor</h2>
      <hr>
      <p></p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a data-filter="*" class="active">Gambar</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">

        <div class="col-sm-6 col-md-4 col-lg-4 residential">
          <div class="portfolio-item" >
            <div class="hover-bg"> <a target="_blank" href="https://www.google.com/maps/uv?pb=!1s0x2e69fa9e55ec3abf%3A0xa3cef54e931f8bc2!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMbDMhU8v6ui_g6xqUD08-csla_KvyhUqyiOStr%3Dw284-h160-k-no!5sfathan%20motor%20-%20Penelusuran%20Google!15sCgIgAQ&imagekey=!1e10!2sAF1QipMbDMhU8v6ui_g6xqUD08-csla_KvyhUqyiOStr&hl=id&sa=X&ved=2ahUKEwiCjpCw4PPwAhWaF3IKHbiXB2sQoiowFXoECEIQAw" title="Project Title">
              <img src="img/poto/galeri/img1.png"  alt="Project Title" width="100%" height="250px"> </a> </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4 residential">
          <div class="portfolio-item">
            <div class="hover-bg"> <a target="_blank" href="https://www.google.com/maps/uv?pb=!1s0x2e69fa9e55ec3abf%3A0xa3cef54e931f8bc2!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMbDMhU8v6ui_g6xqUD08-csla_KvyhUqyiOStr%3Dw284-h160-k-no!5sfathan%20motor%20-%20Penelusuran%20Google!15sCgIgAQ&imagekey=!1e10!2sAF1QipMbDMhU8v6ui_g6xqUD08-csla_KvyhUqyiOStr&hl=id&sa=X&ved=2ahUKEwiCjpCw4PPwAhWaF3IKHbiXB2sQoiowFXoECEIQAw" title="Project Title">
              <img src="img/poto/galeri/img2.png"  alt="Project Title" width="100%" height="250px"> </a> </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4 residential">
          <div class="portfolio-item">
            <div class="hover-bg"> <a target="_blank" href="https://www.google.com/maps/uv?pb=!1s0x2e69fa9e55ec3abf%3A0xa3cef54e931f8bc2!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMbDMhU8v6ui_g6xqUD08-csla_KvyhUqyiOStr%3Dw284-h160-k-no!5sfathan%20motor%20-%20Penelusuran%20Google!15sCgIgAQ&imagekey=!1e10!2sAF1QipMbDMhU8v6ui_g6xqUD08-csla_KvyhUqyiOStr&hl=id&sa=X&ved=2ahUKEwiCjpCw4PPwAhWaF3IKHbiXB2sQoiowFXoECEIQAw" title="Project Title">
              <img src="img/poto/galeri/img3.png"  alt="Project Title" width="100%" height="250px"> </a> </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4 residential">
          <div class="portfolio-item">
            <div class="hover-bg"> <a target="_blank" href="https://www.google.com/maps/uv?pb=!1s0x2e69fa9e55ec3abf%3A0xa3cef54e931f8bc2!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMbDMhU8v6ui_g6xqUD08-csla_KvyhUqyiOStr%3Dw284-h160-k-no!5sfathan%20motor%20-%20Penelusuran%20Google!15sCgIgAQ&imagekey=!1e10!2sAF1QipMbDMhU8v6ui_g6xqUD08-csla_KvyhUqyiOStr&hl=id&sa=X&ved=2ahUKEwiCjpCw4PPwAhWaF3IKHbiXB2sQoiowFXoECEIQAw" title="Project Title">
              <img src="img/poto/galeri/img4.png"  alt="Project Title" width="100%" height="250px"> </a> </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4 residential">
          <div class="portfolio-item">
            <div class="hover-bg"> <a target="_blank" href="https://www.google.com/maps/uv?pb=!1s0x2e69fa9e55ec3abf%3A0xa3cef54e931f8bc2!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMbDMhU8v6ui_g6xqUD08-csla_KvyhUqyiOStr%3Dw284-h160-k-no!5sfathan%20motor%20-%20Penelusuran%20Google!15sCgIgAQ&imagekey=!1e10!2sAF1QipMbDMhU8v6ui_g6xqUD08-csla_KvyhUqyiOStr&hl=id&sa=X&ved=2ahUKEwiCjpCw4PPwAhWaF3IKHbiXB2sQoiowFXoECEIQAw" title="Project Title">
              <img src="img/poto/galeri/img5.png"  alt="Project Title" width="100%" height="250px"> </a> </div>
          </div>
        </div>
        
        <div class="col-sm-6 col-md-4 col-lg-4 residential">
          <div class="portfolio-item">
            <div class="hover-bg"> <a target="_blank" href="https://www.google.com/maps/uv?pb=!1s0x2e69fa9e55ec3abf%3A0xa3cef54e931f8bc2!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMbDMhU8v6ui_g6xqUD08-csla_KvyhUqyiOStr%3Dw284-h160-k-no!5sfathan%20motor%20-%20Penelusuran%20Google!15sCgIgAQ&imagekey=!1e10!2sAF1QipMbDMhU8v6ui_g6xqUD08-csla_KvyhUqyiOStr&hl=id&sa=X&ved=2ahUKEwiCjpCw4PPwAhWaF3IKHbiXB2sQoiowFXoECEIQAw" title="Project Title">
              <img src="img/poto/galeri/img6.png"  alt="Project Title" width="100%" height="250px"> </a> </div>
          </div>
        </div>

        </div>
      </div>
      <br><br><br>
      <div class="categories">
        <ul class="cat">
          <li>
            <ol class="type">
              <li><a data-filter="*" class="active">Video</a></li>
            </ol>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="row">
        <div class="portfolio-items">
          <div class="col-sm-6 col-md-4 col-lg-4 residential">
            <div class="portfolio-item">
              <div class="hover-bg"> 
                <video class="img-responsive text-center" controls width="300" >
                  <source src="{{asset('img/poto/galeri/vid1.mp4')}}" type="video/mp4"/>                
                </video>
                </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 commercial">
            <div class="portfolio-item">
              <div class="hover-bg"> 
                <video class="img-responsive text-center" controls width="300" >
                  <source src="{{asset('img/poto/galeri/vid2.mp4')}}" type="video/mp4"/>                
                </video>
                </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 commercial">
            <div class="portfolio-item">
              <div class="hover-bg"> 
                <video class="img-responsive text-center" controls width="300" >
                  <source src="{{asset('img/poto/galeri/vid3.mp4')}}" type="video/mp4"/>                
                </video>
                </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 commercial">
            <div class="portfolio-item">
              <div class="hover-bg"> 
                <video class="img-responsive text-center" controls width="300" >
                  <source src="{{asset('img/poto/galeri/vid4.mp4')}}" type="video/mp4"/>                
                </video>
                </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 commercial">
            <div class="portfolio-item">
              <div class="hover-bg"> 
                <video class="img-responsive text-center" controls width="300" >
                  <source src="{{asset('img/poto/galeri/vid5.mp4')}}" type="video/mp4"/>                
                </video>
                </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 commercial">
            <div class="portfolio-item">
              <div class="hover-bg"> 
                <video class="img-responsive text-center" controls width="300" >
                  <source src="{{asset('img/poto/galeri/vid6.mp4')}}" type="video/mp4"/>                
                </video>
                </div>
            </div>
          </div>
          </div>
        </div>
    </div>
  </div>
</div>
<!-- Team Section -->
<div id="team" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 section-title">
        <h2>Bertemu Dengan Tim Handal</h2>
        <hr>
        <p>Kualitas pemasangan Kaca Film anda terjamin dengan kemampuan dan skill kami.</p>
      </div>
      <div id="row">

        @foreach ($tim as $team)
            
        <div class="col-md-3 col-sm-6 team">
          <div class="thumbnail"> <img src="img/poto/tim/{{$team->foto}}" alt="..." class="team-img">
            <div class="caption">
              <h3>{{$team->nama}}</h3>
              <p>{{$team->jabatan}}</p>
            </div>
          </div>
        </div>
        @endforeach

        
      </div>
    </div>
  </div>
</div>

<br>
<br>
<div id="testimoni">
    <div class="container">
      <div class="section-title text-center center">
        <h2>Testimoni Fathan Motor</h2>
        <hr>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-12 text-center">
          <div class="about-text">
             <h3><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h3>
            <p>"Pelayanan ramah, pengerjaan rapi, harga murah bersaing, masih bisa nego. Garansi resmi 3M. Semoga makin maju om usahanya. Salam dari ciputat"</p>
            <h3>Ganda Irwanto</h3>
            <br>
            <h3><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h3>
            <p>"Pelayanan bagus, cepat dan hasil sangat rapi👍"</p>
            <h3>nurohman nn</h3>
            <br>
            <h3><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h3>
            <p>"Mantap sekali pasang kaca film mobil disini dan kualitasnya bisa dibuktikan. Nuhun Kang Soleh F."</p>
            <h3>rismanda yazar</h3>

            <a href="https://www.google.com/search?q=fathan+motor&safe=strict&rlz=1C1PRFI_enID901ID901&sxsrf=ALeKk02DxC8ixP4VJIFwZxqJIoawereC9A%3A1622390191753&ei=r7WzYI65Lc779QPQ5afIAw&oq=fathan+motor&gs_lcp=Cgdnd3Mtd2l6EAMyBAgjECcyCAgAEMcBEK8BMgQIABAeMgYIABAFEB4yAggmMgIIJjICCCYyAggmOgcIABCwAxANOg0IABDHARCvARCwAxANOgkIABCwAxANEB46CwgAELADEA0QBRAeOgcIIxCwAhAnOgoIABDHARCvARANOgYIABANEB46CAgAEA0QBRAeULsTWPYkYPMmaABwAHgAgAGXAYgBsQOSAQMyLjKYAQCgAQGqAQdnd3Mtd2l6yAEEwAEB&sclient=gws-wiz&ved=0ahUKEwjOzMO44vHwAhXOfX0KHdDyCTkQ4dUDCA0&uact=5#lrd=0x2e69fa9e55ec3abf:0xa3cef54e931f8bc2,1,,," target="_blank" class="btn btn-success page-scroll">Lihat Semua</a>
            <a href="https://www.google.com/search?q=fathan+motor&safe=strict&rlz=1C1PRFI_enID901ID901&sxsrf=ALeKk02DxC8ixP4VJIFwZxqJIoawereC9A%3A1622390191753&ei=r7WzYI65Lc779QPQ5afIAw&oq=fathan+motor&gs_lcp=Cgdnd3Mtd2l6EAMyBAgjECcyCAgAEMcBEK8BMgQIABAeMgYIABAFEB4yAggmMgIIJjICCCYyAggmOgcIABCwAxANOg0IABDHARCvARCwAxANOgkIABCwAxANEB46CwgAELADEA0QBRAeOgcIIxCwAhAnOgoIABDHARCvARANOgYIABANEB46CAgAEA0QBRAeULsTWPYkYPMmaABwAHgAgAGXAYgBsQOSAQMyLjKYAQCgAQGqAQdnd3Mtd2l6yAEEwAEB&sclient=gws-wiz&ved=0ahUKEwjOzMO44vHwAhXOfX0KHdDyCTkQ4dUDCA0&uact=5#lrd=0x2e69fa9e55ec3abf:0xa3cef54e931f8bc2,3,,," target="_blank" class="btn btn-primary page-scroll">Tulis Ulasan</a>
            <br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="section-title text-center">
      <h2>Hubungi Kami</h2>
      <hr>
      <p></p>
    </div>
    <div class="col-md-12">
      <div id="map" class="colorlib-map">
          <iframe width="100%" height="500px" frameborder="0" style="border:0"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253832.52178871428!2d106.7166647270851!3d-6.246178327993077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fa9e55ec3abf%3A0xa3cef54e931f8bc2!2sFathan%20Motor!5e0!3m2!1sid!2sid!4v1622392122971!5m2!1sid!2sid" allowfullscreen></iframe>    
      </div>		
  </div>
  <br>
    <div class="col-md-6">
      <h3></h3>
      <div class="contact-item"> <span>Alamat</span>
        <p>FATHAN - MOTOR <br>
        Bintaro Trade Center ( BTC ) lantai 1 Blok H2 no 46</p>
      </div>
      <div class="contact-item"> <span>Alamat Cabang</span>
        <p>CATALYST <br>
        Auto Center Citimarket VO 6 Blok D no 11 
        Citra Raya Cikupa</p>
      </div> 
      <div class="contact-item"> <span>Telepon 1</span>
        <p>0853 1912 7712  <a href="tel:085319127712" class="btn btn-custom btn-lg page-scroll"><i class="fa fa-phone"></i></a> </p>
       
        <p>Soleh</p>
      </div>
      <div class="contact-item"> <span>Telepon 2</span>
        <br>
          <p>0815-1447-2908 <a href="tel:081514472908" class="btn btn-custom btn-lg page-scroll"><i class="fa fa-phone"></i></a></p>
          
          <p>Anto</p>
        </div>
      {{-- <div class="contact-item"> <span>Jam Buka</span>
        <p> Senin <br> pukul 09.00 - 17.00 <br>
            Selasa <br> pukul 09.00 - 17.00 <br>
            Rabu <br> pukul 09.00 - 17.00 <br>
            Kamis <br> pukul 09.00 - 17.00 <br>
        </p>
    </div> --}}
    </div>
    <div class="col-md-6">
        <h3></h3>
              
        
          <div class="contact-item"> <span>Jam Buka</span>
            <p> 
                Senin <br> pukul 09.00 - 17.00 <br>
                Selasa <br> pukul 09.00 - 17.00 <br>
                Rabu <br> pukul 09.00 - 17.00 <br>
                Kamis <br> pukul 09.00 - 17.00 <br>
                Jum'at <br> pukul 09.00 - 17.00 <br>
                Sabtu <br> pukul 09.00 - 17.00 <br>
                Minggu <br> pukul 09.00 - 17.00 <br>
                
            </p>
        </div>
        
      </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="social">
      <ul>
        <li><a target="_blank" href="https://web.facebook.com/Fathan-Motor-482178345493757/"><i class="fa fa-facebook"></i></a></li>
        <li><a target="_blank" href="https://www.instagram.com/fathanmotor46/"><i class="fa fa-instagram"></i></a></li>
        <li><a target="_blank" href="/login"><i class="fa fa-user"></i>Login Admin</a></li>
      </ul>
    </div>
    
                            
    
    <div>
      <p>&copy; Hormat Kami Fathan - Motor </p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
