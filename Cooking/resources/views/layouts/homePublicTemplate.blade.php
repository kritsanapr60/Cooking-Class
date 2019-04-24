<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  {{--jquery cdn--}}
  <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>

  {{--bootstrap cdn--}}
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <title>@yield('title')</title>
  <link rel="shortcut icon" type="image/x-icon" href="{!! asset('img/title.png') !!}"/>
  <link href="https://fonts.googleapis.com/css?family=Mitr|Prompt" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="{{url('css/preloader.css')}}"/>
</head>
<body>
<div class="loader"></div>
<div class="container">
  <div class="loginBox nav navbar-nav pull-right">
    <!-- Authentication Links -->
    @if (Auth::guest())
      <li><a class="btn" href="{{ url('/login') }}">Login</a></li>
      <li><a href="{{ url('/register') }}">Register</a></li>
    @else
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
          <li>
            <a href="{{ url('/logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              Logout
            </a>

            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
        </ul>
      </li>
    @endif
  </div>

  @yield('content')

  <div class="footer text-center" style="margin: 20px 0 60px 0;">
    <p>&copy; Begin Programming</p>
  </div>
</div>
</body>
<script>
        // loader
      $(window).load(function() {
          $(".loader").fadeOut("slow");
      })

    </script>

</html>
