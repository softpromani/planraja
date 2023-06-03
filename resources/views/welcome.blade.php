@extends('layouts.guest')
@section('style')
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <style>
        .imgresponsive {
            width: 100%;
            height: 250px !important;
        }
    </style>
@endsection
@section('content')
    <!-- banner starts -->
    <section class="banner overflow-hidden">
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image" style="background-image:url({{ asset('images/hwamahel.png') }});">
                            </div>
                            <div class="swiper-content container">
                                <h4 class="blue">Amazing Places</h4>
                                <h1 class="white mb-4">Explore Your Life Travel Where You Want</h1>
                                <a href="#" class="per-btn">
                                    <span class="white">Discover</span>
                                    <i class="fa fa-arrow-right white"></i>
                                </a>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image" style="background-image:url({{ asset('images/jaipur.jpg') }})">
                            </div>
                            <div class="swiper-content container">
                                <h4 class="blue">Feel Free To Travel</h4>
                                <h1 class="white mb-4">Make you Free to <span>travel</span> with us</h1>
                                <a href="#" class="per-btn">
                                    <span class="white">Discover</span>
                                    <i class="fa fa-arrow-right white"></i>
                                </a>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image" style="background-image:url({{ asset('images/amber.jpg') }})">
                            </div>
                            <div class="swiper-content container">
                                <h4 class="blue">Trip For Your Kids</h4>
                                <h1 class="white mb-4"><span>Sensation Ice Trip</span> Is Coming For Kids</h1>
                                <a href="#" class="per-btn">
                                    <span class="white">Discover</span>
                                    <i class="fa fa-arrow-right white"></i>
                                </a>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!-- banner ends -->

    <!-- form main starts -->
    <div class="form-main">
        <div class="container-fluid d-flex justify-content-center border">
            <div class="form-content border-3">
                <form action="{{ url('/') }}" id="myForm">
                    <h3 class="form-title text-center d-inline white">Find a Places</h3>
                    <div class="d-lg-flex align-items-center justify-content-between">
                        <div class="form-group pr-4 m-0">
                            <div class="input-box">
                                <i class="fa fa-map-marker"></i>
                                <select class="niceSelect" name="destination">
                                    @foreach ($cities as $c)
                                        <option value="{{ $c->id }}">{{ $c->city_name }} {{ $c->id }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group pr-4 m-0">
                            <div class="input-box">
                                <i class="fa fa-calendar"></i>
                                <input id="date-range0" type="text" name="range0" placeholder="Depart Date">
                            </div>
                        </div>

                        <div class="form-group pr-4 m-0">
                            <div class="input-box">
                                <i class="fa fa-calendar"></i>
                                <input id="date-range1" type="text" name="range1" placeholder="Return Date">
                            </div>
                        </div>

                        <div class="form-group pr-4 m-0">
                            <div class="input-box">
                                <i class="fa fa-clock"></i>
                                <select class="niceSelect" name="day">
                                    <option value="">Total Duration</option>
                                    @foreach ($days as $day)
                                        <option value="{{ $day->days }}">{{ $day->days }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group m-0 w-100">
                            <button type="submit" class="nir-btn bg-pink" onclick="myFunction()"><i
                                    class="fa fa-search"></i> Check
                                Availability</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- form main ends -->
    <!-- about-us starts -->
    <br>
    <br>
    <section class="about-us pb-0 mt-5 pt-6">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <div class="about-content">
                            <h4 class="mb-1 blue font-weight-normal">About Plan Rajasthan Trip</h4>
                            <h2>We're truely dedicated to make your travel experience</h2>
                            <p class="mb-3">At PlanRajasthanTrip, we are committed to making your travel experience the
                                best it can be. We understand that traveling to a new destination can be both exciting and
                                overwhelming at the same time. That's why we strive to make your trip as stress-free and
                                enjoyable as possible. <br><br>Our team of travel experts is dedicated to providing you with
                                personalized attention and support throughout your journey. From helping you choose the
                                right travel package to assisting you with transportation and accommodation, we are here to
                                make sure that every aspect of your trip is taken care of.
                            </p>
                            <div class="about-imagelist">
                                <ul class="d-flex justify-content-between">
                                    <li class="mr-2">
                                        <a href="{{ route('packages') }}"> <img src="{{ asset('images/th.jpg') }}"
                                                alt=""></a>
                                    </li>
                                    <li class="mr-2">
                                        <a href="{{ route('packages') }}"> <img src="{{ asset('images/th1.jpg') }}"
                                                alt=""></a>
                                    </li>
                                    <li class="mr-2">
                                        <a href="{{ route('packages') }}"> <img src="{{ asset('images/th.jpg') }}"
                                                alt=""></a>
                                    </li>
                                    <li class="mr-2">
                                        <a href="{{ route('packages') }}"> <img src="{{ asset('images/th1.jpg') }}"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('packages') }}"><img src="{{ asset('images/th.jpg') }}"
                                                alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <div class="swiffy-slider slider-item-ratio slider-item-ratio-16x9 slider-nav-animation slider-nav-animation-fadein slider-item-last-visible"
                            id="swiffy-animation">
                            <a href="{{ route('packages') }}">
                                <ul class="slider-container" id="container1">
                                    <li id="slide1" class=""><img src="{{ asset('images/tour.jpg') }}"
                                            alt="..." loading="lazy"></li>
                                    <li id="slide2" class=""><img src="{{ asset('images/th1.jpg') }}"
                                            alt="..." loading="lazy"></li>
                                    <li id="slide3" class=""><img src="{{ asset('images/th.jpg') }}"
                                            alt="..." loading="lazy"></li>
                                    <li id="slide4" class=""><img src="{{ asset('images/tour.jpg') }}"
                                            alt="..." loading="lazy"></li>
                                    <li id="slide5" class=""><img src="{{ asset('images/th.jpg') }}"
                                            alt="..." loading="lazy"></li>
                                    <li id="slide6" class="slide-visible"><img src="{{ asset('images/th1.jpg') }}"
                                            alt="..." loading="lazy"></li>
                                </ul>
                            </a>
                            <div class="slider-nav" aria-label="Go to previous"></div>
                            <div class="slider-nav slider-nav-next" aria-label="Go to next"></div>

                            <div class="slider-indicators">
                                <div aria-label="Go to slide" class=""></div>
                                <div aria-label="Go to slide" class=""></div>
                                <div aria-label="Go to slide" class=""></div>
                                <div aria-label="Go to slide" class=""></div>
                                <div aria-label="Go to slide" class=""></div>
                                <div aria-label="Go to slide" class="active"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- about-us ends -->
    <section class="top-deals bg-grey pt-9">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">Trending <span>Tour Packages</span></h2>
                <p class="mb-0"> Travel provides us with the opportunity to challenge our preconceived notions and broaden our minds. As we venture into unfamiliar territories, we confront new challenges and adapt to different situations. </p>
            </div>
            <div
                class="swiffy-slider slider-item-show4 slider-nav-round slider-nav-dark slider-nav-autoplay slider-indicators-square slider-indicators-highlight slider-indicators-sm slider-nav-animation-turn">
                <ul class="slider-container">

                    @foreach ($package as $dt)
                        <li class="">
                            <div id="slide9">
                                <div class="trend-image">
                                    <a href="{{ route('packages') }}"> <img class="imgresponsive" src="{{ asset($dt->packageimage->first()->image??'') }}" alt="image"></a>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="{{ route('packages') }}" class="text-secondary">{{$dt->package_name??''}}</a></h3>
                                    <h5 class="card-title"><a href="{{ route('packages') }}" class="text-secondary">{{$dt->duration??''}}</a></h5>
                                    <p class="card-text">{{Str::limit($dt->short_desc??'')}}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <ul class="slider-indicators">
                    <li class=""></li>
                    <li></li>
                    <li class=""></li>
                    <li class=""></li>
                    <li></li>
                    <li class="active"></li>
                    <li class=""></li>
                    <li></li>
                    <li class=""></li>
                </ul>
            </div>

        </div>
    </section>
    <!-- Trending Starts -->
    <section class="trending pb-6 pt-5">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">Perfect <span>Tour Packages</span></h2>
                <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become
                    better people. Each time we travel, we see the world with new eyes.</p>
            </div>

            <div class="trend-box">
                <div class="row">
                    @foreach ($datas as $data)
                        <a href="{{ route('singlePackage', $data->id) }}">
                            <div class="col-lg-3 col-md-6 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset($data->packageimage[0]->image ?? '') }}" alt="image"
                                            style="height:250px">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i>
                                                {{ $data->cityname->city_name ?? '' }}
                                            </h6>
                                            <h4><a
                                                    href="{{ route('singlePackage', $data->id) }}">{{ $data->package_name }}</a>
                                            </h4>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">
                                                {!! $data->short_desc !!}
                                            </p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                                    {{ $data->duration }}</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0">From <span>&#8377;
                                                            {{ number_format($data->total_price, 2) }}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>

            </div>
            {{ $datas->links('pagination::bootstrap-4') }}
        </div>
    </section>
    <!-- Trending Ends -->

    <!-- top destination starts -->
    <br>
    <br>
    <br>
    <section class="top-destination overflow-hidden pb-9">
        <div class="container">
            <div class="desti-inner">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-4 col-md-6 p-1">
                        <div class="desti-title text-center">
                            <h2 class="white">Tour Category</h2>
                            <p class="white mb-0">The Royal Heritage Tour: Experience the grandeur of Rajasthan's palaces
                                and forts, immersing yourself in the opulent lifestyle of the royals.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-1">
                        <div class="desti-image">
                            <a href="{{ route('packages') }}"><img src="{{ asset('images/sheeshmahal.jpg') }}"
                                    alt="desti"></a>
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Desert Tour</h4>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-1">
                        <div class="desti-image">
                            <a href="{{ route('packages') }}"><img src="{{ asset('images/jantar.l.jpg') }}"
                                    alt="desti"></a>
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Tiger Tour</h4>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 p-1">
                        <div class="desti-image">
                            <a href="{{ route('packages') }}"> <img
                                    src="https://img.freepik.com/free-photo/tower-bridge-london-uk_268835-1403.jpg?w=2000&t=st=1669533470~exp=1669534070~hmac=8dcff2ebe07cf2dcfef53be667f6568eff9cd2b6b3b2db5e258b3c17a4eea1b2"
                                    alt="desti"></a>
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Royal Heritage Tour</h4>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 p-1">
                        <div class="desti-image">
                            <a href="{{ route('packages') }}"> <img
                                    src="https://img.freepik.com/free-photo/sunrise-dal-lake-kashmir-india_1232-4765.jpg?w=1800&t=st=1669533491~exp=1669534091~hmac=dafef4234f343d240132196b619144e4b00979336b938474c6bbef2fcc82aa00"
                                    alt="desti"></a>
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Pink City Tour</h4>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 p-1">
                        <div class="desti-image">
                            <a href="{{ route('packages') }}"> <img
                                    src="https://img.freepik.com/free-photo/confluence-indus-zanskar-rivers-leh-ladakh-india_1150-11112.jpg?w=2000&t=st=1669533506~exp=1669534106~hmac=da2a6e2dd9a11fa299c72b3d2db3650c58828b39440cd277afeb9ebd4a576728"
                                    alt="desti"></a>
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Lake Tour</h4>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 p-1">
                        <div class="desti-image">
                            <a href="{{ route('packages') }}"><img
                                    src="https://img.freepik.com/premium-photo/gate-india-famous-monument-new-delhi_400112-203.jpg?w=2000"
                                    alt="desti"></a>
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Social Media Tour</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </section>
    <!-- top destination ends -->
    <!-- testomonial start -->
    <section class="testimonial pb-10 pt-9"
        style="background-image:
             url('{{ asset('images/hwamahel.png') }}');">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0 white">What <span>People Say About Us</span></h2>
                <p class="mb-0 white">Travel has helped us to understand the meaning of life and it has helped us
                    become
                    better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row review-slider1">
                <div class="col-sm-4">
                    <div class="testimonial-item">
                        <div class="testimonial-content mb-5">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description mb-0">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                        <div class="author-title d-flex align-items-center">
                            <a href="#"><img src="{{ asset('images/img1.jpg') }} " alt=""></a>
                            <div class="author-in ml-3">
                                <h5 class="m-0 white"> Elison Marks</h5>
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="testimonial-item">
                        <div class="testimonial-content mb-5">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description mb-0">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                        <div class="author-title d-flex align-items-center">
                            <a href="#"><img src="{{ asset('images/img2.jpg') }}" alt=""></a>
                            <div class="author-in ml-3">
                                <h5 class="m-0 white">Jared Erondu</h5>
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="testimonial-item">
                        <div class="testimonial-content mb-5">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description mb-0">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                        <div class="author-title d-flex align-items-center">
                            <a href="#"><img src="{{ asset('images/img3.jpg') }}" alt=""></a>
                            <div class="author-in ml-3">
                                <h5 class="m-0 white">Kelson Kelly</h5>
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- testimonial ends -->
@endSection
@section('script')
    <script>
        function myFunction() {
            document.getElementById("myForm").submit();
        }
    </script>
@endsection
