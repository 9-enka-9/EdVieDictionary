@php
    $titlePage="Login";
@endphp

<!DOCTYPE html>
<html lang="vn">
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
<body>
    <div class="main">
        <form action="@if(request()->segment(1)=='ed') {{route('ed.login.post')}} @else {{route('vi.login.post')}} @endif" method="POST" class="form" >
            @csrf
            <h3 style="font-family: 'Quicksand'">Đăng nhập</h3>
            <div class="signin">
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
            </div>
            </form>
    </div>
</body>

{{-- <body>
    <div class="main">
        <form action="" method="POST" class="form" >
            @csrf
            <h3 style="font-family: 'Quicksand'">Đăng nhập</h3>
        <div class="signin">
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
        </div>
        </form>
    </div>
</body> --}}
