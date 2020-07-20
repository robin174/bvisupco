<?php while(has_sub_field("bb_builder")): ?>
	<?php if(get_row_layout() == 'bb_heading'): // h4 Heading ?>
		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-12 large-12 cell">
				<h4 class="subheading--title"><?php the_sub_field('bb_title');?></h4>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'bb_para_intro'): // Introduction Paragraph ?>
		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-12 large-12 cell">
				<p class="para-intro"><?php the_sub_field('bb_introduction');?></p>
			</div>
		</div>
	<?php endif; ?>
	
	<?php if(get_row_layout() == 'bb_para'): // Paragraph ?>
		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-12 large-12 cell">
				<?php the_sub_field('bb_paragraph');?>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'bb_image_left'): // Image left / Paragraph block right  ?>
		<div class="grid-x">
			<div class="small-12 medium-6 large-6 cell">
				<section class="image--half-full">
					<figure>
						<img src="<?php the_sub_field('bb_img_left')?>">
					</figure>
				</section>
			</div>
			<div class="small-12 medium-6 large-6 cell">
				<section class="content--half-pad">
					<?php the_sub_field('bb_content_right')?>
				</section>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'bb_image_right'): // Paragraph block left / Image right  ?>
		<div class="grid-x">
			<div class="small-12 medium-6 large-6 cell">
				<section class="content--half-pad">
					<?php the_sub_field('bb_content_left')?>
				</section>
			</div>
			<div class="small-12 medium-6 large-6 cell">
				<section class="image--half-full">
					<figure>
						<img src="<?php the_sub_field('bb_img_right')?>">
					</figure>
				</section>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'bb_bul_list'): // Bullet List ?>
		<div class="small-12 medium-12 large-12 cell">
	        <?php if( get_sub_field('bb_bul_intro') ): ?>
	            <p><?php the_sub_field('bb_bul_intro'); ?></p>
	        <?php endif; ?>
	        <?php if( have_rows('bb_bul') ): // Repeater Field Name ?>
				<ul> 
					<?php while( have_rows('bb_bul') ): the_row(); ?>
						<li><?php the_sub_field('bb_bul_pt'); ?></li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
	<?php endif; ?>
<?php endwhile; ?>