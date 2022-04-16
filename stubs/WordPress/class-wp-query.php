<?php
/**
 * @package phan-wordpress-stubs
 */

/**
 */
class WP_Query {
	/**
	 * @var array<WP_Post>|array<int>
	 */
	public $posts;

	/**
	 * @var int
	 */
	public $found_posts;

	/**
	 * @param string $query_var
	 * @param mixed  $default
	 *
	 * @return mixed
	 */
	public function get( $query_var, $default ) {
	}

	/**
	 * @return bool
	 */
	public function have_posts() {
	}
}
