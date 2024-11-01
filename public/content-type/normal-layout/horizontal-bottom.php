<?php 
if (is_array($content_data['agwp_tabby_content']) || is_object($content_data['agwp_tabby_content'])): ?>
<div class="agwt-container">
    <?php if ($content_display_options['wp_tabby_settings_options']['agwp_tabby_section_title_switcher'] == true): ?>
    <div class="normal_content_section_title_<?php echo esc_attr($post_id); ?>">
        <div class="section_title">
            <?php echo ('<' . esc_attr($content_display_options['wp_tabby_settings_options']['agwp_tabby_section_title_tag'])) . '>'; ?><?php echo esc_html__($content_data['agwp_tabby_section_title'], 'wp-tabby'); ?><?php echo '</' . (esc_attr($content_display_options['wp_tabby_settings_options']['agwp_tabby_section_title_tag'])) . '>'; ?>
        </div>
    </div>

    <?php endif;?>


    <!-- Tabs Body -->
    <div class="wt-tabs-body wt-body<?php echo esc_attr($post_id); ?>">
        <?php

if (is_array($content_data['agwp_tabby_content']) || is_object($content_data['agwp_tabby_content'])):
    $wp_tabby_data_count_id = 1;
    foreach ($content_data['agwp_tabby_content'] as $single_data):
        $wp_tabby_control_id = "wt-tab" . $post_id . $wp_tabby_data_count_id;
        ?>

        <?php if (!empty($single_data['wp_tabby_content'])): ?>
        <!-- Start tabs-->
        <div class="wt-single-tab<?php echo esc_attr($post_id); ?>" id="<?php echo esc_attr($wp_tabby_control_id); ?>"
            <?php if ($wp_tabby_data_count_id == 1): ?> style="display:block;" <?php endif;?>>
                <?php echo wp_kses_post(apply_filters( 'the_content', $single_data['wp_tabby_content'])); ?>
        </div>
        <!-- End tabs -->
        <?php else: ?>
        <!-- Start tabs-->
        <div class="wt-single-tab<?php echo esc_attr($post_id); ?>" id="<?php echo esc_attr($wp_tabby_control_id); ?>"
        <?php if ($wp_tabby_data_count_id == 1): ?> style="display:block;" <?php endif;?>>
            <p><?php echo esc_html__('There is no content', 'wp-tabby'); ?></p>
        </div>
        <!-- End tabs -->
        <?php endif;?>

        <?php $wp_tabby_data_count_id++;endforeach;endif;?>

    </div>
    <!-- End Tabs Body -->

    <!-- Tabs Button -->
    <div class="wt-tabs-btn-container<?php echo esc_attr($post_id); ?> wt-bottom-style<?php echo esc_attr($post_id); ?>">

        <?php
if (is_array($content_data['agwp_tabby_content']) || is_object($content_data['agwp_tabby_content'])):
    $wp_tabby_data_count_id = 1;
    foreach ($content_data['agwp_tabby_content'] as $single_data):
        $wp_tabby_control_id = "wt-tab" . $post_id . $wp_tabby_data_count_id;
        ?>
        <a class="wt-btn<?php echo esc_attr($post_id); ?> wt-tabs-tb<?php echo esc_attr($post_id); ?> wt-tabs-top <?php if ($wp_tabby_data_count_id == 1): ?> active <?php endif;?>"
            style="cursor:pointer;"
            onclick="wtOpenTb(event,'<?php echo esc_attr($wp_tabby_control_id); ?>','<?php echo esc_attr($post_id); ?>', 'normal')">
            <?php if (($single_data['wp_tabby_icon_switcher']) == true): ?>
						            <i class="<?php echo esc_attr($single_data['wp_tabby_icon']); ?>" id="wtOpen"></i>
						            <?php endif;?>
            <?php if ((($single_data['wp_tabby_icon_switcher']) == false) && (!empty($single_data['wp_tabby_custom_icon']['url']))): ?>
            <img src="<?php echo esc_attr($single_data['wp_tabby_custom_icon']['url']); ?>" alt="Custom Icon" width="<?php echo $content_display_options['wp_tabby_settings_options']['agwp_tabby_tabs_icon_size']['all'] ?>" height="<?php echo $content_display_options['wp_tabby_settings_options']['agwp_tabby_tabs_icon_size']['all'] ?>">
            <?php endif;?>
            <?php if ($content_display_options['wp_tabby_settings_options']['wp_tabby_click_menu'] == 'default_menu'): ?>
            <div class="title_tag"><?php echo esc_html__($single_data['wp_tabby_title'], 'wp-tabby'); ?></div>
            <?php endif;?>
        </a>

        <?php $wp_tabby_data_count_id++;  endforeach;endif;?>

    </div>
    <!-- End Tabs Button -->


</div>

<?php endif;?>