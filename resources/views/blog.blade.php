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
              <a class="nav-link" href="{{ url('blog')}}">Renungan</a>
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
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Blog</li>
              </ul>
            </nav>
            <h1 class="text-center">Blog</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
          <form action="#" class="form-search-blog">
            <div class="input-group">
              <div class="input-group-prepend">
                <select id="categories" class="custom-select bg-light">
                  <option>All Categories</option>
                  <option value="travel">Travel</option>
                  <option value="lifestyle">LifeStyle</option>
                  <option value="healthy">Healthy</option>
                  <option value="food">Food</option>
                </select>
              </div>
              <input type="text" class="form-control" placeholder="Enter keyword..">
            </div>
          </form>
        </div>
        <div class="col-sm-2 text-sm-right">
          <button class="btn btn-secondary">Filter <span class="mai-filter"></span></button>
        </div>
      </div>

      <div class="row my-5">
        <div class="col-lg-4 py-3">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="{{ asset('/img/blog/blog-1.jpg')}}" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">Source of Content Inspiration</a></h5>
              <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 py-3">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="{{ asset('/img/blog/blog-2.jpg')}}" alt="">
              </div>
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">Source of Content Inspiration</a></h5>
              <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="{{ asset('/img/blog/blog-3.jpg')}}" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">Source of Content Inspiration</a></h5>
              <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="{{ asset('/img/blog/blog-4.jpg')}}" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">Source of Content Inspiration</a></h5>
              <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 py-3">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="{{ asset('/img/blog/blog-5.jpg')}}" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">Source of Content Inspiration</a></h5>
              <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="{{ asset('/img/blog/blog-6.jpg')}}" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">Source of Content Inspiration</a></h5>
              <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="{{ asset('/img/blog/blog-1.jpg')}}" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">Source of Content Inspiration</a></h5>
              <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 py-3">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="{{ asset('/img/blog/blog-2.jpg')}}" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">Source of Content Inspiration</a></h5>
              <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="{{ asset('/img/blog/blog-3.jpg')}}" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">Source of Content Inspiration</a></h5>
              <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
            </div>
          </div>
        </div>

      </div>

      <nav aria-label="Page Navigation">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>

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

</body>
</html>