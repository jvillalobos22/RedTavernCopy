<?php

// Callout One
echo '<div class="dk_option_group"><div>';
echo '<h2>Callout One</h2>';

$secCalloutOneImg = esc_attr( get_option( 'sec_callout_one_image' ) );
echo '<img class="dk-img-preview" src="'.$secCalloutOneImg.'" />';
echo '<input type="button" class="button button-secondary dk_imgbtn" value="Upload/Edit Image" >';
echo '<input type="hidden" class="dk-img-upload" name="sec_callout_one_image" value="'.$secCalloutOneImg.'">';

$secCalloutOneImgAlt = esc_attr( get_option( 'sec_callout_one_image_alt' ) );
echo '<label for"sec_callout_one_image_alt">Image Alt Tag</label>';
echo '<input type="text" name="sec_callout_one_image_alt" value="'.$secCalloutOneImgAlt.'" placeholder="Callout One Image Alt Tag">';

$secCalloutOneText = esc_attr( get_option( 'sec_callout_one_text' ) );
echo '<label for"sec_callout_one_text">Callout Text</label>';
echo '<input type="text" name="sec_callout_one_text" value="'.$secCalloutOneText.'" placeholder="Callout One Text">';

$secCalloutOneLink = esc_attr( get_option( 'sec_callout_one_link' ) );
echo '<label for"sec_callout_one_link">Callout Link</label>';
echo '<input type="text" name="sec_callout_one_link" value="'.$secCalloutOneLink.'" placeholder="Callout One Link">';
echo '</div></div>';

// Callout Two
echo '<div class="dk_option_group"><div>';
echo '<h2>Callout Two</h2>';

$secCalloutTwoImg = esc_attr( get_option( 'sec_callout_two_image' ) );
echo'<img class="dk-img-preview" src="'.$secCalloutTwoImg.'" />';
echo '<input type="button" class="button button-secondary dk_imgbtn" value="Upload/Edit Image" >';
echo '<input type="hidden" class="dk-img-upload" name="sec_callout_two_image" value="'.$secCalloutTwoImg.'">';

$secCalloutTwoImgAlt = esc_attr( get_option( 'sec_callout_two_image_alt' ) );
echo '<label for"sec_callout_two_image_alt">Image Alt Tag</label>';
echo '<input type="text" name="sec_callout_two_image_alt" value="'.$secCalloutTwoImgAlt.'" placeholder="Callout Two Image Alt Tag">';

$secCalloutTwoText = esc_attr( get_option( 'sec_callout_two_text' ) );
echo '<label for"sec_callout_two_text">Callout Text</label>';
echo '<input type="text" name="sec_callout_two_text" value="'.$secCalloutTwoText.'" placeholder="Callout Two Text">';

$secCalloutTwoLink = esc_attr( get_option( 'sec_callout_two_link' ) );
echo '<label for"sec_callout_two_link">Callout Link</label>';
echo '<input type="text" name="sec_callout_two_link" value="'.$secCalloutTwoLink.'" placeholder="Callout Two Link">';
echo '</div></div>';

// Callout Three
echo '<div class="dk_option_group"><div>';
echo '<h2>Callout Three</h2>';

$secCalloutThreeImg = esc_attr( get_option( 'sec_callout_three_image' ) );
echo'<img class="dk-img-preview" src="'.$secCalloutThreeImg.'" />';
echo '<input type="button" class="button button-secondary dk_imgbtn" value="Upload/Edit Image" >';
echo '<input type="hidden" class="dk-img-upload" name="sec_callout_three_image" value="'.$secCalloutThreeImg.'">';

$secCalloutThreeImgAlt = esc_attr( get_option( 'sec_callout_three_image_alt' ) );
echo '<label for"sec_callout_three_image_alt">Image Alt Tag</label>';
echo '<input type="text" name="sec_callout_three_image_alt" value="'.$secCalloutThreeImgAlt.'" placeholder="Callout Three Image Alt Tag">';

$secCalloutThreeText = esc_attr( get_option( 'sec_callout_three_text' ) );
echo '<label for"sec_callout_three_text">Callout Text</label>';
echo '<input type="text" name="sec_callout_three_text" value="'.$secCalloutThreeText.'" placeholder="Callout Three Text">';

$secCalloutThreeLink = esc_attr( get_option( 'sec_callout_three_link' ) );
echo '<label for"sec_callout_three_link">Callout Link</label>';
echo '<input type="text" name="sec_callout_three_link" value="'.$secCalloutThreeLink.'" placeholder="Callout Three Link">';
echo '</div></div>';

?>
