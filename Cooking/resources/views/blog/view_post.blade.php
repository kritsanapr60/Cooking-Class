@extends('layouts.viewPostTemplate')

@section('title', 'View Post #'. $id)
<link rel="stylesheet" type="text/css" href="{{url('css/like.css')}}"/>
<script src="{{url('js/like.js')}}"></script>

{{-- <style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style> --}}
@section('content')
<!-- <div class="container-fluid">
    <div class="first-div-inner"><img style='height: 100%; width: 100%; object-fit: contain' src="{!! asset('img/benner2.png') !!}"/></div>
</div> -->
<br>
<div class="container-fluid">
  <a href="http://localhost:8000" class="btn btn-danger btn-sm">Go Back To Homepage : กลับหน้าหลัก</a>
</div>
  <br>

<div class="container-fluid">
  <div class="alert alert-warning">
    <h1 style="color: #00A2FF; text-decoration: underline;">{{ $post->title }}</h1><hr>
    <p><b>ประเภท :</b> {{ $post->category }}</p>
    <p><b>อุปกรณ์ :</b> {{ $post->equipment }}</p>
    <p><b>เครื่องปรุง :</b> {{ $post->garnish }}</p>
    <p><b>วิธีการทำ :</b> {{ strip_tags($post->body) }}</p>
    <br>
    {{-- @foreach( $posts as $key => $img) --}}
    {{-- <center><img src="images/ {{ $post->image }}"></center></center> --}}
    {{-- <center><img src="{{ asset('images/' . $post->image) }}" class="responsive" width="50%" alt="Don't have images to show."></center> --}}
    <center>
            <div class="col-md-8 p-b-30">
                    <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src="{{ asset('images/' . $post->image) }}" alt="IMG-OUR">
                    </div>
            </div>
    </center>
    {{-- @endforeach --}}
    <p></p>
    <p><b>โพสต์โดย : </b>{{ $post->user['name'] }} &nbsp;&nbsp;&nbsp;<b>เขียนโพสต์เมื่อ :</b> {{ $post->created_at }}</p>
    {{-- <hr> --}}
    {{-- <a href="#">Like</a> |
    <a href="#">Dislike</a> --}}
    <div id="all">
        <div id="bar">
            <div id="likes"></div>
            <div id="dislikes"></div>
        </div>
        <br>
        <input type="button" class="btn btn-primary" value="Like" id="likeButton" onclick="like();"/>
        <input type="button" class="btn btn-danger" value="Dislike" id="dislikeButton" onclick="dislike();"/>
    </div>
    @if(Auth::check())
    <div class="R pull-right">
        @if(in_array($user_id,$user_like))
        {{ csrf_field() }}
         <a class="icon" href="{{ route('like.unlike',$post->id) }}">
            <p><b>คุณถูกใจสิ่งนี้</b> &nbsp;<img class="icon" src="{{{ asset('img/likepng.png') }}}" width="20" height="20"/></p>
        </a>
         @else
        <a href="{{ route('like.addlike',$post->id) }}">
            <img class="icon" src="{{{ asset('img/unlikepng.png') }}}" width="20" height="20"/>
        </a>
         @endif

    </div>
    @endif
    <br>
  </div>
</div>
</div>

@if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> ยังไม่ได้ Login !!!<br><br>
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    @if(session('success'))
      <div class="alert alert-danger">
         {{ session('success') }}
      </div>
    @endif

<div class="container">
        <h3>คอมเมนต์</h3>

            <div class="alert alert-primary">
                    @include('partials._comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])
            </div>




     <hr />
     <h4>เขียนคอมเมนต์</h4>

     <form method="post" action="{{ route('comment.add') }}">
         @csrf
         <div class="form-group">
             <textarea type="textarea" name="comment_body" class="form-control" rows="5" required /></textarea>
             <input type="hidden" name="post_id" value="{{ $post->id }}" />
         </div>
         <div class="form-group">
             <button type="submit" class="btn btn-success" value="คอมเมนต์" /><i class="fa fa-pencil" aria-hidden="true"></i> คอมเมนต์</button>
         </div>
     </form>
     <br>
     <br>
</div>

@endsection
