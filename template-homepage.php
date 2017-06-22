<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();
	require_once(get_template_directory().'/assets/snippets/get-homepage-fields.php');
	// echo '<code>$heroCaption = '.$heroCaption.'</code>';
	// $variable = $homeMeta['field'];
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
	<section class="dk_home_testimonials" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/homepage-testimonial-bg.jpg');">
		<p>&ldquo;I love coming here. The owners are always available and friendly, they seem to really care about the fact that you came to their establishment to eat. Great wine selection and I love love love the cheese platter. It changes depending on what's available locally which I appreciate. The servers are friendly and chatty as well. Very inviting!&rdquo;</p>
		<span class="dk_reviewer">Danielle V.</span>
		<span class="dk_review_source">Submitted via Yelp</span>
	</section>

</div> <!-- end #content dk_home -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>
