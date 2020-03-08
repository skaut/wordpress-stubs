<?php
/**
 * @package phan-wordpress-stubs
 */

/**
 */
class WP_Customize_Manager {
	/**
	 * @param WP_Customize_Control|string $id
	 * @param array                       $args {
	 *     @type array    $settings
	 *     @type string   $setting
	 *     @type string   $capability
	 *     @type int      $priority
	 *     @type string   $section
	 *     @type string   $label
	 *     @type string   $description
	 *     @type array    $choices
	 *     @type array    $input_attrs
	 *     @type bool     $allow_addition
	 *     @type string   $type
	 *     @type callback $active_callback
	 * }
	 *
	 * @return WP_Customize_Control
	 */
	public function add_control( $id, $args = array() ) {
	}

	/**
	 * @param WP_Customize_Panel|string $id
	 * @param array                     $args {
	 *     @type int             $priority
	 *     @type string          $capability
	 *     @type string|string[] $theme_supports
	 *     @type string          $title
	 *     @type string          $description
	 *     @type string          $type
	 *     @type callable        $active_callback
	 * }
	 *
	 * @return WP_Customize_Panel
	 */
	public function add_panel( $id, $args = array() ) {
	}

	/**
	 * @param WP_Customize_Section|string $id
	 * @param array                       $args {
	 *     @type int             $priority
	 *     @type string          $panel
	 *     @type string          $capability
	 *     @type string|string[] $theme_supports
	 *     @type string          $title
	 *     @type string          $description
	 *     @type string          $type
	 *     @type callable        $active_callback
	 *     @type bool            $description_hidden
	 * }
	 *
	 * @return WP_Customize_Section
	 */
	public function add_section( $id, $args = array() ) {
	}

	/**
	 * @param WP_Customize_Setting|string $id
	 * @param array                       $args {
	 *     @type string          $type
	 *     @type string          $capability
	 *     @type string|string[] $theme_supports
	 *     @type string          $default
	 *     @type string          $transport
	 * }
	 *
	 * @return WP_Customize_Setting
	 */
	public function add_setting( $id, $args = array() ) {
	}

	/**
	 * @param string $control
	 *
	 * @return void
	 */
	public function register_control_type( $control ) {
	}
}
