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
                    <div class="p-3 border rounded shadow-sm">

                        <!-- Bootstrap Carousel -->
                        <div id="serviceCarousel" class="carousel slide carousel-fade mt-3" data-bs-ride="carousel" data-bs-interval="3000">
                            <div class="carousel-inner">
                                @foreach ($serviceOptions['optionImages']['original']['response']['data'] as $index => $image)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    <img src="{{ $image['img'] }}" class="d-block w-100 rounded service-carousel-img h-100" alt="Service Image">
                                </div>
                                @endforeach
                            </div>

                            <!-- Carousel Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                        </div>
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
                                </div>
                                <div class="card-img position-relative text-center" style="width: 35%;">
                                    <button data-service-option-id="{{$options['id']}}" onclick="addToCart(this);" type="button"
                                        class="btn btn-md text-white position-absolute rounded w-50" style="bottom: 5px; left: 50%; transform: translateX(-50%); background-color: #a91d3b;">
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
                                {!! $serviceOptions['moreInfo']['excluded'] !!}
                            </span>
                        </p>
                        <p class="text-muted">
                            <b>Provided by customer: </b>
                            <span>
                                {!! $serviceOptions['moreInfo']['provideByCustomer'] !!}
                            </span>
                        </p>
                    </div>
                </div>
                @endif
            </div>
            <!-- END Grid Structure -->

        </div>
    </section>
    <!-- Service Modal Ends -->

    @include('include.footer')
</div>

<script>
    const addToCart = async (e) => {
        try {
            const urlParams = new URLSearchParams(window.location.search);
            const serviceOptionId = e.getAttribute('data-service-option-id');
            const catId = urlParams.get('catId');
            const subCatId = urlParams.get('subCatId');
            const optionId = urlParams.get('optionId');
            const quantity = 1;
            const response = await axios.post('/cart/add', {
                serviceOptionId,
                catId,
                subCatId,
                optionId,
                quantity
            }, {
                headers: {
                    Authorization: `Bearer ${localStorage.getItem('access_token')}`
                }
            });
            console.log(response.data);
        } catch (error) {
            console.error(error);
        }
    }
</script>