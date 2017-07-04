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


jQuery(document).ready(function($){

    var mediaUploader;
    var this_img;
    var preview_img;
    
    $( '.dk_imgbtn' ).on('click', function (e) {
        e.preventDefault();
        this_img = $(this).parent().children('.dk-img-upload');
        preview_img = $(this).parent().children('.dk-img-preview');
        console.log(preview_img);

        if( mediaUploader ){
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Upload/Edit Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        mediaUploader.on('select', function(){
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            this_img.val(attachment.url);
            preview_img.attr("src", attachment.url);
        });

        mediaUploader.open();

    });
});
