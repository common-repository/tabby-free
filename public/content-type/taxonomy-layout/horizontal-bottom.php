<?php 

if (is_array($content_data['agwp_tabby_tax_field_taxonomy_'.$content_data['agwp_tabby_tax_field']]) || is_object($content_data['agwp_tabby_tax_field_taxonomy_'.$content_data['agwp_tabby_tax_field']])):

?>
<div class="agwt-container">
    <?php if ($content_display_options['wp_tabby_settings_options']['agwp_tabby_section_title_switcher'] == true): ?>
    <div class="normal_content_section_title_<?php echo esc_attr($post_id); ?>">
        <div class="section_title">
            <?php echo ('<'. esc_attr($content_display_options['wp_tabby_settings_options']['agwp_tabby_section_title_tag'])) . '>'; ?><?php echo esc_html__($content_data['agwp_tabby_taxonomy_section_title'], 'wp-tabby'); ?><?php echo '</' . (esc_attr($content_display_options['wp_tabby_settings_options']['agwp_tabby_section_title_tag'])) . '>'; ?>
        </div>
    </div>

 <?php endif; ?>


                <!-- Tabs Body -->
<div class="wt-tabs-body wt-body<?php echo esc_attr( $post_id); ?>">

<?php if (is_array($content_data['agwp_tabby_tax_field_taxonomy_'.$content_data['agwp_tabby_tax_field']]) || is_object($content_data['agwp_tabby_tax_field_taxonomy_'.$content_data['agwp_tabby_tax_field']])): 

 $wp_tabby_data_count_id = 1;
             
 foreach ($content_data['agwp_tabby_tax_field_taxonomy_'.$content_data['agwp_tabby_tax_field']] as $key => $single_data):
           
 $wp_tabby_control_id = "wt-tab".$post_id.$wp_tabby_data_count_id;
             
 if($wp_tabby_data_count_id==1)
                    
             {
                      $value = get_taxonomy($content_data['agwp_tabby_tax_field'])->object_type;
                      $taxonomy_slug = $content_data['agwp_tabby_tax_field']; 
             } 
 
                     $the_query = new WP_Query( array(
                         'post_type' => $value[0],
                         'posts_per_page' => $content_data['agwp_tabby_posts_per_tab'],
                         'tax_query' => array(
                                  array (
                                 'taxonomy' => $taxonomy_slug,
                                 'field' => 'name',
                                 'terms'    => $single_data,
                                 //'include_children' => true,
                              )
                         ),
                     ) );
 
                     $count_posts = $the_query->found_posts; 
                     //if($wp_tabby_data_count_id !=1):  
                   ?>
 
         <div class="wt-single-tab<?php echo esc_attr($post_id); ?>" id="<?php echo esc_attr($wp_tabby_control_id);  ?>" 
         
         <?php if($wp_tabby_data_count_id ==1): ?> style="display:block"  
           
         <?php endif;  ?>>
 
         <?php
         if ( $the_query->have_posts() ):
         while ( $the_query->have_posts() ) :
 
         $the_query->the_post();
 
         the_title( '<ul><li><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></li></ul>'); 
           
         endwhile;  
         else:  
           
       ?>              
           <p>               
           <?php echo esc_html__( 'There is no content', 'wp-tabby' );  ?>
           </p> 

         <?php endif;  wp_reset_postdata();  ?>  </div>
         
         <?php   $wp_tabby_data_count_id++;  endforeach;  endif;  ?> </div>
             <!-- End Tabs Body -->

    
            <!-- Tabs Button -->
    <div class="wt-tabs-btn-container<?php echo esc_attr($post_id); ?> wt-body-style wt-bottom-style<?php echo esc_attr($post_id); ?>">
        <?php
        if (is_array($content_data['agwp_tabby_tax_field_taxonomy_'.$content_data['agwp_tabby_tax_field']]) || is_object($content_data['agwp_tabby_tax_field_taxonomy_'.$content_data['agwp_tabby_tax_field']])):  
        $wp_tabby_data_count_id = 1;  
        foreach ($content_data['agwp_tabby_tax_field_taxonomy_'.$content_data['agwp_tabby_tax_field']] as $single_data):
        $wp_tabby_control_id = "wt-tab" .$post_id.$wp_tabby_data_count_id;
      ?>
        <a class="wt-btn<?php echo esc_attr($post_id); ?> wt-tabs-tb<?php echo esc_attr($post_id); ?> wt-tabs-top <?php if ($wp_tabby_data_count_id == 1): ?> active <?php endif;?>"
            style="cursor:pointer;"
            onclick="wtOpenTb(event,'<?php echo esc_attr($wp_tabby_control_id); ?>', '<?php echo esc_attr($post_id); ?>', 'normal')">
            <?php          
            foreach($tax_meta_array as $single_icon):  
            $values = get_term($single_icon['term_id']);
            ?>
            <?php if((($single_icon['meta_value']['taxonomy_tabby_icon_switcher'])==1) && ($single_data==$values->name)): ?>
            <i class="<?php echo esc_attr($single_icon['meta_value']['taxonomy_product_wp_tabby_icon']); ?>" id="wtOpen"></i>
            <?php endif;?>
            <?php if((($single_icon['meta_value']['taxonomy_tabby_icon_switcher'])==0) && (!empty($single_icon['meta_value']['taxonomy_wp_tabby_custom_icon']['url'])) && ($single_data==$values->name)): ?>
            <img src="<?php echo esc_attr($single_icon['meta_value']['taxonomy_wp_tabby_custom_icon']['url']); ?>" alt="Custom Icon" width="<?php echo $content_display_options['wp_tabby_settings_options']['agwp_tabby_tabs_icon_size']['all'];  ?>" height="<?php echo $content_display_options['wp_tabby_settings_options']['agwp_tabby_tabs_icon_size']['all'];  ?>">
            <?php endif; endforeach; ?>
            <?php if ($content_display_options['wp_tabby_settings_options']['wp_tabby_click_menu'] == 'default_menu'): ?>
            <div class="title_tag"><?php echo esc_html__($single_data, 'wp-tabby'); ?></div>
            <?php endif;?>
        </a>

        <?php $wp_tabby_data_count_id++;
              endforeach;
              endif;?>

    </div>
        <!-- End Tabs Button -->       
    
      </div>
      
  <?php endif;  ?>
