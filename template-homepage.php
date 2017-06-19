<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<div id="content" class="dk_home">
	<section class="dk_homemain">
		<div id="inner-content" class="row">
			<div class="large-3 medium-4 small-12 columns">
				<!-- <img src="" -->
			</div>
			<main id="main" class="large-9 medium-8 small-12 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>

				<?php endwhile; endif; ?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->
	</section>
	<section class="dk_home_callouts">
		<div class="row">

		</div>
	</section>

</div> <!-- end #content -->


<?php get_footer(); ?>
