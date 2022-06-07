<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ipc
 */

get_header();
?>
	<div class="ipc-inner-banner bg-image ipc-overlay-pattern"  style="background-image:url(<?php echo esc_html(ipc_get_option('banner_image'));?>)">
		<div class="ipc-container">
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->
		</div>
	</div>
	<main id="primary" class="site-main ipc-bg-light-gray ipc-min-height">
		<div class="ipc-container">
			<div class="ipc-archive-post-list">
				<div class="ipc-row">

					<?php if ( have_posts() ) : ?>

						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						// the_posts_navigation();
						do_action('ipc_action_posts_navigation');


					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div><!--.row-->
			</div><!--.ipc-archive-post-list-->
		</div><!--.ipc-container-->
	</main><!-- #main -->

<?php
get_footer();
