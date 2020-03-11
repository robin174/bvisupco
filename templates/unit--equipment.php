<div style="background-color:rgba(0,0,0,0.5); margin-bottom:25px; color:white;">
	<section class="unit--product-image">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('normal');
		} else { ?>
			<figure>
				<img src="<?php bloginfo('template_directory'); ?>/images/test-equipment-default.jpg" />
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
		<!-- if brand, add mini brand logo here: --><p><?php echo strip_tags(get_the_term_list( $post->ID, 'brand', 'Brand: ',', ')); ?></p>
	</section>
</div>