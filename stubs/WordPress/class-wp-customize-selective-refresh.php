<?php
/**
 * @package phan-wordpress-stubs
 */

/**
 */
class WP_Customize_Selective_Refresh {
	/**
	 * @param WP_Customize_Partial|string $id
	 * @param array                       $args {
	 *     @type string   $type
	 *     @type string   $selector
	 *     @type string[] $settings
	 *     @type string   $primary_setting
	 *     @type string   $capability
	 *     @type callable $render_callback
	 *     @type bool     $container_inclusive
	 *     @type bool     $fallback_refresh
	 * }
	 *
	 * @return WP_Customize_Partial
	 */
	public function add_partial( $id, $args = array() ) {
	}
}
