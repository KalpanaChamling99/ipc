<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ipc
 */

get_header();
?>
	<div class="ipc-inner-banner bg-image ipc-overlay-pattern"  style="background-image:url(<?php echo esc_html(ipc_get_option('banner_image'));?>)">
		<div class="ipc-container">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Page Not Found', 'ipc' ); ?></h1>
			</header><!-- .page-header -->
		</div>
	</div>

	<main id="primary" class="site-main ">
		<section class="error-404 not-found ipc-not-found ipc-min-height">
			<div class="ipc-wrapper">
				<h2 class="page-title ipc-error-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ipc' ); ?></h2>
				<div class="ipc-btn-section">
					<a class="ipc-btn ipc-btn-style-1" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html('Go to Home Page'); ?><i class="ion ion-md-arrow-forward"></i></a>
				</div>
			</div>
		</section><!-- .error-404 -->
	</main><!-- #main -->

<?php
get_footer();
