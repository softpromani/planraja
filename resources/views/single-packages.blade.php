@extends('layouts.guest')

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

    <section class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($datas->packageimage as $dt)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index ?? '' }}"
                        class="{{ $loop->index == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner" style="height:60vh">
                @foreach ($datas->packageimage as $dt)
                    <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                        <img src="{{ asset($dt->image) }}" class="d-block w-100" alt="...">
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">City Name : {{ $datas->cityname->city_name??'' }}</h5>
              <h5 class="card-title">{{ $datas->package_name??'' }}</h5>
              <p class="card-text">{!! $datas->short_desc??'' !!}</p>
              <p class="card-text">{!! $datas->description??'' !!}</p>
              <p class="card-text"><small class="text-muted">Duration : {!! $datas->duration??'' !!}</small></p>
              <h3 class="float-right ">Total Price : <span class="text-danger"> ₹ {!! number_format($datas->total_price,2)??'' !!} </span></h3>
            </div>
          </div>
    </section>

    <section class="container">
        @foreach ($datas->Eternities as $item)    
        <div class="row mt-2">
            <div class="col-md-2">
                <img src="{{ asset($item->hotelphotos->first()->image??'') }}" class="d-block w-100" alt="...">
            </div>
            <div class="col-md-6">
                <h5 class="card-title">Day {{ $item->day??'' }}</h5>
                <h5 class="card-title">{{ $item->title??'' }}</h5>
                <p class="card-text">{!! $item->longdesc??'' !!}</p>
            </div>
            <div class="col-md-4">
                <h5 class="card-title">{{ $item->hotel->hotel_name??''}}</h5>
                <p class="card-text">{!! $item->hotel->short_description??'' !!}</p>
                <h5 class="card-title">₹ {{ $item->hotel->perday_ammount??''}}</h5>
            </div>
        </div>
        @endforeach
    </section>
@endsection
