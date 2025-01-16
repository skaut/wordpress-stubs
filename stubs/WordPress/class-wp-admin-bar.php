<?php
/**
 * @package wordpress-stubs
 */

declare(strict_types = 1);

class WP_Admin_Bar {

	/**
	 * @param array{id: string, title?: string|false, parent?: string|false, href?: string|false, group?: bool, meta?: array{html?: string, class?: string, rel?: string, onclick?: string, target?: string, title?: string|false, tabindex?: string}} $node {
	 *     @type string        $id
	 *     @type string|false  $title
	 *     @type string|false  $parent
	 *     @type string|false  $href
	 *     @type bool          $group
	 *     @type array         $meta
	 * }
	 *
	 * @return void
	 */
	public function add_menu( $node ) {
	}

	/**
	 * @param string $id
	 * @return array{id: string, title?: string|false, parent?: string|false, href?: string|false, group?: bool, meta?: array{html?: string, class?: string, rel?: string, onclick?: string, target?: string, title?: string|false, tabindex?: string}}|void {
	 *     Arguments for adding a node.
	 *
	 *     @type string       $id     ID of the item.
	 *     @type string|false $title  Title of the node.
	 *     @type string|false $parent Optional. ID of the parent node.
	 *     @type string|false $href   Optional. Link for the item.
	 *     @type bool         $group  Optional. Whether or not the node is a group. Default false.
	 *     @type array        $meta   Meta data including the following keys: 'html', 'class', 'rel', 'lang', 'dir',
	 *                                  'onclick', 'target', 'title', 'tabindex', 'menu_title'. Default empty.
	 * }
	 */
	public function get_node( $id ) {
	}
}
