<?php

class Wp_tabby_shortcode
{

    public $plugin_name;
    public $version;

    public function __construct($plugin_name, $version)
    {
        $this->plugin_name = $plugin_name;
        $this->version = $version;

    }

    public static function wptabby_html_show( $post_id,  $content_data, $content_display_options,  $tax_meta_array, $icon_meta_array ) {

        $content_data_admin = get_option('agwp_tabby_settings_options');

        $content_display_option = get_post_meta($post_id, 'agwp_tabby_options_settings', true);       

        if($content_display_option['agwp_overwrite_global']=='0')
        {
            $content_display_options = $content_data_admin;
        }
        elseif($content_display_option['agwp_overwrite_global']=='1')
        {
            $content_display_options = $content_display_option;
        }

        if (is_array($content_data)) {
            if ($content_data['agwp_tabby_type'] == 'content-type'):
                include WP_TABBY_PATH . "public/content-type/normal.php";
            endif;
        }
        if (is_array($content_data)) {
            if ($content_data['agwp_tabby_type'] == 'taxonomy-type'):
                include WP_TABBY_PATH . "public/content-type/taxonomy.php";
            endif;
        }

        include_once WP_TABBY_PATH . "public/dynamic-style.php";
       

    }

    public function wptabby_shortcode_execute($attributes)
    {
        if ( empty( $attributes['id'] ) || ( get_post_status( $attributes['id'] ) === 'trash' ) ) {
			return false;
		}

        $post_id = intval($attributes['id']);

        if (!(get_post_type($post_id) === 'ag_wp_tabby')) {
            return false;
        }

        $content_data = get_post_meta($post_id, 'agwp_tabby_post_options', true);
        
        $content_data_admin = get_option('agwp_tabby_settings_options');

        $content_display_option = get_post_meta($post_id, 'agwp_tabby_options_settings', true);       

        if($content_display_option['agwp_overwrite_global']=='0')
        {
            $content_display_options = $content_data_admin;
        }
        elseif($content_display_option['agwp_overwrite_global']=='1')
        {
            $content_display_options = $content_display_option;
        }
        global $wpdb;
        
        $meta_key = 'agwp_tabby_taxonomy_options';
        
        $meta_values = $wpdb->get_results("SELECT * FROM $wpdb->termmeta WHERE meta_key = 'agwp_tabby_taxonomy_options'");
        $icon_values = $wpdb->get_results("SELECT * FROM $wpdb->postmeta WHERE meta_key = 'agwp_tabby_options_icons_posts'");

        $tax_meta_array = array();
        $icon_meta_array = array();

        ob_start();

        foreach($meta_values as $single_data)
        {
           $tax_meta_array[] = [

                'term_id' => $single_data->term_id,
                'meta_value' => maybe_unserialize($single_data->meta_value)

            ];

        }  
        
        foreach($icon_values as $single_data)
        {
            $icon_meta_array[] =
            [
                  'post_id' => $single_data->post_id,
                  'meta_value' => maybe_unserialize($single_data->meta_value)
            ];

        }

        self::wptabby_html_show( $post_id,  $content_data, $content_display_options, $tax_meta_array, $icon_meta_array);

        return ob_get_clean();
    }

}
