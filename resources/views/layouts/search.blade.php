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
    <meta name="keywords" content="Từ điển Ê-đê-Việt, Từ điển ede, từ điển Êđê-Việt, từ điển Êđê, 
    Từ điển Ê-đê, Ed-Vie, ede-viet, edviet, edvie, Từ điển tiếng Việt, từ điển tiếng Ê-đê, từ điên 
    Êđê, từ điển E-đe, EdVie" >
    <meta name="description" content="Từ điển Ed-Vie là một từ điển online giúp người dùng dễ dàng
    tra nghĩa từ tiếng Ê-đê sang tiếng Việt và tiếng Việt sang Ê-đê. Ngoài ra trang web còn có các 
    chức năng khác nhằm giúp người dùng hiểu thêm về văn hóa, xã hội,... Ê-đê" > 

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="creator" content="thoden.it" />
    <meta name="author" content="Ed-Vie" />
    <meta name="copyright" content="Copyright Ed-Vie" />
    <meta name="googlebot" content="index, follow" />
    <meta name="msnbot" content="index, follow" />
    <meta http-equiv="Expires" content="0" />
    <meta property="og:title" content="Từ điển Êđê-Việt"/>
    <meta property='og:site_name' content='https://ed-vie.com/'/>
    <meta property='og:type' content='Website'/>
    <meta property="og:image" content="assests\img/bia.png"/>
    <meta property="og:image:width" content="620" />
    <meta property="og:image:height" content="430" />
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
    {{-- <meta {{ csrf_field() }}/> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | 
    @isset($errorMsg)
        Không tìm thấy từ này
    @else 
        @if (isset($lang))
            {{$foundWord['nghia_1']}}
        @else
            {{$foundWord['tu']}}
        @endif 
    @endisset</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/eef555952d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   
</head>

<body>
    <div id="app">
        <div id="page">
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
                                    <span class="text">{{__('news')}}</span>
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
                        <!-- Right Side Of Navbar -->
                            <!-- Authentication Links -->
                        @guest
                            {{-- @if (Route::has('login') && Route::has('register')) --}}
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
                                    <div style="font-size: 20px; color: rgb(255, 255, 255);" class="dropbtn"> <i class="ti-user"></i> {{ Auth::user()->fullname }}</div>
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

                    <form action="@if(request()->segment(1)==='ed') {{route('ed.toSearch')}} @else {{route('vi.toSearch')}} @endif" class="search" method="POST"
                    style="display: flex; align-items: center; justify-content: center;   margin-top: 20px;">
                        @csrf
                        <div class="header_search">
                            <input name="search" type="text" placeholder="{{__('search vi-ed')}}" class="input" />
                            <input type="hidden" name="lang" id='lang'>                  
                            <select class="header_select" onchange="ed_vi()">
                                <option class="header_search-select-label" >{{__('vi')}}</option>       
                                <option class="header_search-select-label" >{{__('ed')}}</option>
                            </select>
                        </div>
                        <script>
                            function ed_vi(){
                                const lang=document.getElementById('lang');
                                if (lang.value==='ede'){
                                    lang.value='vi';
                                } else {
                                    lang.value='ede';
                                }
                            }
                        </script>
                        <button type="submit" id="search_icon" class="search_icon">
                            <i class="ti-search"></i>
                        </button>
                    </form>
                </div>
            @show

            <main style="margin-top: 20vh;">
                @if (isset($errorMsg))
                    <div class="frame">
                        <div onclick="getAudio();" class="frame-word"> 
                            <div id="word">{{$word}} </div>
                            <i style="margin-left: 5px;" class="fa-solid fa-volume-high" ></i>
                        </div>
                            {{-- Audio --}}
                            <div id="player" >
                                <audio autoplay style="cursor: pointer;">
                                    <source src="getAudio();">
                                </audio>
                            </div>
                            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                            <script>
                                function getAudio(){
                                    var search = document.getElementById("word").innerHTML;
                                    var first = 'https://translate.google.com.vn/translate_tts?ie=UTF-8&client=tw-ob&q=';
                                    var third ='&tl=vi'
                                    var play = first.concat(search,third);
                                    play = btoa(play);
                                    var fourth = 'data:audio/mpeg;base64,';
                                    play = fourth.concat(play);
                                    var audio=new Audio(play);
                                    audio.play();
                                }
                            </script>
                            {{-- <script>
                                const speech = document.getElementById("speech_ede");
                                function phat(){
                                    speech.play();
                                }
                            </script> --}}
                        <div class="error-msg headline">{{ $errorMsg }}</div>
                    </div>
                @else
                    <div class="frame">
                        <div onclick="getAudio();" class="frame-word"> 
                            <div id="word">
                            @if (isset($lang))
                                {{$foundWord['nghia_1']}}
                            @else
                                {{$foundWord['tu']}}
                            @endif     
                            </div>
                            <i onclick="getAudio();" style="margin-left: 5px;" class="fa-solid fa-volume-high"></i>
                        </div>

                        <div id="player" onclick="">
                            <media autoplay>
                                <source src="">
                            </media>
                        </div>
                        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                        <div class="save_word">
                            <i class="icon fa-solid fa-bookmark"></i>
                        </div>
                        <div class="line"></div>
                        <div class="frame_content">
                            @if (isset($lang))
                                <div class="frame_content-means">
                                    @if (isset($numbOfDef))
                                        <div class="headline">Nghĩa:</div>
                                        <div class="text"> {{$foundWord['tu']}} </div>
                                    @else
                                        <div class="text"> {{$errorWord}} </div>
                                    @endif
                                </div>
                            @else
                                <div class="frame_content-means">
                                    @if (isset($numbOfDef))
                                        <div class="headline">Nghĩa:</div>
                                        @for ($i = 1; $i <= $numbOfDef; $i++)
                                            <div class="text"> {{$foundWord["nghia_".$i]}} </div>
                                        @endfor
                                    @else
                                        <div class="text"> {{$errorWord}} </div>
                                    @endif
                                </div>
                            @endif

                            <div class="line"></div>
                            <div class="frame_content-example">
                                @if (!isset($lang))
                                    @if (isset($numbOfExa))
                                        <div class="headline">Ví dụ:</div>    
                                        @for ($i = 1; $i <= $numbOfExa; $i++)
                                            <div class="text"> {{$foundWord["cau_vd_".$i]}} : {{$foundWord["nghia_cau_vd_".$i]}} </div>
                                        @endfor
                                    @else
                                        <div class="headline">{{$errorExa}}</div>
                                    @endif
                                @else
                                    @if (isset($numbOfExa))
                                        <div class="headline">Ví dụ:</div>    
                                        @for ($i = 1; $i <= $numbOfExa; $i++)
                                            <div class="text"> {{$foundWord["nghia_cau_vd_".$i]}} : {{$foundWord["cau_vd_".$i]}} </div>
                                        @endfor
                                    @else
                                        <div class="headline">{{$errorExa}}</div>
                                    @endif
                                @endif

                            </div>
                        </div>
                    </div> 
                @endif
                
            </main>
        </div>
        @includeIf('layouts.footer')
    </div>
    @yield('scripts')
</body>
</html>
