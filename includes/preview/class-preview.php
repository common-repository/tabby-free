<?php
/**
 * The admin preview.
 *
 * @package    WP_Tabs
 * @subpackage WP_Tabs/admin
 * @author     ShapedPlugin <support@shapedplugin.com>
 */
class WP_Tabby_Preview {
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    2.0.15
	 */
	public function __construct() {
		$this->wp_tabby_preview_action();
	}

	/**
	 * Public Action
	 *
	 * @return void
	 */
	private function wp_tabby_preview_action() {
		// admin Preview.
		add_action( 'wp_ajax_agwp_tabby_preview_meta_box', array( $this, 'wp_tabby_backend_preview' ) );

	}

	/**
	 * Function Backed preview.
	 *
	 * @since 2.0.15
	 */
	public function wp_tabby_backend_preview() {
		$nonce = isset( $_POST['ajax_nonce'] ) ? sanitize_text_field( wp_unslash( $_POST['ajax_nonce'] ) ) : '';
		if ( ! wp_verify_nonce( $nonce, 'agm_metabox_nonce' ) ) {
			return;
		}

		$setting = array();
		// XSS ok.
		// No worries, This "POST" requests is sanitizing in the below array map.
		$data = ! empty( $_POST['data'] ) ? wp_unslash( $_POST['data'] )  : ''; // phpcs:ignore
		parse_str( $data, $setting );

		// Preset Layouts.
		$post_id               = $setting['post_ID'];
		$content_data          = $setting['agwp_tabby_post_options'];
		$content_display_options = $setting['agwp_tabby_options_settings'];
		

		Wp_tabby_shortcode::wptabby_html_show($post_id, $content_data, $content_display_options, $tax_meta_array, $icon_meta_array);

		?>
		<script src="<?php echo esc_url( WP_TABBY_URL. 'public/assets/js/plugin.js'); ?>" ></script>

		<?php
		die();
	}

}
new WP_Tabby_Preview();
