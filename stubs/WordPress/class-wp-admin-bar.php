<?php
/**
 * @package phan-wordpress-stubs
 */

/**
 */
class WP_Admin_Bar {
	/**
	 * @param array $node {
	 *     @type string $id
	 *     @type string $title
	 *     @type string $parent
	 *     @type string $href
	 *     @type bool   $group
	 *     @type array  $meta
	 * }
	 *
	 * @return void
	 */
	public function add_menu( $node ) {
	}

	/**
	 * @param string $id
	 *
	 * @return object|void
	 */
	public function get_node( $id ) {
	}
}
