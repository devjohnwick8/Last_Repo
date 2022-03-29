<!-- BEGIN Header -->
<section class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-12"></div>
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="locationtop">
                    <ul>
                        <li>
                            <a href="https://goo.gl/maps/oyb28VQryW2w9CSr9" target="_blank"><i
                                    class="fas fa-map-marker-alt"></i> 9532
                                Liberia ave Unit 723 Manassas va 20110</a>
                        </li>
                        <li>
                            <a href="tel:8777700113"><i class="fas fa-phone-volume"></i>
                                877-770-0113</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="headerbg">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="sidenav" id="mySidenav">
                    <a class="closebtn" href="javascript:void(0)" onclick="closeNav()">&times;</a>
                </div>
                <div class="mobilecontainer d-block d-sm-none">
                    <span class="pull-right" onclick="openNav()"
                        style="font-size: 30px; cursor: pointer">&#9776;</span>
                </div>
                <div class="col-md-3 col-xs-6 col-sm-3">
                    <div class="main-logo">
                        <div class="logo">
                            <a href="{{ route('UI_home') }}">
                                <img loading="lazy" src="{{asset('images/logo.png')}}" class="img-responsive"
                                    alt="Elite design hub logo" width="100%" height="50" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="main-navigate">
                        <div class="navigation" id="navbar">
                            <ul class="navbar-set">
                                <li class="active"><a href="{{ route('UI_home') }}">Home</a></li>
                                <li class=""><a href="{{ route('UI_about_us') }}">About Us</a></li>
                                <li class="btn-group show-on-hover">
                                    <a href="javascript:void(0)">
                                        Shop <span></span>
                                      <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                      <li class=""><a href="{{route('UI_auto_parts')}}">Auto Parts</a></li>
                                      <li class="">
                                        <a href="{{route('UI_cars')}}">Cars</a>
                                      </li>

                                    </ul>
                                  </li>

                                <li class=""><a href="{{ route('UI_our_service') }}">Services</a></li>
                                <li class="btn-group show-on-hover">
                                    <a href="javascript:void(0)">
                                        Motor World<span></span>
                                        <span class="caret"></span>
                                    </a>

                                </li>
                                <li class=""><a href="{{ route('UI_contact_us') }}">Contact Us</a></li>
                                <li>
{{--                                    <a href="javascript:void(0)" data-bs-toggle="modal"--}}
{{--                                        data-bs-target="#exampleModal2"><i class="fa fa-search"--}}
{{--                                            aria-hidden="true"></i></a>--}}
                                    <a href="{{route('ui_cart')}}">
                                        <i class="fa fa-shopping-cart" aria-hidden="true">
                                            @if(session()->has('cart'))
                                            <span class="cart-count">{{count(session()->get('cart'))}}</span>
                                            @else
                                            <span class="cart-count">0</span>
                                            @endif
                                        </i>
                                    </a>

                                </li>
                                <li>
                                    @if(Auth::check())
                                    <li class="btn-group show-on-hover">
                                        <a href="javascript:void(0)"> <i class="fa-solid fa-caret-down"></i>
                                            {{ auth()->user()->username }}<span></span>
                                          <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                          <li class=""><a href="{{route('UI_my_profile')}}">My Profile</a></li>
                                          <li class="">
                                            <a href="{{route('UI_my_order')}}">My Order</a>
                                          </li>
                                          <li class=""><a href="{{route('UI_change_password')}}">Change Password</a></li>
                                          {{--  <!--<li class=""><a href="digital-marketing.php">Digital Marketing</a></li>-->  --}}
                                          {{--  <li class=""><a href="branding.php">Branding</a></li>  --}}
                                          <li class=""><a href="{{route('UI_logout')}}"> Logout </a></li>
                                        </ul>
                                      </li>
                                    {{--  <a href="{{route('UI_logout')}}" class="loginbtn"> {{ auth()->user()->username }} (Logout)</a>  --}}
                                    @else
                                    <a href="{{route('UI_login')}}" class="loginbtn"> Login</a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header -->
