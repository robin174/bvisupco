<?php
/*
Template Name: Page - Home
*/
get_header(); ?>
	
	<div class="content">
		<div class="inner-content grid-x">
	
		     <main class="main small-12 medium-12 large-12 cell" role="main" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/dark-AbrahamShouse-SSM_6892.jpg');background-size:cover;background-position:top;">
				
				<!-- Hero Block -->
				<section class="block--home-hero">
					<div class="grid-container">
						<div class="grid-x">
							<div class="cell small-12 medium-12 large-12">
								<section class="block--main-home content--welcome">
									<section class="block--inner-logo">
										<figure>
											<img>
										</figure>
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
								<a href="https://magicseaweed.com/British-Virgin-Islands-Surfing/133/" target="_blank">
									<section class="block--home-half content--tripadvisor">
										<section class="block--inner-logo">
											<figure class="logo--thirdparty">
												<img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-magicseaweed.png" alt="Magic Seaweed">
											</figure>
										</section>
									</section>
								</a>
							</div><!-- end .cell -->

							<div class="cell small-12 medium-6 large-6">
								<a href="https://magicseaweed.com/British-Virgin-Islands-Surfing/133/" target="_blank">
									<section class="block--home-half content--msw">
										<section class="block--inner-logo">
											<figure class="logo--thirdparty">
												<img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-magicseaweed.png" alt="Magic Seaweed">
											</figure>
										</section>
									</section>
								</a>
							</div><!-- end .cell -->
						</div><!-- end .grid-x -->
					</div>
				</section>

				<!-- Logos -->
				<section class="block--home-logos" style="padding: 50px;background-color:rgba(0,0,0,0.5);">

					<div class="grid-container">
						<div class="grid-x grid-margin-x">
							<div class="cell large-offset-1 small-12 medium-12 large-10">

								<div class="grid-container">
									<div class="grid-x grid-margin-x">
										<div class="cell medium-auto"><!-- to test this. What happends when you re-size? -->
											<figure class="logo">
												<a href="https://sup.star-board.com" target="_blank" title="Starboard"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-md-starboard.png" alt ="Logo - Starboard"></a>
											</figure>
										</div><!-- end .cell -->
										<div class="cell medium-auto">
											<figure class="logo">
												<a href="https://oceanrodeo.com/kiteboarding/" title="Ocean Rodeo" target="_blank" title="Ocean Rodeo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-md-oceanrodeo.png" alt ="Logo - Ocean Rodeo"></a>
											</figure>
										</div><!-- end .cell -->
										<div class="cell medium-auto">
											<figure class="logo">
												<a href="https://www.severnesails.com/" title="Severne Sails" target="_blank" title="Severne"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-md-severne.png" alt ="Logo - Severne"></a>
											</figure>
										</div><!-- end .cell -->
									</div><!-- end .grid-x -->
								</div>

							</div>
						</div>
					</div>
				</section>

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>