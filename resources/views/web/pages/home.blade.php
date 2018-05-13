@extends('web.layout')

@section('content')

    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->
            <div class="group center">
                <article class="one_quarter first"><i class="icon fa fa-archive"></i>
                    <h4 class="font-x1"><a href="#">Trưng bày sản phẩm</a></h4>
                    <p>Thử tưởng tượng 1 nơi mà bất cứ ai cũng dễ dàng tìm đến, 1 không gian thân thiện và ấm cúng, làm hài lòng bất cứ khách hàng khó tính nào, như vậy bạn đã đạt 50% thắng lợi rồi. Còn lại, chỉ là hàng hóa và bán hàng như thế nào nữa thôi. </p>
                </article>
                <article class="one_quarter"><i class="icon fa fa-fire"></i>
                    <h4 class="font-x1"><a href="#">Quảng bá sản phẩm</a></h4>
                    <p>Chúng tôi sáng tạo các chuỗi hoạt động trên cả online và offline để không chỉ giới thiệu sản phẩm mà còn mang khách hàng tiềm năng đến với Sharing Box, trao cơ hội tiếp cận và bán hàng lý tưởng cho tất cả thành viên của Sharing Box.</p>
                </article>
                <article class="one_quarter"><i class="icon fa fa-recycle"></i>
                    <h4 class="font-x1"><a href="#">Bán hàng và chăm sóc khách hàng</a></h4>
                    <p>Tất cả những công việc từ bán hàng, chăm sóc khách hàng giờ đây sẽ được đội ngũ nhân viên của Sharing box xử lý.</p>
                </article>
                <article class="one_quarter"><i class="icon fa fa-rouble"></i>
                    <h4 class="font-x1"><a href="#">Báo cáo và phân tích</a></h4>
                    <p>Tất cả số liệu về đơn hàng, sản phẩm hay khách hàng tiềm năng đều được Sharing box tổng hợp và thống kê để chủ Shop có cái nhìn tổng quan nhất về sản phẩm của mình. Từ đó có hướng đi phù hợp.</p>
                </article>
            </div>
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
    <div class="wrapper">
        <div class="split clear" style="background-image:url('web/images/demo/backgrounds/02.png');">
            <section class="box">
                <div class="btmspace-50">
                    <p class="nospace"><a href="#">Hãy bắt đầu ngay bây giờ</a></p>
                    <h2 class="heading">Sharing box</h2>
                    <p>Địa chỉ online và offline cung cấp tất cả các giải pháp cần thiết và hữu dụng cho các thương hiệu.</p>
                </div>
                <ul class="nospace elements">
                    <li>
                        <article><a href="#" class="icon"><i class="fa fa-glass"></i></a>
                            <h6 class="heading">Liên hệ với Sharing box</h6>
                            <p>Các bạn đưa ra ý tưởng, chia sẻ về sản phẩm và mong muốn hướng đến</p>
                        </article>
                    </li>
                    <li>
                        <article><a href="#" class="icon"><i class="fa fa-globe"></i></a>
                            <h6 class="heading">Đặt chỗ tại Sharing box</h6>
                            <p>Sharing box giúp bạn xây dựng một gian hàng của chính mình</p>
                        </article>
                    </li>
                    <li>
                        <article><a href="#" class="icon"><i class="fa fa-shekel"></i></a>
                            <h6 class="heading">Mở rộng sản phẩm</h6>
                            <p>Vấn đề bán hàng, giờ đã có Sharing box lo.</p>
                        </article>
                    </li>
                </ul>
            </section>
        </div>
    </div>
    <div class="wrapper row3">
        <section id="latest" class="hoc container clear">
            <div class="center btmspace-50">
                <h2 class="heading">Khách hàng tiêu biểu</h2>
                <p>Sharing box không chỉ mang đến dịch vụ, cái chúng tôi đưa đến là niềm tin.</p>
            </div>
            <ul class="nospace group">
                <li class="one_third first">
                    <article>
                        <figure><img src="{{ asset('web/images/demo/3.jpg') }}" alt="">
                            <figcaption><a class="btn medium" href="#">Details</a></figcaption>
                        </figure>
                        <div class="excerpt">
                            <time datetime="2045-04-06">6<sup>th</sup> April</time>
                            <h6 class="heading">Mango</h6>
                            <p>Hệ thống tốt, tối ưu</p>
                        </div>
                    </article>
                </li>
                <li class="one_third">
                    <article>
                        <figure><img src="{{ asset('web/images/demo/3.jpg') }}" alt="">
                            <figcaption><a class="btn medium" href="#">Details</a></figcaption>
                        </figure>
                        <div class="excerpt">
                            <time datetime="2045-04-05">5<sup>th</sup> April</time>
                            <h6 class="heading">Uniqlo</h6>
                            <p>Sản phẩm bán hết trong 1 nốt nhạc</p>
                        </div>
                    </article>
                </li>
                <li class="one_third">
                    <article>
                        <figure><img src="{{ asset('web/images/demo/3.jpg') }}" alt="">
                            <figcaption><a class="btn medium" href="#">Details</a></figcaption>
                        </figure>
                        <div class="excerpt">
                            <time datetime="2045-04-04">4<sup>th</sup> April</time>
                            <h6 class="heading">Calvin Klein</h6>
                            <p>Không gian siêu đẹp</p>
                        </div>
                    </article>
                </li>
            </ul>
            <div class="center btmspace-50">
                <p class="nospace"><a href="#">Xem thêm</a></p>
            </div>
        </section>
    </div>
    <div class="wrapper bgded overlay coloured" style="background-image:url('web/images/demo/backgrounds/03.png');">
        <div class="hoc container clear">
            <article class="center">
                <h2 class="heading font-x3">Hãy đến với Sharing box</h2>
                <p class="btmspace-30">Để chúng tôi có thể mang lại cho bạn những giá trị tốt nhất.</p>
                <footer><a class="btn medium" href="#">Đăng kí</a></footer>
            </article>
        </div>
    </div>

@endsection

@section('script')

@endsection
