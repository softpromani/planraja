@extends('layouts.guest')

@section('content')

<!-- BreadCrumb Starts -->
    <!-- <section class="breadcrumb-main pb-0" style="background-image: {{ url('images/about-2.jpg') }};"> -->
    <section class="breadcrumb-main pb-0 " style=" background-image: url('{{asset('images/about-2.jpg')}}');">

        <div class="breadcrumb-outer pt-10 pb-2">
            <div class="container">
                <div class="breadcrumb-content align-items-center pt-10">
                    <div aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active"
                                aria-current="page">Privacy Policy</li>
                        </ul>
                    </div>
                    <br>
                    <h2 class="mb-0">Privacy Policy</h2>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

        <!-- form starts -->
    <section class="about-us">
        <div class="container">


        </div>
    </section>
    <!-- form ends -->


@endSection
