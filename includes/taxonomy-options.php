<?php

if (!defined('ABSPATH')) {
    die;
}

$taxonomy_options = get_option('agwp_tabby_settings_options');
$taxonomies = [];
if(!empty($taxonomy_options['agwp_tabby_tax_values_admin'])){
foreach($taxonomy_options['agwp_tabby_tax_values_admin'] as $single_value)
{
$taxonomies[] = $single_value;
}
}
// Set a unique slug-like ID
$AGWP_TABBY_TAXONOMY_OPTIONS = 'agwp_tabby_taxonomy_options';

//
// Create taxonomy options
AGWP_TABBY::createTaxonomyOptions( $AGWP_TABBY_TAXONOMY_OPTIONS, array(
  'taxonomy'  => $taxonomies,
  'data_type' => 'serialize', // The type of the database save options. `serialize` or `unserialize`
) );

//
// Create a section
AGWP_TABBY::createSection( $AGWP_TABBY_TAXONOMY_OPTIONS, array(
  'fields' => array(
    
    array(
      'id' => 'taxonomy_tabby_icon_switcher',
      'class' => 'taxonomy_tabby_icon_switcher',
      'type' => 'switcher',
      'text_on' => esc_html__('Font Icon', 'wp-tabby'),
      'text_off' => esc_html__('Custom Icon', 'wp-tabby'),
      'default' => true,
      'text_width' => 110
  ),

  array(
      'id' => 'taxonomy_product_wp_tabby_icon',
      'class' => 'taxonomy_product_wp_tabby_icon',
      'button_title' => esc_html__( 'Font Icon', 'wp-tabby' ),
      'type' => 'icon',
      'library'      => 'image',
      'url'          => false,
      'dependency' => array('taxonomy_tabby_icon_switcher', '==', true),
  ),

  array(
      'id' => 'taxonomy_wp_tabby_custom_icon',
      'class' => 'taxonomy_wp_tabby_custom_icon',
      'button_title' => esc_html__( 'Custom Icon', 'wp-tabby' ),
      'type' => 'media',
      'library'      => 'image',
      'url'          => false,
      'dependency' => array('taxonomy_tabby_icon_switcher', '==', false),
  ),


  )
) );