<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>ACCTourist</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('clients/assets/images/logos/favicon.png') }}" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/flaticon.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/fontawesome-5.14.0.min.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/bootstrap.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/magnific-popup.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/nice-select.min.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/aos.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/slick.min.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('clients/assets/css/custom-css.css') }}">
</head>

<body>
    <div class="page-wrapper">

        {{-- <!-- Preloader -->
        <div class="preloader"><div class="custom-loader"></div></div> --}}

        <!-- main header -->
        <header class="main-header header-one white-menu menu-absolute">
            <!--Header-Upper-->
            <div class="header-upper py-30 rpy-0">
                <div class="container-fluid clearfix">

                    <div class="header-inner rel d-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo"><a href="{{ route('home') }}"><img
                                        src="{{ asset('clients/assets/images/logos/logo-two.png') }}" alt="Logo"
                                        title="Logo"></a></div>
                        </div>

                        <div class="nav-outer mx-lg-auto ps-xxl-5 clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <div class="mobile-logo">
                                        <a href="{{ route('home') }}">
                                            <img src="{{ asset('clients/assets/images/logos/logo-two.png') }}"
                                                alt="Logo" title="Logo">
                                        </a>
                                    </div>

                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                        data-bs-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="{{ Request::url() == route('home') ? 'active' : '' }}"><a
                                                href="{{ route('home') }}">Trang chủ </a></li>
                                        <li class="{{ Request::url() == route('about') ? 'active' : '' }}"><a
                                                href="{{ route('about') }}">Giới thiệu </a></li>
                                        <li class="{{ Request::url() == route('tours') ? 'active' : '' }}"><a
                                                href="{{ route('tours') }}">Tours </a></li>
                                        <li class="{{ Request::url() == route('tours-guide') ? 'active' : '' }}"><a
                                                href="{{ route('tours-guide') }}">Hướng dẫn viên </a></li>
                                        <li class="{{ Request::url() == route('Destination') ? 'active' : '' }}"><a
                                                href="{{ route('Destination') }}">Điểm đến </a></li>
                                        <li class="{{ Request::url() == route('contact') ? 'active' : '' }}"><a
                                                href="{{ route('contact') }}">Liên Hệ </a></li>
                                        <li class="{{ Request::url() == route('blogs') ? 'active' : '' }}"><a
                                                href="{{ route('blogs') }}">Blogs</a></li>
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>

                        <!-- Nav Search -->
                        <div class="nav-search">
                            <button class="far fa-search"></button>
                            <form action="#" class="hide">
                                <input type="text" placeholder="Tìm kiếm" class="searchbox" required="">
                                <button type="submit" class="searchbutton far fa-search"></button>
                            </form>
                        </div>

                        <!-- Menu Button -->
                        <div class="menu-btns py-10">
                            <a href="{{ route('tours') }}" class="theme-btn style-two bgc-secondary">
                                <span data-hover="Đặt ngay">Đặt ngay</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                            <!-- menu sidbar -->
                            <div class="menu-sidebar">
                                <button class="bg-transparent">
                                    <i class='bx bxs-user' style="font-size: 38px; color: white;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
            <!-- Hidden Sidebar -->
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
                            <li><i class="fal fa-map-marker-alt"></i> 475A Điện Biên Phủ, Phường 25, Bình Thạnh, TP.HCM
                            </li>
                            <li><i class="fal fa-envelope"></i> <a
                                    href="mailto:duongnguyen280403@gmail.com">duongnguyen280403@gmail</a></li>
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
            <!--End Hidden Sidebar -->
        </header>
    </div>
</body>

</html>
