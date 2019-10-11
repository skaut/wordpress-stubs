<?php
/**
 * @package phan-wordpress-stubs
 */

/**
 * @var int
 */
const DAY_IN_SECONDS = null;

/**
 * @param string $text
 * @param string $domain
 *
 * @return string
 */
function __( $text, $domain = '' ) {
}

/**
 * @param string   $tag
 * @param callable $function_to_add
 * @param int      $priority
 * @param int      $accepted_args
 *
 * @return true
 */
function add_action( $tag, $function_to_add, $priority = 0, $accepted_args = 0 ) {
}

/**
 * @param string   $page_title
 * @param string   $menu_title
 * @param string   $capability
 * @param string   $menu_slug
 * @param callable $function
 * @param string   $icon_url
 * @param int      $position
 *
 * @return string
 */
function add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function = '', $icon_url = '', $position = 0 ) {
}

/**
 * @param string $setting
 * @param string $code
 * @param string $message
 * @param string $type
 *
 * @return void
 */
function add_settings_error( $setting, $code, $message, $type = '' ) {
}

/**
 * @param string   $id
 * @param string   $title
 * @param callable $callback
 * @param string   $page
 * @param string   $section
 * @param array    $args
 *
 * @return void
 */
function add_settings_field( $id, $title, $callback, $page, $section = '', $args = [] ) {
}

/**
 * @param string   $id
 * @param string   $title
 * @param callable $callback
 * @param string   $page
 *
 * @return void
 */
function add_settings_section( $id, $title, $callback, $page ) {
}

/**
 * @param string   $tag
 * @param callable $callback
 *
 * @return void
 */
function add_shortcode( $tag, $callback ) {
}

/**
 * @param string   $parent_slug
 * @param string   $page_title
 * @param string   $menu_title
 * @param string   $capability
 * @param string   $menu_slug
 * @param callable $function
 *
 * @return false|string
 */
function add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function = '' ) {
}

/**
 * @return void
 */
function add_thickbox() {
}

/**
 * @param string $path
 * @param string $scheme
 *
 * @return string
 */
function admin_url( $path, $scheme ) {
}

/**
 * @param int|string   $action
 * @param false|string $query_arg
 * @param bool         $die
 *
 * @return false|int
 */
function check_ajax_referer( $action = 0, $query_arg = false, $die = false ) {
}

/**
 * @param mixed $checked
 * @param mixed $current
 * @param bool  $echo
 *
 * @return string
 */
function checked( $checked, $current = false, $echo = false ) {
}

/**
 * @param string $capability
 *
 * @return bool
 */
function current_user_can( $capability ) {
}

/**
 * @param string|array $plugins
 * @param bool         $silent
 * @param mixed        $network_wide
 *
 * @return void
 */
function deactivate_plugins( $plugins, $silent = false, $network_wide = null ) {
}

/**
 * @param string $option
 *
 * @return bool
 */
function delete_option( $option ) {
}

/**
 * @param string $transient
 *
 * @return bool
 */
function delete_transient( $transient ) {
}

/**
 * @param string $page
 *
 * @return void
 */
function do_settings_sections( $page ) {
}

/**
 * @param string $text
 *
 * @return string
 */
function esc_attr( $text ) {
}

/**
 * @param string $text
 *
 * @return string
 */
function esc_html( $text ) {
}

/**
 * @param string $text
 * @param string $domain
 *
 * @return string
 */
function esc_html__( $text, $domain = '' ) {
}

/**
 * @param string $url
 * @param array  $protocols
 * @param string $_context
 *
 * @return string
 */
function esc_url( $url, $protocols = [], $_context = '' ) {
}

/**
 * @param string $url
 * @param array  $protocols
 *
 * @return string
 */
function esc_url_raw( $url, $protocols = [] ) {
}

function get_admin_page_title() {
}

function get_locale() {
	return '';
}

function get_option( $a, $b ) {
	switch ( wp_rand( 0, 2 ) ) {
		case 0:
			return [];
		case 1:
			return false;
		case 2:
			return '';
	}
}

function get_settings_errors() {
	return [];
}

function get_site_url() {
}

function get_transient( $a ) {
	switch ( wp_rand( 0, 1 ) ) {
		case 0:
			return [
				'root'      => '',
				'overriden' => [],
			];
		case 1:
			return false;
	}
}

/**
 * @return mixed
 */
function get_user_option( $a ) {
}

function is_admin() {
	return false;
}

function plugin_basename( $a ) {
}

function plugins_url( $a ) {
}

function plugin_dir_path( $a ) {
	return '';
}

function plugin_dir_url( $a ) {
	return '';
}

function register_activation_hook( $a, $b ) {
}

function register_block_type( $a, $b ) {
}

function register_setting( $a, $b, $c ) {
}

function sanitize_text_field( $a ) {
	return '';
}

function set_transient( $a, $b, $c ) {
}

function settings_errors() {
}

function submit_button( $a ) {
}

function tests_add_filter( $a, $b ) {
}

function update_option( $a, $b ) {
}

function wp_add_inline_style( $a, $b ) {
}

function wp_create_nonce( $a ) {
}

// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
function wp_die( $a ) {
}

function wp_enqueue_script( $a ) {
}

function wp_enqueue_style( $a ) {
}

function wp_json_encode( $a, $b ) {
}

function wp_localize_script( $a, $b, $c ) {
}

function wp_nonce_field( $a ) {
}

function wp_nonce_url( $a, $b ) {
}

function wp_parse_url( $a ) {
	return [
		'host'   => '',
		'scheme' => '',
	];
}

function wp_rand( $a, $b ) {
}

function wp_register_script( $a, $b, $c, $d, $e ) {
}

function wp_register_style( $a, $b, $c, $d ) {
}

function wp_send_json( $a ) {
}

function wp_unslash( $a ) {
	switch ( wp_rand( 0, 1 ) ) {
		case 0:
			return [];
		case 1:
			return '';
	}
}

function wp_verify_nonce( $a, $b ) {
	switch ( wp_rand( 0, 1 ) ) {
		case 0:
			return false;
		case 1:
			return true;
	}
}
