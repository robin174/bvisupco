<?php 
/*
Template Name: Page - Template (Old)
This will be replaced in time by our new template 'Page - Template'
*/

get_header('old'); ?>
	
	<div class="content grid-container">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main">
				
		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    <?php endwhile; endif; ?>

			</main> <!-- end #main -->

		    <?php get_sidebar(); ?>
		    
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer('old'); ?>