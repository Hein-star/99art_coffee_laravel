<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>99Art Coffee</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend_asset/assets/img/coffee-logo.png')}}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend_asset/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend_asset/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend_asset/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend_asset/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend_asset/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('frontend_asset/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('frontend_asset/assets/css/style.css')}}" rel="stylesheet">
  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/532f1fcad3.js" crossorigin="anonymous"></script>
  <style type="text/css">
    .dropdown:hover>.dropdown-menu{
      display: block;
    }
  </style>
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">
      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{route('mainpage')}}"><span>99Art </span>Coffee</a></h1>
      </div>
  {{-- nav-menu Start --}}
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
            <x-sidebar-component></x-sidebar-component>
          </li>
          <li><a href="#about">Product</a></li>
          <li><a href="#contact">Contact</a></li>
          @auth
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                  </form>
              </div>
            </li>
          @else
            <li><a href="{{route('signinpage')}}">Signin</a></li>
          @endauth
          <li><a href="{{route('cartpage')}}">Cart <i class="fas fa-cart-plus"></i><span class="cartNoti">0</span></a></li>
        </ul>
      </nav>
  {{-- nav-menu End --}}

    </div>
  </header>
  <!-- End Header -->

  <!-- Page Content -->
  @yield('content')
  <!-- /.container -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>99Art Coffee</h3>
      <p>The 99Art Coffee is a social enterprise dedicated to creating job opportunities, skills development and fair wages to disadvantaged women.</p>
      <div class="social-links">
        <a href="https://99art.coffee.com" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://99art.coffee.com" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://99art.coffee.com" class="github"><i class="bx bxl-github"></i></a>
        <a href="https://99art.coffee.com" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://99art.coffee.com" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>99Art Coffee</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">2am Coders</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend_asset/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend_asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend_asset/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('frontend_asset/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('frontend_asset/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('frontend_asset/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend_asset/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('frontend_asset/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('frontend_asset/assets/js/main.js')}}"></script>
  @yield('script')
</body>
</html>