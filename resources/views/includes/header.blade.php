<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Plan Rajasthan Trip</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!--Custom CSS-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="{{ asset('css/plugin.css') }}" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="{{ asset('fonts/flaticon.css') }} " rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <style>
        /* Googlefont Poppins CDN Link */

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            height: 70px;
            background: #162241;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            z-index: 99;
        }

        nav .navbar {
            height: 100%;
            max-width: 1250px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: auto;
            /* background: red; */
            padding: 0 50px;
        }

        .navbar .logo a {
            font-size: 30px;
            color: #fff;
            text-decoration: none;
            font-weight: 600;
        }

        nav .navbar .nav-links {
            line-height: 70px;
            height: 100%;
        }

        nav .navbar .links {
            display: flex;
            margin-top:20px;
        }

        nav .navbar .links li {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            list-style: none;
            padding: 0 14px;
        }

        nav .navbar .links li a {
            height: 100%;
            text-decoration: none;
            white-space: nowrap;
            color: #fff;
            font-size: 15px;
            font-weight: 500;
        }

        .links li:hover .htmlcss-arrow,
        .links li:hover .js-arrow {
            transform: rotate(180deg);
        }

        nav .navbar .links li .arrow {
            /* background: red; */
            height: 100%;
            width: 22px;
            line-height: 20px;
            text-align: center;
            display: inline-block;
            color: #fff;
            transition: all 0.3s ease;
        }

        nav .navbar .links li .sub-menu {
            position: absolute;
            top: 25px;
            left: 0;
            line-height: 10px;
            background: #162241;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            border-radius: 0 0 4px 4px;
            display: none;
            z-index: 2;
        }

        nav .navbar .links li:hover .htmlCss-sub-menu,
        nav .navbar .links li:hover .js-sub-menu {
            display: block;
            padding: 10px;
        }

        .navbar .links li .sub-menu li {
            padding: 0 22px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 10px;
        }

        .navbar .links li .sub-menu a {
            color: #fff;
            font-size: 15px;
            font-weight: 500;
            padding: 10px;
        }

        .navbar .links li .sub-menu .more-arrow {
            line-height: 40px;
        }

        .navbar .links li .htmlCss-more-sub-menu {
            line-height: 40px;
        }

        .navbar .links li .sub-menu .more-sub-menu {
            position: absolute;
            top: 0;
            left: 100%;
            border-radius: 0 4px 4px 4px;
            z-index: 1;
            display: none;
        }

        .links li .sub-menu .more:hover .more-sub-menu {
            display: block;
        }

        .navbar .search-box {
            position: relative;
            height: 40px;
            width: 40px;
        }

        .navbar .search-box i {
            position: absolute;
            height: 100%;
            width: 100%;
            line-height: 40px;
            text-align: center;
            font-size: 22px;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .navbar .search-box .input-box {
            position: absolute;
            right: calc(100% - 40px);
            top: 80px;
            height: 60px;
            width: 300px;
            background: #162241;
            border-radius: 6px;
            opacity: 0;
            pointer-events: none;
            transition: all 0.4s ease;
        }

        .navbar.showInput .search-box .input-box {
            top: 65px;
            opacity: 1;
            pointer-events: auto;
            background: #162241;
        }

        .search-box .input-box::before {
            content: '';
            position: absolute;
            height: 20px;
            width: 20px;
            background: #162241;
            right: 10px;
            top: -6px;
            transform: rotate(45deg);
        }

        .search-box .input-box input {
            position: absolute;
            top: 50%;
            left: 50%;
            border-radius: 4px;
            transform: translate(-50%, -50%);
            height: 35px;
            width: 280px;
            outline: none;
            padding: 0 15px;
            font-size: 16px;
            border: none;
        }

        .navbar .nav-links .sidebar-logo {
            display: none;
        }

        .navbar .bx-menu {
            display: none;
        }

        @media (max-width:920px) {
            nav .navbar {
                max-width: 100%;
                padding: 0 25px;
            }

            nav .navbar .logo a {
                font-size: 27px;
            }

            nav .navbar .links li {
                padding: 0 10px;
                white-space: nowrap;
            }

            nav .navbar .links li a {
                font-size: 15px;
            }
        }

        @media (max-width:800px) {
            nav {
                /* position: relative; */
            }

            .navbar .bx-menu {
                display: block;
            }

            nav .navbar .nav-links {
                position: fixed;
                top: 0;
                left: -100%;
                display: block;
                max-width: 270px;
                width: 100%;
                background: #162241;
                line-height: 40px;
                padding: 20px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
                transition: all 0.5s ease;
                z-index: 1000;
            }

            .navbar .nav-links .sidebar-logo {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .sidebar-logo .logo-name {
                font-size: 25px;
                color: #fff;
            }

            .sidebar-logo i,
            .navbar .bx-menu {
                font-size: 25px;
                color: #fff;
            }

            nav .navbar .links {
                display: block;
                margin-top: 20px;
            }

            nav .navbar .links li .arrow {
                line-height: 40px;
            }

            nav .navbar .links li {
                display: block;
            }

            nav .navbar .links li .sub-menu {
                position: relative;
                top: 0;
                box-shadow: none;
                display: none;
            }

            nav .navbar .links li .sub-menu li {
                border-bottom: none;
            }

            .navbar .links li .sub-menu .more-sub-menu {
                display: none;
                position: relative;
                left: 0;
            }

            .navbar .links li .sub-menu .more-sub-menu li {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .links li:hover .htmlcss-arrow,
            .links li:hover .js-arrow {
                transform: rotate(0deg);
            }

            .navbar .links li .sub-menu .more-sub-menu {
                display: none;
            }

            .navbar .links li .sub-menu .more span {
                /* background: red; */
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .links li .sub-menu .more:hover .more-sub-menu {
                display: none;
            }

            nav .navbar .links li:hover .htmlCss-sub-menu,
            nav .navbar .links li:hover .js-sub-menu {
                display: none;
            }

            .navbar .nav-links.show1 .links .htmlCss-sub-menu,
            .navbar .nav-links.show3 .links .js-sub-menu,
            .navbar .nav-links.show2 .links .more .more-sub-menu {
                display: block;
            }

            .navbar .nav-links.show1 .links .htmlcss-arrow,
            .navbar .nav-links.show3 .links .js-arrow {
                transform: rotate(180deg);
            }

            .navbar .nav-links.show2 .links .more-arrow {
                transform: rotate(90deg);
            }
        }

        @media (max-width:370px) {
            nav .navbar .nav-links {
                max-width: 100%;
            }
        }
    </style>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- header starts -->
    {{-- <header class="main_header_area headerstye-1" style=" position: -webkit-sticky;
    position: sticky;
    top: 0;">
        <!-- Navigation Bar -->
        <div class="header_menu" id="header_menu">
            <nav class="navbar navbar-default" style="background: #162241;">
                <div class="container">
                    <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-2 pt-2">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand" href="/">
                                <img src="{{ asset('images/icon.png') }}" class="main-logo" alt="image">
                                <img src="{{ asset('images/icon.png') }}" alt="image" class="main-logo">
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">

                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Packages <i class="icon-arrow-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('packages')}}">Family</a></li>
                                        <li><a href="">Friends</a></li>
                                    </ul>
                                </li>

                                <li class="submenu dropdown">
                                    <a href="d#" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">Tours <i
                                            class="icon-arrow-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">College Tour</a></li>
                                        <li><a href="#">Family Tour</a></li>
                                        <li><a href="#">Honeymoon Tour</a></li>
                                    </ul>
                                </li>

                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">Movie <i
                                            class="icon-arrow-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Movie Shoot</a></li>
                                        <li><a href="#">Pre Wedding Shoot</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('about-us') }}">About Us</a></li>
                                <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->

                        <div class="register-login">
                            <a href="#" class="mr-2" data-toggle="modal" data-target="#register"><i
                                    class="icon-user mr-1"></i> Plan Your Trip</a>
                        </div>

                        <div id="slicknav-mobile"></div>
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <!-- Navigation Bar Ends -->
    </header> --}}
    <nav>
        <div class="navbar">
            <i class='bx bx-menu'></i>
            <div class="logo"><a href="{{ url('/') }}"><img src="{{asset('images/icon.png')}}" alt="" height="70px"></a></div>
            <div class="nav-links">
                <div class="sidebar-logo">
                    <span class="logo-name"><img src="{{asset('images/icon.png')}}" alt="" height="70px"></span>
                    <i class='bx bx-x'></i>
                </div>
                <ul class="links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>
                        <a href="#">Packages</a>
                        <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                        <ul class="htmlCss-sub-menu sub-menu">
                            <li><a href="{{route('packages')}}">Package</a></li>
                            {{-- <li><a href="#">Login Forms</a></li>
                            <li><a href="#">Card Design</a></li> --}}
                            {{-- <li class="more">
                                <span><a href="#">More</a>
                                    <i class='bx bxs-chevron-right arrow more-arrow'></i>
                                </span>
                                <ul class="more-sub-menu sub-menu">
                                    <li><a href="#">Neumorphism</a></li>
                                    <li><a href="#">Pre-loader</a></li>
                                    <li><a href="#">Glassmorphism</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </li>
                    {{-- <li>
                        <a href="#">JAVASCRIPT</a>
                        <i class='bx bxs-chevron-down js-arrow arrow '></i>
                        <ul class="js-sub-menu sub-menu">
                            <li><a href="#">Dynamic Clock</a></li>
                            <li><a href="#">Form Validation</a></li>
                            <li><a href="#">Card Slider</a></li>
                            <li><a href="#">Complete Website</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="{{ url('about-us') }}">About Us</a></li>
                    <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#exampleModalScrollable">Plan Your Trip</a></li>

                </ul>
            </div>
            {{-- <div class="search-box">
                <i class='bx bx-search'></i>
                <div class="input-box">
                    <input type="text" placeholder="Search...">
                </div>
            </div> --}}
        </div>
    </nav>
    
    <!-- header ends -->


