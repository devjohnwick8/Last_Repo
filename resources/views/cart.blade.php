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
        <!-- BEGIN my Cart section -->
        <section class="add-to-cart">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive wow fadeInLeft" data-wow-duration="2s"
                            style="visibility: visible; animation-duration: 2s; animation-name: fadeInLeft;">
                            <div class="row">
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Shopping Cart</th>
                                        <th>Price</th>
                                        <th>Quantity </th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="space">
                                        <td class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="table-space">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6col-xs-12">
                                                        <a href="javascript:void(0)"><img
                                                                src="{{ asset('images/single_product.png') }}"
                                                                class="img-fluid" alt=""></a>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <h3>Brandix Spark Plug Kit</h3>
                                                        <p>Auto Parts, Plug Kit, Spark</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="col-md-1 col-sm-1 col-xs-12">
                                            <div class="teb">
                                                <h4>$ 1500.00</h4>
                                            </div>
                                        </td>

                                        <td class=" col-md-1 col-sm-1 col-xs-12">
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
                                            <div class="teb_but">
                                                <button type="submit"> Update Cart</button>
                                            </div>
                                        </td>
                                        <td class="col-md-1 col-sm-1 col-xs-12">
                                            <div class="teb">
                                                <h4>$ 1500.00</h4>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="con">
                                <a href="javascript:void(0)">Continue Shopping <i class="fas fa-angle-double-right"></i></a>

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="cart_bt">
                                <a href="{{route('ui_billing_details')}}">Checkout</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- BEGIN my Cart section -->
        <!-- END Testimonial Section -->

        @include('layouts.havequiestion')

    </main>
    <!-- end main -->
@endsection
