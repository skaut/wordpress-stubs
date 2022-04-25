<?php
/**
 * @package wordpress-stubs
 */

/**
 */
class WP_User_Query {
	/**
	 * @param string|null|array{blog_id?: int, role?: string|array<string>, role_in?: array<string>, role_not_in?: array<string>, meta_key?: string|array<string>, meta_value?: string|array<string>, meta_compare?: string, meta_compare_key?: string, meta_type?: string, meta_type_key?: string, meta_query?: array<mixed>, capability?: string, capability_in?: array<string>, capability_not_in?: array<string>, include?: array<int>, exclude?: array<int>, search?: string, search_columns?: array<string>, orderby?: string|array<string>|array<string, string>, order?: string, offset?: int, number?: int, paged?: int, count_total?: bool, fields?: string|array<string>, who?: string, has_published_posts?: bool|array<string>, nicename?: string, nicename_in?: array<string>, nicename_not_in?: array<string>, login?: string, login_in?: array<string>, login_not_in?: array<string>} $query {
	 *     @type int                                        $blog_id
	 *     @type string|array<string>                       $role
	 *     @type array<string>                              $role_in
	 *     @type array<string>                              $role_not_in
	 *     @type string|array<string>                       $meta_key
	 *     @type string|array<string>                       $meta_value
	 *     @type string                                     $meta_compare
	 *     @type string                                     $meta_compare_key
	 *     @type string                                     $meta_type
	 *     @type string                                     $meta_type_key
	 *     @type array<mixed>                               $meta_query
	 *     @type string                                     $capability
	 *     @type array<string>                              $capability_in
	 *     @type array<string>                              $capability_not_in
	 *     @type array<int>                                 $include
	 *     @type array<int>                                 $exclude
	 *     @type string                                     $search
	 *     @type array<string>                              $search_columns
	 *     @type string|array<string>|array<string, string> $orderby
	 *     @type string                                     $order
	 *     @type int                                        $offset
	 *     @type int                                        $number
	 *     @type int                                        $paged
	 *     @type bool                                       $count_total
	 *     @type string|array<string>                       $fields
	 *     @type string                                     $who
	 *     @type bool|array<string>                         $has_published_posts
	 *     @type string                                     $nicename
	 *     @type array<string>                              $nicename_in
	 *     @type array<string>                              $nicename_not_in
	 *     @type string                                     $login
	 *     @type array<string>                              $login_in
	 *     @type array<string>                              $login_not_in
	 * }
	 */
	public function __construct( $query = null ) {
	}
	/**
	 * @return array<int|string|stdClass|WP_User>
	 */
	public function get_results() {
	}
}
