@include('clients.blocks.header_home')
@include('clients.blocks.banner_search')

<!-- Khu vực Điểm đến Phổ biến bắt đầu -->
<section class="popular-destinations-area pt-100 pb-90 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center counter-text-wrap mb-40" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <h2>Khám phá Điểm đến Phổ biến</h2>
                    <p>Một trang web <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> trải nghiệm phổ biến nhất</p>
                    <ul class="destinations-nav mt-30">
                        <li data-filter="*" class="active">Tất cả</li>
                        <li data-filter=".features">Miền Bắc</li>
                        <li data-filter=".recent">Miền Trung</li>
                        <li data-filter=".city">Miền Nam</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row gap-10 destinations-active justify-content-center">
                <div class="col-xl-3 col-md-6 item recent rating">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{asset('clients/assets/images/destinations/destination1.jpg')}}" alt="Điểm đến">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Bãi biển Thái Lan</a></h6>
                            <span class="time">5352+ tour & 856+ Hoạt động</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 item features">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{asset('clients/assets/images/destinations/destination2.jpg')}}" alt="Điểm đến">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Parga, Hy Lạp</a></h6>
                            <span class="time">5352+ tour & 856+ Hoạt động</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 item recent city rating">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{asset('clients/assets/images/destinations/destination3.jpg')}}" alt="Điểm đến">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Castellammare del Golfo, Ý</a></h6>
                            <span class="time">5352+ tour & 856+ Hoạt động</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 item city features">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{asset('clients/assets/images/destinations/destination4.jpg')}}" alt="Điểm đến">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Khu bảo tồn Canada, Canada</a></h6>
                            <span class="time">5352+ tour & 856+ Hoạt động</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 item recent">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{asset('clients/assets/images/destinations/destination5.jpg')}}" alt="Điểm đến">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Dubai, Hoa Kỳ</a></h6>
                            <span class="time">5352+ tour & 856+ Hoạt động</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 item features rating">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{asset('clients/assets/images/destinations/destination6.jpg')}}" alt="Điểm đến">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Milos, Hy Lạp</a></h6>
                            <span class="time">5352+ tour & 856+ Hoạt động</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Khu vực Điểm đến Phổ biến kết thúc -->

<!-- Khu vực Ưu đãi Nóng bắt đầu -->
<section class="hot-deals-area pt-70 pb-50 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center counter-text-wrap mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <h2>Khám phá Ưu đãi Nóng</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <span class="badge">Giảm 10%</span>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{asset('clients/assets/images/destinations/hot-deal1.jpg')}}" alt="Ưu đãi Nóng">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Thành phố Venice, Ý</span>
                        <h5><a href="tour-details.html">Kênh đào Venice, Mùa hè Metropolitan ở Venice</a></h5>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$58.00</span>/người</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <a href="destination-details.html" class="theme-btn style-three">
                        <span data-hover="Khám phá">Khám phá</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Khu vực Ưu đãi Nóng kết thúc -->

@include('clients.blocks.newsletter')
@include('clients.blocks.footer')