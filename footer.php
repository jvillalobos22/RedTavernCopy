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
	</body>
</html> <!-- end page -->
