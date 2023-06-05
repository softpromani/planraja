    <!-- cta-horizon starts -->
    <div class="cta-horizon bg-blue pt-4 pb-2">
        <div class="container d-md-flex align-items-center justify-content-between">
            <h4 class="mb-2 white">Didn't find the service suite you! Need a custom service?</h4>
            <a href="#" id="myBtnopen" class="nir-btn-black">plan you trip
            </a>
        </div>
    </div>
    <!-- cta-horizon Ends -->

    <!-- footer starts -->
    <footer class="pt-10 bubbles footermain">
        <div class="footer-upper pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-about p-4">
                            <a href="/">
                                <img src="{{ asset('images/icon.png') }}" alt="">
                            </a>

                            <ul>
                                <li><strong>M. No:</strong> <a href="tel:+91-9929992212"> +91-9929992212 </a> </li>
                                <li><strong>Location:</strong> B-33, Railway Station ,Jaipur, 302006</li>
                                <li><strong>Email:</strong> <a
                                        href="mailto:contact@planrajasthantrip.com">contact@planrajasthantrip.com </a>
                                </li>
                                <li><strong>Website:</strong> www.planrajasthantrip.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-links">
                            <h4 class="white">Company</h4>
                            <ul>
                                <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                                <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                                <!-- <li><a href="#">Delivery Information</a></li> -->
                                <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('termsOfUse') }}">Terms &amp; Conditions</a></li>
                                <!-- <li><a href="#">Customer Service</a></li> -->
                                <!-- <li><a href="#">Return Policy</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-links">
                            <h4 class="white">Services</h4>
                            <ul>
                                {{-- <li><a href="#">Payment</a></li> --}}
                                <li><a href="#">Feedback</a></li>
                                {{-- <li><a href="contact-us">Contact us</a></li> --}}
                                <li><a href="#">Our Service</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Site map</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-4">
                        <div class="footer-links">
                            <h4 class="white">Newsletter</h4>
                            <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll
                                send you a notification by email.</p>
                            <div class="social-links">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/Exclusiveindiajourney" target="_blank">
                                            <i class="fab fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCi1kWWszOGKTNgPTTtw4zWg"
                                            target="_blank">
                                            <i class="fab fa-youtube" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright pt-2 pb-2">
            <div class="container">
                <div class="copyright-inner d-md-flex align-items-center justify-content-between">
                    <div class="copyright-text">
                        <p class="m-0 white"><?php echo date('Y'); ?> Plan Rajasthan Trip. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer ends -->

    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->


    <!-- header side menu -->
    <div class="header_sidemenu">
        <div class="header_sidemenu_in">
            <div class="menu">
                <div class="close-menu">
                    <i class="fa fa-times white"></i>
                </div>
                <div class="m-contentmain">
                    <div class="cart-main">
                        <div class="cart-box">
                            <div class="popup-container">
                                <h5 class="p-3 mb-0 bg-pink white text-caps">My Carts(3 Items)</h5>
                                <div class="cart-entry d-flex align-items-center p-3">
                                    <a href="#" class="image">
                                        <img src="{{ asset('images/shop1.jpg') }}" alt="">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="title font-weight-bold">Pullover Batwing</a>
                                        <p class="quantity m-0">Quantity: 3</p>
                                        <span class="price">$45.00</span>
                                    </div>
                                    <div class="button-x">
                                        <i class="icon-close"></i>
                                    </div>
                                </div>
                                <div class="cart-entry d-flex align-items-center p-3">
                                    <a href="#" class="image">
                                        <img src="{{ asset('images/shop2.jpg') }}" alt="">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="title font-weight-bold">Pullover Batwing</a>
                                        <p class="quantity m-0">Quantity: 3</p>
                                        <span class="price">$90.00</span>
                                    </div>
                                    <div class="button-x">
                                        <i class="icon-close"></i>
                                    </div>
                                </div>
                                <div class="cart-entry d-flex align-items-center p-3">
                                    <a href="#" class="image">
                                        <img src="{{ asset('images/shop6.jpg') }}" alt="">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="title font-weight-bold">Pullover Batwing</a>
                                        <p class="quantity m-0">Quantity: 3</p>
                                        <span class="price">$90.00</span>
                                    </div>
                                    <div class="button-x">
                                        <i class="icon-close"></i>
                                    </div>
                                </div>
                                <div class="summary-total">
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Delivery Charge</div>
                                        <div class="price-s">$10</div>
                                    </div>
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Sub Total</div>
                                        <div class="price-s">$200</div>
                                    </div>
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Discount</div>
                                        <div class="price-s">$2</div>
                                    </div>
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Total</div>
                                        <div class="price-s">$208</div>
                                    </div>
                                </div>
                                <div class="cart-buttons d-flex align-items-center justify-content-between">
                                    <a href="#" class="nir-btn">View Cart</a>
                                    <a href="#" class="nir-btn-black">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay hide"></div>
        </div>
    </div>

    {{-- <!-- Modal -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bordernone p-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">

                </div>
            </div>
        </div>
    </div> --}}


    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <p class="float-end"><span class="close">&times;</span></p>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-center">HOW IT WORKS</h3>
                        <div class="login-content">
                            <div>
                                <ul class="nav justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link " href="#">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Temporibus, optio.</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Inventore maiores accusantium debitis, quidem aut
                                            accusamus voluptates et! Mollitia maiores porro, labore sunt deleniti
                                            recusandae necessitatibus possimus nesciunt numquam velit officia.</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Lorem ipsum dolor sit amet consectetur
                                            adipisicing.</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="login-social border-t mt-3 pt-2 mb-3">
                                <p class="mb-2">OR continue with</p>
                                <a href="#" class="btn-facebook"><i class="fab fa-facebook"
                                        aria-hidden="true"></i> Facebook</a>
                                <a href="#" class="btn-twitter"><i class="fab fa-twitter"
                                        aria-hidden="true"></i>
                                    Twitter</a>
                                <a href="#" class="btn-google"><i class="fab fa-google"
                                        aria-hidden="true"></i>
                                    Google</a>
                            </div>
                            <div class="sign-up">
                                <p class="m-0">Already have an account? <a href="login.html"
                                        class="pink">Login</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="text-center">Request a <span class="blue">QUOTE</span></h3>
                        <div class="login-content">
                            <div class="login-form">
                                <form method="post" action="{{ route('store.enquiry') }}" id="myFormenquiry">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleInputEmail">Full name</label>
                                                <input type="text" name="name" class="form-control"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    placeholder="Enter Full Name" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Email</label>
                                                <input type="email" name="email" class="form-control"
                                                    id="exampleInputPassword1" required placeholder="Enter your Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="departerdate">Departure Date</label>
                                                <input type="date" name="departuredate" class="form-control"
                                                    id="departerdate" placeholder="Departure Date">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="totalmember">Total Members</label>
                                                <input type="number" min="1" name="totalmember" required class="form-control"
                                                    id="totalmember" placeholder="Total Members">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Description">Tour Description</label>
                                        <label for="exampleFormControlTextarea1">Example textarea</label>
                                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="number">Contact Number</label>
                                                <input type="number" min="10" max="12" name="number" class="form-control"
                                                    id="number" placeholder="Contact Number">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="days">Number of Days</label>
                                                <input type="number" name="numberofdays" class="form-control"
                                                    id="days" placeholder="Number of Days">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-1 form-checkbox mt-1">
                                        <input type="checkbox"> By clicking this, you are agree to to<a href="#"
                                            class=""> our terms of use</a> and <a href="#"
                                            class="">privacy
                                            policy</a> including the use of cookies
                                    </div>
                                    <button type="submit"
                                    onclick="submitForm()" class="btn bg-pink white w-100">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *Scripts* -->
    @include('sweetalert::alert')

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/particlerun.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/custom-swiper.js') }}"></script>
    <script src="{{ asset('js/custom-nav.js') }}"></script>
    <script src="{{ asset('js/custom-date.js') }}"></script>
    <script>
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtnopen");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }


        $(document).ready(function() {
            $(document).on('click', '.toggle', function() {
                var vindex = $(this).attr('data-toggel');
                if (vindex) {
                    $('#' + vindex).toggle();
                }
            });
        });


        // search-box open close js code
        let navbar = document.querySelector(".navbar");
        let searchBox = document.querySelector(".search-box .bx-search");
        // sidebar open close js code
        let navLinks = document.querySelector(".nav-links");
        let menuOpenBtn = document.querySelector(".navbar .bx-menu");
        let menuCloseBtn = document.querySelector(".nav-links .bx-x");
        menuOpenBtn.onclick = function() {
            navLinks.style.left = "0";
        }
        menuCloseBtn.onclick = function() {
            navLinks.style.left = "-100%";
        }

        function submitForm() {
            // Get the form element
            var form = document.getElementById('myFormenquiry');
            // Submit the form
            form.submit();
        }

        function submitcontact() {
            // Get the form element
            var form = document.getElementById('myFormcontact');
            // Submit the form
            form.submit();
        }

        // sidebar submenu open close js code
        let htmlcssArrow = document.querySelector(".htmlcss-arrow");
        htmlcssArrow.onclick = function() {
            navLinks.classList.toggle("show1");
        }
        let moreArrow = document.querySelector(".more-arrow");
        moreArrow.onclick = function() {
            navLinks.classList.toggle("show2");
        }
        let jsArrow = document.querySelector(".js-arrow");
        jsArrow.onclick = function() {
            navLinks.classList.toggle("show3");
        }
    </script>
