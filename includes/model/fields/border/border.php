<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: border
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! class_exists( 'AGWP_TABBY_border' ) ) {
  class AGWP_TABBY_border extends AGWP_TABBYP {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $args = wp_parse_args( $this->field, array(
        'top_icon'           => '<i class="fas fa-long-arrow-alt-up"></i>',
        'left_icon'          => '<i class="fas fa-long-arrow-alt-left"></i>',
        'bottom_icon'        => '<i class="fas fa-long-arrow-alt-down"></i>',
        'right_icon'         => '<i class="fas fa-long-arrow-alt-right"></i>',
        'all_icon'           => '<i class="fas fa-arrows-alt"></i>',
        'top_placeholder'    => esc_html__( 'top', 'wp-tabby' ),
        'right_placeholder'  => esc_html__( 'right', 'wp-tabby' ),
        'bottom_placeholder' => esc_html__( 'bottom', 'wp-tabby' ),
        'left_placeholder'   => esc_html__( 'left', 'wp-tabby' ),
        'all_placeholder'    => esc_html__( 'all', 'wp-tabby' ),
        'top'                => true,
        'left'               => true,
        'bottom'             => true,
        'right'              => true,
        'all'                => false,
        'color'              => true,
        'style'              => true,
        'unit'               => 'px',
      ) );

      $default_value = array(
        'top'        => '',
        'right'      => '',
        'bottom'     => '',
        'left'       => '',
        'color'      => '',
        'style'      => 'solid',
        'all'        => '',
      );

      $border_props = array(
        'solid'     => esc_html__( 'Solid', 'wp-tabby' ),
        'dashed'    => esc_html__( 'Dashed', 'wp-tabby' ),
        'dotted'    => esc_html__( 'Dotted', 'wp-tabby' ),
        'double'    => esc_html__( 'Double', 'wp-tabby' ),
        'inset'     => esc_html__( 'Inset', 'wp-tabby' ),
        'outset'    => esc_html__( 'Outset', 'wp-tabby' ),
        'groove'    => esc_html__( 'Groove', 'wp-tabby' ),
        'ridge'     => esc_html__( 'ridge', 'wp-tabby' ),
        'none'      => esc_html__( 'None', 'wp-tabby' )
      );

      $default_value = ( ! empty( $this->field['default'] ) ) ? wp_parse_args( $this->field['default'], $default_value ) : $default_value;

      $value = wp_parse_args( $this->value, $default_value );

      echo esc_attr($this->field_before());

      echo '<div class="agm--inputs">';

      if ( ! empty( $args['all'] ) ) {

        $placeholder = ( ! empty( $args['all_placeholder'] ) ) ? ' placeholder="'. esc_attr( $args['all_placeholder'] ) .'"' : '';

        echo '<div class="agm--input">';
        echo ( ! empty( $args['all_icon'] ) ) ? '<span class="agm--label agm--icon">'. wp_kses_post($args['all_icon']) .'</span>' : '';
        echo '<input type="number" name="'. esc_attr( $this->field_name( '[all]' ) ) .'" value="'. esc_attr( $value['all'] ) .'"'. esc_attr($placeholder) .' class="agm-input-number agm--is-unit" step="any" />';
        echo ( ! empty( $args['unit'] ) ) ? '<span class="agm--label agm--unit">'. esc_attr( $args['unit'] ) .'</span>' : '';
        echo '</div>';

      } else {

        $properties = array();

        foreach ( array( 'top', 'right', 'bottom', 'left' ) as $prop ) {
          if ( ! empty( $args[$prop] ) ) {
            $properties[] = $prop;
          }
        }

        $properties = ( $properties === array( 'right', 'left' ) ) ? array_reverse( $properties ) : $properties;

        foreach ( $properties as $property ) {

          $placeholder = ( ! empty( $args[$property.'_placeholder'] ) ) ? ' placeholder="'. wp_kses_post( $args[$property.'_placeholder'] ) .'"' : '';

          echo '<div class="agm--input">';
          echo ( ! empty( $args[$property.'_icon'] ) ) ? '<span class="agm--label agm--icon">'. esc_attr($args[$property.'_icon']) .'</span>' : '';
          echo '<input type="number" name="'. esc_attr( $this->field_name( '['. $property .']' ) ) .'" value="'. esc_attr( $value[$property] ) .'"'. esc_attr($placeholder) .' class="agm-input-number agm--is-unit" step="any" />';
          echo ( ! empty( $args['unit'] ) ) ? '<span class="agm--label agm--unit">'. esc_attr( $args['unit'] ) .'</span>' : '';
          echo '</div>';

        }

      }

      if ( ! empty( $args['style'] ) ) {
        echo '<div class="agm--input">';
        echo '<select name="'. esc_attr( $this->field_name( '[style]' ) ) .'">';
        foreach ( $border_props as $border_prop_key => $border_prop_value ) {
          $selected = ( $value['style'] === $border_prop_key ) ? ' selected' : '';
          echo '<option value="'. esc_attr( $border_prop_key ) .'"'. esc_attr( $selected ) .'>'. esc_attr( $border_prop_value ) .'</option>';
        }
        echo '</select>';
        echo '</div>';
      }

      echo '</div>';

      if ( ! empty( $args['color'] ) ) {
        $default_color_attr = ( ! empty( $default_value['color'] ) ) ? ' data-default-color="'. esc_attr( $default_value['color'] ) .'"' : '';
        echo '<div class="agm--color">';
        echo '<div class="agm-field-color">';
        echo '<input type="text" name="'. esc_attr( $this->field_name( '[color]' ) ) .'" value="'. esc_attr( $value['color'] ) .'" class="agm-color"'. esc_attr($default_color_attr) .' />';
        echo '</div>';
        echo '</div>';
      }

      echo esc_attr($this->field_after());

    }

    public function output() {

      $output    = '';
      $unit      = ( ! empty( $this->value['unit'] ) ) ? $this->value['unit'] : 'px';
      $important = ( ! empty( $this->field['output_important'] ) ) ? '!important' : '';
      $element   = ( is_array( $this->field['output'] ) ) ? join( ',', $this->field['output'] ) : $this->field['output'];

      // properties
      $top     = ( isset( $this->value['top'] )    && $this->value['top']    !== '' ) ? $this->value['top']    : '';
      $right   = ( isset( $this->value['right'] )  && $this->value['right']  !== '' ) ? $this->value['right']  : '';
      $bottom  = ( isset( $this->value['bottom'] ) && $this->value['bottom'] !== '' ) ? $this->value['bottom'] : '';
      $left    = ( isset( $this->value['left'] )   && $this->value['left']   !== '' ) ? $this->value['left']   : '';
      $style   = ( isset( $this->value['style'] )  && $this->value['style']  !== '' ) ? $this->value['style']  : '';
      $color   = ( isset( $this->value['color'] )  && $this->value['color']  !== '' ) ? $this->value['color']  : '';
      $all     = ( isset( $this->value['all'] )    && $this->value['all']    !== '' ) ? $this->value['all']    : '';

      if ( ! empty( $this->field['all'] ) && ( $all !== '' || $color !== '' ) ) {

        $output  = $element .'{';
        $output .= ( $all   !== '' ) ? 'border-width:'. $all . $unit . $important .';' : '';
        $output .= ( $color !== '' ) ? 'border-color:'. $color . $important .';'       : '';
        $output .= ( $style !== '' ) ? 'border-style:'. $style . $important .';'       : '';
        $output .= '}';

      } else if ( $top !== '' || $right !== '' || $bottom !== '' || $left !== '' || $color !== '' ) {

        $output  = $element .'{';
        $output .= ( $top    !== '' ) ? 'border-top-width:'. $top . $unit . $important .';'       : '';
        $output .= ( $right  !== '' ) ? 'border-right-width:'. $right . $unit . $important .';'   : '';
        $output .= ( $bottom !== '' ) ? 'border-bottom-width:'. $bottom . $unit . $important .';' : '';
        $output .= ( $left   !== '' ) ? 'border-left-width:'. $left . $unit . $important .';'     : '';
        $output .= ( $color  !== '' ) ? 'border-color:'. $color . $important .';'                 : '';
        $output .= ( $style  !== '' ) ? 'border-style:'. $style . $important .';'                 : '';
        $output .= '}';

      }

      $this->parent->output_css .= $output;

      return $output;

    }

  }
}
