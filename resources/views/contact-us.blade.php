@extends('layouts.guest')
@section('content')
    <!-- contact starts -->
    <section class="contact-main pt-0 contact1 bg-grey">
        <div class="col-md-12" style="margin-top:70px !important;">
            <div class="row">
                <div class="col-md-4 map mt-5">
                    <div style="width: 100%">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.3938319807485!2d75.7877192!3d26.922726500000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db3f46ef1347f%3A0x6baeb40d82015317!2z4KS54KWL4KSf4KSyIOCkrOCkvuCksuCkvuCknOClgCDgpKrgpYjgpLLgpYfgpLg!5e0!3m2!1shi!2sin!4v1684898088898!5m2!1shi!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-4 map mt-5">
                    <div style="width: 100%">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.3938319807485!2d75.7877192!3d26.922726500000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db3f46ef1347f%3A0x6baeb40d82015317!2z4KS54KWL4KSf4KSyIOCkrOCkvuCksuCkvuCknOClgCDgpKrgpYjgpLLgpYfgpLg!5e0!3m2!1shi!2sin!4v1684898088898!5m2!1shi!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-4 map mt-5">
                    <div style="width: 100%">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.3938319807485!2d75.7877192!3d26.922726500000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db3f46ef1347f%3A0x6baeb40d82015317!2z4KS54KWL4KSf4KSyIOCkrOCkvuCksuCkvuCknOClgCDgpKrgpYjgpLLgpYfgpLg!5e0!3m2!1shi!2sin!4v1684898088898!5m2!1shi!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container">
            <div class="contact-info">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="contact-info">
                            <h3 class="">INFORMATION ABOUT US</h3>
                            <p class="mb-4">Sagittis posuere id nam quis vestibulum vestibulum a facilisi at elit
                                hendrerit scelerisque sodales nam dis orci.</p>
                            <div class="info-item d-flex align-items-center bg-white mb-3">
                                <div class="info-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="info-content pl-4">
                                    <p class="m-0">B-33, Sen Colony, Railway station</p>
                                    <p class="m-0"> Jaipur, Rajasthan 302006</p>
                                </div>
                            </div>
                            <div class="info-item d-flex align-items-center bg-white mb-3">
                                <div class="info-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="info-content pl-4">
                                    <p class="m-0">
                                        <a href="tel:+91-9929992212"> +91-9929992212 </a>
                                    </p>
                                </div>
                            </div>
                            <div class="info-item d-flex align-items-center bg-white mb-3">
                                <div class="info-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="info-content pl-4">
                                    <p class="m-0">contact@planrajasthantrip.com</p>
                                    <p class="m-0">www.planrajasthantrip.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div id="contact-form1" class="contact-form">
                            <h3 class="">Keep in Touch</h3>
                            <p class="mb-4">Fundpress site thoughtfully designed for real humans which means the best
                                user experience for your entire community.</p>

                            <div id="contactform-error-msg"></div>

                            <form method="post" action="#" name="contactform" id="contactform">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control" id="fname"
                                        placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="last_name" class="form-control" id="lname"
                                        placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" id="phnumber"
                                        placeholder="Phone">
                                </div>
                                <div class="textarea">
                                    <textarea name="comments" placeholder="Enter a message"></textarea>
                                </div>
                                <div class="comment-btn text-right mt-1">
                                    <input type="submit" class="nir-btn" id="submit" value="Send Message">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact Ends -->
@endSection
