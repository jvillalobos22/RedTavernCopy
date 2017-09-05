				<footer class="dk_footer" role="contentinfo">
					<div class="dk_footer_cta">
						<!-- <h4>Join Our Newsletter!</h4>
						<input type="text" placeholder="Your Email Address">
						<a href="#">Sign up Now</a> -->
						<!--Begin CTCT Sign-Up Form-->
						<!-- EFD 1.0.0 [Thu Jul 27 12:37:14 EDT 2017] -->
						<div class="ctct-embed-signup">
						   <div>
						       	<span id="success_message" style="display:none;">
						           	<h4>Thanks for signing up!</h4>
						       	</span>
						       	<form data-id="embedded_signup:form" class="ctct-custom-form Form" name="embedded_signup" method="POST" action="https://visitor2.constantcontact.com/api/signup">
								   	<div class="dk_flexcontainer_wide">
										<h4 style="margin: 0 0 1rem 0;">Join Our Mailing List!</h4>
										<!-- The following code must be included to ensure your sign-up form works properly. -->
										<input data-id="ca:input" type="hidden" name="ca" value="6de89e51-be9f-4412-9160-12435c1c2408">
										<input data-id="list:input" type="hidden" name="list" value="1206804359">
										<input data-id="source:input" type="hidden" name="source" value="EFD">
										<input data-id="required:input" type="hidden" name="required" value="list,email">
										<input data-id="url:input" type="hidden" name="url" value="">
										<p data-id="Email Address:p" ><input data-id="Email Address:input" type="email" name="email" value="" maxlength="80" placeholder="Your Email Address"></p>
										<button type="submit" class="Button ctct-button Button--block Button-secondary" data-enabled="enabled">Sign Up Now</button>
									</div>
									<div><p class="ctct-form-footer">By submitting this form, you are granting: Red Tavern, 1250 Esplanade , Chico, California, 95926, United States, http://www.redtavern.com/ permission to email you. You may unsubscribe via the link found at the bottom of every email.  (See our <a href="http://www.constantcontact.com/legal/privacy-statement" target="_blank">Email Privacy Policy</a> for details.) Emails are serviced by Constant Contact.</p></div>
						       </form>
						   </div>
							<script type='text/javascript'>
							   var localizedErrMap = {};
							   localizedErrMap['required'] = 		'This field is required.';
							   localizedErrMap['ca'] = 			'An unexpected error occurred while attempting to send email.';
							   localizedErrMap['email'] = 			'Please enter your email address in name@email.com format.';
							   localizedErrMap['birthday'] = 		'Please enter birthday in MM/DD format.';
							   localizedErrMap['anniversary'] = 	'Please enter anniversary in MM/DD/YYYY format.';
							   localizedErrMap['custom_date'] = 	'Please enter this date in MM/DD/YYYY format.';
							   localizedErrMap['list'] = 			'Please select at least one email list.';
							   localizedErrMap['generic'] = 		'This field is invalid.';
							   localizedErrMap['shared'] = 		'Sorry, we could not complete your sign-up. Please contact us to resolve this.';
							   localizedErrMap['state_mismatch'] = 'Mismatched State/Province and Country.';
								localizedErrMap['state_province'] = 'Select a state/province';
							   localizedErrMap['selectcountry'] = 	'Select a country';
							   var postURL = 'https://visitor2.constantcontact.com/api/signup';
							</script>
							<script type='text/javascript' src='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/js/signup-form.js'></script>
							<!--End CTCT Sign-Up Form-->
						</div>
					</div>
					<div id="inner-footer" class="dk_footer_main">
						<div class="row">
							<div class="large-12 medium-12 columns">
								<?php
									$facebook = esc_attr( get_option( 'social_facebook' ) );
									$instagram = esc_attr( get_option( 'social_instagram' ) );
									$twitter = esc_attr( get_option( 'social_twitter' ) );
									$tripadvisor = esc_attr( get_option( 'social_tripadvisor' ) );
									$yelp = esc_attr( get_option( 'social_yelp' ) );
								?>
								<div class="dk_social">
									<?php if( isset( $facebook ) && $facebook != '') { ?>
									<a href="<?php echo $facebook; ?>" target="_blank">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
									<?php } ?>
									<?php if( isset( $instagram ) && $instagram != '') { ?>
									<a href="<?php echo $instagram; ?>" target="_blank">
										<i class="fa fa-instagram" aria-hidden="true"></i>
									</a>
									<?php } ?>
									<?php if( isset( $twitter ) && $twitter != '') { ?>
									<a href="<?php echo $twitter; ?>" target="_blank">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
									<?php } ?>
									<?php if( isset( $tripadvisor ) && $tripadvisor != '') { ?>
									<a href="<?php echo $tripadvisor; ?>" target="_blank">
										<i class="fa fa-tripadvisor" aria-hidden="true"></i>
									</a>
									<?php } ?>
									<?php if( isset( $yelp ) && $yelp != '') { ?>
									<a href="<?php echo $yelp; ?>" target="_blank">
										<i class="fa fa-yelp" aria-hidden="true"></i>
									</a>
									<?php } ?>
								</div>
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
							<div class="large-12 medium-12 columns">
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
								<p>Site by <a href="https://www.dkwebdesign.com" target="_blank" rel="nofollow">DK Web Design</a></p>
							</div>
						</div>
					</div> <!-- end #inner-footer -->
				</footer> <!-- end .footer -->
			</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
		<script src="https://use.fontawesome.com/51a93f0aea.js"></script>
		<script>
		jQuery(document).ready(function($) {
			$('.dk_testimonial_slider').unslider({
				autoplay: false,
				delay: 8000,
				nav: false,
				arrows: {
					prev: '<a class="unslider-arrow dk_slider_nav prev"><i class="fa fa-caret-left" aria-hidden="true"></i></a>',
					next: '<a class="unslider-arrow dk_slider_nav next"><i class="fa fa-caret-right" aria-hidden="true"></i></a>'
				}
			});
		});
		</script>
	</body>
</html> <!-- end page -->
