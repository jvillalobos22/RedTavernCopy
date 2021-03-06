<?php
/*
 * secpage-fields.php
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
function add_secpage_meta_box() {
    global $post;

    if(!empty($post)) {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        //if($pageTemplate == 'template-secondary.php' || $pageTemplate == 'template-reservations.php' || $pageTemplate == 'template-events.php' || $pageTemplate == 'template-live-music.php' || $pageTemplate == 'page.php') {
        if($pageTemplate != 'template-homepage.php') {
            add_meta_box(
        		'secpage_meta_box', // $id
        		'Secondary Page Template Fields', // $title
        		'show_secpage_meta_box', // $callback
        		'page', // $screen
        		'normal', // $context
        		'high' // $priority
        	);
        }
    }
}
add_action( 'add_meta_boxes', 'add_secpage_meta_box' );

function show_secpage_meta_box() {
	global $post;
	$meta = get_post_meta( $post->ID, 'secpage', true ); ?>
	<div class="dk_meta_editor">
		<input type="hidden" name="secpage_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">
		<!-- All fields will go here -->
        <!-- secpage[secpage-heading] -->
        <label for="secpage[secpage-heading]">Page Heading</label>
        <input type="text" name="secpage[secpage-heading]" id="secpage[secpage-heading]" class="dk_full " value="<?php if ( isset ( $meta['secpage-heading'] ) ) echo $meta['secpage-heading']; ?>">
        <!-- secpage[secpage-subheading] -->
        <label for="secpage[secpage-subheading]">Page Subheading</label>
        <input type="text" name="secpage[secpage-subheading]" id="secpage[secpage-subheading]" class="dk_full " value="<?php if ( isset ( $meta['secpage-subheading'] ) ) echo $meta['secpage-subheading']; ?>">
        <?php
            $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
            if($pageTemplate == 'template-secondary.php' ) {
        ?>
        <!-- secpage[secpage-maincontent-image] -->
        <label for="secpage[secpage-maincontent-image]">Main Content Image</label>
        <?php if ( isset ( $meta['secpage-maincontent-image'] ) ) { ?>
            <img class="dk-img-preview" src="<?php echo $meta['secpage-maincontent-image']; ?>">
        <?php } ?>

            <input type="button" class="button button-secondary dk_imgbtn" value="Upload/Edit Image" >
            <input type="hidden" class="dk-img-upload" name="secpage[secpage-maincontent-image]" id="secpage[secpage-maincontent-image]" value="<?php if ( isset ( $meta['secpage-maincontent-image'] ) ) echo $meta['secpage-maincontent-image']; ?>">
            <!-- secpage[secpage-maincontent-image-alt] -->
            <label for="secpage[secpage-maincontent-image-alt]">Image Alt Tag</label><small>Provide a brief description of the image. This is important for accesibility and SEO purposes.</small>
            <input type="text" name="secpage[secpage-maincontent-image-alt]" id="secpage[secpage-maincontent-image-alt]" class="" value="<?php if ( isset ( $meta['secpage-maincontent-image-alt'] ) ) echo $meta['secpage-maincontent-image-alt']; ?>">
        <?php } ?>
        <?php if($pageTemplate == 'template-contact.php' ) { ?>
            <fieldset>
            <legend>Contact Details</legend>
                <label for="secpage[contact-phone]">Contact Phone Number</label>
                <input type="text" name="secpage[contact-phone]" id="secpage[contact-phone]" class="" value="<?php if ( isset ( $meta['contact-phone'] ) ) echo $meta['contact-phone']; ?>">

                <label for="secpage[contact-address]">Contact Address</label>
                <input type="text" name="secpage[contact-address]" id="secpage[contact-address]" class="" value="<?php if ( isset ( $meta['contact-address'] ) ) echo $meta['contact-address']; ?>">
            </fieldset>
            <fieldset>
                <legend>Hours</legend>
                <!-- Monday -->
                <label for="secpage[hours-monday]">Monday Hours</label>
                <input type="text" name="secpage[hours-monday]" id="secpage[hours-monday]" class="" value="<?php if ( isset ( $meta['hours-monday'] ) ) echo $meta['hours-monday']; ?>">
                <!-- Tuesday -->
                <label for="secpage[hours-tuesday]">Tuesday Hours</label>
                <input type="text" name="secpage[hours-tuesday]" id="secpage[hours-tuesday]" class="" value="<?php if ( isset ( $meta['hours-tuesday'] ) ) echo $meta['hours-tuesday']; ?>">
                <!-- Wednesday -->
                <label for="secpage[hours-wednesday]">Wednesday Hours</label>
                <input type="text" name="secpage[hours-wednesday]" id="secpage[hours-wednesday]" class="" value="<?php if ( isset ( $meta['hours-wednesday'] ) ) echo $meta['hours-wednesday']; ?>">
                <!-- Thursday -->
                <label for="secpage[hours-thursday]">Thursday Hours</label>
                <input type="text" name="secpage[hours-thursday]" id="secpage[hours-thursday]" class="" value="<?php if ( isset ( $meta['hours-thursday'] ) ) echo $meta['hours-thursday']; ?>">
                <!-- Friday -->
                <label for="secpage[hours-friday]">Friday Hours</label>
                <input type="text" name="secpage[hours-friday]" id="secpage[hours-friday]" class="" value="<?php if ( isset ( $meta['hours-friday'] ) ) echo $meta['hours-friday']; ?>">
                <!-- Saturday -->
                <label for="secpage[hours-saturday]">Saturday Hours</label>
                <input type="text" name="secpage[hours-saturday]" id="secpage[hours-saturday]" class="" value="<?php if ( isset ( $meta['hours-saturday'] ) ) echo $meta['hours-saturday']; ?>">
                <!-- Sunday -->
                <label for="secpage[hours-sunday]">Sunday Hours</label>
                <input type="text" name="secpage[hours-sunday]" id="secpage[hours-sunday]" class="" value="<?php if ( isset ( $meta['hours-sunday'] ) ) echo $meta['hours-sunday']; ?>">
            </fieldset>
        <?php } ?>
	</div>
	<?php
}

function save_secpage_meta( $post_id ) {
	// verify nonce
	if ( !wp_verify_nonce( $_POST['secpage_meta_box_nonce'], basename(__FILE__) ) ) {
		return $post_id;
	}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if ( 'page' === $_POST['secpage'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}
	}

	$old = get_post_meta( $post_id, 'secpage', true );
	$new = $_POST['secpage'];

	if ( $new && $new !== $old ) {
		update_post_meta( $post_id, 'secpage', $new );
	} elseif ( '' === $new && $old ) {
		delete_post_meta( $post_id, 'secpage', $old );
	}
}
add_action( 'save_post', 'save_secpage_meta' );
