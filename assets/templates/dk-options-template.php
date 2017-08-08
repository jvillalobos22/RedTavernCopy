<?php
    // $calloutOneImage = esc_attr( get_option( 'sec_callout_one_image' ));
?>
<div class="dk_optionspage">
    <h1>Header/Hero Image Options</h1>
    <p>Use these options to make changes to the header across the site.</p>
    <?php settings_errors(); ?>

    <form method="post" action="options.php">
        <?php settings_fields( 'dk-header-group' ); ?>
        <?php do_settings_sections( 'dk_settings' ); ?>
        <?php //do_settings_sections( 'dk-social-media-settings' ); ?>
        <?php submit_button(); ?>
    </form>
</div>
