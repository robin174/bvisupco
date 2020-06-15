				<footer class="footer" role="contentinfo">
					<section class="inner-footer foot--primary">
						<div class="grid-container">
							<div class="grid-x grid-margin-x grid-padding-x">
								<div class="small-12 medium-4 large-4 cell">
									<section class="block--details">
										<h4 class="uc--footer">Contact us</h4>
										<ul class="contact--footer">
											<li><span class="pr-red"><i class="fad fa-phone-office fa-lg" style="vertical-align: center;"></i></span>&nbsp;&nbsp;+1 (284) 346 1981</li>
											<li><span class="pr-red"><i class="fad fa-envelope-open-text fa-lg" style="vertical-align: center;"></i></span>&nbsp;&nbsp;<a href="mailto:info@bvisupco.com" title="Email BVISUPCO">info@bvisupco.com</a></li>
											<li><span class="pr-red"><i class="fab fa-tripadvisor fa-lg" style="vertical-align: center;"></i></span>&nbsp;&nbsp;<a href="https://www.tripadvisor.co.uk/Attraction_Review-g147354-d7238417-Reviews-BVISUPCO-Tortola_British_Virgin_Islands.html" title="BVISUPCO on Trip Advisor" target="_blank">Trip Advisor</a></li>
											<li><span class="pr-red"><i class="fab fa-facebook fa-lg" style="vertical-align: center;"></i></span>&nbsp;&nbsp;<a href="https://www.facebook.com/BVISUPCo/" title="BVISUPCO on Facebook" target="_blank">Facebook</a></li>
											<li><span class="pr-red"><i class="fab fa-instagram fa-lg" style="vertical-align: center;"></i></span>&nbsp;&nbsp;<a href="https://www.instagram.com/bvisupco/" title="BVISUPCO on Instagram" target="_blank">Instagram</a></li>
										</ul>
									</section>
								</div>
								<div class="small-12 medium-4 large-4 cell">
									<section class="block--surf">
										&nbsp;
										<!-- 
											<h4 class="uc--footer">Latest surf</h4>
											<section style="height: 100px; width:100%; background-color: rgba(0,0,0,0.1); margin-bottom: 25px;">
												&nbsp;
											</section>
											<h4 class="uc--footer">Powered by</h4>
											<figure>
												<a href="https://magicseaweed.com/" title="MSW"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-magicseaweed.png" alt="Magic Seaweed"></a>
											</figure>
										-->
									</section>
								</div>
								<div class="small-12 medium-4 large-4 cell">
									<section class="block--weather hide-for-small-only">
										<h4 class="uc--footer">Latest weather</h4>
										<div class="weather-container grid-container">
											<div class="grid-x">
												<div class="cell large-auto" style="border-right:1px solid rgba(255,68,56,1);padding-right:15px;">
													<div class="w-icon-data">
							                			<img src="<?php echo get_template_directory_uri(); ?>/images/icons/unknown.png">
							            			</div>
												</div>
												<div class="cell large-auto" style="border-left:1px solid rgba(255,68,56,1);padding-left:15px;">
													<div>
														<p class="weather-temp"><span class="w-temp-data"></span></p>
													</div>
												</div>
											</div>
										</div>

										<p class="weather-loc"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;<span class="w-loc-data"></span></p>
										<p><span class="w-desc-data"></span></p>
									</section>
								</div>
							</div>
						</div>
					</section>
					
					<section class="foot--secondary">
						<div class="grid-container">
							<div class="grid-x grid-margin-x grid-padding-x">
								<div class="small-12 medium-12 large-12 cell">
									<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.<br>
									PO Box 91, Road Town, Tortola, BVI VG1110</p>
								</div>
							</div>
						</div>
					</section>
				</footer> <!-- end .footer -->

			</div>  <!-- end .off-canvas-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>

		<script src="<?php echo get_template_directory_uri(); ?>/js/weather.js"></script>

	</body>

</html> <!-- end page -->