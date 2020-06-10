<?php 
get_header(); ?>
	
	<div class="content">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 medium-10 large-9 cell" role="main">
				
		    	<!-- Content for current site to sit in here -->
				<?php the_content(); ?>

				<!-- New content to sit in here -->

			</main> <!-- end #main -->

		    <?php get_sidebar(); ?>
		    
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>