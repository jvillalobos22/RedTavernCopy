<?php
/*
Template Name: Events Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();
	require_once(get_template_directory().'/assets/snippets/get-secpage-fields.php');
?>

<div id="content" class="dk_secondary dk_eventspage">
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
			</main> <!-- end #main -->
			<div class="large-12 columns dk_hr_rooster">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rooster-icon.png" alt="Red Tavern Rooster Icon">
				<hr>
			</div>
			<div class="large-12 medium-12 small-12 columns">
				<div class="dk_events_calendar">
					<?php
						$args = array(
							'post_type' => 'event',
							'orderby' => 'event-date',
							'order' => 'ASC',
							'posts_per_page' => -1
						);

						$events = new WP_Query( $args );

						if ( $events->have_posts() ) : ?>
						<ul>
						<?php while ( $events->have_posts() ) : $events->the_post();
							$eventmeta = get_post_meta( $post->ID, 'event', true );
							$eventDate = date_create($eventmeta['event-date']);
						?>
							<li class="dk_event">
								<img src="<?php echo $eventmeta['event-image']; ?>" alt="addalt">
								<div class="dk_body">
									<h3><?php echo the_title() ?></h3>
									<span class="dk_date"><?php echo date_format($eventDate,"F j"); ?></span>
									<p><?php echo $eventmeta['event-description']; ?></p>
								</div>
							</li>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
		</div> <!-- end #inner-content -->
	</section>
	<?php require_once(get_template_directory().'/assets/snippets/get-dk-sidebar.php'); ?>
</div> <!-- end #content dk_home -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>
