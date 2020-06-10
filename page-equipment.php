<?php
/*
Template Name: Page - Equipment
*/
get_header(); ?>
	
	<div class="content">
		<div class="inner-content grid-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/dark-AbrahamShouse-SSM_6892.jpg');background-size:cover;background-position:top;">

		    	<div class="grid-container">
		    		<div class="grid-x grid-margin-x grid-padding-x">
		    			<div class="small-12 medium-12 large-12 cell">
		    				<section class="filter">
				    			<!-- Filters here (https://isotope.metafizzy.co/filtering.html) -->
				    			<p>Filter equipment:</p>
								<div id="filters" class="button-group filters-button-group">
					                <button class="button small button--filter is-checked" data-filter="*">Show All</button>
					                <button class="button small button--filter" data-filter=".equipment-sup">SUP</button>
					                <button class="button small button--filter" data-filter=".equipment-windsurf">Windsurf</button> 
					                <button class="button small button--filter" data-filter=".equipment-kite">Kite</button>
					                <button class="button small button--filter" data-filter=".equipment-kayak">Kayak</button> 
					                <button class="button small button--filter" data-filter=".equipment-surf">Surf</button>
					                <button class="button small button--filter" data-filter=".equipment-fishing">Fishing</button>
					                <button class="button small button--filter" data-filter=".equipment-other">Other</button>
					    		</div>
				    		</section>
			    		</div>
		    		</div>

		    		<div class="grid isotope">
						<div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-4">
							<!-- Query individually for specific order of equipment category -->
						    <?php
						        $args=array(
						            'post_type' => 'product',
						            'equipment' => 'sup',
						            'post_status' => 'publish',
						            'skill' => array('beginner','intermediate'),
						            'orderby' => 'title',
						            'order' => 'ASC',
						        );
						        $my_query = null;
						        $my_query = new WP_Query($args);
						        if( $my_query->have_posts() ) {
						        while ($my_query->have_posts()) : $my_query->the_post(); ?>
						        	<div <?php post_class('cell element-item unit--product') ?> data-category="equipment-sup">
				            			<?php get_template_part('templates/unit--equipment'); ?> 
				            		</div>
						    	<?php endwhile; } wp_reset_query(); ?>
						    <?php
						        $args=array(
						            'post_type' => 'product',
						            'equipment' => 'sup',
						            'post_status' => 'publish',
						            'skill' => 'advanced',
						            'orderby' => 'title',
						            'order' => 'ASC',
						        );
						        $my_query = null;
						        $my_query = new WP_Query($args);
						        if( $my_query->have_posts() ) {
						        while ($my_query->have_posts()) : $my_query->the_post(); ?>
						        	<div <?php post_class('cell element-item unit--product') ?> data-category="equipment-sup">
				            			<?php get_template_part('templates/unit--equipment'); ?> 
				            		</div>
						    	<?php endwhile; } wp_reset_query(); ?>
						    <?php
						        $args=array(
						            'post_type' => 'product',
						            'equipment' => 'sup',
						            'post_status' => 'publish',
						            'skill' => 'not-applicable',
						            'orderby' => 'title',
						            'order' => 'ASC',
						        );
						        $my_query = null;
						        $my_query = new WP_Query($args);
						        if( $my_query->have_posts() ) {
						        while ($my_query->have_posts()) : $my_query->the_post(); ?>
						        	<div <?php post_class('cell element-item unit--product') ?> data-category="equipment-sup">
				            			<?php get_template_part('templates/unit--equipment'); ?> 
				            		</div>
						    	<?php endwhile; } wp_reset_query(); ?>
						    <?php
						        $args=array(
						            'post_type' => 'product',
						            'equipment' => 'windsurf',
						            'post_status' => 'publish',
						            'skill' => 'beginner',
						            'orderby' => 'title',
						            'order' => 'ASC',
						        );
						        $my_query = null;
						        $my_query = new WP_Query($args);
						        if( $my_query->have_posts() ) {
						        while ($my_query->have_posts()) : $my_query->the_post(); ?>
						        	<div <?php post_class('cell element-item unit--product') ?> data-category="equipment-windsurf">
				            			<?php get_template_part('templates/unit--equipment'); ?> 
				            		</div>
						    	<?php endwhile; } wp_reset_query(); ?>
						    <?php
						        $args=array(
						            'post_type' => 'product',
						            'equipment' => 'windsurf',
						            'post_status' => 'publish',
						            'skill' => 'intermediate',
						            'orderby' => 'title',
						            'order' => 'ASC',
						        );
						        $my_query = null;
						        $my_query = new WP_Query($args);
						        if( $my_query->have_posts() ) {
						        while ($my_query->have_posts()) : $my_query->the_post(); ?>
						        	<div <?php post_class('cell element-item unit--product') ?> data-category="equipment-windsurf">
				            			<?php get_template_part('templates/unit--equipment'); ?> 
				            		</div>
						    	<?php endwhile; } wp_reset_query(); ?>
						    <?php
						        $args=array(
						            'post_type' => 'product',
						            'equipment' => 'windsurf',
						            'post_status' => 'publish',
						            'skill' => 'advanced',
						            'orderby' => 'title',
						            'order' => 'ASC',
						        );
						        $my_query = null;
						        $my_query = new WP_Query($args);
						        if( $my_query->have_posts() ) {
						        while ($my_query->have_posts()) : $my_query->the_post(); ?>
						        	<div <?php post_class('cell element-item unit--product') ?> data-category="equipment-windsurf">
				            			<?php get_template_part('templates/unit--equipment'); ?> 
				            		</div>
						    	<?php endwhile; } wp_reset_query(); ?>
						    <?php
						        $args=array(
						            'post_type' => 'product',
						            'equipment' => 'kite',
						            'post_status' => 'publish',
						            'orderby' => 'title',
						            'order' => 'ASC',
						        );
						        $my_query = null;
						        $my_query = new WP_Query($args);
						        if( $my_query->have_posts() ) {
						        while ($my_query->have_posts()) : $my_query->the_post(); ?>
						        	<div <?php post_class('cell element-item unit--product') ?> data-category="equipment-kite">
				            			<?php get_template_part('templates/unit--equipment'); ?> 
				            		</div>
						    	<?php endwhile; } wp_reset_query(); ?>
						    <?php
						        $args=array(
						            'post_type' => 'product',
						            'equipment' => 'kayak',
						            'post_status' => 'publish',
						            'orderby' => 'title',
						            'order' => 'ASC',
						        );
						        $my_query = null;
						        $my_query = new WP_Query($args);
						        if( $my_query->have_posts() ) {
						        while ($my_query->have_posts()) : $my_query->the_post(); ?>
						        	<div <?php post_class('cell element-item unit--product') ?> data-category="equipment-kayak">
				            			<?php get_template_part('templates/unit--equipment'); ?> 
				            		</div>
						    	<?php endwhile; } wp_reset_query(); ?>
						     <?php
						        $args=array(
						            'post_type' => 'product',
						            'equipment' => 'surf',
						            'post_status' => 'publish',
						            'orderby' => 'title',
						            'order' => 'ASC',
						        );
						        $my_query = null;
						        $my_query = new WP_Query($args);
						        if( $my_query->have_posts() ) {
						        while ($my_query->have_posts()) : $my_query->the_post(); ?>
						        	<div <?php post_class('cell element-item unit--product') ?> data-category="equipment-surf">
				            			<?php get_template_part('templates/unit--equipment'); ?> 
				            		</div>
						    	<?php endwhile; } wp_reset_query(); ?>
						    <?php
						        $args=array(
						            'post_type' => 'product',
						            'equipment' => 'fishing',
						            'post_status' => 'publish',
						            'orderby' => 'title',
						            'order' => 'ASC',
						        );
						        $my_query = null;
						        $my_query = new WP_Query($args);
						        if( $my_query->have_posts() ) {
						        while ($my_query->have_posts()) : $my_query->the_post(); ?>
						        	<div <?php post_class('cell element-item unit--product') ?> data-category="equipment-fishing">
				            			<?php get_template_part('templates/unit--equipment'); ?> 
				            		</div>
						    	<?php endwhile; } wp_reset_query(); ?>
						    <?php
						        $args=array(
						            'post_type' => 'product',
						            'equipment' => 'other',
						            'post_status' => 'publish',
						            'orderby' => 'title',
						            'order' => 'ASC',
						        );
						        $my_query = null;
						        $my_query = new WP_Query($args);
						        if( $my_query->have_posts() ) {
						        while ($my_query->have_posts()) : $my_query->the_post(); ?>
						        	<div <?php post_class('cell element-item unit--product') ?> data-category="equipment-other">
				            			<?php get_template_part('templates/unit--equipment'); ?> 
				            		</div>
						    	<?php endwhile; } wp_reset_query(); ?>
						</div>
					</div>
				</div>

			</main><!-- end #main -->
		    
		</div><!-- end #inner-content -->
	</div> <!-- end #content -->

	<script>
		// init Isotope
		var $grid = $('.grid').isotope({
		  itemSelector: '.element-item',
		  layoutMode: 'fitRows'
		});
		// filter functions
		var filterFns = {
		  // show if number is greater than 50
		  numberGreaterThan50: function() {
		    var number = $(this).find('.number').text();
		    return parseInt( number, 10 ) > 50;
		  },
		};
		// bind filter button click
		$('.filters-button-group').on( 'click', 'button', function() {
		  var filterValue = $( this ).attr('data-filter');
		  // use filterFn if matches value
		  filterValue = filterFns[ filterValue ] || filterValue;
		  $grid.isotope({ filter: filterValue });
		});
		// change is-checked class on buttons
		$('.button-group').each( function( i, buttonGroup ) {
		  var $buttonGroup = $( buttonGroup );
		  $buttonGroup.on( 'click', 'button', function() {
		    $buttonGroup.find('.is-checked').removeClass('is-checked');
		    $( this ).addClass('is-checked');
		  });
		});
	</script>

<?php get_footer(); ?>