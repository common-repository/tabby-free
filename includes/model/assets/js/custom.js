'use strict';
jQuery(document).ready(function () {

    setTimeout(function(){
        jQuery('div#agwp_tabby_post_options').fadeIn('slow');
    },400);
  
    jQuery('.ag_tabby__shortcode-selectable').click(function (e) {
        e.preventDefault();
        /* Get the text field */
        var copyText = jQuery(this);
        /* Select the text field */
        copyText.select();
        document.execCommand("copy");
        jQuery(".ag_tabby-after-copy-text").animate({
            opacity: 1,
            bottom: 25
        }, 300);
        setTimeout(function () {
            jQuery(".ag_tabby-after-copy-text").animate({
                opacity: 0,
            }, 200);
            jQuery(".ag_tabby-after-copy-text").animate({
                bottom: 0
            }, 0);
        }, 2000);
    });
   
    function ag_tabby_copyToClipboard(element) {
        var $temp = jQuery("<input>");
        jQuery("body").append($temp);
        $temp.val(jQuery(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
    }
    function ag_tabby_SelectText(element) {
        var r = document.createRange();
        var w = element.get(0);
        r.selectNodeContents(w);
        var sel = window.getSelection();
        sel.removeAllRanges();
        sel.addRange(r);
    }
    
  });

// Sidebar Layout Toggle
var PCP_layout_type = jQuery(
  '.agwp_tabby_tabs_type .agm-fieldset .agm-siblings .agm--sibling'
);

var PCP_get_layout_value = jQuery(
  '.agwp_tabby_tabs_type .agm-fieldset .agm-siblings .agm--sibling.agm--active'
).find('input').val();

if (PCP_get_layout_value == 'sidebar-tabs') {
  jQuery(
  '.agwp_tabby_display_position, .agwp_tabby_sidebar_tabs_align, .agwp_tabby_side_theme_options'
).show();
jQuery(
  '.wp_tabby_layout_class, .agwp_tabby_tabs_align, .wptabby_theme_options'
).hide();
} else {
  jQuery(
  '.agwp_tabby_display_position, .agwp_tabby_sidebar_tabs_align, .agwp_tabby_side_theme_options'
).hide();
jQuery(
  '.wp_tabby_layout_class, .agwp_tabby_tabs_align, .wptabby_theme_options'
).show();
}

jQuery(PCP_layout_type).click(function(){

var PCP_get_layout_value = jQuery(this).closest('div').find('input').val();

if (PCP_get_layout_value == 'sidebar-tabs') {
              jQuery(
              '.agwp_tabby_display_position, .agwp_tabby_sidebar_tabs_align, .agwp_tabby_side_theme_options'
            ).show();
            jQuery(
              '.wp_tabby_layout_class, .agwp_tabby_tabs_align, .wptabby_theme_options'
            ).hide();
          } else {
              jQuery(
              '.agwp_tabby_display_position, .agwp_tabby_sidebar_tabs_align, .agwp_tabby_side_theme_options'
            ).hide();
            jQuery(
              '.wp_tabby_layout_class, .agwp_tabby_tabs_align, .wptabby_theme_options'
            ).show();
          }
      
});



/************************ Preview Layout*******************************/
  var preview_box = jQuery('#agm-tabby-preview-box');
  var preview_display = jQuery('#agwp_tabby_live_preview').hide();
  jQuery(document).on('click', '#agm-tab-show-preview:contains(Hide)', function (e) {
    e.preventDefault();
    var _this = jQuery(this);
    _this.html('<i class="fa fa-eye" aria-hidden="true"></i> Show Preview');
    preview_box.html('');
    preview_display.hide();
  });

  jQuery(document).on('click', '#agm-tab-show-preview:not(:contains(Hide))', function (e) {
    e.preventDefault();
    var _data = jQuery('form#post').serialize();
    var _this = jQuery(this);
    var data = {
      action: 'agwp_tabby_preview_meta_box',
      data: _data,
      ajax_nonce: jQuery('#agm_metabox_nonceagwp_tabby_live_preview').val()
    };
    jQuery.ajax({
      type: "POST",
      url: ajaxurl,
      data: data,
      error: function (response) {
        console.log(response)
      },
      success: function (response) {
        preview_display.show();
        preview_box.html(response);
        _this.html('<i class="fa fa-eye-slash" aria-hidden="true"></i> Hide Preview');
        jQuery(document).on('keyup change', function (e) {
          e.preventDefault();
          _this.html('<i class="fa fa-refresh" aria-hidden="true"></i> Update Preview');
        });
        jQuery("html, body").animate({ scrollTop: preview_display.offset().top - 50 }, "slow");
      }
    })
  });


  jQuery('p:empty').remove();

  /**********************************************************/

