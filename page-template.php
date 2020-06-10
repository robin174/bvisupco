<?php 
/*
Template Name: Page - Template
*/
get_header(); ?>
	
	<div class="content">
		<div class="inner-content grid-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/dark-AbrahamShouse-SSM_6892.jpg');background-size:cover;background-position:top;">

		    	<div class="grid-container template--page">
		    		<div class="grid-x grid-padding-x">
		    			<div class="small-12 medium-3 large-3 cell">
		    				<h2>Local</h2>
		    				<p>For surf and beach conditions in Cane Garden Bay:<br>
		    					<a href="https://www.resortcams.com/webcams/cane-garden-bay" title="Resort Cams - Cane Garden Bay">www.resortcams.com</a></p>
		    					<hr>
		    				<p>For wind, wave and weather prediction models:<br>
		    				<a href="https://www.windguru.cz/58" title="Wind Guru - Cane Garden Bay">www.windguru.cz</a><br>
		    				<a href="https://magicseaweed.com/British-Virgin-Islands-Surfing/133/">www.magicseaweed</a><br>
		    				<a href="www.surf-forecast.com/regions/Tortola-BVI">www.surf-forecast.com</a></p>
		    			</div>
		    			<div class="small-12 medium-9 large-9 cell">

		    				<?php if(is_page('contact-us-new')) { ?>
								<h2>Contact Us</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices est posuere, egestas ante eget, feugiat mi. Curabitur elementum maximus leo eget volutpat.</p>
								<div>
									<div class="typeform-widget" data-url="https://form.typeform.com/to/X1vT4J" style="width: 100%; height: 500px;"></div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;"> powered by <a href="https://admin.typeform.com/signup?utm_campaign=X1vT4J&utm_source=typeform.com-01D8JTKBXBTDEFWWY2GQE46NQ5-professional&utm_medium=typeform&utm_content=typeform-embedded-poweredbytypeform&utm_term=EN" style="color: #999" target="_blank">Typeform</a></div>
								</div>
							<?php } elseif(is_page('faq-new')) { ?>
								<h2>FAQ</h2>
								<section>
									<h4>(i) Rental</h4>
								</section>
								<section>
									<h5>Q. How do I book equipment?</h5>
									<p>You can either reserve rental equipment through your charter agent or directly via our <a href="/contact-us" title="BVISUPCO - Contact Us">contact us</a> page. If you are booking a multi-day rental from a villa location, please contact us directly as above.</p>
								</section>
								<section>
									<h5>Q. Do you charge for delivery?</h5>
									<p>No, we do not charge delivery for multi-day rentals to your yacht or villa.</p>
								</section>
								<section>
									<h5>Q. Do you charge for delivery?</h5>
									<p>No, we do not.</p>
								</section>
								<section>
									<h5>Q. Do you have a minimum rental period?</h5>
									<p>Our minimum rental period is for 5 days. Shorter periods are available but at a different pricing level.<br>
									Please <a href="/contact-us" title="BVISUPCO - Contact Us">contact us</a> for more details.</p>
								</section>

								<section>
									<hr>
									<h4>(i) Equipment</h4>
								</section>
								<section>
									<h5>Q. Do you rent inflatable SUPs?</h5>
									<p>Yes we do! Our new iSUP Deluxe inflatable SUP boards by Starboard have double chambers for extra security and means that the boards can be inflated to higher PSI. They are light, durable, rigid, surprisingly fast on the water and very light to manoeuvre on and off your boat. They are delivered fully inflated and you will not need to re-inflate. They also come with webbing on the nose so you can transport personal items to and from the beach.</p>
								</section>
								<section>
									<h5>Q. Can I have some more information on your kayaks?</h5>
									<p>The single and double sit-on-top kayaks we are using are generically the same as all versions in existence right now, they are very stable. The double measures about 11’0” x 34″, can seat up to three (~550lbs) and comes with 2 backrests and paddles. The single is roughly 9’6” x 34” and is rated to 250lbs and comes with one back rest and a paddle.</p>
								</section>


							<?php }  ?>
		    			</div>
		    		</div>
		    	</div>

			</main><!-- end #main -->
		    
		</div><!-- end #inner-content -->
	</div><!-- end #content -->

<?php get_footer(); ?>