@include('clients.blocks.header_home')
@include('clients.blocks.banner_search')

        <!-- Tour Grid Area start -->
        <section class="tour-grid-page py-100 rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-10 rmb-75">
                        <div class="shop-sidebar">
                            <div class="widget widget-filter" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="widget-title">Lọc theo giá</h6>
                                <div class="price-filter-wrap">
                                    <div class="price-slider-range"></div>
                                    <div class="price">
                                        <span>Giá  </span>
                                        <input type="text" id="price" readonly>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="widget widget-activity" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="widget-title">Điểm đến </h6>
                                <ul class="radio-filter">
                                    <li>
                                        <input class="form-check-input" type="radio" checked name="ByActivities" id="activity1">
                                        <label for="activity1">Sea Beach <span>18</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities" id="activity2">
                                        <label for="activity2">Car Parking <span>29</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities" id="activity3">
                                        <label for="activity3">Laundry Service <span>23</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities" id="activity4">
                                        <label for="activity4">Outdoor Seating <span>25</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities" id="activity5">
                                        <label for="activity5">Reservations <span>26</span></label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByActivities" id="activity6">
                                        <label for="activity6">Smoking Allowed <span>28</span></label>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="widget widget-reviews" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="widget-title">Đánh giá </h6>
                                <ul class="radio-filter">
                                    <li>
                                        <input class="form-check-input" type="radio" checked name="ByReviews" id="review1">
                                        <label for="review1">
                                            <span class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByReviews" id="review2">
                                        <label for="review2">
                                            <span class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt white"></i>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByReviews" id="review3">
                                        <label for="review3">
                                            <span class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star white"></i>
                                                <i class="fas fa-star-half-alt white"></i>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByReviews" id="review4">
                                        <label for="review4">
                                            <span class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star white"></i>
                                                <i class="fas fa-star white"></i>
                                                <i class="fas fa-star-half-alt white"></i>
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="ByReviews" id="review5">
                                        <label for="review5">
                                            <span class="ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star white"></i>
                                                <i class="fas fa-star white"></i>
                                                <i class="fas fa-star white"></i>
                                                <i class="fas fa-star-half-alt white"></i>
                                            </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>

                            <div class="widget widget-duration" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="widget-title">Thời gian </h6>
                                <ul class="radio-filter">
                                    <li>
                                        <input class="form-check-input" type="radio" checked name="Duration" id="duration1">
                                        <label for="duration1">0 - 2 hours</label>
                                    </li>
           
                                </ul>
                            </div>
                            
                            <div class="widget widget-tour" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="widget-title">Các tour du lịch phổ biến</h6>
                                <div class="destination-item tour-grid style-three bgc-lighter">
                                    <div class="image">
                                        <span class="badge">10% Off</span>
                                        <img src="{{ asset('clients/assets/images/widgets/tour1.jpg')}}" alt="Tour">
                                    </div>
                                    <div class="content">
                                        <div class="destination-header">
                                            <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                            <div class="ratting">
                                                <i class="fas fa-star"></i>
                                                <span>(4.8)</span>
                                            </div>
                                        </div>
                                        <h6><a href="tour-details.html">Relinking Beach, Bali, Indonesia</a></h6>
                                    </div>
                                </div>
                                <div class="destination-item tour-grid style-three bgc-lighter">
                                    <div class="image">
                                        <img src="{{ asset('clients/assets/images/widgets/tour1.jpg')}}" alt="Tour">
                                    </div>
                                    <div class="content">
                                        <div class="destination-header">
                                            <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                            <div class="ratting">
                                                <i class="fas fa-star"></i>
                                                <span>(4.8)</span>
                                            </div>
                                        </div>
                                        <h6><a href="tour-details.html">Relinking Beach, Bali, Indonesia</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="widget widget-cta mt-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="content text-white">
                                <span class="h6">Explore The World</span>
                                <h3>Best Tourist Place</h3>
                                <a href="tour-list.html" class="theme-btn style-two bgc-secondary">
                                    <span data-hover="Explore Now">Explore Now</span>
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="image">
                                <img src="{{ asset('clients/assets/images/widgets/cta-widget.png')}}')}}" alt="CTA">
                            </div>
                            <div class="cta-shape"><img src="{{ asset('clients/assets/images/widgets/cta-shape2.png')}}" alt="Shape"></div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="shop-shorter rel z-3 mb-20">

                            <div class="sort-text mb-15 me-4 me-xl-auto">
                                34 Tours tìm thấy
                            </div>
                            <div class="sort-text mb-15 me-4">
                                Sắp xếp theo
                            </div>
                            <select>
                                <option value="default" selected="">Sắp xếp theo </option>
                                <option value="new">Mới nhất</option>
                                <option value="old">Cũ nhất</option>
                                <option value="hight-to-low">Cao đến thấp</option>
                                <option value="low-to-high">Thấp đến cao</option>
                            </select>
                        </div>
                        
                        <div class="tour-grid-wrap">
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                        <div class="image">
                                            <span class="badge bgc-pink">Featured</span>
                                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                            <img src="{{ asset('clients/assets/images/destinations/tour-list1.jpg')}}" alt="Tour List">
                                        </div>
                                        <div class="content">
                                            <div class="destination-header">
                                                <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                                <div class="ratting">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <h6><a href="tour-details.html">Bay Cruise trip by Boat's in Bali, Indonesia</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                                <li><i class="far fa-user"></i> 5-8 guest</li>
                                            </ul>
                                            <div class="destination-footer">
                                                <span class="price"><span>$58.00</span>/person</span>
                                                <a href="tour-details.html" class="theme-btn style-two style-three">
                                                    <i class="fal fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
 
                                <div class="col-lg-12">
                                    <ul class="pagination justify-content-center pt-15 flex-wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                        <li class="page-item disabled">
                                            <span class="page-link"><i class="far fa-chevron-left"></i></span>
                                        </li>
                                        <li class="page-item active">
                                            <span class="page-link">
                                                1
                                                <span class="sr-only">(current)</span>
                                            </span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="far fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Tour Grid Area end -->


@include('clients.blocks.newsletter')    
@include('clients.blocks.footer')
