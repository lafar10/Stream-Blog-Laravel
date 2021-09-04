<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="images/goal.png">
    <title>@yield('title')</title>

    <link href="{{asset('app.css')}}" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="blog-header-logo text-dark" id="tit" href="{{route('/')}}"><img src="images/goal.png" style="width:50px;height:50px;" > LR10-Kora</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">|||</button>

            <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>-->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->

                <ul class="navbar-nav ms-auto">
                    <li class="nav-link text-success">
                        <a id="aaa" href="{{route('all.news')}}">أخر الأخبار</a>
                    </li>
                    <li class="nav-link text-success">
                        <a id="aaa" href="{{route('yesterday.get.matches')}}">مباريات الأمس </a>
                    </li>
                    <li class="nav-link text-success">
                        <a id="aaa" href="{{route('tomorrow.get.matches')}}">مباريات الغد</a>
                    </li>
                    <li class="nav-link text-success">
                        <a  id="aaa" href="{{route('/')}}">مباريات اليوم</a>
                    </li>
                    <li class="nav-link text-success">
                        <a id="aaa" href="{{route('/')}}">الرئيسية</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <button class="btn btn-outline-success" type="button" style="border:none;border-radius:50%;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i class="fas fa-search"></i></button>
                    </li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link text-success" href="{{ route('login') }}">دخول</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-success" href="{{ route('register') }}">تسجيل</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-success" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-success" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    تسجيل الخروج
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>

    <main class="container">
        @yield('content')
    </main>


    <br>
    <br>

    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4 footer-column">
                <div style="margin-top:50px;" >
                    <a class="blog-header-logo text-white" id="tit" href="#"><img src="images/goal.png" style="width:150px;height:150px;" > LR10-Kora</a>
                </div>
            </div>
            <div class="col-md-4 footer-column">
                <ul class="nav flex-column" >
                    <li class="nav-item">
                      <span class="footer-title" style="color:white;font-size:25px;">الرئيسية</span>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" style="color:white;font-size:18px;" href="{{route('/')}}">مباريات اليوم</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" style="color:white;font-size:18px;" href="{{route('tomorrow.get.matches')}}">مباريات الغد</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" style="color:white;font-size:18px;" href="{{route('yesterday.get.matches')}}">مباريات الأمس</a>
                    </li>
                  </ul>
            </div>
            <div class="col-md-4 footer-column">
                <ul class="nav flex-column">
                    <li class="nav-item">
                      <span class="footer-title" style="font-size:25px;color:white;">الأخبار</span>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" style="color:white;font-size:18px;" href="{{route('all.news')}}">أخر الأخبار</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:white;font-size:18px;" href="{{route('today.get.news')}}">أخبار اليوم</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:white;font-size:18px;" href="{{route('yesterday.get.news')}}">أخبار الأمس</a>
                    </li>
                  </ul>
            </div>
          </div>

          <div class="text-center"><i class="fas fa-ellipsis-h"></i></div>

          <div class="row text-center">
            <div class="col-md-6 box">
              <span class="copyright quick-links text-white">Created By Lafar Ayoub With  <i class="fas fa-heart" style="color:red;height:20px;"></i> Copyright &copy; LR10-Kora 2021
              </span>
            </div>
            <div class="col-md-6 box">
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                  <i class="fab fa-youtube"></i>
                </a>
                <li class="list-inline-item">
                  <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header" >
                <button type="button" class="btn-close text-reset"  data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="{{route('news.search')}}" method="get" class="d-flex">
                    @csrf
                    <input class="form-control me-2" type="search"  name="search_news" style="text-align:center;" placeholder="ابحث عن أخر الأخبار" aria-label="Search">
                    <button class="btn btn-outline-success"  type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>

        <div class="offcanvas offcanvas-end bg-success text-white" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                <h5 id="offcanvasRightLabel">القائمة</h5>
            </div>
            <div class="offcanvas-body" style="text-align:right;">

                    <ul class="navbar-nav ml-auto" >
                        <li class="nav-link">
                            <a id="aa" href="{{route('/')}}">الرئيسية</a>
                        </li>
                        <hr>
                        <li class="nav-link">
                            <a id="aa" href="{{route('all.news')}}">أخر الأخبار</a>
                        </li>
                        <hr>
                        <li class="nav-link">
                            <a  id="aa" href="{{route('/')}}">مباريات اليوم</a>
                        </li>
                        <hr>
                        <li class="nav-link">
                            <a id="aa" href="{{route('tomorrow.get.matches')}}">مباريات الغد</a>
                        </li>
                        <hr>
                        <li class="nav-link">
                            <a id="aa" href="{{route('yesterday.get.matches')}}">مباريات الأمس </a>
                        </li>
                        <hr>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <button class="btn btn-outline-success" type="button" style="border:none;border-radius:50%;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i style="color:white;" class="fas fa-search"></i></button>
                        </li>
                        <hr>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" id="aa" href="{{ route('login') }}">دخول</a>
                                </li>
                            @endif
                            <hr>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-success"  href="{{ route('register') }}">تسجيل</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" id="aa"  class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a id="aa"  class="dropdown-item text-success" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        تسجيل الخروج
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </div>





      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" >
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });

    </script>
    @yield('scripts')
</body>
</html>
