@include('include.header')
<div class="main-wrapper services-3">

    <!-- OUR SERVICES -->
    <section class="services-area services-area2">
        <div class="container-fluid px-md-5">
            <!-- section title -->
            <div class="row justify-content-center mb-4">
                <div class="col-md-12">
                    <div class="sectionTitle text-center">
                        <h1 class="text-capitalize">{{$serviceName }}</h1>
                        <hr class="">
                </div>
            </div>
            <!-- section title ends -->
            <div class="row justify-content-center">

                <div class="col-md-8 ps-lg-5 ps-xl-7 mt-2 mt-md-0">
                    <div class="row g-4">
                        <!-- Service Card -->
                        @foreach ($serviceOptions['original']['response']['data'] as $options)
                        <div class="col-12" id="">
                            <div class="card h-100 d-flex flex-row align-items-center position-relative">
                                <div class="card-body" style="width: 60%;">
                                    <a href="javascript:void(0)">
                                        <h4 class="card-title text-uppercase">{{$options['options']}}</h4>
                                    </a>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Molestias dignissimos rerum illum iusto quo asperiores sunt reprehenderit?
                                    </p>
                                    <a href="javascript:void(0)" data-option-id="1" onclick="fetchOptions(this);"
                                        class="btn service-br btn-sm bg-dark text-white" data-bs-toggle="modal" data-bs-target="#serviceModal">Read more</a>
                                </div>
                                <div class="card-img position-relative" style="width: 40%;">
                                    <img src="https://www.nobroker.in/blog/wp-content/uploads/2024/04/home-cleaning-service-apps.jpg"
                                        alt="Service Image" class="img-fluid service-br rounded"
                                        style="width: 150px; height: 100px; object-fit: cover;">
                                    <button data-option-id="1" onclick="fetchOptions(this);" type="button" class="btn btn-primary position-absolute" data-bs-toggle="modal" data-bs-target="#serviceModal"
                                        style="bottom: 10px; left: 10px; transform: translate(50%, 50%);">
                                        Add
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr style="flex-grow: 1; margin-left: 10px; border-top: 1px solid #d9d9d9;">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service model starts -->
    <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="serviceModalLabel">Service Details</h5>
                    <button type="button" class="btn btn-sm btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>

                <div class="modal-body" id="modalBody">
                    <!-- Dynamic content will be injected here by JavaScript -->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Service modal ends -->

    <!-- FOOTER -->
    @include('include.footer')
    <script>
    </script>