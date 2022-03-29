@extends('layouts.main')
@section('content')
    <!-- BEGIN Contact Sec -->
    <section class="thank_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-ms-12 col-xs-12">
                    <div class="thank_heading">
                        <h4><small>Card</small> details</h4>
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
        <!-- Google Maps -->
        <section class="cart_detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="payment_info">
                            <h2>Step 3: Payment Information (Credit & Debit Card)</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="cart_form">
                            <div class="card_form">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="mb-3">
                                                <label for="Name" class="form-label">Name on card*</label>
                                                <input type="number" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="mb-3">
                                                <label for="Name" class="form-label">Card card*</label>
                                                <input type="number" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="mb-3">
                                                <label for="Name" class="form-label">CVC*</label>
                                                <input type="number" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="mb-3">
                                                <label for="Name" class="form-label">Expiration Month*</label>
                                                <input type="number" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="mb-3">
                                                <label for="Name" class="form-label">Expiration Month*</label>
                                                <input type="number" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Default radio
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="carbn">
                                                <button type="button" class="btn btn-primary"><a href="thank-you.php">Pay
                                                        Now</a> <i class="fa fa-angle-right"
                                                        aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="order_summery">
                            <h4>Order Summery</h4>
                            <h6>Need Help? Text or Call</h6>
                            <a href="tel:+1 123 456 8900">+1 123 456 8900</a>

                        </div>
                        <div class="order_table">
                            <h3>Order Recap</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Item</th>
                                        <th scope="col">Item</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Brandix Spark Plug Kit</th>
                                        <td>900</td>
                                        <td>2</td>
                                        <td scope="row">$ 1800 </td>
                                    </tr>
                                    <tr>
                                        <th>Shipment Charges</th>
                                        <td></td>
                                        <td></td>
                                        <td scope="row">$100</td>
                                    </tr>

                                </tbody>
                            </table>
                            <small>total <span> $1800</span></small>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Google Maps -->

        <!-- END Testimonial Section -->
    </main>
    <!-- end main -->
@endsection
