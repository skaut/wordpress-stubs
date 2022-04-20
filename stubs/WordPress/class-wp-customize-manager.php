<?php
/**
 * @package phan-wordpress-stubs
 */

/**
 */
class WP_Customize_Manager {
	/**
	 * @var WP_Customize_Selective_Refresh
	 */
	public $selective_refresh;

	/**
	 * @param WP_Customize_Control|string                                                                                                                                                                                                                                                                                                                                                                 $id
	 * @param array{instance_number?: int, manager?: WP_Customize_Manager, id?: string, settings?: array<int|string, string>, setting?: string, capability?: string, priority?: int, section?: string, label?: string, description?: string, choices?: array<string, string>, input_attrs?: array<string, string>, allow_addition?: bool, json?: array<mixed>, type?: string, active_callback?: callable} $args {
	 *     @type int                       $instance_number
	 *     @type WP_Customize_Manager      $manager
	 *     @type string                    $id
	 *     @type array<int|string, string> $settings
	 *     @type string                    $setting
	 *     @type string                    $capability
	 *     @type int                       $priority
	 *     @type string                    $section
	 *     @type string                    $label
	 *     @type string                    $description
	 *     @type array<string, string>     $choices
	 *     @type array<string, string>     $input_attrs
	 *     @type bool                      $allow_addition
	 *     @type array<mixed>              $json
	 *     @type string                    $type
	 *     @type callable                  $active_callback
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

	/**
	 * @param string $id
	 *
	 * @return void
	 */
	public function remove_control( $id ) {
	}
}
