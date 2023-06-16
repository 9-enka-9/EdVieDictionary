@php
    $titlePage="Trang chủ";
@endphp

@extends('layouts.app')

@yield('footer_css')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('js')
    <script src="{{asset('js/home.js')}}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DWF7MVBZ2N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-DWF7MVBZ2N');
    </script>
@endsection


@section('content')
    <div id="page">
        <div id="kobtdattenginx">
            <div id="form-1">
                <div id="headline">
                    <h2 class="headline-content">{{__("your dictionary")}}</h2>
                </div>
                <div id="search"> 
                    <div id="indt">
                        <p class="indt-content">{{__('thank you')}}</p>
                    </div>
                    <p class="indt-content">{{__('type word')}}<i class="icon ti-arrow-down"></i></p>
                    <form action="@if(request()->segment(1)==='ed') {{route('ed.toSearch')}} @else {{route('vi.toSearch')}} @endif" class="input-1" method="POST">
                        @csrf
                        <input name="search" type="text" placeholder="{{__('Ksiêm duah Việt - Êđê')}}" class="input" id="input"/>
                        <input type="hidden" name="lang" id="lang">

                        <button type="submit" class="search_icon">
                            <i class="ti-search"></i> 
                        </button>
                        
                        <div class="frame-keyboard" style="cursor: pointer;">
                            <i  onclick="appear()"  class="icon_keyboard fa-regular fa-keyboard" style="font-size: 30px; margin-left: 10px;"></i>
                            
                            <div  id="myDropdown" class="keyboard_letters">
                                <div class="text_apb" onclick="chen(value='a')">a</div> 
                                <div class="text_apb" onclick="chen(value='ă')">ă</div> 
                                <div class="text_apb" onclick="chen(value='â')">â</div> 
                                <div class="text_apb" onclick="chen(value='b')">b</div> 
                                <div class="text_apb" onclick="chen(value='ƀ')">ƀ</div> 
                                <div class="text_apb" onclick="chen(value='č')">č</div> 
                                <div class="text_apb" onclick="chen(value='d')">d</div> 
                                <div class="text_apb" onclick="chen(value='đ')">đ</div> 
                                <div class="text_apb" onclick="chen(value='e')">e</div> 
                                <div class="text_apb" onclick="chen(value='ĕ')">ĕ</div> 
                                <div class="text_apb" onclick="chen(value='ê')">ê</div> 
                                <div class="text_apb" onclick="chen(value='ê̆')">ê̆</div> 
                                <!-- <br> -->
                                <div class="text_apb" onclick="chen(value='g')">g</div> 
                                <div class="text_apb" onclick="chen(value='h')">h</div> 
                                <div class="text_apb" onclick="chen(value='i')">i</div> 
                                <div class="text_apb" onclick="chen(value='ĭ')">ĭ</div> 
                                <div class="text_apb" onclick="chen(value='j')">j</div> 
                                <div class="text_apb" onclick="chen(value='k')">k</div> 
                                <div class="text_apb" onclick="chen(value='l')">l</div> 
                                <div class="text_apb" onclick="chen(value='m')">m</div> 
                                <div class="text_apb" onclick="chen(value='n')">n</div> 
                                <div class="text_apb" onclick="chen(value='ñ')">ñ</div> 
                                <div class="text_apb" onclick="chen(value='o')">o</div> 
                                <div class="text_apb" onclick="chen(value='ơ')">ơ</div> 
                                <div class="text_apb" onclick="chen(value='ŏ')">ŏ</div> 
                                <!-- <br>  -->
                                <div class="text_apb" onclick="chen(value='ơ̆')">ơ̆</div> 
                                <div class="text_apb" onclick="chen(value='ô')">ô</div> 
                                <div class="text_apb" onclick="chen(value='ô̆')">ô̆</div>
                                <div class="text_apb" onclick="chen(value='p')">p</div> 
                                <div class="text_apb" onclick="chen(value='r')">r</div> 
                                <div class="text_apb" onclick="chen(value='s')">s</div> 
                                <div class="text_apb" onclick="chen(value='t')">t</div> 
                                <div class="text_apb" onclick="chen(value='u')">u</div>
                                <div class="text_apb" onclick="chen(value='ŭ')">ŭ</div> 
                                <div class="text_apb" onclick="chen(value='ư')">ư</div> 
                                <div class="text_apb" onclick="chen(value='ư̆')">ư̆</div> 
                                <div class="text_apb" onclick="chen(value='v')">v</div>
                                <div class="text_apb" onclick="chen(value='y')">y</div>
                                <div class="text_apb" onclick=" upcase(check)" style="border: none;"><i class="gg-chevron-double-up-o"></i></div> 
                            </div>
                        </div>
                    </form>
                    <div  class="convert">
                        <div class="translate">
                            <p id="from" class="text">{{__('vi')}}</p>
                        </div>
                        <div class="icon_translate" onclick="ed_vi()">
                            <i class="ti-arrows-horizontal"></i>
                        </div>
                        <div class="translate">
                            <p id="to" class="text">{{__('ed')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="form-2">
                <img src="{{asset('img/Representation.png')}}" alt="" class="image">
            </div>
        </div>
    </div>
            
    <div id="alphabet">
        <div id="frames">
            <form action="" method="post" class="table">
                <p class="text" onclick="a()">a</p>
                <p class="text" onclick="ă()">ă</p>
                <p class="text" onclick="â()">â</p>
            </form>
            <form action="" method="post" class="table">
                <p class="text" onclick="b()">b</p>
                <p class="text" onclick="c()">c</p>
                <p class="text" onclick="d()">d</p>
                <p class="text" onclick="đ()">đ</p>
            </form>
            <form action="" method="post" class="table">
                <p class="text" onclick="e()">e</p>
                <p class="text" onclick="ê()">ê</p>
                <p class="text" onclick="g()">g</p>
                <p class="text" onclick="h()">h</p>
            </form>
            <form action="" method="post" class="table">
                <p class="text" onclick="i()">i</p>
                <p class="text" onclick="k()">k</p>
                <p class="text" onclick="l()">l</p>
                <p class="text" onclick="m()">m</p>
                <p class="text" onclick="n()">n</p>
            </form>
            <form action="" method="post" class="table">
                <p class="text" onclick="o()">o</p>
                <p class="text" onclick="ô()">ô</p>
                <p class="text" onclick="ơ()">ơ</p>
                <p class="text" onclick="p()">p</p>
                <p class="text" onclick="q()">q</p>
            </form>
            <form action="" method="post" class="table">
                <p class="text" onclick="r()">r</p>
                <p class="text" onclick="s()">s</p>
                <p class="text" onclick="t()">t</p>
                <p class="text" onclick="u()">u</p>
                <p class="text" onclick="ư()">ư</p>
            </form>
            <form action="" method="POST" class="table">
                <p class="text" onclick="v()">v</p>
                <p class="text" onclick="x()">x</p>
                <p class="text" onclick="y()">y</p> 
            </form>
        </div>
        <div class="nghia" id="a">
            <h2 id="hd"class="headline">Aa</h2>
            <div class="line"></div>
            <div class="list">Các từ ví dụ:</div>
            <div class="example_word">
                <div id="t1" class="text">Anh: Ayŏng</div>
                <div id="t2" class="text">Ai: Hlei</div>
            </div>
                
            <div class="line"></div>    
            <div class="list">Các câu ví dụ:</div>
            <div class="example_sentences">
                <div id="t3" class="text">Không biết ai: Amâo thâo hlei pô</div>
                <div id="t4"class="text">Người ấy là anh trai tôi: Mnuih anăn jing ayǒng kâo</div>
            </div>
            <div class="line"></div>    
            <div class="list">Cách viết:</div>
            <div class="write">
                <img id="thuong" class="gif" src="{{asset('write/lower/ede/a.gif')}}" alt="">
                <img id="hoa" class="gif" src="{{asset('write/upper/ede/A.gif')}}" alt="">
            </div>
        </div>
        <script>
            function a(){
                document.getElementById("hd").innerHTML="Aa";
                document.getElementById("t1").innerHTML="Anh: Ayŏng";
                document.getElementById("t2").innerHTML="Ai: Hlei";
                document.getElementById("t3").innerHTML="Không biết ai: Amâo thâo hlei pô";
                document.getElementById("t4").innerHTML="Người ấy là anh trai tôi: Mnuih anăn jing ayǒng kâo";
                document.getElementById("thuong").src="{{asset('write/lower/ede/a.gif')}}";
                document.getElementById("hoa").src="{{asset('write/upper/ede/A.gif')}}";
            }
            function ă(){
                document.getElementById("hd").innerHTML="Ăă";
                document.getElementById("t1").innerHTML="Ăn nói: Blǔ tlao";
                document.getElementById("t2").innerHTML="Ăn vặt: Dôč";
                document.getElementById("t3").innerHTML="Có quyền ăn nói: Blǔ tlao kƀăt";
                document.getElementById("t4").innerHTML="Ăn vặt quen miệng: Ƀơ̆ng dôk mưng ƀăng êgei";
                document.getElementById("thuong").src="{{asset('write/lower/ede/ă.gif')}}" ;
                document.getElementById("hoa").src="{{asset('write/upper/ede/Ă.gif')}}" ;
            }
            function â(){
                document.getElementById("hd").innerHTML="Ââ";         
                document.getElementById("t1").innerHTML="Âm nhạc: Klei kưt mnuñ";
                document.getElementById("t2").innerHTML="Âm thầm: Hgăm";
                document.getElementById("t3").innerHTML="Âm nhạc cổ điển: Klei kưt mmuñ đưm";
                document.getElementById("t4").innerHTML="Cuộc chiến đấu âm thầm: Klei mblah hgăm";
                document.getElementById("thuong").src="{{asset('write/lower/ede/â.gif')}}";
                document.getElementById("hoa").src="{{asset('write/upper/ede/Â.gif')}}" ;
            }
            function b(){
                document.getElementById("hd").innerHTML="Bb";
                    document.getElementById("t1").innerHTML="Bài tập: Klei ngă";
                    document.getElementById("t2").innerHTML="Bóng đá: Čưng boh";    
                    document.getElementById("t3").innerHTML="Làm bài tập ở lớp: Ngă klei ngă hlăm adŭ";
                    document.getElementById("t4").innerHTML="Cầu thủ bóng đá: Mnuih čưng boh";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/b.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/B.gif')}}" ;
            }
            function c(){
                document.getElementById("hd").innerHTML="Cc";
                    document.getElementById("t1").innerHTML="Ca nhạc: Kut mmuñ ";
                    document.getElementById("t2").innerHTML="Cấp cứu: Dŏng mtlaih";    
                    document.getElementById("t3").innerHTML="Buổi phát thanh ca nhạc: Mmông mđung asăp kut mmuñ, pẽ gông tông brỗ.";
                    document.getElementById("t4").innerHTML="Cấp cứu người bị nạn: Dŏng mtlaih mnuih mâo klei truh ";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/c.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/C.gif')}}" ;
            }
            function d(){
                document.getElementById("hd").innerHTML="Dd";
                    document.getElementById("t1").innerHTML="Dược: Đang rah";
                    document.getElementById("t2").innerHTML="Dứa: Tei nan";    
                    document.getElementById("t3").innerHTML="Ngành dược: Bruă êa drao";
                    document.getElementById("t4").innerHTML="Trồng dứa: Pla tei nan";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/d.gif')}}";
                    document.getElementById("hoa").src="{{asset('write/upper/ede/D.gif')}}" ;
            }
            function đ(){
                document.getElementById("hd").innerHTML="Đđ";
                    document.getElementById("t1").innerHTML="Đến nơi: Năl";
                    document.getElementById("t2").innerHTML="Đặc sản: Mnơ̆ng hjăn";    
                    document.getElementById("t3").innerHTML="Tết đến nơi rồi: Tit năl leh";
                    document.getElementById("t4").innerHTML="Cà phê là đặc sản của Đắk Lắk: Kphê jing mnơ̆ng hjăn kơ čả Dak Lak";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/đ.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/Đ.gif')}}" ;
            }
            function e(){
                document.getElementById("hd").innerHTML="Ee";
                    document.getElementById("t1").innerHTML="Em: Adei";
                    document.getElementById("t2").innerHTML="E hèm: Aham";    
                    document.getElementById("t3").innerHTML="Em ruột: Adei sa amĭ";
                    document.getElementById("t4").innerHTML="E hèm 1 tiếng rồi dõng dạc đọc: Aham hĕ sa boh koh čuak cuak dlăng yơh";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/e.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/E.gif')}}" ;
            }
            function ê(){
                document.getElementById("hd").innerHTML="Êê";
                    document.getElementById("t1").innerHTML="Êm đẹp: Jăk m'ak";
                    document.getElementById("t2").innerHTML="Êm đềm: Lơ lhiơ̆ng";    
                    document.getElementById("t3").innerHTML="Chuyện thế là xong xuôi êm đẹp: Klei truh ti anăn ruê̆ riêng jăk m'ak";
                    document.getElementById("t4").innerHTML="Giấc ngủ êm đềm: Pĭt đih lơ lhiơ̆ng";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/ê.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/Ê.gif')}}" ;
            }
            function g(){
                document.getElementById("hd").innerHTML="Gg";
                    document.getElementById("t1").innerHTML="Gan dạ: Jhŏng ktang";
                    document.getElementById("t2").innerHTML="Gắng: Gĭr";    
                    document.getElementById("t3").innerHTML="Chiến đấu gan dạ: Mblah ngă jhŏng ktang";
                    document.getElementById("t4").innerHTML="Gắng học tập: Gĭr hriăm hră";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/g.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/G.gif')}}" ;
            }
            function h(){
                document.getElementById("hd").innerHTML="Hh";
                    document.getElementById("t1").innerHTML="Hạ lưu: Hnoh tluôn ";
                    document.getElementById("t2").innerHTML="Hân hoan: Hơ̆k m'ak";    
                    document.getElementById("t3").innerHTML="Hạ lưu sông Hồng: Hnoh tluôn êa krông sông Hồng";
                    document.getElementById("t4").innerHTML="Hân hoan trước tin chiến thắng: Hơ̆k m'ak hmư̆ hing klei dưi mblah ";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/h.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/H.gif')}}" ;
            }
            function i(){
                document.getElementById("hd").innerHTML="Ii";
                    document.getElementById("t1").innerHTML="Ích kỷ: Klih, khit čuôt ";
                    document.getElementById("t2").innerHTML="Ích lợi: Klei tŭ dưn, tŭ dưn";    
                    document.getElementById("t3").innerHTML="Thói tham lam, ích kỷ: Knhuah knan knăk, khit čuôt";
                    document.getElementById("t4").innerHTML="Ích lợi của việc làm đổi công: Klei tŭ dưn hlăm bruă mă bi ring ";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/i.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/I.gif')}}" ;
            }
            function k(){
                document.getElementById("hd").innerHTML="Kk";
                    document.getElementById("t1").innerHTML="Kén chọn: Čuăn ruah ";
                    document.getElementById("t2").innerHTML="Kết nạp: Bi mŭt";    
                    document.getElementById("t3").innerHTML="Làm gì mà kén chọn mãi thế: Ai lei dôk čuăn ruah nanao kơh";
                    document.getElementById("t4").innerHTML="Lễ kết nạp đoàn viên: Hruê bi mŭt êpul gĭt hđeh êdam êra ";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/k.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/K.gif')}}" ;
            }
            function l(){
                document.getElementById("hd").innerHTML="Ll";
                    document.getElementById("t1").innerHTML="Làm quen: Mjuk mjĕ ";
                    document.getElementById("t2").innerHTML="Làm giàu: Ngă mdrŏng";    
                    document.getElementById("t3").innerHTML="Làn quen với mọi người: Mjuk mjĕ hŏng jih jing mnuih";
                    document.getElementById("t4").innerHTML="Làm giàu cho đất nước: Duah boh mdrŏng kơ lăn êa ";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/l.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/L.gif')}}" ;
            }
            function m(){
                document.getElementById("hd").innerHTML="Mm";
                    document.getElementById("t1").innerHTML="Má: Miêng ";
                    document.getElementById("t2").innerHTML="Mạnh: Ktang";    
                    document.getElementById("t3").innerHTML="Mụn mọc ở má: Mŭn čăt ti miêng";
                    document.getElementById("t4").innerHTML="Đội bóng mạnh: Êpul čưng boh ktang ";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/m.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/M.gif')}}" ;
            }
            function n(){
                document.getElementById("hd").innerHTML="Nn";
                    document.getElementById("t1").innerHTML="Nắng: Mđiă";
                    document.getElementById("t2").innerHTML="Nặng nề: Ktrŏ phĭt";    
                    document.getElementById("t3").innerHTML="Nắng trưa hè: Mđiă yang hruê dơ̆ng yan bhang";
                    document.getElementById("t4").innerHTML="Những súc gỗ nặng nề: Đơ đrông kyâo ktrŏ phĭt ";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/n.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/N.gif')}}" ;
            }
            function o(){
                document.getElementById("hd").innerHTML="Oo";
                    document.getElementById("t1").innerHTML="Oanh liệt: Kdrăm k'ah";
                    document.getElementById("t2").innerHTML="Oái oăm: Ăk răk";    
                    document.getElementById("t3").innerHTML="Chiến công oanh liệt: Klei dưi mblah ngă kdrăm k'ah";
                    document.getElementById("t4").innerHTML="Cảnh ngộ oái oăm: Klei truh ăk răk ";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/o.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/O.gif')}}" ;
            }
            function ô(){
                document.getElementById("hd").innerHTML="Ôô";
                    document.getElementById("t1").innerHTML="Ông bà: Aê aduôn ";
                    document.getElementById("t2").innerHTML="Ôm ấp: Kmiêk kuăl";    
                    document.getElementById("t3").innerHTML="Mảnh đất của ông bà: Ênhă lăn aê aduôn";
                    document.getElementById("t4").innerHTML="Mẹ ôm ấp con: Amĭ kmiêk kuăl anak ";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/ô.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/Ô.gif')}}" ;
            }
            function ơ(){
                document.getElementById("hd").innerHTML="Ơơ";
                    document.getElementById("t1").innerHTML="Ơi: Ơ ";
                    document.getElementById("t2").innerHTML="Ớt: Amrê̆č";    
                    document.getElementById("t3").innerHTML="Ông ơi: Ơ aê";
                    document.getElementById("t4").innerHTML="Cay như ớt: Hăng msĕ si amrê̆č ";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/ơ.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/Ơ.gif')}}" ;
            }
            function p(){
                document.getElementById("hd").innerHTML="Pp";
                    document.getElementById("t1").innerHTML="Phác thảo: Rap mkra ";
                    document.getElementById("t2").innerHTML="Phạm: Djŏ";    
                    document.getElementById("t3").innerHTML="Phác thảo đề cương: Rap mkra hdră jar";
                    document.getElementById("t4").innerHTML="Phạm nội quy: Êgao klei bhiăn ";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/p.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/P.gif')}}" ;
            }
            function q(){
                document.getElementById("hd").innerHTML="Qq";
                    document.getElementById("t1").innerHTML="Qua lại: Êrô êbat ";
                    document.getElementById("t2").innerHTML="Quả cảm: Jhŏng ktang";    
                    document.getElementById("t3").innerHTML="Đường phố tấp nập người qua lại: Êlan ƀuôn  prŏng ƀŭl ƀŭl mnuih êrô êbat ";
                    document.getElementById("t4").innerHTML="Hành động quả cảm: Klei ngă jhŏng ktang ";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/q.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/Q.gif')}}" ;
            }
            function r(){
                document.getElementById("hd").innerHTML="Rr";
                    document.getElementById("t1").innerHTML="Ra sức: Ktuh ai tiê ";
                    document.getElementById("t2").innerHTML="Rách nát: Tĭ rai";    
                    document.getElementById("t3").innerHTML="Ra sức học tập: Ktuh ai tiê ep hriăm";
                    document.getElementById("t4").innerHTML="Mái tranh rách nát: Pung sang hlang tĭ rai";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/r.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/R.gif')}}" ;
            }
            function s(){
                document.getElementById("hd").innerHTML="Ss";
                    document.getElementById("t1").innerHTML="Sách: Ênuĭ ";
                    document.getElementById("t2").innerHTML="Sáng: Mngač";    
                    document.getElementById("t3").innerHTML="Sách giáo khoa: Hdruôm hră hriăm hră";
                    document.getElementById("t4").innerHTML="Buổi sáng: Wưng aguah ";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/s.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/S.gif')}}" ;
            }
            function t(){
                document.getElementById("hd").innerHTML="Tt";
                    document.getElementById("t1").innerHTML="Tài: Mgăt ";
                    document.getElementById("t2").innerHTML="Thay: Mlih";    
                    document.getElementById("t3").innerHTML="Bác tài: Awa mgăt êdeh";
                    document.getElementById("t4").innerHTML="Thay bộ quần áo mới: Pleh hlâo čhum ao mrâo";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/t.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/T.gif')}}" ;
            }
            function u(){
                document.getElementById("hd").innerHTML="Uu";
                    document.getElementById("t1").innerHTML="Ung dung: Ênang blang ";
                    document.getElementById("t2").innerHTML="U buồn: Ênguôt ê-ưn";    
                    document.getElementById("t3").innerHTML="Phong thái ung dung: Knuih knhuah ênang blang";
                    document.getElementById("t4").innerHTML="Tâm trạng u buồn: Ai tiê ênguôt ê-ưn";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/u.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/U.gif')}}" ;
            }
            function ư(){
                document.getElementById("hd").innerHTML="Ưư";
                    document.getElementById("t1").innerHTML="Ưu thế: K'hưm kdrăm ";
                    document.getElementById("t2").innerHTML="Ướp: Mđam";    
                    document.getElementById("t3").innerHTML="Chiếm ưu thế: Păn khưm kdrăm";
                    document.getElementById("t4").innerHTML="Ướp cá: Mđam kan";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/ư.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/Ư.gif')}}" ;
            }
            function v(){
                document.getElementById("hd").innerHTML="Vv";
                    document.getElementById("t1").innerHTML="Vây: Kwih ";
                    document.getElementById("t2").innerHTML="Viễn thị: Ƀuh kbưi";    
                    document.getElementById("t3").innerHTML="Vây cá: Kwih kan";
                    document.getElementById("t4").innerHTML="Mắt viễn thị: Ală ƀu kbưi ";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/v.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/V.gif')}}" ;
            }
            function x(){
                document.getElementById("hd").innerHTML="Xx";
                    document.getElementById("t1").innerHTML="Xà phòng: Kƀu ";
                    document.getElementById("t2").innerHTML="Xách: Kdjŏng";    
                    document.getElementById("t3").innerHTML="Xà phòng giặt: Kƀu boh";
                    document.getElementById("t4").innerHTML="Túi xách: Kdô djă ";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/x.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/X.gif')}}" ;
            }
            function y(){
                document.getElementById("hd").innerHTML="Yy";
                    document.getElementById("t1").innerHTML="Ý thức: Klei mĩn ";
                    document.getElementById("t2").innerHTML="Yên giấc: Klei hnũk";    
                    document.getElementById("t3").innerHTML="Nó làm việc đó một cách có ý thức: Ñu ngă bruă anăn hõng klei mâo klei mĩn";
                    document.getElementById("t4").innerHTML="Nằm không yên giấc: Đih amâo mâo klei hnũk ";
                    document.getElementById("thuong").src="{{asset('write/lower/ede/y.gif')}}" ;
                    document.getElementById("hoa").src="{{asset('write/upper/ede/Y.gif')}}" ;
            }

        </script>               
    </div>

    <div id="news">
        <div class="container">
            <div class="header_title">
                <h2>Tin tức</h2>
            </div>
            <div class="document_list">
                <a href="../news/su_thi_dam_san" class="document_item">
                    <div class="news_picture">
                        <img src="{{asset('img/News/su_thi_dam_san/representation.jpg')}}" alt="">
                    </div>
                    <div class="document_content">
                        <div class="document_tag-title">
                            <b>Tóm tắt sử thi Đăm San</b>
                            <div class="text">Sử thi Đăm Săn là một trong những thiên sử thi anh hùng nổi tiếng của dân tộc Ê Đê (Việt Nam). Tên đầy đủ là Bài ca chàng Đam San (tiếng Ê Dê là Klei khan Y Đam San).</div>
                        </div>
                    </div>
                </a>

                <a href="../news/su_thi_dam_san" class="document_item">
                    <div class="news_picture">
                        <img src="{{asset('img/News/su_thi_dam_san/representation.jpg')}}" alt="">
                    </div>
                    <div class="document_content">
                        <div class="document_tag-title">
                            <b>Tóm tắt sử thi Đăm San</b>
                            <div class="text">Sử thi Đăm Săn là một trong những thiên sử thi anh hùng nổi tiếng của dân tộc Ê Đê (Việt Nam). Tên đầy đủ là Bài ca chàng Đam San (tiếng Ê Dê là Klei khan Y Đam San).</div>
                        </div>
                    </div>
                </a>

                <a href="../news/su_thi_dam_san " class="document_item">
                    <div class="news_picture">
                        <img src="{{asset('img/News/su_thi_dam_san/representation.jpg')}}" alt="">
                    </div>
                    <div class="document_content">
                        <div class="document_tag-title">
                            <b>Tóm tắt sử thi Đăm San</b>
                            <div class="text">Sử thi Đăm Săn là một trong những thiên sử thi anh hùng nổi tiếng của dân tộc Ê Đê (Việt Nam). Tên đầy đủ là Bài ca chàng Đam San (tiếng Ê Dê là Klei khan Y Đam San).</div>
                        </div>
                    </div>
                </a>
            </div>
            <button class="more-news_button">
                <a href="news\read\news.html" class="more-news_title" style="text-decoration: none; color: #000;">Xem thêm</a>
                <i class="ti-angle-right" style="padding-left: 3px;"></i>
            </button>
        </div>
    </div>
    @includeIf('layouts.footer')
@endsection

