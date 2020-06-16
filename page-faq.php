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
			    				<h2>Local</h2>
			    				<p>For surf and beach conditions in Cane Garden Bay:<br>
			    				<a href="https://www.resortcams.com/webcams/cane-garden-bay" title="Resort Cams - Cane Garden Bay" target="_blank"><strong><i class="fas fa-external-link-alt"></i>&nbsp;&nbsp;www.resortcams.com</strong></a></p>
			    				<p>For wind, wave and weather prediction models:<br>
			    				<a href="https://www.windguru.cz/58" title="Wind Guru - Cane Garden Bay" target="_blank"><strong><i class="fas fa-external-link-alt"></i>&nbsp;&nbsp;www.windguru.cz</strong></a><br>
			    				<a href="https://magicseaweed.com/British-Virgin-Islands-Surfing/133/" target="_blank"><strong><i class="fas fa-external-link-alt"></i>&nbsp;&nbsp;www.magicseaweed.com</strong></a><br>
			    				<a href="www.surf-forecast.com/regions/Tortola-BVI" target="_blank"><strong><i class="fas fa-external-link-alt"></i>&nbsp;&nbsp;www.surf-forecast.com</strong></a></p>
			    			</div>
			    			<div class="small-12 medium-8 large-8 cell">
								<h1 class="title--page">FAQs</h1>
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
								
									<!-- Contract section: to integrate, not implemented -->
									<?php if(get_row_layout() == 'faq_qanda'): ?>
										<div class="grid-container">
											<div class="grid-x grid-padding-x">
												<div class="small-12 medium-12 large-12 cell">
													<section class="faq-contract">
													</section>
												</div>
											</div>
										</div>
									<?php endif; ?>

									<!-- Table section: to integrate, not implemented -->
									<?php if(get_row_layout() == 'faq_table'): ?>
										<div class="grid-container">
											<div class="grid-x grid-padding-x">
												<div class="small-12 medium-12 large-12 cell">
													<section class="faq-table">
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