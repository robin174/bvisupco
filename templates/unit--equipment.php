<div style="background-color:rgba(0,0,0,0.7); margin-bottom:25px; color:white;">
	<section class="unit--product-image">
		<?php if ( has_post_thumbnail() ) { ?>
			<figure>
				<?php the_post_thumbnail('normal'); ?>
				<figcaption style="position: absolute;text-align: right;top: 0;right: 0;z-index: 100;color: #fff;background-color: rgba(0,0,0,0.75);padding: 3px 10px 3px 7px;text-transform:uppercase;font-size:90%;letter-spacing:0.3em;"><?php echo strip_tags(get_the_term_list( $post->ID, 'equipment', '',', ')); ?></figcaption>
			</figure>
		<?php } else { ?>
			<figure>
				<img src="<?php bloginfo('template_directory'); ?>/images/image-equipment-comingsoon.jpg" />
	            	<figcaption style="position: absolute;text-align: right;top: 0;right: 0;z-index: 100;color: #fff;background-color: rgba(0,0,0,0.75);padding: 3px 10px 3px 7px;text-transform:uppercase;font-size:90%;letter-spacing:0.3em;"><?php echo strip_tags(get_the_term_list( $post->ID, 'equipment', '',', ')); ?></figcaption>
			</figure>
		<?php } ?>
	</section>
	<section class="unit--product-info" style="padding:25px;">
		<section class="unit--product-details">
			<h2><?php the_title();?></h2>
			<p><?php the_field('product_description');?></p>

			<!-- ACF: SUP - Category if equipment equals 'SUP' / Category show: -->
			<!-- All Round, Perfomance SUP, Race & Distance -->

			<!-- Skill level taxonomy -->
			<p style="color:red;font-style:italic;"><?php echo strip_tags(get_the_term_list( $post->ID, 'skill', 'Skill: ',', ')); ?></p>

			<!-- Repeater -->
			<?php if( have_rows('product_reserve') ): // Repeater Field Name ?>
				<?php while( have_rows('product_reserve') ): the_row(); ?>
					
					<?php if(get_sub_field('product_available')): // If 'Available' selected ?>
						<div class="grid-x">
							<div class="cell small-9 medium-9 large-9">
								<section class="block--product-reservation">
									<p><strong><?php the_sub_field('product_name'); ?></strong><br>

									<span style="font-size:80%;"><?php if( get_sub_field('product_size') ): ?><?php the_sub_field('product_size'); ?><?php endif; ?><?php if( get_sub_field('product_size') && get_sub_field('product_material') ): ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php endif; ?><?php if( get_sub_field('product_material') ): ?><?php the_sub_field('product_material'); ?><?php endif; ?></span></p>
									<p><em>NEED TO ADD PRICE TO RESERVE OPTION<?php the_field('product_cost');?></em></p>
									<!-- bring line-height in so that it feels like block without explicitly designing a block -->
								</section>
							</div>
							<div class="cell small-3 medium-3 large-3">
								<button class="unit--button-reserve is-visible"><a href="<?php the_sub_field('product_reservation_link'); ?>" title="Reserve">Reserve</a></button>
							</div>
						</div><!-- end .grid-x -->
					<?php endif; ?>
				
				<?php endwhile; ?>
			<?php endif; ?>	
		</section>

		<section class="unit--product-brand">
			<?php if(has_term('starboard','brand')): ?>
				<hr class="product-break">
				<figure class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-starboard.png" alt="Logo - Starboard">
				</figure>
			<?php elseif(has_term('ocean-rodeo','brand')): ?>
				<hr class="product-break">
				<figure class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-oceanrodeo.png" alt="Logo - Ocean Rodeo">
				</figure>
			<?php elseif(has_term('severne','brand')): ?>
				<hr class="product-break">
				<figure class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-severne.png" alt="Logo - Severne">
				</figure>
			<?php endif; ?>
		</section>

	</section>
</div>