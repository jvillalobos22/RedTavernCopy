<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="dk_topbar top-bar" id="top-bar-menu">
	<!-- <div class="top-bar-left float-left">

	</div> -->
	<div class="show-for-medium">
		<?php joints_top_nav(); ?>
	</div>
	<div class="show-for-small-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a class="dk_offcanvas_toggle" data-toggle="off-canvas"><i class="fa fa-bars" aria-hidden="true"></i> <?php //_e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>
	</div>
</div>
