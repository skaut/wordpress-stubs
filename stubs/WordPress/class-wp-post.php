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
	 * @var int|string
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
	 * @param WP_Post|object{ID?: int, post_author?: int|string, post_date?: string, post_date_gmt?: string, post_content?: string, post_title?: string, post_excerpt?: string, post_status?: string, comment_status?: string, ping_status?: string, post_password?: string, post_name?: string, to_ping?: string, pinged?: string, post_modified?: string, post_modified_gmt?: string, post_content_filtered?: string, post_parent?: int, guid?: string, menu_order?: int, post_type?: string, post_mime_type?: string, comment_count?: int, filter?: string} $post {
	 *     @type int        $ID
	 *     @type int|string $post_author
	 *     @type string     $post_date
	 *     @type string     $post_date_gmt
	 *     @type string     $post_content
	 *     @type string     $post_title
	 *     @type string     $post_excerpt
	 *     @type string     $post_status
	 *     @type string     $comment_status
	 *     @type string     $ping_status
	 *     @type string     $post_password
	 *     @type string     $post_name
	 *     @type string     $to_ping
	 *     @type string     $pinged
	 *     @type string     $post_modified
	 *     @type string     $post_modified_gmt
	 *     @type string     $post_content_filtered
	 *     @type int        $post_parent
	 *     @type string     $guid
	 *     @type int        $menu_order
	 *     @type string     $post_type
	 *     @type string     $post_mime_type
	 *     @type string     $comment_count
	 *     @type string     $filter
	 * } Post object.
	 */
	public function __construct( $post ) {}

	/**
	 * @param string $filter Filter.
	 * @return WP_Post|false|object|array<string, string>
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
