<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    @yield('js')
    {{-- login --}}
    <!--===============================================================================================-->
	    <link rel="icon" type="image/png" href="{!! asset('img/icons/favicon.ico') !!}"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{  asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!--===============================================================================================-->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    body {
        background: url("{!! asset('images/master-slides-06.jpg') !!}");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-color: #727272;
    }


    .logo {
        width: 40px ;
        height: 40px;
    }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg  bg-primary navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand logo" href="{{ url('/') }}">
                    <img id="logo" style='height: 100%; width: 100%; object-fit: contain' src="{!! asset('img/title.png') !!}"/><b><!-- {{ config('app.name', 'Laravel') }} --></b>
                    Cooking
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                            <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
        <main class="py-4">
            @yield('content')
        </main>
    </div>

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
        <!--===============================================================================================-->
            <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
        <!--===============================================================================================-->
            <script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
        <!--===============================================================================================-->
            <script src="{{ asset('vendor/bootstrap/js/popper.js')}}"></script>
            <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!--===============================================================================================-->
            <script src="{{ asset("vendor/select2/select2.min.js") }}"></script>
        <!--===============================================================================================-->
            <script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
            <script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
        <!--===============================================================================================-->
            <script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
        <!--===============================================================================================-->
            <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
