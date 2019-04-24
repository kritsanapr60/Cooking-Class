<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('img/title.png') !!}"/>
    <link href="https://fonts.googleapis.com/css?family=Mitr|Prompt" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap 4 internal -->
     <!-- <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}"/>
     <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}"/>
     <link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}"/>
     <script src="{{url('js/bootstrap.js')}}"></script>
     <script src="{{url('js/app.js')}}"></script>
     <script src="{{url('js/bootstrap.min.js')}}"></script>
     <script src="{{url('js/bootstrap.js')}}"></script> -->
     <link rel="stylesheet" type="text/css" href="{{url('css/back-to-top.css')}}"/>
    {{-- หิมะ --}}

     <script src="{{url('js/5sec-snow-backend.js')}}"></script>
     <script src="{{url('js/5sec-snow.js')}}"></script>
     <script src="{{url('js/5sec-snow.min.js')}}"></script>

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

     <style type="text/css">* {cursor: url(http://cur.cursors-4u.net/smilies/smi-3/smi266.ani), url(http://cur.cursors-4u.net/smilies/smi-3/smi266.png), auto !important;}</style><a href="http://www.cursors-4u.com/cursor/2011/12/02/onion-club-onion-head.html" target="_blank" title="Onion Club - Onion Head - Onion-kun"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Onion Club - Onion Head - Onion-kun" style="position:absolute; top: 0px; right: 0px;" /></a>
    <!-- bootstrap 4 CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <style>
        /* body, a, a:hover { cursor:url(http://www.drikoti.net/Goodies/Cursor/News/Gifs/04.gif), auto } */
        body {
            cursor: url(http://ani.cursors-4u.net/nature/nat-11/nat1058.cur), auto;
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

        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url("{!! asset('img/loading5.gif') !!}")  50% 50% no-repeat rgb(249,249,249);
        }
        .logo {
        width: 40px ;
        height: 40px;
    }
        </style>
</head>
  <body class="animsition">
    <div class="loader"></div>
    <!-- Header -->
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
                                        <a href="{{ route('category.show','อาหารคาว') }}"  data-toggle="tooltip" data-placement="bottom" title="อาหารคาว">Savory foods</a>
                                    </li>


                                    <li>
                                        <a href="{{ route('category.show','อาหารหวาน') }}" data-toggle="tooltip" data-placement="bottom" title="อาหารหวาน">Desserts</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('category.show','เครื่องดื่ม') }}" data-toggle="tooltip" data-placement="bottom" title="เครื่องดื่ม">Beverages</a>
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

        </aside>

	<!-- Slide1 -->
	<section class="section-slide">
            <div class="wrap-slick1">
                <div class="slick1">
                    <div class="item-slick1 item1-slick1" style="background-image: url({!! asset('images/benner2.jpg') !!});">
                        <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">


                            <div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
                            </div>
                        </div>
                    </div>


                </div>

                <div class="wrap-slick1-dots"></div>
            </div>
        </section>
  {{-- <div class="container-fulid"> --}}
        @yield('content')
  {{-- </div> --}}
</header>
<footer class="footer" style="  background-color: #FFBD00;  overflow: hidden; height:140px; bottom: 0;  width: 100%;">
    <div class="footer text-center" style="margin: 20px 0 60px 0;">
        <br>
        <p><b>Copyrigth &copy; Design By Kritsana Prasit</b></p>
        <center><hr style="width: 400px; text-align:center;"></center>
        <i style="font-size:24px" class="fa">&#xf082;</i>&nbsp;&nbsp;
        <i class="fa fa-gitlab" style="font-size:24px"></i>&nbsp;&nbsp;
        <i class="fa fa-google-plus" style="font-size:24px"></i>&nbsp;&nbsp;
        <i class="fa fa-stack-overflow" style="font-size:24px"></i>&nbsp;&nbsp;
        <i class="fa fa-github-alt" style="font-size:24px"></i>&nbsp;&nbsp;
    </div>
    </footer>
  </body>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>
      // loader
    $(window).load(function() {
        $(".loader").fadeOut("slow");
    })



  </script>
  <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
        });
        </script>
<script>

<script>
        //Here you can add your own picture for snow. Just change the url
        var snowsrc="http://i1208.photobucket.com/albums/cc361/Letthalicious/bluesnowrsz.png"
        //how many snowflakes there will be (currently 12)
        var no =20;
        //How fast will the snow disappear (0 is never)
        var hidesnowtime = 0;
        //The height the snow will reach before it disappears ("windowheight" or "pageheight")
        var snowdistance = "windowheight";
        ///////////////////////////////End of Settings///////////////////////////////////
        var ie4up = (document.all) ? 1 : 0;
        var ns6up = (document.getElementById&&!document.all) ? 1 : 0;
        function iecompattest()
        {
        return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
        }
        var dx, xp, yp;
        var am, stx, sty;
        var i, doc_width = 800, doc_height = 600;
        if (ns6up)
        {
        doc_width = self.innerWidth;
        doc_height = self.innerHeight;
        }
        else
        if (ie4up)
        {
        doc_width = document.body.clientWidth;
        doc_height = document.body.clientHeight;
        }
        dx = new Array();
        xp = new Array();
        yp = new Array();
        am = new Array();
        stx = new Array();
        sty = new Array();
        for (i = 0; i < no; ++ i)
        {
        dx[i] = 0;
        xp[i] = Math.random()*(doc_width-50);
        yp[i] = Math.random()*doc_height;
        am[i] = Math.random()*20;
        stx[i] = 0.02 + Math.random()/10;
        sty[i] = 0.7 + Math.random();
        if (ie4up||ns6up)
        {
        if (i == 0)
        {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><a href=\"http://rftactical.darkbb.com/index.htm\"><img src='"+snowsrc+"' border=\"0\"><\/a><\/div>");
        }
        else
        {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><img src='"+snowsrc+"' border=\"0\"><\/div>");
        }
        }
        }
        function snowIE_NS6()
        {
        doc_width = ns6up?window.innerWidth-10 : iecompattest().clientWidth-10;
        doc_height=(window.innerHeight && snowdistance=="windowheight")? window.innerHeight : (ie4up && snowdistance=="windowheight")? iecompattest().clientHeight : (ie4up && !window.opera && snowdistance=="pageheight")? iecompattest().scrollHeight : iecompattest().offsetHeight;
        for (i = 0; i < no; ++ i)
        {
        yp[i] += sty[i];
        if (yp[i] > doc_height-50)
        {
        xp[i] = Math.random()*(doc_width-am[i]-30);
        yp[i] = 0;
        stx[i] = 0.02 + Math.random()/10;
        sty[i] = 0.7 + Math.random();
        }
        dx[i] += stx[i];
        document.getElementById("dot"+i).style.top=yp[i]+"px";
        document.getElementById("dot"+i).style.left=xp[i] + am[i]*Math.sin(dx[i])+"px";
        }
        snowtimer=setTimeout("snowIE_NS6()", 10);
        }
        function hidesnow()
        {
        if (window.snowtimer) clearTimeout(snowtimer)
        for (i=0; i<no; i++) document.getElementById("dot"+i).style.visibility="hidden"
        }

        if (ie4up||ns6up)
        {
        snowIE_NS6();
        if (hidesnowtime>0)
        setTimeout("hidesnow()", hidesnowtime*1000)
        }
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
</html>
