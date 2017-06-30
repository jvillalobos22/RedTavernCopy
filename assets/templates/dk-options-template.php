<?php
    // $calloutOneImage = esc_attr( get_option( 'sec_callout_one_image' ));
?>
<div class="dk_optionspage">
    <h1>DK Custom Settings</h1>
    <p>Here you can make changes to content that shows up across the site on multiple pages such as the header image or callouts on secondary pages, social media links, and the phone number in the header.</p>
    <?php settings_errors(); ?>

    <form method="post" action="options.php">
        <?php settings_fields( 'dk-settings-group' ); ?>
        <?php do_settings_sections( 'dk_settings' ); ?>
        <?php //do_settings_sections( 'dk-social-media-settings' ); ?>
        <?php submit_button(); ?>
    </form>
</div>
