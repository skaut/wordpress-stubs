<?php
/**
 * @package wordpress-stubs
 */

/**
 * @var string
 */
const ABSPATH = '';

/**
 * @var int
 */
const DAY_IN_SECONDS = 0;

/**
 * @var int
 */
const MINUTE_IN_SECONDS = 0;

/**
 * @var bool
 */
const SCRIPT_DEBUG = __LINE__ === 0;

/**
 * @var bool
 */
const WP_DEBUG = __LINE__ === 0;

/**
 * @var bool
 */
const WP_DEBUG_DISPLAY = __LINE__ === 0;

/**
 * @param string $text
 * @param string $domain
 *
 * @return string
 */
function __( $text, $domain = '' ) {
}

/**
 * @param string $single
 * @param string $plural
 * @param int    $number
 * @param string $domain
 *
 * @return string
 */
function _n( $single, $plural, $number, $domain = '' ) {
}

/**
 * @param string $text
 * @param string $context
 * @param string $domain
 *
 * @return string
 */
function _x( $text, $context, $domain = '' ) {
}

/**
 * @param mixed $maybeint
 *
 * @return int
 */
function absint( $maybeint ) {
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
 * @param string   $tag
 * @param callable $function_to_add
 * @param int      $priority
 * @param int      $accepted_args
 *
 * @return true
 */
function add_filter( $tag, $function_to_add, $priority = 0, $accepted_args = 0 ) {
}

/**
 * @param string          $page_title
 * @param string          $menu_title
 * @param string          $capability
 * @param string          $menu_slug
 * @param callable|string $function
 * @param string          $icon_url
 * @param int             $position
 *
 * @return string
 */
function add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function = '', $icon_url = '', $position = 0 ) {
}

/**
 * @param string                         $id
 * @param string                         $title
 * @param callable                       $callback
 * @param string|array<string>|WP_Screen $screen
 * @param string                         $context
 * @param string                         $priority
 * @param array<int|string, mixed>       $callback_args
 *
 * @return void
 */
function add_meta_box( $id, $title, $callback, $screen = null, $context = '', $priority = '', $callback_args = null ) {
}

/**
 * @param string $meta_type
 * @param int    $object_id
 * @param string $meta_key
 * @param mixed  $meta_value
 * @param bool   $unique
 *
 * @return int|false
 */
function add_metadata( $meta_type, $object_id, $meta_key, $meta_value, $unique = false ) {
}

/**
 * @param string      $option
 * @param mixed       $value
 * @param string      $deprecated
 * @param string|bool $autoload
 *
 * @return bool
 */
function add_option( $option, $value = '', $deprecated = '', $autoload = '' ) {
}

/**
 * @param mixed ...$args
 *
 * @return string
 */
function add_query_arg( ...$args ) {
}

/**
 * @param string                       $regex
 * @param string|array<string, string> $query
 * @param string                       $after
 *
 * @return void
 */
function add_rewrite_rule( $regex, $query, $after = '' ) {
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
 * @param string                                    $id
 * @param string                                    $title
 * @param callable                                  $callback
 * @param string                                    $page
 * @param string                                    $section
 * @param array{label_for?: string, class?: string} $args {
 *     @type string $label_for
 *     @type string $class
 * }
 *
 * @return void
 */
function add_settings_field( $id, $title, $callback, $page, $section = '', $args = array() ) {
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
 * @param string          $parent_slug
 * @param string          $page_title
 * @param string          $menu_title
 * @param string          $capability
 * @param string          $menu_slug
 * @param callable|string $function
 * @param int|null        $position
 *
 * @return false|string
 */
function add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function = '', $position = null ) {
}

/**
 * @return void
 */
function add_thickbox() {
}

/**
 * @param int    $user_id
 * @param string $meta_key
 * @param mixed  $meta_value
 * @param bool   $unique
 *
 * @return int|false
 */
function add_user_meta( $user_id, $meta_key, $meta_value, $unique = false ) {
}

/**
 * @param string $path
 * @param string $scheme
 *
 * @return string
 */
function admin_url( $path = '', $scheme = '' ) {
}

/**
 * @param string $tag
 * @param mixed  $value
 * @param mixed  ...$args
 *
 * @return mixed
 */
function apply_filters( $tag, $value, ...$args ) {
}

/**
 * @param string                   $hook_name
 * @param array<int|string, mixed> $args
 *
 * @return mixed
 */
function apply_filters_ref_array( $hook_name, $args ) {
}

/**
 * @param int|string $action
 * @param string     $query_arg
 *
 * @return int|false
 */
function check_admin_referer( $action = 0, $query_arg = '' ) {
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
 * @param string   $format
 * @param int|bool $timestamp_with_offset
 * @param bool     $gmt
 *
 * @return string
 */
function date_i18n( $format, $timestamp_with_offset = false, $gmt = false ) {
}

/**
 * @param string|array<string> $plugins
 * @param bool                 $silent
 * @param mixed                $network_wide
 *
 * @return void
 */
function deactivate_plugins( $plugins, $silent = false, $network_wide = null ) {
}

/**
 * @param string $meta_type
 * @param int    $object_id
 * @param string $meta_key
 * @param mixed  $meta_value
 * @param bool   $delete_all
 *
 * @return bool
 */
function delete_metadata( $meta_type, $object_id, $meta_key, $meta_value = '', $delete_all = false ) {
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
 * @param int    $user_id
 * @param string $meta_key
 * @param mixed  $meta_value
 *
 * @return bool
 */
function delete_user_meta( $user_id, $meta_key, $meta_value = '' ) {
}

/**
 * @return string
 */
function determine_locale() {
}

/**
 * @param string $hook_name
 * @param mixed  ...$args
 *
 * @return void
 */
function do_action( $hook_name, ...$args ) {
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
 * @param string $domain
 *
 * @return string
 */
function esc_attr__( $text, $domain = '' ) {
}

/**
 * @param string $text
 * @param string $domain
 *
 * @return void
 */
function esc_attr_e( $text, $domain = '' ) {
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
 * @param string $text
 * @param string $domain
 *
 * @return void
 */
function esc_html_e( $text, $domain = '' ) {
}

/**
 * @param string        $url
 * @param array<string> $protocols
 * @param string        $_context
 *
 * @return string
 */
function esc_url( $url, $protocols = array(), $_context = '' ) {
}

/**
 * @param string        $url
 * @param array<string> $protocols
 *
 * @return string
 */
function esc_url_raw( $url, $protocols = array() ) {
}

/**
 * @param bool $hard
 *
 * @return void
 */
function flush_rewrite_rules( $hard = false ) {
}

/**
 * @return string
 */
function get_admin_page_title() {
}

/**
 * @param int    $object_id
 * @param string $object_type
 * @param string $resource_type
 *
 * @return array<int>
 */
function get_ancestors( $object_id, $object_type = '', $resource_type = '' ) {
}

/**
 * @return WP_Screen|null
 */
function get_current_screen() {
}

/**
 * @return int
 */
function get_current_user_id() {
}

/**
 * @param int $user_id
 *
 * @return string
 */
function get_edit_user_link( $user_id = null ) {
}

/**
 * @param string                   $name
 * @param array<int|string, mixed> $args
 *
 * @return void|false
 */
function get_footer( $name = '', $args = array() ) {
}

/**
 * @param string                   $name
 * @param array<int|string, mixed> $args
 *
 * @return void|false
 */
function get_header( $name = '', $args = array() ) {
}

/**
 * @param int|null    $blog_id
 * @param string      $path
 * @param string|null $scheme
 *
 * @return string
 */
function get_home_url( $blog_id = null, $path = '', $scheme = null ) {
}

/**
 * @return string
 */
function get_locale() {
}

/**
 * @param string $meta_type
 * @param int    $object_id
 * @param string $meta_key
 * @param bool   $single
 *
 * @return mixed
 */
function get_metadata( $meta_type, $object_id, $meta_key = '', $single = false ) {
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
 * @param int|WP_Post $post
 * @param bool        $leavename
 *
 * @return string|false
 */
function get_permalink( $post, $leavename = false ) {
}

/**
 * @param int|WP_Post|null $post
 * @param string           $output
 * @param string           $filter
 *
 * @return WP_Post|null|array{ID: int, post_author: string|int, post_date: string, post_date_gmt: string, post_content: string, post_title: string, post_excerpt: string, post_status: string, comment_status: string, ping_status: string, post_password: string, post_name: string, to_ping: string, pinged: string, post_modified: string, post_modified_gmt: string, post_content_filtered: string, post_parent: int, guid: string, menu_order: int, post_type: string, post_mime_type: string, comment_count: string|int, filter?: string}|array<string|int>
 */
function get_post( $post = null, $output = '', $filter = '' ) {
}

/**
 * @param int    $post_id
 * @param string $key
 * @param bool   $single
 *
 * @return mixed
 */
function get_post_meta( $post_id, $key = '', $single = false ) {
}

/**
 * @param int|WP_Post|null $post
 *
 * @return string|false
 */
function get_post_type( $post = null ) {
}

/**
 * @param array<int|string, mixed>|string $args
 * @param string                          $output
 * @param string                          $operator
 *
 * @return array<string>|array<WP_Post_Type>
 */
function get_post_types( $args = array(), $output = '', $operator = '' ) {
}

/**
 * @param string $post_type
 *
 * @return WP_Post_Type|null
 */
function get_post_type_object( $post_type ) {
}

/**
 * @param string $var
 * @param mixed  $default
 *
 * @return mixed
 */
function get_query_var( $var, $default = '' ) {
}

/**
 * @param string  $setting
 * @param boolean $sanitize
 *
 * @return array<array{setting: string, code: string, message: string, type: string}>
 */
function get_settings_errors( $setting = '', $sanitize = false ) {
}

/**
 * @param string                   $name
 * @param array<int|string, mixed> $args
 *
 * @return void|false
 */
function get_sidebar( $name = null, $args = array() ) {
}

/**
 * @return string
 */
function get_stylesheet_directory() {
}

/**
 * @return string
 */
function get_stylesheet_directory_uri() {
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
 * @return string
 */
function get_template_directory() {
}

/**
 * @return string
 */
function get_template_directory_uri() {
}

/**
 * @param string    $field
 * @param int|false $user_id
 *
 * @return string
 */
function get_the_author_meta( $field = '', $user_id = false ) {
}

/**
 * @return int|false
 */
function get_the_ID() {
}

/**
 * @return string|void
 */
function get_the_modified_author() {
}

/**
 * @param int|WP_Post|null                                                                                                  $post
 * @param string|array{0: int, 1: int}                                                                                      $size
 * @param string|array{src?: string, class?: string, alt?: string, srcset?: string, sizes?: string, loading?: string|false} $attr
 *
 * @return string
 */
function get_the_post_thumbnail( $post = null, $size = '', $attr = '' ) {
}

/**
 * @param int|WP_Post $post
 *
 * @return string
 */
function get_the_title( $post ) {
}

/**
 * @param string      $name
 * @param bool|string $default
 *
 * @return mixed
 */
function get_theme_mod( $name, $default = false ) {
}

/**
 * @param string $transient
 *
 * @return mixed
 */
function get_transient( $transient ) {
}

/**
 * @param int    $user_id
 * @param string $key
 * @param bool   $single
 *
 * @return mixed
 */
function get_user_meta( $user_id, $key, $single ) {
}

/**
 * @param string $option
 * @param int    $user
 * @param string $deprecated
 *
 * @return mixed
 */
function get_user_option( $option, $user = 0, $deprecated = '' ) {
}

/**
 * @param int|WP_Post $post
 *
 * @return bool
 */
function has_post_thumbnail( $post = null ) {
}

/**
 * @param int $from
 * @param int $to
 *
 * @return string
 */
function human_time_diff( $from, $to ) {
}

/**
 * @return bool
 */
function is_admin() {
}

/**
 * @return bool
 */
function is_admin_bar_showing() {
}

/**
 * @return bool
 */
function is_network_admin() {
}

/**
 * @param int|string|array<int>|array<string> $page
 *
 * @return bool
 */
function is_page( $page = '' ) {
}

/**
 * @param string $plugin
 *
 * @return bool
 */
function is_plugin_active( $plugin ) {
}

/**
 * @return bool
 */
function is_rtl() {
}

/**
 * @param int|string|array<int>|array<string> $post
 *
 * @return bool
 */
function is_single( $post = '' ) {
}

/**
 * @param string|array<string> $post_types
 *
 * @return bool
 */
function is_singular( $post_types = '' ) {
}

/**
 * @return bool
 */
function is_user_logged_in() {
}

/**
 * @param mixed $thing
 *
 * @return bool
 */
function is_wp_error( $thing ) {
}

/**
 * @param string $domain
 * @param string $mofile
 *
 * @return bool
 */
function load_textdomain( $domain, $mofile ) {
}

/**
 * @param string      $domain
 * @param string|bool $path
 *
 * @return bool
 */
function load_theme_textdomain( $domain, $path = false ) {
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
 * @param string $title
 * @param string $content
 * @param string $date
 * @param string $type
 *
 * @return int
 */
function post_exists( $title, $content = '', $date = '', $type = '' ) {
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
 * @param string|WP_Block_Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        $name
 * @param array{api_version?: string, title?: string, category?: string|null, parent?: array<string>|null, icon?: string|null, description?: string, keywords?: array<string>, textdomain?: string|null, styles?: array<array{name: string, label: string, isDefault?: bool}>, variations?: array<array{name: string, title: string, description?: string, category?: string, icon?: string, isDefault?: bool, attributes?: array<array{type?: string, enum?: array<string>, source?: string, selector?: string, attribute?: string, multiline?: string, query?: mixed, default?: string}>, innerBlocks?: array<mixed>, example?: array{attributes?: array<array{type?: string, enum?: array<string>, source?: string, selector?: string, attribute?: string, multiline?: string, query?: mixed, default?: string}>, innerBlocks?: array<mixed>, viewportWidth?: int}, scope?: array<string>, keywords?: array<string>, isActive?: array<string>}>, supports?: null|array{align?: bool|array<string>, alignWide?: bool, className?: bool, color?: array{background?: bool, gradients?: bool, link?: bool, text?: bool}, customClassName?: bool, defaultStylePicker?: bool, html?: bool, inserter?: bool, multiple?: bool, reusable?: bool, lock?: bool, spacing?: array{margin?: bool|array<string>, padding?: bool|array<string>}, typography?: array{fontSize?: bool, lineHeight?: bool}}, example?: null|array{attributes?: array<array{type?: string, enum?: array<string>, source?: string, selector?: string, attribute?: string, multiline?: string, query?: mixed, default?: string}>, innerBlocks?: array<mixed>, viewportWidth?: int}, render_callback?: callable|null, attributes?: null|array<array{type?: string, enum?: array<string>, source?: string, selector?: string, attribute?: string, multiline?: string, query?: mixed, default?: string}>, uses_context?: array<mixed>, provides_context?: array<mixed>|null, editor_script?: string|null, script?: string|null, view_script?: string|null, editor_style?: string|null, style?: string|null} $args {
 *     @type string $api_version
 *     @type string $title
 *     @type string|null $category
 *     @type array<string>|null $parent
 *     @type string|null $icon
 *     @type string $description
 *     @type array<string> $keywords
 *     @type string|null $textdomain
 *     @type array<array{name: string, label: string, isDefault?: bool}> $styles
 *     @type array<array{name: string, title: string, description?: string, category?: string, icon?: string, isDefault?: bool, attributes?: array<array{type?: string, enum?: array<string>, source?: string, selector?: string, attribute?: string, multiline?: string, query?: mixed, default?: string}>, innerBlocks?: array<mixed>, example?: array{attributes?: array<array{type?: string, enum?: array<string>, source?: string, selector?: string, attribute?: string, multiline?: string, query?: mixed, default?: string}>, innerBlocks?: array<mixed>, viewportWidth?: int}, scope?: array<string>, keywords?: array<string>, isActive?: array<string>}> $variations
 *     @type null|array{align?: bool|array<string>, alignWide?: bool, className?: bool, color?: array{background?: bool, gradients?: bool, link?: bool, text?: bool}, customClassName?: bool, defaultStylePicker?: bool, html?: bool, inserter?: bool, multiple?: bool, reusable?: bool, lock?: bool, spacing?: array{margin?: bool|array<string>, padding?: bool|array<string>}, typography?: array{fontSize?: bool, lineHeight?: bool}} $supports {
 *         @type bool|array<string>                                                   $align
 *         @type bool                                                                 $alignWide
 *         @type bool                                                                 $className
 *         @type array{background?: bool, gradients?: bool, link?: bool, text?: bool} $color {
 *             @type bool $background
 *             @type bool $gradients
 *             @type bool $link
 *             @type bool $text
 *         }
 *         @type bool                                                                 $customClassName
 *         @type bool                                                                 $defaultStylePicker
 *         @type bool                                                                 $html
 *         @type bool                                                                 $inserter
 *         @type bool                                                                 $multiple
 *         @type bool                                                                 $reusable
 *         @type bool                                                                 $lock
 *         @type array{margin?: bool|array<string>, padding?: bool|array<string>}     $spacing {
 *             @type bool|array<string> $margin
 *             @type bool|array<string> $padding
 *         }
 *         @type array{fontSize?: bool, lineHeight?: bool}                            $typography {
 *             @type bool $fontSize
 *             @type bool $lineHeight
 *         }
 *     }
 *     @type null|array{attributes?: array<array{type?: string, enum?: array<string>, source?: string, selector?: string, attribute?: string, multiline?: string, query?: mixed, default?: string}>, innerBlocks?: array<mixed>, viewportWidth?: int} $example
 *     @type callable|null $render_callback
 *     @type null|array<array{type?: string, enum?: array<string>, source?: string, selector?: string, attribute?: string, multiline?: string, query?: mixed, default?: string}> $attributes
 *     @type array<mixed> $uses_context
 *     @type array<mixed>|null $provides_context
 *     @type string|null $editor_script
 *     @type string|null $script
 *     @type string|null $view_script
 *     @type string|null $editor_style
 *     @type string|null $style
 * }
 *
 * @return WP_Block_Type|false
 */
function register_block_type( $name, $args = array() ) {
}

/**
 * @param string   $file
 * @param callable $callback
 *
 * @return void
 */
function register_deactivation_hook( $file, $callback ) {
}

/**
 * @param string $user_login
 * @param string $user_email
 *
 * @return int|WP_Error
 */
function register_new_user( $user_login, $user_email ) {
}

/**
 * @param string                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          $post_type
 * @param array{label?: string, labels?: array<string>, description?: string, public?: bool, hierarchical?: bool, exclude_from_search?: bool, publicly_queryable?: bool, show_ui?: bool, show_in_menu?: bool|string, show_in_nav_menus?: bool, show_in_admin_bar?: bool, show_in_rest?: bool, rest_base?: string, rest_namespace?: string, rest_controller_class?: string, menu_postion?: int, menu_icon?: string, capability_type?: string|array<string>, capabilities?: array<string>, map_meta_cap?: bool, supports?: array<string|array<string|string>>, register_meta_box_cb?: callable, taxonomies?: array<string>, has_archive?: bool|string, rewrite?: bool|array{slug?: string, with_front?: bool, feeds?: bool, pages?: bool, ep_mask?: int}, query_var?: string|bool, can_export?: bool, delete_with_user?: bool, template?: array<array{0: string, 1?: array<string, string>}>, template_lock?: string|false} $args {
 *     @type string                                                                                  $label
 *     @type array<string>                                                                           $labels
 *     @type string                                                                                  $description
 *     @type bool                                                                                    $public
 *     @type bool                                                                                    $hierarchical
 *     @type bool                                                                                    $exclude_from_search
 *     @type bool                                                                                    $publicly_queryable
 *     @type bool                                                                                    $show_ui
 *     @type bool|string                                                                             $show_in_menu
 *     @type bool                                                                                    $show_in_nav_menus
 *     @type bool                                                                                    $show_in_admin_bar
 *     @type bool                                                                                    $show_in_rest
 *     @type string                                                                                  $rest_base
 *     @type string                                                                                  $rest_namespace
 *     @type string                                                                                  $rest_controller_class
 *     @type int                                                                                     $menu_postion
 *     @type string                                                                                  $menu_icon
 *     @type string|array<string>                                                                    $capability_type
 *     @type array<string>                                                                           $capabilities
 *     @type bool                                                                                    $map_meta_cap
 *     @type array<string|array<string, string>>                                                     $supports
 *     @type callable                                                                                $register_meta_box_cb
 *     @type array<string>                                                                           $taxonomies
 *     @type bool|string                                                                             $has_archive
 *     @type bool|array{slug?: string, with_front?: bool, feeds?: bool, pages?: bool, ep_mask?: int} $rewrite
 *     @type string|bool                                                                             $query_var
 *     @type bool                                                                                    $can_export
 *     @type bool                                                                                    $delete_with_user
 *     @type array<array{0: string, 1?: array<string, string>}>                                      $template
 *     @type string|false                                                                            $template_lock
 * }
 *
 * @return WP_Post_Type|WP_Error
 */
function register_post_type( $post_type, $args = array() ) {
}

/**
 * @param string                                                                                                         $option_group
 * @param string                                                                                                         $option_name
 * @param array{type?: string, description?: string, sanitize_callback?: callable, show_in_rest?: bool, default?: mixed} $args {
 *     @type string   $type
 *     @type string   $description
 *     @type callable $sanitize_callback
 *     @type bool     $show_in_rest
 *     @type mixed    $default
 * }
 *
 * @return void
 */
function register_setting( $option_group, $option_name, $args = array() ) {
}

/**
 * @param string|WP_Widget $widget
 *
 * @return void
 */
function register_widget( $widget ) {
}

/**
 * @param string   $tag
 * @param callable $function_to_remove
 * @param int      $priority
 *
 * @return bool
 */
function remove_action( $tag, $function_to_remove, $priority = 0 ) {
}

/**
 * @param string          $hook_name
 * @param callable|string $callback
 * @param int             $priority
 *
 * @return bool
 */
function remove_filter( $hook_name, $callback, $priority = 0 ) {
}

/**
 * @param string|array<string> $key
 * @param string|false         $query
 *
 * @return string
 */
function remove_query_arg( $key, $query ) {
}

/**
 * @param string $name
 *
 * @return void
 */
function remove_theme_mod( $name ) {
}

/**
 * @param string $meta_key
 * @param mixed  $meta_value
 * @param string $object_type
 * @param string $object_subtype
 *
 * @return mixed
 */
function sanitize_meta( $meta_key, $meta_value, $object_type, $object_subtype = '' ) {
}

/**
 * @param string $str
 *
 * @return string
 */
function sanitize_text_field( $str ) {
}

/**
 * @param mixed $selected
 * @param mixed $current
 * @param bool  $echo
 *
 * @return string
 */
function selected( $selected, $current = false, $echo = false ) {
}

/**
 * @param string $name
 * @param mixed  $value
 *
 * @return void
 */
function set_theme_mod( $name, $value ) {
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
 * @param string $option_group
 *
 * @return void
 */
function settings_fields( $option_group ) {
}

/**
 * @param string                       $text
 * @param string                       $type
 * @param string                       $name
 * @param bool                         $wrap
 * @param array<string, string>|string $other_attributes
 *
 * @return void
 */
function submit_button( $text = null, $type = '', $name = '', $wrap = false, $other_attributes = null ) {
}

/**
 * @param string $stylesheet
 *
 * @return void
 */
function switch_theme( $stylesheet ) {
}

/**
 * @param string|array{0: int, 1: int}                                                                                      $size
 * @param string|array{src?: string, class?: string, alt?: string, srcset?: string, sizes?: string, loading?: string|false} $attr
 *
 * @return void
 */
function the_post_thumbnail( $size = '', $attr = '' ) {
}

/**
 * @param string $before
 * @param string $after
 * @param bool   $echo
 *
 * @return string|void
 */
function the_title( $before = '', $after = '', $echo = false ) {
}

/**
 * @param string|array{before?: string, after?: string, echo?: bool, post?: WP_Post} $args {
 *     @type string  $before
 *     @type string  $after
 *     @type bool    $echo
 *     @type WP_Post $post
 * }
 *
 * @return string|void
 */
function the_title_attribute( $args = array() ) {
}

/**
 * @param string $string
 *
 * @return string
 */
function trailingslashit( $string ) {
}

/**
 * @param string $name
 * @param string $domain
 *
 * @return string
 */
function translate_user_role( $name, $domain = '' ) {
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
 * @param int    $post_id
 * @param string $meta_key
 * @param mixed  $meta_value
 * @param mixed  $prev_value
 *
 * @return int|bool
 */
function update_post_meta( $post_id, $meta_key, $meta_value, $prev_value = '' ) {
}

/**
 * @param int    $user_id
 * @param string $meta_key
 * @param mixed  $meta_value
 * @param mixed  $prev_value
 *
 * @return int|bool
 */
function update_user_meta( $user_id, $meta_key, $meta_value, $prev_value = '' ) {
}

/**
 * @param int|WP_User $user
 * @param string      $capability
 * @param mixed       ...$args
 *
 * @return bool
 */
function user_can( $user, $capability, ...$args ) {
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
 * @param string $path
 * @param string $suffix
 *
 * @return string
 */
function wp_basename( $path, $suffix = '' ) {
}

/**
 * @param string             $filename
 * @param array<string>|null $mimes
 *
 * @return array{ext: string|false, type: string|false} {
 *     @type string|false $ext
 *     @type string|false $type
 * }
 */
function wp_check_filetype( $filename, $mimes = null ) {
}

/**
 * @return void
 */
function wp_clear_auth_cookie() {
}

/**
 * @param string|int $action
 *
 * @return string
 */
function wp_create_nonce( $action = 0 ) {
}

/**
 * @return void
 */
function wp_destroy_current_session() {
}

/**
 * @param string|WP_Error                                                                                                                                                  $message
 * @param string|int                                                                                                                                                       $title
 * @param string|int|array{response?: int, link_url?: string, link_text?: string, back_link?: bool, text_direction?: string, charset?: string, code?: string, exit?: bool} $args {
 *     @type int    $response
 *     @type string $link_url
 *     @type string $link_text
 *     @type bool   $back_link
 *     @type string $text_direction
 *     @type string $charset
 *     @type string $code
 *     @type bool   $exit
 * }
 *
 * @return void
 */
function wp_die( $message = '', $title = '', $args = array() ) {
}

/**
 * @param string $selected
 *
 * @return void
 */
function wp_dropdown_roles( $selected = '' ) {
}

/**
 * @param string           $handle
 * @param string           $src
 * @param array<string>    $deps
 * @param string|bool|null $ver
 * @param bool             $in_footer
 *
 * @return void
 */
function wp_enqueue_script( $handle, $src = '', $deps = array(), $ver = false, $in_footer = false ) {
}

/**
 * @param string           $handle
 * @param string           $src
 * @param array<string>    $deps
 * @param string|bool|null $ver
 * @param string           $media
 *
 * @return void
 */
function wp_enqueue_style( $handle, $src = '', $deps = array(), $ver = false, $media = '' ) {
}

/**
 * @param int    $attachment_id
 * @param string $file
 *
 * @return mixed
 */
function wp_generate_attachment_metadata( $attachment_id, $file ) {
}

/**
 * @param int                          $attachment_id
 * @param string|array{0: int, 1: int} $size
 * @param bool                         $icon
 *
 * @return false|array{0: string, 1: int, 2: int, 3: bool} {
 *     @type string $0
 *     @type int $1
 *     @type int $2
 *     @type bool $3
 * }
 */
function wp_get_attachment_image_src( $attachment_id, $size = '', $icon = false ) {
}

/**
 * @param int|WP_Post                                                        $post_id
 * @param array{order?: string, orderby?: string, check_enabled?: bool}|null $args
 *
 * @return array{WP_Post}|array{int}
 */
function wp_get_post_revisions( $post_id, $args = null ) {
}

/**
 * @param string $stylesheet
 * @param string $theme_root
 *
 * @return WP_Theme
 */
function wp_get_theme( $stylesheet = '', $theme_root = '' ) {
}

/**
 * @param string|array{ID?: int, post_author?: int, post_date?: string, post_date_gmt?: string, post_content?: string, post_content_filtered?: string, post_title?: string, post_excerpt?: string, post_status?: string, post_type?: string, comment_status?: string, ping_status?: string, post_password?: string, post_name?: string, to_ping?: string, pinged?: string, post_modified?: string, post_modified_gmt?: string, post_parent?: int, menu_order?: int, post_mime_type?: string, guid?: string, import_id?: int, post_category?: array<int>, tags_input?: array<int>|array<string>, tax_input: array<string>, meta_input?: array<string, mixed>} $args {
 *     @type int                      $ID
 *     @type int                      $post_author
 *     @type string                   $post_date
 *     @type string                   $post_date_gmt
 *     @type string                   $post_content
 *     @type string                   $post_content_filtered
 *     @type string                   $post_title
 *     @type string                   $post_excerpt
 *     @type string                   $post_status
 *     @type string                   $post_type
 *     @type string                   $comment_status
 *     @type string                   $ping_status
 *     @type string                   $post_password
 *     @type string                   $post_name
 *     @type string                   $to_ping
 *     @type string                   $pinged
 *     @type string                   $post_modified
 *     @type string                   $post_modified_gmt
 *     @type int                      $post_parent
 *     @type int                      $menu_order
 *     @type string                   $post_mime_type
 *     @type string                   $guid
 *     @type int                      $import_id
 *     @type array<int>               $post_category
 *     @type array<int>|array<string> $tags_input
 *     @type array<string>            $tax_input
 *     @type array<string, mixed>     $meta_input
 * }
 * @param string|false                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       $file
 * @param int                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                $parent
 * @param bool                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               $wp_error
 *
 * @return int|WP_Error
 */
function wp_insert_attachment( $args, $file = false, $parent = 0, $wp_error = false ) {
}

/**
 * @param int|WP_Post $post
 *
 * @return int|false
 */
function wp_is_post_revision( $post ) {
}

/**
 * @param mixed $data
 * @param int   $options
 * @param int   $depth
 *
 * @return string|false
 */
function wp_json_encode( $data, $options = 0, $depth = 0 ) {
}

/**
 * @param string $string
 * @param string $context
 *
 * @return string
 */
function wp_kses_normalize_entities( $string, $context = '' ) {
}

/**
 * @param string                   $handle
 * @param string                   $object_name
 * @param array<int|string, mixed> $l10n
 *
 * @return bool
 */
function wp_localize_script( $handle, $object_name, $l10n ) {
}

/**
 * @return void
 */
function wp_logout() {
}

/**
 * @param string|int $mime
 *
 * @return string|false
 */
function wp_mime_type_icon( $mime ) {
}

/**
 * @param string $action
 *
 * @return void
 */
function wp_nonce_ays( $action ) {
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
 * @param string|array<int|string, mixed>|object $args
 * @param array<int|string, mixed>               $defaults
 *
 * @return array<int|string, mixed>
 */
function wp_parse_args( $args, $defaults = array() ) {
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
 * @param int|object $revision
 * @param bool       $link
 *
 * @return string|false
 */
function wp_post_revision_title( $revision, $link = false ) {
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
 * @param array<string>    $deps
 * @param string|bool|null $ver
 * @param bool             $in_footer
 *
 * @return bool
 */
function wp_register_script( $handle, $src, $deps = array(), $ver = false, $in_footer = false ) {
}

/**
 * @param string           $handle
 * @param string|bool      $src
 * @param array<string>    $deps
 * @param string|bool|null $ver
 * @param string           $media
 *
 * @return bool
 */
function wp_register_style( $handle, $src, $deps = array(), $ver = false, $media = '' ) {
}

/**
 * @param string                                                                                                                                                                                                                                                                                                                                                                                                            $url
 * @param string|array{method?: string, timeout?: int, redirection?: int, httpversion?: string, user-agent?: string, reject_unsafe_urls?: bool, blocking?: bool, headers?: string|array<string, string>, cookies?: array<string, string>, body?: string|array<string, string>, compress?: bool, decompress?: bool, sslverify?: bool, sslcertificates?: string, stream?: bool, filename?: string, limit_response_size?: int} $args {
 *     @type string                       $method
 *     @type int                          $timeout
 *     @type int                          $redirection
 *     @type string                       $httpversion
 *     @type string                       $user-agent
 *     @type bool                         $reject_unsafe_urls
 *     @type bool                         $blocking
 *     @type string|array<string, string> $headers
 *     @type array<string, string>        $cookies
 *     @type string|array<string, string> $body
 *     @type bool                         $compress
 *     @type bool                         $decompress
 *     @type bool                         $sslverify
 *     @type string                       $sslcertificates
 *     @type bool                         $stream
 *     @type string                       $filename
 *     @type int                          $limit_response_size
 * }
 *
 * @return WP_Error|array{headers: Requests_Utility_CaseInsensitiveDictionary, body: string, response: array{code: int, message: string}, cookies: array<WP_Http_Cookie>, filename: string|null, http_response: WP_HTTP_Requests_Response}|array{headers: array<never>, body: string, response: array{code: false, message: false}, cookies: array<never>, http_response: null} {
 *     @type Requests_Utility_CaseInsensitiveDictionary|array<never> $headers
 *     @type string                                                  $body
 *     @type array{code: int|false, message: string|false}           $response {
 *         @type int|false    $code
 *         @type string|false $message
 *     }
 *     @type array<WP_Http_Cookie>                                   $cookies
 *     @type string|null                                             $filename
 *     @type WP_HTTP_Requests_Response|null                          $http_response
 * }
 */
function wp_remote_get( $url, $args = array() ) {
}

/**
 * @param WP_Error|array{body: string} $response {
 *     @type string $body
 * }
 *
 * @return string
 */
function wp_remote_retrieve_body( $response ) {
}

/**
 * @param WP_Error|array{response: array{code: int}} $response {
 *     @type array $response {
 *         @type int $code
 *     }
 * }
 *
 * @return int|string
 */
function wp_remote_retrieve_response_code( $response ) {
}

/**
 * @return WP_Roles
 */
function wp_roles() {
}

/**
 * @param string $location
 * @param int    $status
 * @param string $x_redirect_by
 *
 * @return bool
 */
function wp_safe_redirect( $location, $status = 0, $x_redirect_by = '' ) {
}

/**
 * @param mixed $response
 * @param int   $status_code
 *
 * @return void
 */
function wp_send_json( $response, $status_code = null ) {
}

/**
 * @param int    $user_id
 * @param string $notify
 *
 * @return void
 */
function wp_send_new_user_notifications( $user_id, $notify = '' ) {
}

/**
 * @param int         $user_id
 * @param bool        $remember
 * @param bool|string $secure
 * @param string      $token
 *
 * @return void
 */
function wp_set_auth_cookie( $user_id, $remember = false, $secure = '', $token = '' ) {
}

/**
 * @param int|null $id
 * @param string   $name
 *
 * @return WP_User
 */
function wp_set_current_user( $id, $name = '' ) {
}

/**
 * @param string $string
 * @param bool   $remove_breaks
 *
 * @return string
 */
function wp_strip_all_tags( $string, $remove_breaks = false ) {
}

/**
 * @template T of string|array<string>
 * @param T $value
 *
 * @return T
 */
function wp_unslash( $value ) {
}

/**
 * @param int          $attachment_id
 * @param array<mixed> $data
 *
 * @return int|false
 */
function wp_update_attachment_metadata( $attachment_id, $data ) {
}

/**
 * @param array{ID: int, user_pass?: string, user_login?: string, user_nicename?: string, user_url?: string, user_email?: string, display_name?: string, nickname?: string, first_name?: string, last_name?: string, description?: string, rich_editing?: string, syntax_highlighting?: string, comment_shortcuts?: string, admin_color?: string, use_ssl?: bool, user_registered?: string, user_activation_key?: string, spam?: bool, show_admin_bar_front?: string, role?: string, locale?: string, meta_input: array<string, mixed>}|stdClass|WP_User $userdata
 *
 * @return int|WP_Error
 */
function wp_update_user( $userdata ) {
}

/**
 * @param string      $name
 * @param string|null $deprecated
 * @param mixed       $bits
 * @param string|null $time
 *
 * @return array{file: string, url: string, type: string, error: false}|array{error: string} {
 *     @type string       $file
 *     @type string       $url
 *     @type string       $type
 *     @type string|false $error
 * }
 */
function wp_upload_bits( $name, $deprecated, $bits, $time = null ) {
}

/**
 * @param string     $nonce
 * @param string|int $action
 *
 * @return false|int
 */
function wp_verify_nonce( $nonce, $action = 0 ) {
}
