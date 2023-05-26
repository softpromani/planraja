@extends('layouts.guest')
@section('style')
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet"
        crossorigin="anonymous">
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
                            <li class="breadcrumb-item active" aria-current="page">Packages</li>
                        </ul>
                    </div>
                    <br>
                    <h2 class="mb-0">Packages</h2>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- form starts -->
    <section class="packages fist-section">
        @foreach ($category as $dt)
            <div class="container mt-5">
                <h3>{{ $dt->category_name ?? '' }}</h3>
                <div class="slider-nav-autoplay swiffy-slider slider-item-show4 slider-nav-round slider-nav-dark slider-nav-sm slider-indicators-round slider-indicators-outside slider-indicators-dark slider-nav-visible"
                    data-slider-nav-autoplay-interval="2500">
                    <ul class="slider-container">
                        @forelse ($dt->packages as $package)
                            <a href="{{ route('singlePackage', $package->id ?? '') }}">
                                <li>
                                    @foreach ($package->packageimage as $package_image)
                                        <img src="{{ $package_image->image ?? '' }}" style="max-width: 100%;height: auto;">
                                    @endforeach
                                    <div class="mt-1">
                                        <p>{{ $package->duration ?? '' }}</p>
                                        <h5>{{ $package->package_name ?? '' }}</h5>
                                    </div>
                                </li>
                            </a>
                        @empty
                            <ul>
                                <li>
                                    <h3 style="float: right">Oop's No Data Available</h3>
                                </li>
                            </ul>
                        @endforelse
                    </ul>

                    <div type="button" class="slider-nav"></div>
                    <div type="button" class="slider-nav slider-nav-next"></div>

                    <ul class="slider-indicators">
                        @forelse ($dt->packages as $package)
                            <li class="{{ $loop->index == 0 ? 'active' : '' }}"></li>
                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>
        @endforeach
    </section>
    <!-- form ends -->
@endSection
@section('script')
@endsection
