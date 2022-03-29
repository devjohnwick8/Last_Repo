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
                            <a href="{{ route('UI_sign_up') }}">READ MORE
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
                            <a href="{{ route('UI_sign_up') }}">READ MORE
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
                                <small>Create an account</small>
                                <p>Already have an account? <a href="{{ route('UI_login') }}">Sign in here</a></p>
                            </div>
                            <form action="{{route('UI_sign_up_post')}}" method="post">@csrf
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @error('username')
                                        <p class="text-danger" id="al">*{{$message}}</p>
                                        @enderror
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Your Name*" name="username" value="{{ session()->getOldInput('username') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @error('email')
                                        <p class="text-danger" id="al">*{{$message}}</p>
                                        @enderror
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="Email*" name="email" value="{{ session()->getOldInput('email') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @error('phone_number')
                                        <p class="text-danger" id="al">*{{$message}}</p>
                                        @enderror
                                        <div class="mb-3">
                                            <input type="number" class="form-control" placeholder="Phone Number*" name="phone_number" value="{{ session()->getOldInput('phone_number') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @error('password')
                                        <p class="text-danger" id="al">*{{$message}}</p>
                                        @enderror
                                        <div class="mb-3">
                                            <input type="password" class="form-control" placeholder="Password*" name="password">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @error('password_confirmation')
                                        <p class="text-danger" id="al">*{{$message}}</p>
                                        @enderror
                                        <div class="mb-3">
                                            <input type="password" class="form-control" placeholder="Confirm Password*" name="password_confirmation">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                            <label class="form-check-label" for="exampleCheck1">I have read and agreed to
                                                the <a href="#">Term and Condiitons</a></label>
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary">SIGN UP </button>
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
