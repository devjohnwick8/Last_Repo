@extends('layouts.main')
@section('content')


<!-- BEGIN Contact Sec -->
<section class="thank_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-ms-12 col-xs-12">
                <div class="thank_heading">
                    <h4>Change <small>Password </small> </h4>
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
                            <div class="login-title">
                                <h3>Change Password</h3>
                            </div>
                            <form action="http://test-links.com/robertcardona/my-password-update/16" method="POST">
                                <input type="hidden" name="_token" value="XTi0hJxZAbreu0qsSLOlTrMYRqm9NdvtvkjthuG6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="password" name="old_password" placeholder="old password" class="form-control" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="password" name="new_password" placeholder="New Password" class="form-control" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="password" name="c_password" placeholder="Conform Password" class="form-control" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="submit_btn">
                                            <input class="clr-btn" type="submit" name="" value="Change Password">
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

</main>
<!-- end main -->


@endsection

