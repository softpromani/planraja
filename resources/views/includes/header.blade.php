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
                        </ul>
                    </li>

                    <li><a href="{{ url('about-us') }}">About Us</a></li>
                    <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                    <li><a href="#" id="myBtnopen">Plan Your Trip</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- header ends -->


