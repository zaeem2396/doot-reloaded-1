@include('include.header')
<div class="main-wrapper page-aboutus">

    <!-- BREDCRUMB -->
    <section class="bredcrumb">
        <div class="bg-image text-center" style="background-image: url('assets/img/bg-bredcrumb.jpg');">
            <h1>about us</h1>
        </div>
        <div class="">
            <ul class="pager middle">
                <li style="cursor: default;" onclick="gotToHome()">Home</li>
                <li><a href="javascript:void(0)">About us</a></li>
            </ul>
        </div>
    </section>

    <section class="about-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Welcome To Home Doot</h1>
                    <p>
                        At Home Doot, we are your one-stop solution for maintaining a clean, comfortable, and pest-free environment within your home or workplace. With years of expertise and a commitment to excellence, we offer a range of services including AC repair, home cleaning, deep cleaning, housekeeping, floor cleaning, and pest control, ensuring your spaces remain inviting.
                    <h3 class="mt-3 mb-3" style="color: #a91d3b;">
                        Our Commitment
                    </h3>
                    For us, customer satisfaction is our top priority. We believe in delivering high-quality services tailored to your specific needs, ensuring your comfort, safety, and well-being. With a focus on professionalism, reliability, and attention to detail, we aim to exceed your expectations with every service we offer.
                    To avail of our services, you can connect with us without any delay.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="data-chart">
                        <img src="/assets/about-us.png" alt="about-us">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR SERVICES -->
    <section class="services-area">
        <div class="container border shadow pb-5">
            <!-- section title ends -->
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="media-box">
                        <div class="media-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#a91d3b" class="bi bi-basket2-fill text-primary mb-4" viewBox="0 0 16 16">
                                <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1z"></path>
                            </svg>
                        </div>
                        <div class="media-content">
                            <a href="service-details-left-sidebar.html">
                                <h4>AC Repair and Maintenance</h4>
                            </a>
                            <p>Whether it's repairing a malfunctioning unit, conducting routine maintenance, or installing a new system, our team of skilled technicians is dedicated to providing prompt and reliable AC repair services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="media-box">
                        <div class="media-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#a91d3b" class="bi bi-fire text-primary mb-4" viewBox="0 0 16 16">
                                <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z"></path>
                            </svg>
                        </div>
                        <div class="media-content">
                            <a href="service-details-right-sidebar.html">
                                <h4>Comprehensive Home Cleaning</h4>
                            </a>
                            <p>From deep cleaning to regular maintenance, our professional cleaning services cover every nook and cranny of your space. We employ thorough cleaning techniques, utilizing eco-friendly products to ensure cleanliness and hygiene, leaving your home spotless and inviting.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="media-box">
                        <div class="media-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#a91d3b" class="bi bi-gear-fill text-primary mb-4" viewBox="0 0 16 16">
                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"></path>
                            </svg>
                        </div>
                        <div class="media-content">
                            <a href="service-details-fullwidth.html">
                                <h4>Effective Pest Control Solutions</h4>
                            </a>
                            <p>Our pest control services are designed to rid your premises of unwanted intruders. With precision and expertise, we eliminate pests, safeguarding your home or workplace from health risks and structural damage, ensuring a pest-free environment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('include.footer')
    <script>
        const gotToHome = () => {
            window.location.href = '/';
        }
    </script>