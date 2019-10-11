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

/**
 * @return string
 */
function get_admin_page_title() {
}

/**
 * @return string
 */
function get_locale() {
}

/**
 * @param string $option
 * @param mixed  $default
 *
 * @return mixed
 */
function get_option( $option, $default = false ) {
}

/**
 * @param string  $setting
 * @param boolean $sanitize
 *
 * @return array
 */
function get_settings_errors( $setting = '', $sanitize = false ) {
}

/**
 * @param int    $blog_id
 * @param string $path
 * @param string $scheme
 *
 * @return string
 */
function get_site_url( $blog_id = null, $path = '', $scheme = '' ) {
}

/**
 * @param string $transient
 *
 * @return mixed
 */
function get_transient( $transient ) {
}

/**
 * @param string $option
 * @param int    $user
 * @param string $deprecated
 *
 * @return mixed
 */
function get_user_option( $option, $user, $deprecated = '' ) {
}

/**
 * @return bool
 */
function is_admin() {
}

/**
 * @param string $filename
 *
 * @return string
 */
function plugin_basename( $filename ) {
}

/**
 * @param string $file
 *
 * @return string
 */
function plugin_dir_path( $file ) {
}

/**
 * @param string $file
 *
 * @return string
 */
function plugin_dir_url( $file ) {
}

/**
 * @param string $path
 * @param string $plugin
 *
 * @return string
 */
function plugins_url( $path = '', $plugin = '' ) {
}

/**
 * @param string   $file
 * @param callable $function
 *
 * @return void
 */
function register_activation_hook( $file, $function ) {
}

/**
 * @param string|WP_Block_Type $name
 * @param array                $args
 *
 * @return WP_Block_Type|false
 */
function register_block_type( $name, $args = [] ) {
}

/**
 * @param string $option_group
 * @param string $option_name
 * @param array  $args
 *
 * @return void
 */
function register_setting( $option_group, $option_name, $args = [] ) {
}

/**
 * @param string $str
 *
 * @return string
 */
function sanitize_text_field( $str ) {
}

/**
 * @param string $transient
 * @param mixed  $value
 * @param int    $expiration
 *
 * @return bool
 */
function set_transient( $transient, $value, $expiration ) {
}

/**
 * @param string $setting
 * @param bool   $sanitize
 * @param bool   $hide_on_update
 *
 * @return void
 */
function settings_errors( $setting = '', $sanitize = false, $hide_on_update = false ) {
}

/**
 * @param string       $text
 * @param string       $type
 * @param string       $name
 * @param bool         $wrap
 * @param array|string $other_attributes
 *
 * @return void
 */
function submit_button( $text = null, $type = '', $name = '', $wrap = false, $other_attributes = null ) {
}

/**
 * @param string      $option
 * @param mixed       $value
 * @param string|bool $autoload
 *
 * @return bool
 */
function update_option( $option, $value, $autoload = null ) {
}

/**
 * @param string $handle
 * @param string $data
 *
 * @return bool
 */
function wp_add_inline_style( $handle, $data ) {
}

/**
 * @param string|int $action
 *
 * @return string
 */
function wp_create_nonce( $action = 0 ) {
}

/**
 * @param string|WP_Error  $message
 * @param string|int       $title
 * @param string|array|int $args
 *
 * @return never
 */
function wp_die( $message = '', $title = '', $args = [] ) {
}

/**
 * @param string           $handle
 * @param string           $src
 * @param array            $deps
 * @param string|bool|null $ver
 * @param bool             $in_footer
 *
 * @return void
 */
function wp_enqueue_script( $handle, $src = '', $deps = [], $ver = false, $in_footer = false ) {
}

/**
 * @param string           $handle
 * @param string           $src
 * @param array            $deps
 * @param string|bool|null $ver
 * @param string           $media
 *
 * @return void
 */
function wp_enqueue_style( $handle, $src = '', $deps = [], $ver = false, $media = '' ) {
}

/**
 * @param mixed $data
 * @param int   $options
 * @param int   $depth
 *
 * @return string|false
 */
function wp_json_encode( $data, $options, $depth = 0 ) {
}

/**
 * @param string $handle
 * @param string $object_name
 * @param array  $l10n
 *
 * @return bool
 */
function wp_localize_script( $handle, $object_name, $l10n ) {
}

/**
 * @param int|string $action
 * @param string     $name
 * @param bool       $referer
 * @param bool       $echo
 *
 * @return string
 */
function wp_nonce_field( $action = 0, $name = '', $referer = false, $echo = false ) {
}

/**
 * @param string     $actionurl
 * @param int|string $action
 * @param string     $name
 *
 * @return string
 */
function wp_nonce_url( $actionurl, $action = 0, $name = '' ) {
}

/**
 * @param string $url
 * @param int    $component
 *
 * @return mixed
 */
function wp_parse_url( $url, $component = 0 ) {
}

/**
 * @param int $min
 * @param int $max
 *
 * @return int
 */
function wp_rand( $min, $max ) {
}

/**
 * @param string           $handle
 * @param string|bool      $src
 * @param array            $deps
 * @param string|bool|null $ver
 * @param bool             $in_footer
 *
 * @return bool
 */
function wp_register_script( $handle, $src, $deps = [], $ver = false, $in_footer = false ) {
}

/**
 * @param string           $handle
 * @param string|bool      $src
 * @param array            $deps
 * @param string|bool|null $ver
 * @param string           $media
 *
 * @return bool
 */
function wp_register_style( $handle, $src, $deps = [], $ver = false, $media = '' ) {
}

/**
 * @param mixed $response
 * @param int   $status_code
 *
 * @return never
 */
function wp_send_json( $response, $status_code = null ) {
}

/**
 * @param string|array $value
 *
 * @return string|array
 */
function wp_unslash( $value ) {
}

/**
 * @param string     $nonce
 * @param string|int $action
 *
 * @return false|int
 */
function wp_verify_nonce( $nonce, $action = 0 ) {
}
