@section('footer_css')
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
@show
@section('footer')
<div id="endweb">
    <div id="contact_us">
        <div id="information">
            <h3 class="name">EdVie</h3>
            <p class="content">EdVie là một từ điển dịch Êđê-Việt và Việt-Êđê. 
                Trang web giúp bảo tồn văn hóa và nét đẹp của ngôn ngữ Êđê
            </p>
        </div>
        <div id="information">
            <div class="help">Liên hệ chúng tôi</div>
            <div class="content">{{__('phone number')}}: 0373898814 - 0934737456</div>
            <div class="content">Email: edeviet@ed-vie.com</div>
            <div class="content">{{__('address')}}: 45 Thủ Khoa Huân, Thành phố Buôn Ma Thuột, tỉnh Đắk Lắk, Việt Nam</div>
            <div id="hotline">
                <a href="https://www.facebook.com/profile.php?id=100089069784724" >
                    <img src="{{asset('img\Facebook_icon.png')}}" alt="" class="icon">
                </a>
                <a>
                    <img src="{{asset('img\Instagram_icon.png')}}" alt="" class="icon">
                </a>
                <a>
                    <img src="{{asset('img\Zalo_icon.png')}}" alt="" class="icon">
                </a>
            </div>
        </div>
    </div>
    <div id="design">
        <p class="by">Thiết kết bởi <b>EdVie</b></p>
    </div>
</div>
@show