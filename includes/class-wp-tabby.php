<?php


class Agwp_tabby_tabs {

    /**
     * The loader that's responsible for maintaining and registering all hooks that power
     * the plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      WP_Tabby_Loader    $loader    Maintains and registers all hooks for the plugin.
     */
    protected $loader;

    /**
     * The unique identifier of this plugin.
     *
     * @since    2.0.0
     * @access   protected
     * @var      string    $plugin_name    The string used to uniquely identify this plugin.
     */
    protected $plugin_name;

    /**
     * The current version of the plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      string    $version    The current version of the plugin.
     */
    protected $version;

    /**
     * Define the core functionality of the plugin.
     *
     * Set the plugin name and the plugin version that can be used throughout the plugin.
     * Load the dependencies, define the locale, and set the hooks for the admin area and
     * the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function __construct() {

        if ( defined( 'WP_TABBY_VERSION' ) ) {

            $this->version = WP_TABBY_VERSION;
        } else {

            $this->version = '1.0.0';
        }
        $this->plugin_name = 'wp-tabby';

        $this->load_dependencies();
        $this->define_admin_hooks();
        $this->define_public_hooks();

        add_action( 'admin_init', array( $this, 'agtabby_remove_postbox' ));


    }

    private function load_dependencies() {



        require_once WP_TABBY_PATH . 'includes/class-wp-tabby-loader.php';
        require_once WP_TABBY_PATH . 'includes/class-wp-tabby-cpt.php';
        

        /**
         * The class responsible for defining all actions that occur in the public-facing
         * side of the site.
         */
        require_once WP_TABBY_PATH. 'public/class-wptabby-public.php';
        require_once WP_TABBY_PATH. 'public/class-wp-tabby-shortcode.php';
        /**
		 * The class live preview.
		 */
		require_once WP_TABBY_PATH . 'includes/preview/class-preview.php';

        $this->loader = new WP_Tabby_loader();

    }


    /**
     * Register all of the hooks related to the admin area functionality
     * of the plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    private function define_admin_hooks() {


        // Plugin admin custom post types.
        $plugin_admin_cpt = new WP_Tabby_CPT( $this->get_plugin_name(), $this->get_version() );
        $this->loader->add_action( 'init', $plugin_admin_cpt, 'agtpro_post_type' );
        $this->loader->add_filter( 'post_updated_messages', $plugin_admin_cpt, 'agtpro_updated_messages', 10, 2 );
        $this->loader->add_filter( 'manage_ag_wp_tabby_posts_columns', $plugin_admin_cpt, 'agtpro_admin_column' );
        $this->loader->add_action( 'manage_ag_wp_tabby_posts_custom_column', $plugin_admin_cpt, 'agtpro_admin_field', 10, 2 );

    }


    private function define_public_hooks() {

        // Plugin public enqueue.
        $plugin_public = new Wp_Tabby_Public( $this->get_plugin_name(), $this->get_version() );
        $this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
        $this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

        // Add Shortcode.
        $plugin_shortcode = new Wp_tabby_shortcode( $this->get_plugin_name(), $this->get_version() );
        $this->loader->add_action( 'ag_wp_tabby_action_tag_for_shortcode', $plugin_shortcode, 'wptabby_shortcode_execute' );
        add_shortcode( 'wptabby', array( $plugin_shortcode, 'wptabby_shortcode_execute' ) );

    }


    function agtabby_remove_postbox() {
       if(isset($_REQUEST['post']) || isset($_REQUEST['post_type']) )
       {
        $id = (empty( $_REQUEST['post_type'] )) ? sanitize_text_field(@$_REQUEST['post']) : sanitize_text_field($_REQUEST['post_type']);
          if('ag_wp_tabby'==get_post_type($id)){
            wp_deregister_script('postbox');
            
          }
        }
    }


    /**
     * Run the loader to execute all of the hooks with WordPress.
     *
     * @since    2.0.0
     */
    public function run() {
        $this->loader->run();
    }

    /**
     * The name of the plugin used to uniquely identify it within the context of
     * WordPress and to define internationalization functionality.
     *
     * @since     2.0.0
     * @return    string    The name of the plugin.
     */
    public function get_plugin_name() {
        return $this->plugin_name;
    }

    /**
     * The reference to the class that orchestrates the hooks with the plugin.
     *
     * @since     1.0.0
     * @return    WP_Tabby_Loader    Orchestrates the hooks of the plugin.
     */
    public function get_loader() {
        return $this->loader;
    }

    /**
     * Retrieve the version number of the plugin.
     *
     * @since     1.0.0
     * @return    string    The version number of the plugin.
     */
    public function get_version() {
        return $this->version;
    }

}
