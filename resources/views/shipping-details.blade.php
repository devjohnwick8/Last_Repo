@extends('layouts.main')
@section('content')
    <!-- BEGIN Contact Sec -->
    <section class="thank_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-ms-12 col-xs-12">
                    <div class="thank_heading">
                        <h4><small>Shipping </small> Details</h4>
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
        <section id="main_billing">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12 centerCol">
                        <div class="row">
                            <div class="col-12">
                                <div class="gettouch">
                                    <h2>Step 3: Add Your Shipping Details</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="commentSection">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <form action="{{route('ui_post_shipping_details')}}" method="POST" class="row g-3">
                                            @csrf
                                            <div class="col-md-6">
                                                <label for="name" class="form-label">First Name*</label>
                                                <input type="text" class="form-control" name="first_name" id="Name" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Name" class="form-label">Last Name*</label>
                                                <input type="text" class="form-control" required name="last_name" id="Name">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Name" class="form-label">Company Name (Optional)</label>
                                                <input type="text" class="form-control" required name="company_name" id="Name" >
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleDataList" class="form-label">Country /
                                                    Region*</label>
                                                <input class="form-control" name="country" type="text" id="exampleDataList" required>
                                                {{--  <datalist id="datalistOptions">
                                                    <option value="San Francisco">
                                                    <option value="New York">
                                                    <option value="Seattle">
                                                    <option value="Los Angeles">
                                                    <option value="Chicago">
                                                </datalist>  --}}
                                            </div>
                                            <div class="col-md-6">
                                                <label for="email" class="form-label">Street Address*</label>
                                                <input type="text" required  name="address1" class="form-control" id="email">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="text" class="form-label">Street Address*</label>
                                                <input type="text" required name="address2" class="form-control" id="Number">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="name" class="form-label">Town*</label>
                                                <input type="text" name="town" required class="form-control" id="name">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="text" class="form-label">Postal / ZIP (Optional)</label>
                                                <input type="number" name="zip_code" class="form-control" id="number" required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="text" class="form-label">Phone*</label>
                                                <input type="number" name="phone" class="form-control" id="number" required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="email" class="form-label">Email Address*</label>
                                                <input type="email" class="form-control" id="email" name="email" value="{{auth()->user()->email}}" readonly>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <textarea class="form-control" name="notes" required placeholder="Leave a comment here"
                                                        id="Order Notes (Optional)" style="height: 150px"></textarea>
                                                    <label for="floatingTextarea2">Notes about your order, e.g. special
                                                        notes for delivery. </label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">
                                                        Proceed<i class="fa fa-angle-right"
                                                        aria-hidden="true"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>
    <!-- end main -->
@endsection
