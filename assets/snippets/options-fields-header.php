<?php

echo '<div class="dk_option_group">';
$secPageHeroImg = esc_attr( get_option( 'secpage_hero_img' ) );
echo '<label for="secpage_hero_img">Secondary Page Hero Image</label>';
echo '<img class="dk-img-preview full" src="'.$secPageHeroImg.'" />';
echo '<input type="button" class="button button-secondary dk_imgbtn" value="Upload/Edit Image" >';
echo '<input type="hidden" class="dk-img-upload" name="secpage_hero_img" value="'.$secPageHeroImg.'">';

$headerPhone = esc_attr( get_option( 'header_phone' ) );
echo '<label for="header_phone">Phone Number</label>';
echo '<input type="text" name="header_phone" value="'.$headerPhone.'" placeholder="ex: (530) 555-5555">';

$headerAddr = esc_attr( get_option( 'header_address' ) );
echo '<label for="header_phone">Address</label>';
echo '<input type="text" name="header_address" value="'.$headerAddr.'" placeholder="ex: Located at 1250 Esplanade, Chico CA 95926">';
echo '</div>';

?>
