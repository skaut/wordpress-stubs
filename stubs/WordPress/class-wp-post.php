<?php
/**
 * @package wordpress-stubs
 */

declare(strict_types = 1);

final class WP_Post {

	/**
	 * @var int
	 */
	public $ID;

	/**
	 * @var int
	 */
	public $post_author = 0;

	/**
	 * @var string
	 */
	public $post_date = '0000-00-00 00:00:00';

	/**
	 * @var string
	 */
	public $post_date_gmt = '0000-00-00 00:00:00';

	/**
	 * @var string
	 */
	public $post_content = '';

	/**
	 * @var string
	 */
	public $post_title = '';

	/**
	 * @var string
	 */
	public $post_excerpt = '';

	/**
	 * @var string
	 */
	public $post_status = 'publish';

	/**
	 * @var string
	 */
	public $comment_status = 'open';

	/**
	 * @var string
	 */
	public $ping_status = 'open';

	/**
	 * @var string
	 */
	public $post_password = '';

	/**
	 * @var string
	 */
	public $post_name = '';

	/**
	 * @var string
	 */
	public $to_ping = '';

	/**
	 * @var string
	 */
	public $pinged = '';

	/**
	 * @var string
	 */
	public $post_modified = '0000-00-00 00:00:00';

	/**
	 * @var string
	 */
	public $post_modified_gmt = '0000-00-00 00:00:00';

	/**
	 * @var string
	 */
	public $post_content_filtered = '';

	/**
	 * @var int
	 */
	public $post_parent = 0;

	/**
	 * @var string
	 */
	public $guid = '';

	/**
	 * @var int
	 */
	public $menu_order = 0;

	/**
	 * @var string
	 */
	public $post_type = 'post';

	/**
	 * @var string
	 */
	public $post_mime_type = '';

	/**
	 * @var int
	 */
	public $comment_count = 0;

	/**
	 * @var string
	 */
	public $filter;

	/**
	 * @param WP_Post|object $post Post object.
	 */
	public function __construct( $post ) {}

	/**
	 * @param string $filter Filter.
	 * @return WP_Post|bool|object|array<string, string>
	 */
	public function filter( $filter ) {}

	/**
	 * @global wpdb $wpdb WordPress database abstraction object.
	 *
	 * @param int $post_id Post ID.
	 * @return WP_Post|false Post object, false otherwise.
	 */
	public static function get_instance( $post_id ) {}

	/**
	 * @param string $key Property to check if set.
	 * @return bool
	 */
	public function __isset( $key ) {}
}
