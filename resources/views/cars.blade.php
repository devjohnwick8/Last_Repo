@extends('layouts.main')
@section('content')
    <!-- BEGIN Contact Sec -->
    <section class="thank_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-ms-12 col-xs-12">
                    <div class="thank_heading">
                        <h4><small> Search</small> Your Favorite Cars</h4>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter Keywords Here..">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"
                                aria-hidden="true"></i></button>
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
                        <div class="leftsidebar">
                            <span>Filter</span>
                            <div class="filterradio">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <small>Make</small>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="customradionbtn">
                                                    <form action="#">
                                                        <div class="forlist">
                                                            <input type="radio" id="test1" name="radio-group" checked>
                                                            <label for="test1">Acura</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test2" name="radio-group">
                                                            <label for="test2">Bentley</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test3" name="radio-group">
                                                            <label for="test3">Benzo</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test4" name="radio-group">
                                                            <label for="test4">BMW</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test5" name="radio-group">
                                                            <label for="test5">Chevrolet</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test6" name="radio-group">
                                                            <label for="test6">Ford</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test7" name="radio-group">
                                                            <label for="test7">Honda</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test8" name="radio-group">
                                                            <label for="test8">Hyundai</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test9" name="radio-group">
                                                            <label for="test8">Kia</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test10" name="radio-group">
                                                            <label for="test8">Lexus</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test11" name="radio-group">
                                                            <label for="test8">Mazda</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test12" name="radio-group">
                                                            <label for="test8">Mercedes-Benz</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test13" name="radio-group">
                                                            <label for="test8">Nissan</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test14" name="radio-group">
                                                            <label for="test8">Tesla</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test15" name="radio-group">
                                                            <label for="test8">Toyota</label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false"
                                                aria-controls="collapse6">
                                                <small>Year</small>
                                            </button>
                                        </h2>
                                        <div id="collapse6" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="customradionbtn">
                                                    <form action="#">
                                                        <div class="forlist">
                                                            <input type="radio" id="test1" name="radio-group" checked>
                                                            <label for="test1">Auto & Tires</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test2" name="radio-group">
                                                            <label for="test2">Auto Safety Accessories</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test3" name="radio-group">
                                                            <label for="test3">Automotive Interior</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test4" name="radio-group">
                                                            <label for="test4">Automotive Tools & Equipment</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test5" name="radio-group">
                                                            <label for="test5">Brakes And Brake Parts</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test6" name="radio-group">
                                                            <label for="test6">Replacement Parts</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test7" name="radio-group">
                                                            <label for="test7">Steering Wheel Covers</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test8" name="radio-group">
                                                            <label for="test8">Uncategorized</label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false"
                                                aria-controls="collapse5">
                                                <small>Condition</small>
                                            </button>
                                        </h2>
                                        <div id="collapse5" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="customradionbtn">
                                                    <form action="#">
                                                        <div class="forlist">
                                                            <input type="radio" id="test1" name="radio-group" checked>
                                                            <label for="test1">Auto & Tires</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test2" name="radio-group">
                                                            <label for="test2">Auto Safety Accessories</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test3" name="radio-group">
                                                            <label for="test3">Automotive Interior</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test4" name="radio-group">
                                                            <label for="test4">Automotive Tools & Equipment</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test5" name="radio-group">
                                                            <label for="test5">Brakes And Brake Parts</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test6" name="radio-group">
                                                            <label for="test6">Replacement Parts</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test7" name="radio-group">
                                                            <label for="test7">Steering Wheel Covers</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test8" name="radio-group">
                                                            <label for="test8">Uncategorized</label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                <small>Transmission</small>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="customradionbtn">
                                                    <form action="#">
                                                        <div class="forlist">
                                                            <input type="radio" id="test1" name="radio-group" checked>
                                                            <label for="test1">Auto & Tires</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test2" name="radio-group">
                                                            <label for="test2">Auto Safety Accessories</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test3" name="radio-group">
                                                            <label for="test3">Automotive Interior</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test4" name="radio-group">
                                                            <label for="test4">Automotive Tools & Equipment</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test5" name="radio-group">
                                                            <label for="test5">Brakes And Brake Parts</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test6" name="radio-group">
                                                            <label for="test6">Replacement Parts</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test7" name="radio-group">
                                                            <label for="test7">Steering Wheel Covers</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test8" name="radio-group">
                                                            <label for="test8">Uncategorized</label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <small>Model</small>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="customradionbtn">
                                                    <form action="#">
                                                        <div class="forlist">
                                                            <input type="radio" id="test1" name="radio-group" checked>
                                                            <label for="test1">Auto & Tires</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test2" name="radio-group">
                                                            <label for="test2">Auto Safety Accessories</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test3" name="radio-group">
                                                            <label for="test3">Automotive Interior</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test4" name="radio-group">
                                                            <label for="test4">Automotive Tools & Equipment</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test5" name="radio-group">
                                                            <label for="test5">Brakes And Brake Parts</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test6" name="radio-group">
                                                            <label for="test6">Replacement Parts</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test7" name="radio-group">
                                                            <label for="test7">Steering Wheel Covers</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test8" name="radio-group">
                                                            <label for="test8">Uncategorized</label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false"
                                                aria-controls="collapse4">
                                                <small>Body</small>
                                            </button>
                                        </h2>
                                        <div id="collapse4" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="customradionbtn">
                                                    <form action="#">
                                                        <div class="forlist">
                                                            <input type="radio" id="test1" name="radio-group" checked>
                                                            <label for="test1">Auto & Tires</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test2" name="radio-group">
                                                            <label for="test2">Auto Safety Accessories</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test3" name="radio-group">
                                                            <label for="test3">Automotive Interior</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test4" name="radio-group">
                                                            <label for="test4">Automotive Tools & Equipment</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test5" name="radio-group">
                                                            <label for="test5">Brakes And Brake Parts</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test6" name="radio-group">
                                                            <label for="test6">Replacement Parts</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test7" name="radio-group">
                                                            <label for="test7">Steering Wheel Covers</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test8" name="radio-group">
                                                            <label for="test8">Uncategorized</label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false"
                                                aria-controls="collapse10">
                                                <small>Drive</small>
                                            </button>
                                        </h2>
                                        <div id="collapse10" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="customradionbtn">
                                                    <form action="#">
                                                        <div class="forlist">
                                                            <input type="radio" id="test1" name="radio-group" checked>
                                                            <label for="test1">Auto & Tires</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test2" name="radio-group">
                                                            <label for="test2">Auto Safety Accessories</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test3" name="radio-group">
                                                            <label for="test3">Automotive Interior</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test4" name="radio-group">
                                                            <label for="test4">Automotive Tools & Equipment</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test5" name="radio-group">
                                                            <label for="test5">Brakes And Brake Parts</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test6" name="radio-group">
                                                            <label for="test6">Replacement Parts</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test7" name="radio-group">
                                                            <label for="test7">Steering Wheel Covers</label>
                                                        </div>
                                                        <div class="forlist">
                                                            <input type="radio" id="test8" name="radio-group">
                                                            <label for="test8">Uncategorized</label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false"
                                                aria-controls="collapse7">
                                                <small>Price</small>
                                            </button>
                                        </h2>
                                        <div id="collapse7" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="myrange">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div id="slider-range"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row slider-labels">
                                                        <div class="col-xs-12 caption">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                        <strong>Min:</strong> <span
                                                                            id="slider-range-value1"></span>
                                                                        <input type="hidden" name="min-value" value="">
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="forright">
                                                                            <strong>Max:</strong> <span
                                                                                id="slider-range-value2"></span>
                                                                            <input type="hidden" name="max-value" value="">
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false"
                                                aria-controls="collapse9">
                                                <small>Mileage</small>
                                            </button>
                                        </h2>
                                        <div id="collapse9" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="myrange">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div id="slider-range"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row slider-labels">
                                                        <div class="col-xs-12 caption">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                        <strong>Min:</strong> <span
                                                                            id="slider-range-value1"></span>
                                                                        <input type="hidden" name="min-value" value="">
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="forright">
                                                                            <strong>Max:</strong> <span
                                                                                id="slider-range-value2"></span>
                                                                            <input type="hidden" name="max-value" value="">
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false"
                                                aria-controls="collapse8">
                                                <small>Rating</small>
                                            </button>
                                        </h2>
                                        <div id="collapse8" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="ratinglist">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resetbtn">
                                    <button class="reset1">Filter</button>
                                    <button class="reset2">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="rightarea">
                            <div class="producbox">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="cars_img">
                                            <a data-fancybox="gallery" href="https://youtu.be/AFtUpMTs4vI" tabindex="0"><img
                                                    src="images/cars_1.png" alt="Part" class="img-fluid"><i
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
                                            <a data-fancybox="gallery" href="https://youtu.be/AFtUpMTs4vI" tabindex="0"><img
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
                                            <a data-fancybox="gallery" href="https://youtu.be/AFtUpMTs4vI" tabindex="0"><img
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
                                            <a data-fancybox="gallery" href="https://youtu.be/AFtUpMTs4vI tabindex=" 0"><img
                                                    src="images/cars_4.png" alt="Part" class="img-fluid"><i
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
                                            <a data-fancybox="gallery" href="https://youtu.be/AFtUpMTs4vI" tabindex="0"><img
                                                    src="images/cars_5.png" alt="Part" class="img-fluid"><i
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

                            <div class="productpagination">
                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
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
