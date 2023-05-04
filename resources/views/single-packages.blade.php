@extends('layouts.guest')

@section('content')
<div class="menu trans_500">
    <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>
        <div class="logo menu_logo"><a href="#"><img src="{{asset('asset/images/logo.png')}}" alt=""></a></div>
        <ul>
            <li class="menu_item"><a href="index.html">home</a></li>
            <li class="menu_item"><a href="about.html">about us</a></li>
            <li class="menu_item"><a href="offers.html">offers</a></li>
            <li class="menu_item"><a href="blog.html">news</a></li>
            <li class="menu_item"><a href="contact.html">contact</a></li>
        </ul>
    </div>
</div>

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('asset/images/single_background.jpg')}}"></div>
    <div class="home_content">
        <div class="home_title">the offers</div>
    </div>
</div>

<div class="listing">

    <div class="search">
        <div class="search_inner">

            <div class="container fill_height no-padding">
                <div class="row fill_height no-margin">
                    <div class="col fill_height no-padding">

                        <div class="search_tabs_container">
                            <div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                <div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{asset('asset/images/suitcase.png')}}" alt=""><span>hotels</span></div>
                                <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{asset('asset/images/bus.png')}}" alt="">car rentals</div>
                                <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{asset('asset/images/departure.png')}}" alt="">flights</div>
                                <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{asset('asset/images/island.png')}}" alt="">trips</div>
                                <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{asset('asset/images/cruise.png')}}" alt="">cruises</div>
                                <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="{{asset('asset/images/diving.png')}}" alt="">activities</div>
                            </div>
                        </div>

                        <div class="search_panel active">
                            <form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                <div class="search_item">
                                    <div>destination</div>
                                    <input type="text" class="destination search_input" required="required">
                                </div>
                                <div class="search_item">
                                    <div>check in</div>
                                    <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="search_item">
                                    <div>check out</div>
                                    <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="search_item">
                                    <div>adults</div>
                                    <select name="adults" id="adults_1" class="dropdown_item_select search_input">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <div class="search_item">
                                    <div>children</div>
                                    <select name="children" id="children_1" class="dropdown_item_select search_input">
                                        <option>0</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <div class="extras">
                                    <ul class="search_extras clearfix">
                                        <li class="search_extras_item">
                                            <div class="clearfix">
                                                <input type="checkbox" id="search_extras_1" class="search_extras_cb">
                                                <label for="search_extras_1">Pet Friendly</label>
                                            </div>
                                        </li>
                                        <li class="search_extras_item">
                                            <div class="clearfix">
                                                <input type="checkbox" id="search_extras_2" class="search_extras_cb">
                                                <label for="search_extras_2">Car Parking</label>
                                            </div>
                                        </li>
                                        <li class="search_extras_item">
                                            <div class="clearfix">
                                                <input type="checkbox" id="search_extras_3" class="search_extras_cb">
                                                <label for="search_extras_3">Wireless Internet</label>
                                            </div>
                                        </li>
                                        <li class="search_extras_item">
                                            <div class="clearfix">
                                                <input type="checkbox" id="search_extras_4" class="search_extras_cb">
                                                <label for="search_extras_4">Reservations</label>
                                            </div>
                                        </li>
                                        <li class="search_extras_item">
                                            <div class="clearfix">
                                                <input type="checkbox" id="search_extras_5" class="search_extras_cb">
                                                <label for="search_extras_5">Private Parking</label>
                                            </div>
                                        </li>
                                        <li class="search_extras_item">
                                            <div class="clearfix">
                                                <input type="checkbox" id="search_extras_6" class="search_extras_cb">
                                                <label for="search_extras_6">Smoking Area</label>
                                            </div>
                                        </li>
                                        <li class="search_extras_item">
                                            <div class="clearfix">
                                                <input type="checkbox" id="search_extras_7" class="search_extras_cb">
                                                <label for="search_extras_7">Wheelchair Accessible</label>
                                            </div>
                                        </li>
                                        <li class="search_extras_item">
                                            <div class="clearfix">
                                                <input type="checkbox" id="search_extras_8" class="search_extras_cb">
                                                <label for="search_extras_8">Pool</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="more_options">
                                    <div class="more_options_trigger">
                                        <a href="#">load more options</a>
                                    </div>
                                    <ul class="more_options_list clearfix">
                                        <li class="more_options_item">
                                            <div class="clearfix">
                                                <input type="checkbox" id="more_options_1" class="search_extras_cb">
                                                <label for="more_options_1">Pet Friendly</label>
                                            </div>
                                        </li>
                                        <li class="more_options_item">
                                            <div class="clearfix">
                                                <input type="checkbox" id="more_options_2" class="search_extras_cb">
                                                <label for="more_options_2">Car Parking</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <button class="button search_button">search<span></span><span></span><span></span></button>
                            </form>
                        </div>

                        <div class="search_panel">
                            <form action="#" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                <div class="search_item">
                                    <div>destination</div>
                                    <input type="text" class="destination search_input" required="required">
                                </div>
                                <div class="search_item">
                                    <div>check in</div>
                                    <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="search_item">
                                    <div>check out</div>
                                    <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="search_item">
                                    <div>adults</div>
                                    <select name="adults" id="adults_2" class="dropdown_item_select search_input">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <div class="search_item">
                                    <div>children</div>
                                    <select name="children" id="children_2" class="dropdown_item_select search_input">
                                        <option>0</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <button class="button search_button">search<span></span><span></span><span></span></button>
                            </form>
                        </div>

                        <div class="search_panel">
                            <form action="#" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                <div class="search_item">
                                    <div>destination</div>
                                    <input type="text" class="destination search_input" required="required">
                                </div>
                                <div class="search_item">
                                    <div>check in</div>
                                    <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="search_item">
                                    <div>check out</div>
                                    <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="search_item">
                                    <div>adults</div>
                                    <select name="adults" id="adults_3" class="dropdown_item_select search_input">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <div class="search_item">
                                    <div>children</div>
                                    <select name="children" id="children_3" class="dropdown_item_select search_input">
                                        <option>0</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <button class="button search_button">search<span></span><span></span><span></span></button>
                            </form>
                        </div>

                        <div class="search_panel">
                            <form action="#" id="search_form_4" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                <div class="search_item">
                                    <div>destination</div>
                                    <input type="text" class="destination search_input" required="required">
                                </div>
                                <div class="search_item">
                                    <div>check in</div>
                                    <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="search_item">
                                    <div>check out</div>
                                    <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="search_item">
                                    <div>adults</div>
                                    <select name="adults" id="adults_4" class="dropdown_item_select search_input">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <div class="search_item">
                                    <div>children</div>
                                    <select name="children" id="children_4" class="dropdown_item_select search_input">
                                        <option>0</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <button class="button search_button">search<span></span><span></span><span></span></button>
                            </form>
                        </div>

                        <div class="search_panel">
                            <form action="#" id="search_form_5" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                <div class="search_item">
                                    <div>destination</div>
                                    <input type="text" class="destination search_input" required="required">
                                </div>
                                <div class="search_item">
                                    <div>check in</div>
                                    <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="search_item">
                                    <div>check out</div>
                                    <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="search_item">
                                    <div>adults</div>
                                    <select name="adults" id="adults_5" class="dropdown_item_select search_input">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <div class="search_item">
                                    <div>children</div>
                                    <select name="children" id="children_5" class="dropdown_item_select search_input">
                                        <option>0</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <button class="button search_button">search<span></span><span></span><span></span></button>
                            </form>
                        </div>

                        <div class="search_panel">
                            <form action="#" id="search_form_6" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                <div class="search_item">
                                    <div>destination</div>
                                    <input type="text" class="destination search_input" required="required">
                                </div>
                                <div class="search_item">
                                    <div>check in</div>
                                    <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="search_item">
                                    <div>check out</div>
                                    <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="search_item">
                                    <div>adults</div>
                                    <select name="adults" id="adults_6" class="dropdown_item_select search_input">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <div class="search_item">
                                    <div>children</div>
                                    <select name="children" id="children_6" class="dropdown_item_select search_input">
                                        <option>0</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <button class="button search_button">search<span></span><span></span><span></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single_listing">

                    <div class="hotel_info">

                        <div class="hotel_title_container d-flex flex-lg-row flex-column">
                            <div class="hotel_title_content">
                                <h1 class="hotel_title">{{$datas->package_name ??''}}</h1>
                                <div class="rating_r rating_r_4 hotel_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <div class="hotel_location">{{$datas->cityname->city_name ??''}}</div>
                            </div>
                            <div class="hotel_title_button ml-lg-auto text-lg-right">
                                <div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
                                <div class="hotel_map_link_container">
                                    <div class="hotel_map_link">See Location on Map</div>
                                </div>
                            </div>
                        </div>

                        <div class="hotel_image">
                            <img src="{{asset($datas->packageimage[0]->image ??'')}}" alt="">
                            <div class="hotel_review_container d-flex flex-column align-items-center justify-content-center">
                                <div class="hotel_review">
                                    <div class="hotel_review_content">
                                        <div class="hotel_review_title">very good</div>
                                        <div class="hotel_review_subtitle">100 reviews</div>
                                    </div>
                                    <div class="hotel_review_rating text-center">8.1</div>
                                </div>
                            </div>
                        </div>

                        <div class="hotel_gallery">
                            <div class="hotel_slider_container">
                                <div class="owl-carousel owl-theme hotel_slider">
                                    @foreach ( $datas->packageimage as $img )
                                    <div class="owl-item">
                                        <a class="colorbox cboxElement">
                                            <img src="{{asset($img->image)}}" alt="">
                                        </a>
                                    </div>
                                    @endforeach
                                </div>

                                <div class="hotel_slider_nav hotel_slider_prev">
                                    <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewbox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                                        <defs>
                                            <lineargradient id='hotel_grad_prev'>
                                                <stop offset='0%' stop-color='#fa9e1b'></stop>
                                                <stop offset='100%' stop-color='#8d4fff'></stop>
                                            </lineargradient>
                                        </defs>
                                        <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
											M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
											C22.545,2,26,5.541,26,9.909V23.091z"></path>
                                        <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
											11.042,18.219 "></polygon>
                                    </svg>
                                </div>

                                <div class="hotel_slider_nav hotel_slider_next">
                                    <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewbox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                                        <defs>
                                            <lineargradient id='hotel_grad_next'>
                                                <stop offset='0%' stop-color='#fa9e1b'></stop>
                                                <stop offset='100%' stop-color='#8d4fff'></stop>
                                            </lineargradient>
                                        </defs>
                                        <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
										M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
										C22.545,2,26,5.541,26,9.909V23.091z"></path>
                                        <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
										17.046,15.554 "></polygon>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="hotel_info_text">
                            <p>{!! $datas->description ?? '' !!}</p>
                        </div>

                        <div class="hotel_info_tags">
                            <ul class="hotel_icons_list">
                                <li class="hotel_icons_item"><img src="{{asset('asset/images/post.png')}}" alt=""></li>
                                <li class="hotel_icons_item"><img src="{{asset('asset/images/compass.png')}}" alt=""></li>
                                <li class="hotel_icons_item"><img src="{{asset('asset/images/bicycle.png')}}" alt=""></li>
                                <li class="hotel_icons_item"><img src="{{asset('asset/images/sailboat.png')}}" alt=""></li>
                            </ul>
                        </div>
                    </div>

                    <div class="rooms">
                        @foreach ($datas->Eternities as $eternity )
                        <div class="room">

                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="room_image"><img src="{{asset($eternity->hotel->hotelPhoto[0]->image ??'')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="room_content">
                                        <div class="room_title">Day {{$eternity->day ??''}}</div>
                                        <div class="room_price">{{$eternity->title ??''}}</div>
                                        <div class="room_text">{!! $eternity->longdesc ??'' !!}</div>
                                        <div class="room_extra">{{$eternity->hotel->hotel_name ??''}} <span class="badge bg-success text-light">₹{{$eternity->hotel->perday_ammount ??''}}</span></div>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-3 text-lg-right">
                                    <div class="room_button">
                                        <div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- <div class="reviews">
                        <div class="reviews_title">reviews</div>
                        <div class="reviews_container">

                            <div class="review">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <div class="review_image">
                                            <img src="{{asset('asset/images/review_1.jpg')}}" alt="https://unsplash.com/@saaout">
                                        </div>
                                    </div>
                                    <div class="col-lg-11">
                                        <div class="review_content">
                                            <div class="review_title_container">
                                                <div class="review_title">"We loved the services"</div>
                                                <div class="review_rating">9.5</div>
                                            </div>
                                            <div class="review_text">
                                                <p>Tetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vulputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer elementum orci eu vehicula pretium. Donec bibendum tristique condimentum.</p>
                                            </div>
                                            <div class="review_name">Christinne Smith</div>
                                            <div class="review_date">12 November 2017</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="review">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <div class="review_image">
                                            <img src="{{asset('asset/images/review_2.jpg')}}" alt="Image by Andrew Robles">
                                        </div>
                                    </div>
                                    <div class="col-lg-11">
                                        <div class="review_content">
                                            <div class="review_title_container">
                                                <div class="review_title">"Nice staff and great location"</div>
                                                <div class="review_rating">9.5</div>
                                            </div>
                                            <div class="review_text">
                                                <p>Tetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vulputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer elementum orci eu vehicula pretium. Donec bibendum tristique condimentum.</p>
                                            </div>
                                            <div class="review_name">Christinne Smith</div>
                                            <div class="review_date">12 November 2017</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="location_on_map">
                        <div class="location_on_map_title">location on map</div>

                        <div class="travelix_map">
                            <div id="google_map" class="google_map">
                                <div class="map_container">
                                    <div id="map"></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection