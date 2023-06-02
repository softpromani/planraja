@extends('layouts.guest')

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
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ul>
                    </div>
                    <br>
                    <h2 class="mb-0">About Us</h2>
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
                            <h2>We're truely dedicated to make your travel experience</h2>
                            <p class="mb-3">At PlanRajasthanTrip, we are committed to making your travel experience the
                                best it can be. We understand that traveling to a new destination can be both exciting and
                                overwhelming at the same time. That's why we strive to make your trip as stress-free and
                                enjoyable as possible.<br><br>Our team of travel experts is dedicated to providing you with
                                personalized attention and support throughout your journey. From helping you choose the
                                right travel package to assisting you with transportation and accommodation, we are here to
                                make sure that every aspect of your trip is taken care of.<br><br>We also believe in the
                                power of customization. We understand that every traveler has different needs and
                                preferences, and we are committed to tailoring our services to meet those individual
                                requirements. Whether you're looking for a luxury getaway or a budget-friendly adventure, we
                                have a wide range of options to choose from.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="about-image">
                            <img src="{{ asset('images/about-2.jpg') }}" alt="" height="400px">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p>Moreover, we value your safety and
                        security above all else. We work only with trusted and reliable vendors, and our team is
                        always available to assist you in case of any emergency or unforeseen situation.<br><br>At
                        PlanRajasthanTrip, we are passionate about promoting responsible tourism and giving back to
                        the communities we visit. We partner with local businesses and organizations to provide
                        authentic and sustainable travel experiences that benefit both the traveler and the local
                        community.<br><br>Thank you for choosing PlanRajasthanTrip as your travel partner. We are
                        dedicated to making your journey to Rajasthan a memorable and enriching experience that you
                        will cherish for years to come.</p>
                </div>
                <!-- Gallery -->
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />
                    </div>
                </div>
                <!-- Gallery -->
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
                            <p class="mb-2">Choosing PlanRajasthanTrip as your travel partner comes with a range of
                                benefits that will enhance your overall travel experience. Here are some reasons why you
                                should choose us for your next trip to Rajasthan:
                                <br><br>
                                <b> Personalized attention:</b> Our team of travel experts provides personalized attention
                                to every traveler, ensuring that your needs and preferences are met throughout your journey.
                                <br><br>
                                <b> Customizable packages:</b> We offer a wide range of customizable travel packages that
                                cater to all kinds of travel needs and budgets. Our packages can be tailored to meet your
                                specific requirements, ensuring that you get the most out of your trip to Rajasthan.
                                <br><br>
                                <b> Trusted vendors:</b> We work only with trusted and reliable vendors, ensuring that you
                                have a safe and enjoyable travel experience.
                                <br><br>
                                <b>Local knowledge:</b> Our team of travel experts has extensive knowledge of Rajasthan's
                                cultural and natural heritage. We provide insider tips and recommendations that will help
                                you discover the best of Rajasthan.
                                <br><br>
                                <b>Responsible and sustainable tourism:</b> We are committed to promoting responsible and
                                sustainable tourism practices. We work closely with local communities and businesses to
                                ensure that our tours and activities benefit the local economy and preserve Rajasthan's
                                cultural and natural heritage.
                                <br><br>
                                <b> Hassle-free travel: </b>We take care of all your travel arrangements, including
                                transportation, accommodation, guided tours and activities, ensuring that your trip is
                                stress-free and enjoyable.
                                <br><br>
                                <b>24/7 customer support:</b> Our team is always available to assist you in case of any
                                emergency or unforeseen situation, providing you with peace of mind throughout your journey.
                                <br><br>
                                At PlanRajasthanTrip, we are dedicated to providing you with the best travel experience
                                possible. We go above and beyond to ensure that every aspect of your trip is taken care of,
                                so that you can sit back, relax, and enjoy the beauty of Rajasthan.
                            </p>
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
                <!-- why us ends -->
            </div>
        </div>
    </section>
    <!-- about-us ends -->
@endSection
