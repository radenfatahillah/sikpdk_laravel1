<!DOCTYPE html>
<html lang="id" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('awal/img/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>SIKPDK</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Roboto:400,400i,500" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="{{ asset('awal/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{ asset('awal/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('awal/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('awal/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('awal/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('awal/css/hexagons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('awal/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('awal/css/main.css')}}">
</head>

<body>
    <!-- start header Area -->
    <header id="header">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="<?= route('login') ?>"><img src="{{ asset('awal/img/logo.png')}}" alt="" title="" /></a>
                </div>
                <nav id="">
                    <ul class="nav-menu">

                        @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                            @if (Auth::check() && Auth::user()->role->id == 1)
                            <li><a href="<?= route('admin.dashboard.index') ?>">Dashboard</a></li>
                            @else
                            <li><a href="<?= route('operatordesa.dashboard.index') ?>">Dashboard</a></li>
                            @endif
                            @csrf
                            </form>
                            @else
                            <li><a href="{{ route('login') }}">Masuk</a></li>
                            @endauth
                        </div>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- end header Area -->

    <!-- start banner Area -->
    <section class="home-banner-area">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-between">
                <div class="home-banner-content col-lg-6 col-md-6">
                    <h2>
                        Sistem Informasi Kependudukan dan Profil Desa Kecamatan
                    </h2>
                    <p>Kecamatan Teluk Keramat Kabupaten Sambas Kalimantan Barat</p>
                </div>
                <div class="banner-img col-lg-4 col-md-6">
                    <img class="img-fluid" src="{{ asset('awal/img/banner-img.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <script src="{{ asset('awal/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('awal/js/tilt.jquery.min.js')}}"></script>
    <script src="{{ asset('awal/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('awal/js/easing.min.js')}}"></script>
    <script src="{{ asset('awal/js/hoverIntent.js')}}"></script>
    <script src="{{ asset('awal/js/superfish.min.js')}}"></script>
    <script src="{{ asset('awal/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('awal/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('awal/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('awal/js/owl-carousel-thumb.min.js')}}"></script>
    <script src="{{ asset('awal/js/hexagons.min.js')}}"></script>
    <script src="{{ asset('awal/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('awal/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('awal/js/mail-script.js')}}"></script>
    <script src="{{ asset('awal/js/main.js')}}"></script>
</body>

</html>