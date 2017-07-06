<?php
    $facebook = esc_attr( get_option( 'social_facebook' ) );
    $instagram = esc_attr( get_option( 'social_instagram' ) );
    $twitter = esc_attr( get_option( 'social_twitter' ) );
    $tripadvisor = esc_attr( get_option( 'social_tripadvisor' ) );
    $yelp = esc_attr( get_option( 'social_yelp' ) );
?>
<!-- Facebook -->
<label for"social_facebook">Facebook</label>
<input type="text" name="social_facebook" value="<?php echo $facebook; ?>" placeholder="https://www.facebook.com/yourcompany">

<!-- Instagram -->
<label for"social_instagram">Instagram</label>
<input type="text" name="social_instagram" value="<?php echo $instagram; ?>" placeholder="https://www.instagram.com/yourcompany/">

<!-- Twitter -->
<label for"social_twitter">Twitter</label>
<input type="text" name="social_twitter" value="<?php echo $twitter; ?>" placeholder="https://twitter.com/yourcompany">

<!-- Trip Advisor -->
<label for"social_tripadvisor">Trip Advisor</label>
<input type="text" name="social_tripadvisor" value="<?php echo $tripadvisor; ?>" placeholder="https://www.tripadvisor.com/yourcompany">

<!-- Yelp -->
<label for"social_yelp">Yelp</label>
<input type="text" name="social_yelp" value="<?php echo $yelp; ?>" placeholder="https://www.yelp.com/yourcompany">
