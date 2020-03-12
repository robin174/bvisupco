<?php
/*
Template Name: Page - Home
*/
get_header(); ?>
	
	<div class="content">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 large-12 medium-12 cell" role="main">
				
				<!-- Hero Block -->
				<section class="block--home-hero">
					<div class="grid-container">
						<div class="grid-x">
							<div class="cell small-12 medium-12 large-12">
								<section class="block--main-home">
									Logo/svg BVISUPCO
									<p>Welcome to BVISUPCO, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
									<button>
										See our equipment for hire
									</button>
									<!-- link to Products, by button -->
								</section>
							</div><!-- end .cell -->
						</div><!-- end .grid-x -->
					</div>
				</section>

				<!-- Half Blocks -->
				<section class="block--home-half">
					<div class="grid-container">
						<div class="grid-x">			
							<div class="cell small-12 medium-6 large-6">
								<section class="block--home-half">
									<img src="<?php bloginfo('template_directory'); ?>/images/image-equipment-comingsoon.jpg" />
									Magic Seaweed
								</section>
							</div><!-- end .cell -->

							<div class="cell small-12 medium-6 large-6">
								<section class="block--home-half">
									<img src="<?php bloginfo('template_directory'); ?>/images/image-equipment-comingsoon.jpg" />
									Weather
								</section>
							</div><!-- end .cell -->
						</div><!-- end .grid-x -->
					</div>
				</section>

				<!-- Logos -->
				<section class="block--home-logos" style="padding: 50px;background-color:rgba(0,0,0,0.5);">
					<div class="grid-container">
						<div class="grid-x grid-margin-x">
							<div class="cell large-auto"><!-- to test this. What happends when you re-size? -->
								<figure class="logo">
									<img src="<?php echo get_template_directory_uri(); ?>/images/logo-md-starboard.png" alt ="Starboard - logo">
								</figure>
							</div><!-- end .cell -->
							<div class="cell large-auto">
								<figure class="logo">
									<img src="<?php echo get_template_directory_uri(); ?>/images/logo-md-oceanrodeo.png" alt ="Ocean Rodeo - logo">
								</figure>
							</div><!-- end .cell -->
							<div class="cell large-auto">
								<figure class="logo">
									<img src="<?php echo get_template_directory_uri(); ?>/images/logo-md-severne.png" alt ="Severne - logo">
								</figure>
							</div><!-- end .cell -->
						</div><!-- end .grid-x -->
					</div>
				</section>

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>