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
                            <small>Log In</small>
                            <span>My Account</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam
                            </p>
                            <a href="{{ route('UI_login') }}">READ MORE
                                <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="media-wrap">
                            <img src="{{ asset('images/slider1.jpg') }}" alt="" class="img-fluid" />
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="SliderText">
                            <small>Log In</small>
                            <span>My Account</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam
                            </p>
                            <a href="{{ route('UI_login') }}">READ MORE
                                <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="media-wrap">
                            <img src="{{ asset('images/slider2.jpg') }}" alt="" class="img-fluid" />
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
        <!-- BEGIN Schedule Section -->
        <section class="schedulesec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="shceduleform signUpForm">
                            <div class="drophead">
                                <small>Log In</small>
                                <p>Sign in to CarFirst or <a href="{{ route('UI_sign_up') }}">Create a new account</a></p>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="Email Address*">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="mb-3">
                                            <input type="password" class="form-control" placeholder="Password*">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Stay Logged in? <a
                                                    href="#">Forgotten Password</a></label>
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary">LOGIN </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BEGIN Schedule Section -->
        <!-- END Testimonial Section -->
        @include('layouts.havequiestion')
    </main>
    <!-- end main -->
@endsection
