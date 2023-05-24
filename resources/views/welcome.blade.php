@extends('layouts.guest')
@section('style')
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet"
        crossorigin="anonymous">
@endsection
@section('content')
    <!-- banner starts -->
    <section class="banner overflow-hidden">
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner">
                            <div class="slide-image"
                                style="background-image:url({{asset('images/hwamahel.png')}});">
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
                            <div class="slide-image"
                                style="background-image:url({{asset('images/jaipur.jpg')}})">
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
                            <div class="slide-image"
                                style="background-image:url({{asset('images/amber.jpg')}})">
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
                            <button type="submit" class="nir-btn bg-pink" onclick="myFunction()"><i class="fa fa-search"></i> Check
                                Availability</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- form main ends -->

    <!-- why us starts -->
    {{-- <section class="featured-us pb-0">
        <div class="container">
            <div class="featured-us-box pt-9">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="featured-us-item d-sm-flex align-items-center justify-content-between">
                            <div class="featured-us-icon">
                                <i class="flaticon-price pink"></i>
                            </div>
                            <div class="featured-us-content">
                                <h4 class="mb-1"><a href="#">Competetive Pricing</a></h4>
                                <p class="mb-0">With 500+ suppliers and the purchasing power of 300 million members
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="featured-us-item d-sm-flex align-items-center justify-content-between">
                            <div class="featured-us-icon">
                                <i class="flaticon-quality pink"></i>
                            </div>
                            <div class="featured-us-content">
                                <h4 class="mb-1"><a href="#">Award Winning Service</a></h4>
                                <p class="mb-0">Fabulous Travel worry free knowing that we're here if you need us, 24
                                    hours a day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="featured-us-item d-sm-flex align-items-center justify-content-between">
                            <div class="featured-us-icon">
                                <i class="flaticon-global pink"></i>
                            </div>
                            <div class="featured-us-content">
                                <h4 class="mb-1"><a href="#">Worldwide Coverage</a></h4>
                                <p class="mb-0">1,200,000 hotels in more than 200 countries and regions & flights to
                                    over 5,000 citites.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- why us ends -->

    <!-- about-us starts -->
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
                                        <img src="{{ asset('images/th.jpg') }}" alt="">
                                    </li>
                                    <li class="mr-2">
                                        <img src="{{ asset('images/th1.jpg') }}" alt="">
                                    </li>
                                    <li class="mr-2">
                                        <img src="{{ asset('images/th.jpg') }}" alt="">
                                    </li>
                                    <li class="mr-2">
                                        <img src="{{ asset('images/th1.jpg') }}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{ asset('images/th.jpg') }}" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <div class="about-image">
                            <img class="img-fluid" src="{{ asset('images/tour.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- about-us ends -->
    <!-- top deal starts -->
    <section class="top-deals bg-grey pt-9">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">Trending <span>tour packages</span></h2>
                <p class="mb-0">These trending tour packages offer a glimpse into the diverse facets of Rajasthan, be it
                    its rich history, stunning landscapes, wildlife, cultural celebrations, or luxurious experiences. Choose
                    the package that resonates with your interests and embark on an unforgettable journey through the
                    majestic state of Rajasthan.</p>
            </div>
            <div class="row team-slider">
                <div class="col-lg-4 slider-item">
                    <div class="slider-image">
                        <img src="{{ asset('images/rj4.jpg') }}" alt="image" height="600px">
                    </div>
                    <div class="slider-content">
                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> United Kingdom</h6>
                        <h4><a href="#">Earning Asiana Club Miles</a></h4>
                        <p>With upto 30% Off, experience Europe your way!</p>
                        <div class="deal-price">
                            <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 slider-item">
                    <div class="slider-image">
                        <img src="{{ asset('images/rj1.jpg') }}" alt="image" height="600px">
                    </div>
                    <div class="slider-content">
                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Thailand</h6>
                        <h4><a href="#">Save big on hotels!</a></h4>
                        <p>With upto 30% Off, experience Europe your way!</p>
                        <div class="deal-price">
                            <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 slider-item">
                    <div class="slider-image">
                        <img src="{{ asset('images/plan2.png') }}" alt="image" height="600px">
                    </div>
                    <div class="slider-content">
                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> South Korea</h6>
                        <h4><a href="#">Experience Europe Your Way</a></h4>
                        <p>With upto 30% Off, experience Europe your way!</p>
                        <div class="deal-price">
                            <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 slider-item">
                    <div class="slider-image">
                        <img src="{{ asset('images/rj.jpg') }}" alt="image" height="600px">
                    </div>
                    <div class="slider-content">
                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Germany</h6>
                        <h4><a href="#">Earning Asiana Club Miles</a></h4>
                        <p>With upto 30% Off, experience Europe your way!</p>
                        <div class="deal-price">
                            <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- top deal ends -->
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
                        <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                            <div class="trend-item">
                                <div class="trend-image">
                                    <img src="https://img.freepik.com/free-photo/udaipur-city-view-from-hotel-balcony-rajasthan-india_53876-65505.jpg?w=2000&t=st=1669533247~exp=1669533847~hmac=969873ad3d77d8952f2eb85f3b0a1eb178609de906829dee7c1adf16e8c76db8"
                                        alt="image">
                                </div>
                                <div class="trend-content-main">
                                    <div class="trend-content">
                                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i>
                                        </h6>
                                        <h4><a
                                                href="{{ route('singlePackage', $data->id) }}">{{ $data->package_name }}</a>
                                        </h4>
                                        <div class="rating-main d-flex align-items-center">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                            <span class="ml-2">38 Reviews</span>
                                        </div>
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
                    @endforeach

                </div>

            </div>
            {{ $datas->links('pagination::bootstrap-4') }}
        </div>
    </section>
    <!-- Trending Ends -->

    <!-- top destination starts -->
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
                            <img src="{{asset('images/sheeshmahal.jpg')}}"
                                alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">New York Tour</h4>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-1">
                        <div class="desti-image">
                            <img src="{{asset('images/jantar.l.jpg')}}"
                                alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Armania Tour</h4>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 p-1">
                        <div class="desti-image">
                            <img src="https://img.freepik.com/free-photo/tower-bridge-london-uk_268835-1403.jpg?w=2000&t=st=1669533470~exp=1669534070~hmac=8dcff2ebe07cf2dcfef53be667f6568eff9cd2b6b3b2db5e258b3c17a4eea1b2"
                                alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Manchester Tour</h4>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 p-1">
                        <div class="desti-image">
                            <img src="https://img.freepik.com/free-photo/sunrise-dal-lake-kashmir-india_1232-4765.jpg?w=1800&t=st=1669533491~exp=1669534091~hmac=dafef4234f343d240132196b619144e4b00979336b938474c6bbef2fcc82aa00"
                                alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">kathmandu Tour</h4>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 p-1">
                        <div class="desti-image">
                            <img src="https://img.freepik.com/free-photo/confluence-indus-zanskar-rivers-leh-ladakh-india_1150-11112.jpg?w=2000&t=st=1669533506~exp=1669534106~hmac=da2a6e2dd9a11fa299c72b3d2db3650c58828b39440cd277afeb9ebd4a576728"
                                alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Tokyo Tour</h4>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 p-1">
                        <div class="desti-image">
                            <img src="https://img.freepik.com/premium-photo/gate-india-famous-monument-new-delhi_400112-203.jpg?w=2000"
                                alt="desti">
                            <div class="desti-content">
                                <div class="rating mb-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <h4 class="white mb-0">Norwich Tour</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </section>
    <!-- top destination ends -->

    <!-- Discount action starts -->
    {{-- <section class="discount-action pt-0">
        <div class="container">
            <div class="call-banner">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 col-md-6 p-0">
                        <div class="call-banner-inner text-center bg-navy">
                            <h4 class="white">SUMMER SPECIAL UPTO 25% OFF</h4>
                            <h2 class="white mb-4">SPEND THE BEST VACATION WITH US <br>The nights of Thailand</h2>
                            <a href="#" class="nir-btn">View Details <i
                                    class="fa fa-arrow-right white pl-1"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 p-0"></div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Discount action Ends -->

    <!-- Counter -->
    {{-- <section class="counter-main pt-0 pb-6">
        <div class="container">
            <div class="counter text-center">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                        <div class="counter-item bg-pink">
                            <i class="fa fa-users white mb-1"></i>
                            <h3 class="value mb-0 white">100</h3>
                            <h4 class="m-0 white">Happy Customers</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                        <div class="counter-item bg-pink">
                            <i class="fa fa-plane white mb-1"></i>
                            <h3 class="value mb-0 white">50</h3>
                            <h4 class="m-0 white">Amazing Tours </h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12mb-4">
                        <div class="counter-item bg-pink">
                            <i class="fa fa-chart-bar white mb-1"></i>
                            <h3 class="value mb-0 white">3472</h3>
                            <h4 class="m-0 white">In Business</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                        <div class="counter-item bg-pink">
                            <i class="fa fa-support white mb-1"></i>
                            <h3 class="value mb-0 white">523</h3>
                            <h4 class="m-0 white">Support Cases </h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Counter -->

    <!-- Fav destination Starts -->
    {{-- <section class="trending destination pb-6 pt-9"
        style="background-image:
             url({{asset('images/hwamahel.png')}});">
        <div class="container">
            <div class="section-title section-title-w text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0 white">Find Your <strong>Favourite Destination</strong></h2>
                <p class="mb-0 white">Travel has helped us to understand the meaning of life and it has helped us
                    become
                    better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="trend-box">
                <div class="price-navtab text-center mb-4">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#historical">Historical</a></li>
                        <li><a data-toggle="tab" href="#weekend">Weekend</a></li>
                        <li><a data-toggle="tab" href="#holidays">Holidays</a></li>
                        <li><a data-toggle="tab" href="#special">Special Tour</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="historical" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('images/trending8.jpg') }}" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Nepal Special Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 852 Visiting Places <i
                                                    class="fa fa-map-marker mr-1 ml-3"></i> Nepal.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore
                                                - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('images/1.jpg') }}" class="d-author mr-2"
                                                        alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-6 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('images/trending11.jpg') }}" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Canada New Year Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 615 Visiting Places <i
                                                    class="fa fa-map-marker mr-1 ml-3"></i> Canada.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore
                                                - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('images/2.jpg') }}" class="d-author mr-2"
                                                        alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('images/trending12.jpg') }}" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">25 Reviews</span>
                                            </div>
                                            <h4><a href="#">America Christmas Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 926 Visiting Places <i
                                                    class="fa fa-map-marker mr-1 ml-3"></i> America.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore
                                                - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('images/1.jpg') }}" class="d-author mr-2"
                                                        alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="weekend" class="tab-pane fade">
                        <div class="row">
                            <div class=" col-lg-4 col-md-6 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('images/trending11.jpg') }}" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Nepal Weekend Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 852 Visiting Places <i
                                                    class="fa fa-map-marker mr-1 ml-3"></i> Nepal.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore
                                                - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('images/blog4.jpg') }}" class="d-author mr-2"
                                                        alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-6 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('images/trending12.jpg') }}" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Canada Weekend Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 615 Visiting Places <i
                                                    class="fa fa-map-marker mr-1 ml-3"></i> Canada.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore
                                                - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('images/about-1.jpg') }}" class="d-author mr-2"
                                                        alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('images/about-1.jpg') }} " alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">25 Reviews</span>
                                            </div>
                                            <h4><a href="#">America Weekend Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 926 Visiting Places <i
                                                    class="fa fa-map-marker mr-1 ml-3"></i> America.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore
                                                - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('images/1.jpg') }}" class="d-author mr-2"
                                                        alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="holidays" class="tab-pane fade">
                        <div class="row">
                            <div class=" col-lg-4 col-md-6 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('images/trending12.jpg') }}" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Nepal Holidays Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 852 Visiting Places <i
                                                    class="fa fa-map-marker mr-1 ml-3"></i> Nepal.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore
                                                - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('images/1.jpg') }}" class="d-author mr-2"
                                                        alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-6 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('images/trending8.jpg') }}" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Canada Holidays Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 615 Visiting Places <i
                                                    class="fa fa-map-marker mr-1 ml-3"></i> Canada.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore
                                                - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('images/1.jpg') }}" class="d-author mr-2"
                                                        alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('images/trending12.jpg') }}" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">25 Reviews</span>
                                            </div>
                                            <h4><a href="#">America Holidays Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 926 Visiting Places <i
                                                    class="fa fa-map-marker mr-1 ml-3"></i> America.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore
                                                - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('images/1.jpg') }} " class="d-author mr-2"
                                                        alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="special" class="tab-pane fade">
                        <div class="row">
                            <div class=" col-lg-4 col-md-6 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('images/trending12.jpg') }}" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Nepal Special Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 852 Visiting Places <i
                                                    class="fa fa-map-marker mr-1 ml-3"></i> Nepal.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore
                                                - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('images/1.jpg') }}" class="d-author mr-2"
                                                        alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-6 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('images/trending11.jpg') }}" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Canada Special Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 615 Visiting Places <i
                                                    class="fa fa-map-marker mr-1 ml-3"></i> Canada.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore
                                                - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('images/2.jpg') }}" class="d-author mr-2"
                                                        alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{ asset('images/trending11.jpg') }}" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">25 Reviews</span>
                                            </div>
                                            <h4><a href="#">America Special Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 926 Visiting Places <i
                                                    class="fa fa-map-marker mr-1 ml-3"></i> America.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore
                                                - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img
                                                        src="{{ asset('images/jaipur.jpg') }}" class="d-author mr-2"
                                                        alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i
                                                                class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section> --}}
    <!-- Fav destination Ends -->



    <!-- testomonial start -->
    <section class="testimonial pb-10 pt-9"
        style="background-image:
             url('{{asset('images/hwamahel.png')}}');">
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

    <!-- Instagram starts -->
    {{-- <section class="insta-main p-0">
        <div class="insta-inner">
            <div class="follow-button">
                <h5 class="m-0"><a href="#" title="">Follow on Instagram</a></h5>
            </div>
            <div class="row attract-slider">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="{{ asset('images/ins-3.jpg') }}" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="{{ asset('images/ins-4.jpg') }}" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="{{ asset('images/ins-5.jpg') }}" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="{{ asset('images/ins-1.jpg') }}" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="{{ asset('images/ins-7.jpg') }}" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="{{ asset('images/ins-8.jpg') }}" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="{{ asset('images/ins-2.jpg') }}" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="{{ asset('images/ins-6.jpg') }}" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="{{ asset('images/ins-9.jpg') }}" alt="insta"></a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Instagram ends -->

    <!-- News Starts -->
    {{-- <section class="news pb-2 pt-9">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0"><span>Articles & Travel</span> Guidings</h2>
                <p class="mb-0 ">Travel has helped us to understand the meaning of life and it has helped us become
                    better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="news-outer">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-xs-12 mb-4">
                        <div class="news-item overflow-hidden">
                            <div class="news-image">
                                <img src="{{ asset('images/blog1.jpg')}}" alt="image">
                            </div>
                            <div class="news-list mt-2 border-b pb-2 mb-2">
                                <ul>
                                    <li><a href="single-right.html" class="pr-3"><i
                                                class="fa fa-calendar pink pr-1"></i> 4th AUg 2020 </a></li>
                                    <li><a href="single-right.html" class="pr-3"><i
                                                class="fa fa-comment pink pr-1"></i> 3</a></li>
                                    <li><a href="single-right.html" class=""><i
                                                class="fa fa-tag pink pr-1"></i> Tour, Tourism, Travel</a></li>
                                </ul>
                            </div>
                            <div class="news-content mt-2">
                                <h4 class="pb-2 mb-2 border-b"><a href="single-right.html">The real voyage does not
                                        consist in seeking new landscapes</a></h4>
                                <p class="mb-3">Excited him now natural saw passage offices you minuter. At by asked
                                    being court hopes. Farther so friends am to detract. Forbade concern do private be.
                                    Offending residence but men engrossed shy. <br><br>One of the programs is Save Our I
                                    have personally in many of the programs mentioned on this site.</p>

                                <div class="author-img">
                                    <img src="{{ asset('images/1.jpg')}}" alt="Demo Image">
                                    <span>By - Jack Well Fardez</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 mb-4">
                                <div class="news-item overflow-hidden">
                                    <div class="news-image">
                                        <img src="{{ asset('images/blog2.jpg')}}" alt="image">
                                    </div>
                                    <div class="news-list mt-2 border-b pb-2 mb-2">
                                        <ul>
                                            <li><a href="single-right.html" class="pr-3"><i
                                                        class="fa fa-calendar pink pr-1"></i> 4th AUg 2020
                                                </a></li>
                                            <li><a href="single-right.html" class="pr-3"><i
                                                        class="fa fa-comment pink pr-1"></i> 3</a></li>
                                            <li><a href="single-right.html" class=""><i
                                                        class="fa fa-tag pink pr-1"></i> Travel</a></li>
                                        </ul>
                                    </div>
                                    <div class="news-content mt-2">
                                        <h4 class="bordernone mb-0"><a href="single-right.html">Mountains is always
                                                right destination.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 mb-4">
                                <div class="news-item overflow-hidden">
                                    <div class="news-image">
                                        <img src="{{ asset('images/blog3.jpg')}}" alt="image">
                                    </div>
                                    <div class="news-list mt-2 border-b pb-2 mb-2">
                                        <ul>
                                            <li><a href="single-right.html" class="pr-3"><i
                                                        class="fa fa-calendar pink pr-1"></i> 4th AUg 2020
                                                </a></li>
                                            <li><a href="single-right.html" class="pr-3"><i
                                                        class="fa fa-comment pink pr-1"></i> 3</a></li>
                                            <li><a href="single-right.html" class=""><i
                                                        class="fa fa-tag pink pr-1"></i> Tourism</a></li>
                                        </ul>
                                    </div>
                                    <div class="news-content mt-2">
                                        <h4 class="bordernone mb-0"><a href="single-right.html">We have not all
                                                those
                                                who wander are lost.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 mb-4">
                                <div class="news-item overflow-hidden">
                                    <div class="news-image">
                                        <img src="{{ asset('images/blog4.jpg')}}" alt="image">
                                    </div>
                                    <div class="news-list mt-2 border-b pb-2 mb-2">
                                        <ul>
                                            <li><a href="single-right.html" class="pr-3"><i
                                                        class="fa fa-calendar pink pr-1"></i> 4th AUg 2020
                                                </a></li>
                                            <li><a href="single-right.html" class="pr-3"><i
                                                        class="fa fa-comment pink pr-1"></i> 3</a></li>
                                            <li><a href="single-right.html" class=""><i
                                                        class="fa fa-tag pink pr-1"></i> Tour</a></li>
                                        </ul>
                                    </div>
                                    <div class="news-content mt-2">
                                        <h4 class="bordernone mb-0"><a href="single-right.html">Here Our's Life is
                                                either a daring adventure.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 mb-4">
                                <div class="news-item overflow-hidden">
                                    <div class="news-image">
                                        <img src="{{ asset('images/blog5.jpg')}}" alt="image">
                                    </div>
                                    <div class="news-list mt-2 border-b pb-2 mb-2">
                                        <ul>
                                            <li><a href="single-right.html" class="pr-3"><i
                                                        class="fa fa-calendar pink pr-1"></i> 4th AUg 2020
                                                </a></li>
                                            <li><a href="single-right.html" class="pr-3"><i
                                                        class="fa fa-comment pink pr-1"></i> 3</a></li>
                                            <li><a href="single-right.html" class=""><i
                                                        class="fa fa-tag pink pr-1"></i> Travel</a></li>
                                        </ul>
                                    </div>
                                    <div class="news-content mt-2">
                                        <h4 class="bordernone mb-0"><a href="single-right.html">Take only memories,
                                                leave only footprints.</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- News Ends -->
@endSection
@section('script')
    <script>
        function myFunction() {
            document.getElementById("myForm").submit();
        }
    </script>
@endsection
