<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | {{$titlePage}}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @yield('css')

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/eef555952d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
        @section('header')
            <div id="header">
                <div id="container">
                    <ul id="navbar">
                        <li>
                            <a href="{{route('home')}}">
                                <i class="icon ti-home"></i>
                                <span class="text">Trang chủ</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('news')}}">
                                <i class="icon ti-ink-pen"></i>
                                <span class="text">Tin tức</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('blog')}}">
                                <i class="icon ti-book"></i>
                                <span class="text">Bài viết</span>
                            </a>
                        </li>
                    </ul>
                    <div id="logo">
                        <a href="{{route('home')}}">
                            <h1 class="text">EdVie</h1>
                        </a>
                    </div>
                    <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                    @guest
                        {{-- @if (Route::has('login') && Route::has('register')) --}}
                        <div id="end_nav">
                            <div id="log_in">
                                <i class="icon ti-user"></i>
                                <a href="{{route('login')}}" class="sign_in">Đăng nhập</a>
                                <span class="line">|</span>
                                <a href="{{route('signup')}}" class="sign_up">Đăng ký</a>
                            </div>
                            <div id="language">
                                <i class="icon ti-world"></i>
                            </div>
                        </div>
                        {{-- @endif --}}
                    @else
                        <div class="end_nav" style="display: flex">
                            <div class="dropdown">
                                <div style="font-size: 20px; color: rgb(255, 255, 255);" class="dropbtn"> <i class="ti-user"></i> {{ Auth::user()->fullname }}</div>
                                <div class="frame-dropdown">
                                    <div class="dropdown-content">
                                    <a href=""> <i style="margin-right: 10px;" class="icon fa-solid fa-bookmark"></i> Lưu từ</a>
                                    <a href=""> <i style="margin-right: 10px;" class="icon fa-solid fa-key"></i> Thay đổi mật khẩu</a>
                                    <a href="{{route('logout')}}"> <i style="margin-right: 10px;" class="icon fa-solid fa-right-from-bracket"></i> Đăng xuất</a>
                                    </div>
                                </div>
                            </div>
                            <div id="language">
                                <i class="icon ti-world"></i>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>
        @show


        <main>
            @yield('content')
        </main>
    </div>
    @yield('scripts')
</body>
</html>
