<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<div id="content" class="dk_home">
	<section class="dk_main dk_homemain">
		<div id="inner-content" class="row">
			<div class="large-4 medium-5 small-12 columns">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage-food-main.png" alt="addalt">
			</div>
			<main id="main" class="large-8 medium-7 small-12 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php //get_template_part( 'parts/loop', 'page' ); ?>

				<?php endwhile; endif; ?>

				<h1>Redefining New American Cuisine</h1>
				<h2 class="dk_subheading">In an Upscale Comfortable Atmosphere</h2>
				<p>Based on influences from all over the world, the Red Tavern menu is renewed every season. Our cuisine is New American and we utilize the freshest, locally-grown, seasonal and organic produce and meats. Our dining room is upscale, yet comfortable and charming. Our large patio is absolutely stunning. It features a bocce court, twinkling lights, and mature trees.</p>
				<p>We offer an extensive wine list, which is balanced with New and Old World wines from both largely-popular wineries to small, interesting boutiques. We offer over one hundred selections at any given time to include wines locally-produced. Our talented bartenders create exciting signature cocktails based on classic recipes but often with a twist while utilizing seasonal fruit, vegetables and herbs. Come to Red Tavern to dine, drink and play!</p>
			</main> <!-- end #main -->
			<div class="large-12 columns dk_hr_rooster">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rooster-icon.png" alt="Red Tavern Rooster Icon">
				<hr>
			</div>
		</div> <!-- end #inner-content -->
		<div class="dk_cardscontainer">
			<div class="dk_homecard">
				<div class="dk_top">
					<h3>Reserve a Table</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage-card-placeholder-2.jpg" alt="addalt">
				</div>
				<div class="dk_bottom">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec mi in nisi maximus convallis. Morbi rutrum purus eu turpis volutpat bibendum vitae id est.mattis malesuada nisi, id aliquam.</p>
					<a href="#">Make a Reservation</a>
				</div>
			</div>
			<div class="dk_homecard">
				<div class="dk_top">
					<h3>Reserve a Table</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage-card-placeholder-2.jpg" alt="addalt">
				</div>
				<div class="dk_bottom">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec mi in nisi maximus convallis. Morbi rutrum purus eu turpis volutpat bibendum vitae id est.mattis malesuada nisi, id aliquam.</p>
					<a href="#">Make a Reservation</a>
				</div>
			</div>
			<div class="dk_homecard">
				<div class="dk_top">
					<h3>Reserve a Table</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage-card-placeholder-2.jpg" alt="addalt">
				</div>
				<div class="dk_bottom">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec mi in nisi maximus convallis. Morbi rutrum purus eu turpis volutpat bibendum vitae id est.mattis malesuada nisi, id aliquam.</p>
					<a href="#">Make a Reservation</a>
				</div>
			</div>
		</div>
	</section>
	<section class="dk_home_callouts">
		<div class="dk_flexcontainer_wide">
			<div class="dk_callout one">
				<div class="dk_img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage-callouts-placeholder-1.jpg" alt="addalt">
				</div>
				<div class="dk_text">
					<h2>Family Style Dinner</h2>
					<h3 class="dk_subheading">Join Us On Sunday Evenings</h3>
					<p>Sundays in addition to serving our regular dinner menu we will now serve a family style dinner. This dinner is meant for four people but we can adjust for different numbers. Each Sunday the menu will change but it will include salad, two different types of entrees (a pasta and chicken dish) and dessert. All items are served family style. The price per person is $26.00.
				</div>
			</div>
			<div class="dk_callout two">
				<div class="dk_img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage-callouts-placeholder-1.jpg" alt="addalt">
				</div>
				<div class="dk_text">
					<h2>Sunday Brunch</h2>
					<h3 class="dk_subheading">A Subheading Goes Here</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec mi in nisi maximus convallis. Morbi rutrum purus eu turpis volutpat bibendum vitae id est.mattis malesuada nisi, id aliquam.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="dk_home_testimonials" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/homepage-testimonial-bg.jpg');">
		<p>&ldquo;I love coming here. The owners are always available and friendly, they seem to really care about the fact that you came to their establishment to eat. Great wine selection and I love love love the cheese platter. It changes depending on what's available locally which I appreciate. The servers are friendly and chatty as well. Very inviting!&rdquo;</p>
		<span class="dk_reviewer">Danielle V.</span>
		<span class="dk_review_source">Submitted via Yelp</span>
	</section>

</div> <!-- end #content dk_home -->


<?php get_footer(); ?>
