<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: icon
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! class_exists( 'AGWP_TABBY_icon' ) ) {
  class AGWP_TABBY_icon extends AGWP_TABBYP {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $args = wp_parse_args( $this->field, array(
        'button_title' => esc_html__( 'Add Icon', 'wp-tabby' ),
        'remove_title' => esc_html__( 'Remove Icon', 'wp-tabby' ),
      ) );

      echo esc_attr($this->field_before());

      $nonce  = wp_create_nonce( 'agm_icon_nonce' );
      $hidden = ( empty( $this->value ) ) ? ' hidden' : '';

      echo '<div class="agm-icon-selects">';
      echo '<div id="agm-icon-preview" class="agm-icon-preview'. esc_attr( $hidden ) .'"><i class="'. esc_attr( $this->value ) .'"></i></div>';
      echo '<a href="#" class="button button-primary agm-icon-add" data-nonce="'. esc_attr( $nonce ) .'">'. esc_html__($args['button_title'], 'wp-tabby') .'</a>';
      echo '<a href="#" class="button agm-warning-primary agm-icon-remove'. esc_attr( $hidden ) .'">'. esc_html__($args['remove_title'], 'wp-tabby') .'</a>';
      echo '<input type="text" name="'. esc_attr( $this->field_name() ) .'" value="'. esc_attr( $this->value ) .'" class="agm-icon-value"'. wp_kses_post($this->field_attributes()) .' />';
      echo '</div>';

      echo esc_attr($this->field_after());

    }

    public function enqueue() {
      add_action( 'admin_footer', array( &$this, 'add_footer_modal_icon' ) );
      add_action( 'customize_controls_print_footer_scripts', array( &$this, 'add_footer_modal_icon' ) );
    }

    public function add_footer_modal_icon() {
    ?>
      <div id="agm-modal-icon" class="agm-modal agm-modal-icon hidden">
        <div class="agm-modal-table">
          <div class="agm-modal-table-cell">
            <div class="agm-modal-overlay"></div>
            <div class="agm-modal-inner">
              <div class="agm-modal-title">
                <?php esc_html_e( 'Add Icon', 'wp-tabby' ); ?>
                <div class="agm-modal-close agm-icon-close"></div>
              </div>
              <div class="agm-modal-header">
                <input type="text" placeholder="<?php esc_html_e( 'Search...', 'wp-tabby' ); ?>" class="agm-icon-search" />
              </div>
              <div class="agm-modal-content">
                <div class="agm-modal-loading"><div class="agm-loading"></div></div>
                <div class="agm-modal-load"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
    }

  }
}
