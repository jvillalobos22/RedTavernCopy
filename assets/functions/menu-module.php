<?php
function get_menu_module() {
    // Eventually, only run this function on menu Pages

    // get Brunch Menu
    $brunchargs = array(
        'post_type' => 'brunch_menu',
        'orderby' => 'menu_order',
        'posts_per_page' => -1
    );
    $brunch = new WP_Query( $brunchargs );

    // get Dinner Menu
    $dinnerargs = array(
        'post_type' => 'dinner_menu',
        'orderby' => 'menu_order',
        'posts_per_page' => -1
    );
    $dinner = new WP_Query( $dinnerargs );

    // get Happy Hour Menu
    $happyhourargs = array(
        'post_type' => 'happy_hour_menu',
        'orderby' => 'menu_order',
        'posts_per_page' => -1
    );
    $happyhour = new WP_Query( $happyhourargs );

    // get Wine List Menu
    $wineargs = array(
        'post_type' => 'wine_list_menu',
        'orderby' => 'menu_order',
        'posts_per_page' => -1
    );
    $wine = new WP_Query( $wineargs );


    // to json
    $jsonBrunch = json_decode( json_encode( $brunch ), true );
    $jsonDinner = json_decode( json_encode( $dinner ), true );
    $jsonHappyHour = json_decode( json_encode( $happyhour ), true );
    $jsonWine = json_decode( json_encode( $wine ), true );
    // register external JS
    // wp_register_script( 'some_handle', 'assets/js/menu-module.js' );

    // enqueue our external JS
    wp_enqueue_script( 'menu-module-js', get_template_directory_uri() . '/assets/js/menu-module.js' );

    // make json accesible within enqueued JS
    wp_localize_script( 'menu-module-js', 'brunch', $jsonBrunch );
    wp_localize_script( 'menu-module-js', 'dinner', $jsonDinner );
    wp_localize_script( 'menu-module-js', 'happyhour', $jsonHappyHour );
    wp_localize_script( 'menu-module-js', 'wine', $jsonWine );
}
add_action( 'wp_enqueue_scripts', 'get_menu_module' );

?>
