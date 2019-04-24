<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('img/title.png') !!}"/>
    <link href="https://fonts.googleapis.com/css?family=Mitr|Prompt" rel="stylesheet">

    <script src="{{ asset('vendor/unisharp/ckeditor/ckeditor.js') }}"></script>
    @yield('js')
    <!-- bootstrap 4 internal -->
     <!-- <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}"/>
     <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}"/>
     <link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}"/>
     <script src="{{url('js/bootstrap.js')}}"></script>
     <script src="{{url('js/app.js')}}"></script>
     <script src="{{url('js/bootstrap.min.js')}}"></script>
     <script src="{{url('js/bootstrap.js')}}"></script> -->

      {{-- add templat --}}
    <!--===============================================================================================-->
	    {{-- <link rel="icon" type="image/png" href="{!! asset('images/icons/favicon.png') !!}"/> --}}
    <!--===============================================================================================-->
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}"> --}}
    <!--===============================================================================================-->
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}"> --}}
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/themify/themify-icons.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/lightbox2/css/lightbox.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
    <!--===============================================================================================-->

    <style type="text/css">* {cursor: url(http://cur.cursors-4u.net/food/foo-5/foo442.cur), auto !important;}</style><a href="http://www.cursors-4u.com/cursor/2010/11/04/turnip.html" target="_blank" title="Turnip"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Turnip" style="position:absolute; top: 0px; right: 0px;" /></a>


     <link rel="stylesheet" type="text/css" href="{{url('css/preloader.css')}}"/>

     <link rel="stylesheet" type="text/css" href="{{url('css/back-to-top.css')}}"/>
    <!-- bootstrap 4 CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <style>
        body {
            /* padding: 20px; */
            /* font-family: Helvetica, Arial, Sans-Serif; */
        }
            /* Make the image fully responsive */
        .carousel-inner img {
                width: 100%;
                height: 100%;

        }
          #nv {
          color: #40BCFF;
        }
        #brn {
          color: #FFFFFF;
          font-size: xx-large,25px;
        }
        .login {
          color: #0d3625
        }
        /* .headingBox {
          position: relative;
        }
        .loginBox {
          position: absolute;
          top 0;
          right: 0;
          margin-top: 10px;
        }
        .loginBox {
          color: #0d3625;
        } */
        </style>
   </head>
<body>
<div class="loader"></div>
<header>
        <!-- Header desktop -->
        <div class="wrap-menu-header gradient1 trans-0-4">
            <div class="container h-full">
                <div class="wrap_header trans-0-3">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="http://localhost:8000/">
                            <img src="{!! asset('images/icons/logo4.png') !!}" alt="IMG-LOGO" data-logofixed="{!! asset('images/icons/logo3.png') !!}">
                        </a>
                    </div>

                    <!-- Menu -->
                    <div class="wrap_menu p-l-45 p-l-0-xl">
                        <nav class="menu">
                            <ul class="main_menu">
                                <li>
                                    <a href="http://localhost:8000/"  data-toggle="tooltip" data-placement="bottom" title="หน้าเเรก">HOME</a>
                                </li>

                                <li>
                                    <a href="{{ route('category.show','อาหารคาว') }}"  data-toggle="tooltip" data-placement="bottom" title="อาหารคาว">Savory food</a>
                                </li>


                                <li>
                                    <a href="{{ route('category.show','อาหารหวาน') }}" data-toggle="tooltip" data-placement="bottom" title="อาหารหวาน">Dessert</a>
                                </li>

                                <li>
                                    <a href="{{ route('category.show','เครื่องดื่ม') }}" data-toggle="tooltip" data-placement="bottom" title="เครื่องดื่ม">Beverage</a>
                                </li>


                                @guest
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-success" href="{{ route('login') }}" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="เข้าสู่ระบบ">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-primary" href="{{ route('register') }}" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="สมัครสมาชิก">{{ __('Register') }}</a>
                                </li>
                                @endif
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-warning" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            {{-- <a class="dropdown-item" href="{{ route('profile') }}"><i class="fa fa-btn fa-user"></i> Your Profile</a> --}}

                                            <a class="dropdown-item" href="{{  route('posts.index') }}"><i class="fa fa-plus" aria-hidden="true"></i> จัดการโพส</a>

                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();"><i class="fa fa-btn fa-sign-out"></i>
                                                {{ __('Logout') }}
                                            </a>



                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest

                            </ul>



                        </nav>
                    </div>

                    <!-- Social -->
                    <div class="social flex-w flex-l-m p-r-20">
                        {{-- <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a> --}}

                        <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                    </div>
                </div>
            </div>
        </div>
    </header>

        <!-- Sidebar -->
<aside class="sidebar trans-0-4">
        <!-- Button Hide sidebar -->
        <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

        <!-- - -->
        <ul class="menu-sidebar p-t-95 p-b-70">
            <!--  -->

            <li class="t-center m-b-13">
                <a href="http://localhost:8000/"  data-toggle="tooltip" data-placement="bottom" title="หน้าเเรก">HOME</a>
            </li>

            <li class="t-center m-b-13">
                <a href="{{ route('category.show','อาหารคาว') }}"  data-toggle="tooltip" data-placement="bottom" title="อาหารคาว">Savory food</a>
            </li>

            <li class="t-center m-b-13">
                <a href="{{ route('category.show','อาหารหวาน') }}" data-toggle="tooltip" data-placement="bottom" title="อาหารหวาน">Dessert</a>
            </li>

            <li class="t-center m-b-13">
                <a href="{{ route('category.show','เครื่องดื่ม') }}" data-toggle="tooltip" data-placement="bottom" title="เครื่องดื่ม">Beverage</a>
            </li>

            @guest
            <li class="t-center">
                <a class="nav-link btn btn-outline-danger"  href="{{ route('login') }}" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto btn-lg" data-toggle="tooltip" data-placement="bottom" title="เข้าสู่ระบบ">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="t-center">
                <a class="nav-link btn btn-outline-primary" href="{{ route('register') }}" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto btn-lg" data-toggle="tooltip" data-placement="bottom" title="สมัครสมาชิก">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-warning " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        {{-- <a class="dropdown-item" href="{{ route('profile') }}"><i class="fa fa-btn fa-user"></i> Your Profile</a> --}}

                        <a class="dropdown-item" href="{{  route('posts.index') }}"><i class="fa fa-plus" aria-hidden="true"></i> จัดการโพส</a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i class="fa fa-btn fa-sign-out"></i>
                            {{ __('Logout') }}
                        </a>



                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
        </ul>

        <!-- - -->
        <div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
            <!-- - -->
            <h4 class="txt20 m-b-33">
                Gallery
            </h4>

            <!-- Gallery -->
            <div class="wrap-gallery-sidebar flex-w">
                <a class="item-gallery-sidebar wrap-pic-w" href="{{ asset('images/photo-gallery-01.jpg')}}" data-lightbox="gallery-footer">
                    <img src="{{ asset('images/photo-gallery-thumb-01.jpg')}}" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="{{ asset('images/photo-gallery-02.jpg')}}" data-lightbox="gallery-footer">
                    <img src="{{ asset('images/photo-gallery-thumb-02.jpg')}}" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="{{ asset('images/photo-gallery-03.jpg')}}" data-lightbox="gallery-footer">
                    <img src="{{ asset("images/photo-gallery-thumb-03.jpg")}}" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="{{ asset('images/photo-gallery-05.jpg')}}" data-lightbox="gallery-footer">
                    <img src="{{ asset('images/photo-gallery-thumb-05.jpg')}}" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="{{ asset('images/photo-gallery-06.jpg')}}" data-lightbox="gallery-footer">
                    <img src="{{ asset('images/photo-gallery-thumb-06.jpg')}}" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="{{ asset('images/photo-gallery-07.jpg')}}" data-lightbox="gallery-footer">
                    <img src="{{ asset('images/photo-gallery-thumb-07.jpg')}}" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="{{ asset('images/photo-gallery-09.jpg')}}" data-lightbox="gallery-footer">
                    <img src="{{ asset('images/photo-gallery-thumb-09.jpg')}}" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="{{ asset('images/photo-gallery-10.jpg')}}" data-lightbox="gallery-footer">
                    <img src="{{ asset('images/photo-gallery-thumb-10.jpg')}}" alt="GALLERY">
                </a>

                <a class="item-gallery-sidebar wrap-pic-w" href="{{ asset('images/photo-gallery-11.jpg')}}" data-lightbox="gallery-footer">
                    <img src="{{ asset('images/photo-gallery-thumb-11.jpg')}}" alt="GALLERY">
                </a>
            </div>
        </div>
    </aside>


<!-- Slide1 -->
<section class="section-slide">
        <div class="wrap-slick1">
            <div class="slick1">
                    <div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url({!! asset('images/bg-intro-01.jpg') !!});">
                        <span class="tit2 p-l-15 p-r-15">

                        </span>
                        <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
                            C R E A T E .. B L O G
                        </h3>
                    </div>



                </div>
            </div>
        </div>
    </section>
    <div>
            @yield('content')
    </div>
    <br>
    <br><br><br>
    <footer class="footer" style="  background-color: #FFBD00;  overflow: hidden; height:140px; bottom: 0;  width: 100%;">
            <div class="footer text-center" style="margin: 20px 0 60px 0;">
                <br>
                <p><b>Copyrigth &copy; Design By Kritsana Prasit</b></p>
                <hr style="width: 400px text-align: center;">
                <i style="font-size:24px" class="fa">&#xf082;</i>&nbsp;&nbsp;
                <i class="fa fa-gitlab" style="font-size:24px"></i>&nbsp;&nbsp;
                <i class="fa fa-google-plus" style="font-size:24px"></i>&nbsp;&nbsp;
                <i class="fa fa-stack-overflow" style="font-size:24px"></i>&nbsp;&nbsp;
                <i class="fa fa-github-alt" style="font-size:24px"></i>&nbsp;&nbsp;
            </div>
            </footer>
</body>
<p id="back-top">
  <a href="#top"><span></span>Back To Top</a>
</p>


<!-- Back To top -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

<script>
$(document).ready(function(){

	// hide #back-top first
	$("#back-top").hide();

	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});

      // loader
      $(window).load(function() {
        $(".loader").fadeOut("slow");
    })

</script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>


<script type="text/javascript" src="{{ url('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ url('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ url('vendor/bootstrap/js/popper.js') }}"></script>

    <script type="text/javascript" src="{{ url('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendor/bootstrap/js/bootstrap.js') }}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ url('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ url('vendor/daterangepicker/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ url('vendor/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ url('vendor/parallax100/parallax100.js') }}"></script>
    <script type="text/javascript">
        $('.parallax100').parallax100();
    </script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ url('vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ url('vendor/lightbox2/js/lightbox.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ url('js/main.js')}}"></script>

    <script>
            $(document).ready(function(){
              $('[data-toggle="tooltip"]').tooltip();
            });
            </script>
    <script>
  </body>
</html>
