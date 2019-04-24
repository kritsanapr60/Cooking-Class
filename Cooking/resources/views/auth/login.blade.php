@extends('layouts.app')
<style>
    .card-body {
        background-color: #C9ECFF;
    }
</style>
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary"> --}}
                                    {{-- {{ __('Login') }} --}}
                                     {{-- เข้าสู่ระบบ
                                </button>

                                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}"> --}}
                                        {{-- {{ __('Forgot Your Password?') }} --}}
                                         {{-- ลืมรหัสผ่าน
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<center>
<div class="container">
    	<div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100">
                        <div class="login100-form-title" style="background-image: url({!! asset('img/bg-01.jpg') !!});">
                            <span class="login100-form-title-1">
                                Sign In
                            </span>
                        </div>

                        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                                @csrf
                            <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                                <span class="label-input100">Email</span>
                                <input class="input100" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter username">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <span class="focus-input100"></span>
                            </div>

                            <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                                <span class="label-input100">Password</span>
                                <input class="input100" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Enter password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <span class="focus-input100"></span>
                            </div>

                            <div class="flex-sb-m w-full p-b-30">
                                <div class="contact100-form-checkbox">
                                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="label-checkbox100" for="ckb1">
                                        Remember me
                                    </label>
                                </div>

                                <div>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{-- {{ __('Forgot Your Password?') }} --}}
                                            ลืมรหัสผ่าน
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn">
                                    Login
                                </button>
                                {{-- <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                         เข้าสู่ระบบ
                                </button> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</div>
</center>
@endsection
