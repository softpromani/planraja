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
            background-color: #0883FF;
        }

        .day {
            position: absolute;
            left: -55px;
            font-weight: bold;
            top: -5px;
            color: #0883FF;
        }
    </style>
@endsection
@section('content')
    <!-- BreadCrumb Starts -->
    <!-- <section class="breadcrumb-main pb-0" style="background-image: {{ url('images/about-2.jpg') }};"> -->
    <section class="breadcrumb-main pb-0" style=" background-image: url('{{ asset('images/about-2.jpg') }}');">

        <div class="breadcrumb-outer pt-10">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Tour Package Details</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tour Package Details</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div
                        class="swiffy-slider slider-nav-round slider-nav-visible slider-indicators-round slider-indicators-dark slider-indicators-sm slider-nav-animation">
                        <ul class="slider-container">
                            @foreach ($datas->packageimage as $dt)
                                <li><img src="{{ asset($dt->image ?? '') }}" style="width: 100%;height: auto;"></li>
                            @endforeach
                        </ul>

                        <button type="button" class="slider-nav"></button>
                        <button type="button" class="slider-nav slider-nav-next"></button>

                        <div class="slider-indicators">
                            <button class="active"></button>
                            <button></button>
                            <button></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="">
                        <h2 class="card-title" style="color:#000000;">{{ $datas->package_name ?? '' }}</h2>
                        <p class="card-text mt-3">{{ $datas->duration ?? '' }}</p>
                        <hr>
                        <p>{!! $datas->short_desc ?? '' !!}</p>
                        <h3 style="color:#000000;">₹ {{ $datas->total_price ?? '' }}</h3>
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
                                <h3>Overview</h3>
                                <p>{!! $datas->short_desc ?? '' !!}
                                </p>
                                <p>{!! $datas->description ?? '' !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 card p-3">
                            <h3 class="p-4">Itinerary</h3>
                            <div class="pl-5">
                                @forelse ($datas->Eternities as $key=>$details)
                                    <div class="timeline">
                                        <div class="ml-3 p-4">
                                            <div class="day">Day {{ $loop->index + 1 ?? '' }}</div>
                                            <h5 class="toggle" data-toggel="v{{$key}}">
                                                {{ $details->title ?? '' }}-{{ $details->city->city_name ?? '' }}
                                            </h5>
                                            <div class="test" id="v{{$key}}">
                                                <p>
                                                    {!! $details->longdesc ?? '' !!}
                                                </p>
                                                <h6>Hotel-{{ $details->hotel->hotel_name ?? '' }}</h6>
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
                            <h3 class="text-black text-center">Fill Enquiry Form Below</h3>
                        </div>
                    </div>
                    <div class="row p-2">
                        <form>
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="form6Example1" class="form-control" />
                                        <label class="form-label" for="form6Example1">First name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="form6Example2" class="form-control" />
                                        <label class="form-label" for="form6Example2">Last name</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Text input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example4" class="form-control" />
                                <label class="form-label" for="form6Example4">Address</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form6Example5" class="form-control" />
                                <label class="form-label" for="form6Example5">Email</label>
                            </div>

                            <!-- Number input -->
                            <div class="form-outline mb-4">
                                <input type="number" id="form6Example6" class="form-control" />
                                <label class="form-label" for="form6Example6">Phone</label>
                            </div>

                            <!-- Message input -->
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                                <label class="form-label" for="form6Example7">Additional information</label>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
