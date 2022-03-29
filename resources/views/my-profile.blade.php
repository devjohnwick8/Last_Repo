@extends('layouts.main')
@section('content')


<!-- BEGIN Contact Sec -->
<section class="thank_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-ms-12 col-xs-12">
                <div class="thank_heading">
                    <h4><small>My</small> Profile</h4>
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
    <section class="login-main padding-70 angle-img">
        <div class="container">
            <div class="col-xs-10 col-sm-10 col-md-10 centerCol">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="login_box">
                            <form class="form account-details-form" action="http://test-links.com/robertcardona/my-profile-update/16" method="post">
                                <input type="hidden" name="_token" value="XTi0hJxZAbreu0qsSLOlTrMYRqm9NdvtvkjthuG6">
                                <div class="row">

                                    <div class="form-group mb-3 col-sm-6">
                                        <label for="display-name">First Name *</label>
                                        <input type="text" id="display-name" name="first_name" placeholder="Username" class="form-control form-control-md mb-0" value="john">

                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="email_1">Email address *</label>
                                        <input readonly type="email" id="email_1" name="email" class="form-control form-control-md" value="devjohnwick8@gmail.com">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="email_1">Phone Number *</label>
                                        <input type="number" id="email_1" name="phone" class="form-control form-control-md" value="1234567">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="email_1">Zip Code *</label>
                                        <input type="number" id="email_1" name="zip_code" class="form-control form-control-md" value="123456">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="email_1">City *</label>
                                        <input type="text" id="email_1" name="city" class="form-control form-control-md" value="city">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="email_1">State *</label>
                                        <input type="text" id="email_1" name="state" class="form-control form-control-md" value="state">
                                    </div>
                                </div>
                                <div class="form-group mb-6">
                                    <label for="email_1">Address One</label>
                                    <input type="text" id="email_1" name="address1" class="form-control form-control-md" value="address1">
                                </div>
                                <div class="form-group mb-6">
                                    <label for="email_1">Address Two</label>
                                    <input type="text" id="email_1" name="address2" class="form-control form-control-md" value="address2">
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="submit_btn">
                                            <input class="clr-btn" type="submit" name="" value="Update Profile">
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>
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
