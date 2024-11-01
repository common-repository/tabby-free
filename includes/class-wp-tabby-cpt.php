<?php

class WP_Tabby_CPT {

/**
 * The ID of this plugin.
 *
 * @since    1.0.0
 * @access   private
 * @var      string    $plugin_name    The ID of this plugin.
 */
private $plugin_name;


/**
 * The version of this plugin.
 *
 * @since    1.0.0
 * @access   private
 * @var      string    $version    The current version of this plugin.
 */
private $version;

/**
 * Initialize the class and set its properties.
 *
 * @since    1.0.0
 * @param      string $plugin_name       The name of this plugin.
 * @param      string $version    The version of this plugin.
 */
public function __construct( $plugin_name, $version ) {

    $this->plugin_name = $plugin_name;
    $this->version     = $version;

}

/**
 * Custom Post Type of the Plugin.
 *
 * @since    1.0.0
 */
public function agtpro_post_type() {

    $labels = apply_filters(
        'post_type_labels_ag_wp_tabby',
        array(
            'name'               => esc_html_x( 'Tabby Groups', 'wp-tabby' ),
            'singular_name'      => esc_html_x( 'Tabs', 'wp-tabby' ),
            'add_new'            => esc_html__( 'Add New', 'wp-tabby' ),
            'add_new_item'       => esc_html__( 'Add New Tabby Group', 'wp-tabby' ),
            'edit_item'          => esc_html__( 'Edit Tabby Group', 'wp-tabby' ),
            'new_item'           => esc_html__( 'New Tabby Group', 'wp-tabby' ),
            'view_item'          => esc_html__( 'View Tabby Group', 'wp-tabby' ),
            'search_items'       => esc_html__( 'Search Tabs', 'wp-tabby' ),
            'not_found'          => esc_html__( 'No Tab Group found.', 'wp-tabby' ),
            'not_found_in_trash' => esc_html__( 'No Tab Group found in trash.', 'wp-tabby' ),
            'parent_item_colon'  => esc_html__( 'Parent Item:', 'wp-tabby' ),
            'menu_name'          => esc_html__( 'WP Tabby', 'wp-tabby' ),
            'all_items'          => esc_html__( 'Tab Groups', 'wp-tabby' ),
        )
    );

    $args = apply_filters(
        'post_type_args_ag_wp_tabby',
        array(
            'labels'              => $labels,
            'public'              => false,
            'hierarchical'        => false,
            'exclude_from_search' => true,
            'show_ui'             => true,
            'show_in_admin_bar'   => false,
            'menu_position'       => apply_filters( 'ag_wp_tabby_menu_position', 55 ),
            'menu_icon'           => 'dashicons-buddicons-forums',
            'rewrite'             => false,
            'query_var'           => false,
            'imported'            => true,
            'supports'            => array(
                'title',
            ),
        )
    );
    register_post_type( 'ag_wp_tabby', $args );

}

/**
 * Change Tabs updated messages.
 *
 * @param string $messages The Update messages.
 * @return statement
 */
public function agtpro_updated_messages( $messages ) {
    global $post, $post_ID;
    $messages['wp-tabby'] = array(
        0  => '', // Unused. Messages start at index 1.
        1  => sprintf( __( 'Tabs updated.', 'wp-tabby' ) ),
        2  => '',
        3  => '',
        4  => __( ' updated.', 'wp-tabby' ),
        5  => isset( $_GET['revision'] ) ? sprintf( __( 'Tabs restored to revision from %s', 'wp-tabby' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6  => sprintf( __( 'Tabs published.', 'wp-tabby' ) ),
        7  => __( 'Tabs saved.', 'wp-tabby' ),
        8  => sprintf( __( 'Tabs submitted.', 'wp-tabby' ) ),
        9  => sprintf( __( 'Tabs scheduled for: <strong>%1$s</strong>.', 'wp-tabby' ), date_i18n( __( 'M j, Y @ G:i', 'wp-tabby' ), strtotime( $post->post_date ) ) ),
        10 => sprintf( __( 'Tabs draft updated.', 'wp-tabby' ) ),
    );
    return $messages;
}

/**
 * Add new custom columns.
 *
 * @param [type] $columns The columns.
 * @return statement
 */
public function agtpro_admin_column( $columns ) {
    return array(
        'cb'        => '<input type="checkbox" />',
        'title'     => esc_html__( 'Name', 'wp-tabby' ),
        'shortcode' => esc_html__( 'Shortcode', 'wp-tabby' ),
        'date'      => esc_html__( 'Date', 'wp-tabby' ),
    );
}

/**
 * Display admin columns content.
 *
 * @param mix    $column The columns.
 * @param string $post_id The post ID.
 * @return void
 */
public function agtpro_admin_field( $column, $post_id ) {

    switch ( $column ) {
        
        case 'shortcode':
            echo '<input title="copy the shortcode" style="width: 150px; padding: 6px; text-align: center;" type="text" onClick="this.select();" readonly="readonly" value="[wptabby id=&quot;' . esc_attr($post_id) . '&quot;]"/>';
            break;
        default:
            echo '';
    }
}

}
