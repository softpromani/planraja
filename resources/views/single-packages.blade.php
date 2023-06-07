@extends('layouts.guest')
@section('style')
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <style>
        .timeline {
            height: auto;
            width: 100%;
            border-left: 2px solid rgb(172, 172, 172);
            position: relative;
            top: -10px;
        }

        .timeline:before {
            content: '';
            display: block;
            width: 10px;
            height: 10px;
            border-radius: 10px;
            margin-left: -6px;
            margin-top: -20px;
            background-color: #162241;
        }

        .day {
            position: absolute;
            left: -65px;
            font-weight: bold;
            top: -5px;
            color: #162241;
        }

        .right-text {
            background: #fef9f4;
        }
    </style>
@endsection
@section('content')
    <!-- BreadCrumb Starts -->
    <!-- <section class="breadcrumb-main pb-0" style="background-image: {{ url('images/about-2.jpg') }};"> -->
    <section class="breadcrumb-main pb-0" style=" background-image: url('{{ asset('images/about-2.jpg') }}');">

        <div class="breadcrumb-outer pt-10 pb-2">
            <div class="container">
                <div class="breadcrumb-content align-items-center pt-10">
                    <div aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tour Package Details</li>
                        </ul>
                    </div>
                    <br>
                    <h2 class="mb-0">Tour Package Details</h2>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <section>
        <div class="container">
            <div class="row right-text" style="height: 400px">
                <div class="col-md-8">
                    <div class=" slider-nav-autoplay swiffy-slider slider-nav-round slider-nav-visible slider-indicators-round slider-indicators-dark slider-indicators-sm slider-nav-animation"
                        data-slider-nav-autoplay-interval="5000">
                        <ul class="slider-container">
                            @foreach ($datas->packageimage as $dt)
                                <li><img src="{{ asset($dt->image ?? '') }}" style="width: 100%;height:400px"></li>
                            @endforeach
                        </ul>

                        <div class="slider-nav "></div>
                        <div class="slider-nav  slider-nav-next"></div>

                        <div class="slider-indicators">
                            <button class="active focus"></button>
                            <button class="focus"></button>
                            <button class="focus"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="">
                        <h2 class="card-title" style="color:#000000;">{{ $datas->package_name ?? '' }}</h2>
                        <h3 style="color:#000000;">₹ {{ $datas->total_price ?? '' }}</h3>
                        <h3 class="card-text mt-3">{{ $datas->duration ?? '' }}</h3>
                        <hr>
                        <p>{!! $datas->short_desc ?? '' !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12 mb-3 card">
                            <div class="card-body">
                                <p>{!! $datas->short_desc ?? '' !!}
                                </p>
                                <p>{!! $datas->description ?? '' !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 card pl-4 pr-3">
                            <h3 class="p-4">Itinerary</h3>
                            <div class="pl-5">
                                @forelse ($datas->Eternities as $key=>$details)
                                    <div class="timeline">
                                        <div class="ml-1">
                                            <div class="day">Day{{ $loop->index + 1 ?? '' }}</div>
                                            <h5 class="toggle" data-toggel="v{{ $key }}">
                                                {{ $details->title ?? '' }}-{{ $details->city->city_name ?? '' }}
                                            </h5>
                                            <div class="test" id="v{{ $key }}">
                                                <p>
                                                    {!! $details->longdesc ?? '' !!}
                                                </p>
                                                <p>Hotel-{{ $details->hotel->hotel_name ?? '' }}</p>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                @empty
                                    <div class="row">
                                        <h3>Oop's Not data founded </h3>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ml-5 pt-3 card">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="h1 text-primary text-center"><i class="fas fa-map-marker-alt"></i></h1>
                            <h3 class="text-black text-center">Get Custom Quote</h3>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-12">

                            <form method="post" action="{{route('store.enquiry')}}" id="myFormenquiry">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Full name</label>
                                    <input type="name" name="name" class="form-control"
                                        aria-describedby="emailHelp" placeholder="Enter Full Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Enter your Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="departerdate">Departure Date</label>
                                    <input type="date" name="departuredate" class="form-control"
                                        placeholder="Departure Date" required>
                                </div>
                                <div class="form-group">
                                    <label for="totalmember">Total Members</label>
                                    <input type="number" name="totalmember" class="form-control"
                                        placeholder="Total Members" required>
                                </div>
                                <div class="form-group">
                                    <label for="number">Contact Number</label>
                                    <input type="number" name="number" class="form-control"
                                        placeholder="Contact Number" required>
                                </div>
                                <div class="form-group">
                                    <label for="days">Number of Days</label>
                                    <input type="number" name="numberofdays" class="form-control"
                                        placeholder="Number of Days" required>
                                </div>
                                <div class="form-group">
                                    <label for="Description">Tour Description</label>
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea class="form-control" name="description"  rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" id="sbmt"  onclick="submitForm()">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
