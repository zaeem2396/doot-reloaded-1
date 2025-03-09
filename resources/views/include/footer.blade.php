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
                        <li><i class="fa fa-home"></i> {{getAppSettings()['original']['response']['data']['address']}}</li>
                        <li><i class="fa fa-phone"></i> <a href="tel:{{getAppSettings()['original']['response']['data']['contactMobile']}}">{{getAppSettings()['original']['response']['data']['contactMobile']}}</a></li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto: {{getAppSettings()['original']['response']['data']['supportEmail']}}"> {{getAppSettings()['original']['response']['data']['supportEmail']}} </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="instagram">
                    <h3>Social links</h3>
                    <ul class="row instagram-image">
                        <li class="col-xs-4 col-4">
                            <a href="{{getAppSettings()['original']['response']['data']['facebookUrl']}}">
                                <span class="fa fa-facebook text-white" style="font-size: 20px;"></span>
                            </a>
                        </li>

                        <li class="col-xs-4 col-4">
                            <a href="{{getAppSettings()['original']['response']['data']['xUrl']}}">
                                <span class="fa fa-twitter text-white" style="font-size: 20px;"></span>
                            </a>
                        </li>

                        <li class="col-xs-4 col-4">
                            <a href="{{getAppSettings()['original']['response']['data']['linkedInUrl']}}">
                                <span class="fa fa-linkedin text-white" style="font-size: 20px;"></span>
                            </a>
                        </li>

                        <li class="col-xs-4 col-4 mt-3">
                            <a href="{{getAppSettings()['original']['response']['data']['instagramUrl']}}">
                                <span class="fa fa-instagram text-white" style="font-size: 20px;"></span>
                            </a>
                        </li>

                        <li class="col-xs-4 col-4 mt-3">
                            <a href="{{getAppSettings()['original']['response']['data']['youtubeUrl']}}">
                                <span class="fa fa-youtube text-white" style="font-size: 20px;"></span>
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
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<script src="/assets/plugins/jquery/jquery-migrate-3.0.0.min.js"></script>
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="/assets/plugins/slick/slick.min.js"></script>
<script src="/assets/plugins/chartjs/chart.min.js"></script>
<script src="/assets/plugins/circle-progress/jquery.appear.js"></script>
<script src="/assets/plugins/isotope/isotope.min.js"></script>
<script src="/assets/plugins/lazyload/lazyload.min.js"></script>
<script src="/assets/plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="/assets/plugins/fancybox/fancyMorph.js"></script>
<script src="/assets/plugins/counterUp/waypoint.js"></script>
<script src="/assets/plugins/counterUp/jquery.counterup.js"></script>
<script src="/assets/plugins/smoothscroll/smooth-scroll.polyfills.min.js"></script>
<script src="/assets/plugins/syotimer/jquery.syotimer.min.js"></script>
<script src="/assets/plugins/daterangepicker/js/moment.min.js"></script>
<script src="/assets/plugins/daterangepicker/js/daterangepicker.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDU79W1lu5f6PIiuMqNfT1C6M0e_lq1ECY"></script>
<script src="/assets/js/biznex.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link href="/assets/options/optionswitch.css" rel="stylesheet">
<script src="/assets/options/optionswitcher.js"></script>
<script defer
    src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
    integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
    data-cf-beacon='{"rayId":"90a32f19ffcded98","version":"2025.1.0","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"6ab1814688eb46d9922ef568cb561268","b":1}'
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.8/axios.min.js"></script>
</body>

</html>