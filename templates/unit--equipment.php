<section class="unit--product">
	<!-- Product Thumbnail -->
	<section class="unit--product-image">
		<?php if ( has_post_thumbnail() ) { ?>
			<figure>
				<?php the_post_thumbnail('normal'); ?>
				<figcaption class="pr-category"><?php echo strip_tags(get_the_term_list( $post->ID, 'equipment', '',', ')); ?></figcaption>
			</figure>
		<?php } else { ?>
			<!-- If product = SUP -->
			<?php if(has_term( 'sup', 'equipment' ) ) { ?>
				<figure>
					<img src="<?php bloginfo('template_directory'); ?>/images/use-comingsoon-sup.jpg" />
					<figcaption class="pr-category"><?php echo strip_tags(get_the_term_list( $post->ID, 'equipment', '',', ')); ?></figcaption>
				</figure>
			<!-- If product = Windsurf -->
			<?php } elseif(has_term( 'windsurf', 'equipment' ) ) { ?>
				<figure>
					<img src="<?php bloginfo('template_directory'); ?>/images/use-comingsoon-windsurf-v2.jpg" />
					<figcaption class="pr-category"><?php echo strip_tags(get_the_term_list( $post->ID, 'equipment', '',', ')); ?></figcaption>
				</figure>
			<!-- If product = Kite -->
			<?php } elseif(has_term( 'kite', 'equipment' ) ) { ?>
				<figure>
					<img src="<?php bloginfo('template_directory'); ?>/images/use-comingsoon-windsurf-v2.jpg" />
					<figcaption class="pr-category"><?php echo strip_tags(get_the_term_list( $post->ID, 'equipment', '',', ')); ?></figcaption>
				</figure>
			<?php } else { ?>
				<figure>
					<img src="<?php bloginfo('template_directory'); ?>/images/use-comingsoon-sup.jpg" />
		            <figcaption class="pr-category"><?php echo strip_tags(get_the_term_list( $post->ID, 'equipment', '',', ')); ?></figcaption>
				</figure>
			<?php } ?>
		<?php } ?>
	</section>
	<!-- Product Description -->
	<section class="unit--product-info">
		<section class="unit--product-details">
			<h2><?php the_title();?></h2>
			<p class="pr-body"><?php the_field('product_description');?></p>

			<?php /*
				<!-- ACF: SUP - Category if equipment equals 'SUP' / Category show: -->
				<!-- All Round, Perfomance SUP, Race & Distance -->
				<!-- TEMP Skill level taxonomy -->
				<p style="color:#00AF85;font-style:italic;"><?php echo strip_tags(get_the_term_list( $post->ID, 'skill', 'Skill: ',', ')); ?></p>
			*/ ?>

			<!-- Actual product versions -->
			<?php if( have_rows('product_reserve') ): // Repeater Field Name ?>
				<?php while( have_rows('product_reserve') ): the_row(); ?>
					
					<?php if(get_sub_field('product_available')): // If 'Available' selected ?>
						<section class="block--product-reservation">
							<h4 class="pr-name"><span class="pr-red"><i class="fa-duotone fa-tags"></i></span>&nbsp;&nbsp;<?php the_sub_field('product_name'); ?></h4>
							<div class="block--product-details">
								<?php if( get_sub_field('product_size') ): ?><?php the_sub_field('product_size'); ?><?php endif; ?>
								<?php if( get_sub_field('product_size') && get_sub_field('product_material') ): ?>&nbsp;<span class="pr-red">|</span>&nbsp;<?php endif; ?>
								<?php if( get_sub_field('product_material') ): ?><?php the_sub_field('product_material'); ?><?php endif; ?>
								<p class="pr-price"><?php the_sub_field('product_cost');?></p>
							</div>
							<!-- Each individual product can show the 'Reserve' button, or not -->
							<?php if (get_field('reserve_button') == 'show'): ?>
								<a class="unit--button-reserve" href="<?php the_sub_field('product_reservation_link'); ?>" title="Reserve"><i class="fad fa-credit-card fa-lg"></i>&nbsp;&nbsp;Reserve</a>
							<?php endif; ?>
						</section>
					<?php endif; ?>
				
				<?php endwhile; ?>
			<?php endif; ?>	
		</section>

		<section class="unit--product-brand">
			<?php if(has_term('starboard', 'brand') && has_term('severne', 'brand')): ?>
				<div class="grid-x">
	    			<div class="small-12 medium-6 large-6 cell">
						<figure class="align-left">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-starboard.png" alt="Logo - Starboard">
						</figure>
					</div>
					<div class="small-12 medium-6 large-6 cell">
						<figure class="align-left">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-severne.png" alt="Logo - Severne">
						</figure>
					</div>
				</div>
			<?php elseif(has_term('starboard', 'brand') && has_term('airush', 'brand')): ?>
				<div class="grid-x">
	    			<div class="small-12 medium-6 large-6 cell">
						<figure class="align-left">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-starboard.png" alt="Logo - Starboard">
						</figure>
					</div>
					<div class="small-12 medium-6 large-6 cell">
						<figure class="align-left">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-airush.png" alt="Logo - Severne">
						</figure>
					</div>
				</div>
			<?php elseif(has_term('starboard','brand')): ?>
				<div class="grid-x">
	    			<div class="small-12 medium-6 large-6 cell">
						<figure class="align-left">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-starboard.png" alt="Logo - Starboard">
						</figure>
					</div>
				</div>
			<?php elseif(has_term('ocean-rodeo','brand')): ?>
				<div class="grid-x">
	    			<div class="small-12 medium-6 large-6 cell">
						<figure class="align-left">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-oceanrodeo.png" alt="Logo - Ocean Rodeo">
						</figure>
					</div>
				</div>
			<?php elseif(has_term('airush','brand')): ?>
				<div class="grid-x">
	    			<div class="small-12 medium-6 large-6 cell">
						<figure class="align-left">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-airush.png" alt="Logo - Airush">
						</figure>
					</div>
				</div>
			<?php elseif(has_term('severne','brand')): ?>
				<div class="grid-x">
	    			<div class="small-12 medium-6 large-6 cell">
						<figure class="align-left">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-severne.png" alt="Logo - Severne">
						</figure>
					</div>
				</div>
			<?php endif; ?>
		</section>

	</section>
</section>