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
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand text-dark">NontonYuk.Inc</a>

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
                            <div class="classynav ">
                                <ul>
                                    <li><a class="text-dark" href="index.html">Batal</a></li>
                                </ul>

                                {{-- <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    <div class="login-register-btn mr-50">
                                        <a class="" href="login.html" id="loginBtn">Login / Register</a>
                                    </div>

                                    <!-- Cart Button -->
                                    <div class="cart-btn">
                                        <p><span class="icon-shopping-cart"></span> <span class="quantity">1</span></p>
                                    </div>
                                </div> --}}
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
    <section class="featured-artist-area section-padding-100 bg-fixed">
        <div class="container">
            <div class="row align-items-end" style="margin-top: 4rem">
                <div class="section-heading style-2">
                    <h2>Metode Pembayaran</h2>
                </div>
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="featured-artist-thumb">
                        <div class="col-12 p-0">
                            <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="false">
                                <div class="panel single-accordion border">
                                    <h6>
                                        <a role="button" class="rounded collapsed" aria-expanded="false" aria-controls="collapse"
                                            data-toggle="collapse" data-parent="#accordion" href="#collapse" style="font-size: 1.3rem">
                                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                                    </h6>
                                    <div id="collapse" class="accordion-content collapse p-4">
                                        <p class="mb-2 text-dark p-0 text-uppercase" style="font-size: 1rem"><strong></strong></p>
                                        <a href="" class="border border-dark mr-2 p-1 rounded" style="font-size: 1rem">
                                            <strong class="fw-bold">
                                                
                                            </strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="featured-artist-content">
                        <!-- Section Heading -->
                        <div class="section-heading dark text-left mb-4">
                            
                            <div class="mt-30">
                                <form action="#" method="post">
                                    <input type="hidden" class="form-control form-control-sm" id="kursipilihan" value="" readonly>
                                    <div class="form-group">
                                        <label class="text-dark" for="kursipilih">Kursi yang dipilih</label>
                                        <input type="text" class="form-control form-control-sm" id="kursipilih" readonly value="">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-dark" for="totalharga">Total Harga</label>
                                        <input type="text" class="form-control form-control-sm" id="totalharga" readonly value="">
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-sm rounded">Pilih Pembayaran</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
