<?php

class Wp_Tabby_Public {


    public function __construct($plugin_name, $version) {

        $this->plugin_name = $plugin_name;
        $this->version     = $version;
        
    }


public function enqueue_styles()

{
    wp_enqueue_style('agwp-responsive', WP_TABBY_URL.'public/assets/css/responsive.css', array(), $this->version);
    wp_enqueue_style('agm-fa5', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.1/css/all.min.css', array(), '5.15.1', 'all' );
    wp_enqueue_style('agwp-main-style', WP_TABBY_URL.'/assets/css/style.css', array(), '1.0.0');

}



public function enqueue_scripts()
{
    wp_enqueue_script('jquery');
   wp_enqueue_script( 'agwp_tabby_main', WP_TABBY_URL.'public/assets/js/plugin.js', array(), $this->version, true );
   wp_localize_script( 'agwp_tabby_main', 'wp_tabby_ajax_obj', array( 'ajax_url' => admin_url( 'admin-ajax.php' ), ) );        

}



}
