@extends('layouts.main')
@section('content')
    <!-- BEGIN Contact Sec -->
    <section class="thank_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-ms-12 col-xs-12">
                    <div class="thank_heading">
                        <h4><small> Chevrolet </small> Trailblazer 2022</h4>
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
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="partsdetail">
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
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="partsdetail">
                            <h5>$25,500</h5>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="product_pro res_pro">
                            <a href="javascript:void(0)"><i class="fa fa-car" aria-hidden="true"></i> Schedule Test
                                Drive</a>
                            <a href="compare.php" class="whitebtn"><i class="fas fa-tachometer-alt"></i>Add to
                                Compare</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="slider_products">
                            <div class="slider-for1">
                                <div>
                                    <div class="productMainDetail">
                                        <a href="images/product_slider.png" tabindex="0" data-fancybox="gallery">
                                            <img src="{{ asset('images/product_slider.png') }}" class="img-fluid"
                                                alt="" />
                                        </a>

                                    </div>
                                </div>

                                <div>
                                    <div class="productMainDetail">
                                        <a href="images/product_slider.png" tabindex="0" data-fancybox="gallery">
                                            <img src="{{ asset('images/product_slider.png') }}" class="img-fluid"
                                                alt="" />
                                        </a>

                                    </div>
                                </div>

                                <div>
                                    <div class="productMainDetail">
                                        <a href="images/product_slider.png" tabindex="0" data-fancybox="gallery">
                                            <img src="{{ asset('images/product_slider.png') }}" class="img-fluid"
                                                alt="" />
                                        </a>

                                    </div>
                                </div>


                                <div>
                                    <div class="productMainDetail">
                                        <a href="images/product_slider.png" tabindex="0" data-fancybox="gallery">
                                            <img src="{{ asset('images/product_slider.png') }}" class="img-fluid"
                                                alt="" />
                                        </a>

                                    </div>
                                </div>

                                <div>
                                    <div class="productMainDetail">
                                        <a href="images/product_slider.png" tabindex="0" data-fancybox="gallery">
                                            <img src="{{ asset('images/product_slider.png') }}" class="img-fluid"
                                                alt="" />
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="slider slider-nav1">
                                <div>
                                    <div class="productlistBox">
                                        <img src="{{ asset('images/product_slider.png') }}" class="img-responsive" alt="">
                                    </div>
                                </div>

                                <div>
                                    <div class="productlistBox">
                                        <img src="{{ asset('images/product_slider.png') }}" class="img-responsive" alt="">
                                    </div>
                                </div>

                                <div>
                                    <div class="productlistBox">
                                        <img src="{{ asset('images/product_slider.png') }}" class="img-responsive" alt="">
                                    </div>
                                </div>

                                <div>
                                    <div class="productlistBox">
                                        <img src="{{ asset('images/product_slider.png') }}" class="img-responsive" alt="">
                                    </div>
                                </div>

                                <div>
                                    <div class="productlistBox">
                                        <img src="{{ asset('images/product_slider.png') }}" class="img-responsive" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="product_tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Home</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                        aria-selected="false">Profile</button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                        aria-selected="false">Contact</button>
                                    <button class="nav-link" id="nav-product-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-product" type="button" role="tab" aria-controls="nav-contact"
                                        aria-selected="false">Contact</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="pro_pehra">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                            in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                            old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                            Virginia, looked up one of the more obscure Latin words, consectetur, from a
                                            Lorem Ipsum passage, and going through the cites of the word in classical
                                            literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                                            1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                                            Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of
                                            ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                                            "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                                            those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
                                            Malorum" by Cicero are also reproduced in their exact original form, accompanied
                                            by English versions from the 1914 translation by H. Rackham.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <div class="pro_pehra">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                            in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                            old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                            Virginia, looked up one of the more obscure Latin words, consectetur, from a
                                            Lorem Ipsum passage, and going through the cites of the word in classical
                                            literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                                            1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                                            Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of
                                            ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                                            "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                                            those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
                                            Malorum" by Cicero are also reproduced in their exact original form, accompanied
                                            by English versions from the 1914 translation by H. Rackham.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <div class="pro_pehra">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                            in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                            old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                            Virginia, looked up one of the more obscure Latin words, consectetur, from a
                                            Lorem Ipsum passage, and going through the cites of the word in classical
                                            literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                                            1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                                            Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of
                                            ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                                            "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                                            those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
                                            Malorum" by Cicero are also reproduced in their exact original form, accompanied
                                            by English versions from the 1914 translation by H. Rackham.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-product" role="tabpanel"
                                    aria-labelledby="nav-product-tab">
                                    <div class="pro_pehra">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                            in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                            old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                            Virginia, looked up one of the more obscure Latin words, consectetur, from a
                                            Lorem Ipsum passage, and going through the cites of the word in classical
                                            literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                                            1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                                            Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of
                                            ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                                            "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                                            those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
                                            Malorum" by Cicero are also reproduced in their exact original form, accompanied
                                            by English versions from the 1914 translation by H. Rackham.</p>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="related">
                            <h2>related</h2>
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
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><small>4 on 3 reviews</small></li>
                                            </ul>
                                        </div>
                                        <div class="mera-year">
                                            <ul>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-2 col-sm-2 col-1">
                                                            <div class="mera_icon">
                                                                <i class="fas fa-calendar-day"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10 col-sm-10 col-11">
                                                            <div class="icon_head">
                                                                <h12>year</h12>
                                                                <h4>2022</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-2 col-sm-2 col-1">
                                                            <div class="mera_icon">
                                                                <i class="fa fa-car" aria-hidden="true"></i>
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
                                                                <i class="fas fa-gas-pump"></i>
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
                                                                <i class="fas fa-clipboard-check"></i>
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
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><small>4 on 3 reviews</small></li>
                                            </ul>
                                        </div>
                                        <div class="mera-year">
                                            <ul>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-2 col-sm-2 col-1">
                                                            <div class="mera_icon">
                                                                <i class="fas fa-calendar-day"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10 col-sm-10 col-11">
                                                            <div class="icon_head">
                                                                <h12>year</h12>
                                                                <h4>2022</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-2 col-sm-2 col-1">
                                                            <div class="mera_icon">
                                                                <i class="fa fa-car" aria-hidden="true"></i>
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
                                                                <i class="fas fa-gas-pump"></i>
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
                                                                <i class="fas fa-clipboard-check"></i>
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

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="pro_table">
                            <table class="table">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>
                                            <i class="fas fa-car-side"></i> <a href="javascript:void(0)"> Body</a>
                                        </th>
                                        <td>Chevrolet</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="fa fa-road" aria-hidden="true"></i><a
                                                href="javascript:void(0)">Mileage</a>
                                        </th>
                                        <td>100 mi</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="fas fa-gas-pump"></i><a href="javascript:void(0)">Fuel Type</a>
                                        </th>
                                        <td>3000</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="fa fa-car" aria-hidden="true"></i><a
                                                href="javascript:void(0)">Engine</a>
                                        </th>
                                        <td>Hybrid</td>
                                    </tr>

                                    <tr>
                                        <th>
                                            <i class="fa fa-cog" aria-hidden="true"></i><a
                                                href="javascript:void(0)">Transmission</a>
                                        </th>
                                        <td>3000</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="fas fa-car"></i><a href="javascript:void(0)">Drive</a>
                                        </th>
                                        <td>Lautomatic</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="fas fa-fill"></i><a href="javascript:void(0)">Exterior Color</a>
                                        </th>
                                        <td>4WD</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="fas fa-fill"></i><a href="javascript:void(0)">Interior Color</a>
                                        </th>
                                        <td>Black</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="fas fa-registered"></i><a href="javascript:void(0)">Resgistered</a>
                                        </th>
                                        <td>N/a</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="fas fa-clipboard-check"></i><a href="javascript:void(0)">VIN
                                                number</a>
                                        </th>
                                        <td>Larry the Bird</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="fa fa-hashtag" aria-hidden="true"></i><a
                                                href="javascript:void(0)">Stock ID</a>
                                        </th>
                                        <td>123456</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="financing">
                            <h3><i class="fa fa-calculator" aria-hidden="true"></i> Financing Calculator</h3>
                            <div class="jas">
                                <div class="row g-3 align-items-center">
                                    <div class="col-6">
                                        <label for="name" class="col-form-label">Cost of Vehicle ($):</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="number" id="inputtext6" class="form-control"
                                            aria-describedby="passwordHelpInline">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-6">
                                        <label for="name" class="col-form-label">Down Payment ($):</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="number" id="inputtext6" class="form-control"
                                            aria-describedby="passwordHelpInline">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-6">
                                        <label for="name" class="col-form-label">Annual Interest Rate (%):</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="number" id="inputtext6" class="form-control"
                                            aria-describedby="passwordHelpInline">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-6">
                                        <label for="name" class="col-form-label">Term of Loan in Years:</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="number" id="inputtext6" class="form-control"
                                            aria-describedby="passwordHelpInline">

                                        <button type="submit" class="btn btn-primary">Calculate</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- BEGIN Auto Parts section -->

        <!-- END Testimonial Section -->

        @include('layouts.havequiestion')
    </main>
    <!-- end main -->
@endsection
