<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    @yield('head')

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('enduser-template/img/core-img/favicon.ico') }}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('enduser-template/style.css') }}">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container @yield('color') breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand text-white">NontonYuk.Inc</a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a class="" href="index.html">Home</a></li>
                                    <li><a class="" href="albums-store.html">Albums</a></li>
                                    <li><a class="" href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a class="" href="/beranda">Beranda</a></li>
                                            <li><a class="" href="albums-store.html">Albums</a></li>
                                            <li><a class="" href="event.html">Events</a></li>
                                            <li><a class="" href="blog.html">News</a></li>
                                            <li><a class="" href="contact.html">Contact</a></li>
                                            <li><a class="" href="elements.html">Elements</a></li>
                                            <li><a class="" href="">Login</a></li>
                                            <li><a class="" href="#">Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a class="" href="#">Even Dropdown</a></li>
                                                    <li><a class="" href="#">Even Dropdown</a></li>
                                                    <li><a class="" href="#">Even Dropdown</a></li>
                                                    <li><a class="" href="#">Even Dropdown</a>
                                                        <ul class="dropdown">
                                                            <li><a class="" href="#">Deeply Dropdown</a></li>
                                                            <li><a class="" href="#">Deeply Dropdown</a></li>
                                                            <li><a class="" href="#">Deeply Dropdown</a></li>
                                                            <li><a class="" href="#">Deeply Dropdown</a></li>
                                                            <li><a class="" href="#">Deeply Dropdown</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="" href="#">Even Dropdown</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="" href="event.html">Events</a></li>
                                    <li><a class="" href="blog.html">News</a></li>
                                    <li><a class="" href="contact.html">Contact</a></li>
                                </ul>

                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    <div class="login-register-btn mr-50">
                                        <a class="" href="/masuk" id="loginBtn">Login / Register</a>
                                    </div>

                                    <!-- Cart Button -->
                                    <div class="cart-btn">
                                        <p><span class="icon-shopping-cart"></span> <span class="quantity">1</span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    {{-- main content --}}
    @yield('content')
    {{-- main content --}}

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="#"><img src="{{ asset('enduser-template/img/core-img/logo.png') }}" alt=""></a>
                    <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Albums</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    @yield('script')
    <script src="{{ asset('enduser-template/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('enduser-template/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('enduser-template/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('enduser-template/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('enduser-template/js/active.js') }}"></script>
</body>

</html>


