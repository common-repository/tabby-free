<?php  

   if($content_display_options['wp_tabby_settings_options']['agwp_tabby_layout']=='horizontal-top'):
   include WP_TABBY_PATH . "public/content-type/taxonomy-layout/horizontal-top.php";
   endif;  
   
   if($content_display_options['wp_tabby_settings_options']['agwp_tabby_layout']=='horizontal-bottom'): 
   include WP_TABBY_PATH . "public/content-type/taxonomy-layout/horizontal-bottom.php";
   endif;  
   
   if($content_display_options['wp_tabby_settings_options']['agwp_tabby_layout']=='vertical-top'): 
   include WP_TABBY_PATH . "public/content-type/taxonomy-layout/vertical-top.php";
   endif;  
   
   
   if($content_display_options['wp_tabby_settings_options']['agwp_tabby_layout']=='middle'): 
   include WP_TABBY_PATH . "public/content-type/taxonomy-layout/middle.php";
   endif;  