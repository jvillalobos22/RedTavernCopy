<?php
/*

Dinner Menu Custom Post Type

I put this in a separate file so as to
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/

// let's create the function for the custom type
function custom_post_dinner_menus() {
	// creating (registering) the custom type
	register_post_type( 'dinner_menu', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Dinner Menu', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Dinner Menu', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Dinner Menus', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Dinner Menu', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Dinner Menus', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Dinner Menu', 'jointswp'), /* New Display Title */
			'view_item' => __('View Dinner Menu', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Dinner Menus', 'jointswp'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Each menu corresponds to a section on the Dinner menu.', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 5, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-feedback', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'dinner-menu', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical ' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'revisions')
	 	) /* end of options */
	); /* end of register post type */

	/* this adds your post tags to your custom post type */
	// register_taxonomy_for_object_type('post_tag', 'dinner_menu');
}

// adding the function to the Wordpress init
add_action( 'init', 'custom_post_dinner_menus');
