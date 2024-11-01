   <?php 
   
   if(is_array($content_display_options) && !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_layout']))
   {
    if($content_display_options['wp_tabby_settings_options']['agwp_tabby_layout']=='horizontal-top'):
    include_once WP_TABBY_PATH . "public/content-type/normal-layout/horizontal-top.php";
    endif;
   }  
    
   if(is_array($content_display_options) && !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_layout']))
   {
    if($content_display_options['wp_tabby_settings_options']['agwp_tabby_layout']=='horizontal-bottom'):
    include_once WP_TABBY_PATH . "public/content-type/normal-layout/horizontal-bottom.php";
    endif; 
   } 
    