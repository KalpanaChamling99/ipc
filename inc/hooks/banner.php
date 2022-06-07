<?php 
    if (!function_exists('ipc_banner')) :
        /**
         * Banner 
         *
         * @since ipc 1.0.0
         *
         */
        function ipc_banner(){ ?>
        <div class="ipc-banner-section">
            <div class="ipc-image-section bg-image ipc-overlay-pattern" style="background-image:url(<?php echo esc_html(ipc_get_option('banner_image'));?>)"></div>
                <div class="ipc-container ipc-wrapper">
                    <h3 class="ipc-section-title"><?php echo esc_html(ipc_get_option('banner_title'));?></h3>  
                    <p><?php echo esc_html(ipc_get_option('banner_description'));?></p>
                    <div class="ipc-btn-section">
                        <a class="ipc-btn ipc-btn-style-1" href="<?php echo esc_html(ipc_get_option('banner_url'));?>" target="_blank"><?php echo esc_html('Browse More'); ?><i class="ion ion-md-arrow-forward"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <?php  }
        
    endif;

add_action('ipc_action_banner', 'ipc_banner', 10);