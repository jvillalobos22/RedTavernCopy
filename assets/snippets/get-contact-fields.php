<?php

$contactMeta = get_post_meta( $post->ID, 'secpage', true );

$contactPhone = $contactMeta['contact-phone'];
$contactPhoneClean = preg_replace("/[^0-9]/","",$contactPhone);
$contactAddress = $contactMeta['contact-address'];

$mondayHours = $contactMeta['hours-monday'];
$tuesdayHours = $contactMeta['hours-tuesday'];
$wednesdayHours = $contactMeta['hours-wednesday'];
$thursdayHours = $contactMeta['hours-thursday'];
$fridayHours = $contactMeta['hours-friday'];
$saturdayHours = $contactMeta['hours-saturday'];
$sundayHours = $contactMeta['hours-sunday'];

?>
