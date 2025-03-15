@include('include.header')

<div class="main-wrapper services-3">
    <!-- OUR SERVICES -->
    <section class="services-area services-area2">
        <div class="container-fluid px-md-5">

            <!-- Section Title -->
            <div class="row justify-content-center mb-4">
                <div class="col-md-12">
                    <div class="sectionTitle text-center">
                        <h1 class="text-capitalize">{{ count($serviceOptions['options']) > 0 ? $serviceName : "" }}</h1>
                        <hr>
                    </div>
                </div>
            </div>
            <!-- Section Title Ends -->

            <!-- Grid Structure -->
            <div class="row justify-content-center">
                <!-- LEFT COLUMN (Why Choose Us) -->
                @if (count($serviceOptions['options']) > 0)
                <div class="col-12 col-md-3 mb-4 mb-md-0">
                    <div class="p-3 border rounded shadow-sm h-100">
                        <h3>Why Choose Our Services?</h3>
                        <p class="text-muted">
                            <b>Included: </b>
                            <span>
                                {{ $serviceOptions['moreInfo']['included'] }}
                            </span>
                        </p>
                        <p class="text-muted">
                            <b>Excluded: </b>
                            <span>
                                {{ $serviceOptions['moreInfo']['excluded'] }}
                            </span>
                        </p>
                    </div>
                </div>
                @endif
                <!-- CENTER COLUMN (Service Cards) -->
                @if (count($serviceOptions['options']) > 0)
                <div class="col-12 col-md-6">
                    <div class="row g-4">
                        @foreach ($serviceOptions['options'] as $options)
                        <div class="col-12">
                            <div class="card h-100 d-flex flex-row align-items-center position-relative p-3 shadow-sm">
                                <div class="card-body" style="width: 65%;">
                                    <a href="javascript:void(0)">
                                        <h4 class="card-title text-uppercase">{{ $options['options'] }}</h4>
                                    </a>
                                    <p class="mb-3">
                                        <b>Price: </b> {{ $options['price'] }}
                                    </p>
                                    <a href="javascript:void(0)" data-option-id="1" onclick="fetchOptions(this);"
                                        class="btn btn-sm bg-dark text-white" data-bs-toggle="modal" data-bs-target="#serviceModal">
                                        Read more
                                    </a>
                                </div>
                                <div class="card-img position-relative text-center" style="width: 35%;">
                                    <img src="https://www.nobroker.in/blog/wp-content/uploads/2024/04/home-cleaning-service-apps.jpg"
                                        alt="Service Image" class="img-fluid rounded" style="max-width: 100%; height: auto; object-fit: cover;">
                                    <button data-option-id="1" onclick="fetchOptions(this);" type="button"
                                        class="btn btn-primary position-absolute" data-bs-toggle="modal" data-bs-target="#serviceModal"
                                        style="bottom: 5px; left: 50%; transform: translateX(-50%);">
                                        Add
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr class="w-100 border-top border-light mt-2 mb-3">
                        @endforeach
                    </div>
                </div>
                @else
                <img src="{{ getAppSettings()['original']['response']['data']['notFoundImage'] }}"
                    alt="Not Found Image"
                    class="img-fluid d-block mx-auto not-found-img">

                @endif


                @if (strlen($serviceOptions['moreInfo']['included']) > 0)
                <div class="col-12 col-md-3 mt-4 mt-md-0">
                    <div class="p-3 border rounded shadow-sm">
                        <h3 class="text-center">Important notice</h3>
                        <p class="text-muted">
                            <b>Included: </b>
                            <span>
                                {!! $serviceOptions['moreInfo']['included'] !!}
                            </span>
                        </p>
                        <p class="text-muted">
                            <b>Excluded: </b>
                            <span>
                                {{ $serviceOptions['moreInfo']['excluded'] }}
                            </span>
                        </p>
                        <p class="text-muted">
                            <b>Provided by customer: </b>
                            <span>
                                {{ $serviceOptions['moreInfo']['provideByCustomer'] }}
                            </span>
                        </p>
                    </div>
                </div>
                @endif
            </div>
            <!-- END Grid Structure -->

        </div>
    </section>

    <!-- Service Modal -->
    <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="serviceModalLabel">Service Details</h5>
                    <button type="button" class="btn btn-sm btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body text-center" id="modalBody">
                    <!-- Dynamic content will be injected here by JavaScript -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Modal Ends -->

    @include('include.footer')
</div>

<script>
    // Add any required JavaScript functionality here
</script>