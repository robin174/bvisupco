<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>

	<div class="content">
		<div class="inner-content grid-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/use-IhzjEUjw3E0-unsplash.jpg');background-size:cover;background-position:top;">

		    	<div class="grid-container template--page">
		    		<div class="grid-x grid-margin-x grid-padding-x">
		    			<div class="small-12 medium-12 large-12 cell">

		    				<section style="margin-top:250px;margin-bottom:300px;color: white;">
								<article class="content-not-found">
									<header class="article-header">
										<h1>Epic 404 - Page not found.</h1>
										<p>It looks like that page was wiped out. Please us the navigation bar to help you find what you were looking for.</p>
									</section> <!-- end article section -->
								</article> <!-- end article -->
							</section>
							
		    			</div>
		    		</div>
		    	</div>

			</main><!-- end #main -->
		    
		</div><!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>