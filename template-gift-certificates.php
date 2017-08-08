<?php
/*
Template Name: Gift Certificates
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();
	require_once(get_template_directory().'/assets/snippets/get-secpage-fields.php');
	// echo '<code>$heroCaption = '.$heroCaption.'</code>';
	// $variable = $homeMeta['field'];
?>

<div id="content" class="dk_secondary">
	<section class="dk_main dk_secmain">
		<div id="inner-content" class="row">
			<!-- <div class="large-4 medium-5 small-12 columns">
				<img src="<?php //echo $mainImg; ?>" alt="<?php //echo $mainImgAlt; ?>">
			</div> -->
			<main id="main" class="large-12 medium-12 small-12 columns" role="main">
				<?php if($mainImg) { ?>
				<img class="dk_floatimg" src="<?php echo $mainImg; ?>" alt="<?php echo $mainImgAlt; ?>">
				<?php } ?>
				<?php if(isset($mainHeading) && $mainHeading) { ?>
					<h1><?php echo $mainHeading; ?></h1>
				<?php } else { ?>
					<h1><?php echo the_title(); ?></h1>
				<?php } ?>
				<?php if(isset($mainSubheading)) { ?>
					<h2 class="dk_subheading"><?php echo $mainSubheading; ?></h2>
				<?php } ?>
				<!-- <h2 class="dk_subheading">Subheading Goes Here</h2> -->
				<div class="dk_maincontent">
					<?php the_content() ?>
				</div>
				<div class="dk_clearfix">
			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->
		<div class="dk_giftcerts row">
			<div class="large-5 medium-6 small-12 columns">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="ZE7WDGXUDUA4S">
				<input type="hidden" name="on0" value="Amount">
				<label for="os0">Amount*
				<select name="os0" required>
					<option value="$10">$10.00</option>
					<option value="$20">$20.00</option>
					<option value="$30">$30.00</option>
					<option value="$40">$40.00</option>
					<option value="$50">$50.00</option>
					<option value="$60">$60.00</option>
					<option value="$70">$70.00</option>
					<option value="$80">$80.00</option>
					<option value="$90">$90.00</option>
					<option value="$100">$100.00</option>
				</select></label>
				<input type="hidden" name="on1" value="Recipient Name">Recipient Name*
				<input type="text" name="os1" maxlength="200" required>
				<input type="hidden" name="on2" value="Buyer's Phone Number">Buyer's Phone Number*
				<input type="text" name="os2" maxlength="200" required>
				<input type="hidden" name="currency_code" value="USD">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			<div class="large-7 medium-6 small-12 columns">
				<p><strong>Directions:</strong> Select the dollar value amount of the gift certificate then give us details on who the gift certificate is for. We ask for your phone number just in case there is a an issue processing your gift certificate or we need more information. When checking out with PayPal, you will be asked for a shipping adress. This is the address we will mail your gift certificate to.</p>
			</div>
		</div>
	</section>
	<?php require_once(get_template_directory().'/assets/snippets/get-dk-sidebar.php'); ?>
</div> <!-- end #content dk_home -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>
