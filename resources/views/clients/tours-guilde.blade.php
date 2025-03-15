@include('clients.blocks.header_home')
<section class="hidden-bar">
    <div class="inner-box text-center">
        <div class="cross-icon"><span class="fa fa-times"></span></div>
        <div class="title">
            <h4>TÀI KHOẢN</h4>
        </div>
        <div class="user-menu">
            <ul>
                <li><a href="{{ route('login') }}"><i class="bx bx-log-in"></i> Đăng nhập</a></li>
                <li><a href="{{ route('register') }}"><i class="bx bx-user-plus"></i> Đăng ký</a></li>
            </ul>
        </div>
        
        <div class="contact-info mt-5">
            <h5 class="mb-3">Thông tin liên hệ</h5>
            <ul class="list-style-one">
                <li><i class="fal fa-map-marker-alt"></i> 475A Điện Biên Phủ, Phường 25, Bình Thạnh, TP.HCM</li>
                <li><i class="fal fa-envelope"></i> <a href="mailto:duongnguyen280403@gmail.com">duongnguyen280403@gmail</a></li>
                <li><i class="fal fa-phone"></i> <a href="tel:+84353704987">+84 353 704 987</a></li>
            </ul>
        </div>
        
        <div class="social-links mt-4">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</section>
@include('clients.blocks.banner')
<!-- Khu vực Lợi ích bắt đầu -->
<section class="benefit-area mt-100 rel z-1">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-5 col-lg-6">
                <div class="mobile-app-content rmb-55" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title counter-text-wrap mb-40">
                        <h2>Sổ tay Khám phá Tối thượng Hướng dẫn Hoàn chỉnh cho Hành trình của bạn</h2>
                    </div>
                    <p>Chúng tôi làm việc chặt chẽ với khách hàng để hiểu rõ các thách thức và mục tiêu, cung cấp các giải pháp tùy chỉnh để nâng cao hiệu quả, tăng lợi nhuận và thúc đẩy sự phát triển bền vững.</p>
                    <div class="skillbar mt-80" data-percent="93">
                        <span class="skillbar-title">Sự hài lòng của khách hàng</span>
                        <div class="progress-bar-striped skillbar-bar progress-bar-animated" role="progressbar"
                            aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                        <span class="skill-bar-percent"></span>
                    </div>
                    <ul class="list-style-two mt-35 mb-30">
                        <li>Công ty có kinh nghiệm</li>
                        <li>Đội ngũ chuyên nghiệp</li>
                    </ul>
                    <a href="about.html" class="theme-btn style-two">
                        <span data-hover="Khám phá Hướng dẫn">Khám phá Hướng dẫn</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="benefit-image-part style-two">
                    <div class="image-one" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1500"
                        data-aos-offset="50">
                        <img src="{{asset('clients/assets/images/benefit/benefit1.png')}}" alt="Lợi ích">
                    </div>
                    <div class="image-two" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                        data-aos-offset="50">
                        <img src="{{asset('clients/assets/images/benefit/benefit2.png')}}" alt="Lợi ích">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Khu vực Lợi ích kết thúc -->


<!-- Khu vực Đội ngũ bắt đầu -->
<section class="about-team-area pt-100 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center counter-text-wrap mb-50" data-aos="fade-up"
                    data-aos-duration="1500" data-aos-offset="50">
                    <h2>Gặp gỡ Đội ngũ Hướng dẫn viên Du lịch giàu Kinh nghiệm của chúng tôi</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item hover-content" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <img src="{{asset('clients/assets/images/team/guide1.jpg')}}" alt="Hướng dẫn viên">
                    <div class="content">
                        <h6>John L. Simmons</h6>
                        <span class="designation">Đồng sáng lập</span>
                        <div class="social-style-one inner-content">
                            <a href="contact.html"><i class="fab fa-twitter"></i></a>
                            <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                            <a href="contact.html"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-20">
                <a href="about.html" class="theme-btn style-three">
                    <span data-hover="Xem tất cả">Xem tất cả hướng dẫn viên </span>
                    <i class="fal fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Khu vực Đội ngũ kết thúc -->

@include('clients.blocks.newsletter')
@include('clients.blocks.footer')
