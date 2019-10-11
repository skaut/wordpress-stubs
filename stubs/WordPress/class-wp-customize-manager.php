<?php
/**
 * @package phan-wordpress-stubs
 */

/**
 */
class WP_Customize_Manager {
	/**
	 * @param WP_Customize_Control|string $id
	 * @param array                       $args
	 *
	 * @return WP_Customize_Control
	 */
	public function add_control( $id, $args = [] ) {
	}

	/**
	 * @param WP_Customize_Panel|string $id
	 * @param array                     $args
	 *
	 * @return WP_Customize_Panel
	 */
	public function add_panel( $id, $args = [] ) {
	}

	/**
	 * @param WP_Customize_Section|string $id
	 * @param array                       $args
	 *
	 * @return WP_Customize_Section
	 */
	public function add_section( $id, $args = [] ) {
	}

	/**
	 * @param WP_Customize_Setting|string $id
	 * @param array                       $args
	 *
	 * @return WP_Customize_Setting
	 */
	public function add_setting( $id, $args = [] ) {
	}

	/**
	 * @param string $control
	 *
	 * @return void
	 */
	public function register_control_type( $control ) {
	}
}
