<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Plan Rajasthan Trip</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!--Custom CSS-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="{{ asset('css/plugin.css') }}" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="{{ asset('fonts/flaticon.css')}} " rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- header starts -->
    <header class="main_header_area headerstye-1">
        <!-- Navigation Bar -->
        <div class="header_menu" id="header_menu">
            <nav class="navbar navbar-default">
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
                                        <li><a href="">Family</a></li>
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
    </header>
    <!-- header ends -->
