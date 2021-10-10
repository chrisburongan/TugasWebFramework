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
            <li class="nav-item ">
              <a class="nav-link" href="{{ url('/')}}"><b>Beranda</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('about')}}">Tentang GKKD Banjarmasin</a>
            </li>
            <li class="nav-item active">
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
            <h1 class="mb-4">Jadwal Pelayanan Bulan ini..</h1>
            <p class="text-lg text-grey mb-5">Shalom saudara - saudara berikut Jadwal Pelayanan Bulan ini.</p>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
            <img src="{{ asset('/img/jadwalpelayanan.jpeg')}}" 
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
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service">
            <div class="header">
            <img src="{{ asset('/img/services/jadwal.svg')}}" width ="50" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Jadwal Pelayanan Mahasiswa</h5>
              <p>Berikut adalah Jadwal Pelayanan Mahasiswa</p>
              <a href="service.html" class="btn btn-primary">Buka</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service">
            <div class="header">
              <img src="{{ asset('/img/services/jadwal.svg')}}" width ="50" alt="">
              
              
            </div>
            <div class="body">
            <h5 class="text-secondary">Jadwal Pelayanan Keluarga</h5>
              <p>Berikut adalah Jadwal Pelayanan Keluarga</p>
              <a href="service.html" class="btn btn-primary">Buka</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service">
            <div class="header">
            <img src="{{ asset('/img/services/jadwal.svg')}}" width ="50" alt="">
            </div>
            <div class="body">
            <h5 class="text-secondary">Jadwal Pelayanan Pekerja</h5>
              <p>Berikut adalah Jadwal Pelayanan Pekerja</p>
              <a href="service.html" class="btn btn-primary">Buka</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="text-center">
        <div class="subhead">Titik Lokasi Gereja Kristen Kemah Daud</div>
        <h2 class="title-section">Lokasi Gereja Kristen Kemah Daud (GKKD)</h2>
        <div class="divider mx-auto"></div>

        <div class="row">
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
              <img src="{{ asset('/img/lokasigereja.svg')}}" width ="35" height="60" alt="">
              </div>
              <h5>GKKD Semarang</h5>
              <p>Pelayanan Oleh Pdt. Simon Kirene</p>
              <button type="button" class="btn btn-success">Buka Maps</button>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
              <img src="{{ asset('/img/lokasigereja.svg')}}" width ="35" height="60" alt="">
              </div>
              <h5>GKKD Bandung</h5>
              <p>Pelayanan Oleh Pdt. Antonius B.</p>
              <button type="button" class="btn btn-success">Buka Maps</button>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
              <img src="{{ asset('/img/lokasigereja.svg')}}" width ="35" height="60" alt="">
              </div>
              <h5>GKKD Manado</h5>
              <p>Pelayanan Oleh Pdt. Silverious</p>
              <button type="button" class="btn btn-success">Buka Maps</button>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
              <img src="{{ asset('/img/lokasigereja.svg')}}" width ="35" height="60" alt="">
              </div>
              <h5>GKKD Papua</h5>
              <p>Pelayanan Oleh Pdt. Petrus pati</p>
              <button type="button" class="btn btn-success">Buka Maps</button>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
              <img src="{{ asset('/img/lokasigereja.svg')}}" width ="35" height="60" alt="">
              </div>
              <h5>GKKD Bogor</h5>
              <p>Pelayanan Oleh Pdt. Joshua Onare</p>
              <button type="button" class="btn btn-success">Buka Maps</button>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
              <img src="{{ asset('/img/lokasigereja.svg')}}" width ="35" height="60" alt="">
              </div>
              <h5>GKKD Balikpapan</h5>
              <p>Pelayanan Oleh Pdt. Christian B.</p>
              <button type="button" class="btn btn-success">Buka Maps</button>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
              <img src="{{ asset('/img/lokasigereja.svg')}}" width ="35" height="60" alt="">
              </div>
              <h5>GKKD Surabaya</h5>
              <p>Pelayanan Oleh Pdt. Kornelius simanjuntak</p>
              <button type="button" class="btn btn-success">Buka Maps</button>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
              <img src="{{ asset('/img/lokasigereja.svg')}}" width ="35" height="60" alt="">
              </div>
              <h5>GKKD Medan</h5>
              <p>Pelayanan Oleh Pdt. Darius Sitompul</p>
              <button type="button" class="btn btn-success">Buka Maps</button>
            </div>
          </div>
        </div>

      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

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

    
    </div>
  </footer>

  <script src="{{ asset('/js/jquery-3.5.1.min.js') }}"> </script>

<script src=" {{ asset('/js/bootstrap.bundle.min.js')}}"></script>

<script src=" {{ asset('/js/google-maps.js')}}"></script>

<script src="{{ asset('/vendor/wow/wow.min.js')}}"></script>

<script src="{{ asset('/js/theme.js')}}"></script>
  
</body>
</html>