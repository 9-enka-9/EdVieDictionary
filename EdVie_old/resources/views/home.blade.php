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
@endsection


@section('content')
    <div id="page">
        <div id="kobtdattenginx">
            <div id="form-1">
                <div id="headline">
                    <h2 class="headline-content">Từ điển riêng của bạn</h2>
                </div>
                <div id="search"> 
                    <div id="indt">
                        <p class="indt-content">Cảm ơn bạn đã lựa chọn chúng tôi!</p>
                    </div>
                    <p class="indt-content">Hãy nhập từ bạn muốn tra cứu <i class="icon ti-arrow-down"></i></p>
                    <form action="{{ route('toSearch') }}" class="input-1" method="POST">
                        @csrf
                        <input name="search" type="text" placeholder="Tra cứu Việt-Êde" class="input"/>
                        <button class="search_icon">
                            <i class="ti-search"></i> 
                        </button>
                        <div class="frame-keyboard">
                            <i onclick="appear()" class="icon_keyboard fa-regular fa-keyboard" style="font-size: 30px; margin-left: 10px;cursor: pointer;"></i>
    
                            <div id="myDropdown" class="keyboard_letters">
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
                    <div class="convert">
                        <div class="translate">
                            <p class="text">Tiếng Việt</p>
                        </div>
                        <div class="icon_translate">
                            <i class="ti-arrows-horizontal"></i>
                        </div>
                        <div class="translate">
                            <p class="text">Tiếng Êđê</p>
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
            <div class="table">
                <p class="text">a</p>
                <p class="text">ă</p>
                <p class="text">â</p>
            </div>
            <div class="table">
                <p class="text">b</p>
                <p class="text">c</p>
                <p class="text">d</p>
                <p class="text">đ</p>
            </div>
            <div class="table">
                <p class="text">e</p>
                <p class="text">ê</p>
                <p class="text">g</p>
                <p class="text">h</p>
            </div>
            <div class="table">
                <p class="text">i</p>
                <p class="text">k</p>
                <p class="text">l</p>
                <p class="text">m</p>
                <p class="text">n</p>
            </div>
            <div class="table">
                <p class="text">o</p>
                <p class="text">ô</p>
                <p class="text">ơ</p>
                <p class="text">p</p>
                <p class="text">q</p>
            </div>
            <div class="table">
                <p class="text">r</p>
                <p class="text">s</p>
                <p class="text">t</p>
                <p class="text">u</p>
                <p class="text">ư</p>
            </div>
            <div class="table">
                <p class="text">v</p>
                <p class="text">x</p>
                <p class="text">y</p>
            </div>
        </div>
        {{-- <div class="introduction">
            <h2 class="headline">Chào mừng bạn đến với bảng chữ cái</h2>
            <p class="text">Hãy nhấp vào từ bạn muốn tìm hiểu</p>
        </div> --}}
        <div class="nghia">
            <h2 class="headline">Aa</h2>
            <div class="line"></div>
            <div class="list">Các từ ví dụ:</div>
            <div></div>
            <div class="example_word">
                <div class="text">dfdfddfdf</div>
                <div class="text">dfdfddfdf</div>
            </div>
                
            <div class="line"></div>    
            <div class="list">Các câu ví dụ:</div>
            <div class="example_sentences">
                <div class="text">dfdfddfdf</div>
                <div class="text">dfdfddfdf</div>
            </div>
        </div>
        <!-- <div class="explain">
            <h2 class="headline">Chào mừng bạn đến với bảng chữ cái</h2>
            <p class="text">Hãy nhấp vào từ bạn muốn tìm hiểu</p>
        </div> -->
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

