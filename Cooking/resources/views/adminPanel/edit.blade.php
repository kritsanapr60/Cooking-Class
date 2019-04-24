@extends('layouts.template')

@section('title', 'Add New Blog Post')

@section('content')
  <div class="continer">
  <h1>เเก้ไข Blog Post</h1>
  @if(count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <div class="col-sm-12 col-sm-offset-2">
    <form action="{{action('PostController@update',$id)}}" method="post">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="title">Title:</label>
        <input name="title" type="text" class="form-control" value="{{$post->title}}">
      </div>


      <div class="form-group">
        <label for="category">เลือกประเภทอาหาร :</label>
        <select class="form-control" name="category" value="{{$post->category}}">
            <option disabled selected>เลือกประเภทอาหาร</option>
            <option value="{{$post->category}}" name="{{$post->category}}">{{$post->category}}</option>
            <option value="อาหารหวาน" name="อาหารหวาน">อาหารหวาน</option>
            <option value="อาหารคาว">อาหารคาว</option>
            <option value="เครื่องดื่ม">เครื่องดื่ม</option>
        </select>

        <div class="form-group">
            <label for="equipment">อุปกรณ์ :</label>
            <input name="equipment" type="text" class="form-control" value="{{$post->equipment}}">
          </div>

          <div class="form-group">
                <label for="garnish">วัตถุดิบ :</label>
                <input name="garnish" type="text" class="form-control" value="{{$post->garnish}}">
              </div>


      <div class="form-group">
        <label for="body">วิธีทำ:</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control" >{{$post->body}}</textarea>
      </div>


    </div>
    {{-- <div class="input-group">
      <label for="exampleFormControlFile1">เลือกรูปภาพ</label>
      <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" >
      <br>
      <img src="{{ asset('images/' . $post->image) }}" alt="IMG-OUR">
    </div> --}}

      <button type="submit" class="btn btn-primary">Submit</button>
      <input type="hidden" name="_method" value="PATCH" />
      <a class="btn btn-default pull-right" href="{{ route('posts.index') }}">Go Back</a>
    </form>
  </div>
  <br>
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <p><b>เขียนโพสเมื่อ : </b>{{ date('M j, Y h:ia', strtotime($post->create_at)) }}</p>
    <p><b>อัพเดตโพสเมื่อ : </b>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
  </div>

</div>
@endsection
