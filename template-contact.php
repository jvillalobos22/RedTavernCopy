<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();
	require_once(get_template_directory().'/assets/snippets/get-secpage-fields.php');
	require_once(get_template_directory().'/assets/snippets/get-contact-fields.php');
?>

<div id="content" class="dk_secondary dk_contactpage">
	<section class="dk_main dk_secmain">
		<div id="inner-content" class="row">
			<div class="large-12 columns">
				<?php if(isset($mainHeading) && $mainHeading) { ?>
					<h1><?php echo $mainHeading; ?></h1>
				<?php } else { ?>
					<h1><?php echo the_title(); ?></h1>
				<?php } ?>
				<?php if(isset($mainSubheading)) { ?>
					<h2 class="dk_subheading"><?php echo $mainSubheading; ?></h2>
				<?php } ?>
				<hr class="dk_redhr">
			</div>
			<div class="large-4 medium-5 small-12 columns dk_contactinfo">
				<?php if(isset($contactPhone) && $contactPhone) { ?>
				<p><strong>Phone: </strong><a href="tel:+1<?php echo $contactPhoneClean; ?>"><?php echo $contactPhone; ?></a></p>
				<?php } ?>
				<?php if(isset($contactAddress) && $contactAddress) { ?>
				<p><strong>Address: </strong><address><?php echo $contactAddress; ?></address></p>
				<?php } ?>
				<strong>Hours: </strong><br>
				<ul>
					<li>Monday <?php echo $mondayHours; ?></li>
					<li>Tuesday <?php echo $tuesdayHours; ?></li>
					<li>Wednesday <?php echo $wednesdayHours; ?></li>
					<li>Thursday <?php echo $thursdayHours; ?></li>
					<li>Friday <?php echo $fridayHours; ?></li>
					<li>Saturday <?php echo $saturdayHours; ?></li>
					<li>Sunday <?php echo $sundayHours; ?></li>
				</ul>
			</div>
			<main id="main" class="large-8 medium-7 small-12 columns" role="main">
				<div class="dk_maincontent">
					<?php the_content() ?>
				</div>
				<div class="dk_clearfix">
			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</section>
	<?php require_once(get_template_directory().'/assets/snippets/get-dk-sidebar.php'); ?>
</div> <!-- end #content dk_home -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>
