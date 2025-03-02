<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.iamabdus.com/biznex/1.3/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2025 17:31:09 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homedoot {{'- '.$pageTitle ?? '';}}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- PLUGINS CSS STYLE -->
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/plugins/selectbox/select_option1.css" rel="stylesheet">
    <link href="/assets/plugins/slick/slick.css" rel="stylesheet" media="screen">
    <link href="/assets/plugins/slick/slick-theme.css" rel="stylesheet" media="screen">
    <link href="/assets/plugins/prismjs/prism.css" rel="stylesheet">
    <link href="/assets/plugins/fancybox/jquery.fancybox.min.css" rel="stylesheet" />
    <link href="/assets/plugins/fancybox/fancyMorph.css" rel="stylesheet" />
    <link href="/assets/plugins/selectbox/select_option1.css" rel="stylesheet">
    <link href="/assets/plugins/thin-line-icons/css/thin-line-icons.css" rel="stylesheet">
    <link href="/assets/plugins/isotope/isotope.min.css" rel="stylesheet">
    <link href="/assets/plugins/animate/animate.css" rel="stylesheet">
    <link href="/assets/plugins/daterangepicker/css/daterangepicker.css" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="/assets/css/biznex.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/default.css" id="option_color">

    <!-- FAVICON -->
    <link href="/assets/img/favicon.png" rel="shortcut icon">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-71155940-12"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-71155940-12');
    </script>
    <style>
        .responsive-logo {
            background-color: #000;
            height: 7.5rem;
            /* Default height for desktop */
        }

        @media (max-width: 768px) {

            /* Apply styles for mobile (screens smaller than 768px) */
            .responsive-logo {
                height: 4.5rem;
            }
        }

        @media (min-width: 992px) {
            .fixed-servicelist {
                position: fixed;
                top: 25rem;
                z-index: 1000;
            }
        }

        @media (min-width: 992px) {

            /* Apply only for desktop (≥992px) */
            .service-custom-margin {
                margin-left: 10rem;
            }
        }

        @media (max-width: 991px) {

            /* Apply only for mobile (<992px) */
            .service-custom-margin {
                margin-left: 0 !important;
            }
        }
    </style>
</head>

<body id="body" class="home-classic boxed-menu">

    <!-- Preloader -->
    <div id="preloader" class="smooth-loader-wrapper">
        <div class="preloader_container">
            <div id="loader">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="mobile-sticky-header-overlay"></div>
    <!-- TOPBAR -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="topbar-content">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <a href="tel:+251-235-3256">+251-235-3256</a>
                    </div>
                    <div class="topbar-content">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <a href="mailto:info@example.com ">info@example.com</a>
                    </div>
                    <div class="topbar-content">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>New York, USA</p>
                    </div>
                </div>
                <div class="col-sm-3 text-right d-none">
                    <a href="#" style="background-color: #000;" class="btn btn-dark btn-default bold" data-morphing
                        id="morphing" data-src="#morphing-content" href="javascript:;">Get a Quote</a>
                </div>
            </div>
        </div>
    </div><!-- TOPBAR ENDS-->

    <!-- HEADER -->
    <header id="pageTop" class="header">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-md main-nav bg-dark-navy">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right">
                    <span class="burger-menu icon-toggle"><i class="fa fa-bars"></i></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img class="responsive-logo" src="https://homedoot.com/public/assets/new_theme/img/logo.png" alt=""
                        srcset="">
                    <!-- Image Logo - if you want to use jpg or png format -->
                    <!-- <img src="assets/img/logo.png" alt="Logo"> -->
                </a>

                <div class="navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/"><span class="sr-only">(current)</span>Home</a>
                        </li>
                        <li class="nav-item dropdown drop_single ">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false" href="javascript:void(0)">Pages</a>
                            <ul class="dropdown-menu dd_first">
                                <li><a href="page-contactus.html">Contact Us </a></li>
                                <li><a href="page-member-details.html">Profile</a></li>
                                <li><a href="page-team.html">Team</a></li>
                                <li><a href="page-aboutus.html">About Us</a></li>
                                <li><a href="page-career.html">Career</a></li>
                                <li><a href="page-career-details.html">Career details</a></li>
                                <li><a href="404.html">404 page</a></li>
                                <li><a href="page-comingsoon.html">Coming Soon</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown drop_single d-none">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false" href="javascript:void(0)">Services</a>
                            <ul class="dropdown-menu dd_first">
                                <li><a href="services-1.html">Services Style 1</a></li>
                                <li><a href="services-2.html">Services Style 2</a></li>
                                <li><a href="services-3.html">Services Style 3</a></li>
                                <li><a href="service-details-left-sidebar.html">Service Details Left Sidebar</a></li>
                                <li><a href="service-details-right-sidebar.html">Service Details Right Sidebar</a></li>
                                <li><a href="service-details-fullwidth.html">Service Details Fullwidth</a></li>
                            </ul>
                        </li>

                        <!-- Service list -->
                        <li class="nav-item dropdown drop_single">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false" href="javascript:void(0)">Services</a>
                            <ul class="dropdown-menu dd_first">
                                @foreach ($subCategories['response']['data'] as $sc)
                                <li><a href="/service/{{$sc['name']}}">{{str_replace('-', ' ', $sc['name'])}}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item dropdown drop_single ">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false" href="javascript:void(0)">Portfolio</a>
                            <ul class="dropdown-menu dd_first">
                                <li><a href="portfolio-2-column.html">Two column</a></li>
                                <li><a href="portfolio-3-column.html">Three column</a></li>
                                <li><a href="portfolio-4-column-fullwidth.html">Four column</a></li>
                                <li><a href="project-style-1.html">Project style 1</a></li>
                                <li><a href="project-style-2.html">Project style 2</a></li>
                                <li><a href="project-style-3.html">Project style 3</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown drop_single ">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false" href="javascript:void(0)">Blogs</a>
                            <ul class="dropdown-menu dd_first">
                                <li><a href="blog-classic-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-classic-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-classic-fullwidth.html">Blog Fullwidth</a></li>
                                <li><a href="blog-grid-two-column.html">Blog two column</a></li>
                                <li><a href="blog-grid-three-column.html">Blog three column</a></li>
                                <li><a href="blog-singlepost-left-sidebar.html">Post left Sidebar</a></li>
                                <li><a href="blog-singlepost-right-sidebar.html">Post Right Sidebar</a></li>
                            </ul>
                        </li>

                        <li class=" dropdown megaDropMenu nav-item ">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false" href="javascript:void(0)">Elements</a>
                            <ul class="row dropdown-menu">
                                <li class="col-md-3 col-12">
                                    <h6>General Elements</h6>
                                    <ul class="list-unstyled">
                                        <li><a href="basic-accordions.html">Accordions</a></li>
                                        <li><a href="basic-alert.html">Alerts</a></li>
                                        <li><a href="basic-animation.html">Animation</a></li>
                                        <li><a href="basic-badge.html">Badge</a></li>
                                        <li><a href="basic-background.html">Background</a></li>
                                        <li><a href="basic-buttons.html">Buttons</a></li>
                                        <li><a href="basic-buttons-group.html">Button Group</a></li>
                                        <li><a href="basic-card.html">Card</a></li>
                                    </ul>
                                </li>

                                <li class="col-md-3 col-12">
                                    <h6>General Elements</h6>
                                    <ul class="list-unstyled">
                                        <li><a href="basic-carousel.html">Carousel</a></li>
                                        <li><a href="basic-countdown.html">Countdown</a></li>
                                        <li><a href="basic-counter.html">Counter</a></li>
                                        <li><a href="basic-divider.html">Dividers</a></li>
                                        <li><a href="basic-forms.html">Forms</a></li>
                                        <li><a href="basic-heading.html">Heading</a></li>
                                        <li><a href="basic-icon-style.html">Icon styles </a></li>
                                        <li><a href="basic-iconset.html">Iconset - FontAwesome </a></li>
                                    </ul>
                                </li>

                                <li class="col-md-3 col-12">
                                    <h6>General Elements</h6>
                                    <ul class="list-unstyled">
                                        <li><a href="basic-image.html">Image</a></li>
                                        <li><a href="basic-map.html">Map</a></li>
                                        <li><a href="basic-modal.html">Modal</a></li>
                                        <li><a href="basic-progressbar.html">Progress</a></li>
                                        <li><a href="basic-tabs.html">Tabs & wizards</a></li>
                                        <li><a href="basic-tables.html">Tables</a></li>
                                        <li><a href="basic-typography.html">Typography</a></li>
                                        <li><a href="basic-video.html">Video & Audio</a></li>
                                    </ul>
                                </li>

                                <li class="col-md-3 col-12">
                                    <h6>Theme Kit Elements</h6>
                                    <ul class="list-unstyled">
                                        <li><a href="kit-breadcrumb.html">Breadcrumb</a></li>
                                        <li><a href="kit-gallery.html">Gallery</a></li>
                                        <li><a href="kit-navbar.html">Navbar</a></li>
                                        <li><a href="kit-pagination.html">Pagination</a></li>
                                        <li><a href="kit-pricing.html">Pricing</a></li>
                                        <li><a href="kit-team.html">Team</a></li>
                                        <li><a href="kit-testimonials.html">Testimonials</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- header search -->
                        <li class="nav-item">
                            <a href="#" class="btn-search nav-link"><i class="fa fa-search"></i></a>
                            <form class="search_form">
                                <input type="text" name="search" placeholder="Search anything.." required>
                                <button class="btn btn-primary btn-small" type="submit">Search</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- header search ends-->
            </div><!-- NAVBAR ENDS-->
        </nav>
    </header>