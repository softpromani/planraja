@extends('layouts.guest')

@section('content')

<!-- BreadCrumb Starts -->
    <!-- <section class="breadcrumb-main pb-0" style="background-image: {{ url('images/about-2.jpg') }};"> -->
    <section class="breadcrumb-main pb-0" style=" background-image: url('{{asset('images/about-2.jpg')}}');">
    	 
        <div class="breadcrumb-outer pt-10">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active"
                                aria-current="page">About Us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- form starts -->
    <section class="about-us">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 col-sm-12">
                        <div class="about-content">
                            <h4 class="mb-1 blue font-weight-normal">About planrajasthan</h4>
                            <h2>We're truely dedicated to make your travel experience best</h2>
                            <p class="mb-3">Top Tour Operators and Travel Agency. We offering in total 793 tours and
                                holidays throughout the world. Combined we have received 1532 customer reviews and an
                                average rating of 5 out of 5 stars. <br><br>Travel has helped us to understand the
                                meaning of life and it has helped us become better people. Each time we travel, we see
                                the world with new eyes.</p>
                            <div class="about-imagelist">
                                <ul class="d-flex justify-content-between">
                                    <li class="mr-2">
                                        <img src="{{ asset('images/about-1.jpg') }}" alt="">
                                    </li>
                                    <li class="mr-2">
                                        <img src="{{ asset('images/about-2.jpg') }}" alt="">
                                    </li>
                                    <li class="mr-2">
                                        <img src="{{ asset('images/about-3.jpg') }}"
                                             alt="">
                                    </li>
                                    <li class="mr-2">
                                        <img src="{{ asset('images/about-4.jpg') }}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{ asset('images/about-5.jpg') }}" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="about-image">
                            <img src="{{ asset('images/about-2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- form ends -->

    <!-- about-us starts -->
    <section class="about-us1 bg-grey pb-6">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 col-sm-12">
                        <div class="about-content">
                            <h2 class="">Why Choose Us</h2>
                            <p class="mb-2">Top Tour Operators and Travel Agency. We offering in total 793 tours and
                                holidays throughout the world. Combined we have received 1532 customer reviews and an
                                average rating of 5 out of 5 stars. <br>Travel has helped us to understand the meaning
                                of life and it has helped us become better people. Each time we travel, we see the world
                                with new eyes.</p>
                            <div class="about-featured mb-0">
                                <ul>
                                    <li>Safety Travel System</li>
                                    <li>Budget-Friendly Tour</li>
                                    <li>Expert Trip Planning</li>
                                    <li>Fast Communication</li>
                                    <li>Right Solution & Guide</li>
                                    <li>24/7 Customer Support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="about-image-main">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 mt-4 mb-4">
                                    <img src="{{ asset('images/about-1.jpg') }}" alt="">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <img src="{{ asset('images/about-1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- why us starts -->
            <div class="why-us pt-4 border-t">
                <div class="why-us-box">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <div class="why-us-item text-center bg-lgrey">
                                <div class="why-us-icon mb-2">
                                    <i class="flaticon-call pink"></i>
                                </div>
                                <div class="why-us-content">
                                    <h4><a href="#">Advice & Support</a></h4>
                                    <p class="mb-0">Travel worry free knowing that we're here if you need us, 24 hours a
                                        day</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <div class="why-us-item text-center bg-lgrey">
                                <div class="why-us-icon mb-2">
                                    <i class="flaticon-global pink"></i>
                                </div>
                                <div class="why-us-content">
                                    <h4><a href="#">Air Ticketing</a></h4>
                                    <p class="mb-0">Travel worry free knowing that we're here if you need us, 24 hours a
                                        day</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <div class="why-us-item text-center bg-lgrey">
                                <div class="why-us-icon mb-2">
                                    <i class="flaticon-building pink"></i>
                                </div>
                                <div class="why-us-content">
                                    <h4><a href="#">Hotel Services</a></h4>
                                    <p class="mb-0">Travel worry free knowing that we're here if you need us, 24 hours a
                                        day</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <div class="why-us-item text-center bg-lgrey">
                                <div class="why-us-icon mb-2">
                                    <i class="flaticon-location-pin pink"></i>
                                </div>
                                <div class="why-us-content">
                                    <h4><a href="#">Tour Packages</a></h4>
                                    <p class="mb-0">Travel worry free knowing that we're here if you need us, 24 hours a
                                        day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- why us ends -->
        </div>
    </section>
    <!-- about-us ends -->

@endSection
