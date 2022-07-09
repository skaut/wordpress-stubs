<?php
/**
 * @package wordpress-stubs
 */

/**
 */
class WP_User_Query {
	/**
	 * @param string|null|array{blog_id?: int, role?: string|array<string>, role__in?: array<string>, role__not_in?: array<string>, meta_key?: string|array<string>, meta_value?: string|array<string>, meta_compare?: string, meta_compare_key?: string, meta_type?: string, meta_type_key?: string, meta_query?: array<mixed>, capability?: string, capability__in?: array<string>, capability__not_in?: array<string>, include?: array<int>, exclude?: array<int>, search?: string, search_columns?: array<string>, orderby?: string|array<string>|array<string, string>, order?: string, offset?: int, number?: int, paged?: int, count_total?: bool, fields?: string|array<string>, who?: string, has_published_posts?: bool|array<string>, nicename?: string, nicename__in?: array<string>, nicename__not_in?: array<string>, login?: string, login__in?: array<string>, login__not_in?: array<string>} $query {
	 *     @type int                                        $blog_id
	 *     @type string|array<string>                       $role
	 *     @type array<string>                              $role__in
	 *     @type array<string>                              $role__not_in
	 *     @type string|array<string>                       $meta_key
	 *     @type string|array<string>                       $meta_value
	 *     @type string                                     $meta_compare
	 *     @type string                                     $meta_compare_key
	 *     @type string                                     $meta_type
	 *     @type string                                     $meta_type_key
	 *     @type array<mixed>                               $meta_query
	 *     @type string                                     $capability
	 *     @type array<string>                              $capability__in
	 *     @type array<string>                              $capability__not_in
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
	 *     @type array<string>                              $nicename__in
	 *     @type array<string>                              $nicename__not_in
	 *     @type string                                     $login
	 *     @type array<string>                              $login__in
	 *     @type array<string>                              $login__not_in
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
