				<footer class="footer" role="contentinfo">
					<section class="inner-footer foot--primary">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="small-12 medium-6 large-6 cell">
									<p><i class="fad fa-phone-office fa-lg"></i>&nbsp;&nbsp;+1 (284) 346 1981<br>
									<i class="fad fa-envelope-open-text fa-lg"></i>&nbsp;&nbsp;<a href="mailto:info@bvisupco.com" title="Email BVISUPCO">info@bvisupco.com</a></p>

									<p>PO Box 91, Road Town, Tortola, BVI VG1110</p>
								</div>
								<div class="small-12 medium-3 large-3 cell">
									Surf
									Put a sweet looking MagicSeaweed logo (PNG).
									The red needs to be darker and probably an image underlay
								</div>
								<div class="small-12 medium-3 large-3 cell">
									<section class="block--weather">
										<div class="weather-container">
								            <div class="weather-icon">
								                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/unknown.png" alt="">
								            </div>
								            <div class="temperature-value">
								                <p>- °<span>C</span></p>
								            </div>
								            <div class="temperature-description">
								                <p> - </p>
								            </div>
								            <div class="location">
								                <p>-</p>
								            </div>
								        </div>

										<section class="unit--weather">
											<h2>
												<span>Road Town</span>
												<sup>VG</sup>
											</h2>
											<h4 class="temperature-value"><sup>&#8451;</sup></h4>
											<figure>
												<!-- would you use this for an icon -->
												<figcaption class="temperature-description"></figcaption>
											</figure>
										</section>
									</section>
								</div>
							</div>
						</div>
					</section>
					
					<section class="foot--secondary">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="small-12 medium-12 large-12 cell">
									<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php bloginfo('version'); ?></p>
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