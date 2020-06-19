<?php 
/*
Template Name: Page - FAQ
*/
get_header(); ?>
	
	<div class="content">
		<div class="inner-content grid-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main">
		    	<div class="background--image">

			    	<div class="grid-container template--page">
			    		<div class="grid-x grid-padding-x">
			    			<div class="small-12 medium-4 large-4 cell">
			    				<?php get_template_part('templates/unit--secondary'); ?> 
			    			</div>
			    			<div class="small-12 medium-8 large-8 cell">
								<h1 class="title--page"><?php the_title(); ?></h1>
								<!-- Flexible content -->
								<?php while(has_sub_field('new_faq_content')): ?>
									<?php if(get_row_layout() == 'qa_section'): ?>
										<div class="grid-container">
											<div class="grid-x grid-padding-x">
												<div class="small-12 medium-12 large-12 cell">
													<section class="faq-qanda">
														<h3 class="title--subheading"><?php the_sub_field('h3_subheading'); ?></h3>
														<?php if( have_rows('faq_qanda') ): // Repeater 02 Field Name ?>
															<?php while( have_rows('faq_qanda') ): the_row(); ?>
																<h5>Q.&nbsp;<?php the_sub_field('faq_question'); ?></h5>
																<?php the_sub_field('faq_answer'); ?>
															<?php endwhile; ?>
														<?php endif; ?>
													</section>
												</div>
											</div>
										</div>
									<?php endif; ?>
								
									<?php if(get_row_layout() == 'terms_section'): ?>
										<div class="grid-container">
											<div class="grid-x grid-padding-x">
												<div class="small-12 medium-12 large-12 cell">
													<section class="faq-terms">
														<h3 class="title--subheading"><?php the_sub_field('h3_subheading'); ?></h3>
														<?php if( have_rows('faq_terms') ): // Repeater 02 Field Name ?>
															<?php while( have_rows('faq_terms') ): the_row(); ?>
																<h5><?php the_sub_field('terms_title'); ?></h5>
																<?php the_sub_field('terms_content'); ?>
															<?php endwhile; ?>
														<?php endif; ?>
													</section>
												</div>
											</div>
										</div>
									<?php endif; ?>

									<?php if(get_row_layout() == 'terms_table'): ?>
										<div class="grid-container">
											<div class="grid-x grid-padding-x">
												<div class="small-12 medium-12 large-12 cell">
													<section class="faq-terms">
														<h3 class="title--subheading"><?php the_sub_field('h3_subheading'); ?></h3>
														<?php if( have_rows('faq_table') ): // Repeater 02 Field Name ?>
															<?php while( have_rows('faq_table') ): the_row(); ?>
																<?php the_sub_field('table_product'); ?> | <?php the_sub_field('terms_cost'); ?>
															<?php endwhile; ?>
														<?php endif; ?>
													</section>
												</div>
											</div>
										</div>
									<?php endif; ?>
								<?php endwhile; ?>
			    			</div>
			    		</div>
			    	</div>

			    </div>
			</main><!-- end #main -->
		    
		</div><!-- end #inner-content -->
	</div><!-- end #content -->

<?php get_footer(); ?>