<?php 
/*
Template Name: Page - About
*/
get_header(); ?>
	
	<div class="content">
		<div class="inner-content grid-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main">
		    	<div class="background--image">

			    	<div class="grid-container">
			    		<div class="grid-x">
				    		<?php if( have_rows('header_images') ): ?>
		    					<?php while( have_rows('header_images') ): the_row(); ?>
						    		<div class="cell medium-auto">
						    			<figure>
						    				<img src="<?php the_sub_field('header_image_01'); ?>">
						    			</figure>
						    		</div>
						    		<div class="cell medium-auto">
						    			<figure>
						    				<img src="<?php the_sub_field('header_image_02'); ?>">
						    			</figure>
						    		</div>
						    		<div class="cell medium-auto">
						    			<figure>
						    				<img src="<?php the_sub_field('header_image_03'); ?>">
						    			</figure>
						    		</div>
					    		<?php endwhile; ?>
							<?php endif; ?>
						</div>
			    	</div>

			    	<div class="grid-container template--page">
			    		<div class="grid-x grid-padding-x">
			    			<div class="small-12 medium-3 large-3 cell">
			    				<figure class="align-left">
			    					<img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-bvisupco-ol.png" title="logo - BVISUPCO"> 
			    				</figure>
			    			</div>
			    			<div class="small-12 medium-9 large-9 cell">
			    				<h1 class="title--page"><?php the_title(); ?></h1>
								<p>BVISUPCO is the leading, full service water sport rental company in the region.</p>
								<p>Our large fleet of SUPs, kayaks, floats and more will enhance your vacation in the beautiful BVI waters that we are lucky enough to call 'home'.</p>
								<p>There are no hidden fees - simply reserve your equipment and we will take it from there.</p>
			    			</div>
			    		</div>
			    	</div>

		    	</div>
			</main><!-- end #main -->
		    
		</div><!-- end #inner-content -->
	</div><!-- end #content -->

<?php get_footer(); ?>