<?php 

/**
 * The template for displaying Home page
 *
 * This is the template that displays all pages by default.
 *
 * @package ipc
 */
    get_header(); ?>
    <!--**************BANNER************-->
	<?php 
		if(ipc_get_option('enable_banner_section') == 1){
	?>
		
		<?php do_action('ipc_action_banner'); ?>
		
	<?php		
		}
	?>
    
    <div class="ipc-widget-list">
        <?php dynamic_sidebar('homepage-widget'); ?>
    </div>
   
<?php get_footer();
?>