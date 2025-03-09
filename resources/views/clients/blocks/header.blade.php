<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>ACCTourist</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{asset('clients/assets/images/logos/favicon.png" type="image/x-icon')}}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Flaticon -->
    <link rel="stylesheet" href="{{asset('clients/assets/css/flaticon.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('clients/assets/css/fontawesome-5.14.0.min.css')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('clients/assets/css/bootstrap.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('clients/assets/css/magnific-popup.min.css')}}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{asset('clients/assets/css/nice-select.min.css')}}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('clients/assets/css/aos.css')}}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('clients/assets/css/slick.min.css')}}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('clients/assets/css/style.css')}}">
    
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
                            <div class="logo"><a href="{{ route('home') }}"><img src="{{asset('clients/assets/images/logos/logo-two.png')}}" alt="Logo" title="Logo"></a></div>

                        <div class="nav-outer mx-lg-auto ps-xxl-5 clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                   <div class="mobile-logo">
                                       <a href="{{ route('home') }}">
                                        <img src="{{asset('clients/assets/images/logos/logo-two.png')}}" alt="Logo" title="Logo">
                                       </a>
                                   </div>
                                   
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li class="dropdown current"><a href="#">Tours</a>
                                            <ul>
                                                <li><a href="{{ route('tours') }}">Tour</a></li>
                                                <li><a href="{{ route('tours-guide') }}">Tour Guide</a></li>
                                                <li><a href="{{ route('tour-detail') }}">Tour Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('Destination') }}">Destinations</a></li>
                                        <li class="dropdown current"><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="{{ route('faqs') }}">faqs</a></li>
                                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">blog</a>
                                            <ul>
                                                <li><a href="{{ route('blogs') }}">Blog List</a></li>
                                                <li><a href="{{ route('blogs-detail') }}">Blog Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>
                        
                        <!-- Nav Search -->
                        <div class="nav-search">
                            <button class="far fa-search"></button>
                            <form action="#" class="hide">
                                <input type="text" placeholder="Search" class="searchbox" required="">
                                <button type="submit" class="searchbutton far fa-search"></button>
                            </form>
                        </div>
                        
                        <!-- Menu Button -->
                        <div class="menu-btns py-10">
                            <a href="contact.html" class="theme-btn style-two bgc-secondary">
                                <span data-hover="Book Now">Book Now</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                            <!-- menu sidbar -->
                            <div class="menu-sidebar">
                                <button class="bg-transparent">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>
       