@section('footer_css')
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
@show
@section('footer')
<div id="endweb">
    <div id="contact_us">
        <div id="information">
            <h3 class="name">EdVie</h3>
            <p class="content">EdViet là một từ điển dịch Êđê-Việt và ngược lại. 
            Ngoài ra trang web còn có một trang trao đổi thông tin của mọi người.
            Trang web giúp bảo tồn văn hóa và nét đẹp của chữ Êđê
            </p>
        </div>
        <div id="information">
            <div class="help">Liên hệ chúng tôi</div>
            <div class="content">Điện thoại: 0373898814 - 0934737456</div>
            <div class="content">Email: edeviet@ed-vie.com</div>
            <div class="content">Địa chỉ: 45 Thủ Khoa Huân, Thành phố Buôn Ma Thuột, tỉnh Đắk Lắk, Việt Nam</div>
            <div id="hotline">
                <img src="{{asset('img\Facebook_icon.png')}}" alt="" class="icon">
                <img src="{{asset('img\Instagram_icon.png')}}" alt="" class="icon">
                <img src="{{asset('img\Zalo_icon.png')}}" alt="" class="icon">
            </div>
        </div>
    </div>
    <div id="design">
        <p class="by">Thiết kết bởi <b>EdVie</b></p>
    </div>
</div>
@show