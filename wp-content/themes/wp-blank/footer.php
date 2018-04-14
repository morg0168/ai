		<footer>
		        <div id="map"></div>
		        <div class="c-footer_contain">
		            <div class="c-footer_inner row middle-xs">
		                <div class="col col-xs-6 col-sm-3 logo u-demi-text"> <span class="box -text-left">
		                        AMAIMMO<br>12 Laurier, Montreal<br>438.883.2055<br>M - F : 9am - 5pm <br> S - S : 12am - 3pm
		                    </span> </div>
		                <div class="col col-xs-6 col-sm-3 u-demi-text">
		                	<span class="-text-left box">Pages</span> <span class="-text-left box">Info</span> <span class="-text-left box"><a href="#">Acceuil</a></span> <span class="-text-left box"><a href="#">FAQ</a></span>
		                </div>
		                <div class="col col-xs-6 col-sm-3 u-demi-text">
		                	<span class="-text-left box"><a href="mission.html">Mission</a></span> <span class="-text-left box"><a href="#">Privacy Policy</a></span> <span class="-text-left box"><a href="codes.html">Codes</a></span> <span class="-text-left box"><a href="#">English</a></span>
		                </div>
		                <div class="col col-xs-6 col-sm-3 logo u-demi-text"> 
		                	<span class="-text-left box"><a href="organization.html">Organization</a></span> <span class="-text-left box"><a href="#">Contact</a></span>
		                </div>
		            </div>
		            <script>
		                function initMap() {
		                    var montreal = {
		                        lat: 45.486980
		                        , lng: -73.636262
		                    };
		                    var map = new google.maps.Map(document.getElementById('map'), {
		                        zoom: 12
		                        , center: montreal
		                    });
		                    var marker = new google.maps.Marker({
		                        position: montreal
		                        , map: map
		                    });
		                }
		            </script>
		            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAumiBCYj0vaA8pvpCtdg3d-KC5ohkAkgY&callback=initMap">
		            </script>
		    </footer>

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

	</body>
</html>
