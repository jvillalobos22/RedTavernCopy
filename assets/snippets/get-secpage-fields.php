<?php

$secMeta = get_post_meta( $post->ID, 'secpage', true );
$mainHeading = $secMeta['secpage-heading'];
$mainSubheading = $secMeta['secpage-subheading'];
$mainImg = $secMeta['secpage-maincontent-image'];
$mainImgAlt = $secMeta['secpage-maincontent-image-alt'];

?>
