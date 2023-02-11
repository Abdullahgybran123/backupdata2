<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharma &mdash; Colorlib Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets1/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{asset('assets1/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets1/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('assets1/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('assets1/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets1/css/owl.theme.default.min.css')}}">


  <link rel="stylesheet" href="{{asset('assets1/css/aos.css')}}">

  <link rel="stylesheet" href="{{asset('assets1/css/style.css')}}">

</head>

<body>

  <div class="site-wrap">
    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone">Pharma</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="/home">Home</a></li>
                <li><a href="/shop">Store</a></li>
                <li><a href="/about">About</a></li>
                <li>
                <li> @if (Route::has('login'))
                  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <a href="{{ url('/customer') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"></a>
                    @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                      class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                    @endauth
                  </div>
                  @endif
                </li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="cart.html" class="icons-btn d-inline-block bag">
              {{-- <span class="icon-shopping-bag"></span> --}}
            </a>
            {{-- <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a> --}}
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('assets1/images/hero_1.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('assets1/images/hero_1.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('assets1/images/hero_1.jpg')}}" class=" d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    {{--
    @include('layouts.componentscustomer.navbar') --}}
    {{--
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">New Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

              <div class="text-center item mb-4">
                <div class="site-blocks-cover" style="background-image: url('assets1/images/hero_1.jpg');">
                </div>


              </div>
            </div>
          </div>
        </div>
      </div> --}}
      {{--
      <div class="site-blocks-cover" style="background-image: url('assets1/images/hero_1.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
              <div class="site-block-cover-content text-center">
                <h2 class="sub-title">Effective Medicine, New Medicine Everyday</h2>
                <h1>Welcome To Pharma</h1>
                <p>
                  <a href="" class="btn btn-primary px-5 py-3">Shop Now</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      {{--
      <div class="site-section">
        <div class="container">
          <div class="row align-items-stretch section-overlap">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
              <div class="banner-wrap bg-primary h-100">
                <a href="#" class="h-100">
                  <h5>Free <br> Shipping</h5>
                  <p>
                    Amet sit amet dolor
                    <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                  </p>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
              <div class="banner-wrap h-100">
                <a href="#" class="h-100">
                  <h5>Season <br> Sale 50% Off</h5>
                  <p>
                    Amet sit amet dolor
                    <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                  </p>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
              <div class="banner-wrap bg-warning h-100">
                <a href="#" class="h-100">
                  <h5>Buy <br> A Gift Card</h5>
                  <p>
                    Amet sit amet dolor
                    <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                  </p>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div> --}}


      {{-- <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="title-section text-center col-12">
              <h2 class="text-uppercase">Testimonials</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 block-3 products-wrap">
              <div class="nonloop-block-3 no-direction owl-carousel">

                <div class="testimony">
                  <blockquote>
                    <img src="{{asset('assets1/images/person_1.jpg')}}" alt="Image"
                      class="img-fluid w-25 mb-4 rounded-circle">
                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem
                      consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod
                      tenetur ducimus. Minus ratione sit quaerat unde.&rdquo;</p>
                  </blockquote>

                  <p>&mdash; Kelly Holmes</p>
                </div>

                <div class="testimony">
                  <blockquote>
                    <img src="{{asset('assets1/images/person_2.jpg')}}" alt="Image"
                      class="img-fluid w-25 mb-4 rounded-circle">
                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem
                      consectetur quam tempore
                      obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus
                      ratione sit quaerat
                      unde.&rdquo;</p>
                  </blockquote>

                  <p>&mdash; Rebecca Morando</p>
                </div>

                <div class="testimony">
                  <blockquote>
                    <img src="{{asset('assets1/images/person_3.jpg')}}" alt="Image"
                      class="img-fluid w-25 mb-4 rounded-circle">
                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem
                      consectetur quam tempore
                      obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus
                      ratione sit quaerat
                      unde.&rdquo;</p>
                  </blockquote>

                  <p>&mdash; Lucas Gallone</p>
                </div>

                <div class="testimony">
                  <blockquote>
                    <img src="{{asset('assets1/images/person_4.jpg')}}" alt="Image"
                      class="img-fluid w-25 mb-4 rounded-circle">
                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem
                      consectetur quam tempore
                      obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus
                      ratione sit quaerat
                      unde.&rdquo;</p>
                  </blockquote>

                  <p>&mdash; Andrew Neel</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div> --}}

      <div class="site-section bg-secondary bg-image" style="background-image: url('assets1/images/bg_2.jpg');">
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-lg-6 mb-5 mb-lg-0">
              <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('assets1/images/bg_1.jpg');">
                <div class="banner-1-inner align-self-center">
                  <h2>Hidup Sehat Dengan Minum Obat</h2>
                </div>
              </a>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
              <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('assets1/images/bg_2.jpg');">
                <div class="banner-1-inner ml-auto  align-self-center">
                  <h2>Jagalah Kesehatan Dengan Hidup Teratur</h2>
                  </p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>


      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-lg-6 mb-8 mb-lg-1">

              <div class="block-7">
                <h3 class="footer-heading mb-4">About Us</h3>
                <p>Di website apotek ini Customer/Pembeli bisa melihat informasi tentang apotek ini.
                  Selain itu Customer bisa juga melihat bermacam-macam jenis obat yang disediakan di website
                  apotek
                  ini
                  dan juga bisa membeli obat yang tersedia.</p>
              </div>

            </div>
            <div class="col-md-6 col-lg-3">
              <div class="block-4 mb-5">
                <h3 class="footer-heading mb-4 text-center">Sosial Media</h3>
                <ul style="display: flex; list-style-type:none; margin-left:15px">
                  <li><a href="https://id-id.facebook.com/KimiaFarmaCare/" target="blank"><img
                        src=" {{asset('images/icon/fb.png')}}" alt="" width="50px"></a></li>
                  <li><a href="https://www.instagram.com/kimiafarmacilegon/" target="blank"><img
                        src="{{asset('images/icon/ig.png')}}" alt="" width="50px"></a></li>
                  <li><a href="https://twitter.com/kimiafarmaind?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                      target="blank"><img src="{{asset('images/icon/twitter.png')}}" alt="" width="50px"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="block-5 mb-5">
                <h3 class="footer-heading mb-4">Contact Info</h3>
                <ul class="list-unstyled">
                  <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                  <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                  <li class="email">emailaddress@domain.com</li>
                </ul>
              </div>


            </div>
          </div>
          {{-- <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made
                with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"
                  class="text-primary">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>

          </div> --}}
        </div>
      </footer>
      {{--
    </div> --}}

    <script src="{{asset('assets1/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets1/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets1/js/popper.min.js')}}"></script>
    <script src="{{asset('assets1/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets1/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets1/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets1/js/aos.js')}}"></script>

    <script src="{{asset('assets1/js/main.js')}}"></script>

</body>

</html>