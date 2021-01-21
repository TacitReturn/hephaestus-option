@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Section: Contact v.2 -->
        <section id="contact" class="section pb-5 wow fadeIn" data-wow-delay="0.3s">

            <!-- Section heading -->
            <h2 class="font-weight-bold text-center h1 my-5">Contact us</h2>
            <!-- Section description -->
            <p class="text-center dark-text mb-5 mx-auto w-responsive">
                
            </p>

            <div class="row">

                <!-- Grid column -->
                <div class="col-md-8 col-xl-9">
                    <form>

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" id="contact-name" class="form-control">
                                    <label for="contact-name" class="">Your name</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <input type="text" id="contact-email" class="form-control">
                                    <label for="contact-email" class="">Your email</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <input type="text" id="contact-Subject" class="form-control">
                                    <label for="contact-Subject" class="">Subject</label>
                                </div>
                            </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row mb-4">

                            <!-- Grid column -->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="contact-message" class="md-textarea form-control" rows="3"></textarea>
                                    <label for="contact-message">Your message</label>
                                </div>

                            </div>
                        </div>
                        <!-- Grid row -->

                    </form>

                    <div class="text-center text-md-left mb-4">
                        <a id="contactButton" class="btn btn-light-blue btn-block">Send</a>
                    </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-xl-3">
                    <ul class="contact-icons text-center list-unstyled">
                        <li><i class="fas fa-map-marker fa-2x"></i>
                            <p>Planet Earth</p>
                        </li>

                        <li><i class="fas fa-phone fa-2x"></i>
                            <p>+ 01 234 567 89</p>
                        </li>

                        <li><i class="fas fa-envelope fa-2x"></i>
                            <p>contact@hephaestusoption.com</p>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->

            </div>

        </section>
        <!-- Section: Contact v.2 -->
    </div>
@endsection
