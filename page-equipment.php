<?php
/*
Template Name: Page - Equipment
*/
get_header(); ?>
	
	<div class="content">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/dark-AbrahamShouse-SSM_6892.jpg');background-size:cover;background-position:top;">
				
		    	<!-- TO DO 
		    		- Add a background image
		    		- Spacing on blocks
		    		- Default image if not provided: blur, BVISUPCO logo and image coming soon
		    		- A font? 
		    		- Implement filter
		    	-->

		    	<div class="grid-container">
		    		<div class="grid-x grid-margin-x">
		    			<div class="cell">
			    			<!-- Filters here (https://isotope.metafizzy.co/filtering.html) -->
							<div id="filters" class="button-group filters-button-group">
				                <button class="button small is-checked" data-filter="*">Show All</button>
				                <button class="button small" data-filter=".equipment-sup">SUP</button>
				                <button class="button small" data-filter=".equipment-windsurf">Windsurf</button> 
				                <button class="button small" data-filter=".equipment-kite">Kite</button>
				                <button class="button small" data-filter=".equipment-kayak">Kayak</button> 
				                <button class="button small" data-filter=".equipment-surf">Surf</button>
				                <button class="button small" data-filter=".equipment-fishing">Fishing</button>
				                <button class="button small" data-filter=".equipment-other">Other</button>
				    		</div>
			    		</div>
		    		</div>

		    		<div class="grid isotope">
						<div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-3">
						    <?php
						        $args=array(
						            'post_type' => 'product',
						            'post_status' => 'publish',
						            'order' => 'desc'
						        );
						        $my_query = null;
						        $my_query = new WP_Query($args);
						        if( $my_query->have_posts() ) {
						        while ($my_query->have_posts()) : $my_query->the_post(); ?>
						        	<div <?php post_class('cell element-item unit--product') ?> data-category="equipment-sup">
				            			<?php get_template_part('templates/unit--equipment'); ?> 
				            		</div>
				            		<!-- We might need to pull equipment template into here to make Isotope work? -->
						    	<?php endwhile; }
						    	wp_reset_query(); ?>
						</div>
					</div>
				</div>

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
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