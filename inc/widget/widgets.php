<?php
/**
 * Theme widgets.
 *
 * @package ipc
 */
 require_once get_template_directory().'/inc/widget/widget-base.php';

if(!function_exists('ipc_load_widgets')):
    function ipc_load_widgets(){
        register_widget('IPC_widget_style_1');
    }
endif;
add_action('widgets_init','ipc_load_widgets');

/* Homepage widget style 1 */

if( !class_exists( 'IPC_widget_style_1' ) ):
    class IPC_widget_style_1 extends IPC_Widget_Base{
        function __construct(){
            $wigdet_opts = array(
                'classname'      => 'ipc_homepage_widget_style_1',
                'description'    => __('Added widget for home page to display class tutorial','ipc'),
                'customize_selective_refresh' => true, 
            );
            $widget_fields = array(
                'title' => array(
                    'label' => __('Title','ipc'),
                    'type' => 'text',
                ),
                'post_category' => array(
                    'label' => __('Select Category','ipc'),
                    'type' => 'dropdown-taxonomies',
                    'show_option_all' => __('All categories','ipc')
                ),
                'post_number' => array(
                    'label' => __('Number of Posts', 'ipc'),
                    'type' => 'number',
                    'default' => 3,
                    'css' => 'max-width:60px;',
                    'min' => 1,
                    'max' => 12,
                ),
            );

            parent::__construct('ipc-homepage-widget-style-1',__('IPC:Homepage widget style 1','ipc'),$wigdet_opts,array(),$widget_fields);
        }

        function widget($args,$instance){
            $params = $this -> get_params($instance);
            
            echo $args['before_widget'];
            
            $qargs = array(
                'posts_per_page' => esc_attr($params['post_number']),
                'no_found_rows' => true
            );

            if( absint( $params['post_category'] ) > 0 ){
                $qargs['category'] = absint( $params['post_category'] );
            }
            if (absint($params['post_category']) > 0) {
                $cat_link =esc_url(get_category_link( $params['post_category'] ));
            } else {
                $cat_link ='';
            }
            
            $all_posts = get_posts( $qargs );
            ?>
            <?php 
                global $post;
                $count = 1;
            ?>
           
                <?php if( !empty($all_posts) ):  ?>
                    <div class="ipc-homepage-widget-style-1">
                        <div class="ipc-container">
                            <?php if (!empty($params['title'])) { ?>
                                <h2 class="widget-title ipc-widget-title ipc-title-style-1"><span><?php echo esc_html($params['title']); ?></span></h2>
                            <?php } ?>
                            <div class="ipc-row">
                                <?php foreach( $all_posts as $key => $post ): ?>
                                <?php setup_postdata($post); ?>
                                    <div class="ipc-col ipc-col-xs-6 ipc-col-md-4 ipc-col-lg-3--">
                                        <div class="ipc-post ipc-post-style-1 ipc-bg-gradient">
                                            <div class="ipc-image-section ipc-image-200 ipc-image-hover-effect ipc-image-zoom-in-effect">
                                                <a href="<?php echo esc_url( get_permalink() ); ?>"  target="_blank"></a>
                                                <?php if (has_post_thumbnail()) {
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
                                                <h3 class="ipc-post-title ipc-post-title-md"><a href="<?php echo esc_url( get_permalink() ); ?>" target="_blank"><?php the_title(); ?></a></h3>  
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
                                        </div><!--ipc-post-->
                                    </div><!--.ipc-col-->
                                    
                                <?php 
                                    $count++;
                                    endforeach; 
                                ?>
                            </div><!--.row-->
                         </div><!--.ipc-container-->
                    </div><!--/.ipc-homepage-widget-style-1-->
                <?php wp_reset_postdata(); ?>

                <?php endif; ?>
            <?php echo $args['after_widget'];
    
        }
    }

endif;