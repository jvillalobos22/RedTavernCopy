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

	// Submenu Pages
	add_submenu_page( 'dk_settings', 'Header Options', 'Header Options', 'manage_options', 'dk_settings', 'dk_create_page');
	add_submenu_page( 'dk_settings', 'Secondary Pages', 'Secondary Pages', 'manage_options', 'secondary_page_settings', 'dk_secondary_create_page');
	add_submenu_page( 'dk_settings', 'Social Media', 'Social Media', 'manage_options', 'social_media_settings', 'dk_socialmedia_create_page');
	//Activate custom settings
	add_action( 'admin_init', 'dk_custom_options');

}
add_action( 'admin_menu', 'dk_add_sidebar_page');


function dk_custom_options() {
	// # Register Settings
	// ## Header/Hero Fields
	register_setting( 'dk-header-group', 'header_phone');
	register_setting( 'dk-header-group', 'header_address');
	register_setting( 'dk-header-group', 'secpage_hero_img');

	// ## Secondary Page Fields
	// ### Callout One
    register_setting( 'dk-secondary-group', 'sec_callout_one_image');
    register_setting( 'dk-secondary-group', 'sec_callout_one_image_alt');
    register_setting( 'dk-secondary-group', 'sec_callout_one_text');
    register_setting( 'dk-secondary-group', 'sec_callout_one_link');
	// ### Callout Two
    register_setting( 'dk-secondary-group', 'sec_callout_two_image');
    register_setting( 'dk-secondary-group', 'sec_callout_two_image_alt');
    register_setting( 'dk-secondary-group', 'sec_callout_two_text');
    register_setting( 'dk-secondary-group', 'sec_callout_two_link');
	// ### Callout Three
    register_setting( 'dk-secondary-group', 'sec_callout_three_image');
    register_setting( 'dk-secondary-group', 'sec_callout_three_image_alt');
    register_setting( 'dk-secondary-group', 'sec_callout_three_text');
    register_setting( 'dk-secondary-group', 'sec_callout_three_link');

	// ## Social Media Fields
	register_setting( 'dk-social-group', 'social_facebook');
	register_setting( 'dk-social-group', 'social_instagram');
	register_setting( 'dk-social-group', 'social_twitter');
	register_setting( 'dk-social-group', 'social_tripadvisor');
	register_setting( 'dk-social-group', 'social_yelp');

	// Register Settings Section
	add_settings_section( 'dk-header-options', 'Edit Header Options', 'dk_header_settings', 'dk_settings');
	add_settings_section( 'dk-secondary-callouts-options', 'Edit Secondary Page Callouts', 'dk_secondary_callout_settings', 'secondary_page_settings');
	add_settings_section( 'dk-social-media-settings', 'Social Media Accounts', 'dk_social_media_settings', 'social_media_settings');

	// Register Settings Fields
	add_settings_field( 'header-options', 'Header Options', 'dk_header_settings_fields', 'dk_settings', 'dk-header-options' );
	add_settings_field( 'secondary-page-options', 'Secondary Page Options', 'dk_secondary_callout_fields', 'secondary_page_settings', 'dk-secondary-callouts-options' );
	add_settings_field( 'social-media-options', 'Accounts', 'dk_social_media_fields', 'social_media_settings', 'dk-social-media-settings' );
}

// Add Messages Above Settings
function dk_header_settings() {
	// echo '<p style="max-width: 800px">Adjust options for the header.</p>';
}

function dk_secondary_callout_settings() {
	echo '<p style="max-width: 800px">Edit the callouts that show up at the bottom of secondary pages like the About page or Private Parties page.</p>';
}

function dk_social_media_settings() {
	// echo '<p style="max-width: 800px">This controls the links for social media accounts across the site.</p>';
}

// Show Fields in Setting Sections
function dk_header_settings_fields() {
	// Generate Header Options Fields
	require_once( get_template_directory() . '/assets/snippets/options-fields-header.php' );
}

function dk_secondary_callout_fields() {
	// Generate Secondary Page Options Fields
	require_once( get_template_directory() . '/assets/snippets/options-fields-secondary-page.php' );
}

function dk_social_media_fields() {
	// Generate Social Media Options Fields
	require_once( get_template_directory() . '/assets/snippets/options-fields-social-media.php' );
}

// Create Page Templates
function dk_create_page() {
	// Generate Header Options Subpage
	require_once( get_template_directory() . '/assets/templates/dk-options-template.php' );
}

function dk_socialmedia_create_page() {
	// Generate Social Media Subpage
	require_once( get_template_directory() . '/assets/templates/social-media-settings-template.php' );
}

function dk_secondary_create_page() {
	// Generate Secondary Pages Subpage
	require_once( get_template_directory() . '/assets/templates/secondary-page-settings-template.php' );
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
