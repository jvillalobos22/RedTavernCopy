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
								<div class="dk_social">
									Social Media Links Here
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
