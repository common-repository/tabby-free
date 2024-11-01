<?php

if ((is_array($content_data['agwp_tabby_tax_field_taxonomy_'.$content_data['agwp_tabby_tax_field']])) || is_array($content_data['agwp_tabby_content']) || is_object($content_data['agwp_tabby_content'])):

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

.entry-content .normal_content_section_title_$post_id .section_title{ color:$section_title_color; }

.normal_content_section_title_$post_id .section_subtitle{ color:$section_subtitle_color}";

$agwp_tabby_normal_content .= ".normal_content_section_title_$post_id {margin-bottom:15px}";

$agwp_tabby_normal_content .= ".entry-content >.normal_content_section_title_$post_id{ max-width:100% !important;}
.agwt-container a {box-shadow:none} .agwt-container a:hover {color:#000;} ";

$agwp_tabby_normal_content .= ".agwt-container a.wt-tabs-tb{$post_id} {
     text-decoration: none !important;
     margin-bottom: 10px;
}";

$agwp_tabby_normal_content .="a.wt-btn{$post_id}.active::after{
	            pointer-events: none;
				height: 10px;
				width: 10px;
				position: absolute;
				content: '';
				background:{$tabs_title_active_background_color};
				border: 1px solid #ccc;
				border-top-width: 0px;
				border-left-width: 0px;
				transform: rotate(45deg);
				bottom: -6px;
				left: 50%;
}";

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

$agwp_tabby_normal_content .="a.tax-btn{$post_id}.active::after{
	pointer-events: none;
	height: 10px;
	width: 10px;
	position: absolute;
	content: '';
	background:{$tabs_title_active_background_color};
	border: 1px solid #ccc;
	border-top-width: 0px;
	border-left-width: 0px;
	transform: rotate(45deg);
	bottom: -6px;
	left: 50%;
}";

if ('horizontal-bottom' == $tabs_title_layout):
    $agwp_tabby_normal_content .= ".agwt-container a.wt-tabs-tb{$post_id} {
			    text-decoration: none !important;
			    margin-top: 8px;
			}
			a.tax-btn{$post_id}.active::after{ content:none;}
			a.tax-btn{$post_id}.active::before{
				pointer-events: none;
				height: 10px;
				width: 10px;
				position: absolute;
				content: '';
				background:{$tabs_title_active_background_color};
				border: 1px solid #ccc;
				border-top-width: 0px;
				border-left-width: 0px;
				transform: rotate(225deg);
				top: -6px;
				left: 50%;
			}

			a.wt-btn{$post_id}.active::after{ content:none;}
			a.wt-btn{$post_id}.active::before{
				pointer-events: none;
				height: 10px;
				width: 10px;
				position: absolute;
				content: '';
				background:{$tabs_title_active_background_color};
				border: 1px solid #ccc;
				border-top-width: 0px;
				border-left-width: 0px;
				transform: rotate(225deg);
				top: -6px;
				left: 50%;
			}
			";
endif;

if ('horizontal-top' == $tabs_title_layout):

    $agwp_tabby_normal_content .= ".agwt-container a.wt-tabs-tb{$post_id}:hover {
			        text-decoration: none !important;

			    }";

endif;

if ('horizontal-bottom' == $tabs_title_layout):

    $agwp_tabby_normal_content .= ".agwt-container a.wt-tabs-tb{$post_id}:hover {
			        text-decoration: none !important;
			    }";

endif;

$agwp_tabby_normal_content .= ".agwt-container {
    line-height: 1.6;
}";

if (!empty($google_font_family)):
    $agwp_tabby_normal_content .= ".agwt-container .wt-body .wt-single-tab h1,
			.agwt-container .wt-body .wt-single-tab h2,
			.agwt-container .wt-body .wt-single-tab h3,
			.agwt-container .wt-body .wt-single-tab h4,
			.agwt-container .wt-body .wt-single-tab h5,
			.agwt-container .wt-body .wt-single-tab h6,
			.agwt-container .wt-body .wt-single-tab p, .agwt-container {
			    font-family:" . $google_font_family . ";
			    font-weight:" . $google_font_weight . ";
			    font-style:" . $google_font_style . ";
			} 			
			.agwt-container .wt-body .wt-single-tab{$post_id} ul { 
				margin:0px; padding:0px; list-style:disc;
			}
			.agwt-container .wt-body .wt-single-tab{$post_id} ul li a { 
				text-decoration:none; color:#000;
			}
			
			";
endif;

$agwp_tabby_normal_content .= ".wt-iframe {
    width: 100%;
    border: 4px solid #f8b195;
    -webkit-box-shadow: 0 0 5px #fff;
            box-shadow: 0 0 5px #fff;
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
}";

$agwp_tabby_normal_content .= ".wt-simple-btn {
    border: 1px solid #fff;
    padding: 5px 10px;
    color: #fff;
}";

$agwp_tabby_normal_content .= ".wt-simple-btn:hover i {
    margin-left: 10px;
}";

$agwp_tabby_normal_content .= ".wt-simple-btn i {
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
}";

$agwp_tabby_normal_content .= "
.wt-btn{$post_id} {
    position: relative;
}
.tax-btn{$post_id} {
    position: relative;
}

.wt-btn{$post_id}:hover { background:".$tabs_title_hover_background_color."; }
.wt-btn{$post_id}.active { background:".$tabs_title_active_background_color."; }
.tax-btn{$post_id}:hover { background:".$tabs_title_hover_background_color."; }
.tax-btn{$post_id}.active { background:".$tabs_title_active_background_color."; }


";

if ('horizontal-top' == $tabs_title_layout):
    $agwp_tabby_normal_content .= ".wt-btn{$post_id}.active {
			    border-color: #cccccc #cccccc #cccc;
			}
			.tax-btn{$post_id}.active {
			    border-color: #cccccc #cccccc #cccc;
			}

			";
endif;

if ('vertical-top' == $tabs_title_layout && 'left-align' == $tabs_title_align):
    $agwp_tabby_normal_content .= ".wt-btn{$post_id}.active {
			    border-color: #cccccc #cccccc #cccccc;
			}
			.tax-btn{$post_id}.active {  
			border-color:#cccccc #cccccc #cccccc #cccccc ;
			}
			.agwt-container a.wt-tabs-tb{$post_id} {margin-right:10px;}
		
			";
endif;

if ('vertical-top' == $tabs_title_layout && 'right-align' == $tabs_title_align):
   
	$agwp_tabby_normal_content .= "

			.tax-btn{$post_id}.active {  
			border-color:#cccccc #cccccc #cccccc #cccccc ;
			}
			.agwt-container a.wt-tabs-tb{$post_id} {margin-left:10px;}
			";
endif;

if ('middle' == $tabs_title_layout):
    $agwp_tabby_normal_content .= ".wt-btn{$post_id}.active {
			    border-color: #cccccc #cccccc #cccccc;
			}
			.tax-btn{$post_id}.active {
			    border-color: #cccccc #cccccc #cccccc #cccccc ;
			}
			a.wt-btn{$post_id}.active::after {
				pointer-events: none;
				height: 10px;
				width: 10px;
				position: absolute;
				content: '';
				background:{$tabs_title_active_background_color};
				border: 1px solid #ccc;
				border-top-width: 0px;
				border-left-width: 0px;
				transform: rotate(45deg);
				bottom: -6px;
				left: 50%;
			}
			
			a.tax-btn{$post_id}.active::after {
				pointer-events: none;
				height: 10px;
				width: 10px;
				position: absolute;
				content: '';
				background:{$tabs_title_active_background_color};
				border: 1px solid #ccc;
				border-top-width: 0px;
				border-left-width: 0px;
				transform: rotate(45deg);
				bottom: -6px;
				left: 50%;
			}	
			";
endif;

if ('horizontal-bottom' == $tabs_title_layout):
    $agwp_tabby_normal_content .= ".wt-btn{$post_id}.active {
			    border-color: #cccccc #cccccc #cccccc;
			}
			.tax-btn{$post_id}.active {
			    border-color:#cccccc #cccccc #cccccc ;
			}
			";
endif;


if ('horizontal-bottom' == $tabs_title_layout && 'left-align' == $tabs_title_align):

	$agwp_tabby_normal_content .= ".wt-bottom-style{$post_id} {
		justify-content: flex-start;
		-webkit-justify-content: flex-start;
		display:flex;
		}";

endif;

if ('horizontal-bottom' == $tabs_title_layout && 'right-align' == $tabs_title_align):

	$agwp_tabby_normal_content .= " .wt-bottom-style{$post_id} {
		justify-content: flex-end;
		-webkit-justify-content: flex-end;
		display:flex;
		}";

endif;

/*--Container CSS--*/

$agwp_tabby_normal_content .= ".agwt-container-head {
    position: relative;
	max-width:100% !important;
	width:100% !important;
	padding: 25px 25px 0px 25px;
    margin: 25px 25px 0px 25px;
}";

$agwp_tabby_normal_content .= ".wt-tabs-body.wt-body{$post_id} {
    background-color:".$tabs_content_background_color.";
    border:" . $tabs_content_description_border_all . "px " . $tabs_content_description_border_style . " " . $tabs_content_description_border_color . ";
    width:100%;
    padding:".$tabs_description_padding['top']."px ".$tabs_description_padding['right']."px ".$tabs_description_padding['bottom']."px ".$tabs_description_padding['left']."px; 
}";

if ('horizontal-top' == $tabs_title_layout):

    $agwp_tabby_normal_content .= ".wt-tabs-body.wt-body{$post_id} {
			        border-top:none;
			    }";

endif;

if ('horizontal-top' == $tabs_title_layout && 'right-align' == $tabs_title_align):

    $agwp_tabby_normal_content .= ".wt-tabs-body.wt-body{$post_id} {
			    background-color:" . $tabs_content_background_color . ";
			    border:" . $tabs_content_description_border_all . "px " . $tabs_content_description_border_style . " " . $tabs_content_description_border_color . ";
			    width:100%;
			}";

endif;

if ('horizontal-bottom' == $tabs_title_layout):

    $agwp_tabby_normal_content .= ".wt-tabs-body.wt-body{$post_id} {
			        background-color:" . $tabs_content_background_color . ";
			        border:" . $tabs_content_description_border_all . "px " . $tabs_content_description_border_style . " " . $tabs_content_description_border_color . ";
			        width:100%;
			    }";

endif;

 if ('horizontal-top' == $tabs_title_layout && 'left-align' == $tabs_title_align):

    $agwp_tabby_normal_content .= ".wt-tabs-btn-container{$post_id}{
			    left: 0%;
			    display: flex;
			    padding-top: 0px;
			    border-bottom:1px solid #ccc;
			}

			.wt-tabs-btn-container{$post_id}.active { border-bottom:none; }

			";

 endif;


if ('middle' == $tabs_title_layout):

    $agwp_tabby_normal_content .= ".wt-tabs-btn-container{$post_id} {
			    left: 50%;
			    display: flex;
			    -webkit-justify-content: center;
			    padding-top: 0px;
			}
			.wt-btn{$post_id}.active {
				border-color: #cccccc;
				border-bottom-color:#cccccc;
				margin-bottom: -1px;
			}			
			";

endif;

if ('horizontal-top' == $tabs_title_layout && 'right-align' == $tabs_title_align):

    $agwp_tabby_normal_content .= ".wt-tabs-btn-container{$post_id} {
			        left: 0%;
			        display: flex;
			        -webkit-justify-content:flex-end;
			        padding-top: 0px;
			    }
			    .wt-tabs-tb{$post_id} { margin-right:0px !important; } ";

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
                        border-color: #cccccc;
                        border-right-color:#cccccc;
                        margin-right: -1px;
                    }
					a.wt-btn{$post_id}.active::after {
						pointer-events: none;
						height: 10px;
						width: 10px;
						position: absolute;
						content: '';
						background:{$tabs_title_active_background_color};
						border: 1px solid #ccc;
						border-top-width: 0px;
						border-left-width: 0px;
						transform: rotate(315deg);
						right:-6px;
						left:auto;
						bottom:auto;
						top: 45%;
					}
					
					a.tax-btn{$post_id}.active::after {
						pointer-events: none;
						height: 10px;
						width: 10px;
						position: absolute;
						content: '';
						background:{$tabs_title_active_background_color};
						border: 1px solid #ccc;
						border-top-width: 0px;
						border-left-width: 0px;
						transform: rotate(315deg);
						right:-6px;
						left:auto;
						bottom:auto;
						top: 45%;
					}		
			        ";

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
                        border-color: #cccccc;
                        border-left-color:#cccccc;
                        margin-left: -1px;
                    }
					a.wt-btn{$post_id}.active::after {
						pointer-events: none;
						height: 10px;
						width: 10px;
						position: absolute;
						content: '';
						background:{$tabs_title_active_background_color};
						border: 1px solid #ccc;
						border-top-width: 0px;
						border-left-width: 0px;
						transform: rotate(135deg);
						right:auto;
						left:-6px;
						bottom:auto;
						top: 45%;
					}
					
					a.tax-btn{$post_id}.active::after {
						pointer-events: none;
						height: 10px;
						width: 10px;
						position: absolute;
						content: '';
						background:{$tabs_title_active_background_color};
						border: 1px solid #ccc;
						border-top-width: 0px;
						border-left-width: 0px;
						transform: rotate(135deg);
						right:auto;
						left: -6px;;
						bottom:auto;
						top: 45%;
					}				
			        ";

endif;

/*-- Single Tab CSS --*/

$agwp_tabby_normal_content .= ".wt-single-tab{$post_id} {
    display: none;
}";

$agwp_tabby_normal_content .= ".wt-tabs-tb{$post_id} {
	padding: " . $tabs_title_padding['top'] . "px " . $tabs_title_padding['right'] . "px " . $tabs_title_padding['bottom'] . "px " . $tabs_title_padding['left'] . "px;
	border-radius:".$tabs_title_border_all."".$tabs_title_border_unit."; 
}";

if ('full-width' != $tabs_title_align):
/*-- Top & Bottom Tabs Style Common CSS --*/
    $agwp_tabby_normal_content .= ".wt-tabs-tb{$post_id} {
	margin: " . $tabs_title_margin['top'] . "px " . $tabs_title_margin['right'] . "px " . $tabs_title_margin['bottom'] . "px " . $tabs_title_margin['left'] . "px;
	}";
endif;

$agwp_tabby_normal_content .= ".wt-tabs-tb{$post_id} {
    float: left;
    color: #000;
    text-align: center;
    font-size: 17px;
    background: ".$tabs_title_background_color. ";
    border: 1px solid #ccc;
    -webkit-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
}";

$agwp_tabby_normal_content .= ".wt-tabs-tb{$post_id} i {
    margin-right: 5px;
}";

$agwp_tabby_normal_content .= ".title_tag { display:inline-block;}";


/*-- Full Width CSS --*/

if (($content_display_options['wp_tabby_settings_options']['agwp_tabby_layout_align']) == 'full-width'):

    $agwp_tabby_normal_content .= "
	
	         .agwt-container a.wt-tabs-tb{$post_id} {
			      width:inherit;
			   } 
			   .wt-tabs-btn-container{$post_id} {
				width: 100%;
			    left: 0%;
			    display: flex;
			    padding-top: 0px;
			}

			.wt-tabs-body.wt-body{$post_id}
			{
			border:" . $tabs_content_description_border_all . "px " . $tabs_content_description_border_style . " " . $tabs_content_description_border_color . ";
			}
			
			.wt-btn{$post_id}.active {
				margin-bottom: -1px;
				border-color: #cccccc #cccccc #cccccc;
			}
			.tax-btn{$post_id}.active {
			    border-color: #cccccc #cccccc #cccccc;
			}			
			";

endif;


if (($content_display_options['wp_tabby_settings_options']['agwp_tabby_layout_align']) == 'full-width' && ('horizontal-bottom' == $tabs_title_layout)):

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

			.wt-tabs-tb{$post_id}{  }
			
			.wt-btn{$post_id}.active {
				margin-bottom: -1px;
				border-color: #cccccc #cccccc #cccccc #cccccc;
			}
			.tax-btn{$post_id}.active {
			    border-color:#cccccc #cccccc #cccccc #cccccc;
			}
			
			
			";

endif;

/*-- End Full Width CSS --*/

$agwp_tabby_normal_content .= "@media only screen and (max-width: 668px) {
    .wt-tabs-btn-container{$post_id} {
        flex-flow:column;
    }
}";

$agwp_tabby_normal_content .= "</style>";

echo wp_kses($agwp_tabby_normal_content, array(
	'style' => array(
		'type' => array(),
	),
));

endif;