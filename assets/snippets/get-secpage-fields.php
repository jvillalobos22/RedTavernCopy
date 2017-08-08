<?php

$secMeta = get_post_meta( $post->ID, 'secpage', true );

$mainHeading = $secMeta['secpage-heading'];
$mainSubheading = $secMeta['secpage-subheading'];
$mainImg = $secMeta['secpage-maincontent-image'];
$mainImgAlt = $secMeta['secpage-maincontent-image-alt'];

$calloutOneImg = esc_attr( get_option( 'sec_callout_one_image' ) );
$calloutOneImgAlt = esc_attr( get_option( 'sec_callout_one_image_alt' ) );
$calloutOneText = esc_attr( get_option( 'sec_callout_one_text' ) );
$calloutOneLink = esc_attr( get_option( 'sec_callout_one_link' ) );

$calloutTwoImg = esc_attr( get_option( 'sec_callout_two_image' ) );
$calloutTwoImgAlt = esc_attr( get_option( 'sec_callout_two_image_alt' ) );
$calloutTwoText = esc_attr( get_option( 'sec_callout_two_text' ) );
$calloutTwoLink = esc_attr( get_option( 'sec_callout_two_link' ) );

$calloutThreeImg = esc_attr( get_option( 'sec_callout_three_image' ) );
$calloutThreeImgAlt = esc_attr( get_option( 'sec_callout_three_image_alt' ) );
$calloutThreeText = esc_attr( get_option( 'sec_callout_three_text' ) );
$calloutThreeLink = esc_attr( get_option( 'sec_callout_three_link' ) );
?>
