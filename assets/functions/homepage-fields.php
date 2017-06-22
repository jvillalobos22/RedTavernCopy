<?php
/*
 * homepage-fields.php
 *
 * Created by Juan Villalobos
 * @juanlobos22 | juanvillalobos.me
 * DK Web Design
 *
 * This file is included in functions.php to add
 * custom fields to the homepage template.
 *
 * I put this in a separate file so as to
 * keep it organized. I find it easier to edit
 * and change things if they are concentrated
 * in their own file.
*/

/* Custom meta boxes for Homepage Template */
function add_homepage_meta_box() {
    global $post;

    if(!empty($post)) {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

        if($pageTemplate == 'template-homepage.php' ) {
            add_meta_box(
        		'homepage_meta_box', // $id
        		'Homepage Template Fields', // $title
        		'show_homepage_meta_box', // $callback
        		'page', // $screen
        		'normal', // $context
        		'high' // $priority
        	);
        }
    }
}
add_action( 'add_meta_boxes', 'add_homepage_meta_box' );

function show_homepage_meta_box() {
	global $post;
	$meta = get_post_meta( $post->ID, 'homepage', true ); ?>
	<div class="dk_meta_editor">
		<input type="hidden" name="homepage_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

		<!-- All fields will go here -->
        <p>To change the main text below the headings on the homepage, just use the page editor above. Everything else on the page can be changed using the settings below.</p>
        <fieldset>
            <legend>Homepage Hero</legend>
            <!-- homepage[hero-caption] -->
            <label for="homepage[hero-caption]">Hero Caption</label>
            <input type="text" name="homepage[hero-caption]" id="homepage[hero-caption]" class="dk_full " value="<?php if ( isset ( $meta['hero-caption'] ) ) echo $meta['hero-caption']; ?>">
        </fieldset>
        <fieldset>
            <legend>Main Content Section</legend>
            <!-- homepage[homepage-heading] -->
            <label for="homepage[homepage-heading]">Homepage Main Heading</label>
    	    <input type="text" name="homepage[homepage-heading]" id="homepage[homepage-heading]" class="dk_full " value="<?php if ( isset ( $meta['homepage-heading'] ) ) echo $meta['homepage-heading']; ?>">
            <!-- homepage[homepage-subheading] -->
            <label for="homepage[homepage-subheading]">Homepage Subheading</label>
            <input type="text" name="homepage[homepage-subheading]" id="homepage[homepage-subheading]" class="dk_full " value="<?php if ( isset ( $meta['homepage-subheading'] ) ) echo $meta['homepage-subheading']; ?>">
            <!-- homepage[home-maincontent-image] -->
            <label for="homepage[home-maincontent-image]">Image Upload</label><small>Hint: You won't see the new image below until you click update</small>
            <input type="text" name="homepage[home-maincontent-image]" id="homepage[home-maincontent-image]" class="meta-image " value="<?php if ( isset ( $meta['home-maincontent-image'] ) ) echo $meta['home-maincontent-image']; ?>">
            <input type="button" class="button image-upload" value="Browse">
            <?php if ( isset ( $meta['home-maincontent-image'] ) ) { ?>
            <div class="image-preview"><img src="<?php echo $meta['home-maincontent-image']; ?>"></div>
            <?php } ?>
            <!-- homepage[home-maincontent-image-alt] -->
            <label for="homepage[home-maincontent-image-alt]">Image Alt Tag</label><small>Provide a brief description of the image. This is important for accesibility and SEO purposes.</small>
            <input type="text" name="homepage[home-maincontent-image-alt]" id="homepage[home-maincontent-image-alt]" class="" value="<?php if ( isset ( $meta['home-maincontent-image-alt'] ) ) echo $meta['home-maincontent-image-alt']; ?>">
        </fieldset>

        <fieldset class="dk_subsection_parent">
            <legend>Callout Cards Section</legend>
            <?php
                $cards = array('left', 'middle', 'right');

                foreach($cards as $card) { ?>
                    <div class="dk_subsection">
                        <h4>Callout Card <?php echo ucfirst($card); ?></h4>
                        <!-- card-x-heading -->
                        <label for="homepage[card-<?php echo $card; ?>-heading]">Heading</label>
                        <input type="text" name="homepage[card-<?php echo $card; ?>-heading]" id="homepage[card-<?php echo $card; ?>-heading]" class="" value="<?php if ( isset ( $meta['card-'.$card.'-heading'] ) ) echo $meta['card-'.$card.'-heading']; ?>">
                        <!-- card-x-image -->
                        <label for="homepage[card-<?php echo $card; ?>-image]">Image Upload</label>
                        <input type="text" name="homepage[card-<?php echo $card; ?>-image]" id="homepage[card-<?php echo $card; ?>-image]" class="meta-image " value="<?php if ( isset ( $meta['card-'.$card.'-image'] ) ) echo $meta['card-'.$card.'-image']; ?>">
                        <input type="button" class="button image-upload" value="Browse">
                        <?php if ( isset ( $meta['card-'.$card.'-image'] ) ) { ?>
                		<div class="image-preview"><img src="<?php echo $meta['card-'.$card.'-image']; ?>"></div>
                		<?php } ?>
                        <!-- card-x-imagealt -->
                        <label for="homepage[card-<?php echo $card; ?>-imagealt]">Image Alt Tag</label><small>Provide a brief description of the image. This is important for accesibility and SEO purposes.</small>
                        <input type="text" name="homepage[card-<?php echo $card; ?>-imagealt]" id="homepage[card-<?php echo $card; ?>-imagealt]" class="" value="<?php if ( isset ( $meta['card-'.$card.'-imagealt'] ) ) echo $meta['card-'.$card.'-imagealt']; ?>">
                        <!-- card-x-paragraph -->
                        <label for="homepage[card-<?php echo $card; ?>-paragraph]">Paragraph</label>
                        <textarea name="homepage[card-<?php echo $card; ?>-paragraph]" id="homepage[card-<?php echo $card; ?>-paragraph]" rows="5" cols="30"><?php if ( isset ( $meta['card-'.$card.'-paragraph'] ) ) echo $meta['card-'.$card.'-paragraph']; ?></textarea>
                        <!-- card-x-btntext -->
                        <label for="homepage[card-<?php echo $card; ?>-btntext]">Button Text</label>
                        <input type="text" name="homepage[card-<?php echo $card; ?>-btntext]" id="homepage[card-<?php echo $card; ?>-btntext]" class="" value="<?php if ( isset ( $meta['card-'.$card.'-btntext'] ) ) echo $meta['card-'.$card.'-btntext']; ?>">
                        <!-- card-x-btnlink -->
                        <label for="homepage[card-<?php echo $card; ?>-btnlink]">Button Link</label>
                        <input type="text" name="homepage[card-<?php echo $card; ?>-btnlink]" id="homepage[card-<?php echo $card; ?>-btnlink]" class="" value="<?php if ( isset ( $meta['card-'.$card.'-btnlink'] ) ) echo $meta['card-'.$card.'-btnlink']; ?>">
                    </div>
                <?php } ?>
        </fieldset>

        <fieldset class="dk_subsection_parent">
            <legend>Sunday Specials Section</legend>

            <?php
                $callouts = array('left', 'right');

                foreach($callouts as $callout) { ?>
                    <div class="dk_subsection">
                        <h4>Sunday Special <?php echo ucfirst($callout); ?></h4>
                        <!-- sunday-x-heading -->
                        <label for="homepage[sunday-<?php echo $callout; ?>-heading]">Heading</label>
                        <input type="text" name="homepage[sunday-<?php echo $callout; ?>-heading]" id="homepage[sunday-<?php echo $callout; ?>-heading]" class="" value="<?php if ( isset ( $meta['sunday-'.$callout.'-heading'] ) ) echo $meta['sunday-'.$callout.'-heading']; ?>">
                        <!-- sunday-x-subheading -->
                        <label for="homepage[sunday-'.$callout.'-subheading]">Subheading</label>
                        <input type="text" name="homepage[sunday-<?php echo $callout; ?>-subheading]" id="homepage[sunday-<?php echo $callout; ?>-subheading]" class="" value="<?php if ( isset ( $meta['sunday-'.$callout.'-subheading'] ) ) echo $meta['sunday-'.$callout.'-subheading']; ?>">
                        <!-- sunday-x-image -->
                        <label for="homepage[sunday-<?php echo $callout; ?>-image]">Image Upload</label>
                        <input type="text" name="homepage[sunday-<?php echo $callout; ?>-image]" id="homepage[sunday-<?php echo $callout; ?>-image]" class="meta-image " value="<?php if ( isset ( $meta['sunday-'.$callout.'-image'] ) ) echo $meta['sunday-'.$callout.'-image']; ?>">
                        <input type="button" class="button image-upload" value="Browse">
                        <?php if ( isset ( $meta['sunday-'.$callout.'-image'] ) ) { ?>
                		<div class="image-preview"><img src="<?php echo $meta['sunday-'.$callout.'-image']; ?>"></div>
                		<?php } ?>
                        <!-- sunday-x-imagealt -->
                        <label for="homepage[sunday-<?php echo $callout; ?>-imagealt]">Image Alt Tag</label><small>Provide a brief description of the image. This is important for accesibility and SEO purposes.</small>
                        <input type="text" name="homepage[sunday-<?php echo $callout; ?>-imagealt]" id="homepage[sunday-<?php echo $callout; ?>-imagealt]" class="" value="<?php if ( isset ( $meta['sunday-'.$callout.'-imagealt'] ) ) echo $meta['sunday-'.$callout.'-imagealt']; ?>">
                        <!-- sunday-x-paragraph -->
                        <label for="homepage[sunday-<?php echo $callout; ?>-paragraph]">Paragraph</label>
                        <textarea name="homepage[sunday-<?php echo $callout; ?>-paragraph]" id="homepage[sunday-<?php echo $callout; ?>-paragraph]" rows="5" cols="30"><?php if ( isset ( $meta['sunday-'.$callout.'-paragraph'] ) ) echo $meta['sunday-'.$callout.'-paragraph']; ?></textarea>
                    </div>
                <?php } ?>
        </fieldset>
	</div>
	<script>
	jQuery(document).ready(function ($) {

		// Instantiates the variable that holds the media library frame.
		var meta_image_frame;
		// Runs when the image button is clicked.
		$('.image-upload').click(function (e) {
			e.preventDefault();
			var meta_image = $(this).parent().children('.meta-image');

			// If the frame already exists, re-open it.
			if (meta_image_frame) {
				meta_image_frame.open();
				return;
			}
			// Sets up the media library frame
			meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
				title: meta_image.title,
				button: {
					text: meta_image.button
				}
			});
			// Runs when an image is selected.
			meta_image_frame.on('select', function () {
				// Grabs the attachment selection and creates a JSON representation of the model.
				var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
				// Sends the attachment URL to our custom image input field.
				meta_image.val(media_attachment.url);
			});
			// Opens the media library frame.
			meta_image_frame.open();
		});
	});
	</script>
	<?php
}

function save_homepage_meta( $post_id ) {
	// verify nonce
	if ( !wp_verify_nonce( $_POST['homepage_meta_box_nonce'], basename(__FILE__) ) ) {
		return $post_id;
	}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if ( 'page' === $_POST['homepage'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}
	}

	$old = get_post_meta( $post_id, 'homepage', true );
	$new = $_POST['homepage'];

	if ( $new && $new !== $old ) {
		update_post_meta( $post_id, 'homepage', $new );
	} elseif ( '' === $new && $old ) {
		delete_post_meta( $post_id, 'homepage', $old );
	}
}
add_action( 'save_post', 'save_homepage_meta' );
