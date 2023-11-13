<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
	<div class="content">
		<div class="inner-content grid-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/dark-AbrahamShouse-SSM_6892.jpg');background-size:cover;background-position:top;">

		    	<div class="grid-container template--page">
		    		<div class="grid-x grid-padding-x">
		    			<div class="small-12 medium-4 large-4 cell">
							<?php get_template_part('templates/unit--equipment'); ?>
		  				</div>
					</div>
				</div>

			</main><!-- end #main -->
		    
		</div><!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>