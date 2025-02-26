@include('include.header')
<div class="main-wrapper services-3">

    <!-- BREDCRUMB -->
    <!-- <section class="bredcrumb">
	<div class="bg-image text-center" style="background-image: url('assets/img/bg-bredcrumb.jpg');">
		<h1>Services style 3</h1>
	</div>
	<div class="">
		<ul class="pager middle">
			<li>Home</li>
			<li><a href="javascript:void(0)">Services style 3</a></li>
		</ul>
	</div>
</section> -->

    <!-- OUR SERVICES -->
    <section class="services-area services-area2">
        <div class="container-fluid px-md-5">
            <!-- section title -->
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="sectionTitle text-center">
                        <h1>Cleaning services</h1>
                        <hr class="">
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm temp</p> -->
                    </div>
                </div>
            </div>
            <!-- section title ends -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card service-br" style="border: 1px solid #d9d9d9;">
                        <div class="card-body" style="height: 300px; overflow: hidden;">
                            <div style="display: flex; align-items: center;">
                                <span class="card-title p-0">Select a service</span>
                                <hr style="flex-grow: 1; margin-left: 10px; border-top: 1px solid #d9d9d9;">
                            </div>

                            <div class="row mt-2">
                                <!-- First Item -->
                                @foreach ($services['response']['data'] as $service)
                                <div class="col-4 text-center">
                                    <a href="javascript:void(0)">
                                        <img src="https://placehold.co/50" class="img-fluid" alt="Icon 1">
                                        <p style="font-size: small;" class="mt-2 text-dark">{{ucfirst(str_replace('-', ' ',$service['name']))}}</p>
                                    </a>
                                </div>
                                @endforeach

                                <!-- <div class="col-4 text-center">
                                        <img src="https://placehold.co/50" class="img-fluid" alt="Icon 2">
                                        <p class="mt-2">Service 2</p>
                                    </div>

                                    <div class="col-4 text-center">
                                        <img src="https://placehold.co/50" class="img-fluid" alt="Icon 3">
                                        <p class="mt-2">Service 3</p>
                                    </div>

                                    <div class="col-4 text-center">
                                        <img src="https://placehold.co/50" class="img-fluid" alt="Icon 1">
                                        <p class="mt-2">Service 1</p>
                                    </div>

                                    <div class="col-4 text-center">
                                        <img src="https://placehold.co/50" class="img-fluid" alt="Icon 2">
                                        <p class="mt-2">Service 2</p>
                                    </div>

                                    <div class="col-4 text-center">
                                        <img src="https://placehold.co/50" class="img-fluid" alt="Icon 3">
                                        <p class="mt-2">Service 3</p>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 ps-lg-5 ps-xl-7 mt-2 mt-md-0">
                    <div class="row g-4">
                        <!-- Card 1 -->
                        <div class="col-12">
                            <div class="card h-100 d-flex flex-row align-items-center position-relative">
                                <div class="card-body" style="width: 60%;">
                                    <a href="service-details-left-sidebar.html">
                                        <h4 class="card-title">Home Cleaning Service</h4>
                                    </a>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Molestias dignissimos rerum illum iusto quo asperiores sunt reprehenderit?
                                    </p>
                                    <a href="service-details-left-sidebar.html"
                                        class="btn service-br btn-sm bg-dark text-white">Read more</a>
                                </div>
                                <div class="card-img position-relative" style="width: 40%;">
                                    <img src="https://www.nobroker.in/blog/wp-content/uploads/2024/04/home-cleaning-service-apps.jpg"
                                        alt="Service Image" class="img-fluid service-br rounded"
                                        style="width: 150px; height: 100px; object-fit: cover;">
                                    <button type="button" class="btn btn-primary position-absolute"
                                        style="bottom: 10px; left: 10px; transform: translate(50%, 50%);">
                                        Add
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-12">
                            <div class="card h-100 d-flex flex-row align-items-center position-relative">
                                <div class="card-body" style="width: 60%;">
                                    <a href="service-details-right-sidebar.html">
                                        <h4 class="card-title">AC Cleaning Service</h4>
                                    </a>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Molestias dignissimos rerum illum iusto quo asperiores sunt reprehenderit?
                                    </p>
                                    <a href="service-details-left-sidebar.html"
                                        class="btn service-br btn-sm bg-dark text-white">Read more</a>
                                </div>
                                <div class="card-img position-relative" style="width: 40%;">
                                    <img src="https://safaiwale.in/wp-content/uploads/2021/11/ac-cleaning-services.jpg"
                                        alt="Service Image" class="img-fluid service-br rounded"
                                        style="width: 150px; height: 100px; object-fit: cover;">
                                    <button type="button" class="btn btn-primary position-absolute"
                                        style="bottom: 10px; left: 10px; transform: translate(50%, 50%);">
                                        Add
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-12">
                            <div class="card h-100 d-flex flex-row align-items-center position-relative">
                                <div class="card-body" style="width: 60%;">
                                    <a href="service-details-fullwidth.html">
                                        <h4 class="card-title">Pest Control Service</h4>
                                    </a>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Molestias dignissimos rerum illum iusto quo asperiores sunt reprehenderit?
                                    </p>
                                    <a href="service-details-left-sidebar.html"
                                        class="btn service-br btn-sm bg-dark text-white">Read more</a>
                                </div>
                                <div class="card-img position-relative" style="width: 40%;">
                                    <img src="https://www.oneindiapestcontrol.com/wp-content/uploads/2023/01/Is-Commercial-Pest-Control-Different-From-Residential-Pest-Control.jpg"
                                        alt="Service Image" class="img-fluid service-br rounded"
                                        style="width: 150px; height: 100px; object-fit: cover;">
                                    <button type="button" class="btn btn-primary position-absolute"
                                        style="bottom: 10px; left: 10px; transform: translate(50%, 50%);">
                                        Add
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="col-12">
                            <div class="card h-100 d-flex flex-row align-items-center position-relative">
                                <div class="card-body" style="width: 60%;">
                                    <a href="service-details-left-sidebar.html">
                                        <h4 class="card-title">Disinfection Service</h4>
                                    </a>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Molestias dignissimos rerum illum iusto quo asperiores sunt reprehenderit?
                                    </p>
                                    <button type="button" class="btn btn-dark btn-sm text-white">Read more</button>
                                </div>
                                <div class="card-img position-relative" style="width: 40%;">
                                    <img src="https://images.jdmagicbox.com/quickquotes/listicle/listicle_1691741714044_3353f_6240x4000.jpg"
                                        alt="Service Image" class="img-fluid service-br rounded"
                                        style="width: 150px; height: 100px; object-fit: cover;">
                                    <button type="button" class="btn btn-primary position-absolute"
                                        style="bottom: 10px; left: 10px; transform: translate(50%, 50%);">
                                        Add
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="col-12" id="s1">
                            <div class="card h-100 d-flex flex-row align-items-center position-relative">
                                <div class="card-body" style="width: 60%;">
                                    <a href="service-details-right-sidebar.html">
                                        <h4 class="card-title">Women Salon at Home</h4>
                                    </a>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Molestias dignissimos rerum illum iusto quo asperiores sunt reprehenderit?
                                    </p>
                                    <a href="service-details-left-sidebar.html"
                                        class="btn service-br btn-sm bg-dark text-white">Read more</a>
                                </div>
                                <div class="card-img position-relative" style="width: 40%;">
                                    <img src="https://labeswomensalon.com/wp-content/uploads/2023/07/Blog-Feature-Image-1280-x-720-1.jpg"
                                        alt="Service Image" class="img-fluid service-br rounded"
                                        style="width: 150px; height: 100px; object-fit: cover;">
                                    <button type="button" class="btn btn-primary position-absolute"
                                        style="bottom: 10px; left: 10px; transform: translate(50%, 50%);">
                                        Add
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 6 -->
                        <div class="col-12">
                            <div class="card h-100 d-flex flex-row align-items-center position-relative">
                                <div class="card-body" style="width: 60%;">
                                    <a href="service-details-fullwidth.html">
                                        <h4 class="card-title">Plumbing Service</h4>
                                    </a>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Molestias dignissimos rerum illum iusto quo asperiores sunt reprehenderit?
                                    </p>
                                    <a href="service-details-left-sidebar.html"
                                        class="btn service-br btn-sm bg-dark text-white">Read more</a>
                                </div>
                                <div class="card-img position-relative" style="width: 40%;">
                                    <img src="https://content.jdmagicbox.com/comp/def_content/plumbers/4-plumbers-10-jsxp9.jpg"
                                        alt="Service Image" class="img-fluid service-br rounded"
                                        style="width: 150px; height: 100px; object-fit: cover;">
                                    <button type="button" class="btn btn-primary position-absolute"
                                        style="bottom: 10px; left: 10px; transform: translate(50%, 50%);">
                                        Add
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Service model starts -->
    <div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="serviceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document" style="margin-top: -8rem;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="serviceModalLabel">Disinfection Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="https://images.jdmagicbox.com/quickquotes/listicle/listicle_1691741714044_3353f_6240x4000.jpg"
                        alt="" class="img-fluid mb-3" style="height: 200px;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, aspernatur?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac diam et purus scelerisque
                        vehicula.</p>
                    <p>More details about the Disinfection Service...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, aspernatur?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac diam et purus scelerisque
                        vehicula.</p>
                    <p>More details about the Disinfection Service...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, aspernatur?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac diam et purus scelerisque
                        vehicula.</p>
                    <p>More details about the Disinfection Service...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, aspernatur?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac diam et purus scelerisque
                        vehicula.</p>
                    <p>More details about the Disinfection Service...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, aspernatur?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac diam et purus scelerisque
                        vehicula.</p>
                    <p>More details about the Disinfection Service...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, aspernatur?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac diam et purus scelerisque
                        vehicula.</p>
                    <p>More details about the Disinfection Service...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, aspernatur?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac diam et purus scelerisque
                        vehicula.</p>
                    <p>More details about the Disinfection Service...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, aspernatur?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac diam et purus scelerisque
                        vehicula.</p>
                    <p>More details about the Disinfection Service...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, aspernatur?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac diam et purus scelerisque
                        vehicula.</p>
                    <p>More details about the Disinfection Service...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, aspernatur?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac diam et purus scelerisque
                        vehicula.</p>
                    <p>More details about the Disinfection Service...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, aspernatur?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac diam et purus scelerisque
                        vehicula.</p>
                    <p>More details about the Disinfection Service...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, aspernatur?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac diam et purus scelerisque
                        vehicula.</p>
                    <p>More details about the Disinfection Service...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Service model ends -->

    <!-- TESTIMONIAL SECTION -->
    <section class="testimonial-area service-testimonial testimonial-content d-none">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-md-6 promo-video-holder">
                    <div class="promo-video testimonial-video"
                        style="background-image: url('assets/img/home/v-poster-s.jpg');">
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


    <section class="pricing-area d-none">
        <div class="container">
            <!-- section title -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="sectionTitle text-center">
                        <h2>Service Pricing Plans</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm temp</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card pricing text-center">
                        <h2>Economy</h2>
                        <span>Plan Short Description</span>
                        <div class="card-header text-center">
                            <span class="price">0</span><span class="currency">USD/Year</span>
                        </div>
                        <div class="card-block">
                            <ul class="list-group no-border text-center">
                                <li class="list-group-item"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                    Limited Storage</li>
                                <li class="list-group-item"><i class="fa fa-globe" aria-hidden="true"></i> Limited
                                    Websites</li>
                                <li class="list-group-item"><i class="fa fa-signal" aria-hidden="true"></i> Limited
                                    Bandwidth</li>
                                <li class="list-group-item"><i class="fa fa-rocket" aria-hidden="true"></i> 2X
                                    Processing Power</li>
                                <li class="list-group-item"><i class="fa fa-star" aria-hidden="true"></i> Regular
                                    DNS</li>
                                <li class="list-group-item"><i class="fa fa-envelope" aria-hidden="true"></i>100
                                    Email Addresses</li>
                            </ul>
                            <a href="#" class="btn btn-secondary-outlined btn-default">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card pricing text-center delux">
                        <h2>Deluxe</h2>
                        <span>Plan Short Description</span>
                        <div class="card-header text-center">
                            <span class="price">20</span><span class="currency">USD/Year</span>
                        </div>
                        <div class="card-block">
                            <ul class="list-group no-border text-center">
                                <li class="list-group-item"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                    100GB+ Storage</li>
                                <li class="list-group-item"><i class="fa fa-globe" aria-hidden="true"></i> 1000+
                                    Websites</li>
                                <li class="list-group-item"><i class="fa fa-signal" aria-hidden="true"></i> Moderate
                                    Bandwidth</li>
                                <li class="list-group-item"><i class="fa fa-rocket" aria-hidden="true"></i> 3X
                                    Processing Power</li>
                                <li class="list-group-item"><i class="fa fa-star" aria-hidden="true"></i> Premium
                                    DNS</li>
                                <li class="list-group-item"><i class="fa fa-envelope" aria-hidden="true"></i>500
                                    Email Addresses</li>
                            </ul>
                            <a href="#" class="btn btn-secondary-outlined btn-default">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card pricing text-center ultimate">
                        <h2>Ultimate</h2>
                        <span>Plan Short Description</span>
                        <div class="card-header text-center">
                            <span class="price">50</span><span class="currency">USD/Year</span>
                        </div>
                        <div class="card-block">
                            <ul class="list-group no-border text-center">
                                <li class="list-group-item"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                    Unlimited Storage</li>
                                <li class="list-group-item"><i class="fa fa-globe" aria-hidden="true"></i> Unlimited
                                    Websites</li>
                                <li class="list-group-item"><i class="fa fa-signal" aria-hidden="true"></i>
                                    Unlimited Bandwidth</li>
                                <li class="list-group-item"><i class="fa fa-rocket" aria-hidden="true"></i> 4X
                                    Processing Power</li>
                                <li class="list-group-item"><i class="fa fa-star" aria-hidden="true"></i> Premium
                                    DNS</li>
                                <li class="list-group-item"><i class="fa fa-envelope" aria-hidden="true"></i>1000
                                    Email Addresses</li>
                            </ul>
                            <a href="#" class="btn btn-secondary-outlined btn-default">Get Started</a>
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
                            <button class="btn btn-primary btn-default bold w-100">Subscribe</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer footer-classic" style="background-color: #000;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-text">
                        <a href="#">
                            <img style="background-color: #000; height: 4.5rem;"
                                src="https://homedoot.com/public/assets/new_theme/img/logo.png" alt="" srcset="">
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation.
                        </p>
                        <div class="social-icons">
                            <a href="#" class="btn btn-social btn-social-o twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-social btn-social-o linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="#" class="btn btn-social btn-social-o facebook">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-social btn-social-o skype">
                                <i class="fa fa-skype"></i>
                            </a>
                            <a href="#" class="btn btn-social btn-social-o pinterest">
                                <i class="fa fa-pinterest-p"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-2">
                    <div class="links">
                        <h3>Links</h3>
                        <ul class="">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="page-aboutus.html">About Us</a></li>
                            <li><a href="services-1.html">Services</a></li>
                            <li><a href="portfolio-3-column.html">Portfolios</a></li>
                            <li><a href="blog-classic-left-sidebar.html">Latest Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="location">
                        <h3>Location</h3>
                        <ul>
                            <li>Excepteur sint occaecat cupidat non proident sunt.</li>
                            <li><i class="fa fa-home"></i> 1201 Park Street, Fifth Avenue,</li>
                            <li><i class="fa fa-phone"></i> <a href="tel:[88] 657 524 332">[88] 657 524 332</a></li>
                            <li><i class="fa fa-envelope"></i> <a href="mailto.html"> info@example.com </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="instagram">
                        <h3>Instagram</h3>
                        <ul class="row instagram-image">
                            <li class="col-xs-4 col-4">
                                <a href="javascript:void(0)">
                                    <img data-original="assets/img/home/footer/insta1.jpg" alt="insta">
                                </a>
                            </li>

                            <li class="col-xs-4 col-4">
                                <a href="javascript:void(0)">
                                    <img data-original="assets/img/home/footer/insta2.jpg" alt="insta">
                                </a>
                            </li>

                            <li class="col-xs-4 col-4">
                                <a href="javascript:void(0)">
                                    <img data-original="assets/img/home/footer/insta3.jpg" alt="insta">
                                </a>
                            </li>

                            <li class="col-xs-4 col-4">
                                <a href="javascript:void(0)">
                                    <img data-original="assets/img/home/footer/insta4.jpg" alt="insta">
                                </a>
                            </li>

                            <li class="col-xs-4 col-4">
                                <a href="javascript:void(0)">
                                    <img data-original="assets/img/home/footer/insta5.jpg" alt="insta">
                                </a>
                            </li>

                            <li class="col-xs-4 col-4">
                                <a href="javascript:void(0)">
                                    <img data-original="assets/img/home/footer/insta6.jpg" alt="insta">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- BACK TO TOP BUTTON -->
                <!-- <a href="#pageTop" class="backToTop"><i class="fa fa-angle-up" aria-hidden="true"></i></a> -->

                <!-- COPY RIGHT -->
            </div>
            <div class="copyright">
                <hr>
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="copyRight_text text-center">
                            <p> &copy; 2025 Copyright Homedoot.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>


<!-- JAVASCRIPTS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/jquery/jquery-migrate-3.0.0.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="assets/plugins/slick/slick.min.js"></script>
<script src="assets/plugins/chartjs/chart.min.js"></script>
<script src="assets/plugins/circle-progress/jquery.appear.js"></script>
<script src="assets/plugins/isotope/isotope.min.js"></script>
<script src="assets/plugins/lazyload/lazyload.min.js"></script>
<script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="assets/plugins/fancybox/fancyMorph.js"></script>
<script src="assets/plugins/counterUp/waypoint.js"></script>
<script src="assets/plugins/counterUp/jquery.counterup.js"></script>
<script src="assets/plugins/smoothscroll/smooth-scroll.polyfills.min.js"></script>
<script src="assets/plugins/syotimer/jquery.syotimer.min.js"></script>
<script src="assets/plugins/daterangepicker/js/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/js/daterangepicker.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDU79W1lu5f6PIiuMqNfT1C6M0e_lq1ECY"></script>
<script src="assets/js/biznex.js"></script>

<link href="assets/options/optionswitch.css" rel="stylesheet">
<script src="assets/options/optionswitcher.js"></script>
<script defer
    src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
    integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
    data-cf-beacon='{"rayId":"90a33781bec64c76","version":"2025.1.0","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"6ab1814688eb46d9922ef568cb561268","b":1}'
    crossorigin="anonymous"></script>
</body>


<!-- Mirrored from themes.iamabdus.com/biznex/1.3/services-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2025 17:37:00 GMT -->

</html>