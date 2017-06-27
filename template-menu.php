<?php
/*
Template Name: Menu Page Template
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();
	// require_once(get_template_directory().'/assets/snippets/get-homepage-fields.php');
	// echo '<code>$heroCaption = '.$heroCaption.'</code>';
	// $variable = $homeMeta['field'];
?>

<div id="content" class="dk_menu">
	<section class="dk_main">
		<div id="inner-content" class="row">
			<div class="large-3 medium-4 small-12 columns dk_menu_nav">
                <div class="dk_innerborder">
                    <h1>Menus</h1>
					<ul class="foodmenu">
						<li><a id="brunchLink">Brunch</a></li>
						<li><a id="dinnerLink">Dinner</a></li>
						<li><a id="happyLink">Happy Hour</a></li>
						<li><a id="wineLink">Wine List</a></li>
					</ul>
                </div>
			</div>
			<main id="main" class="large-9 medium-8 small-12 columns" role="main">
				<div id="dkMenuDisplay">
					<!-- menu-module.js will populate the menu here -->
				</div>
			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</section>
</div> <!-- end #content dk_home -->

<?php
endwhile; endif;
get_footer(); ?>
