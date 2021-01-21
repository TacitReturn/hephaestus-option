@extends('layouts.app')

@section('content')
    <!-- Intro Section -->
    <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://mdbootstrap.com/img/Photos/Others/img%20%2853%29.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="mask rgba-stylish-light">
            <div class="container h-100 d-flex justify-content-center align-items-center">
                <div class="row pt-5 mt-3">
                    <div class="col-md-12 mb-3">
                        <div class="intro-info-content text-center">
                            <h1 class="display-3 white-text mb-5 wow fadeInDown" data-wow-delay="0.3s">ABOUT <a class="white-text font-weight-bold">US</a></h1>
                            <h5 class="text-uppercase white-text mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Lorem ipsum dolor sit amet consectetur. </h5>
                            <a class="btn btn-light-blue btn-lg wow fadeInDown" data-wow-delay="0.3s">portfolio</a>
                            <a class="btn btn-indigo btn-lg wow fadeInDown" data-wow-delay="0.3s">About</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </header>
    <!-- Main Navigation -->

    <!-- Main Layout -->
    <main>

        <div class="container">

            <!-- Section: Team v.3 -->
            <section id="team" class="section team-section pb-4 wow fadeIn" data-wow-delay="0.3s">

                <!-- Section heading -->
                <h2 class="font-weight-bold text-center h1 my-5">Our amazing team</h2>
                <!-- Section description -->
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

                <!-- Grid row -->
                <div class="row mb-lg-4 text-center text-md-left">

                    <!-- Grid column -->
                    <div class="col-lg-6 col-md-12 mb-4">

                        <div class="col-md-6 float-left">
                            <div class="avatar mx-auto mb-md-0 mb-3">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" class="z-depth-1" alt="First sample avatar image">
                            </div>
                        </div>

                        <div class="col-md-6 float-right">
                            <h4><strong>John Doe</strong></h4>
                            <h6 class="font-weight-bold grey-text mb-4">Web Designer</h6>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p>

                            <!-- Facebook -->
                            <a class="p-2 m-2 fa-lg fb-ic"><i class="fab fa-facebook-f"> </i></a>
                            <!-- Twitter -->
                            <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter"> </i></a>
                            <!-- Dribbble -->
                            <a class="p-2 m-2 fa-lg dribbble-ic"><i class="fab fa-dribbble"> </i></a>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-6 col-md-12 mb-4">

                        <div class="col-md-6 float-left">
                            <div class="avatar mx-auto mb-md-0 mb-3">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" class="z-depth-1" alt="Second sample avatar image">
                            </div>
                        </div>

                        <div class="col-md-6 float-right">
                            <h4><strong>Maria Kate</strong></h4>
                            <h6 class="font-weight-bold grey-text mb-4">Photographer</h6>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p>

                            <!-- Facebook -->
                            <a class="p-2 m-2 fa-lg fb-ic"><i class="fab fa-facebook-f"> </i></a>
                            <!-- YouTube -->
                            <a class="p-2 m-2 fa-lg yt-ic"><i class="fab fa-youtube"> </i></a>
                            <!-- Instagram -->
                            <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram"> </i></a>
                        </div>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row text-center text-md-left">

                    <!-- Grid column -->
                    <div class="col-lg-6 col-md-12 mb-4">

                        <div class="col-md-6 float-left">
                            <div class="avatar mx-auto mb-md-0 mb-3">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" class="z-depth-1" alt="Fourth sample avatar image">
                            </div>
                        </div>

                        <div class="col-md-6 float-right">
                            <h4><strong>Anna Deynah</strong></h4>
                            <h6 class="font-weight-bold grey-text mb-4">Web Developer</h6>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p>

                            <!-- Facebook -->
                            <a class="p-2 m-2 fa-lg fb-ic"><i class="fab fa-facebook-f"> </i></a>
                            <!-- Twitter -->
                            <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter"> </i></a>
                            <!-- GitHub -->
                            <a class="p-2 m-2 fa-lg git-ic"><i class="fab fa-github"> </i></a>
                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="col-md-6 float-left">
                            <div class="avatar mx-auto mb-md-0 mb-3">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(29).jpg" class="z-depth-1" alt="Fifth sample avatar image">
                            </div>
                        </div>

                        <div class="col-md-6 float-right">
                            <h4><strong>Sarah Melyah</strong></h4>
                            <h6 class="font-weight-bold grey-text mb-4">Front-end Developer</h6>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p>

                            <!-- Google + -->
                            <a class="p-2 m-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g"> </i></a>
                            <!-- LinkedIn -->
                            <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in"> </i></a>
                            <!-- Email -->
                            <a class="p-2 m-2 fa-lg email-ic"><i class="fas fa-envelope"> </i></a>
                        </div>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: Team v.3 -->

            <hr class="my-5">

            <!-- Section: Features v.1 -->
            <section id="products" class="text-center wow fadeIn" data-wow-delay="0.3s">

                <!-- Section heading -->
                <h1 class="font-weight-bold text-center h1 my-5">We create awesome products</h1>
                <!-- Section description -->
                <p class="text-center grey-text mb-5 mx-auto w-responsive lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-4 mb-4">
                        <i class="fas fa-4x fa-chart-area pink-text"></i>
                        <h4 class="font-weight-bold my-4">Analytics</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 mb-4">
                        <i class="fas fa-4x fa-pencil-alt cyan-text"></i>
                        <h4 class="font-weight-bold my-4">Design</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 mb-4">
                        <i class="fas fa-4x fa-laptop indigo-text"></i>
                        <h4 class="font-weight-bold my-4">Development</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: Features v.1 -->

            <hr class="my-5">

            <!-- Section: Gallery -->
            <section id="gallery" class="section wow fadeIn" data-wow-delay="0.3s">

                <!-- Section heading -->
                <h1 class="font-weight-bold text-center h1 my-5">Our work</h1>
                <!-- Section description -->
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                <div class="row pb-4">
                    <div class="col-md-12">

                        <div id="mdb-lightbox-ui"></div>

                        <div class="mdb-lightbox">

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(43).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(43).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(41).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(41).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(40).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(40).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(14).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(14).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(42).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(42).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/People/12-col/img%20(132).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/12-col/img%20(132).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                        </div>

                    </div>

                </div>

            </section>
            <!-- /Section: Gallery -->
        </div>

    </main>
    <!-- Main Layout -->

    <!--  SCRIPTS  -->
    <!-- JQuery -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <script>
        $(document).ready(() => {
            new WOW().init();
        });

        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("../mdb-addons/mdb-lightbox-ui.html");
        });

    </script>
@endsection
