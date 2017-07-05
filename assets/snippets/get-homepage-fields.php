<?php

$homeMeta = get_post_meta( $post->ID, 'homepage', true );

$mainHeading = $homeMeta['homepage-heading'];
$mainSubheading = $homeMeta['homepage-subheading'];
$mainImg = $homeMeta['home-maincontent-image'];
$mainImgAlt = $homeMeta['home-maincontent-image-alt'];

$cardOneHeading = $homeMeta['card-left-heading'];
$cardOneImg = $homeMeta['card-left-image'];
$cardOneAlt = $homeMeta['card-left-imagealt'];
$cardOneText = $homeMeta['card-left-paragraph'];
$cardOneBtn = $homeMeta['card-left-btntext'];
$cardOneLink = $homeMeta['card-left-btnlink'];

$cardTwoHeading = $homeMeta['card-middle-heading'];
$cardTwoImg = $homeMeta['card-middle-image'];
$cardTwoAlt = $homeMeta['card-middle-imagealt'];
$cardTwoText = $homeMeta['card-middle-paragraph'];
$cardTwoBtn = $homeMeta['card-middle-btntext'];
$cardTwoLink = $homeMeta['card-middle-btnlink'];

$cardThreeHeading = $homeMeta['card-right-heading'];
$cardThreeImg = $homeMeta['card-right-image'];
$cardThreeAlt = $homeMeta['card-right-imagealt'];
$cardThreeText = $homeMeta['card-right-paragraph'];
$cardThreeBtn = $homeMeta['card-right-btntext'];
$cardThreeLink = $homeMeta['card-right-btnlink'];

$sundayOneHeading = $homeMeta['sunday-left-heading'];
$sundayOneSubheading = $homeMeta['sunday-left-subheading'];
$sundayOneImage = $homeMeta['sunday-left-image'];
$sundayOneAlt = $homeMeta['sunday-left-imagealt'];
$sundayOneText = $homeMeta['sunday-left-paragraph'];

$sundayTwoHeading = $homeMeta['sunday-right-heading'];
$sundayTwoSubheading = $homeMeta['sunday-right-subheading'];
$sundayTwoImage = $homeMeta['sunday-right-image'];
$sundayTwoAlt = $homeMeta['sunday-right-imagealt'];
$sundayTwoText = $homeMeta['sunday-right-paragraph'];
