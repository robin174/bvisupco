				<footer class="footer" role="contentinfo">
					<section class="inner-footer foot--primary">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="small-12 medium-6 large-6 cell">
									<section class="block--details">
										<h4 class="uc--footer">Contact us</h4>
										<p><i class="fad fa-phone-office fa-lg"></i>&nbsp;&nbsp;+1 (284) 346 1981<br>
										<i class="fad fa-envelope-open-text fa-lg"></i>&nbsp;&nbsp;<a href="mailto:info@bvisupco.com" title="Email BVISUPCO">info@bvisupco.com</a></p>
										<p>Trip Advisor</p>
									</section>
								</div>
								<div class="small-12 medium-3 large-3 cell">
									<section class="block--surf">
										<h4 class="uc--footer">Latest surf</h4>
										<section style="height: 100px; width:100%; background-color: rgba(0,0,0,0.1); margin-bottom: 25px;">
											&nbsp;
										</section>
										<h4 class="uc--footer">Powered by</h4>
										<figure>
											<a href="https://magicseaweed.com/" title="MSW"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-magicseaweed.png" alt="Magic Seaweed"></a>
										</figure>
									</section>
								</div>
								<div class="small-12 medium-3 large-3 cell">
									<section class="block--weather">
										<h4 class="uc--footer">Latest weather</h4>

										<div class="weather-container grid-container">
											<div class="grid-x">
												<div class="cell large-auto" style="border-right:1px solid rgba(255,255,255,0.2);padding-right:15px;">
													<div class="w-icon-data">
							                			<img src="<?php echo get_template_directory_uri(); ?>/images/icons/unknown.png">
							            			</div>
												</div>
												<div class="cell large-auto" style="border-left:1px solid rgba(255,255,255,0.2);padding-left:15px;">
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
							<div class="grid-x grid-padding-x">
								<div class="small-12 medium-12 large-12 cell">
									<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved. <?php bloginfo('version'); ?><br>
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