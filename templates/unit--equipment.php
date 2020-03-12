<div style="background-color:rgba(0,0,0,0.5); margin-bottom:25px; color:white;">
	<section class="unit--product-image">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('normal');
		} else { ?>
			<figure>
				<img src="<?php bloginfo('template_directory'); ?>/images/image-equipment-comingsoon.jpg" />
			</figure>
		<?php } ?>
	</section>
	<section class="unit--product-info" style="padding:25px;">
		<h2><?php the_title();?></h2>
		<p><?php the_field('product_description');?></p>
		<p><em><?php the_field('product_cost');?></em></p>
		<button class="unit--button-reserve"><a href="" title="Reserve">Reserve</a></button>
		<p><?php echo strip_tags(get_the_term_list( $post->ID, 'equipment', 'Cat: ',', ')); ?></p>

		<!-- if equipmrnt equals 'SUP' show: --><p><?php echo strip_tags(get_the_term_list( $post->ID, 'skill', 'Skill: ',', ')); ?></p>

		<?php /* <p><?php echo strip_tags(get_the_term_list( $post->ID, 'brand', 'Brand: ',', ')); ?></p> */ ?>
		<?php if(has_term('starboard','brand')): ?>
			<figure class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-starboard.png" alt="Logo - Starboard">
			</figure>
		<?php elseif(has_term('ocean-rodeo','brand')): ?>
			<figure class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-oceanrodeo.png" alt="Logo - Ocean Rodeo">
			</figure>
		<?php elseif(has_term('severne','brand')): ?>
			<figure class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-sm-severne.png" alt="Logo - Severne">
			</figure>
		<?php endif; ?>

	</section>
</div>