


<!-- Testimonial snippet -->
<fieldset>
    <legend>Testimonial</legend>
    <label for="homepage[testimonial-quote]">Testimonial Quote (Don't add quotation marks)</label>
    <textarea name="homepage[testimonial-quote]" id="homepage[testimonial-quote]" rows="3" cols="70" style="width: 100%; max-width: 450px;"><?php if ( isset ( $meta['testimonial-quote'] ) ) echo $meta['testimonial-quote']; ?></textarea>
    <label for="homepage[testimonial-name]">Name of Reviewer</label>
    <input type="text" name="homepage[testimonial-name]" id="homepage[testimonial-name]" class="" value="<?php if ( isset ( $meta['testimonial-name'] ) ) echo $meta['testimonial-name']; ?>">
    <label for="homepage[testimonial-source]">Review Source (Google Plus, Yelp, etc)</label>
    <input type="text" name="homepage[testimonial-source]" id="homepage[testimonial-source]" class="" value="<?php if ( isset ( $meta['testimonial-source'] ) ) echo $meta['testimonial-source']; ?>">
</fieldset>
<!-- End Testimonial snippet -->



<!-- Old snippet and script for adding image to homepage hero for homepage-fields.php -->
<p>Here you can change the large image section that shows up in the header on the homepage.</p>
<label for="homepage[hero-image]">Hero Image Upload</label><small>Hint: You won't see the new image below until you click update</small>
<input type="text" name="homepage[hero-image]" id="homepage[hero-image]" class="meta-image " value="<?php if ( isset ( $meta['hero-image'] ) ) echo $meta['hero-image']; ?>">
<input type="button" class="button image-upload" value="Browse">
<?php if ( isset ( $meta['hero-image'] ) ) { ?>
<div class="image-preview"><img src="<?php echo $meta['hero-image']; ?>"></div>
<?php } ?>

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
<!-- End Old Image Snippet -->
