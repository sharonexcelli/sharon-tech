<script src="{{url('frontend/js/jquery.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
<!-- Color Settings script -->
<script src="{{url('frontend/js/settings-script.js')}}"></script>
<!-- Plugin JavaScript -->
<script src="{{url('frontend/js/jquery.easing.min.js')}}"></script>
<!-- Contact Form JavaScript -->
<script src="{{url('frontend/js/jqBootstrapValidation.js')}}"></script>

<!-- SmoothScroll script -->
<script src="{{url('frontend/js/smoothscroll.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{url('frontend/js/xBe.js')}}"></script>
<!-- Isotope -->
<script type="text/javascript" src="{{url('frontend/js/jquery.isotope.min.js')}}"></script>
<!-- Google Map -->
{{-- <script src="http://maps.googleapis.com/maps/api/js?extension=.js&output=embed"></script> --}}
<script>
    function initMap() {
        var location = {lat: -6.537454, lng: 106.802547};
        var map = new google.maps.Map(document.getElementById("map-canvas"), {
            zoom: 16,
            center: location
        });
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSTa3N5nvh9RFchc_YWMoZ3s_4jfT69Mk&callback=initMap"></script>
<!-- Footer Reveal scirt -->
<script src="{{url('frontend/js/footer-reveal.js')}}"></script>

