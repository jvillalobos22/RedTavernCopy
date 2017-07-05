<?php
/*
Template Name: Secondary Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();
	require_once(get_template_directory().'/assets/snippets/get-secpage-fields.php');
	// echo '<code>$heroCaption = '.$heroCaption.'</code>';
	// $variable = $homeMeta['field'];
?>

<div id="content" class="dk_secondary">
	<section class="dk_main dk_secmain">
		<div id="inner-content" class="row">
			<!-- <div class="large-4 medium-5 small-12 columns">
				<img src="<?php //echo $mainImg; ?>" alt="<?php //echo $mainImgAlt; ?>">
			</div> -->
			<main id="main" class="large-12 medium-12 small-12 columns" role="main">
				<img class="dk_floatimg" src="<?php echo $mainImg; ?>" alt="<?php echo $mainImgAlt; ?>">
				<?php if(isset($mainHeading) && $mainHeading) { ?>
					<h1><?php echo $mainHeading; ?></h1>
				<?php } else { ?>
					<h1><?php echo the_title(); ?></h1>
				<?php } ?>
				<?php if(isset($mainSubheading)) { ?>
					<h2 class="dk_subheading"><?php echo $mainSubheading; ?></h2>
				<?php } ?>
				<!-- <h2 class="dk_subheading">Subheading Goes Here</h2> -->
				<div class="dk_maincontent">
					<?php the_content() ?>
				</div>
				<div class="dk_clearfix">
			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</section>
	<section class="dk_secondary_callouts">
		<div class="dk_flexcontainer_wide">
			<div class="dk_callout one">
				<a href="<?php echo $calloutOneLink; ?>" title="<?php echo $calloutOneText; ?>">
					<div class="dk_img">
						<img src="<?php echo $calloutOneImg ?>" alt="<?php echo $calloutOneImgAlt ?>">
					</div>
					<div class="dk_text">
						<h2><?php echo $calloutOneText; ?></h2>
					</div>
				</a>
			</div>
			<div class="dk_callout two">
				<a href="<?php echo $calloutTwoLink; ?>" title="<?php echo $calloutTwoText; ?>">
					<div class="dk_img">
						<img src="<?php echo $calloutTwoImg ?>" alt="<?php echo $calloutTwoImgAlt ?>">
					</div>
					<div class="dk_text">
						<h2><?php echo $calloutTwoText; ?></h2>
					</div>
				</a>
			</div>
			<div class="dk_callout three">
				<a href="<?php echo $calloutThreeImg; ?>" title="<?php echo $calloutThreeText; ?>">
					<div class="dk_img">
						<img src="<?php echo $calloutThreeImg ?>" alt="<?php echo $calloutThreeImgAlt ?>">
					</div>
					<div class="dk_text">
						<h2><?php echo $calloutThreeText; ?></h2>
					</div>
				</a>
			</div>
		</div>
	</section>
</div> <!-- end #content dk_home -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>
