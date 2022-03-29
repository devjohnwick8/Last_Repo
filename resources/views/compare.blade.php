@extends('layouts.main')
@section('content')
    <!-- BEGIN Contact Sec -->
    <section class="thank_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-ms-12 col-xs-12">
                    <div class="thank_heading">
                        <h4><small>Compare </small> Vehicles</h4>
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
        <section class="main_campare">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="car_head car_img">
                            <h2>Compare <span> Vehicles</span></h2>
                        </div>
                        <div class="car_ul wa_qa">
                            <ul>
                                <li><i class="fas fa-car-side"></i> <a href="javascript:void(0)"> Body</a></li>
                                <li><i class="fa fa-road" aria-hidden="true"></i><a
                                        href="javascript:void(0)">Mileage</a></li>
                                <li><i class="fas fa-gas-pump"></i><a href="javascript:void(0)">Fuel Type</a></li>
                                <li><i class="fa fa-car" aria-hidden="true"></i><a href="javascript:void(0)">Engine</a>
                                </li>
                                <li><i class="fa fa-cog" aria-hidden="true"></i><a
                                        href="javascript:void(0)">Transmission</a></li>
                                <li><i class="fas fa-car"></i><a href="javascript:void(0)">Drive</a></li>
                                <li><i class="fas fa-fill"></i><a href="javascript:void(0)">Exterior Color</a></li>
                                <li><i class="fas fa-fill"></i><a href="javascript:void(0)">Interior Color</a></li>
                                <li><i class="fas fa-registered"></i><a href="javascript:void(0)">Resgistered</a></li>
                                <li><i class="fas fa-clipboard-check"></i><a href="javascript:void(0)">VIN number</a></li>
                                <li><i class="fa fa-hashtag" aria-hidden="true"></i><a href="javascript:void(0)">Stock
                                        ID</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="car_img">
                            <img src="{{ asset('images/car_1.png') }}" class="img-fluid" alt="">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapseOne">
                                            Chevrolet Trailblazer 2022
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse "
                                        aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="trail">
                                                        <input type="text" placeholder="Compare">
                                                        <a href="#">Campare</a>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="car_ul new_ul">
                                <ul>
                                    <li> <a href="javascript:void(0)"> Chevrolet</a></li>
                                    <li><a href="javascript:void(0)">100 mi</a></li>
                                    <li><a href="javascript:void(0)">Hybrid</a></li>
                                    <li><a href="javascript:void(0)">3000</a></li>
                                    <li><a href="javascript:void(0)">Automatic</a></li>
                                    <li><a href="javascript:void(0)">4WD</a></li>
                                    <li><a href="javascript:void(0)">Black</a></li>
                                    <li><a href="javascript:void(0)">Black</a></li>
                                    <li><a href="javascript:void(0)">N/a</a></li>
                                    <li><a href="javascript:void(0)">123456879</a></li>
                                    <li><a href="javascript:void(0)">123456</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="car_img car_1">
                            <img src="{{ asset('images/blank_img.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="car_ul new_ul">
                            <ul>
                                <li> <a href="javascript:void(0)"> Chevrolet</a></li>
                                <li><a href="javascript:void(0)">100 mi</a></li>
                                <li><a href="javascript:void(0)">Hybrid</a></li>
                                <li><a href="javascript:void(0)">3000</a></li>
                                <li><a href="javascript:void(0)">Automatic</a></li>
                                <li><a href="javascript:void(0)">4WD</a></li>
                                <li><a href="javascript:void(0)">Black</a></li>
                                <li><a href="javascript:void(0)">Black</a></li>
                                <li><a href="javascript:void(0)">N/a</a></li>
                                <li><a href="javascript:void(0)">123456879</a></li>
                                <li><a href="javascript:void(0)">123456</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="car_img car_1">
                            <img src="{{ asset('images/blank_img.png') }}" class="img-fluid" alt="">
                        </div>

                        <div class="car_ul new_ul">
                            <ul>
                                <li> <a href="javascript:void(0)"> Chevrolet</a></li>
                                <li><a href="javascript:void(0)">100 mi</a></li>
                                <li><a href="javascript:void(0)">Hybrid</a></li>
                                <li><a href="javascript:void(0)">3000</a></li>
                                <li><a href="javascript:void(0)">Automatic</a></li>
                                <li><a href="javascript:void(0)">4WD</a></li>
                                <li><a href="javascript:void(0)">Black</a></li>
                                <li><a href="javascript:void(0)">Black</a></li>
                                <li><a href="javascript:void(0)">N/a</a></li>
                                <li><a href="javascript:void(0)">123456879</a></li>
                                <li><a href="javascript:void(0)">123456</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <div class="car_ul">
                            <h3>Additional Features</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <div class=" body_kit">
                            <ul>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>Auxiliary heating</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>Bluetooth</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>Body Kit</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>Central Locking</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i>CD Player</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- end main -->
@endsection
