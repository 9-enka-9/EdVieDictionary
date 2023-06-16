<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DWF7MVBZ2N"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-DWF7MVBZ2N');
    </script>
    <link rel="icon" type="image/x-icon" href="../img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | {{$titlePage}}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
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
    <div id="post">
        @section('header')
        <div id="header">
            <div id="container">
                <ul id="navbar">
                    <li>
                        <a href="@if(request()->segment(1)==='ed') {{route('ed.home')}} @else {{route('vi.home')}} @endif">
                            <i class="icon ti-home"></i>
                            <span class="text">{{__('home page')}}</span>
                        </a>
                    </li>
                    <li>
                        <a href="@if(request()->segment(1)==='ed') {{route('ed.news')}} @else {{route('vi.news')}} @endif">
                            <i class="icon ti-ink-pen"></i>
                            <span class="text">{{__("news")}}</span>
                        </a>
                    </li>
                    <li>
                        <a href="@if(request()->segment(1)==='ed') {{route('ed.blog')}} @else {{route('vi.blog')}} @endif">
                            <i class="icon ti-book"></i>
                            <span class="text">{{__('blog')}}</span>
                        </a>
                    </li>
                </ul>
                <div id="logo">
                    <a href="@if(request()->segment(1)==='ed') {{route('ed.home')}} @else {{route('vi.home')}} @endif">
                        <h1 class="text">EdVie</h1>
                    </a>
                </div>
                @guest
                    <div id="end_nav">
                        <div id="log_in">
                            <i class="icon ti-user"></i>
                            <a href="@if(request()->segment(1)==='ed') {{route('ed.login')}} @else {{route('vi.login')}} @endif" class="sign_in">{{__('login')}}</a>
                            <span class="line">|</span>
                            <a href="@if(request()->segment(1)==='ed') {{route('ed.signup')}} @else {{route('vi.signup')}} @endif" class="sign_up">{{__('register')}}</a>
                        </div>
                        <div id="language">
                            <i class="icon ti-world"></i> 
                            <button class="btn-language" href="">
                                <a name="lang" value="@if(request()->segment(1)==='vi') {{'vi'}} @else {{'ed'}} @endif" href="{{route('changeLang')}}">@if(request()->segment(1)==='vi') Tiếng Êđê @else Tiếng Việt @endif </a>
                            </button>
                        </div>
                    </div>
                    {{-- @endif --}}
                @else
                    <div class="end_nav" style="display: flex">
                        <div class="dropdown">
                            <i class="ti-user" style="font-size: 20px; color: rgb(255, 255, 255); margin-right:10px;"></i>
                            <div style="font-size: 20px; color: rgb(255, 255, 255);" class="dropbtn"> {{ Auth::user()->fullname }}</div>
                            <div class="frame-dropdown">
                                <div class="dropdown-content">
                                <a href=""> <i style="margin-right: 10px;" class="icon fa-solid fa-bookmark"></i> Lưu từ</a>
                                <a href=""> <i style="margin-right: 10px;" class="icon fa-solid fa-key"></i> Thay đổi mật khẩu</a>
                                <a href="@if(request()->segment(1)==='ed') {{route('ed.logout')}} @else {{route('vi.logout')}} @endif"> <i style="margin-right: 10px;" class="icon fa-solid fa-right-from-bracket"></i> Đăng xuất</a>
                                </div>
                            </div>
                        </div>
                        <div id="language">
                            <i class="icon ti-world"></i> 
                            <button class="btn-language" href="">
                                <a name="lang" value="@if(request()->segment(1)==='vi') {{'vi'}} @else {{'ed'}} @endif" href="{{route('changeLang')}}">@if(request()->segment(1)==='vi') Tiếng Êđê @else Tiếng Việt @endif </a>
                            </button>
                        </div>
                    </div>
                @endguest
            </div>
        </div>
        @show

        <main>
            @yield('content')
            @includeIf('layouts.footer');
        </main>
    </div>
    @yield('scripts')
</body>
</html>
