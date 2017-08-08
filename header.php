<!doctype html>
<?php
$images_directory = get_template_directory_uri().'/assets/images';
// echo '$images_directory = '.$images_directory;

?>
  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- Google Fonts for Petit Formal Script and Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Petit+Formal+Script|Roboto:300,400" rel="stylesheet">
    <!-- Typekit Fonts -->
    <script src="https://use.typekit.net/zlw8apj.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

	<!-- Uncomment this line if using the Off-Canvas Menu -->

	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">

			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

			<div class="off-canvas-content" data-off-canvas-content>
                <?php
                global $post;
                if(!empty($post)) {
                    $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
                    $post_slug = $post->post_name;
                }
                // Get Header Fields
                if($pageTemplate == 'template-homepage.php') {
                    $homeHeaderMeta = get_post_meta( $post->ID, 'homepage', true );

                    $heroImageLg = $homeHeaderMeta['home-hero-image-lg'];
                    $heroImageMd = $homeHeaderMeta['home-hero-image-md'];
                    $heroImageSm = $homeHeaderMeta['home-hero-image-sm'];
                    $homeHeroCaption = $homeHeaderMeta['hero-caption'];
                }

                $secPageHeroImg = esc_attr( get_option( 'secpage_hero_img' ) );
                $headerPhone = esc_attr( get_option( 'header_phone' ) );
                $headerPhoneClean = preg_replace("/[^0-9]/","",$headerPhone);
                $headerAddr = esc_attr( get_option( 'header_address' ) );
                // echo '<code>$pageTemplate = '.$pageTemplate.'</code>';
                // echo '<code>$post_slug = '.$post_slug.'</code>';
                ?>
                <div class="dk_hero <?php if($pageTemplate == 'template-homepage.php') { ?>dk_homehero<?php } else { ?>dk_sechero<?php } ?>" <?php if($pageTemplate != 'template-homepage.php') { echo 'style="background-image:url('.$secPageHeroImg.');"'; } ?>>
                    <div class="dk_herobar">
                        <div class="dk_leftbox">
                            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/redtavern-logo.png" alt="<?php bloginfo('name'); ?> Logo"></a>
                        </div><!--
                        --><div class="dk_rightbox">
                            <span><a href="tel:+1<?php echo $headerPhoneClean ?>"><?php echo $headerPhone; ?></a>
                            <?php echo $headerAddr; ?></span>
                        </div>
                    </div>
                    <?php if($pageTemplate == 'template-homepage.php') { ?>
                        <div class="dk_caption">
                            <?php if ($homeHeroCaption) { ?>
                                <h2><?php echo $homeHeroCaption ?></h2>
                            <?php } else { ?>
                                <h2>Please Set a Caption for this heading</h2>
                            <?php } ?>
                        </div>
                        <img data-interchange="[<?php echo $heroImageSm; ?>, small], [<?php echo $heroImageMd; ?>, medium], [<?php echo $heroImageLg; ?>, large]" alt="Home Page Hero">
                    <?php } ?>
                </div>
				<header class="header" role="banner">

					 <!-- This navs will be applied to the topbar, above all content
						  To see additional nav styles, visit the /parts directory -->
					 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>

				</header> <!-- end .header -->
