@include('clients.blocks.header_home')
@include('clients.blocks.banner')
<!-- Khu vực Thông tin Liên hệ bắt đầu -->
<section class="contact-info-area pt-100 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="contact-info-content mb-30 rmb-55" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title mb-30">
                        <h2>Hãy nói chuyện với các Hướng dẫn viên Du lịch Chuyên gia của chúng tôi</h2>
                    </div>
                    <p>Đội ngũ hỗ trợ tận tâm của chúng tôi luôn sẵn sàng giúp bạn với bất kỳ câu hỏi hoặc vấn đề nào, cung cấp các giải pháp nhanh chóng và cá nhân hóa để đáp ứng nhu cầu của bạn.</p>
                    <div class="features-team-box mt-40">
                        <h6>85+ Thành viên Đội ngũ Chuyên gia</h6>
                        <div class="feature-authors">
                            <img src="{{asset('clients/assets/images/features/feature-author1.jpg')}}" alt="Tác giả">
                            <img src="{{asset('clients/assets/images/features/feature-author2.jpg')}}" alt="Tác giả">
                            <img src="{{asset('clients/assets/images/features/feature-author3.jpg')}}" alt="Tác giả">
                            <img src="{{asset('clients/assets/images/features/feature-author4.jpg')}}" alt="Tác giả">
                            <img src="{{asset('clients/assets/images/features/feature-author5.jpg')}}" alt="Tác giả">
                            <img src="{{asset('clients/assets/images/features/feature-author6.jpg')}}" alt="Tác giả">
                            <img src="{{asset('clients/assets/images/features/feature-author7.jpg')}}" alt="Tác giả">
                            <span>+</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                            <div class="icon"><i class="fas fa-envelope"></i></div>
                            <div class="content">
                                <h5>Cần Hỗ trợ & Giúp đỡ</h5>
                                <div class="text"><i class="far fa-envelope"></i> <a href="mailto:Duongnguyen280403@gmail.com">duongnguyen280403@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                            <div class="icon"><i class="fas fa-phone"></i></div>
                            <div class="content">
                                <h5>Cần Gấp</h5>
                                <div class="text"><i class="far fa-phone"></i> <a href="callto:+84353704987">+84 0353704987</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="content">
                                <h5>Chi nhánh</h5>
                                <div class="text"><i class="fal fa-map-marker-alt"></i> Hutech, quận 9, TP.HCM, Việt Nam</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="content">
                                <h5>Địa chỉ Văn phòng Chính</h5>
                                <div class="text"><i class="fal fa-map-marker-alt"></i> Hutech, quận 9, TP.HCM, Việt Nam</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Khu vực Thông tin Liên hệ kết thúc -->

<!-- Khu vực Biểu mẫu Liên hệ bắt đầu -->
<section class="contact-form-area py-70 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="comment-form bgc-lighter z-1 rel mb-30 rmb-55">
                    <form id="contactForm" class="contactForm" name="contactForm" action="assets/php/form-process.php" method="post" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title">
                            <h2>Liên hệ với chúng tôi</h2>
                        </div>
                        <p>Địa chỉ email của bạn sẽ không được công bố. Các trường bắt buộc được đánh dấu *</p>
                        <div class="row mt-35">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Họ và tên</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Randy J. Thomas" value="" required data-error="Vui lòng nhập Tên của bạn">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone_number">Số điện thoại</label>
                                    <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Số điện thoại" value="" required data-error="Vui lòng nhập Số điện thoại của bạn">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Địa chỉ Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Nhập email" value="" required data-error="Vui lòng nhập Email của bạn">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message">Tin nhắn của bạn</label>
                                    <textarea name="message" id="message" class="form-control" rows="5" placeholder="Tin nhắn" required data-error="Vui lòng nhập Tin nhắn của bạn"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                   <ul class="radio-filter mb-25">
                                        <li>
                                            <input class="form-check-input" type="radio" name="terms-condition" id="terms-condition">
                                            <label for="terms-condition">Lưu tên, email và trang web của tôi trong trình duyệt này cho lần bình luận tiếp theo.</label>
                                        </li>
                                    </ul>
                                    <button type="submit" class="theme-btn style-two">
                                        <span data-hover="Gửi Bình luận">Gửi Bình luận</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </button>
                                    <div id="msgSubmit" class="hidden"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-images-part" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{asset('clients/assets/images/contact/contact1.jpg')}}" alt="Liên hệ">
                        </div>
                        <div class="col-6">
                            <img src="{{asset('clients/assets/images/contact/contact2.jpg')}}" alt="Liên hệ">
                        </div>
                        <div class="col-6">
                            <img src="{{asset('clients/assets/images/contact/contact3.jpg')}}" alt="Liên hệ">
                        </div>
                    </div>
                    <div class="circle-logo">
                        <img src="{{asset('clients/assets/images/contact/icon.png')}}" alt="Logo">
                        <span class="title h2">ACCTourist</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Khu vực Biểu mẫu Liên hệ kết thúc -->

<!-- Bản đồ Liên hệ bắt đầu -->
<div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4276420661968!2d106.78537299999999!3d10.8550427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527c3debb5aad%3A0x5fb58956eb4194d0!2zxJDhuqFpIEjhu41jIEh1dGVjaCBLaHUgRQ!5e0!3m2!1svi!2s!4v1741599289996!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- Bản đồ Liên hệ kết thúc -->

@include('clients.blocks.footer')