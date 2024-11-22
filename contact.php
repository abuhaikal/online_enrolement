<div class="row">
    <!-- School Location Column -->
    <div class="col-md-8">
        <h3>University Location</h3>
        <!-- Embedded Google Map -->
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <div style="overflow:hidden;height:400px;width:100%;">
            <div id="gmap_canvas" style="height:100%;width:100%;"></div>
            <style>#gmap_canvas img {max-width:none!important;background:none!important}</style>
            <a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">embed google map</a>
        </div>
        <script type="text/javascript">
            function init_map() {
                var myOptions = {
                    zoom: 19,
                    center: new google.maps.LatLng(3.0800, 101.7350),  // Updated coordinates
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                marker = new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng(3.0800, 101.7350)  // Updated coordinates
                });
                infowindow = new google.maps.InfoWindow({
                    content: "<b>University Polytech Malaysia</b><br/>Shamelin, Kuala Lumpur<br/>Malaysia"
                });
                google.maps.event.addListener(marker, "click", function() {
                    infowindow.open(map, marker);
                });
                infowindow.open(map, marker);
            }
            google.maps.event.addDomListener(window, 'load', init_map);
        </script>
    </div>

    <!-- Contact Details Column -->
    <div class="col-md-4">
        <h3>Contact Details</h3>
        <p>
           Green University <br> Shamelin, Kuala Lumpur, Malaysia<br>
        </p>
        <p><i class="fa fa-phone"></i> 
            <abbr title="Phone">P</abbr>: 601 92810475</p>
        <p><i class="fa fa-envelope-o"></i> 
            <abbr title="Email">Email</abbr>: <a href="mailto:admission@PolytechMalaysia.com">admission@GreenUniversity.com</a>
        </p>
        <p><i class="fa fa-clock-o"></i> 
            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
        <ul class="list-unstyled list-inline list-social-icons">
            <li><a href="https://www.facebook.com/uptm.official?mibextid=LQQJ4d"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
            <li><a href="https://x.com/mppuptm"><i class="fa fa-twitter-square fa-2x"></i></a></li>
            <li><a href="https://www.uptm.edu.my/index.php"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
        </ul>
    </div>
</div>
