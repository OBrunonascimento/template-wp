<!DOCTYPE html>
<html lang="pt-br">
<head>
	
	<!-- Basic -->
	<meta <?php bloginfo('charset'); ?>>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/animate/animate.compat.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/theme.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/theme-elements.css">
	

	<!-- Demo CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/demos/demo-business-consulting-2.css">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/skins/skin-business-consulting-2.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/custom.css">

	<!-- Head Libs -->
	<script src="<?php bloginfo('template_url'); ?>/assets/vendor/modernizr/modernizr.min.js"></script>
	
	<?php wp_head() ?>
</head>

<body>
<div class="body">
<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">

<div class="header-body border-top-0">
	

<div class="header-container container bg-color-light">
	<div class="header-row">
		<div class="header-column header-column-logo">
			<div class="header-row">
				<div class="header-logo">
					<a href="<?php echo home_url('/'); ?>">
						<img class="img-logo" width="70" src="<?php bloginfo('template_directory');?>/assets/img/demos/business-consulting-2/logos/logo.jpg" alt="wordpress">
					</a>
				</div>
			</div>
		</div>

		<div class="header-column header-column-nav-menu justify-content-end">
			<div class="header-row">
				<div class="header-nav">
					<div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">					
						<nav class="collapse">
						
							<?php
							wp_nav_menu( array(
								'theme_location'   => 'principal',
								'depth'            => 2,
								'container'        => 'div',
								'container_class'  => '',
								'container_id'     => '',
								'menu_class'       => 'nav',
								'fallback_cb'      => 'WP_Bootstrap_Navwalker::fallback',
								'walker'           => new WP_Bootstrap_Navwalker(),
							) );
							?>
							
						</nav>
					</div>
					<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
						<i class="fas fa-bars"></i>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
</header>	