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
