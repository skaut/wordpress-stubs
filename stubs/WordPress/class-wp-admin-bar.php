<?php
/**
 * @package wordpress-stubs
 */

declare(strict_types = 1);

class WP_Admin_Bar {

	/**
	 * @param array{id: string|false|null, title?: string|false|null, parent?: string|false|null, href?: string|false|null, group?: bool, meta?: array{html?: string, class?: string, rel?: string, onclick?: string, target?: string, title?: string|false, tabindex?: string}} $node {
	 *     @type string|false|null  $id
	 *     @type string|false|null  $title
	 *     @type string|false|null  $parent
	 *     @type string|false|null  $href
	 *     @type bool               $group
	 *     @type array              $meta
	 * }
	 *
	 * @return void
	 */
	public function add_menu( $node ) {
	}

	/**
	 * @param array{id: string|false|null, title?: string|false|null, parent?: string|false|null, href?: string|false|null, group?: bool, meta?: array{html?: string, class?: string, rel?: string, onclick?: string, target?: string, title?: string|false, tabindex?: string}} $args {
	 *     Arguments for adding a node.
	 *
	 *     @type string|false|null $id     ID of the item.
	 *     @type string|false|null $title  Title of the node.
	 *     @type string|false|null $parent Optional. ID of the parent node.
	 *     @type string|false|null $href   Optional. Link for the item.
	 *     @type bool              $group  Optional. Whether or not the node is a group. Default false.
	 *     @type array             $meta   Meta data including the following keys: 'html', 'class', 'rel', 'lang', 'dir',
	 *                                  'onclick', 'target', 'title', 'tabindex', 'menu_title'. Default empty.
	 * }
	 * @return void
	 */
	public function get_node( $args ) {
	}
}
