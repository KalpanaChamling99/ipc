<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ipc
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('ipc-col ipc-col-xs-6 ipc-col-md-4'); ?>>
	<div class="ipc-post ipc-post-style-1 ipc-bg-gradient">
		<div class="ipc-image-section ipc-image-200 ipc-image-hover-effect ipc-image-zoom-in-effect">
			<a href="<?php echo esc_url( get_permalink() ); ?>"  target="_blank"></a>
			<?php 
				if (has_post_thumbnail()) {
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium-large' );
				$url = $thumb['0'];
				} else {
					$url = '';
				}
			?>
			<span class="ipc-icon"><i class="ion ion-md-play"></i></span>
			<div class="ipc-image bg-image" style="background-image:url(<?php echo esc_url($url); ?>)"></div>
													
		</div>
		<div class="ipc-desc">
			<?php 
				the_title( '<h2 class="entry-title ipc-post-title ipc-post-title-md"><a target="_blank" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			?>
			
			<?php
				if ( 'post' === get_post_type() ) :
				?>
				<div class="ipc-meta-tag">
					<?php
					ipc_post_author();
					ipc_post_date();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
