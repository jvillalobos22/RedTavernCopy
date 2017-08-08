<?php
    // $calloutOneImage = esc_attr( get_option( 'sec_callout_one_image' ));
?>
<div class="dk_optionspage">
    <h1>Secondary Page Settings</h1>
    <p>Here you can edit any options that pertain to secondary pages such as the callouts that show on every secondary page.</p>
    <?php settings_errors(); ?>

    <form method="post" action="options.php">
        <?php settings_fields( 'dk-secondary-group' ); ?>
        <?php do_settings_sections( 'secondary_page_settings' ); ?>
        <?php submit_button(); ?>
    </form>
</div>
