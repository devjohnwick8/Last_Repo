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
                            <small>OUR SERVICE</small>
                            <span>YOU DREAM IT WE BUILD IT</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam
                            </p>
                            <a href="{{ route('UI_our_service') }}">READ MORE
                                <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="media-wrap media-wrap-inner">
                            <img src="{{ asset('images/servicesimg.png') }}" alt="" class="img-fluid" />
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="SliderText">
                            <small>OUR SERVICE</small>
                            <span>YOU DREAM IT WE BUILD IT</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam
                            </p>
                            <a href="{{ route('UI_our_service') }}">READ MORE
                                <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="media-wrap media-wrap-inner">
                            <img src="{{ asset('images/servicesimg.png') }}" alt="" class="img-fluid" />
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
                        <div class="AboutText  wow fadeInLeft" data-wow-duration="2s">
                            <small>OUR SERVICE</small>
                            <span>Kardiler is the best place to get your dream car</span>
                            <p>Are you ready to give your car the service it is asking for? Schedule car maintenance or
                                repair right here. Our top-notch service staff can get your car or truck in and out quickly.
                                We know there isn’t much more frustrating than being without your vehicle while it gets
                                repaired. That’s why we have a staff that excels in providing top-notch maintenance and
                                repair – and is able to do it quickly.</p>
                        </div>
                        <div class="ourservices  wow fadeInLeft" data-wow-duration="2s">
                            <span>Our Services Include</span>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="servicesList">
                                        <ul>
                                            <li><i class="far fa-check-circle"></i> General Automotive Repair</li>
                                            <li><i class="far fa-check-circle"></i> Air Conditioning and Heater Service
                                            </li>
                                            <li><i class="far fa-check-circle"></i> Synthetic Motor Oil Replacement </li>
                                            <li><i class="far fa-check-circle"></i> Brake Repair</li>
                                            <li><i class="far fa-check-circle"></i> Belts, Hoses, Fluids </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="servicesList">
                                        <ul>
                                            <li><i class="far fa-check-circle"></i> Preventative Car Maintenance</li>
                                            <li><i class="far fa-check-circle"></i> Cooling System and Radiator Repair</li>
                                            <li><i class="far fa-check-circle"></i> Oil Filter Replacement</li>
                                            <li><i class="far fa-check-circle"></i> Engine Diagnostic</li>
                                            <li><i class="far fa-check-circle"></i> Transmission Services</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="AboutText  wow fadeInLeft" data-wow-duration="2s">
                                    <p>Save yourself some time by scheduling service right here. After you submit the form,
                                        we’ll be in touch to confirm your service appointment. It doesn’t get much easier
                                        than that.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-ms-6 col-xs-12">
                        <div class="Aboutimg  wow fadeInRight" data-wow-duration="2s">
                            <img src="{{ asset('images/aboutimgbig.jpg') }}" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BEGIN Services Section -->
        <section class="servicessec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="servicesheading  wow fadeInLeft" data-wow-duration="2s">
                            <small>WHAT WE PROVIDE</small>
                            <span>Our Service Include</span>
                        </div>
                    </div>
                </div>
                <div class=" row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="hover-switch  wow zoomIn" data-wow-duration="2s">
                            <img src="{{ asset('images/serviceicon1hover.png') }}" class="img-fluid">
                            <img src="{{ asset('images/serviceicon1.png') }}" class="img-fluid">
                            <div class="Servicesmainmain">
                                <span>Oil Change</span>
                                <p>Save yourself some time by scheduling service right here. After you submit the form,
                                    we’ll be in touch to confirm your service appointment. It doesn’t get much easier than
                                    that.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="hover-switch  wow zoomIn" data-wow-duration="2s">
                            <img src="{{ asset('images/serviceicon2hover.png') }}" class="img-fluid">
                            <img src="{{ asset('images/serviceicon2.png') }}" class="img-fluid">
                            <div class="Servicesmainmain">
                                <span>Air Conditioning</span>
                                <p>Save yourself some time by scheduling service right here. After you submit the form,
                                    we’ll be in touch to confirm your service appointment. It doesn’t get much easier than
                                    that.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="hover-switch  wow zoomIn" data-wow-duration="2s">
                            <img src="{{ asset('images/serviceicon3hover.png') }}" class="img-fluid">
                            <img src="{{ asset('images/serviceicon3.png') }}" class="img-fluid">
                            <div class="Servicesmainmain">
                                <span>Auto Electric</span>
                                <p>Save yourself some time by scheduling service right here. After you submit the form,
                                    we’ll be in touch to confirm your service appointment. It doesn’t get much easier than
                                    that.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="hover-switch  wow zoomIn" data-wow-duration="2s">
                            <img src="{{ asset('images/serviceicon4hover.png') }}" class="img-fluid">
                            <img src="{{ asset('images/serviceicon4.png') }}" class="img-fluid">
                            <div class="Servicesmainmain">
                                <span>Brake Service</span>
                                <p>Save yourself some time by scheduling service right here. After you submit the form,
                                    we’ll be in touch to confirm your service appointment. It doesn’t get much easier than
                                    that.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="hover-switch  wow zoomIn" data-wow-duration="2s">
                            <img src="{{ asset('images/serviceicon5hover.png') }}" class="img-fluid">
                            <img src="{{ asset('images/serviceicon5.png') }}" class="img-fluid">
                            <div class="Servicesmainmain">
                                <span>Transmission</span>
                                <p>Save yourself some time by scheduling service right here. After you submit the form,
                                    we’ll be in touch to confirm your service appointment. It doesn’t get much easier than
                                    that.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="hover-switch  wow zoomIn" data-wow-duration="2s">
                            <img src="{{ asset('images/serviceicon6hover.png') }}" class="img-fluid">
                            <img src="{{ asset('images/serviceicon6.png') }}" class="img-fluid">
                            <div class="Servicesmainmain">
                                <span>Tire and Wheel Service</span>
                                <p>Save yourself some time by scheduling service right here. After you submit the form,
                                    we’ll be in touch to confirm your service appointment. It doesn’t get much easier than
                                    that.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BEGIN Services Section -->
        <!-- BEGIN Schedule Section -->
        <section class="schedulesec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="centerheading  wow fadeInDown" data-wow-duration="2s">
                            <small>BOOK NOW</small>
                            <span>Schedule Service</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="shceduleform  wow fadeInLeft" data-wow-duration="2s">
                            <form>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="mb-3">
                                            <label for="Name" class="form-label">Name*</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="mb-3">
                                            <label for="Email" class="form-label">Email*</label>
                                            <input type="email" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="mb-3">
                                            <label for="Phone" class="form-label">Phone*</label>
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="mb-3">
                                            <label for="Make / Model*" class="form-label">Make / Model*</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="mb-3">
                                            <label for="Mileage (Optional)" class="form-label">Mileage
                                                (Optional)*</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="mb-3">
                                            <label for="Best Time*" class="form-label">Best Time*</label>
                                            <input type="time" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Request A Service <i
                                        class="fa fa-angle-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="timetable  wow fadeInRight" data-wow-duration="2s">
                            <span> <img src="{{ asset('images/calander.png') }}" alt="calander" class="img-fluid">
                                Hours of
                                Operation</span>
                            <ul>
                                <li>
                                    <strong>Sunday</strong>
                                    <small class="redcolor">Closed</small>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <strong>Monday</strong>
                                    <small>9:00 AM - 9:00 PM</small>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <strong>Tuesday</strong>
                                    <small>9:00 AM - 9:00 PM</small>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <strong>Wednesday</strong>
                                    <small>9:00 AM - 9:00 PM</small>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <strong>Thursday</strong>
                                    <small>9:00 AM - 9:00 PM</small>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <strong>Friday</strong>
                                    <small>9:00 AM - 7:00 PM</small>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <strong>Saturday</strong>
                                    <small>9:00 AM - 7:00 PM</small>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BEGIN Schedule Section -->
        <!-- BEGIN Car Tabs Section -->
        <section class="CarTabs tabs">
            <div class="CarTabsBg ">
                <div class=" container">
                    <div class="tabslinks">
                        <div class="tab-nav wow fadeInDown" data-wow-duration="2s"">
                                                        <ul>
                                                          <li class="            active"><span
                                data-href="#tab-1">HONDO</span>
                            </li>
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
                            <div class="centerheading  wow fadeInDown" data-wow-duration="2s">
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
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="readmore wow fadeInLeft" data-wow-duration="2s">
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
                        <div class="centerheading wow fadeInLeft" data-wow-duration="2s">
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
