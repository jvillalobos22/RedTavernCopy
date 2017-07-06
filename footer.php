				<footer class="dk_footer" role="contentinfo">
					<div class="dk_footer_cta">
						<div class="dk_flexcontainer_wide">
							<h4>Join Our Newsletter!</h4>
							<input type="text" placeholder="Your Email Address">
							<a href="#">Sign up Now</a>
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
