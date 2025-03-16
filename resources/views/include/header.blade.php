<!DOCTYPE html>
<html lang="en">

<head>
    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$pageTitle ?? ''}}</title>
    <meta name="description" content="{{$seoDescription ?? ''}}">
    <meta name="keywords" content="{{$seoKeywords ?? ''}}">
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
    <link href="/assets/favicon.png" rel="shortcut icon">


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
                        <a href="tel:{{getAppSettings()['original']['response']['data']['contactMobile']}}">{{getAppSettings()['original']['response']['data']['contactMobile']}}</a>
                    </div>
                    <div class="topbar-content">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <a href="mailto: {{getAppSettings()['original']['response']['data']['supportEmail']}}"> {{getAppSettings()['original']['response']['data']['supportEmail']}} </a>
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
                        <li class="nav-item">
                            <a class="nav-link" href="/"><span class="sr-only">(current)</span>Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/about-us">About us</a>
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

                        <li class="nav-item dropdown drop_single ">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false" href="javascript:void(0)">Login</a>
                            <ul class="dropdown-menu dd_first">
                                <li><a href="/login">Customer login</a></li>
                                <li><a href="portfolio-3-column.html">Three column</a></li>
                                <li><a href="portfolio-4-column-fullwidth.html">Four column</a></li>
                                <li><a href="project-style-1.html">Project style 1</a></li>
                                <li><a href="project-style-2.html">Project style 2</a></li>
                                <li><a href="project-style-3.html">Project style 3</a></li>
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