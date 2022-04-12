<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>E-Quarantine</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/images/favicon.ico') }}" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('front/plugins/bootstrap/css/bootstrap.min.css') }}">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{ asset('front/plugins/icofont/icofont.min.css') }}">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="{{ asset('front/plugins/slick-carousel/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('front/plugins/slick-carousel/slick/slick-theme.css') }}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

</head>

<body id="top">

    <header>
        <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-bar-info list-inline-item pl-0 mb-0">
                            <li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>Kuarantin@upsi.edu.my</a></li>
                            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Kolej Awang Had Saleh , UPSI , Perak</li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                  <a class="navbar-brand" href="{{ route('efront.index') }}">
                      <img src="https://pbs.twimg.com/media/FQDu9gwaQAIRvOr?format=jpg&name=medium" alt="Class" width="300" height="70">
                  </a>

                  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('efront.index') }}">Home</a>
                  </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('efront.status') }}">Check Status</a></li>
                   <li class="nav-item"><a class="nav-link" href="{{ route('efront.apply') }}">Apply Now</a></li>
                   <li class="nav-item"><a class="nav-link" href="{{ route('efront.covid') }}">Covid Information</a></li>
                   <li class="nav-item"><a class="nav-link" href="{{ route('efront.college') }}">College Information</a></li>
                   <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>

                </ul>
              </div>
            </div>
        </nav>
    </header>

    @yield('content')

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-block mb-5 mb-lg-0">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color"></h4>
                        <p class="mb-4"></p>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- footer Start -->
    <footer class="footer section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <div class="logo mb-4">
                            <img src="https://pbs.twimg.com/media/FQDu9gwaQAIRvOr?format=jpg&name=medium" class="img-fluid">
                        </div>
                        <p>Sistem E - Quarantine ini dibina atas tujuan mencegah penularan covid - 19 yang semakin menignkat di sekitar kawasan kolej ini . Ia adalah untuk memudahkan pelajar mendapat bilik kuarantin mereka tanpa perlu ada kontak secara bersemuka dengan pihak pengurusan kolej .</p>

                        <ul class="list-inline footer-socials mt-4">

                            <li class="list-inline-item"><a href="https://www.linkedin.com/" target="_blank"><i class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Get in Touch</h4>
                        <div class="divider mb-4"></div>

                        <div class="footer-contact-block mb-4">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-email mr-3"></i>
                                <span class="h6 mb-0">Support Available for 24/7</span>
                            </div>
                            <h4 class="mt-2"><a >equaratine@gmail.com</a></h4>
                        </div>

                        <div class="footer-contact-block">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-support mr-3"></i>
                                <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
                            </div>
                            <h4 class="mt-2"><a href="tel:+094922097">+60 94922097</a></h4>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-lg-4">
                        <a class="backtop js-scroll-trigger" href="#top">
                            <i class="icofont-long-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </section>



        <!--
        Essential Scripts
        =====================================-->


        <!-- Main jQuery -->
        <script src="{{ asset('front/plugins/jquery/jquery.js') }}"></script>
        <!-- Bootstrap 4.3.2 -->
        <script src="{{ asset('front/plugins/bootstrap/js/popper.js') }}"></script>
        <script src="{{ asset('front/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('front/plugins/counterup/jquery.easing.js') }}"></script>
        <!-- Slick Slider -->
        <script src="{{ asset('front/plugins/slick-carousel/slick/slick.min.js') }}"></script>
        <!-- Counterup -->
        <script src="{{ asset('front/plugins/counterup/jquery.waypoints.min.js') }}"></script>

        <script src="{{ asset('front/plugins/shuffle/shuffle.min.js') }}"></script>
        <script src="{{ asset('front/plugins/counterup/jquery.counterup.min.js') }}"></script>
        <!-- Google Map -->
        <script src="{{ asset('front/plugins/google-map/map.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

        <script src="{{ asset('front/js/script.js') }}"></script>
        <script src="{{ asset('front/js/contact.js') }}"></script>

      </body>
      </html>
