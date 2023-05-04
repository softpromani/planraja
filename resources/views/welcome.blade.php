@extends('layouts.guest')

@section('content')
<div class="menu trans_500">
    <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>
        <div class="logo menu_logo">
            <a href="#"><img src="{{asset('asset/images/logo.png')}}" alt=""></a>
        </div>
        <ul>
            <li class="menu_item"><a href="#">home</a></li>
            <li class="menu_item"><a href="about.html">about us</a></li>
            <li class="menu_item"><a href="offers.html">offers</a></li>
            <li class="menu_item"><a href="blog.html">news</a></li>
            <li class="menu_item"><a href="contact.html">contact</a></li>
        </ul>
    </div>
</div>

<div class="home">

    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">

            <div class="owl-item home_slider_item">

                <div class="home_slider_background" style="background-image:url({{asset('asset/images/home_slider.jpg')}})"></div>
                <div class="home_slider_content text-center">
                    <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                        <h1>discover</h1>
                        <h1>the world</h1>
                        <div class="button home_slider_button">
                            <div class="button_bcg"></div><a href="#">explore
                                now<span></span><span></span><span></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:url({{asset('asset/images/home_slider.jpg')}})"></div>
                <div class="home_slider_content text-center">
                    <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                        <h1>discover</h1>
                        <h1>the world</h1>
                        <div class="button home_slider_button">
                            <div class="button_bcg"></div><a href="#">explore
                                now<span></span><span></span><span></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:url({{asset('asset/images/home_slider.jpg')}})"></div>
                <div class="home_slider_content text-center">
                    <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                        <h1>discover</h1>
                        <h1>the world</h1>
                        <div class="button home_slider_button">
                            <div class="button_bcg"></div><a href="#">explore
                                now<span></span><span></span><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home_slider_nav home_slider_prev">
            <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewbox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                <defs>
                    <lineargradient id='home_grad_prev'>
                        <stop offset='0%' stop-color='#fa9e1b'></stop>
                        <stop offset='100%' stop-color='#8d4fff'></stop>
                    </lineargradient>
                </defs>
                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
            M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
            C22.545,2,26,5.541,26,9.909V23.091z">
                </path>
                <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
            11.042,18.219 ">
                </polygon>
            </svg>
        </div>

        <div class="home_slider_nav home_slider_next">
            <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewbox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                <defs>
                    <lineargradient id='home_grad_next'>
                        <stop offset='0%' stop-color='#fa9e1b'></stop>
                        <stop offset='100%' stop-color='#8d4fff'></stop>
                    </lineargradient>
                </defs>
                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
        M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
        C22.545,2,26,5.541,26,9.909V23.091z">
                </path>
                <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
        17.046,15.554 ">
                </polygon>
            </svg>
        </div>

        <div class="home_slider_dots">
            <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                <li class="home_slider_custom_dot active">
                    <div></div>01.
                </li>
                <li class="home_slider_custom_dot">
                    <div></div>02.
                </li>
                <li class="home_slider_custom_dot">
                    <div></div>03.
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="search">

    <div class="container fill_height">
        <div class="row fill_height">
            <div class="col fill_height">

                <div class="search_tabs_container">
                    <div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                        <div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                            <img src="{{asset('asset/images/suitcase.png')}}" alt=""><span>hotels</span>
                        </div>
                        <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                            <img src="{{asset('asset/images/bus.png')}}" alt="">car rentals
                        </div>
                        <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                            <img src="{{asset('asset/images/departure.png')}}" alt="">flights
                        </div>
                        <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                            <img src="{{asset('asset/images/island.png')}}" alt="">trips
                        </div>
                        <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                            <img src="{{asset('asset/images/cruise.png')}}" alt="">cruises
                        </div>
                        <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                            <img src="{{asset('asset/images/diving.png')}}" alt="">activities
                        </div>
                    </div>
                </div>

                <div class="search_panel active">
                    <form action="{{route('home')}}" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start" method="post">
                        @csrf
                        <div class="search_item">
                            <div>destination</div>
                            <select class=" destination search_input" aria-label="Default select example" name="destination" id="destination">
                                <option selected>Select City</option>
                                @foreach ( $cities as $city)
                                <option value="{{$city->id}}" @isset($filter->destination)@selected($filter->destination == $city->id)@endisset>{{$city->city_name ??''}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="search_item">
                            <div>check in</div>
                            <input type="date" class="check_in search_input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_item">
                            <div>check out</div>
                            <input type="date" class="check_out search_input" placeholder="YYYY-MM-DD">
                        </div>
                        <div class="search_item">
                            <div>Day</div>
                            <select name="day" id="adults_1" class="dropdown_item_select search_input">
                                <option selected disabled>Select Day</option>
                                @for($i=1;$i<11;$i++) <option value="{{$i}}" @isset($filter->day)@selected($filter->day == $i)@endisset()>{{$i ??''}}</option>
                                    @endfor
                            </select>
                        </div>
                        <button type="submit" class="button search_button">search<span></span><span></span></button>

                        <a href="{{route('home')}}" class="button search_button">Clear filter<span></span><span></span><span></span></a>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="intro_title text-center">We have the best tours</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="intro_text text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse
                            potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. </p>
                    </div>
                </div>
            </div>
            <div class="row intro_items">

                <div class="col-lg-4 intro_col">
                    <div class="intro_item">
                        <div class="intro_item_overlay"></div>

                        <div class="intro_item_background" style="background-image:url({{asset('asset/images/intro_1.jpg')}})"></div>
                        <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                            <div class="intro_date">May 25th - June 01st</div>
                            <div class="button intro_button">
                                <div class="button_bcg"></div><a href="#">see
                                    more<span></span><span></span><span></span></a>
                            </div>
                            <div class="intro_center text-center">
                                <h1>Mauritius</h1>
                                <div class="intro_price">From $1450</div>
                                <div class="rating rating_4">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 intro_col">
                    <div class="intro_item">
                        <div class="intro_item_overlay"></div>

                        <div class="intro_item_background" style="background-image:url({{asset('asset/images/intro_2.jpg')}})"></div>
                        <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                            <div class="intro_date">May 25th - June 01st</div>
                            <div class="button intro_button">
                                <div class="button_bcg"></div><a href="#">see
                                    more<span></span><span></span><span></span></a>
                            </div>
                            <div class="intro_center text-center">
                                <h1>Greece</h1>
                                <div class="intro_price">From $1450</div>
                                <div class="rating rating_4">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 intro_col">
                    <div class="intro_item">
                        <div class="intro_item_overlay"></div>

                        <div class="intro_item_background" style="background-image:url({{asset('asset/images/intro_3.jpg')}})"></div>
                        <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                            <div class="intro_date">May 25th - June 01st</div>
                            <div class="button intro_button">
                                <div class="button_bcg"></div><a href="#">see
                                    more<span></span><span></span><span></span></a>
                            </div>
                            <div class="intro_center text-center">
                                <h1>Scotland</h1>
                                <div class="intro_price">From $1450</div>
                                <div class="rating rating_4">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<!-- <div class="cta">

    <div class="cta_background" style="background-image:url({{asset('asset/images/cta.jpg')}})"></div>
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="cta_slider_container">
                    <div class="owl-carousel owl-theme cta_slider">

                        <div class="owl-item cta_item text-center">
                            <div class="cta_title">maldives deluxe package</div>
                            <div class="rating_r rating_r_4">
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>
                            <p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu
                                convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit
                                nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor
                                augue gravida lectus, et efficitur enim justo vel ligula.</p>
                            <div class="button cta_button">
                                <div class="button_bcg"></div><a href="#">book
                                    now<span></span><span></span><span></span></a>
                            </div>
                        </div>

                        <div class="owl-item cta_item text-center">
                            <div class="cta_title">maldives deluxe package</div>
                            <div class="rating_r rating_r_4">
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>
                            <p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu
                                convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit
                                nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor
                                augue gravida lectus, et efficitur enim justo vel ligula.</p>
                            <div class="button cta_button">
                                <div class="button_bcg"></div><a href="#">book
                                    now<span></span><span></span><span></span></a>
                            </div>
                        </div>

                        <div class="owl-item cta_item text-center">
                            <div class="cta_title">maldives deluxe package</div>
                            <div class="rating_r rating_r_4">
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>
                            <p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu
                                convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit
                                nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor
                                augue gravida lectus, et efficitur enim justo vel ligula.</p>
                            <div class="button cta_button">
                                <div class="button_bcg"></div><a href="#">book
                                    now<span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="cta_slider_nav cta_slider_prev">
                        <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewbox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <lineargradient id='cta_grad_prev'>
                                    <stop offset='0%' stop-color='#fa9e1b'></stop>
                                    <stop offset='100%' stop-color='#8d4fff'></stop>
                                </lineargradient>
                            </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                        M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                        C22.545,2,26,5.541,26,9.909V23.091z">
                            </path>
                            <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
                        11.042,18.219 ">
                            </polygon>
                        </svg>
                    </div>

                    <div class="cta_slider_nav cta_slider_next">
                        <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewbox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <lineargradient id='cta_grad_next'>
                                    <stop offset='0%' stop-color='#fa9e1b'></stop>
                                    <stop offset='100%' stop-color='#8d4fff'></stop>
                                </lineargradient>
                            </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                    M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                    C22.545,2,26,5.541,26,9.909V23.091z">
                            </path>
                            <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
                    17.046,15.554 ">
                            </polygon>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="offers">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">the best offers with rooms</h2>
            </div>
        </div>
        <div class="row offers_items">

            @foreach ($datas as $data)

            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">

                                <div class="offers_image_background" style="background-image:url({{asset($data->packageimage[0]->image ??'')}})">
                                </div>
                                <div class="offer_name"><a href="{{route('singlePackage',$data->id)}}">{{$data->package_name ??''}}</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price"> ₹{{$data->total_price ??''}}<span>{{$data->duration ??''}}</span></div>
                                <div class="rating_r rating_r_4 offers_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">{!!$data->short_desc ??''!!}</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="{{asset('asset/images/post.png')}}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{asset('asset/images/compass.png')}}" alt="">
                                        </li>
                                        <li class="offers_icons_item"><img src="{{asset('asset/images/bicycle.png')}}" alt="">
                                        </li>
                                        <li class="offers_icons_item"><img src="{{asset('asset/images/sailboat.png')}}" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="{{route('singlePackage',$data->id)}}">read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="testimonials">
    <div class="test_border"></div>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">what our clients say about us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <div class="test_slider_container">
                    <div class="owl-carousel owl-theme test_slider">

                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="{{asset('asset/images/test_1.jpg')}}" alt="https://unsplash.com/@anniegray"></div>
                                <div class="test_icon"><img src="{{asset('asset/images/backpack.png')}}" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">carla smith</div>
                                            <div class="test_date">May 24, 2017</div>
                                        </div>
                                        <div class="test_quote_title">" Best holliday ever "</div>
                                        <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In
                                            faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="{{asset('asset/images/test_2.jpg')}}" alt="https://unsplash.com/@tschax"></div>
                                <div class="test_icon"><img src="{{asset('asset/images/island_t.png')}}" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">carla smith</div>
                                            <div class="test_date">May 24, 2017</div>
                                        </div>
                                        <div class="test_quote_title">" Best holliday ever "</div>
                                        <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In
                                            faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="{{asset('asset/images/test_3.jpg')}}" alt="https://unsplash.com/@seefromthesky"></div>
                                <div class="test_icon"><img src="{{asset('asset/images/kayak.png')}}" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">carla smith</div>
                                            <div class="test_date">May 24, 2017</div>
                                        </div>
                                        <div class="test_quote_title">" Best holliday ever "</div>
                                        <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In
                                            faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="{{asset('asset/images/test_2.jpg')}}" alt=""></div>
                                <div class="test_icon"><img src="{{asset('asset/images/island_t.png')}}" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">carla smith</div>
                                            <div class="test_date">May 24, 2017</div>
                                        </div>
                                        <div class="test_quote_title">" Best holliday ever "</div>
                                        <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In
                                            faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="{{asset('asset/images/test_1.jpg')}}" alt=""></div>
                                <div class="test_icon"><img src="{{asset('asset/images/backpack.png')}}" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">carla smith</div>
                                            <div class="test_date">May 24, 2017</div>
                                        </div>
                                        <div class="test_quote_title">" Best holliday ever "</div>
                                        <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In
                                            faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="{{asset('asset/images/test_3.jpg')}}" alt=""></div>
                                <div class="test_icon"><img src="{{asset('asset/images/kayak.png')}}" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">carla smith</div>
                                            <div class="test_date">May 24, 2017</div>
                                        </div>
                                        <div class="test_quote_title">" Best holliday ever "</div>
                                        <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In
                                            faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="test_slider_nav test_slider_prev">
                        <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewbox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <lineargradient id='test_grad_prev'>
                                    <stop offset='0%' stop-color='#fa9e1b'></stop>
                                    <stop offset='100%' stop-color='#8d4fff'></stop>
                                </lineargradient>
                            </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                        M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                        C22.545,2,26,5.541,26,9.909V23.091z">
                            </path>
                            <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
                        11.042,18.219 ">
                            </polygon>
                        </svg>
                    </div>

                    <div class="test_slider_nav test_slider_next">
                        <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewbox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <lineargradient id='test_grad_next'>
                                    <stop offset='0%' stop-color='#fa9e1b'></stop>
                                    <stop offset='100%' stop-color='#8d4fff'></stop>
                                </lineargradient>
                            </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                    M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                    C22.545,2,26,5.541,26,9.909V23.091z">
                            </path>
                            <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
                    17.046,15.554 ">
                            </polygon>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="trending">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">trending now</h2>
            </div>
        </div>
        <div class="row trending_container">

            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{asset('asset/images/trend_1.png')}}" alt="https://unsplash.com/@fransaraco">
                    </div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">grand hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{asset('asset/images/trend_2.png')}}" alt="https://unsplash.com/@grovemade">
                    </div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">mars hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{asset('asset/images/trend_3.png')}}" alt="https://unsplash.com/@jbriscoe">
                    </div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">queen hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{asset('asset/images/trend_4.png')}}" alt="https://unsplash.com/@oowgnuj">
                    </div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">mars hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{asset('asset/images/trend_5.png')}}" alt="https://unsplash.com/@mindaugas">
                    </div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">grand hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{asset('asset/images/trend_6.png')}}" alt="https://unsplash.com/@itsnwa">
                    </div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">mars hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{asset('asset/images/trend_7.png')}}" alt="https://unsplash.com/@rktkn">
                    </div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">queen hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="trending_item clearfix">
                    <div class="trending_image"><img src="{{asset('asset/images/trend_8.png')}}" alt="https://unsplash.com/@thoughtcatalog"></div>
                    <div class="trending_content">
                        <div class="trending_title"><a href="#">mars hotel</a></div>
                        <div class="trending_price">From $182</div>
                        <div class="trending_location">madrid, spain</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="contact">
    <div class="contact_background" style="background-image:url({{asset('asset/images/contact.png')}})"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact_image">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact_form_container">
                    <div class="contact_title">get in touch</div>
                    <form action="#" id="contact_form" class="contact_form">
                        <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
                        <input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
                        <input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
                        <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                        <button type="submit" id="form_submit_button" class="form_submit_button button">send
                            message<span></span><span></span><span></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection