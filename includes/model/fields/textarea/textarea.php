<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: textarea
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! class_exists( 'AGWP_TABBY_textarea' ) ) {
  class AGWP_TABBY_textarea extends AGWP_TABBYP {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      echo esc_attr($this->field_before());
      echo esc_attr($this->shortcoder());
      echo '<textarea name="'. esc_attr( $this->field_name() ) .'"'. wp_kses_post($this->field_attributes()) .'>'. wp_kses_post($this->value) .'</textarea>';
      echo esc_attr($this->field_after());

    }

    public function shortcoder() {

      if ( ! empty( $this->field['shortcoder'] ) ) {

        $instances = ( is_array( $this->field['shortcoder'] ) ) ? $this->field['shortcoder'] : array_filter( (array) $this->field['shortcoder'] );

        foreach ( $instances as $instance_key ) {

          if ( isset( AGWP_TABBY::$shortcode_instances[$instance_key] ) ) {

            $button_title = AGWP_TABBY::$shortcode_instances[$instance_key]['button_title'];

            echo '<a href="#" class="button button-primary agm-shortcode-button" data-modal-id="'. esc_attr( $instance_key ) .'">'. esc_html__($button_title, 'wp-tabby') .'</a>';

          }

        }

      }

    }
  }
}
