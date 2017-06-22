
<!-- Snippet for adding image to homepage hero for homepage-fields.php -->
<p>Here you can change the large image section that shows up in the header on the homepage.</p>
<label for="homepage[hero-image]">Hero Image Upload</label><small>Hint: You won't see the new image below until you click update</small>
<input type="text" name="homepage[hero-image]" id="homepage[hero-image]" class="meta-image " value="<?php if ( isset ( $meta['hero-image'] ) ) echo $meta['hero-image']; ?>">
<input type="button" class="button image-upload" value="Browse">
<?php if ( isset ( $meta['hero-image'] ) ) { ?>
<div class="image-preview"><img src="<?php echo $meta['hero-image']; ?>"></div>
<?php } ?>
<!-- End Homepage Hero Image Snippet -->

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
