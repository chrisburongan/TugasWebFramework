<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>GKKD Banjarmasin</title>

  <link rel="stylesheet" href="{{ asset('/css/maicons.css')}}">

  <link rel="stylesheet" href="{{ asset('/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{ asset('/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{ asset('/css/theme.css')}}">
</head>
<body>
  
  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="300">
      <div class="container">
        <a href="#" class="navbar-brand">Seo<span class="text-primary">Gram.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/')}}">Beranda</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('about')}}">Tentang GKKD Banjarmasin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('services')}}">Jadwal Pelayanan</a>
            </li>
       
            <li class="nav-item">
              <a class="nav-link" href="{{ url('contact')}}">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-2" href="#">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4">Tentang Gereja Kristen Kemah Daud (GKKD) Banjarmasin</h1>
            <p class="text-lg text-grey mb-5">Sejarah Gereja Kristen Kemah Daud (GKKD) Banjarmasin.</p>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
            <img src="{{ asset('/img/fotogkkd.png')}}" 
            class="rounded"
            width="450"
            height="auto"
            alt="">
            </div>
          </div>
        </div>
        <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
      </div>
    </div>
  </header>


  <div class="page-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3">
          <h2 class="title-section">Sejarah Gereja Kristen Kemah Daud (GKKD) Banjarmasin</h2>
          <div class="divider"></div>

          <p>Gereja Krisetn Kemah Daud (GKKD) adalah sebuah perkumpulan jemaat GKKD yang dimana telah merantau ke setiap Kota Indonesia</p>
          <p>Sehingga setiap mereka membentuk sebuah komunitas sehingga menjadi sebuah Gereja..</p>
          <p>Adapun penatua GKKD pada awalnya Almrhm. Frengky Sihombing, yang dimana menjadi perintis Gereja Kristen Kemah Daud di Indonesia.</p>
          <p>Sehingga sampai sekarang, Gereja Kristen Kemah Daud (GKKD) sudah memiliki puluhan Gereja di Indonesia</p>
          <p>Dengan jemaat sekitar puluhan ribu.</p>
          
        </div>
        <div class="col-lg-6 py-3">
          <div class="img-fluid py-3 text-center">
          <img src="{{ asset('/img/services/sejarahgkkd.jpg')}}" 
            class="rounded"
            width="450"
            height="auto"
            alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

 
  <footer class="page-footer bg-image" style="background-image: url({{url ('/img/world_pattern.svg');}})">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-3 py-3">
          <h3>GKKD Banjarmasin</h3>
          <p>Visi : Menjadi Berkat bagi banyak Orang.</p>
          <p>Misi : Menjadi semakin serupa dengan Tuhan Yesus</p>

          <div class="social-media-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#"><span class="mai-logo-instagram"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
          </div>
        </div>
        
        <div class="col-lg-3 py-3">
          <h5>Hubungi Kami</h5>
          <p>Jalan veteran ruko no.05 rt.018, Melayu, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan 70122</p>
          <a href="#" class="footer-link">+62 89533873 262</a>
          <a href="#" class="footer-link">GkkdBanjarmasin@gmail.com</a>
        </div>
        <div class="col-lg-6 py-3">
          <h5>Informasi Gereja Terkini</h5>
          <p>Dapatkan berita terbaru mengenai GKKD Banjarmasin melalui email.</p>
          <form action="#">
            <input type="text" class="form-control" placeholder="Masukan Email Mu....">
            <button type="submit" class="btn btn-success btn-block mt-2">Bergabung</button>
          </form>
        </div>
      </div>

      <p class="text-center" id="copyright">Copyright &copy; 2020. This template design and develop by <a href="https://macodeid.com/" target="_blank">MACode ID</a></p>
    </div>
  </footer>

  <script src="{{ asset('/js/jquery-3.5.1.min.js') }}"> </script>

<script src=" {{ asset('/js/bootstrap.bundle.min.js')}}"></script>

<script src=" {{ asset('/js/google-maps.js')}}"></script>

<script src="{{ asset('/vendor/wow/wow.min.js')}}"></script>

<script src="{{ asset('/js/theme.js')}}"></script>
  
</body>
</html>