<?php
/**
 * @package phan-wordpress-stubs
 */

/**
 */
class WP_Customize_Control {
	/**
	 * @var array
	 */
	public $json;

	/**
	 * @var array
	 */
	public $settings;

	/**
	 * @param WP_Customize_Manager $manager
	 * @param string               $id
	 * @param array                $args {
	 *     @type int                  $instance_number
	 *     @type WP_Customize_Manager $manager
	 *     @type string               $id
	 *     @type array                $settings
	 *     @type string               $setting
	 *     @type int                  $priority
	 *     @type string               $section
	 *     @type string               $label
	 *     @type string               $description
	 *     @type array                $choices
	 *     @type array                $input_attrs
	 *     @type array                $json
	 *     @type string               $type
	 * }
	 */
	public function __construct( $manager, $id, $args = [] ) {
	}

	/**
	 * @param string $setting_key
	 *
	 * @return string
	 */
	public function get_link( $setting_key = '' ) {
	}

	/**
	 * @return void
	 */
	public function to_json() {
	}

	/**
	 * @param string $setting_key
	 *
	 * @return mixed
	 */
	public function value( $setting_key ) {
	}
}
