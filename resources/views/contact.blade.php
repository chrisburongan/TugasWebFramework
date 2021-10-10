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
              <a class="nav-link" href="{{ url('/')}}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('about')}}">Tentang GKKD Banjarmasin</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ url('services')}}">Jadwal Pelayanan</a>
            </li>
        
            <li class="nav-item active">
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
            <img src="{{ asset('/img/services/jesus.jpg')}}" 
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
      <div class="row text-center align-items-center">
        <div class="col-lg-4 py-3">
          <div class="display-4 text-center text-primary"><span class="mai-pin"></span></div>
          <p class="mb-3 font-weight-medium text-lg">Alamat</p>
          <p class="mb-0 text-secondary"> Jalan veteran ruko no.05 rt.018, Melayu, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan 70122</p>
        </div>
        <div class="col-lg-4 py-3">
          <div class="display-4 text-center text-primary"><span class="mai-call"></span></div>
          <p class="mb-3 font-weight-medium text-lg">Nomor Kontak</p>
          <p class="mb-0"><a href="#" class="text-secondary">+62 895 3385 73262</a></p>
          
        </div>  
        <div class="col-lg-4 py-3">
          <div class="display-4 text-center text-primary"><span class="mai-mail"></span></div>
          <p class="mb-3 font-weight-medium text-lg">Alamat Email</p>
          <p class="mb-0"><a href="#" class="text-secondary">GkkdBanjarmasin@gmail.com</a></p>
        
        </div>
      </div>
    </div>

    <div class="container-fluid mt-4">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <form action="#" class="contact-form py-5 px-lg-5">
            <h2 class="mb-4 font-weight-medium text-secondary">Pendaftaran Ibadah Onsite</h2>
            <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="fname">Nama Depan</label>
                <input type="text" id="fname" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="text-black" for="lname">Nama Belakang</label>
                <input type="text" id="lname" class="form-control">
              </div>
            </div>
    
            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="email">Email</label>
                <input type="email" id="email" class="form-control">
              </div>
            </div>
    
            <div class="row form-group">
    
              <div class="col-md-12">
                <label class="text-black" for="subject">No. Hp</label>
                <input type="text" id="subject" class="form-control">
              </div>
            </div>
    
            <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Pilih waktu Ibadah</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Pilih...</option>
        <option value="1"> Ibadah Pagi</option>
        <option value="2">Ibadah Siang</option>
        <option value="3">Ibadah Sore</option>
      </select>
    </div>
</div>
    
            <div class="row form-group mt-4">
              <div class="col-md-12">
                <input type="submit" value="Daftarkan Diri" class="btn btn-primary">
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-6 px-0">
          
          <div class="maps-container"><div id="google-maps"></div></div>
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
          <p>Dapat berita terbaru mengenai GKKD Banjarmasin melalui email.</p>
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


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>
</html>