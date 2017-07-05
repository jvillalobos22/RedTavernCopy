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
function custom_post_testimonials() {
	// creating (registering) the custom type
	register_post_type( 'testimonial', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Testimonials', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Testimonial', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Testimonials', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Testimonial', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Testimonial', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Testimonial', 'jointswp'), /* New Display Title */
			'view_item' => __('View Testimonial', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Testimonials', 'jointswp'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'These are the testimonials that show up on the home page above the footer.', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 10, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-format-quote', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'testimonial', 'with_front' => false ), /* you can specify its url slug */
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
add_action( 'init', 'custom_post_testimonials');

/*
	looking for custom meta boxes?
	check out this fantastic tool:
	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
*/

/* Custom meta boxes for Homepage Slides */
function add_testimonials_meta_box() {
	add_meta_box(
		'testimonials_meta_box', // $id
		'Testimonial Fields', // $title
		'show_testimonials_meta_box', // $callback
		'testimonial', // $screen
		'normal', // $context
		'high' // $priority
	);
}
add_action( 'add_meta_boxes', 'add_testimonials_meta_box' );

function show_testimonials_meta_box() {
	global $post;
	$meta = get_post_meta( $post->ID, 'testimonial', true ); ?>
	<div class="dk_meta_editor">
		<input type="hidden" name="testimonials_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

		<!-- All fields will go here -->
		<label for="testimonial[testimonial-quote]">Testimonial Quote (Don't add quotations)</label>
        <textarea name="testimonial[testimonial-quote]" id="testimonial[testimonial-quote]" rows="8" cols="70" style="width: 100%; max-width: 450px;"><?php if ( isset ( $meta['testimonial-quote'] ) ) echo $meta['testimonial-quote']; ?></textarea>

        <label for="testimonial[testimonial-name]">Testimonial Name</label>
        <input type="text" name="testimonial[testimonial-name]" id="testimonial[testimonial-name]" class="regular-text" value="<?php if ( isset ( $meta['testimonial-name'] ) ) echo $meta['testimonial-name']; ?>">

		<label for="testimonial[testimonial-source]">Submitted Via</label>
		<input type="text" name="testimonial[testimonial-source]" id="testimonial[testimonial-source]" class="regular-text" value="<?php if ( isset ( $meta['testimonial-source'] ) ) echo $meta['testimonial-source']; ?>">
	</div>
	<?php
}

function save_testimonials_meta( $post_id ) {
	// verify nonce
	if ( !wp_verify_nonce( $_POST['testimonials_meta_box_nonce'], basename(__FILE__) ) ) {
		return $post_id;
	}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if ( 'page' === $_POST['testimonial'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}
	}

	$old = get_post_meta( $post_id, 'testimonial', true );
	$new = $_POST['testimonial'];

	if ( $new && $new !== $old ) {
		update_post_meta( $post_id, 'testimonial', $new );
	} elseif ( '' === $new && $old ) {
		delete_post_meta( $post_id, 'testimonial', $old );
	}
}
add_action( 'save_post', 'save_testimonials_meta' );
