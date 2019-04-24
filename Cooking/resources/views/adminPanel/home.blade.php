@extends('layouts.template')

@section('title', 'Blog Admin Panel')

@section('content')
  <h1>&nbsp;หน้าการจัดการ Blog</h1>
  <hr>
  @if(count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif

@if(\Session::has('success'))
<div class="alert alert-success">
  <p>{{ \Session::get('success') }}</p>
</div>
@endif

<div class="container-fluid">
    <a href="http://localhost:8000" class="btn btn-danger btn-sm">Go Back To Homepage : กลับหน้าหลัก</a>
    <br>
<br>
  <nav class="navbar navbar-expand-lg  bg-warning navbar-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
        <a href="{{ route('posts.create') }}"  class="btn btn-primary pull-right" ><i class="fa fa-plus" aria-hidden="true"></i> Add New Blog Post</a>
        <ul class="navbar-nav ml-auto">
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

        </ul>
      </div>
  </nav>

  <!-- <a href="{{ route('posts.create') }}"  class="btn btn-primary pull-right">Add New Blog Post</a> -->
  <br>

  <table class="table">
    <center><thead>
      <th>id</th>
      <th>title</th>
      <th>body</th>
      <th>image</th>
      <th>create_at</th>
      <th>edit</th>
      <th>delete</th>
    </thead>
  </center>
    <tbody>
      @foreach($posts as $post)
      <tr>
        <th>{{  $post->id }}</th>
        <td>{{ $post->title }}</td>
        <td>{{ strip_tags($post->body) }}</td>
        {{-- images --}}

         {{-- <td><img src="{{ URL::to('/') }}//images/{{ $post->image }}" class="img-thumbnail" width="75" alt="Don't have images to show."></td> --}}
         <td><img src="images/{{ $post->image }}" class="img-thumbnail" width="75" alt="Don't have images to show."></td>
         <td>{{ date('M j, Y h:ia', strtotime($post->create_at)) }}</td>
        <td><a href="{{action('PostController@edit',$post['id'])}}" class="btn btn-warning" data-toggle="tooltip" title="เเก้ไข">Edit</a></td>
        <td>
          <form method="post" class="delete_form" action="{{action('PostController@destroy',$post['id'])}}">
               {{ csrf_field() }}
               <input type="hidden" name="_method" value="DELETE">
               <button href="#" class="btn btn-danger delete_form" data-toggle="tooltip" title="ลบ !!">
                 Delete
               </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.delete_form').on('submit',function(){
        if(confirm("คุณต้องการลบข้อมูลหรือไม่ ?")) {
          return true;
        }
        else {
          return false;
        }
      });
    });
  </script>

<script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
        });
</script>
@endsection
