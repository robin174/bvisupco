<?php while(has_sub_field("bb_builder")): ?>
	<?php if(get_row_layout() == 'bb_title'): // Title ?>
		<div class="small-12 medium-12 large-12 cell">
			<h4 class="subheading--title"><?php the_sub_field('title');?></h4>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'bb_para_intro'): // Introduction Paragraph ?>
		<div class="small-12 medium-12 large-12 cell">
			<p class="para-intro"><?php the_sub_field('bb_introduction');?></p>
		</div>
	<?php endif; ?>
	
	<?php if(get_row_layout() == 'bb_para'): // Paragraph ?>
		<div class="small-12 medium-12 large-12 cell">
			<?php the_sub_field('bb_paragraph');?>
		</div>
	<?php endif; ?>

	<?php /* Image left / para block right */ ?>
	<div class="small-12 medium-6 large-6 cell">
		<section>
			<figure>
				<img src="">
			</figure>
		</section>
	</div>
	<div class="small-12 medium-6 large-6 cell">
		<section>
			<p>X</p>
		</section>
	</div>

	<?php /* Para block left / Image left */ ?>
	<div class="small-12 medium-6 large-6 cell">
		<section>
			<p>Y</p>
		</section>
	</div>
	<div class="small-12 medium-6 large-6 cell">
		<section>
			<figure>
				<img src="">
			</figure>
		</section>
	</div>

	<?php if(get_row_layout() == 'bb_bullets'): // Bullet List ?>
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