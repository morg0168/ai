		<footer>
		        <div id="map"></div>
		        <div class="c-footer_contain">
		            <div class="c-footer_inner row middle-xs center-xs">
		                <div class="col col-xs-12 col-sm-3 logo u-demi-text"> <span class="box -text-left">
		                        AMAIMMO<br>221, Fairmount C.P. 55021<br>Montréal (Qc) H2T 3E2<br>514-937-9555
		                    </span> </div>
		                <div class="col col-xs-12 col-sm-3 u-demi-text">
		                	<span class="-text-left box"><a href="<?php echo $GLOBALS['base'] . $GLOBALS['langPrefix'] . $GLOBALS['missionPage']; ?>">Mission</a></span>
											<span class="-text-left box"><a href="<?php echo $GLOBALS['base'] . $GLOBALS['langPrefix'] . $GLOBALS['organizationPage']; ?>">Organization</a></span>
											<span class="-text-left box"><a href="<?php echo $GLOBALS['base'] . $GLOBALS['langPrefix'] . $GLOBALS['codesPage']; ?>">Codes</a></span>
		                </div>
		                <div class="col col-xs-12 col-sm-3 logo u-demi-text">
											<span class="-text-left box">
												<?php
													$args = array('hide_current' => true);
													if (function_exists('pll_the_languages')) {
														pll_the_languages($args);
													}
												?></span>
												<span class="-text-left box"><a href="javascript:void(0)" class="footer-contact">Contact</a></span>
												<span class="-text-left box"><a href="mailto:amaimmo@hotmail.com">Amaimmo@hotmail.com</a></span>
		                </div>
		            </div>
		            <script>
		                function initMap() {
		                    var montreal = {
		                        lat: 45.521268
		                        , lng: -73.597104
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
