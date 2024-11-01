<?php

if (!defined('ABSPATH')) {
    die;
}

// Set a unique slug-like ID
$AGWP_TABBY_WOO_OPTIONS = 'agwp_tabby_woo_options';

//
// Create Woo options
AGWP_TABBY::createOptions($AGWP_TABBY_WOO_OPTIONS, array(
    // menu settings
    'menu_title' => esc_html__('Woo Tabs', 'wp-tabby'),
    'menu_slug' => 'woo-tabs',
    'menu_parent' => 'edit.php?post_type=ag_wp_tabby',
    'menu_type' => 'submenu',
    'menu_capability' => 'manage_options',
    'framework_title' => esc_html__('WooCommerce Tabs', 'wp-tabby'),
    'framework_class' => 'woo-tabs-options', // The type of the database save options. `serialize` or `unserialize`
));

// Create a section
AGWP_TABBY::createSection($AGWP_TABBY_WOO_OPTIONS, array(
    'fields' => array(

        array(
            
            'type'    => 'heading',
            'content' => esc_html__('This section only for PRO', 'wp-tabby'),

        ),

    )));

// Set a unique slug-like ID
$AGWP_TABBY_SETTINGS_OPTIONS = 'agwp_tabby_settings_options';

// Create Woo options
AGWP_TABBY::createOptions($AGWP_TABBY_SETTINGS_OPTIONS, array(
    // menu settings
    'menu_title' => esc_html__('Settings', 'wp-tabby'),
    'menu_slug' => 'options-settings',
    'menu_parent' => 'edit.php?post_type=ag_wp_tabby',
    'menu_type' => 'submenu',
    'menu_capability' => 'manage_options',
    'framework_title' => esc_html__('Tabby Settings', 'wp-tabby'),
    'framework_class' => 'woo-tabs-settings', // The type of the database save options. `serialize` or `unserialize`
));

// Create a section
// Create a section
AGWP_TABBY::createSection($AGWP_TABBY_SETTINGS_OPTIONS, array(
    'fields' => array(

        array(

            'id' => 'agwp_tabby_post_types_admin',
            'class' => 'pro_only',
            'type' => 'checkbox',
            'title' => esc_html__('Show Icon options in Type', 'wp-tabby'),
            'options' => 'post_types',

        ),

        array(

            'id' => 'agwp_tabby_tax_values_admin',
            'type' => 'checkbox',
            'title' => esc_html__('Show Icon options in Taxonomy', 'wp-tabby'),
            'options' => 'all_terms',

        ),

        array(
            'id' => 'wp_tabby_settings_options',
            'title' => esc_html__('Global Settings', 'wp-tabby'),
            'type' => 'tabbed',
            'tabs' => array(
                array(
                    'title' => 'Tab Settings',
                    'icon' => 'fa fa-book',
                    'fields' => array(
                        array(
                            'id' => 'agwp_tabby_layout',
                            'type' => 'image_select',
                            'title' => esc_html__('Select layout', 'wp-tabby'),
                            'subtitle' => esc_html__('Choose a layout', 'wp-tabby'),
                            'class' => 'wp_tabby_layout_class',
                            'options' => array(
                                'horizontal-top' => array(
                                    'image' => WP_TABBY_URL . 'includes\model\assets\images\horizontal-top.png',
                                    'option_name' => esc_html__('Top', 'wp-tabby'),
                                ),
                                'horizontal-bottom' => array(
                                    'image' => WP_TABBY_URL . 'includes\model\assets\images\horizontal-bottom.png',
                                    'option_name' => esc_html__('Bottom', 'wp-tabby'),
                                ),

                                'vertical-top' => array(
                                    'image' => WP_TABBY_URL . 'includes\model\assets\images\vertical-left.png',
                                    'option_name' => esc_html__('Left', 'wp-tabby'),
                                ),
                                'middle' => array(
                                    'image' => WP_TABBY_URL . 'includes\model\assets\images\middle.png',
                                    'option_name' => esc_html__('Middle', 'wp-tabby'),
                                ),
                            ),
                            'radio' => true,
                            'default' => 'horizontal-top',
                        ),

                        array(
                            'id' => 'agwp_tabby_layout_align',
                            'class' => 'agwp_tabby_tabs_align',
                            'type' => 'button_set',
                            'title' => esc_html__('Tabs Alignment', 'wp-tabby'),
                            'subtitle' => esc_html__('Alignment of layout', 'wp-tabby'),
                            'options' => array(
                                'left-align' => esc_html__('Left', 'wp-tabby'),
                                'right-align' => esc_html__('Right', 'wp-tabby'),
                                'full-width' => esc_html__('Full Width', 'wp-tabby'),
                            ),
                            'default' => 'left-align',
                        ),

                        array(
                            'id' => 'agwp_tabby_display_position',
                            'class' => 'agwp_tabby_display_position',
                            'type' => 'radio',
                            'title' => esc_html__('SideTab Display Position', 'wp-tabby'),
                            'subtitle' => esc_html__('display position', 'wp-tabby'),
                            'options' => array(
                                'fixed' => esc_html__('Fixed', 'wp-tabby'),
                                'absolute' => esc_html__('Absolute', 'wp-tabby'),
                            ),
                            'default' => 'fixed',
                        ),

                        array(
                            'id' => 'agwp_tabby_sidebar_layout_align',
                            'class' => 'agwp_tabby_sidebar_tabs_align',
                            'type' => 'button_set',
                            'title' => esc_html__('Sidebar Tabs Alignment', 'wp-tabby'),
                            'subtitle' => esc_html__('Alignment of layout', 'wp-tabby'),
                            'options' => array(
                                'left-align' => esc_html__('Left', 'wp-tabby'),
                                'bottom-left' => esc_html__('Bottom Left', 'wp-tabby'),
                                'bottom-right' => esc_html__('Bottom Right', 'wp-tabby'),
                                'right-align' => esc_html__('Right', 'wp-tabby'),
                            ),
                            'default' => 'left-align',
                        ),

                        array(
                            'id' => 'wptabby_theme_options',
                            'type' => 'image_select',
                            'class' => 'wptabby_theme_options',
                            'title' => esc_html__('Select Theme', 'wp-tabby'),
                            'options' => array(
                                'default' => array(
                                    'image' => WP_TABBY_URL . 'includes\model\assets\images\default.png',
                                    'option_name' => esc_html__('Default', 'wp-tabby'),
                                ),
                                'zutab' => array(
                                    'image' => WP_TABBY_URL . 'includes\model\assets\images\zutab.png',
                                    'option_name' => esc_html__('ZuTab', 'wp-tabby'),
                                ),

                                'captab' => array(
                                    'image' => WP_TABBY_URL . 'includes\model\assets\images\captab.png',
                                    'option_name' => esc_html__('CapTab', 'wp-tabby'),
                                ),

                                'stabbytab' => array(
                                    'image' => WP_TABBY_URL . 'includes\model\assets\images\stabytab.png',
                                    'option_name' => esc_html__('StabyTab', 'wp-tabby'),
                                ),

                                'blabtab' => array(
                                    'image' => WP_TABBY_URL . 'includes\model\assets\images\blabtab.png',
                                    'option_name' => esc_html__('BlabTab', 'wp-tabby'),
                                ),
                                'fstab' => array(
                                    'image' => WP_TABBY_URL . 'includes\model\assets\images\fstab.png',
                                    'option_name' => esc_html__('FsTab', 'wp-tabby'),
                                ),
                                'steptab' => array(
                                    'image' => WP_TABBY_URL . 'includes\model\assets\images\steptab.png',
                                    'option_name' => esc_html__('StepTab', 'wp-tabby'),
                                ),
                                'evotab' => array(
                                    'image' => WP_TABBY_URL . 'includes\model\assets\images\evotab.png',
                                    'option_name' => esc_html__('EvoTab', 'wp-tabby'),
                                ),
                            ),
                            'radio' => true,
                            'default' => 'default',

                        ),

                        array(
                            'id' => 'wp_tabby_click_menu',
                            'type' => 'radio',
                            'title' => esc_html__('Select for Icons Menu', 'wp-tabby'),
                            'subtitle' => esc_html__('choose Icon Menu ', 'wp-tabby'),
                            'options' => array(
                                'default_menu' => esc_html__('Default Title Menu', 'wp-tabby'),
                                'icon_menu' => esc_html__('Icons Menu', 'wp-tabby'),
                            ),
                            'default' => 'default_menu',
                        ),

                    ),

                ),
                array(
                    'title' => 'Display Options',
                    'icon' => 'fab fa-hive',
                    'fields' => array(

                        array(
                            'id' => 'agwp_tabby_section_title_switcher',
                            'type' => 'switcher',
                            'title' => esc_html__('Show Tabs Section Title', 'wp-tabby'),
                            'subtitle' => esc_html__('Show/Hide Section Title', 'wp-tabby'),
                            'default' => false,
                        ),

                        array(
                            'id' => 'agwp_tabby_section_title_tag',
                            'type' => 'select_options',
                            'title' => esc_html__('Section Title HTML Tag', 'wp-tabby'),
                            'subtitle' => esc_html__('Select a tag for title.', 'wp-tabby'),
                            'options' => array(
                                'h1' => 'H1',
                                'h2' => 'H2',
                                'h3' => 'H3',
                                'h4' => 'H4',
                                'h5' => 'H5',
                                'h6' => 'H6',
                                'p' => 'p',
                            ),
                            'default' => 'h4',
                            'dependency' => array('agwp_tabby_section_title_switcher', '==', true),
                        ),

                        array(
                            'id' => 'agwp_tabby_section_title_tag_color',
                            'type' => 'color',
                            'title' => esc_html__('Section Title Tag Color', 'wp-tabby'),
                            'subtitle' => esc_html__('Select title tag color', 'wp-tabby'),
                            'default' => '#000',
                            'dependency' => array('agwp_tabby_section_title_switcher', '==', true),
                        ),

                        array(
                            'id' => 'agwp_tabby_description_sliding',
                            'class' => 'agwp_tabby_content_sliding',
                            'type' => 'select_options',
                            'title' => esc_html__('Content Animation', 'wp-tabby'),
                            'subtitle' => esc_html__('Choose Contents will slide', 'wp-tabby'),
                            'options' => array(
                                'no-slide' => esc_html__('No Slide', 'wp-tabby'),
                                'from-top' => esc_html__('From Top', 'wp-tabby'),
                                'from-bottom' => esc_html__('From Bottom', 'wp-tabby'),
                                'from-right' => esc_html__('From Right', 'wp-tabby'),
                                'from-left' => esc_html__('From Left', 'wp-tabby'),
                            ),
                            'default' => 'no-slide',
                        ),

                        array(
                            'type' => 'subheading',
                            'content' => esc_html__('Tabs Icon', 'wp-tabby'),
                        ),

                        array(
                            'id' => 'agwp_tabby_tabs_icon_size',
                            'type' => 'spacing',
                            'title' => esc_html__('Icon Size', 'wp-tabby'),
                            'subtitle' => esc_html__('Set Icon size', 'wp-tabby'),
                            'all' => true,
                            'all_text' => false,
                            'all_placeholder' => 'size',
                            'default' => array(
                                'all' => '20',
                            ),
                            'units' => array(
                                'px',
                            ),
                        ),

                        array(
                            'id' => 'agwp_tabby_tabs_icon_space',
                            'type' => 'spacing',
                            'title' => esc_html__('Space Between Title and Icon', 'wp-tabby'),
                            'subtitle' => esc_html__('Set space', 'wp-tabby'),
                            'all' => true,
                            'all_text' => false,
                            'all_placeholder' => 'size',
                            'default' => array(
                                'all' => '1',
                            ),
                            'units' => array(
                                'px',
                            ),
                        ),

                        array(
                            'id' => 'agwp_tabby_icon_color',
                            'type' => 'color_group',
                            'class' => 'agwp_tabby_icon_color',
                            'title' => esc_html__('Icon Color', 'wp-tabby'),
                            'subtitle' => esc_html__('Set Icon Color', 'wp-tabby'),
                            'options' => array(
                                'icon-color' => esc_html__('Color', 'wp-tabby'),
                                'icon-color-active' => esc_html__('Active Color', 'wp-tabby'),
                                'icon-color-hover' => esc_html__('Hover Color', 'wp-tabby'),
                            ),
                            'default' => array(
                                'icon-color' => '#000',
                                'icon-color-active' => '#000',
                                'icon-color-hover' => '#000',
                            ),
                        ),

                        array(
                            'id' => 'agwp_tabby_icon_position',
                            'type' => 'button_set',
                            'title' => esc_html__('Icon Position', 'wp-tabby'),
                            'class' => 'agwp_tabby_icon_position',
                            'options' => array(
                                'right' => esc_html__('Left', 'wp-tabby'),
                                'none' => esc_html__('Top', 'wp-tabby'),
                                'left' => esc_html__('Right', 'wp-tabby'),
                            ),
                            'default' => 'right',
                        ),

                        array(
                            'type' => 'subheading',
                            'content' => esc_html__('Tabs Title and Description', 'wp-tabby'),
                        ),

                        array(
                            'id' => 'agwp_tabby_font_family',
                            'type' => 'typography',
                            'title' => esc_html__('Font Typography', 'wp-tabby'),
                            'subtitle' => esc_html__('Select a Font Family', 'wp-tabby'),
                            'font_family' => true,
                        ),

                        array(
                            'id' => 'agwp_tabby_tab_title_font_size',
                            'type' => 'spacing',
                            'title' => esc_html__('Title Font Size', 'wp-tabby'),
                            'subtitle' => esc_html__('Set Font size', 'wp-tabby'),
                            'all' => true,
                            'all_text' => false,
                            'all_placeholder' => 'size',
                            'default' => array(
                                'all' => '20',
                            ),
                            'units' => array(
                                'px',
                            ),

                        ),

                        array(
                            'id' => 'agwp_tabby_tab_title_color',
                            'type' => 'color_group',
                            'class' => 'agwp_tabby_tab_title_color',
                            'title' => esc_html__('Title Color', 'wp-tabby'),
                            'subtitle' => esc_html__('Set tab title color.', 'wp-tabby'),
                            'options' => array(
                                'tab-title-color' => esc_html__('Color', 'wp-tabby'),
                                'tab-title-color-active' => esc_html__('Active Color', 'wp-tabby'),
                                'tab-title-color-hover' => esc_html__('Hover Color', 'wp-tabby'),
                            ),
                            'default' => array(
                                'tab-title-color' => '#000',
                                'tab-title-color-active' => '#000',
                                'tab-title-color-hover' => '#000',
                            ),
                        ),

                        array(
                            'id' => 'agwp_tabby_tab_back_title_color',
                            'type' => 'color_group',
                            'class' => 'agwp_tabby_tab_back_title_color',
                            'title' => esc_html__('Title Background Color', 'wp-tabby'),
                            'subtitle' => esc_html__('Set tab background color.', 'wp-tabby'),
                            'options' => array(
                                'tab-title-back-color' => esc_html__('Color', 'wp-tabby'),
                                'tab-title-back-color-active' => esc_html__('Active Color', 'wp-tabby'),
                                'tab-title-back-color-hover' => esc_html__('Hover Color', 'wp-tabby'),
                            ),
                            'default' => array(
                                'tab-title-back-color' => '#eee',
                                'tab-title-back-color-active' => '#fff',
                                'tab-title-back-color-hover' => '#fff',
                            ),
                        ),

                        array(
                            'id' => 'agwp_tabby_title_padding',
                            'type' => 'spacing',
                            'title' => esc_html__('Title Padding', 'wp-tabby'),
                            'subtitle' => esc_html__('Set tabs title padding.', 'wp-tabby'),
                            'units' => array('px'),
                        ),

                        array(
                            'id' => 'agwp_tabby_title_margin',
                            'type' => 'spacing',
                            'title' => esc_html__('Title Margin', 'wp-tabby'),
                            'subtitle' => esc_html__('Set tabs title margin.', 'wp-tabby'),
                            'units' => array('px'),
                        ),

                        array(
                            'id' => 'agwp_tabby_title_border',
                            'type' => 'border',
                            'title' => esc_html__('Title Border', 'wp-tabby'),
                            'subtitle' => esc_html__('Set title border', 'wp-tabby'),
                            'all' => true,
                            'style' => true,
                            'default' => array(
                                'all' => 1,
                                'style' => 'solid',
                                'color' => '#ccc',
                            ),
                        ),

                        array(
                            'id' => 'agwp_tabby_tabs_border_radius',
                            'type' => 'spacing',
                            'title' => esc_html__('Title Border Radius', 'wp-tabby'),
                            'subtitle' => esc_html__('Set tabs border radius.', 'wp-tabby'),
                            'all' => true,
                            'all_placeholder' => 'border',
                            'default' => array(
                                'all' => 2,
                                'units' => 'px',
                            ),
                            'units' => array(
                                'px',
                                '%',
                            ),
                            'attributes' => array(
                                'min' => 0,
                                'max' => 200,
                            ),
                        ),

                        array(
                            'id' => 'agwp_tabby_background_type',
                            'type' => 'color',
                            'title' => esc_html__('Description Background Color', 'wp-tabby'),
                            'subtitle' => esc_html__('Select Background Color', 'wp-tabby'),
                        ),

                        array(
                            'id' => 'agwp_tabby_desc_padding',
                            'type' => 'spacing',
                            'title' => esc_html__('Description Padding', 'wp-tabby'),
                            'subtitle' => esc_html__('Set description padding', 'wp-tabby'),
                            'units' => array('px'),
                            'default' => array(
                                'left' => '20',
                                'top' => '20',
                                'bottom' => '20',
                                'right' => '20',
                            ),
                        ),
                        array(
                            'id' => 'agwp_tabby_desc_border',
                            'type' => 'border',
                            'title' => esc_html__('Description Border', 'wp-tabby'),
                            'subtitle' => esc_html__('Set description border', 'wp-tabby'),
                            'all' => true,
                            'style' => true,
                            'default' => array(
                                'all' => 1,
                                'style' => 'solid',
                                'color' => '#ccc',
                            ),
                        ),
                    ),
                ),
            ),
        ),

    )));