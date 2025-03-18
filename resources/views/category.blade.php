@include('include.header')
<div class="main-wrapper services-3">

    <!-- OUR SERVICES -->
    <section class="services-area services-area2">
        <div class="container-fluid px-md-5">
            <!-- section title -->
            <div class="row justify-content-center mb-4">
                <div class="col-md-12">
                    <div class="sectionTitle text-center">
                        <h1>{{ucfirst(str_replace('-', ' ', $h1)) ?? ''}}</h1>
                        <hr class="">
                    </div>
                </div>
            </div>
            <!-- section title ends -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card service-br" style="border: 1px solid #d9d9d9;">
                        <div class="card-body" style="height: 340px; overflow: hidden;">
                            <div style="display: flex; align-items: center;">
                                <span class="card-title p-0">Select a service</span>
                                <hr style="flex-grow: 1; margin-left: 10px; border-top: 1px solid #d9d9d9;">
                            </div>

                            <div class="row mt-2">
                                @foreach ($services[0]['service'] as $service)
                                <div class="col-4 text-center">
                                    <a class="scroll-to-service" data-target="#{{ Str::slug($service['service_name']) }}" href="javascript:void(0)">
                                        <img style="height: 100px; width: 130px;" src="{{$service['service_img']}}" class="img-fluid" alt="Icon 1">
                                        <p style="font-size: small;" class="mt-2 text-dark">{{ucfirst(str_replace('-', ' ',$service['service_name']))}}</p>
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

                        @foreach ($subCategory['service'] as $service)
                        <!-- Service Card -->
                        <div class="col-12" id="{{ Str::slug($service['service_name']) }}">
                            <div class="card h-100 d-flex flex-row align-items-center position-relative">
                                <div class="card-body" style="width: 60%;">
                                    <a href="javascript:void(0)">
                                        <h4 class="card-title">{{ ucwords(str_replace('-', ' ', $service['service_name'])) }}</h4>
                                    </a>
                                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Molestias dignissimos rerum illum iusto quo asperiores sunt reprehenderit?
                                    </p>
                                    <a href="javascript:void(0)" data-service-id="{{$service['service_id']}}" onclick="fetchOptions(this);"
                                        class="btn service-br btn-sm bg-dark text-white" data-bs-toggle="modal" data-bs-target="#serviceModal">Read more</a>
                                </div>
                                <div class="card-img position-relative" style="width: 40%;">
                                    <img src="{{$service['service_img']}}"
                                        alt="Service Image" class="img-fluid service-br rounded"
                                        style="width: 150px; height: 100px; object-fit: cover;">
                                    <button data-service-id="{{$service['service_id']}}" onclick="fetchOptions(this);" type="button" class="btn service-br btn-md bg-dark text-white position-absolute" data-bs-toggle="modal" data-bs-target="#serviceModal"
                                        style="bottom: 10px; left: 10px; transform: translate(50%, 50%);">
                                        Add
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr style="flex-grow: 1; margin-left: 10px; border-top: 1px solid #d9d9d9;">
                        @endforeach
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

        const fetchOptions = async (e) => {
            try {
                const catId = '{{ $services[0]["category_id"] }}';
                const subCatId = '{{ $services[0]["sub_category_id"] }}';
                const serviceId = e.getAttribute("data-service-id");

                const response = await axios.get(`/options/get/${catId}/${subCatId}/${serviceId}`);
                console.log(response.data.response.data);
                if (response.data.response.data.length === 0) {
                    document.getElementById("modalBody").innerHTML = "<p>No services available.</p>";
                    return;
                }

                let modalContent = "";
                response.data.response.data.forEach(service => {
                    modalContent += `
                <div class="row mb-3">
                    <!-- Left Side: Title & Content -->
                    <div class="col-md-6 mt-4">
                        <h5 class="font-weight-bold">${service.name.replace(/-/g, " ").toUpperCase()}</h5>
                        <p>${service.content}</p>
                        <p>Price: <b>${service.price}</b></p>
                    </div>

                    <!-- Right Side: Image & Button -->
                    <div class="col-md-6 position-relative text-center">
                        <img src="${service.img ? service.img : 'https://via.placeholder.com/150'}"
                            alt="${service.name}" class="img-fluid rounded" style="height: 130px; object-fit: cover;">

                        <a href="/options?service_name=${service.name}&optionId=${service.id}&catId=${catId}&subCatId=${subCatId}" class="btn btn-sm service-br bg-dark text-white position-absolute w-25"
                            style="top: 80%; left: 50%; transform: translate(-50%, -50%);">
                            Book Now
                        </a>
                    </div>
                </div>
                <hr>`;
                });

                document.getElementById("modalBody").innerHTML = modalContent;

                var myModal = new bootstrap.Modal(document.getElementById('serviceModal'));
                myModal.show();

            } catch (error) {
                console.error(error);
                document.getElementById("modalBody").innerHTML = "<p>Error fetching services.</p>";
            }
        };

        document.addEventListener("DOMContentLoaded", function() {
            const serviceModal = document.getElementById("serviceModal");

            serviceModal.addEventListener("hidden.bs.modal", function() {
                document.body.classList.remove("modal-open"); // Removes extra padding
                let backdrops = document.getElementsByClassName("modal-backdrop");
                while (backdrops[0]) {
                    backdrops[0].parentNode.removeChild(backdrops[0]); // Remove backdrop manually
                }
            });
        });
    </script>