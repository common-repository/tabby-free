<?php

  if ((is_array($content_data['agwp_tabby_tax_field_taxonomy_'.$content_data['agwp_tabby_tax_field']])) || is_array($content_data['agwp_tabby_content']) || is_object($content_data['agwp_tabby_content'])):

   //$content_display_options = get_post_meta($post_id, 'agwp_tabby_options_settings', true);

    $agwp_tabby_normal_content = "";

    $section_title_color = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_section_title_tag_color']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_section_title_tag_color'] : '#000';

    $google_font_family = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_font_family']['font-family']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_font_family']['font-family'] : 'Poppins';
    $google_font_style = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_font_family']['font-style']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_font_family']['font-style'] : 'normal';
    $google_font_weight = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_font_family']['font-weight']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_font_family']['font-weight'] : 'normal';

    $tabs_title_background_color = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_tab_back_title_color']['tab-title-back-color']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_tab_back_title_color']['tab-title-back-color'] : '#eee';
    $tabs_title_active_background_color = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_tab_back_title_color']['tab-title-back-color-active']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_tab_back_title_color']['tab-title-back-color-active'] : '#fff';
    $tabs_title_hover_background_color = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_tab_back_title_color']['tab-title-back-color-hover']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_tab_back_title_color']['tab-title-back-color-hover'] : '#fff';

    $tabs_title_padding['top'] = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_title_padding']['top']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_title_padding']['top'] : '10';
    $tabs_title_padding['right'] = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_title_padding']['right']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_title_padding']['right'] : '10';
    $tabs_title_padding['bottom'] = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_title_padding']['bottom']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_title_padding']['bottom'] : '10';
    $tabs_title_padding['left'] = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_title_padding']['left']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_title_padding']['left'] : '10';

    $tabs_description_padding['top'] = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_desc_padding']['top']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_desc_padding']['top'] : '30';
    $tabs_description_padding['right'] = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_desc_padding']['right']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_desc_padding']['right'] : '30';
    $tabs_description_padding['bottom'] = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_desc_padding']['bottom']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_desc_padding']['bottom'] : '30';
    $tabs_description_padding['left'] = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_desc_padding']['left']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_desc_padding']['left'] : '30';

    $tabs_title_margin['top'] = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_title_margin']['top']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_title_margin']['top'] : '0';
    $tabs_title_margin['right'] = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_title_margin']['right']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_title_margin']['right'] : '0';
    $tabs_title_margin['bottom'] = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_title_margin']['bottom']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_title_margin']['bottom'] : '0';
    $tabs_title_margin['left'] = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_title_margin']['left']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_title_margin']['left'] : '0';

    $tabs_content_title_border_all = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_title_border']['all']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_title_border']['all'] : '1';
    $tabs_content_title_border_style = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_title_border']['style']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_title_border']['style'] : 'solid';
    $tabs_content_title_border_color = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_title_border']['color']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_title_border']['color'] : '#ccc';

    $tabs_title_icon_size = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_tabs_icon_size']['all']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_tabs_icon_size']['all'] : '20';
    $tabs_title_font_size = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_tab_title_font_size']['all']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_tab_title_font_size']['all'] : '20';
    $tabs_title_icon_position = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_icon_position']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_icon_position'] : 'left';
    $tabs_title_icon_space = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_tabs_icon_space']['all']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_tabs_icon_space']['all'] : '5';

    $tabs_title_icon_color = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_icon_color']['icon-color']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_icon_color']['icon-color'] : '#000';
    $tabs_title_icon_active_color = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_icon_color']['icon-color-active']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_icon_color']['icon-color-active'] : '#000';
    $tabs_title_icon_hover_color = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_icon_color']['icon-color-hover']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_icon_color']['icon-color-hover'] : '#000';

    $tabs_title_color = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_tab_title_color']['tab-title-color']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_tab_title_color']['tab-title-color'] : '#000';
    $tabs_title_active_color = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_tab_title_color']['tab-title-color-active']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_tab_title_color']['tab-title-color-active'] : '#000';
    $tabs_title_hover_color = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_tab_title_color']['tab-title-color-hover']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_tab_title_color']['tab-title-color-hover'] : '#000';

    $tabs_title_border_all = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_tabs_border_radius']['all']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_tabs_border_radius']['all'] : '0';
    $tabs_title_border_unit = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_tabs_border_radius']['unit']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_tabs_border_radius']['unit'] : 'px';

    $tabs_title_layout = isset($content_display_options['wp_tabby_settings_options']['agwp_tabby_layout']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_layout'] : 'horizontal-top';
    $tabs_title_align = isset($content_display_options['wp_tabby_settings_options']['agwp_tabby_layout_align']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_layout_align'] : 'left_align';

    $tabs_content_background_color = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_background_type']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_background_type'] : '#fff';

    $tabs_content_description_border_all = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_desc_border']['all']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_desc_border']['all'] : '1';
    $tabs_content_description_border_style = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_desc_border']['style']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_desc_border']['style'] : 'solid';
    $tabs_content_description_border_color = !empty($content_display_options['wp_tabby_settings_options']['agwp_tabby_desc_border']['color']) ? $content_display_options['wp_tabby_settings_options']['agwp_tabby_desc_border']['color'] : '#ccc';

    $tabs_title_icon_position_margin = $tabs_title_icon_position;

    $agwp_tabby_normal_content .= "<style>";

    $agwp_tabby_normal_content .= "
     *,
	*::before,
	*::after {
	  box-sizing: border-box;
	}

	        .agwt-container { max-width:inherit; }
	
			.agwt-container .normal_content_section_title_{$post_id}{ max-width:100% !important;}
			.agwt-container a {box-shadow:none}
			.agwt-container .normal_content_section_title_{$post_id} {margin-bottom:15px}
			.agwt-container a.wt-tabs-tb{$post_id} {
				text-decoration: none !important;
		    }
			.agwt-container a.wt-tabs-tb{$post_id}:hover {
				text-decoration: none !important;
			}

			.agwt-container .normal_content_section_title_{$post_id} .section_title h1 {font-size: 2em !important; color:$section_title_color;}
			.agwt-container .normal_content_section_title_{$post_id} .section_title h2 {font-size: 1.5em !important; color:$section_title_color;}
			.agwt-container .normal_content_section_title_{$post_id} .section_title h3 {font-size: 1.17em !important; color:$section_title_color;}
			.agwt-container .normal_content_section_title_{$post_id} .section_title h4 {font-size: 1em !important; color:$section_title_color;}
			.agwt-container .normal_content_section_title_{$post_id} .section_title h5 {font-size: 0.83em !important; color:$section_title_color;}
			.agwt-container .normal_content_section_title_{$post_id} .section_title h6 {font-size: 0.67em !important; color:$section_title_color;}
			.agwt-container .normal_content_section_title_{$post_id} .section_title p  { color:$section_title_color;}

			.wt-tabs-tb{$post_id} {
			    float: left;
			    color:" . $tabs_title_color . ";
			    background: " . $tabs_title_background_color . ";
			    border: " . $tabs_content_title_border_all . "px " . $tabs_content_title_border_style . " " . $tabs_content_title_border_color . ";
			}

			.wt-tabs-tb{$post_id}.active {
				color:" . $tabs_title_active_color . ";
				background:" . $tabs_title_active_background_color . ";
			}

			.wt-tabs-tb{$post_id}:hover {
				color:" . $tabs_title_hover_color . ";
				background:" . $tabs_title_hover_background_color . ";
			}

			.child-class { 
				flex-direction: column;
				width: 25%;
				padding-right:10px;
			}

			.child-class-menu {  display:inline-block; }

			.child-class .wt-tabs-tb{$post_id} i {
				float:left;
			}

			.wt-single-nest-tab{$post_id} {
				display: none;
			}

			.nested-type .wt-tabs-body.wt-body{$post_id} {
				padding-left:2px;
				padding-top:5px;

			}

			.child-class-body {
				width: inherit;
				overflow: hidden;
			}

			.wt-tabs-tb{$post_id} i {
				color:" . $tabs_title_icon_color . ";
			    margin-" . ($tabs_title_icon_position_margin == 'none' ? $tabs_title_icon_position_margin = 'bottom' : $tabs_title_icon_position_margin) . ":" . $tabs_title_icon_space . "px;
				font-size:" . $tabs_title_icon_size . "px;
				line-height:1.6;
			}

			.wt-tabs-tb{$post_id} img {
				display:inline-block;
				margin-top:5px;
				margin-" . ($tabs_title_icon_position_margin == 'none' ? $tabs_title_icon_position_margin = 'bottom' : $tabs_title_icon_position_margin) . ":" . $tabs_title_icon_space . "px;
			  }

			.wt-tabs-tb{$post_id}.active i {
				color:" . $tabs_title_icon_active_color . ";
			}

			.wt-tabs-tb{$post_id}:hover i {
				color:" . $tabs_title_icon_hover_color . ";
			}

			.title_tag {
				font-size:" . $tabs_title_font_size . "px;
				float:" . $tabs_title_icon_position . ";
			}

			.wt-tabs-body.wt-body{$post_id} {
				width:inherit;
			    background-color:" . $tabs_content_background_color . ";
			    border:" . $tabs_content_description_border_all . "px " . $tabs_content_description_border_style . " " . $tabs_content_description_border_color . ";
			    padding:" . $tabs_description_padding['top'] . "px " . $tabs_description_padding['right'] . "px " . $tabs_description_padding['bottom'] . "px " . $tabs_description_padding['left'] . "px;
			}
			.agwt-container {
			    line-height: 1.6;
			}

			.tax-btn{$post_id}:hover { background:" . $tabs_title_hover_background_color . "; }
			.tax-btn{$post_id}.active { background:" . $tabs_title_active_background_color . "; }

			.wt-single-tab{$post_id} {
			    display: none;
			}
			.wt-tabs-tb{$post_id} {
				padding: " . $tabs_title_padding['top'] . "px " . $tabs_title_padding['right'] . "px " . $tabs_title_padding['bottom'] . "px " . $tabs_title_padding['left'] . "px;
				border-radius:" . $tabs_title_border_all . "" . $tabs_title_border_unit . ";
			}

			";

    if ($tabs_title_icon_position == 'none'):
        $agwp_tabby_normal_content .= ".wt-tabs-tb{$post_id} i {
				display:flex;
				align-content: center;
				flex-wrap: wrap;
				flex-direction: column;
				line-height:1;
			  }
			 
			  .wt-tabs-tb{$post_id} img {
				display:block;
				margin-left: auto;
                margin-right: auto;
				margin-top:auto;
			  }
			 
			  ";
    endif;

    if (!is_admin()):
        $agwp_tabby_normal_content .= " 
		.agwt-container .normal_content_section_title_{$post_id} .section_title h1{ font-family:" . $google_font_family . " !important; } 
		.agwt-container .normal_content_section_title_{$post_id} .section_title h2{ font-family:" . $google_font_family . " !important; } 
		.agwt-container .normal_content_section_title_{$post_id} .section_title h3{ font-family:" . $google_font_family . " !important; } 
		.agwt-container .normal_content_section_title_{$post_id} .section_title h4{ font-family:" . $google_font_family . " !important; } 
		.agwt-container .normal_content_section_title_{$post_id} .section_title h5{ font-family:" . $google_font_family . " !important; } 
		.agwt-container .normal_content_section_title_{$post_id} .section_title h6{ font-family:" . $google_font_family . " !important; } 
		.agwt-container .normal_content_section_title_{$post_id} .section_title p{ font-family:" . $google_font_family . " !important; } 
		
		";
    endif;

    if (!empty($google_font_family)):
        $agwp_tabby_normal_content .= ".agwt-container .wt-body .wt-single-tab h1,
									.agwt-container .wt-body .wt-single-tab h2,
									.agwt-container .wt-body .wt-single-tab h3,
									.agwt-container .wt-body .wt-single-tab h4,
									.agwt-container .wt-body .wt-single-tab h5,
									.agwt-container .wt-body .wt-single-tab h6,
									.agwt-container .wt-body .wt-single-tab p, .agwt-container {
									    font-family:" . $google_font_family . " !important;
									    font-weight:" . $google_font_weight . " !important;
									    font-style:" . $google_font_style . " !important;
									}

									";
    endif;

    if ('horizontal-top' == $tabs_title_layout):
        $agwp_tabby_normal_content .= "

						           .wt-btn{$post_id}.active {
									    border-color: " . $tabs_content_title_border_color . " " . $tabs_content_title_border_color . " transparent;
									}
									.tax-btn{$post_id}.active {
									    border-color: " . $tabs_content_title_border_color . " " . $tabs_content_title_border_color . " transparent;
									}
								 ";
    endif;

    if ('horizontal-top' == $tabs_title_layout && 'left-align' == $tabs_title_align):

        $agwp_tabby_normal_content .= ".wt-tabs-btn-container{$post_id} {
									    left: 0%;
									    display: flex;
									    padding-top: 0px;
									}
									.agwt-container a.wt-tabs-tb{$post_id} {
										margin-bottom: -1px;
									}

									.wt-tabs-btn-container{$post_id}.active { border-bottom:none; }

									";

    endif;

    if ('horizontal-top' == $tabs_title_layout && 'right-align' == $tabs_title_align):

        $agwp_tabby_normal_content .= ".wt-tabs-body.wt-body{$post_id} {
			                            width:inherit;
									    background-color:" . $tabs_content_background_color . ";
									    border:" . $tabs_content_description_border_all . "px " . $tabs_content_description_border_style . " " . $tabs_content_description_border_color . ";
									}

									.agwt-container a.wt-tabs-tb{$post_id} {
										margin-bottom: -1px;
									}

									.wt-tabs-btn-container{$post_id} {
										left: 0%;
										display: flex;
										-webkit-justify-content:flex-end;
										padding-top: 0px;
									}
									.wt-tabs-tb{$post_id} { margin-right:0px !important; }

									";

    endif;

    if ('horizontal-bottom' == $tabs_title_layout):

        $agwp_tabby_normal_content .= "

						.wt-tabs-body.wt-body{$post_id} {
										background-color:" . $tabs_content_background_color . ";
										border:" . $tabs_content_description_border_all . "px " . $tabs_content_description_border_style . " " . $tabs_content_description_border_color . ";
										width:inherit;
									}

						.wt-btn{$post_id}.active {
									    border-color: transparent " . $tabs_content_title_border_color . " " . $tabs_content_title_border_color . ";
									}
						.tax-btn{$post_id}.active {
									    border-color:transparent " . $tabs_content_title_border_color . " " . $tabs_content_title_border_color . " ;
									} ";

    endif;

    if ('horizontal-bottom' == $tabs_title_layout && 'left-align' == $tabs_title_align):

        $agwp_tabby_normal_content .= ".wt-bottom-style{$post_id} {
								justify-content: flex-start;
								-webkit-justify-content: flex-start;
								display:flex;
								}
								.agwt-container a.wt-tabs-tb{$post_id} {
									margin-top: -1px;
								}

								";

    endif;

    if ('horizontal-bottom' == $tabs_title_layout && 'right-align' == $tabs_title_align):

        $agwp_tabby_normal_content .= " .wt-bottom-style{$post_id} {
								justify-content: flex-end;
								-webkit-justify-content: flex-end;
								display:flex;
								}
								.agwt-container a.wt-tabs-tb{$post_id} {
									margin-top: -1px;
								}
								";

    endif;

    if ('middle' == $tabs_title_layout):

        $agwp_tabby_normal_content .= ".wt-tabs-btn-container{$post_id} {
									    left: 50%;
									    display: flex;
									    -webkit-justify-content: center;
									    padding-top: 0px;
									}
									.wt-tabs-tb{$post_id} {
										border-bottom:none;
									}
									.wt-btn{$post_id}.active {
										border-color:" . $tabs_content_title_border_color . ";
										border-bottom-color:transparent;
										margin-bottom: -1px;
									}
									.tax-btn{$post_id}.active {
									    border-color: " . $tabs_content_title_border_color . " " . $tabs_content_title_border_color . " transparent " . $tabs_content_title_border_color . ";
									} ";

    endif;

    if ('vertical-top' == $tabs_title_layout && 'left-align' == $tabs_title_align):
        $tabs_title_margin['top'] = '0';
        $tabs_title_margin['left'] = '0';
        $tabs_title_margin['right'] = '0';
        $agwp_tabby_normal_content .= "
									        .agwt-container { display:flex; }
									        .wt-tabs-btn-container{$post_id} {
									            left: 0%;
									            display: flex;
									            flex-flow: column nowrap;
									            padding-top: 0px;
									        }
									        .wt-tabs-tb{$post_id} {
									            margin: " . $tabs_title_margin['top'] . "px " . $tabs_title_margin['right'] . "px " . $tabs_title_margin['bottom'] . "px " . $tabs_title_margin['left'] . "px;
									        }

						                    .wt-btn{$post_id}.active {
						                        border-color:" . $tabs_content_title_border_color . " " . $tabs_content_title_border_color . " " . $tabs_content_title_border_color . ";
						                        border-right-color:transparent;
						                        margin-right: -1px;
						                    }
											.wt-tabs-body.wt-body{$post_id} {
												border-left:none !important;
												width:100%;
											 }
											.tax-btn{$post_id}.active {
											border-color:#cccccc transparent #cccccc #cccccc ;
											}
									        ";

        if ($tabs_title_icon_position == 'left'):
            $agwp_tabby_normal_content .= "

													.agwt-container a.wt-tabs-tb{$post_id} {
														width:inherit;
													 }
													.title_tag {
														text-align: center;
													}
													.wt-tabs-tb{$post_id} {
													display: inline-flex;
			                                        justify-content: space-between;
			                                        flex-direction: row-reverse;
													}
													";
        endif;

        if ($tabs_title_icon_position == 'right'):
            $agwp_tabby_normal_content .= "
													.wt-tabs-tb{$post_id} {
														display:flex;
													}
													";
        endif;

    endif;

    if ('vertical-top' == $tabs_title_layout && 'right-align' == $tabs_title_align):
        $tabs_title_margin['top'] = '0';
        $tabs_title_margin['left'] = '0';
        $tabs_title_margin['left'] = '0';
        $agwp_tabby_normal_content .= "
											.agwt-container {
												display:flex;
												flex-direction: row-reverse;
										   }
									        .wt-tabs-btn-container{$post_id} {
									            left: 0%;
									            display: flex;
									            flex-flow: column nowrap;
									            padding-top: 0px;
									        }
									        .wt-tabs-tb{$post_id} {
									            margin: " . $tabs_title_margin['top'] . "px " . $tabs_title_margin['right'] . "px " . $tabs_title_margin['bottom'] . "px " . $tabs_title_margin['left'] . "px;
									        }

						                    .wt-btn{$post_id}.active {
						                        border-color:" . $tabs_content_title_border_color . ";
						                        border-left-color:transparent;
						                        margin-left: -1px;
						                    }
											.wt-tabs-body.wt-body{$post_id} {
												border-right:none !important;
												width:100%;
											 }
											.tax-btn{$post_id}.active {
											border-color:" . $tabs_content_title_border_color . " " . $tabs_content_title_border_color . " " . $tabs_content_title_border_color . " transparent ;
											}
									        ";

        if ($tabs_title_icon_position == 'left'):
            $agwp_tabby_normal_content .= "

													.agwt-container a.wt-tabs-tb{$post_id} {
														width:inherit;
													 }
													.title_tag {
														text-align: center;
													}
													.wt-tabs-tb{$post_id} {
													display: inline-flex;
			                                        justify-content: space-between;
			                                        flex-direction: row-reverse;
													}
													";
        endif;

        if ($tabs_title_icon_position == 'right'):
            $agwp_tabby_normal_content .= "
														.wt-tabs-tb{$post_id} {
															display:flex;
														}
														";
        endif;

    endif;

    if ('full-width' == ($content_display_options['wp_tabby_settings_options']['agwp_tabby_layout_align'])):

        $agwp_tabby_normal_content .= "

							         .agwt-container a.wt-tabs-tb{$post_id} {
									      width:inherit;
										  display: flex;
									   }
									   .wt-tabs-btn-container{$post_id} {
										width: 100%;
									    left: 0%;
									    display: flex;
									    padding-top: 0px;
										margin-bottom: -1px;
										margin-top: -1px;
									}

									.wt-btn{$post_id}.active {
										border-color:" . $tabs_content_title_border_color . " " . $tabs_content_title_border_color . " transparent;
									}
									.tax-btn{$post_id}.active {
									    border-color: " . $tabs_content_title_border_color . " " . $tabs_content_title_border_color . " transparent;
									}
									";

        if ($tabs_title_icon_position == 'none'):
            $agwp_tabby_normal_content .= "

											.agwt-container a.wt-tabs-tb{$post_id} {
												width:inherit;
												display: block;
											 }
											.title_tag {
												text-align: center;
											}
											";
        endif;

        if ($tabs_title_icon_position == 'left'):
            $agwp_tabby_normal_content .= "

										.agwt-container a.wt-tabs-tb{$post_id} {
											flex-direction: row-reverse;
										}
									";
        endif;

    endif;

    if ('full-width' != $tabs_title_align):
        $agwp_tabby_normal_content .= ".wt-tabs-tb{$post_id} {
							margin: " . $tabs_title_margin['top'] . "px " . $tabs_title_margin['right'] . "px " . $tabs_title_margin['bottom'] . "px " . $tabs_title_margin['left'] . "px;
							}";
    endif;

    if (('full-width' == $content_display_options['wp_tabby_settings_options']['agwp_tabby_layout_align']) && 'horizontal-bottom' == $tabs_title_layout):

        $agwp_tabby_normal_content .= "

							         .agwt-container a.wt-tabs-tb{$post_id} {
									      width:inherit;
									   }
									   .wt-tabs-btn-container{$post_id} {
									    width:100%;
									    left: 0%;
									    display: flex;
									    padding-top: 0px;
									}
									.wt-btn{$post_id}.active {
										margin-bottom: -1px;
										border-color: transparent " . $tabs_content_title_border_color . " " . $tabs_content_title_border_color . " " . $tabs_content_title_border_color . ";
									}
									.tax-btn{$post_id}.active {
									    border-color:transparent " . $tabs_content_title_border_color . " " . $tabs_content_title_border_color . " " . $tabs_content_title_border_color . ";
									}
									";

    endif;

    $agwp_tabby_normal_content .= "@media only screen and (max-width: 668px) {
			    .wt-tabs-btn-container{$post_id} {
			        flex-flow:column;
			    }
			}";

    $agwp_tabby_normal_content .= "</style>";

    wp_enqueue_style('agwp-tabby-font-family', 'https://fonts.googleapis.com/css?family=' . $google_font_family);

    echo wp_kses($agwp_tabby_normal_content, array(
        'style' => array(
            'type' => array(),
        ),
    ));

endif;
