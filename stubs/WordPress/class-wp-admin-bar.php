<?php
/**
 * @package wordpress-stubs
 */

/**
 */
class WP_Admin_Bar {
	/**
	 * @param array{id: string, title?: string, parent?: string, href?: string, group?: bool, meta?: array{html?: string, class?: string, rel?: string, onclick?: string, target?: string, title?: string, tabindex?: string}} $node {
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
	 * @return object|null
	 */
	public function get_node( $id ) {
	}
}
