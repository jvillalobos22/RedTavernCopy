<?php
/* joints Custom Post Type Example
This page walks you through creating
a custom post type and taxonomies. You
can edit this one or copy the following code
to create another one.

I put this in a separate file so as to
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/

// let's create the function for the custom type
function custom_post_events() {
	// creating (registering) the custom type
	register_post_type( 'event', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Events', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Event', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Events', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Event', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Event', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Event', 'jointswp'), /* New Display Title */
			'view_item' => __('View Event', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Events', 'jointswp'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'These are the events that show up on the events page.', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 10, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-calendar-alt', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'event', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical ' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */

	/* this adds your post categories to your custom post type
	register_taxonomy_for_object_type('category', 'testimonial');
	/* this adds your post tags to your custom post type
	register_taxonomy_for_object_type('post_tag', 'testimonial');*/
}

// adding the function to the Wordpress init
add_action( 'init', 'custom_post_events');

/*
	looking for custom meta boxes?
	check out this fantastic tool:
	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
*/

/* Custom meta boxes for Homepage Slides */
function add_events_meta_box() {
	add_meta_box(
		'events_meta_box', // $id
		'Event Fields', // $title
		'show_events_meta_box', // $callback
		'event', // $screen
		'normal', // $context
		'high' // $priority
	);
}
add_action( 'add_meta_boxes', 'add_events_meta_box' );

function show_events_meta_box() {
	global $post;
	$meta = get_post_meta( $post->ID, 'event', true ); ?>
	<div class="dk_meta_editor">
		<input type="hidden" name="events_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

        <div class="dk_option_group">
            <label for="event[event-image]">Image</label>
            <img class="dk-img-preview" src="<?php if ( isset ( $meta['event-image'] ) ) echo $meta['event-image']; ?>" />
            <input type="button" class="button button-secondary dk_imgbtn" value="Upload/Edit Image" >
            <input type="hidden" class="dk-img-upload" name="event[event-image]" id="event[event-image]" value="<?php if ( isset ( $meta['event-image'] ) ) echo $meta['event-image']; ?>">
        </div>
		<!-- All fields will go here -->
		<label for="event[event-date]">Date of Event</label>
        <input type="date" name="event[event-date]" id="event[event-date]" class="regular-text" value="<?php if ( isset ( $meta['event-date'] ) ) echo $meta['event-date']; ?>">

        <label for="event[event-description]">Event Description</label>
        <textarea name="event[event-description]" id="event[event-description]" rows="8" cols="70" style="width: 100%; max-width: 550px;"><?php if ( isset ( $meta['event-description'] ) ) echo $meta['event-description']; ?></textarea>
	</div>
	<?php
}

function save_events_meta( $post_id ) {
	// verify nonce
	if ( !wp_verify_nonce( $_POST['events_meta_box_nonce'], basename(__FILE__) ) ) {
		return $post_id;
	}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if ( 'page' === $_POST['event'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}
	}

	$old = get_post_meta( $post_id, 'event', true );
	$new = $_POST['event'];

	if ( $new && $new !== $old ) {
		update_post_meta( $post_id, 'event', $new );
	} elseif ( '' === $new && $old ) {
		delete_post_meta( $post_id, 'event', $old );
	}
}
add_action( 'save_post', 'save_events_meta' );
