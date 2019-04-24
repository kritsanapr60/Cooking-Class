@extends('layouts.categorytemplate')


@section('title', 'Bloge Public Home Page')

@section('content')
<header>
    <h2>รายการ  {{ $n }}</h2>
    <hr>
    <div>
      <?php $no=1; ?>
      @foreach($category as $post)
      <div class="alert alert-secondary">
        <a href="{{ route('posts.show', ['id'=>$post->id]) }}"><h3>{{ $post->title }}</h3></a>
        <hr>
        {{-- <p>{{ $post->body }}</p> --}}
        <center>
                <div class="col-md-6 p-b-30">
                        <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                           <img src="{{ asset('images/'.$post->image) }}" alt="IMG-OUR">
                        </div>
                </div>
                </center>
        <br>
        {{-- <center><img src="{{ asset('images/'.$post->image) }}" class="responsive" width="40%" alt="Don't have images to show."></center> --}}
        <hr>
        <p><b>โพสต์โดย : </b>{{ $post->user['name'] }} &nbsp;&nbsp;&nbsp;<b>โพสต์เมื่อ : </b>{{ date('M j, Y h:ia', strtotime($post->create_at)) }}</p>

          <a href="{{ route('posts.show', ['id'=>$post->id]) }}" class="btn btn-outline-danger btn-sm float-right "> <i class="fa fa-sign-in" aria-hidden="true"></i> เเสดงโพสต์</a>
          &nbsp;&nbsp;&nbsp;
      </div>
      <br>
      @endforeach
    </div>

    <div class="row text-center">

    </div>
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</header>
@endsection
