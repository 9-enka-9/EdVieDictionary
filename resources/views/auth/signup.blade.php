<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ asset('css/themify-icons/themify-icons.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @section('css')
    <link rel="stylesheet" href="{{asset('css/register.css')}}">

    @endsection     
    @yield('css')
</head>

<body>

    @section('content')
    <div class="main">

        <form  class="form" action="@if(request()->segment(1)==='ed') {{route('ed.signup.post')}} @else {{route('vi.signup.post')}} @endif" method="POST">
            <h3>Đăng kí</h3>   
            <div class="signup">

            <div id="form-1" >
                <div class="form-group" >
                    <label for="fullname" class="form-group-label">Tên đầy đủ</label></br>
                    <div>
                        <input name="fullname" 
                        type="text" 
                        placeholder="VD: Phạm Hiền Oanh" 
                        class="form-group-input form-control @error('fullname') is-invalid @enderror"
                        value="{{ old('fullname') }}"
                        autocomplete="fullname"
                        autofocus
                        required 
                        value="delete"
                        />
                    </div>
                    @error('fullname')
                        <span  class="error-message" style="color:red;" role="alert">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group" >
                    <label for="email" class="form-group-label">Email</label></br>
                    <div>
                        <input name="email" 
                        type="text" 
                        placeholder ="VD: ab123@gmail.com"  
                        class="form-group-input form-control @error('email') is-invalid @enderror"
                        id="password" 
                        value="{{ old('email') }}"
                        autocomplete="email"
                        autofocus
                        required
                        value={{csrf_token()}}
                        />
                    </div>
                    @error('email')
                        <span  class="error-message" style="color:red;" role="alert">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group" >
                    <label for="password" class="form-group-label">Mật khẩu</label></br>
                    <div>
                        <input name="password" 
                        type="password" 
                        placeholder ="Nhập lại mật khẩu"  
                        class="form-group-input form-control form-control @error('password') is-invalid @enderror" 
                        id="password-confirm"
                        value="{{ old('password') }}"
                        autocomplete="password"
                        required
                        value={{csrf_token()}}
                        />
                    </div>
                    @error('password')
                        <span  class="error-message" style="color:red;" role="alert">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group" >
                    <label for="repeat_password" class="form-group-label">Xác nhận mật khẩu</label></br>
                    <div>
                        <input name="repeat_password" 
                        type="password" 
                        placeholder ="Nhập lại mật khẩu"  
                        class="form-group-input form-control @error('repeat_password') is-invalid @enderror"
                        id="password-confirm"
                        autocomplete="new-password"
                        />
                    </div>
                    @error('repeat_password')
                        <span  class="error-message" style="color:red;" role="alert">{{$message}}</span>
                    @enderror
                </div>

                <button class="form-button btn btn-primary" id="register-btn" >{{ __('Đăng kí') }}</button>
                @csrf
            </div>
            
            <div id="form-text">
                <h2 class="text1">Hoặc</h2>
            </div>

            <div id="form-2">
                <div id="logo">
                    <a class="gg">
                        <img class="img-logo"src="{{asset('img/Google_icon.png')}}" alt="">
                        <p class="text-logo">Tiếp tục với Google</p>
                    </a>

                    <a class="fb">
                        <img class="img-logo"src="{{asset('img/Facebook_icon.png')}}" alt="">
                        <p class="text-logo">Tiếp tục với Facebook</p>
                    </a>
                </div>
            </div>
        </form>
    </div>
    @show
</body>
</html>


