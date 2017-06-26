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
                    <?php
                    // Show Menu Nav List
                    joints_foodmenu_links() ?>
                </div>
			</div>
			<main id="main" class="large-9 medium-8 small-12 columns" role="main">
                <?php
                    global $post;

                    if(!empty($post)) {
                        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
                        $post_slug = $post->post_name;
                    }

                    switch($post_slug) {
                        case 'brunch-menu':
                            $postType = 'brunch_menu';
                            break;
                        case 'dinner-menu':
                            $postType = 'dinner_menu';
                            break;
                        case 'happy-hour':
                            $postType = 'happy_hour';
                            break;
                        case 'wine-list':
                            $postType = 'wine-list';
                            break;
                    }

                    echo '<code>$postType = '.$postType.'</code>';
					$args = array(
						'post_type' => 'brunch_menu',
						'orderby' => 'menu_order',
						'posts_per_page' => -1
					);

					$brunch = new WP_Query( $args );
					if ( $brunch->have_posts() ) : while ( $brunch->have_posts() ) : $brunch->the_post();
						//$meta = get_post_meta( $post->ID, 'pickup_locations', true );
				?>
                    <h2><?php echo get_the_title(); ?></h2>
                    <hr class="dk_redhr">
                    <div class="dk_menuitems">
                        <?php the_content() ?>
                    </div>
				<?php endwhile; endif; ?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->
	</section>

</div> <!-- end #content dk_home -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>
