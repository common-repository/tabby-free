<?php

    // $content_display_options = get_post_meta($post_id, 'agwp_tabby_options_settings', true);
    // print_r($content_display_options);

/*-- Default Theme --*/
if (is_array($content_display_options)) {
    if ($content_display_options['wp_tabby_settings_options']['wptabby_theme_options'] == 'default'):
        include_once WP_TABBY_PATH . "public/tab-theme/default-theme.php";
    endif;
}
/*--Default Theme--*/

/*--ZuTab Theme--*/
if (is_array($content_display_options)) {
    if ($content_display_options['wp_tabby_settings_options']['wptabby_theme_options'] == 'zutab'):
        include_once WP_TABBY_PATH . "public/tab-theme/zutab.php";
    endif;
}
/*--ZuTab Theme--*/

/*--CapTab Theme--*/
if (is_array($content_display_options)) {
    if ($content_display_options['wp_tabby_settings_options']['wptabby_theme_options'] == 'captab'):
        include_once WP_TABBY_PATH . "public/tab-theme/captab.php";
    endif;
}
/*--CapTab Theme--*/

/*--StabbyTab Theme--*/
if (is_array($content_display_options)) {
    if ($content_display_options['wp_tabby_settings_options']['wptabby_theme_options'] == 'stabbytab'):
       include_once WP_TABBY_PATH . "public/tab-theme/stabbytab.php";
    endif;
}
/*--StabbyTab Theme--*/

/*--BlabTab Theme--*/
if (is_array($content_display_options)) {
    if ($content_display_options['wp_tabby_settings_options']['wptabby_theme_options'] == 'blabtab'):
        include_once WP_TABBY_PATH . "public/tab-theme/blabtab.php";
    endif;
}
/*--BlabTab Theme--*/


/*--FsTab Theme--*/
if (is_array($content_display_options)) {
    if ($content_display_options['wp_tabby_settings_options']['wptabby_theme_options'] == 'fstab'):
        include_once WP_TABBY_PATH . "public/tab-theme/fstab.php";
    endif;
}
/*--FsTab Theme--*/

/*--StepTab Theme--*/
if (is_array($content_display_options)) {
    if ($content_display_options['wp_tabby_settings_options']['wptabby_theme_options'] == 'steptab'):
        include_once WP_TABBY_PATH . "public/tab-theme/steptab.php";
    endif;
}
/*--StepTab Theme--*/

/*--EvoTab Theme--*/
if (is_array($content_display_options)) {
    if ($content_display_options['wp_tabby_settings_options']['wptabby_theme_options'] == 'evotab'):
        include_once WP_TABBY_PATH . "public/tab-theme/evotab.php";
    endif;
}
/*--EvoTab Theme--*/

/******************** Sidebar Tabs ************************/
if (is_array($content_display_options)) {
if(($content_data['agwp_tabby_type'] == 'sidebar-tabs') && $content_display_options['wp_tabby_settings_options']['wptabby_theme_options'] == 'default'):
    include_once WP_TABBY_PATH . "public/tab-theme/sidebar-left.php";
endif;
}

if (is_array($content_display_options)) {
    if(($content_data['agwp_tabby_type'] == 'sidebar-tabs') && $content_display_options['wp_tabby_settings_options']['wptabby_theme_options'] == 'zutab'):
        include_once WP_TABBY_PATH . "public/tab-theme/bottom-left.php";
    endif;
}

if (is_array($content_display_options)) {
    if(($content_data['agwp_tabby_type'] == 'sidebar-tabs') && $content_display_options['wp_tabby_settings_options']['wptabby_theme_options'] == 'captab'):
            include_once WP_TABBY_PATH . "public/tab-theme/bottom-right.php";
    endif;
}

if (is_array($content_display_options)) {
    if(($content_data['agwp_tabby_type'] == 'sidebar-tabs') && $content_display_options['wp_tabby_settings_options']['wptabby_theme_options'] == 'stabbytab'):
            include_once WP_TABBY_PATH . "public/tab-theme/right.php";
    endif;
}