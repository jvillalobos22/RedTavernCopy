<?php
/*
 * dk-options.php
 *
 * Created by Juan Villalobos
 * @juanlobos22 | juanvillalobos.me
 * DK Web Design
 *
 * This file is included in functions.php to add
 * custom fields to the secondary page template.
 *
 * I put this in a separate file so as to
 * keep it organized. I find it easier to edit
 * and change things if they are concentrated
 * in their own file.
*/

// Add custom DK admin options area
function dk_add_sidebar_page() {

	// Generate DK Options Page
	add_menu_page( 'Dk Settings', 'Dk Settings', 'manage_options', 'dk_settings', 'dk_create_page', 'dashicons-admin-generic' , 110 );

	//Activate custom settings
	add_action( 'admin_init', 'dk_custom_options');

}
add_action( 'admin_menu', 'dk_add_sidebar_page');

function dk_custom_options() {
	// Register Settings
    register_setting( 'dk-settings-group', 'sec_callout_one_image');
    register_setting( 'dk-settings-group', 'sec_callout_one_image_alt');
    register_setting( 'dk-settings-group', 'sec_callout_one_text');
    register_setting( 'dk-settings-group', 'sec_callout_one_link');

    register_setting( 'dk-settings-group', 'sec_callout_two_image');
    register_setting( 'dk-settings-group', 'sec_callout_two_image_alt');
    register_setting( 'dk-settings-group', 'sec_callout_two_text');
    register_setting( 'dk-settings-group', 'sec_callout_two_link');

    register_setting( 'dk-settings-group', 'sec_callout_three_image');
    register_setting( 'dk-settings-group', 'sec_callout_three_image_alt');
    register_setting( 'dk-settings-group', 'sec_callout_three_text');
    register_setting( 'dk-settings-group', 'sec_callout_three_link');

	// register_setting( 'dk-settings-group', 'recent_issue_link');
	// register_setting( 'dk-settings-group', 'about_text');
    // register_setting( 'dk-settings-group', 'about_link_url');

	// Register Settings Section
	add_settings_section( 'dk-secondary-callouts-options', 'Edit Secondary Page Callouts', 'dk_secondary_callout_settings', 'dk_settings');
	// add_settings_section( 'dk-social-media-settings', 'Edit Default Sidebar', 'dk_social_media_settings', 'dk_settings');

	// Register Settings Fields
    add_settings_field( 'secondary-callouts', 'Secondary Page Callouts', 'dk_secondary_callouts', 'dk_settings', 'dk-secondary-callouts-options' );
	// add_settings_field( 'social-media-links', 'Default Sidebar Featured Business', 'dk_social_media_links', 'dk_settings', 'dk-social-media-settings' );
}

 // Add Messages Above Settings
function dk_secondary_callout_settings() {
	echo '<p style="max-width: 800px">Edit the callouts that show up at the bottom of secondary pages like the About page or Private Parties page.</p>';
}

function dk_social_media_settings() {
	echo '<p style="max-width: 800px">This controls the links for social media accounts across the site.</p>';
}

 // Show Fields in Setting Sections
function dk_secondary_callouts() {
    // Callout One
    echo '<div class="dk_option_group">';
    echo '<h2>Callout One</h2>';


	$secCalloutOneImg = esc_attr( get_option( 'sec_callout_one_image' ) );
    echo'<img class="dk-img-preview" src="'.$secCalloutOneImg.'" />';
    echo '<input type="button" class="button button-secondary dk_imgbtn" value="Upload/Edit Image" id="dk-img-upload-btn" >';
    echo '<input type="hidden" class="dk-img-upload" name="sec_callout_one_image" value="'.$secCalloutOneImg.'">';



    $secCalloutOneImgAlt = esc_attr( get_option( 'sec_callout_one_image_alt' ) );
    echo '<input type="text" name="sec_callout_one_image_alt" value="'.$secCalloutOneImgAlt.'" placeholder="Callout One Image Alt Tag">';

	$secCalloutOneText = esc_attr( get_option( 'sec_callout_one_text' ) );
	echo '<input type="text" name="sec_callout_one_text" value="'.$secCalloutOneText.'" placeholder="Callout One Text">';

	$secCalloutOneLink = esc_attr( get_option( 'sec_callout_one_link' ) );
	echo '<input type="text" name="sec_callout_one_link" value="'.$secCalloutOneLink.'" placeholder="Callout One Link">';
    echo '</div>';

    // Callout Two
    echo '<div class="dk_option_group">';
    echo '<h2>Callout Two</h2>';


	$secCalloutTwoImg = esc_attr( get_option( 'sec_callout_two_image' ) );
    echo'<img class="dk-img-preview" src="'.$secCalloutTwoImg.'" />';
    echo '<input type="button" class="button button-secondary dk_imgbtn" value="Upload/Edit Image" id="dk-img-upload-btn" >';
    echo '<input type="hidden" class="dk-img-upload" name="sec_callout_two_image" value="'.$secCalloutTwoImg.'">';



    $secCalloutTwoImgAlt = esc_attr( get_option( 'sec_callout_two_image_alt' ) );
    echo '<input type="text" name="sec_callout_two_image_alt" value="'.$secCalloutTwoImgAlt.'" placeholder="Callout Two Image Alt Tag">';

	$secCalloutTwoText = esc_attr( get_option( 'sec_callout_two_text' ) );
	echo '<input type="text" name="sec_callout_two_text" value="'.$secCalloutTwoText.'" placeholder="Callout Two Text">';

	$secCalloutTwoLink = esc_attr( get_option( 'sec_callout_two_link' ) );
	echo '<input type="text" name="sec_callout_two_link" value="'.$secCalloutTwoLink.'" placeholder="Callout Two Link">';
    echo '</div>';

    // Callout Three
    echo '<div class="dk_option_group">';
    echo '<h2>Callout Three</h2>';
	$secCalloutThreeImg = esc_attr( get_option( 'sec_callout_three_image' ) );
    echo'<img class="dk-img-preview" src="'.$secCalloutThreeImg.'" />';
    echo '<input type="button" class="button button-secondary dk_imgbtn" value="Upload/Edit Image" id="dk-img-upload-btn" >';
    echo '<input type="hidden" class="dk-img-upload" name="sec_callout_three_image" value="'.$secCalloutThreeImg.'"';

    $secCalloutThreeImgAlt = esc_attr( get_option( 'sec_callout_three_image_alt' ) );
    echo '<input type="text" name="sec_callout_three_image_alt" value="'.$secCalloutThreeImgAlt.'" placeholder="Callout Three Image Alt Tag">';

	$secCalloutThreeText = esc_attr( get_option( 'sec_callout_three_text' ) );
	echo '<input type="text" name="sec_callout_three_text" value="'.$secCalloutThreeText.'" placeholder="Callout Three Text">';

	$secCalloutThreeLink = esc_attr( get_option( 'sec_callout_three_link' ) );
	echo '<input type="text" name="sec_callout_three_link" value="'.$secCalloutThreeLink.'" placeholder="Callout Three Link">';
    echo '</div>';
}

// function dk_social_media_links() {
// 	echo '<div class="dk_checkboxes">';
// 	// Recent Issue Checkbox
// 	echo '<label>';
// 	$checkbox_value = esc_attr( get_option( 'default_sidebar_featured_biz' ) );
// 	if($checkbox_value == "") {
// 		echo '<input name="default_sidebar_featured_biz" type="checkbox" value="true">';
// 	} else if($checkbox_value == "true") {
// 		echo '<input name="default_sidebar_featured_biz" type="checkbox" value="true" checked>';
// 	}
// 	echo 'Use Featured Business Widget?</label>';
//
// 	$defaultFeaturedBizImage = esc_attr( get_option( 'default_sidebar_featured_biz_image' ) );
//     echo '<input type="text" name="default_sidebar_featured_biz_image" value="'.$defaultFeaturedBizImage.'" placeholder="Featured Business Image URL">';
//
// 	$defaultFeaturedBizName = esc_attr( get_option( 'default_sidebar_featured_biz_name' ) );
// 	echo '<input type="text" name="default_sidebar_featured_biz_name" value="'.$defaultFeaturedBizName.'" placeholder="Featured Business Name">';
//
// 	$defaultFeaturedBizLink = esc_attr( get_option( 'default_sidebar_featured_biz_link' ) );
// 	echo '<input type="text" name="default_sidebar_featured_biz_link" value="'.$defaultFeaturedBizLink.'" placeholder="Featured Business Link URL">';
// }

// Show Section Fields
// function dk_default_sidebar() {
// 	echo '<div class="dk_checkboxes">';
// 	// Recent Issue Checkbox
// 	echo '<label>';
// 	$checkbox_value = esc_attr( get_option( 'default_sidebar_recent_issue' ) );
// 	if($checkbox_value == "") {
// 		echo '<input name="default_sidebar_recent_issue" type="checkbox" value="true">';
// 	} else if($checkbox_value == "true") {
// 		echo '<input name="default_sidebar_recent_issue" type="checkbox" value="true" checked>';
// 	}
// 	echo 'Recent Issue</label>';
//
// 	//Newsletter Sign Up Checkbox
// 	echo '<label>';
// 	$checkbox_value = esc_attr( get_option( 'default_sidebar_newsletter' ) );
// 	if($checkbox_value == "") {
// 		echo '<input name="default_sidebar_newsletter" type="checkbox" value="true">';
// 	} else if($checkbox_value == "true") {
// 		echo '<input name="default_sidebar_newsletter" type="checkbox" value="true" checked>';
// 	}
// 	echo 'Newsletter Sign Up</label>';
//
// }

// Call Page Template
function dk_create_page() {
	//generation of our admin page
	require_once( get_template_directory() . '/assets/templates/dk-options-template.php' );
}
