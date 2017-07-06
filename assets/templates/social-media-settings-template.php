<?php
    // $calloutOneImage = esc_attr( get_option( 'sec_callout_one_image' ));
?>
<div class="dk_optionspage">
    <h1>Social Media Options</h1>
    <p>Use this page to change the links to each of your social media accounts. If you don't want an account to show in the footer, simply leave it blank.</p>
    <?php settings_errors(); ?>

    <form method="post" action="options.php">
        <?php settings_fields( 'dk-social-group' ); ?>
        <?php do_settings_sections( 'social_media_settings' ); ?>
        <?php submit_button(); ?>
    </form>
</div>
