@extends('layouts.guest')

@section('content')

    <!-- contact starts -->
    <section class="contact-main pt-0 contact1 bg-grey">
        <div class="map mb-10">
            <div style="width: 100%">
                <iframe height="500"
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
        </div>
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
                                    <p class="m-0">445 Mount Eden Road, Mt Eden</p>
                                    <p class="m-0">Basundhara Chakrapath</p>
                                </div>
                            </div>
                            <div class="info-item d-flex align-items-center bg-white mb-3">
                                <div class="info-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="info-content pl-4">
                                    <p class="m-0">
                                    	<a href="tel:+91-9829034279"> +91-9829034279 </a>
                                	</p>
                                </div>
                            </div>
                            <div class="info-item d-flex align-items-center bg-white mb-3">
                                <div class="info-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="info-content pl-4">
                                    <p class="m-0">info@Yatriiworld.com</p>
                                    <p class="m-0">help@Yatriiworld.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div id="contact-form1"
                             class="contact-form">
                            <h3 class="">Keep in Touch</h3>
                            <p class="mb-4">Fundpress site thoughtfully designed for real humans which means the best
                                user experience for your entire community.</p>

                            <div id="contactform-error-msg"></div>

                            <form method="post"
                                  action="#"
                                  name="contactform"
                                  id="contactform">
                                <div class="form-group">
                                    <input type="text"
                                           name="first_name"
                                           class="form-control"
                                           id="fname"
                                           placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text"
                                           name="last_name"
                                           class="form-control"
                                           id="lname"
                                           placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input type="email"
                                           name="email"
                                           class="form-control"
                                           id="email"
                                           placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text"
                                           name="phone"
                                           class="form-control"
                                           id="phnumber"
                                           placeholder="Phone">
                                </div>
                                <div class="textarea">
                                    <textarea name="comments"
                                              placeholder="Enter a message"></textarea>
                                </div>
                                <div class="comment-btn text-right mt-1">
                                    <input type="submit"
                                           class="nir-btn"
                                           id="submit"
                                           value="Send Message">
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