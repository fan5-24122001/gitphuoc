<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="users/logo.png" alt=""></a>
                    </div>
                    <p>Tích điểm Quà tặng VIP.</p>
                    <div class="footer__payment">
                        <a href="#"><img src="img/payment/payment-1.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-2.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-3.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-4.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-5.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Tổng đài hỗ trợ (Miễn phí gọi)</h6>
                    <ul>
                        <li><a href="#">Gọi mua: 1800.1060 (7:30 - 22:00)</a></li>
                        <li><a href="#">Khiếu nại: 1800.1062 (8:00 - 21:30)</a></li>
                        <li><a href="#">Bảo hành: 1800.1064 (8:00 - 21:00)</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6 ><a href="{{route('home')}}">Trang Chủ</a></h6>
                    <ul>
                        <li><a href="#">Sản Phẩm</a></li>
                        <li><a href="#">Tin Tức</a></li>
                        <li><a href="#">Chính Sách Mua Hàng</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <h6>Tìm Kiếm</h6>
                    <form  <form action="{{ route('search') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" placeholder="" name="search" >
                        <button type="submit" class="site-btn">Tìm Kiếm</button>
                    </form>
                    <div class="footer__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>