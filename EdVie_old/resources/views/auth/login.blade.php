@php
    $titlePage="Login";
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }} | {{$titlePage}}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ asset('css/themify-icons/themify-icons.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/login.css' )}}">
    @show
</head>

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
<body>
    <div class="main">
        <form action="" method="POST" class="form" >
            @csrf
            <h3>Đăng nhập</h3>
            <div id="form-1">

                <div class="form-group">
                    <label for="email" class="form-group-label">Email</label></br>
                    <input name="email" type="text" 
                    placeholder ="VD: ab123@gmail.com"  
                    class="form-group-input form-group-input form-control @error('email') is-invalid @enderror"
                    value='{{ old("email") }}'
                />
                </div>
                @error('email')
                    <span  class="error-message" style="color:red;" role="alert">{{$message}}</span>
                @enderror

                <div class="form-group">
                    <label for="password" class="form-group-label">Mật khẩu</label></br>
                    <input name="password" type="password" 
                    placeholder="Nhập mật khẩu" 
                    class="form-group-input form-group-input form-control @error('email') is-invalid @enderror"
                    value='{{ old("password") }}'
                />
                </div>
                @error('password')
                    <span  class="error-message" style="color:red;" role="alert">{{$message}}</span>
                @enderror

                <button class="form-button">Đăng nhập</button>

                {{-- @isset($error)
                    <span class="error-message" style="color:red;" role="alert">{{$error}}</span>
                @endisset --}}
                @if (session('all'))
                    <span class="error-message" style="color:red;" role="alert">{{session('all')}}</span>
                @endif
            </div>
            
            <div id="form-text">
                <h2 class="text1">Hoặc</h2>
            </div>
            <div id="form-2">
                <div id="logo">
                <div class="gg">
                    <img class="img-logo"src="{{asset('img/Google_icon.png')}}" alt="">
                    <p class="text-logo">Tiếp tục với Google</p>
                </div>

                <div class="fb">
                    <img class="img-logo"src="{{asset('img/Facebook_icon.png')}}" alt="">
                    <p class="text-logo">Tiếp tục với Facebook</p>
                </div>
                </div>
            </div>
        </form>
    </div>
</body>
