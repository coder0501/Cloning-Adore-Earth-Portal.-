<!-- jQuery Lib -->
 <!-- and Code for the google map script -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="assets/js/vendor/bootstrap.min.js"></script>
		<!-- Tether JS -->
		<script src="assets/js/vendor/tether.min.js"></script>
        <!-- Imagesloaded JS -->
        <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
		<!-- OWL-Carousel JS -->
		<script src="assets/js/vendor/owl.carousel.min.js"></script>
		<!-- isotope JS -->
		<script src="assets/js/vendor/jquery.isotope.v3.0.2.js"></script>
		<!-- Smooth Scroll JS -->
		<script src="assets/js/vendor/smooth-scroll.min.js"></script>
		<!-- venobox JS -->
		<script src="assets/js/vendor/venobox.min.js"></script>
        <!-- ajaxchimp JS -->
        <script src="assets/js/vendor/jquery.ajaxchimp.min.js"></script>
        <!-- Counterup JS -->
		<script src="assets/js/vendor/jquery.counterup.min.js"></script>
        <!-- waypoints js -->
		<script src="assets/js/vendor/jquery.waypoints.v2.0.3.min.js"></script>
        <!-- Slick Nav JS -->
        <script src="assets/js/vendor/jquery.slicknav.min.js"></script>
        <!-- Nivo Slider JS -->
        <script src="assets/js/vendor/jquery.nivo.slider.pack.js"></script>
        <!-- Letter Animation JS -->
		<script src="assets/js/vendor/letteranimation.min.js"></script>
        <!-- Wow JS -->
		<script src="assets/js/vendor/wow.min.js"></script>
		<!-- Contact JS -->
		<script src="assets/js/contact.js"></script>
		<!-- Main JS -->
		<script src="assets/js/main.js"></script>
		<script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>


		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGm_weV-pxqGWuW567g78KhUd7n0p97RY"></script>
		<!-- Main JS -->
		<script src="assets/js/main.js"></script>
    
        <script>

        (function($){ "use strict";

        /*=========================================================================
            Google Map Settings
        =========================================================================*/
                         
            google.maps.event.addDomListener(window, 'load', init);

            function init() {

                var mapOptions = {
                    zoom: 11,
                    center: new google.maps.LatLng(40.6700, -73.9400), 
                    scrollwheel: false,
                    navigationControl: false,
                    mapTypeControl: false,
                    scaleControl: false,
                    draggable: false,
                    styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]
                };

                var mapElement = document.getElementById('google_map');

                var map = new google.maps.Map(mapElement, mapOptions);

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'Location!'
                });
            }

        })(jQuery);

        </script>