<?php
/*
Template Name: Page - Home
*/
get_header(); ?>
	
	<div class="content">
		<div class="inner-content grid-x">
	
		     <main class="main small-12 medium-12 large-12 cell" role="main">
		     	<div class="background--image">
				
					<!-- Hero Block -->
					<section class="block--home-hero">
						<div class="grid-container">
							<div class="grid-x">
								<div class="cell small-12 medium-12 large-12">
									<section class="block--main-home content--welcome">
										<section class="block--inner-logo">
											<div id="animate--first">
												<p class="introduction--welcome">Welcome to</p>
												<figure class="logo--hero">
													<img src="<?php echo get_template_directory_uri(); ?>/images/use-bvisupco-hero.png">
												</figure>
											</div>
											<div id="animate--second" class="hide-for-large">
												<p class="introduction--hero">BVISUPCO is the largest Stand Up Paddleboard (SUP) and watersports rentals company in the British Virgin Islands.</p>
											</div>

											<div id="animate--second" class="show-for-large">
												<p class="introduction--hero">BVISUPCO is the largest Stand Up Paddleboard (SUP)<br>and watersports rentals company in the British Virgin Islands.</p>
											</div>
										</section>
									</section>
								</div><!-- end .cell -->
							</div><!-- end .grid-x -->
						</div>
					</section>

					<!-- Half Blocks -->
					<section class="block--home-services">
						<div class="grid-container">
							<div class="grid-x">			
								<div class="cell small-12 medium-6 large-6">
									<a href="/equipment">
										<section class="block--home-half content--equipment">
											<section class="block--inner-logo">
												<h2>Extensive SUP selection</h2>
												<p>More SUPs than you shake a paddle at</p>
												<!-- cta button -->
											</section>
										</section>
									</a>
								</div><!-- end .cell -->

								<div class="cell small-12 medium-6 large-6">
									<a href="/equipment">
										<section class="block--home-half content--new">
											<section class="block--inner-logo">
												<h2>Introducing the Freewing!</h2>
												<p>New for the 2021 season</p>
												<!-- cta button -->
											</section>
										</section>
									</a>
								</div><!-- end .cell -->
							</div><!-- end .grid-x -->
						</div>
					</section>

					<!-- Third Blocks -->
					<section class="block--home-services">
						<div class="grid-container">
							<div class="grid-x">
								<!-- Trip Advisor -->		
								<div class="cell small-12 medium-4 large-4">
									<a href="https://www.tripadvisor.co.uk/Attraction_Review-g147354-d7238417-Reviews-BVISUPCO-Tortola_British_Virgin_Islands.html" target="_blank">
										<section class="block--home-third content--tripadvisor">
											<section class="block--inner-logo">
												<figure class="logo--thirdparty">
													<img src="<?php echo get_template_directory_uri(); ?>/images/logo-home-tripadvisor.png" alt="Trip Advisor">
												</figure>
											</section>
										</section>
									</a>
								</div><!-- end .cell -->

								<!-- Magic Seaweed -->	
								<div class="cell small-12 medium-4 large-4">
									<a href="https://magicseaweed.com/British-Virgin-Islands-Surfing/133/" target="_blank">
										<section class="block--home-third content--msw">
											<section class="block--inner-logo">
												<figure class="logo--thirdparty">
													<img src="<?php echo get_template_directory_uri(); ?>/images/logo-home-magicseaweed.png" alt="Magic Seaweed">
												</figure>
											</section>
										</section>
									</a>
								</div><!-- end .cell -->

								<!-- Plastic Offset Program (POP) -->	
								<div class="cell small-12 medium-4 large-4">
									<a href="https://sup.star-board.com/plastic-offset-program/" target="_blank">
										<section class="block--home-third content--pop">
											<section class="block--inner-logo">
												<figure class="logo--thirdparty">
													<img src="<?php echo get_template_directory_uri(); ?>/images/logo-home-plastic.png" alt="Plastic Offset Program (POP)">
												</figure>
											</section>
										</section>
									</a>
								</div><!-- end .cell -->
							</div><!-- end .grid-x -->
						</div>
					</section>

					<!-- Partner Logos -->
					<section class="block--home-logos">
						<div class="grid-container">
							<div class="grid-x grid-margin-x">
								<div class="cell large-offset-1 small-12 medium-12 large-10">

									<div class="grid-container">
										<div class="grid-x grid-margin-x">
											<div class="cell medium-auto">
												<figure class="logo align-center">
													<a href="https://sup.star-board.com" target="_blank" title="Starboard"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-md-starboard.png" alt ="Logo - Starboard"></a>
												</figure>
											</div><!-- end .cell -->
											<div class="cell medium-auto">
												<figure class="logo align-center">
													<a href="https://oceanrodeo.com/kiteboarding/" title="Ocean Rodeo" target="_blank" title="Ocean Rodeo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-md-oceanrodeo.png" alt ="Logo - Ocean Rodeo"></a>
												</figure>
											</div><!-- end .cell -->
											<div class="cell medium-auto">
												<figure class="logo align-center">
													<a href="https://airush.com/" title="Airush" target="_blank" title="Airush"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-md-airush.png" alt ="Logo - Airush"></a>
												</figure>
											</div><!-- end .cell -->
											<div class="cell medium-auto">
												<figure class="logo align-center">
													<a href="https://www.severnesails.com/" title="Severne Sails" target="_blank" title="Severne"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-md-severne.png" alt ="Logo - Severne"></a>
												</figure>
											</div><!-- end .cell -->
										</div><!-- end .grid-x -->
									</div>

								</div>
							</div>
						</div>
					</section>

				</div>
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>