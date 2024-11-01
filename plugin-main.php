<?php
/**
 * Plugin Name:       WP Tabby Free
 * Plugin URI:        https://wordpress.org/plugins/tabby-free/
 * Description:       Tabby is the most cleanest, easy-to-use, lightweight, customizable, responsive WordPress tabs plugin to show your contents in a beautiful way.
 * Version:           1.1.0
 * Author:            AppGlut
 * Author URI:        https://www.appglut.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-tabby
 * Domain Path:       /languages
 */

if(!defined('ABSPATH'))
{
    die();
}

define( 'WP_TABBY_NAME', 'WP Tabby' );
define( 'WP_TABBY_VERSION', '1.1.0' );
define( 'WP_TABBY_BASENAME', plugin_basename( __FILE__ ) );
define( 'WP_TABBY_PATH', plugin_dir_path( __FILE__ ) );
define( 'WP_TABBY_URL', plugin_dir_url( __FILE__ ) );
define( 'WP_TABBY_DIRNAME', dirname( plugin_basename( __FILE__ ) ) );
define( 'WP_TABBY_SLUG', dirname( plugin_basename( __FILE__ ) ));



require_once WP_TABBY_PATH. 'includes/class-wp-tabby.php';


add_action( 'init', 'wp_tabby_initial_functions', 9);

function wp_tabby_initial_functions()
{

require_once WP_TABBY_PATH. 'includes/model/classes/setup.class.php';
require_once WP_TABBY_PATH. 'includes/metaboxes-config.php';
require_once WP_TABBY_PATH. 'includes/taxonomy-options.php';
require_once WP_TABBY_PATH. 'includes/admin-options.php';

}


if(!function_exists('agwp_tabby_run'))
{
 function agwp_tabby_run()
{
    $plugin = new Agwp_tabby_tabs();
    $plugin -> run();
}
agwp_tabby_run();
}


