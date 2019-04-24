@extends('layouts.template')

@section('title', 'Add New Blog Post')

{{-- <link rel="stylesheet" type="text/css" href="{{url('css/up_image.css')}}"/>
<script src="{{url('js/up_image.js')}}"></script> --}}

@section('content')
  <div class="col-md-12">
  <h1>สร้างโพสต์เมนูอาหาร</h1>
    <hr style="width: 1000">
  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    @if(session('success'))
      <div class="alert alert-success">
         {{ session('success') }}
      </div>
    @endif
  <div class="col-sm-12 col-sm-offset-2">
    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="title">ชื่อเมนู :</label>
        <input name="title" type="text" class="form-control">
      </div>

      <div class="form-group">
        <label for="title">เลือกประเภทอาหาร :</label>
        <select class="form-control" name="category">
            <option disabled selected>เลือกประเภทอาหาร</option>
            <option value="อาหารหวาน" name="อาหารหวาน">อาหารหวาน</option>
            <option value="อาหารคาว">อาหารคาว</option>
            <option value="เครื่องดื่ม">เครื่องดื่ม</option>
        </select>
     </div>
      <br>
       <div class="form-group">
        <label for="equipment">อุปกรณ์ :</label>
        <textarea name="equipment" type="text" class="form-control"></textarea>
      </div>

      <div class="form-group">
            <label for="garnish">วัตถุดิบ :</label>
            <textarea name="garnish" type="text" class="form-control"></textarea>
          </div>

      <div class="form-group">
        <label for="body">วิธีการทำ :</label>
        <textarea name="body" id="" name="body" cols="30" rows="10" class="form-control"></textarea>
      </div>

      {{-- <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div> --}}

      <div class="input-group">
        {{-- <div class="custon-file">

            <input type="file" class="custom-file-input" name="image" id="exampleFormControlFile1">
            <label class="custom-file-label" for="exampleFormControlFile1"><b>รูปภาพประกอป</b></label>
        </div> --}}

      </div>
      <div class="input-group">
        <label for="exampleFormControlFile1">เลือกรูปภาพ</label>
        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
      </div>
      {{-- <br><div class="container">
        <div class="row">
        <div class="col-sm-2 imgUp">
          <div class="imagePreview"></div>
        <label class="btn btn-primary">
            Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px; height: 0px; overflow: hidden;">
        </label>
        </div><!-- col-2 -->
        <i class="fa fa-plus imgAdd"></i>
       </div><!-- row -->
      </div><!-- container --> --}}
      <hr>
      <button type="submit" class="btn btn-primary">โพสต์</button>
      <a class="btn btn-default pull-right" href="{{ route('posts.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Go Back</a>
    </form>
  </div>
</div>

{{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script> --}}
@section('js')
<script>
        CKEDITOR.replace('article-ckeditor', {
          height: 400,
        });
      </script>
       {{-- <script>
            CKEDITOR.replace('editor1', {

              toolbarGroups: [{
                  "name": "basicstyles",
                  "groups": ["basicstyles"]
                },
                {
                  "name": "links",
                  "groups": ["links"]
                },
                {
                  "name": "paragraph",
                  "groups": ["list", "blocks"]
                },
                {
                  "name": "document",
                  "groups": ["mode"]
                },
                {
                  "name": "insert",
                  "groups": ["insert"]
                },
                {
                  "name": "styles",
                  "groups": ["styles"]
                },
                {
                  "name": "about",
                  "groups": ["about"]
                }
              ],

              removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar'
            });
          </script>
<script>
        CKEDITOR.replace('article-ckeditor', {
          height: 200,

          removeButtons: ''
        });
      </script> --}}
{{-- <script>
        CKEDITOR.replace( 'article-ckeditor', {
            extraPlugins: 'mathjax',
            mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-AMS_HTML',
            height: 320,
            extraPlugins: 'autogrow',
            autoGrow_minHeight: 200,
            autoGrow_maxHeight: 600,
            autoGrow_bottomSpace: 50,
            removePlugins: 'resize',
            height: 200,
            removeButtons: '',
            0extraPlugins: 'widget',
            height: 300,
            height: 250,
            extraPlugins: 'colorbutton',
            colorButton_colors: 'CF5D4E,454545,FFF,CCC,DDD,CCEAEE,66AB16',
            colorButton_enableAutomatic: false
        } );
</script> --}}
@endsection
<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){
          $(this).parents(".control-group").remove();
      });

    });

</script>

@endsection
