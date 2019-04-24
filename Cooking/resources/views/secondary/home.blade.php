<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <!-- bootstrap 4 internal -->
     <!-- <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}"/>
     <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}"/>
     <link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}"/>
     <script src="{{url('js/bootstrap.js')}}"></script>
     <script src="{{url('js/app.js')}}"></script>
     <script src="{{url('js/bootstrap.min.js')}}"></script>
     <script src="{{url('js/bootstrap.js')}}"></script> -->
     <link rel="stylesheet" type="text/css" href="{{url('css/back-to-top.css')}}"/>
    <!-- bootstrap 4 CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <style>
        body {
            padding: 20px;
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
<header>
  <div>
    <div class="row headingBox">
      <div>
          <h1>WELCOM TO COOKING CLASS</h1>
      </div>

      <!-- <div class="loginBox nav navbar-nav">
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
            </li>
        @endguest
      </div> -->
    </div>


      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg  bg-warning navbar-light">
          <a class="navbar-brand" href="#">Cooking</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">หน้าเเรก <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">เกี่ยวกับเรา</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  คอร์สเรียน
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
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
                    </li>
                @endguest
            </ul>
          </div>
      </nav>
      <hr>
  </div>

  <div class="container">
    <!-- Menu หมวดหมู่ต่างๆ -->
    <!-- <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Sort By
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Top 10 Most Recent Post</a>
        <a class="dropdown-item" href="#">Top 10 Most Like Post</a>
        <a class="dropdown-item" href="#">Top 10 Most Commented Post</a>
        <a class="dropdown-item" href="#">Top 10 Most Visited Post</a>
      </div>

        <a href="#" class="text-right">Manager Blog Post</a>
    </div> -->

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sort By
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Top 10 Most Recent Post</a>
            <a class="dropdown-item" href="#">Top 10 Most Like Post</a>
            <a class="dropdown-item" href="#">Top 10 Most Commented Post</a>
            <a class="dropdown-item" href="#">Top 10 Most Visited Post</a>
          </div>
          @if(Auth::check())
            <a href="{{  route('posts.index') }}" class="text-right">Manager Blog Post</a>
          @endif
        </div>
      </ol>
    </nav>
    <!-- <nav class="navbar navbar-default">
      <div class="container-fluid">

      </div>
      <ul class="nav navbar-nav">
        <li><a href="#">Top 10 Most Recent Post</a></li>
        <li><a href="#">Top 10 Most Like Post</a></li>
        <li><a href="#">Top 10 Most Commented Post</a></li>
        <li><a href="#">Top 10 Most Visited Post</a></li>
      </ul>
    </nav> -->
    <!-- end Navbar -->
    <hr>
    <div>
        <h2>Top 10 Most Recent Blogs</h2>

        <div class="alert alert-secondary ">
          <h3>Blog Post Title</h3>
          <p>
เหตุผลดีๆ ที่อยากให้คุณ ทำอาหารทานเอง

25th September 2015 ประหยัดเงิน , มนุษย์เงินเดือน , วิธีออมเงิน
เพราะการทำอาหารคือ สิ่งหนึ่งที่จะช่วยในเรื่องของการผ่อนคลายความเครียดได้  ไม่ว่าจะเป็นการรับประทานอาหาร หรือการทำอาหาร ที่บางคนบอกว่าคือการช่วยคลายเครียด ซึ่งบางคนที่เกิดอาการเครียดจึงหาทางออกด้วยการทำอาหารและการรับประทานอาหาร

เคยได้ยินหรือไม่เวลาสาวๆ อกหัก มักจะใช้วิธีการกิน ๆๆ เพื่อทำให้ลืมทุกอย่าง และสิ่งที่ตามมาด้วยก็คือน้ำหนักที่เพิ่มขึ้นนั่นเอง ส่วนใครที่เครียดแล้วหันไปทำอาหาร ก็เพราะว่าจะทำให้จิตใจเย็นลง สงบลง และมีสมาธิในการปรุงแต่ง และคัดสรรวัตถุดิบต่างๆ เพื่อให้อาหารออกมามีหน้าตาน่ารับประทาน และรสชาติดี การได้ทำอะไรในสิ่งที่ตัวเองรักเป็นเวลาช่วงขณะหนึ่ง จะทำให้มีความสุขและลืมความทุกข์ไปได้
          </p>
        </div>
        <br>
        <div class="alert alert-secondary ">
          <h3>Blog Post Title</h3>
          <p>
เหตุผลดีๆ ที่อยากให้คุณ ทำอาหารทานเอง

25th September 2015 ประหยัดเงิน , มนุษย์เงินเดือน , วิธีออมเงิน
เพราะการทำอาหารคือ สิ่งหนึ่งที่จะช่วยในเรื่องของการผ่อนคลายความเครียดได้  ไม่ว่าจะเป็นการรับประทานอาหาร หรือการทำอาหาร ที่บางคนบอกว่าคือการช่วยคลายเครียด ซึ่งบางคนที่เกิดอาการเครียดจึงหาทางออกด้วยการทำอาหารและการรับประทานอาหาร

เคยได้ยินหรือไม่เวลาสาวๆ อกหัก มักจะใช้วิธีการกิน ๆๆ เพื่อทำให้ลืมทุกอย่าง และสิ่งที่ตามมาด้วยก็คือน้ำหนักที่เพิ่มขึ้นนั่นเอง ส่วนใครที่เครียดแล้วหันไปทำอาหาร ก็เพราะว่าจะทำให้จิตใจเย็นลง สงบลง และมีสมาธิในการปรุงแต่ง และคัดสรรวัตถุดิบต่างๆ เพื่อให้อาหารออกมามีหน้าตาน่ารับประทาน และรสชาติดี การได้ทำอะไรในสิ่งที่ตัวเองรักเป็นเวลาช่วงขณะหนึ่ง จะทำให้มีความสุขและลืมความทุกข์ไปได้
          </p>
        </div>
        <br>
        <div class="alert alert-secondary ">
          <h3>Blog Post Title</h3>
          <p>
เหตุผลดีๆ ที่อยากให้คุณ ทำอาหารทานเอง

25th September 2015 ประหยัดเงิน , มนุษย์เงินเดือน , วิธีออมเงิน
เพราะการทำอาหารคือ สิ่งหนึ่งที่จะช่วยในเรื่องของการผ่อนคลายความเครียดได้  ไม่ว่าจะเป็นการรับประทานอาหาร หรือการทำอาหาร ที่บางคนบอกว่าคือการช่วยคลายเครียด ซึ่งบางคนที่เกิดอาการเครียดจึงหาทางออกด้วยการทำอาหารและการรับประทานอาหาร

เคยได้ยินหรือไม่เวลาสาวๆ อกหัก มักจะใช้วิธีการกิน ๆๆ เพื่อทำให้ลืมทุกอย่าง และสิ่งที่ตามมาด้วยก็คือน้ำหนักที่เพิ่มขึ้นนั่นเอง ส่วนใครที่เครียดแล้วหันไปทำอาหาร ก็เพราะว่าจะทำให้จิตใจเย็นลง สงบลง และมีสมาธิในการปรุงแต่ง และคัดสรรวัตถุดิบต่างๆ เพื่อให้อาหารออกมามีหน้าตาน่ารับประทาน และรสชาติดี การได้ทำอะไรในสิ่งที่ตัวเองรักเป็นเวลาช่วงขณะหนึ่ง จะทำให้มีความสุขและลืมความทุกข์ไปได้
          </p>
        </div>
        <br>
        <div class="alert alert-secondary ">
          <h3>Blog Post Title</h3>
          <p>
เหตุผลดีๆ ที่อยากให้คุณ ทำอาหารทานเอง

25th September 2015 ประหยัดเงิน , มนุษย์เงินเดือน , วิธีออมเงิน
เพราะการทำอาหารคือ สิ่งหนึ่งที่จะช่วยในเรื่องของการผ่อนคลายความเครียดได้  ไม่ว่าจะเป็นการรับประทานอาหาร หรือการทำอาหาร ที่บางคนบอกว่าคือการช่วยคลายเครียด ซึ่งบางคนที่เกิดอาการเครียดจึงหาทางออกด้วยการทำอาหารและการรับประทานอาหาร

เคยได้ยินหรือไม่เวลาสาวๆ อกหัก มักจะใช้วิธีการกิน ๆๆ เพื่อทำให้ลืมทุกอย่าง และสิ่งที่ตามมาด้วยก็คือน้ำหนักที่เพิ่มขึ้นนั่นเอง ส่วนใครที่เครียดแล้วหันไปทำอาหาร ก็เพราะว่าจะทำให้จิตใจเย็นลง สงบลง และมีสมาธิในการปรุงแต่ง และคัดสรรวัตถุดิบต่างๆ เพื่อให้อาหารออกมามีหน้าตาน่ารับประทาน และรสชาติดี การได้ทำอะไรในสิ่งที่ตัวเองรักเป็นเวลาช่วงขณะหนึ่ง จะทำให้มีความสุขและลืมความทุกข์ไปได้
          </p>
        </div>
        <br>
        <div class="alert alert-secondary ">
          <h3>Blog Post Title</h3>
          <p>
เหตุผลดีๆ ที่อยากให้คุณ ทำอาหารทานเอง

25th September 2015 ประหยัดเงิน , มนุษย์เงินเดือน , วิธีออมเงิน
เพราะการทำอาหารคือ สิ่งหนึ่งที่จะช่วยในเรื่องของการผ่อนคลายความเครียดได้  ไม่ว่าจะเป็นการรับประทานอาหาร หรือการทำอาหาร ที่บางคนบอกว่าคือการช่วยคลายเครียด ซึ่งบางคนที่เกิดอาการเครียดจึงหาทางออกด้วยการทำอาหารและการรับประทานอาหาร

เคยได้ยินหรือไม่เวลาสาวๆ อกหัก มักจะใช้วิธีการกิน ๆๆ เพื่อทำให้ลืมทุกอย่าง และสิ่งที่ตามมาด้วยก็คือน้ำหนักที่เพิ่มขึ้นนั่นเอง ส่วนใครที่เครียดแล้วหันไปทำอาหาร ก็เพราะว่าจะทำให้จิตใจเย็นลง สงบลง และมีสมาธิในการปรุงแต่ง และคัดสรรวัตถุดิบต่างๆ เพื่อให้อาหารออกมามีหน้าตาน่ารับประทาน และรสชาติดี การได้ทำอะไรในสิ่งที่ตัวเองรักเป็นเวลาช่วงขณะหนึ่ง จะทำให้มีความสุขและลืมความทุกข์ไปได้
          </p>
        </div>
        <br>
        <div class="alert alert-secondary ">
          <h3>Blog Post Title</h3>
          <p>
เหตุผลดีๆ ที่อยากให้คุณ ทำอาหารทานเอง

25th September 2015 ประหยัดเงิน , มนุษย์เงินเดือน , วิธีออมเงิน
เพราะการทำอาหารคือ สิ่งหนึ่งที่จะช่วยในเรื่องของการผ่อนคลายความเครียดได้  ไม่ว่าจะเป็นการรับประทานอาหาร หรือการทำอาหาร ที่บางคนบอกว่าคือการช่วยคลายเครียด ซึ่งบางคนที่เกิดอาการเครียดจึงหาทางออกด้วยการทำอาหารและการรับประทานอาหาร

เคยได้ยินหรือไม่เวลาสาวๆ อกหัก มักจะใช้วิธีการกิน ๆๆ เพื่อทำให้ลืมทุกอย่าง และสิ่งที่ตามมาด้วยก็คือน้ำหนักที่เพิ่มขึ้นนั่นเอง ส่วนใครที่เครียดแล้วหันไปทำอาหาร ก็เพราะว่าจะทำให้จิตใจเย็นลง สงบลง และมีสมาธิในการปรุงแต่ง และคัดสรรวัตถุดิบต่างๆ เพื่อให้อาหารออกมามีหน้าตาน่ารับประทาน และรสชาติดี การได้ทำอะไรในสิ่งที่ตัวเองรักเป็นเวลาช่วงขณะหนึ่ง จะทำให้มีความสุขและลืมความทุกข์ไปได้
          </p>
        </div>
        <br>
        <div class="alert alert-secondary ">
          <h3>Blog Post Title</h3>
          <p>
เหตุผลดีๆ ที่อยากให้คุณ ทำอาหารทานเอง

25th September 2015 ประหยัดเงิน , มนุษย์เงินเดือน , วิธีออมเงิน
เพราะการทำอาหารคือ สิ่งหนึ่งที่จะช่วยในเรื่องของการผ่อนคลายความเครียดได้  ไม่ว่าจะเป็นการรับประทานอาหาร หรือการทำอาหาร ที่บางคนบอกว่าคือการช่วยคลายเครียด ซึ่งบางคนที่เกิดอาการเครียดจึงหาทางออกด้วยการทำอาหารและการรับประทานอาหาร

เคยได้ยินหรือไม่เวลาสาวๆ อกหัก มักจะใช้วิธีการกิน ๆๆ เพื่อทำให้ลืมทุกอย่าง และสิ่งที่ตามมาด้วยก็คือน้ำหนักที่เพิ่มขึ้นนั่นเอง ส่วนใครที่เครียดแล้วหันไปทำอาหาร ก็เพราะว่าจะทำให้จิตใจเย็นลง สงบลง และมีสมาธิในการปรุงแต่ง และคัดสรรวัตถุดิบต่างๆ เพื่อให้อาหารออกมามีหน้าตาน่ารับประทาน และรสชาติดี การได้ทำอะไรในสิ่งที่ตัวเองรักเป็นเวลาช่วงขณะหนึ่ง จะทำให้มีความสุขและลืมความทุกข์ไปได้
          </p>
        </div>
        <br>
        <div class="alert alert-secondary ">
          <h3>Blog Post Title</h3>
          <p>
เหตุผลดีๆ ที่อยากให้คุณ ทำอาหารทานเอง

25th September 2015 ประหยัดเงิน , มนุษย์เงินเดือน , วิธีออมเงิน
เพราะการทำอาหารคือ สิ่งหนึ่งที่จะช่วยในเรื่องของการผ่อนคลายความเครียดได้  ไม่ว่าจะเป็นการรับประทานอาหาร หรือการทำอาหาร ที่บางคนบอกว่าคือการช่วยคลายเครียด ซึ่งบางคนที่เกิดอาการเครียดจึงหาทางออกด้วยการทำอาหารและการรับประทานอาหาร

เคยได้ยินหรือไม่เวลาสาวๆ อกหัก มักจะใช้วิธีการกิน ๆๆ เพื่อทำให้ลืมทุกอย่าง และสิ่งที่ตามมาด้วยก็คือน้ำหนักที่เพิ่มขึ้นนั่นเอง ส่วนใครที่เครียดแล้วหันไปทำอาหาร ก็เพราะว่าจะทำให้จิตใจเย็นลง สงบลง และมีสมาธิในการปรุงแต่ง และคัดสรรวัตถุดิบต่างๆ เพื่อให้อาหารออกมามีหน้าตาน่ารับประทาน และรสชาติดี การได้ทำอะไรในสิ่งที่ตัวเองรักเป็นเวลาช่วงขณะหนึ่ง จะทำให้มีความสุขและลืมความทุกข์ไปได้
          </p>
        </div>
        <br>
        <div class="alert alert-secondary ">
          <h3>Blog Post Title</h3>
          <p>
เหตุผลดีๆ ที่อยากให้คุณ ทำอาหารทานเอง

25th September 2015 ประหยัดเงิน , มนุษย์เงินเดือน , วิธีออมเงิน
เพราะการทำอาหารคือ สิ่งหนึ่งที่จะช่วยในเรื่องของการผ่อนคลายความเครียดได้  ไม่ว่าจะเป็นการรับประทานอาหาร หรือการทำอาหาร ที่บางคนบอกว่าคือการช่วยคลายเครียด ซึ่งบางคนที่เกิดอาการเครียดจึงหาทางออกด้วยการทำอาหารและการรับประทานอาหาร

เคยได้ยินหรือไม่เวลาสาวๆ อกหัก มักจะใช้วิธีการกิน ๆๆ เพื่อทำให้ลืมทุกอย่าง และสิ่งที่ตามมาด้วยก็คือน้ำหนักที่เพิ่มขึ้นนั่นเอง ส่วนใครที่เครียดแล้วหันไปทำอาหาร ก็เพราะว่าจะทำให้จิตใจเย็นลง สงบลง และมีสมาธิในการปรุงแต่ง และคัดสรรวัตถุดิบต่างๆ เพื่อให้อาหารออกมามีหน้าตาน่ารับประทาน และรสชาติดี การได้ทำอะไรในสิ่งที่ตัวเองรักเป็นเวลาช่วงขณะหนึ่ง จะทำให้มีความสุขและลืมความทุกข์ไปได้
          </p>
        </div>
        <br>
        <div class="alert alert-secondary ">
          <h3>Blog Post Title</h3>
          <p>
เหตุผลดีๆ ที่อยากให้คุณ ทำอาหารทานเอง

25th September 2015 ประหยัดเงิน , มนุษย์เงินเดือน , วิธีออมเงิน
เพราะการทำอาหารคือ สิ่งหนึ่งที่จะช่วยในเรื่องของการผ่อนคลายความเครียดได้  ไม่ว่าจะเป็นการรับประทานอาหาร หรือการทำอาหาร ที่บางคนบอกว่าคือการช่วยคลายเครียด ซึ่งบางคนที่เกิดอาการเครียดจึงหาทางออกด้วยการทำอาหารและการรับประทานอาหาร

เคยได้ยินหรือไม่เวลาสาวๆ อกหัก มักจะใช้วิธีการกิน ๆๆ เพื่อทำให้ลืมทุกอย่าง และสิ่งที่ตามมาด้วยก็คือน้ำหนักที่เพิ่มขึ้นนั่นเอง ส่วนใครที่เครียดแล้วหันไปทำอาหาร ก็เพราะว่าจะทำให้จิตใจเย็นลง สงบลง และมีสมาธิในการปรุงแต่ง และคัดสรรวัตถุดิบต่างๆ เพื่อให้อาหารออกมามีหน้าตาน่ารับประทาน และรสชาติดี การได้ทำอะไรในสิ่งที่ตัวเองรักเป็นเวลาช่วงขณะหนึ่ง จะทำให้มีความสุขและลืมความทุกข์ไปได้
          </p>
        </div>
        <br>
    </div>

  </div>
</header>
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
</script>
  </body>
</html>
