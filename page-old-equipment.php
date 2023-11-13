<?php
/*
Template Name: Page - Equipment (Old)
This will be replaced in time by our new template 'Page - Equipment'
*/

get_header('old'); ?>
	
	<div class="content grid-container">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main">
				
		    	<div class="grid-container">
					<!-- Content for current site to sit in here -->
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    <?php endwhile; endif; ?>

					<!-- New content to sit in here -->
				</div>

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer('old'); ?>