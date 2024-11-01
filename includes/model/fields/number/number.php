<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: number
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! class_exists( 'AGWP_TABBY_number' ) ) {
  class AGWP_TABBY_number extends AGWP_TABBYP {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $args = wp_parse_args( $this->field, array(
        'unit' => '',
      ) );

      echo esc_attr($this->field_before());
      echo '<div class="agm--wrap">';
      echo '<input type="number" name="'. esc_attr( $this->field_name() ) .'" value="'. esc_attr( $this->value ) .'"'. wp_kses_post($this->field_attributes( array( 'class' => 'agm-input-number' ) )) .' step="any" />';
      echo ( ! empty( $args['unit'] ) ) ? '<span class="agm--unit">'. esc_attr( $args['unit'] ) .'</span>' : '';
      echo '</div>';
      echo esc_attr($this->field_after());

    }

    public function output() {

      $output    = '';
      $elements  = ( is_array( $this->field['output'] ) ) ? $this->field['output'] : array_filter( (array) $this->field['output'] );
      $important = ( ! empty( $this->field['output_important'] ) ) ? '!important' : '';
      $mode      = ( ! empty( $this->field['output_mode'] ) ) ? $this->field['output_mode'] : 'width';
      $unit      = ( ! empty( $this->field['unit'] ) ) ? $this->field['unit'] : 'px';

      if ( ! empty( $elements ) && isset( $this->value ) && $this->value !== '' ) {
        foreach ( $elements as $key_property => $element ) {
          if ( is_numeric( $key_property ) ) {
            if ( $mode ) {
              $output = implode( ',', $elements ) .'{'. $mode .':'. $this->value . $unit . $important .';}';
            }
            break;
          } else {
            $output .= $element .'{'. $key_property .':'. $this->value . $unit . $important .'}';
          }
        }
      }

      $this->parent->output_css .= $output;

      return $output;

    }

  }
}
