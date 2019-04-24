@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">
        <div class="col-md-12 float-md-center">
            <div class="alert alert-success">
                    {{-- <img src="/images/{{ Session::get('path') }}" width="300" /> --}}

                    {{-- <img src="{!! asset('img/img_avatar.png') !!}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;" /> --}}
                    {{-- <img src="{{ asset('/images/avatars/'. $user->avatar) }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;"> --}}
                    {{-- <h2>{{ $user->name }}'s Profile</h2> --}}
                    <form enctype="multipart/form-data" action="/profile" method="POST">
                        {{ csrf_field() }}
                        {{-- <label>Update Profile Image</label>
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="pull-right btn btn-sm btn-primary"> --}}
                        <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        <h1>{{ session('status') }}</h1>
                                    </div>
                                @endif
                                <br><br>
                             <center><h1>You are logged in!</h1></center>
                        </div>
                    </form>
                    <br><br>

                </div>
            </div>

</div>
@endsection
