<?php
/*
Template Name: Reservations Page
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
				<?php if(isset($mainHeading) && $mainHeading) { ?>
					<h1><?php echo $mainHeading; ?></h1>
				<?php } else { ?>
					<h1><?php echo the_title(); ?></h1>
				<?php } ?>
				<?php if(isset($mainSubheading)) { ?>
					<h2 class="dk_subheading"><?php echo $mainSubheading; ?></h2>
				<?php } ?>
				<div class="dk_maincontent">
					<?php the_content() ?>
				</div>
				<div class="dk_reservations">
					<!-- Start Livebookings Direct Code -->
					<script type="text/javascript" src="https://secure.livebookings.com/LBDirect/Assets/Scripts/LBDirectDeploy.js"></script>
					<script type="text/javascript">LBDirect_Embed({
					 connectionid: "US-RES-THEREDTAVERN_415090:90804",
					 language: "en-US"
					});</script>
					<!-- End Livebookings Direct Code -->
				</div>
				<div class="dk_clearfix">
			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</section>
	<?php require_once(get_template_directory().'/assets/snippets/get-dk-sidebar.php'); ?>
</div> <!-- end #content dk_home -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>
