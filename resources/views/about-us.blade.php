@extends('layouts.main')
@section('content')
    <!-- BEGIN Banner Slider -->
    <div class="BannerSlider">
        <div class="container">
            <div class="slider-container">
                <div class="slides-numbers" style="display: block">
                    <span class="active">01</span> / <span class="total"></span>
                </div>
                <div class="slider-holder">
                    <div class="item">
                        <div class="SliderText">
                            <small>ABOUT US</small>
                            <span>YOU DREAM IT WE BUILD IT</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam
                            </p>
                            <a href="{{ route('UI_about_us') }}">READ MORE
                                <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="media-wrap media-wrap-inner">
                            <img src="{{ asset('images/aboutimg.png') }}" alt="" class="img-fluid" />
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="SliderText">
                            <small>ABOUT US</small>
                            <span>YOU DREAM IT WE BUILD IT</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam
                            </p>
                            <a href="{{ route('UI_about_us') }}">READ MORE
                                <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="media-wrap media-wrap-inner">
                            <img src="{{ asset('images/aboutimg.png') }}" alt="" class="img-fluid" />
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Banner Slider -->
    </section>
    <!-- END Header -->
    <!-- main -->
    <main>
        @include('layouts.afterbanner')

        <section class="AboutSecMain">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-ms-6 col-xs-12">
                        <div class="Aboutimg  wow fadeInLeft" data-wow-duration="2s">
                            <img src="{{ asset('images/aboutimgbig.jpg') }}" alt="" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-6 col-ms-6 col-xs-12">
                        <div class="AboutText wow fadeInRight" data-wow-duration="2s">
                            <small>ABOUT US</small>
                            <span>Kardiler is the best place to get your dream car</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodoLorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam,</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-ms-12 col-xs-12">
                        <div class="AboutText  wow fadeInDown" data-wow-duration="2s">
                            <span>Why Customers Choose us</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="supportbox  wow zoomIn" data-wow-duration="2s">
                            <img src="{{ asset('images/icon1.png') }}" alt="Icon" class="img-fluid">
                            <a href="#">The best price that you really expect</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="supportbox  wow zoomIn" data-wow-duration="2s">
                            <img src="{{ asset('images/icon2.png') }}" alt="Icon" class="img-fluid">
                            <a href="#">Support ready 24/7 to serve you</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="supportbox  wow zoomIn" data-wow-duration="2s">
                            <img src="{{ asset('images/icon3.png') }}" alt="Icon" class="img-fluid">
                            <a href="#">Top brand in the world</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BEGIN Car Tabs Section -->
        <section class="CarTabs tabs">
            <div class="CarTabsBg">
                <div class="container">
                    <div class="tabslinks">
                        <div class="tab-nav">
                            <ul>
                                <li class="active"><span data-href="#tab-1">HONDO</span></li>
                                <li><span data-href="#tab-2">FORT</span></li>
                                <li><span data-href="#tab-3">TOYOTO</span></li>
                                <li><span data-href="#tab-4">PORCE</span></li>
                                <li><span data-href="#tab-5">MUSTIBISHA</span></li>
                                <li><span data-href="#tab-6">DASTIN</span></li>
                                <li><span data-href="#tab-7">SIZUKA</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabscontentmain">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="centerheading  wow fadeInLeft" data-wow-duration="2s">
                                <small>PRODUCTS</small>
                                <span>Special Offers</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab active" id="tab-1">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg1.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg2.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg3.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-2">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg1.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg3.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg2.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-3">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg1.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg3.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg2.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-4">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg1.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg2.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg3.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-5">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg1.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg3.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg2.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-6">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg1.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg2.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg3.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-7">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain  wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg1.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain  wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg3.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="carboxmain  wow zoomIn" data-wow-duration="2s">
                                    <div class="carrating">
                                        <small>4.0</small>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carimg">
                                        <img src="{{ asset('images/carimg2.jpg') }}" alt="" class="img-fluid" />
                                        <span>$540.299</span>
                                    </div>
                                    <div class="cardetail">
                                        <a href="{{ route('UI_auto_parts_product') }}">HYUNDAI ELANTRA 2016 NEW MODEL</a>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Transmition</small>
                                                    <span>Manual</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Passenger</small>
                                                    <span>4 Person</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>Top Speed</small>
                                                    <span>412Km</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>HP</small>
                                                    <span>560</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="trammistion">
                                                    <small>0-1000Km/h</small>
                                                    <span>4.5s</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="readmore  wow fadeInLeft" data-wow-duration="2s">
                                <a href="{{ route('UI_auto_parts') }}">View More
                                    <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Car Tabs Section -->
        <!-- BEGIN Testimonial Section -->
        <section class="Testimonialmain">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="centerheading  wow fadeInLeft" data-wow-duration="2s">
                            <small>TESTIMONIAL</small>
                            <span>What they say</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="TestimonialSlider">
                    <div>
                        <div class="Testimonialbox">
                            <div class="colonimg">
                                <img src="{{ asset('images/colonimg.png') }}" alt="Colon" class="img-fluid" />
                            </div>
                            <div class="testimonialcontent">
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu fugiat nulla pariatur”
                                </p>
                            </div>
                            <div class="testimonialimg">
                                <img src="{{ asset('images/testimonialimg.jpg') }}" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="Testimonialbox">
                            <div class="colonimg">
                                <img src="{{ asset('images/colonimg.png') }}" alt="Colon" class="img-fluid" />
                            </div>
                            <div class="testimonialcontent">
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu fugiat nulla pariatur”
                                </p>
                            </div>
                            <div class="testimonialimg">
                                <img src="{{ asset('images/testimonialimg.jpg') }}" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Testimonial Section -->
        @include('layouts.havequiestion')
    </main>
    <!-- end main -->
@endsection
