<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: switcher
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! class_exists( 'AGWP_TABBY_switcher' ) ) {
  class AGWP_TABBY_switcher extends AGWP_TABBYP {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $active     = ( ! empty( $this->value ) ) ? ' agm--active' : '';
      $text_on    = ( ! empty( $this->field['text_on'] ) ) ? $this->field['text_on'] : esc_html__( 'On', 'wp-tabby' );
      $text_off   = ( ! empty( $this->field['text_off'] ) ) ? $this->field['text_off'] : esc_html__( 'Off', 'wp-tabby' );
      $text_width = ( ! empty( $this->field['text_width'] ) ) ? ' style="width: '. wp_kses_post( $this->field['text_width'] ) .'px;"': '';

      echo esc_attr($this->field_before());

      echo '<div class="agm--switcher'. esc_attr( $active ) .'"'. wp_kses_post($text_width) .'>';
      echo '<span class="agm--on">'. esc_attr( $text_on ) .'</span>';
      echo '<span class="agm--off">'. esc_attr( $text_off ) .'</span>';
      echo '<span class="agm--ball"></span>';
      echo '<input type="text" name="'. esc_attr( $this->field_name() ) .'" value="'. esc_attr( $this->value ) .'"'. wp_kses_post($this->field_attributes()) .' />';
      echo '</div>';

      echo ( ! empty( $this->field['label'] ) ) ? '<span class="agm--label">'. esc_attr( $this->field['label'] ) . '</span>' : '';

      echo esc_attr($this->field_after());

    }

  }
}
