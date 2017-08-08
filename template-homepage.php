<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();
	require_once(get_template_directory().'/assets/snippets/get-homepage-fields.php');
	// echo '<code>$heroCaption = '.$heroCaption.'</code>';
?>

<div id="content" class="dk_home">
	<section class="dk_main dk_homemain">
		<div id="inner-content" class="row">
			<div class="large-4 medium-5 small-12 columns">
				<img src="<?php echo $mainImg; ?>" alt="<?php echo $mainImgAlt; ?>">
			</div>
			<main id="main" class="large-8 medium-7 small-12 columns" role="main">
				<h1><?php echo $mainHeading; ?></h1>
				<h2 class="dk_subheading"><?php echo $mainSubheading; ?></h2>
				<?php the_content() ?>
			</main> <!-- end #main -->
			<div class="large-12 columns dk_hr_rooster">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rooster-icon.png" alt="Red Tavern Rooster Icon">
				<hr>
			</div>
		</div> <!-- end #inner-content -->
		<!-- Best in Chico Content -->
		<div id="inner-content" class="row">
			<div class="large-8 medium-7 small-12 columns" role="main">
				<h2>Vote For Us!</h2>
				<p>Red Tavern has been nominated for Best Fine Dining in this year's Best of Chico contest! We appreciate our customers' continued support and look forward to serving you for years to come! Please feel free to click the button below to submit your vote!</p>
				<a href="https://go.newsreview.com/best-of-chico/" target="_blank">Vote Here Now</a>
			</div> <!-- end #main -->
			<div class="large-4 medium-5 small-12 columns">
				<a href="https://go.newsreview.com/best-of-chico/" target="_blank">
					<img src="http://104.238.96.231/~newredtavern/wp-content/uploads/2017/08/2017best-of-chico-flyer.png" alt="Vote for Red Tavern as Best in Chico for fine dining">
				</a>
			</div>
			<div class="large-12 columns dk_hr_rooster">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rooster-icon.png" alt="Red Tavern Rooster Icon">
				<hr>
			</div>
		</div> <!-- End Best in Chico Content -->
		<div class="dk_cardscontainer">
			<div class="dk_homecard">
				<div class="dk_top">
					<h3><?php echo $cardOneHeading ?></h3>
					<img src="<?php echo $cardOneImg ?>" alt="<?php echo $cardOneAlt ?>">
				</div>
				<div class="dk_bottom">
					<p><?php echo $cardOneText ?></p>
					<a href="<?php echo $cardOneLink ?>"><?php echo $cardOneBtn ?></a>
				</div>
			</div>
			<div class="dk_homecard">
				<div class="dk_top">
					<h3><?php echo $cardTwoHeading ?></h3>
					<img src="<?php echo $cardTwoImg ?>" alt="<?php echo $cardTwoAlt ?>">
				</div>
				<div class="dk_bottom">
					<p><?php echo $cardTwoText ?></p>
					<a href="<?php echo $cardTwoLink ?>"><?php echo $cardTwoBtn ?></a>
				</div>
			</div>
			<div class="dk_homecard">
				<div class="dk_top">
					<h3><?php echo $cardThreeHeading ?></h3>
					<img src="<?php echo $cardThreeImg ?>" alt="<?php echo $cardThreeAlt ?>">
				</div>
				<div class="dk_bottom">
					<p><?php echo $cardThreeText ?></p>
					<a href="<?php echo $cardThreeLink ?>"><?php echo $cardThreeBtn ?></a>
				</div>
			</div>
		</div>
	</section>
	<section class="dk_home_callouts">
		<div class="dk_flexcontainer_wide">
			<div class="dk_callout one">
				<div class="dk_img">
					<img src="<?php echo $sundayOneImage ?>" alt="<?php echo $sundayOneAlt ?>">
				</div>
				<div class="dk_text">
					<h2><?php echo $sundayOneHeading ?></h2>
					<h3 class="dk_subheading"><?php echo $sundayOneSubheading ?></h3>
					<p><?php echo $sundayOneText ?></p>
				</div>
			</div>
			<div class="dk_callout two">
				<div class="dk_img">
					<img src="<?php echo $sundayTwoImage ?>" alt="<?php echo $sundayTwoAlt ?>">
				</div>
				<div class="dk_text">
					<h2><?php echo $sundayTwoHeading ?></h2>
					<h3 class="dk_subheading"><?php echo $sundayTwoSubheading ?></h3>
					<p><?php echo $sundayTwoText ?></p>
				</div>
			</div>
		</div>
	</section>
</div> <!-- end #content dk_home -->
<section class="dk_home_testimonials" style="background-image: url('<?php echo $testimonialBgImg ?>');">
	<div class="row">
		<?php
			$args = array(
				'post_type' => 'testimonial',
				'orderby' => 'title',
				'order' => 'ASC',
				'posts_per_page' => -1
			);

			$testimonials = new WP_Query( $args );

			if ( $testimonials->have_posts() ) :
		?>
		<div class="dk_testimonial_slider">
			<ul>
				<?php while ( $testimonials->have_posts() ) : $testimonials->the_post();

					$testmeta = get_post_meta( $post->ID, 'testimonial', true );
				?>
				<li class="dk_testimonial">
					<p>&ldquo;<?php echo $testmeta['testimonial-quote']; ?>&rdquo;</p>
					<span class="dk_reviewer"><?php echo $testmeta['testimonial-name']; ?></span>
					<span class="dk_review_source">Submitted via <?php echo $testmeta['testimonial-source']; ?></span>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
		<?php endif; ?>
	</div>
</section>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
