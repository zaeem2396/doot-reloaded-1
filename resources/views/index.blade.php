@include('include.header')
<div class="main-wrapper home">


    <!-- BANNER SLIDER CAROUSEL -->
    <section class="banner mb-4">
        <div class="container-fluid">
            <div class="row">
                <!-- First Section: Cards (Always Visible) -->
                <div class="element_row col-md-6 mx-auto" style="margin-top: 7rem;">
                    <h1 class="text-center mb-3" style="font-size: 24px;">Home services at your doorstep</h1>
                    <div class="row">
                        @foreach ($categories['response']['data'] as $cat)
                        <div class="col-12 col-sm-6 col-md-4 mb-3">
                            <div class="card card-body text-center p-3 shadow-sm" style="border-radius: 15px;">
                                <div class="text-center">
                                    <img src="{{$cat['img']}}"
                                        class="img-fluid" style="height: 50px; width: 50px;" alt="">
                                </div>
                                <div class="">
                                    <a href="/service/{{$cat['url']}}" class="text-capitalize" style="font-size: 10px;">
                                        {{ str_replace('-', ' ', $cat['name']) }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Second Section: Banner (Hidden on Mobile) -->
                <div id="banner-slider" class="element_row col-md-6 d-none d-md-block">
                    <div class="item">
                        <div class="bg-image-holder"
                            style="background-image: url('assets/photo-collage.png.png'); height: 457px; margin-top: 4rem;">
                            <div class="slider-caption container" style="margin-top: 10rem;">
                                <div class="caption-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="more-feature bg--dark py-5">
        <div class="container">
            <div class="row align-items-center text-center text-md-left">
                <!-- Left Content (Text) -->
                <div class="col-12 col-md-4 order-2 order-md-1">
                    <div class="more-feature-left">
                        <div class="sectionTitle">
                            <h3 class="text-white">Salon for Women</h3>
                        </div>
                        <div class="more-features">
                            <h1 style="color: #a91d3b;">Discover Our Exquisite Women's Salon Services</h1>
                        </div>
                        <div class="mt-3">
                            <a href="/service/salon-for-women" class="btn btn-md text-white" style="background-color: #a91d3b;">Book
                                Now</a>
                        </div>
                    </div>
                </div>

                <!-- Right Content (Image) -->
                <div class="col-12 col-md-8 order-1 order-md-2">
                    <img src="assets/img/home/women-salon-banner.webp" alt="women-salon-banner"
                        class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- COUNTING UP -->
    <section class="mt-5">
        <div class="p-l-r">
            <h2 class="text-center">Most ordered services</h2>
            <div class="row mt-3">
                <div class="col-md-3">
                    <div class="card card-style3">
                        <div class="card_img">
                            <a href="javascript:void(0)"><img class="img-full loaded h-286"
                                    data-original="assets/img/blog/blog1.jpg" alt="Card image"
                                    src="https://www.nobroker.in/blog/wp-content/uploads/2024/04/home-cleaning-service-apps.jpg" data-was-processed="true"></a>
                            <div style="background-color: #000 !important;" class="date-holder bg-primary">
                                <span>2,999</span>
                            </div>
                        </div>
                        <div class="card-block">
                            <a href="javascript:void(0)">
                                <h4 class="card-title">Home cleaning service</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-style3">
                        <div class="card_img">
                            <a href="javascript:void(0)"><img class="img-full loaded h-286"
                                    data-original="assets/img/blog/blog2.jpg" alt="Card image"
                                    src="https://dubaifixing.com/wp-content/uploads/2020/06/ac-cleaning.jpg" data-was-processed="true"></a>
                            <div style="background-color: #000 !important;" class="date-holder bg-primary">
                                <span>2,999</span>
                            </div>
                        </div>
                        <div class="card-block">
                            <a href="javascript:void(0)">
                                <h4 class="card-title">Ac cleaning service</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-style3">
                        <div class="card_img">
                            <a href="javascript:void(0)"><img class="img-full loaded h-286"
                                    data-original="assets/img/blog/blog3.jpg" alt="Card image"
                                    src="https://www.oneindiapestcontrol.com/wp-content/uploads/2023/01/Is-Commercial-Pest-Control-Different-From-Residential-Pest-Control.jpg" data-was-processed="true"></a>
                            <div style="background-color: #000 !important;" class="date-holder bg-primary">
                                <span>2,999</span>
                            </div>
                        </div>
                        <div class="card-block">
                            <a href="javascript:void(0)">
                                <h4 class="card-title">Pest control services</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-style3">
                        <div class="card_img">
                            <a href="javascript:void(0)"><img class="img-full loaded h-286"
                                    data-original="assets/img/blog/blog3.jpg" alt="Card image"
                                    src="https://images.jdmagicbox.com/quickquotes/listicle/listicle_1691741714044_3353f_6240x4000.jpg" data-was-processed="true"></a>
                            <div style="background-color: #000 !important;" class="date-holder bg-primary">
                                <span>2,999</span>
                            </div>
                        </div>
                        <div class="card-block">
                            <a href="javascript:void(0)">
                                <h4 class="card-title">Disinfection service</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR PORTFOLIO -->
    <section class="portfolio-area">
        <div class="container">
            <!-- section title -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="sectionTitle text-center">
                        <h2>Our Services</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm temp</p>
                    </div>
                </div>
            </div>
            <!-- section title ends -->
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card_img">
                            <a href="project-style-1.html">
                                <img class="img-full" data-original="assets/img/home/gallery/g1.jpg" />
                                <div class="hover-overlay effect-scale">
                                    <div class="img_overlay-container">
                                        <h4 class="img_overlay-title">Home cleaning service</h4>
                                        <p class="img_overlay-desc">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit sed do eiusmod </p>
                                        <div class="img_overlay-icon">
                                            <a href="assets/img/projetcs/g1.jpg" class="icon link quick_view"
                                                data-fancybox="quick-view1" data-qw-form="qw-form-1"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="project-style-1.html" class="icon link"><i
                                                    class="fa fa-link"></i></a>
                                            <span class="hidden">
                                                <a class="quick_view" data-fancybox="quick-view1"
                                                    href="assets/img/projetcs/g1.jpg">#2</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div id="qw-form-1" class="hidden">
                            <div class="bg-image"
                                style="background-image: url('assets/img/projetcs/bg-projects.jpg');">
                                <div class="project_specification">
                                    <h2 class="text-primary">Project Details</h2>
                                    <div class="row">
                                        <div class="col-4 ">Clients:</div>
                                        <div class="col-8 ">Jake Hemswire</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Category:</div>
                                        <div class="col-8 ">Investment,Consulting</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Date:</div>
                                        <div class="col-8 ">20 June, 2017</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Status:</div>
                                        <div class="col-8 ">In Progress</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Website: </div>
                                        <div class="col-8  text-primary">www.info@example.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card_img">
                            <a href="project-style-2.html">
                                <img class="img-full" data-original="assets/img/home/gallery/g2.jpg" />
                                <div class="hover-overlay effect-scale">
                                    <div class="img_overlay-container">
                                        <h4 class="img_overlay-title">SAc cleaning service</h4>
                                        <p class="img_overlay-desc">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit sed do eiusmod </p>
                                        <div class="img_overlay-icon">
                                            <a href="assets/img/home/gallery/g2.jpg" class="icon link quick_view"
                                                data-fancybox="quick-view2" data-qw-form="qw-form-2"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="project-style-2.html" class="icon link"><i
                                                    class="fa fa-link"></i></a>
                                            <span class="hidden">
                                                <a class="quick_view" data-fancybox="quick-view2"
                                                    href="assets/img/home/gallery/g2.jpg">#2</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div id="qw-form-2" class="hidden">
                            <div class="bg-image"
                                style="background-image: url('assets/img/projetcs/bg-projects.jpg');">
                                <div class="project_specification">
                                    <h2 class="text-primary">Project Details 2</h2>
                                    <div class="row">
                                        <div class="col-4 ">Clients:</div>
                                        <div class="col-8 ">Jake Hemswire</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Category:</div>
                                        <div class="col-8 ">Investment,Consulting</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Date:</div>
                                        <div class="col-8 ">20 June, 2017</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Status:</div>
                                        <div class="col-8 ">In Progress</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Website: </div>
                                        <div class="col-8  text-primary">www.info@example.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card_img">
                            <a href="project-style-3.html">
                                <img class="img-full" data-original="assets/img/home/gallery/g3.jpg" />
                                <div class="hover-overlay effect-scale">
                                    <div class="img_overlay-container">
                                        <h4 class="img_overlay-title">Pest control service</h4>
                                        <p class="img_overlay-desc">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit sed do eiusmod </p>
                                        <div class="img_overlay-icon">
                                            <a href="assets/img/home/gallery/g3.jpg" class="icon link quick_view"
                                                data-fancybox="quick-view3" data-qw-form="qw-form-3"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="project-style-3.html" class="icon link"><i
                                                    class="fa fa-link"></i></a>
                                            <span class="hidden">
                                                <a class="quick_view" data-fancybox="quick-view3"
                                                    href="assets/img/home/gallery/g3.jpg">#2</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div id="qw-form-3" class="hidden">
                            <div class="bg-image"
                                style="background-image: url('assets/img/projetcs/bg-projects.jpg');">
                                <div class="project_specification">
                                    <h2 class="text-primary">Project Details</h2>
                                    <div class="row">
                                        <div class="col-4 ">Clients:</div>
                                        <div class="col-8 ">Jake Hemswire</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Category:</div>
                                        <div class="col-8 ">Investment,Consulting</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Date:</div>
                                        <div class="col-8 ">20 June, 2017</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Status:</div>
                                        <div class="col-8 ">In Progress</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Website: </div>
                                        <div class="col-8  text-primary">www.info@example.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card_img">
                            <a href="project-style-1.html">
                                <img class="img-full" data-original="assets/img/home/gallery/g4.jpg" />
                                <div class="hover-overlay effect-scale">
                                    <div class="img_overlay-container">
                                        <h4 class="img_overlay-title">Women salon</h4>
                                        <p class="img_overlay-desc">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit sed do eiusmod </p>
                                        <div class="img_overlay-icon">
                                            <a href="assets/img/home/gallery/g4.jpg" class="icon link quick_view"
                                                data-fancybox="quick-view4" data-qw-form="qw-form-4"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="project-style-1.html" class="icon link"><i
                                                    class="fa fa-link"></i></a>
                                            <span class="hidden">
                                                <a class="quick_view" data-fancybox="quick-view4"
                                                    href="assets/img/home/gallery/g4.jpg">#2</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div id="qw-form-4" class="hidden">
                            <div class="bg-image"
                                style="background-image: url('assets/img/projetcs/bg-projects.jpg');">
                                <div class="project_specification">
                                    <h2 class="text-primary">Project Details</h2>
                                    <div class="row">
                                        <div class="col-4 ">Clients:</div>
                                        <div class="col-8 ">Jake Hemswire</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Category:</div>
                                        <div class="col-8 ">Investment,Consulting</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Date:</div>
                                        <div class="col-8 ">20 June, 2017</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Status:</div>
                                        <div class="col-8 ">In Progress</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Website: </div>
                                        <div class="col-8  text-primary">www.info@example.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card_img">
                            <a href="project-style-2.html">
                                <img class="img-full" data-original="assets/img/home/gallery/g5.jpg" />
                                <div class="hover-overlay effect-scale">
                                    <div class="img_overlay-container">
                                        <h4 class="img_overlay-title">Plumbing service</h4>
                                        <p class="img_overlay-desc">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit sed do eiusmod </p>
                                        <div class="img_overlay-icon">
                                            <a href="assets/img/blog/g5.jpg" class="icon link quick_view"
                                                data-fancybox="quick-view5" data-qw-form="qw-form-5"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="project-style-2.html" class="icon link"><i
                                                    class="fa fa-link"></i></a>
                                            <span class="hidden">
                                                <a class="quick_view" data-fancybox="quick-view5"
                                                    href="assets/img/blog/g5.jpg">#2</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div id="qw-form-5" class="hidden">
                            <div class="bg-image"
                                style="background-image: url('assets/img/projetcs/bg-projects.jpg');">
                                <div class="project_specification">
                                    <h2 class="text-primary">Project Details</h2>
                                    <div class="row">
                                        <div class="col-4 ">Clients:</div>
                                        <div class="col-8 ">Jake Hemswire</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Category:</div>
                                        <div class="col-8 ">Investment,Consulting</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Date:</div>
                                        <div class="col-8 ">20 June, 2017</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Status:</div>
                                        <div class="col-8 ">In Progress</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Website: </div>
                                        <div class="col-8  text-primary">www.info@example.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card_img">
                            <a href="project-style-3.html">
                                <img class="img-full" data-original="assets/img/home/gallery/g6.jpg" />
                                <div class="hover-overlay effect-scale">
                                    <div class="img_overlay-container">
                                        <h4 class="img_overlay-title">Sales Organization</h4>
                                        <p class="img_overlay-desc">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit sed do eiusmod </p>
                                        <div class="img_overlay-icon">
                                            <a href="assets/img/home/gallery/g6.jpg" class="icon link quick_view"
                                                data-fancybox="quick-view6" data-qw-form="qw-form-6"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="project-style-3.html" class="icon link"><i
                                                    class="fa fa-link"></i></a>
                                            <span class="hidden">
                                                <a class="quick_view" data-fancybox="quick-view6"
                                                    href="assets/img/home/gallery/g6.jpg">#2</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div id="qw-form-6" class="hidden">
                            <div class="bg-image"
                                style="background-image: url('assets/img/projetcs/bg-projects.jpg');">
                                <div class="project_specification">
                                    <h2 class="text-primary">Project Details</h2>
                                    <div class="row">
                                        <div class="col-4 ">Clients:</div>
                                        <div class="col-8 ">Jake Hemswire</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Category:</div>
                                        <div class="col-8 ">Investment,Consulting</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Date:</div>
                                        <div class="col-8 ">20 June, 2017</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Status:</div>
                                        <div class="col-8 ">In Progress</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 ">Website: </div>
                                        <div class="col-8  text-primary">www.info@example.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-container">
                <a href="portfolio-4-column-fullwidth.html" class="btn btn-default bg-navy bold">View More</a>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL SECTION -->
    <section class="testimonial-area home-testimonial">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 promo-video-holder">
                    <div class="promo-video">
                        <img class="img-fluid" src="assets/img/home/v-poster.jpg" alt="">
                        <a class="video-link" data-fancybox href="https://www.youtube.com/watch?v=sEl5hp8MEGs"><i
                                class="fa fa-play play-icon" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- Right column -->
                <div class="col-md-6">
                    <div class="bg-image" style="background-image: url('assets/img/home/t-poster.jpg'); ">
                        <div id="home-testimonial" class="">
                            <div class="card ">
                                <div class="card_img">
                                    <img class="img-full" src="assets/img/home/cl1.jpg" alt="Card image">
                                </div>
                                <div class="card-block">
                                    <p>Lorem ipsum dolor sit amet constur adipisicing elit, sed do eiusmtempor incid
                                        et dolore magna aliqu enim minim veniam quis nostrud exercittion</p>
                                    <h4 class="text-white">Julia Robertson</h4>
                                    <span class="text-primary">Happy Client</span>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card_img">
                                    <img class="img-full" src="assets/img/home/cl2.jpg" alt="Card image">
                                </div>
                                <div class="card-block">
                                    <p>Lorem ipsum dolor sit amet constur adipisicing elit, sed do eiusmtempor incid
                                        et dolore magna aliqu enim minim veniam quis nostrud exercittion</p>
                                    <h4 class="text-white">Julia Robertson</h4>
                                    <span class="text-primary">Happy Client</span>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card_img">
                                    <img class="img-full" src="assets/img/home/cl3.jpg" alt="Card image">
                                </div>
                                <div class="card-block">
                                    <p>Lorem ipsum dolor sit amet constur adipisicing elit, sed do eiusmtempor incid
                                        et dolore magna aliqu enim minim veniam quis nostrud exercittion</p>
                                    <h4 class="text-white">Julia Robertson</h4>
                                    <span class="text-primary">Happy Client</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Right column -->

            </div>
        </div>
    </section>

    <!-- OUR SERVICES -->
    <section class="services-area">
        <div class="container">
            <!-- section title -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="sectionTitle text-center">
                        <h2>Our Services</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm temp</p>
                    </div>
                </div>
            </div>
            <!-- section title ends -->
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="media-box">
                        <div class="media-icon">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <div class="media-content">
                            <a href="service-details-left-sidebar.html">
                                <h4>Consultative Training</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor incididunt ut
                                labore</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="media-box">
                        <div class="media-icon">
                            <i class="fa fa-credit-card"></i>
                        </div>
                        <div class="media-content">
                            <a href="service-details-right-sidebar.html">
                                <h4>High Performance Selling</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor incididunt ut
                                labore</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="media-box">
                        <div class="media-icon">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="media-content">
                            <a href="service-details-fullwidth.html">
                                <h4>Sales Coaching Training</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor incididunt ut
                                labore</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="media-box">
                        <div class="media-icon">
                            <i class="fa fa-tripadvisor"></i>
                        </div>
                        <div class="media-content">
                            <a href="service-details-left-sidebar.html">
                                <h4>Advisor Program</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor incididunt ut
                                labore</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="media-box">
                        <div class="media-icon">
                            <i class="fa fa-address-card-o"></i>
                        </div>
                        <div class="media-content">
                            <a href="service-details-right-sidebar.html">
                                <h4>Selling With Insights</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor incididunt ut
                                labore</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="media-box">
                        <div class="media-icon">
                            <i class="ti-ebook"></i>
                        </div>
                        <div class="media-content">
                            <a href="service-details-fullwidth.html">
                                <h4>Consultative Training</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmotempor incididunt ut
                                labore</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FORM -->
    <section class="home-form bg-navy" id="quote" style="padding-bottom: 1rem;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <h2>Get a Quote </h2>
                    <form class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="exampleInputName"
                                aria-describedby="userName" placeholder="Your Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="exampleInputPhone"
                                aria-describedby="userPhone" placeholder="Phone" required>
                        </div>
                        <div class="form-group col-md-6 selectOptions">
                            <select name="topic" class="form-control select-drop">
                                <option>Select a topic</option>
                                <option>Topic 1</option>
                                <option>Topic 2</option>
                                <option>Topic 3</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-default btn-dark"
                                style="background-color: #000;">Send Request</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="promo-img">
                        <img data-original="assets/img/home/bg-form.png" alt="promo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR TEAM -->
    <section class="home-team">
        <div class="container">
            <!-- section title -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="sectionTitle text-center">
                        <h2>Our Professionals</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm temp</p>
                    </div>
                </div>
            </div>
            <!-- section title ends -->
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card card-style2 team-card">
                        <div class="card_img">
                            <img class="img-full" data-original="assets/img/home/about/team1.jpg" alt="Card image">
                            <div class="hover-overlay effect-scale">
                                <a href="#" class="overlay_icon"><i class="fa fa-facebook-f"></i></a>
                                <a href="#" class="overlay_icon"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="overlay_icon"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="card-block">
                            <a href="page-member-details.html">
                                <h4 class="card-title">Julia Robertson</h4>
                            </a>
                            <span class="">Co-Founder</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card card-style2 team-card">
                        <div class="card_img">
                            <img class="card-img-top img-full" src="assets/img/home/about/team2.jpg"
                                alt="Card image">
                            <div class="hover-overlay effect-scale">
                                <a href="#" class="overlay_icon"><i class="fa fa-facebook-f"></i></a>
                                <a href="#" class="overlay_icon"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="overlay_icon"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="card-block">
                            <a href="page-member-details.html">
                                <h4 class="card-title">Charles Nicholes</h4>
                            </a>
                            <span class="">Co-Founder</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card card-style2 team-card">
                        <div class="card_img">
                            <img class="img-full" data-original="assets/img/home/about/team3.jpg" alt="Card image">
                            <div class="hover-overlay effect-scale">
                                <a href="#" class="overlay_icon"><i class="fa fa-facebook-f"></i></a>
                                <a href="#" class="overlay_icon"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="overlay_icon"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="card-block">
                            <a href="page-member-details.html">
                                <h4 class="card-title">Julia Robertson</h4>
                            </a>
                            <span class="">Co-Founder</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card card-style2 team-card">
                        <div class="card_img">
                            <img class="img-full" data-original="assets/img/home/about/team4.jpg" alt="Card image">
                            <div class="hover-overlay effect-scale">
                                <a href="#" class="overlay_icon"><i class="fa fa-facebook-f"></i></a>
                                <a href="#" class="overlay_icon"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="overlay_icon"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="card-block">
                            <a href="page-member-details.html">
                                <h4 class="card-title">Julia Robertson</h4>
                            </a>
                            <span class="">Co-Founder</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BRANDS -->
    <div class="brand_carousel bg-navy">
        <div class="container">
            <div class="slick_brands">
                <div class="brand_single">
                    <div class="brand_img">
                        <img src="assets/img/home/about/b1.png" alt="brands">
                    </div>
                </div>
                <div class="brand_single">
                    <div class="brand_img">
                        <img src="assets/img/home/about/b2.png" alt="brands">
                    </div>
                </div>
                <div class="brand_single">
                    <div class="brand_img">
                        <img src="assets/img/home/about/b3.png" alt="brands">
                    </div>
                </div>
                <div class="brand_single">
                    <div class="brand_img">
                        <img src="assets/img/home/about/b4.png" alt="brands">
                    </div>
                </div>
                <div class="brand_single">
                    <div class="brand_img">
                        <img src="assets/img/home/about/b1.png" alt="brands">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="home-blog">
        <div class="container">
            <!-- section title -->
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="sectionTitle text-center">
                        <h2>Latest From Blog</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm temp</p>
                    </div>
                </div>
            </div>
            <!-- section title ends -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-style3">
                        <div class="card_img">
                            <a href="blog-singlepost-left-sidebar.html"><img class="img-full"
                                    data-original="assets/img/blog/blog1.jpg" alt="Card image"></a>
                            <div style="background-color: #000 !important;" class="date-holder bg-primary">
                                <span>25</span>
                                Feb
                            </div>
                        </div>
                        <div class="card-block">
                            <ul class="list-inline">
                                <li>
                                    <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> <span
                                            class="text-primary">Admin</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 350</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 30</a>
                                </li>
                            </ul>
                            <a href="blog-singlepost-left-sidebar.html">
                                <h4 class="card-title">Finibus Bonorum Malor.</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-style3">
                        <div class="card_img">
                            <a href="blog-singlepost-left-sidebar.html"><img class="img-full"
                                    data-original="assets/img/blog/blog2.jpg" alt="Card image"></a>
                            <div style="background-color: #000 !important;" class="date-holder bg-primary">
                                <span>25</span>
                                Feb
                            </div>
                        </div>
                        <div class="card-block">
                            <ul class="list-inline">
                                <li>
                                    <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> <span
                                            class="text-primary">Admin</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 350</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 30</a>
                                </li>
                            </ul>
                            <a href="blog-singlepost-left-sidebar.html">
                                <h4 class="card-title">Finibus Bonorum Malor.</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-style3">
                        <div class="card_img">
                            <a href="blog-singlepost-left-sidebar.html"><img class="img-full"
                                    data-original="assets/img/blog/blog3.jpg" alt="Card image"></a>
                            <div style="background-color: #000 !important;" class="date-holder bg-primary">
                                <span>25</span>
                                Feb
                            </div>
                        </div>
                        <div class="card-block">
                            <ul class="list-inline">
                                <li>
                                    <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> <span
                                            class="text-primary">Admin</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 350</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 30</a>
                                </li>
                            </ul>
                            <a href="blog-singlepost-left-sidebar.html">
                                <h4 class="card-title">Finibus Bonorum Malor.</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="morphing-content" class="hidden">
        <!-- FORM -->
        <section class="home-form" id="quote">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">Get a Quote </h2>
                        <form class="row pb30">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="exampleInputName"
                                    aria-describedby="userName" placeholder="Your Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="exampleInputPhone"
                                    aria-describedby="userPhone" placeholder="Phone" required>
                            </div>
                            <div class="form-group col-md-6 selectOptions">
                                <select name="topic" class="form-control select-drop">
                                    <option>Select a Topic</option>
                                    <option>Topic 1</option>
                                    <option>Topic 2</option>
                                    <option>Topic 3</option>
                                </select>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-default bg-navy">Send Request</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="newsletter bg-sand">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-12">
                    <h4 class="text-center text-md-left"><span class="text-primary">Subscribe</span> <br>
                        For Latest <span class="text-primary">Update</span></h4>
                </div>
                <div class="col-lg-9 col-12">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputName"
                                aria-describedby="userName" placeholder="Your name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail"
                                aria-describedby="userEmail" placeholder="Your email" required>
                        </div>
                        <div class="">
                            <button style="background-color: #000;"
                                class="btn btn-dark btn-default bold w-100">Subscribe</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    @include('include.footer')