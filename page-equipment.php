<?php
/*
Template Name: Page - Equipment
*/
get_header(); ?>
	
	<div class="content">
		<div class="inner-content grid-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main">
		    	<div class="background--image">

			    	<div class="grid-container">
			    		<div class="grid-x grid-padding-x">
			    			<div class="small-12 medium-6 large-8 cell">
			    				<section class="filter">
					    			<!-- Filters here (https://isotope.metafizzy.co/filtering.html) -->
					    			<p><i class="fas fa-filter" style="vertical-align=center;"></i>&nbsp;&nbsp;Filter equipment:</p>
									<div id="filters" class="stacked-for-medium button-group filters-button-group">
						                <button class="button small button--filter is-checked" data-filter="*">Show All</button>
						                <button class="button small button--filter" data-filter=".equipment-sup">SUP</button>
						                <button class="button small button--filter" data-filter=".equipment-windsurf">Windsurf</button>
						                <button class="button small button--filter" data-filter=".equipment-wing">Wings/Foils/Kites</button> 
						                <button class="button small button--filter" data-filter=".equipment-surf">Kayaks & Surf</button>
						                <button class="button small button--filter" data-filter=".equipment-fishing">Fishing</button>
						                <button class="button small button--filter" data-filter=".equipment-other">Floats & Fun</button>
						    		</div>
					    		</section>
				    		</div>
				    		<div class="small-12 medium-6 large-4 cell">
			    				<section class="order">
			    					<p><i class="fas fa-shopping-basket fa-lg" style="vertical-align=center;"></i>&nbsp;&nbsp;To order:</p>
			    					<p>By phone: +1 (284) 346 1981,<br> or by email: <a href="mailto:info@bvisupco.com?subject=BVISUPCO Order" title="Email BVISUPCO">info@bvisupco.com</a></p>
			    				</section>
			    			</div>
			    		</div>

			    		<div class="grid isotope">
							<div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-4">
								<!-- Query individually for specific order of equipment category -->

								<?php // SUP
							        $args=array(
							            'post_type' => 'product',
							            'equipment' => 'sup',
							            'post_status' => 'publish',
							            'orderby' => 'menu_order',
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
								<?php // Windsurf
							        $args=array(
							            'post_type' => 'product',
							            'equipment' => 'windsurf',
							            'post_status' => 'publish',
							            'orderby' => 'menu_order',
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
							    <?php // Wings / Foils / Kites
							        $args=array(
							            'post_type' => 'product',
							            'equipment' => 'wing',
							            'post_status' => 'publish',
							            'orderby' => 'title',
							            'order' => 'ASC',
							        );
							        $my_query = null;
							        $my_query = new WP_Query($args);
							        if( $my_query->have_posts() ) {
							        while ($my_query->have_posts()) : $my_query->the_post(); ?>
							        	<div <?php post_class('cell element-item unit--product') ?> data-category="equipment-wing">
					            			<?php get_template_part('templates/unit--equipment'); ?> 
					            		</div>
							    	<?php endwhile; } wp_reset_query(); ?>
							    <?php // Surf
							        $args=array(
							            'post_type' => 'product',
							            'equipment' => 'surf',
							            'post_status' => 'publish',
							            'orderby' => 'menu_order',
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
							    <?php // Fishing
							        $args=array(
							            'post_type' => 'product',
							            'equipment' => 'fishing',
							            'post_status' => 'publish',
							            'orderby' => 'menu_order',
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
							    <?php // Other
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
							    <?php /*
							   	<?php // Example including skill -> not needed
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
							    */ ?>
							</div>
						</div>
					</div>

				</div>
			</main><!-- end #main -->
		    
		</div><!-- end #inner-content -->
	</div> <!-- end #content -->

	<script>
		// init Isotope
		var $grid = $('.isotope').imagesLoaded( function() {
	        $grid.isotope({
			  itemSelector: '.element-item',
			  layoutMode: 'fitRows'
			});
		});

		// filter functions
		var filterFns = {
		  // show if number is greater than 50
		  numberGreaterThan50: function() {
		    var number = $(this).find('.number').text();
		    return parseInt( number, 10 ) > 50;
		  },
		};

		// Bind filter button click
		$('.filters-button-group').on( 'click', 'button', function() {
		  var filterValue = $( this ).attr('data-filter');
		  // use filterFn if matches value
		  filterValue = filterFns[ filterValue ] || filterValue;
		  $grid.isotope({ filter: filterValue });
		});

		// Change is-checked class on buttons
		$('.button-group').each( function( i, buttonGroup ) {
		  var $buttonGroup = $( buttonGroup );
		  $buttonGroup.on( 'click', 'button', function() {
		    $buttonGroup.find('.is-checked').removeClass('is-checked');
		    $( this ).addClass('is-checked');
		  });
		});
	</script>
<?php get_footer(); ?>