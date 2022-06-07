<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ipc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ipc' ); ?></a>
	<div class="ipc-topbar-section ipc-bg-gradient">
		<div class="ipc-container">
			<div class="ipc-site-feature-list ipc-d-flex">
				<div class="ipc-site-feature ipc-address">
					<div class="ipc-icon-section"><i class="ion ion-ios-pin"></i></div>
					<div class="ipc-desc">
						Kathmandu
					</div>
				</div><!--ipc-address-->
				<div class="ipc-site-feature ipc-mail">
					<div class="ipc-icon-section"><i class="ion ion-ios-mail"></i></div>
					<div class="ipc-desc">
						thesane23@gmail.com
					</div>
				</div><!--ipc-mail-->
				<div class="ipc-site-feature ipc-phone">
					<div class="ipc-icon-section"><i class="ion ion-ios-call"></i></div>
					<div class="ipc-desc">
						<a href="tel:9808099999">9808099999</a>
					</div>
				</div><!--/ipc-phone-->
			</div><!--/ipc-site-feature-section-->
		</div>
	</div>

	<header id="masthead" class="site-header ipc-site-header">
		<div class="ipc-container">
			<div class="ipc-wrapper ipc-d-flex">

				<div class="site-branding">
					<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) : 
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$ipc_description = get_bloginfo( 'description', 'display' );
						if ( $ipc_description || is_customize_preview() ) :
							?>
						<p class="site-description"><?php echo $ipc_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				<nav id="site-navigation" class="main-navigation ipc-site-navigation desktop">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'ipc-nav-menu'
						)
					);
					?>
					<div class="ipc-menu-icon-section">
						<button id="nav-menu-icon">
							<span class="ipc-menu-icon">
								<span class="ipc-line ipc-line-1"></span>
								<span class="ipc-line ipc-line-2"></span>
								<span class="ipc-line ipc-line-3"></span>
							</span>
						</button>
					</div>
				</nav><!-- #site-navigation -->

			</div><!--.ipc-wrapper-->
		</div><!--.ipc-container-->
	</header><!-- #masthead -->

	<!-- MOBILE MENU -->
	<div class="ipc-mobile-menu-section ipc-bg-gradient">
		<div class="ipc-mobile-close-icon ">
			<span class="ipc-close-icon ipc-close-icon-white" id="mobile-close">
				<span></span>
				<span></span>
			</span>
		</div>
	</div>
	<div class="ipc-body-overlay" id="overlay"></div>
	
	<!-- scroll to top   -->
	<div class="ipc-scroll-top" id="scroll-top">
		<span class="ipc-icon"><i class="ion ion-md-arrow-up"></i></span>
		<div class="circular-progress">
			<svg 
				xmlns='http://www.w3.org/2000/svg'
				viewBox='0 0 100 100'
				aria-labelledby='title' role='graphic'>
				<circle cx="50" cy="50" r="40" ></circle>
				<circle cx="50" cy="50" r="40" id='progress-indicator'></circle>
			</svg>
			<span class="ipc-progress-percent"></span>
		</div>
	</div>