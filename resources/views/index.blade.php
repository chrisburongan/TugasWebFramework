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
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <a href="#" class="navbar-brand">GKKD<span class="text-primary"> Banjarmasin</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/')}}">Beranda</a>
            </li>
            <li class="nav-item">
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
            <h1 class="mb-4">Khotbah Minggu ini</h1>
            <p class="text-lg text-grey mb-5">Saksikan dan Nikmati Khotbah Minggu ini dalam Channel Kami.</p>
            <a href="#" class="btn btn-primary btn-split"> Kunjungi Video <div class="fab"><span class="mai-play"></span></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="{{ asset('/img/Logo_gkkd.png')}}" alt="">
            </div>
          </div>
        </div>
        <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
      </div>
    </div>
  </header>

     
  <div class="text-center wow fadeInUp">
        <div class="subhead">Daily Devotion</div>
        <h2 class="title-section">Renungan Harian</h2>
        <div class="divider mx-auto"></div>
</div>


  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src= "{{ asset('/img/services/book.png')}}" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Semangat Baru</h5>
              <p>Ayat Renungan</p>
              <p>Lukas 5 : 13</p>
              <a href="service.html" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
            <img src= "{{ asset('/img/services/book.png')}}" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Anggur Baru</h5>
              <p>Ayat Renungan</p>
              <p>Filipi  14 : 13</p>
              <a href="service.html" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
            <img src= "{{ asset('/img/services/book.png')}}" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Sukacita Baru</h5>
              <p>Ayat Renungan</p>
              <p>Lukas 5 : 13</p>
              <a href="{{ url('service')}}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
            <img src= "{{ asset('/img/services/book.png')}}" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Budaya Baru</h5>
              <p>Ayat Renungan</p>
              <p>Yohanes 3 : 16</p>
              <a href="service.html" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
            <img src= "{{ asset('/img/services/book.png')}}" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Pengharapan Baru</h5>
              <p>Ayat Renungan</p>
              <p>Markus 8 : 35</p>
              <a href="service.html" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
            <img src= "{{ asset('/img/services/book.png')}}" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Content Marketing</h5>
              <p>Ayat Renungan</p>
              <p>Matius 6 : 3</p>
              <a href="service.html" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <span class="subhead">Tentang Kami</span>
          <h2 class="title-section">Gereja Kristen Kemah Daud (GKKD) Banjarmasin</h2>
          <div class="divider"></div>

          <p>Gereja Kristen Kemah Daud Banjarmasin adalah sebuah persekutuan jemaat Gereja GKKD yang berada di Banjarmasin</p>
          <p>Pelayanan ini dirintis sejak tahun 2005 yang dimana diawali dengan kegerakan pada tahun '90an</p>
          <a href="about.html" class="btn btn-primary mt-3">Read More</a>
        </div>
        <div class="col-lg-6 py-3 wow fadeInRight">
          <div class="img-fluid py-3 text-center">
            <img src="{{ asset('/img/fotogkkd.png')}}" 
            class="rounded"
            width="300"
            height="auto"
            alt="">
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Pelayanan</div>
        <h2 class="title-section"> Komunitas Sel</h2>
        <div class="divider mx-auto"></div>
      </div>

        <div class="row">
          
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
              <img src="{{ asset('/img/komunitas.svg')}}" alt="">
               
              </div>
              <h5>Mahasiswa</h5>
              <p>Komunitas Rohani bagi setiap Mahasiswa & Pelajar</p>
              <a href="service.html" class="btn btn-primary">Daftarkan diri</a>
            </div>
            
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
              <img src="{{ asset('/img/komunitas.svg')}}" alt="">
               
              </div>
              <h5>Karyawan</h5>
              <p>Komunitas Rohani bagi setiap karyawan & Pekerja</p>
              <a href="service.html" class="btn btn-primary">Daftarkan diri</a>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
              <img src="{{ asset('/img/komunitas.svg')}}" alt="">
               
              </div>
              <h5>Keluarga</h5>
              <p>Komunitas Rohani bagi setiap keluarga dalam jemaat</p>
              <a href="service.html" class="btn btn-primary">Daftarkan diri</a>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
              <img src="{{ asset('/img/komunitas.svg')}}" alt="">
               
              </div>
              <h5>Profetik</h5>
              <p>Komunitas Rohani bagi setiap pelayan dalam Gereja</p>
              <a href="service.html" class="btn btn-primary">Daftarkan diri</a>
            </div>
          </div>
         

    </div> <!-- .container -->
  </div> <!-- .page-section -->

  
  <!-- Banner info -->
  <div class="page-section banner-info">
    <div class="wrap bg-image" style="background-image: url({{url ('/img/bg_pattern.svg');}})">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 pr-lg-5 wow fadeInUp">
            <h2 class="title-section"> Pelayanan <br> Komunitas Sel </h2>
            <div class="divider"></div>
            <p>Pelayanan Komunitas sel adalah sebuah komunitas yang di rancang untuk menaungi setia kalangan jemaat baik itu : .</p>
            
            <ul class="theme-list theme-list-light text-white">
              <li>
                <div class="h5">Mahasiswa</div>
                <p> Komunitas untuk anak Mahasiswa dan Pelajar</p>
              </li>
              <li>
                <div class="h5">Karyawan</div>
                <p>Komunitas untuk pekerja dan karyawan/p>
              </li>
              <li>
                <div class="h5">Keluarga</div>
                <p>Komunitas untuk setiap keluarga dalam jemaat</p>
              </li>
              <li>
                <div class="h5">Profetik</div>
                <p>Komunitas untuk semua pelayan Tuhan dalam Gereja</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 py-3 wow fadeInRight">
            <div class="img-fluid text-center">
              <img src="{{ asset('/img/anakmuda.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .wrap -->
  </div>
</div> <!-- .page-section -->

  <!-- Blog -->
  <div class="page-section">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Pertemuan Virtual</div>
        <h2 class="title-section">Pelayan</h2>
        <div class="divider mx-auto"></div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="{{ asset('/img/blog/Mahasiswa.jpeg')}}" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="#">Pertemuan Virtual Profetik</a></h5>
              <div class="post-date">Pada tanggal <a href="#">27 Jan 2020</a></div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="{{ asset('/img/blog/Mahasiswa2.jpeg')}}" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="#">Pertemuan Virtual Anak Muda</a></h5>
              <div class="post-date">Pada tanggal <a href="#">27 Jan 2020</a></div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="{{ asset('/img/blog/Mahasiswa3.jpeg')}}" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="#">Pertemuan Virtual Profesi</a></h5>
              <div class="post-date">Pada tanggal <a href="#">27 Jan 2020</a></div>
            </div>
          </div>
        </div>

        <div class="col-12 mt-4 text-center wow fadeInUp">
          <a href="blog.html" class="btn btn-primary">Bergabung</a>
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

  
    </div>
  </footer>

  <script src="{{ asset('/js/jquery-3.5.1.min.js') }}"> </script>

<script src=" {{ asset('/js/bootstrap.bundle.min.js')}}"></script>

<script src=" {{ asset('/js/google-maps.js')}}"></script>

<script src="{{ asset('/vendor/wow/wow.min.js')}}"></script>

<script src="{{ asset('/js/theme.js')}}"></script>
  
</body>
</html>