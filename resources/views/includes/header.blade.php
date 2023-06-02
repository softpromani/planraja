    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->
    <nav>
        <div class="navbar">
            <i class='bx bx-menu'></i>
            <div class="logo"><a href="{{ url('/') }}"><img src="{{asset('images/icon.png')}}" alt="" height="70px"></a></div>
            <div class="nav-links">
                <div class="sidebar-logo">
                    <span class="logo-name"><img src="{{asset('images/icon.png')}}" alt="" height="70px"></span>
                    <i class='bx bx-x'></i>
                </div>
                <ul class="links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>
                        <a href="#">Packages</a>
                        <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                        <ul class="htmlCss-sub-menu sub-menu">
                            <li><a href="{{route('packages')}}">Package</a></li>
                            {{-- <li><a href="#">Login Forms</a></li>
                            <li><a href="#">Card Design</a></li> --}}
                            {{-- <li class="more">
                                <span><a href="#">More</a>
                                    <i class='bx bxs-chevron-right arrow more-arrow'></i>
                                </span>
                                <ul class="more-sub-menu sub-menu">
                                    <li><a href="#">Neumorphism</a></li>
                                    <li><a href="#">Pre-loader</a></li>
                                    <li><a href="#">Glassmorphism</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </li>
                    {{-- <li>
                        <a href="#">JAVASCRIPT</a>
                        <i class='bx bxs-chevron-down js-arrow arrow '></i>
                        <ul class="js-sub-menu sub-menu">
                            <li><a href="#">Dynamic Clock</a></li>
                            <li><a href="#">Form Validation</a></li>
                            <li><a href="#">Card Slider</a></li>
                            <li><a href="#">Complete Website</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="{{ url('about-us') }}">About Us</a></li>
                    <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#exampleModalScrollable">Plan Your Trip</a></li>

                </ul>
            </div>
            {{-- <div class="search-box">
                <i class='bx bx-search'></i>
                <div class="input-box">
                    <input type="text" placeholder="Search...">
                </div>
            </div> --}}
        </div>
    </nav>

    <!-- header ends -->


