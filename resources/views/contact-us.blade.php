@extends('layouts.main')
@section('content')

    <!-- BEGIN Contact Sec -->
    <section class="Contactbanner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-ms-12 col-xs-12">
                    <div class="contactheading">
                        <small>CONTACT US</small>
                        <span>HAVE SOME QUESTIONS?</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam</p>
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
        <section>
            <div class="googlemaps wow fadeInLeft" data-wow-duration="2s">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3111.566501311371!2d-77.45268788443379!3d38.75070886318201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b65b9431bb960f%3A0x2cd9cdc9b86453c4!2sHistoric%20District%2C%209532%20Liberia%20Ave%20%23723%2C%20Manassas%2C%20VA%2020110%2C%20USA!5e0!3m2!1sen!2s!4v1644550668695!5m2!1sen!2s"></iframe>
            </div>
        </section>
        <!-- Google Maps -->
        <!-- BEGIN Schedule Section -->
        <section class="schedulesec">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="timetable forcontacttimetable wow fadeInLeft" data-wow-duration="2s">
                            <span> Our Address</span>
                            <div class="locationdetail">
                                <ul>
                                    <li>
                                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3111.566501311371!2d-77.45268788443379!3d38.75070886318201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b65b9431bb960f%3A0x2cd9cdc9b86453c4!2sHistoric%20District%2C%209532%20Liberia%20Ave%20%23723%2C%20Manassas%2C%20VA%2020110%2C%20USA!5e0!3m2!1sen!2s!4v1644550668695!5m2!1sen!2s"
                                            target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i> 9532 LIBERIA
                                            AVE SUITE #723 MANASSAS, VA 20110</a>
                                    </li>
                                    <li>
                                        <a href="tel:+12345678900"><i class="fa fa-phone" aria-hidden="true"></i> +1 234
                                            567 8900</a>
                                    </li>
                                    <li>
                                        <a href="mailto:loremipsum@email.com"><i class="fa fa-envelope-open"
                                                aria-hidden="true"></i> loremipsum@email.com</a>
                                    </li>
                                </ul>
                            </div>
                            <span> Opening Hours</span>
                            <ul>
                                <li>
                                    <strong>Sunday</strong>
                                    <small class="redcolor">Closed</small>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <strong>Monday to Thursday</strong>
                                    <small>9:00 AM - 9:00 PM</small>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <strong>Friday and Saturday</strong>
                                    <small>9:00 AM - 7:00 PM</small>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="shceduleform  wow fadeInRight" data-wow-duration="2s">
                            <div class="drophead">
                                <small>DROP US A LINE</small>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="mb-3">
                                            <label for="Name" class="form-label">First Name*</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="mb-3">
                                            <label for="Email" class="form-label">Last Name*</label>
                                            <input type="email" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email*</label>
                                            <input type="email" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="mb-3">
                                            <label for="Make / Model*" class="form-label">Phone no.*</label>
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="mb-3">
                                            <label for="message" class="form-label">Leave your message*</label>
                                            <textarea placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Request A Service <i class="fa fa-angle-right"
                                        aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BEGIN Schedule Section -->
        <!-- END Testimonial Section -->
        @include('layouts.havequiestion')

    </main>
    <!-- end main -->

@section('content')
