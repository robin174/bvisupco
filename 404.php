<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>

	<div class="content">
		<div class="inner-content grid-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/dark-AbrahamShouse-SSM_6892.jpg');background-size:cover;background-position:top;">

		    	<div class="grid-container">
		    		<div class="grid-x grid-margin-x grid-padding-x">
		    			<div class="small-12 medium-12 large-12 cell">

		    				<section style="margin-top:400px;margin-bottom:400px;color: white;">
								<article class="content-not-found">
									<header class="article-header">
										<h1><?php _e( 'Epic 404 - Article Not Found', 'jointswp' ); ?></h1>
									</header> <!-- end article header -->
							
									<section class="entry-content">
										<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'jointswp' ); ?></p>
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