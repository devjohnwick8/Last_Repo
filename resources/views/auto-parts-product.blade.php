@extends('layouts.main')
@section('content')
    <!-- BEGIN Contact Sec -->
    <section class="thank_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-ms-12 col-xs-12">
                    <div class="thank_heading wow zoomIn" data-wow-duration="2s">
                        <h4><small> Brandix </small> Spark Plug Kit</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Contact Sec -->
    </section>
    <!-- END Header -->
    <!-- main -->
    <main>
        <!-- BEGIN Auto Parts section -->
        <section class="autopartsmain">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="partsdetail wow fadeInleft" data-wow-duration="2s">
                            <span>Chevrolet Trailblazer 2022</span>
                            <div class="partsrating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><small>4 on 3 reviews</small></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="slider_products wow fadeInleft" data-wow-duration="2s">
                            <div class="slider-for1 slider">
                                <div>
                                    <div class="productMainDetail">
                                        <a href="{{ asset('images/parts1.jpg') }}" tabindex=" 0" data-fancybox="gallery">
                                            <img src="{{ asset('images/parts1.jpg') }}" alt="" />
                                        </a>

                                    </div>
                                </div>

                                <div>
                                    <div class="productMainDetail">
                                        <a href="p{{ asset('images/parts2.jpg') }}" tabindex="0" data-fancybox="gallery">
                                            <img src="{{ asset('images/parts2.jpg') }}" class="img-fluid" alt="" />
                                        </a>

                                    </div>
                                </div>

                                <div>
                                    <div class="productMainDetail">
                                        <a href="{{ asset('images/parts3.jpg') }}" tabindex="0" data-fancybox="gallery">
                                            <img src="{{ asset('images/parts3.jpg') }}" class="img-fluid" alt="" />
                                        </a>

                                    </div>
                                </div>


                                <div>
                                    <div class="productMainDetail">
                                        <a href="{{ asset('images/parts2.jpg') }}" tabindex="0" data-fancybox="gallery">
                                            <img src="{{ asset('images/parts2.jpg') }}" class="img-fluid" alt="" />
                                        </a>

                                    </div>
                                </div>

                                <div>
                                    <div class="productMainDetail">
                                        <a href="{{ asset('images/parts2.jpg') }}" tabindex="0" data-fancybox="gallery">
                                            <img src="{{ asset('images/parts2.jpg') }}" class="img-fluid" alt="" />
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="slider slider-nav1">
                                <div>
                                    <div class="productlistBox">
                                        <img src="{{ asset('images/parts1.jpg') }}" class="img-responsive" alt="">
                                    </div>
                                </div>

                                <div>
                                    <div class="productlistBox">
                                        <img src="{{ asset('images/parts2.jpg') }}" class="img-responsive" alt="">
                                    </div>
                                </div>

                                <div>
                                    <div class="productlistBox">
                                        <img src="{{ asset('images/parts3.jpg') }}" class="img-responsive" alt="">
                                    </div>
                                </div>

                                <div>
                                    <div class="productlistBox">
                                        <img src="{{ asset('images/parts3.jpg') }}" class="img-responsive" alt="">
                                    </div>
                                </div>

                                <div>
                                    <div class="productlistBox">
                                        <img src="{{ asset('images/parts3.jpg') }}" class="img-responsive" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="cen_ter  wow fadeInRight" data-wow-duration="2s">
                            <div class="descrip">
                                <h4>Description</h4>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
                                    McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of
                                    the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through
                                    the cites of the word in classical literature, discovered the undoubtable source. </p>
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                                    interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero
                                    are also reproduced in their exact original form, accompanied by English versions from
                                    the 1914 translation by H. Rackham.</p>
                            </div>
                            <div class="but_add">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-4">
                                        <div class="quan">
                                            <div class="quantity-control" data-quantity="">
                                                <button class="quantity-btn" data-quantity-minus=""><svg
                                                        viewBox="0 0 409.6 409.6">
                                                        <g>
                                                            <g>
                                                                <path
                                                                    d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" />
                                                            </g>
                                                        </g>
                                                    </svg></button>
                                                <input type="number" class="quantity-input" data-quantity-target=""
                                                    value="1" step="0.1" min="1" max="" name="quantity">
                                                <button class="quantity-btn" data-quantity-plus=""><svg
                                                        viewBox="0 0 426.66667 426.66667">
                                                        <path
                                                            d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-4">
                                        <div class="des_btn res_btn">
                                            <a href="cart.php">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-4">
                                        <div class="heart">
                                            <a href="javscript:void(0)"><i class="far fa-heart"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <h4>$ 1500.00</h4>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="related_pro">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="related ">
                                <h2>related Product</h2>
                            </div>
                            <div class="producbox">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="cars_img">
                                            <a data-fancybox="gallery" href="images/cars_2.png" tabindex="0"><img
                                                    src="images/cars_2.png" alt="Part" class="img-fluid"><i
                                                    class="fa fa-play-circle" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="partsdetail">
                                            <span>Chevrolet Trailblazer 2022</span>
                                            <div class="partsrating">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><small>4 on 3 reviews</small></li>
                                                </ul>
                                            </div>
                                            <div class="mera-year">
                                                <ul>
                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-2 col-1">
                                                                <div class="mera_icon">
                                                                    <i class="fa fa-calendar-check" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10 col-sm-10 col-11">
                                                                <div class="icon_head">
                                                                    <h6>year</h6>
                                                                    <h4>2022</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-2 col-1">
                                                                <div class="mera_icon">
                                                                    <i class="fa fa-calendar-check" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10 col-sm-10 col-11">
                                                                <div class="icon_head">
                                                                    <h6>Mileage</h6>
                                                                    <h4>12000 ml</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-2 col-1">
                                                                <div class="mera_icon">
                                                                    <i class="fa fa-calendar-check" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10 col-sm-10 col-11">
                                                                <div class="icon_head">
                                                                    <h6>fuel type</h6>
                                                                    <h4>Gasoline</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-2 col-1">
                                                                <div class="mera_icon">
                                                                    <i class="fa fa-calendar-check" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10 col-sm-10 col-11">
                                                                <div class="icon_head">
                                                                    <h6>CONDITION</h6>
                                                                    <h4>New</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="cartbox">
                                            <small>$25,500.00</small>
                                            <a href="cart.php">Add to cart</a>
                                        </div>
                                        <div class="whishlist">
                                            <a href="#"><i class="fa fa-car"></i> Schedule Test Drive</a>
                                            <a href="#"><i class="fas fa-tachometer-alt"></i> Add to Compare</a>
                                        </div>
                                        <div class="stock">
                                            <small><strong>STOCK # </strong> 753093</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="producbox">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="cars_img">
                                            <a data-fancybox="gallery" href="images/cars_3.png" tabindex="0"><img
                                                    src="images/cars_3.png" alt="Part" class="img-fluid"><i
                                                    class="fa fa-play-circle" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="partsdetail">
                                            <span>Chevrolet Trailblazer 2022</span>
                                            <div class="partsrating">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><small>4 on 3 reviews</small></li>
                                                </ul>
                                            </div>
                                            <div class="mera-year">
                                                <ul>
                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-2 col-1">
                                                                <div class="mera_icon">
                                                                    <i class="fa fa-calendar-check" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10 col-sm-10 col-11">
                                                                <div class="icon_head">
                                                                    <h6>year</h6>
                                                                    <h4>2022</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-2 col-1">
                                                                <div class="mera_icon">
                                                                    <i class="fa fa-calendar-check" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10 col-sm-10 col-11">
                                                                <div class="icon_head">
                                                                    <h6>Mileage</h6>
                                                                    <h4>12000 ml</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-2 col-1">
                                                                <div class="mera_icon">
                                                                    <i class="fa fa-calendar-check" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10 col-sm-10 col-11">
                                                                <div class="icon_head">
                                                                    <h6>fuel type</h6>
                                                                    <h4>Gasoline</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-2 col-1">
                                                                <div class="mera_icon">
                                                                    <i class="fa fa-calendar-check" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10 col-sm-10 col-11">
                                                                <div class="icon_head">
                                                                    <h6>CONDITION</h6>
                                                                    <h4>New</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="cartbox">
                                            <small>$25,500.00</small>
                                            <a href="#">Add to cart</a>
                                        </div>
                                        <div class="whishlist">
                                            <a href="#"><i class="fa fa-car"></i> Schedule Test Drive</a>
                                            <a href="#"><i class="fas fa-tachometer-alt"></i> Add to Compare</a>
                                        </div>
                                        <div class="stock">
                                            <small><strong>STOCK # </strong> 753093</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="producbox">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="cars_img">
                                            <a data-fancybox="gallery" href="images/cars_3.png" tabindex="0"><img
                                                    src="images/cars_3.png" alt="Part" class="img-fluid"><i
                                                    class="fa fa-play-circle" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="partsdetail">
                                            <span>Chevrolet Trailblazer 2022</span>
                                            <div class="partsrating">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><small>4 on 3 reviews</small></li>
                                                </ul>
                                            </div>
                                            <div class="mera-year">
                                                <ul>
                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-2 col-1">
                                                                <div class="mera_icon">
                                                                    <i class="fa fa-calendar-check" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10 col-sm-10 col-11">
                                                                <div class="icon_head">
                                                                    <h6>year</h6>
                                                                    <h4>2022</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-2 col-1">
                                                                <div class="mera_icon">
                                                                    <i class="fa fa-calendar-check" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10 col-sm-10 col-11">
                                                                <div class="icon_head">
                                                                    <h6>Mileage</h6>
                                                                    <h4>12000 ml</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-2 col-1">
                                                                <div class="mera_icon">
                                                                    <i class="fa fa-calendar-check" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10 col-sm-10 col-11">
                                                                <div class="icon_head">
                                                                    <h6>fuel type</h6>
                                                                    <h4>Gasoline</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-2 col-1">
                                                                <div class="mera_icon">
                                                                    <i class="fa fa-calendar-check" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10 col-sm-10 col-1">
                                                                <div class="icon_head">
                                                                    <h6>CONDITION</h6>
                                                                    <h4>New</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="cartbox">
                                            <small>$25,500.00</small>
                                            <a href="#">Add to cart</a>
                                        </div>
                                        <div class="whishlist">
                                            <a href="#"><i class="fa fa-car"></i> Schedule Test Drive</a>
                                            <a href="#"><i class="fas fa-tachometer-alt"></i> Add to Compare</a>
                                        </div>
                                        <div class="stock">
                                            <small><strong>STOCK # </strong> 753093</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BEGIN Auto Parts section -->


    </main>
    <!-- end main -->
@endsection
