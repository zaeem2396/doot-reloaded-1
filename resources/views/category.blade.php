@include('include.header')
<div class="main-wrapper services-3">

    <!-- OUR SERVICES -->
    <section class="services-area services-area2">
        <div class="container-fluid px-md-5">
            <!-- section title -->
            <div class="row justify-content-center mb-4">
                <div class="col-md-12">
                    <div class="sectionTitle text-center">
                        <h1>{{ucfirst(str_replace('-', ' ', $pageTitle))}}</h1>
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
                                @foreach ($services[0]['service'] as $service)
                                <div class="col-4 text-center">
                                    <a class="scroll-to-service" data-target="#{{ Str::slug($service) }}" href="javascript:void(0)">
                                        <img src="https://placehold.co/50" class="img-fluid" alt="Icon 1">
                                        <p style="font-size: small;" class="mt-2 text-dark">{{ucfirst(str_replace('-', ' ',$service))}}</p>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 ps-lg-5 ps-xl-7 mt-2 mt-md-0">
                    <div class="row g-4">
                        @foreach ($services as $subCategory)
                        <!-- Sub-Category Title -->
                        <div class="col-12">
                            <!-- <h3 class="mb-3">{{ ucwords(str_replace('-', ' ', $subCategory['category_name'])) }}</h3> -->
                        </div>

                        @foreach ($subCategory['service'] as $service)
                        <!-- Service Card -->
                        <div class="col-12" id="{{ Str::slug($service) }}">
                            <div class="card h-100 d-flex flex-row align-items-center position-relative">
                                <div class="card-body" style="width: 60%;">
                                    <a href="javascript:void(0)">
                                        <h4 class="card-title">{{ ucwords(str_replace('-', ' ', $service)) }}</h4>
                                    </a>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Molestias dignissimos rerum illum iusto quo asperiores sunt reprehenderit?
                                    </p>
                                    <a href="javascript:void(0)"
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
                        @endforeach
                        @endforeach
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

    <!-- FOOTER -->
    @include('include.footer')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".scroll-to-service").forEach(item => {
                item.addEventListener("click", function() {
                    const targetId = this.getAttribute("data-target");
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80, // Adjust offset for fixed headers if needed
                            behavior: "smooth"
                        });
                    }
                });
            });
        });
    </script>