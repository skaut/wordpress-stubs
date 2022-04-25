<?php
/**
 * @package wordpress-stubs
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
	 * @param string|array{attachment_id?: int, author?: int|string, author_name?: string, author_in?: array<int>, author_not_in?: array<int>, cache_results?: bool, cat?: int|string, category_and?: array<int>, category_in?: array<int>, category_not_in?: array<int>, category_name?: string, comment_count?: int|array{value: int, compare: string}, comment_status?: string, comments_per_page?: int, date_query?: array<mixed>, day?: int, exact?: bool, fields?: string, hour?: int, ignore_sticky_posts?: int|bool, m?: int, meta_key?: string|array<string>, meta_value?: string|array<string>, meta_compare?: string, meta_compare_key?: string, meta_type?: string, meta_type_key?: string, meta_query?: array<mixed>, menu_order?: int, minute?: int, monthnum?: int, name?: string, nopaging?: bool, no_found_rows?: bool, offset?: int, order?: string, orderby?: string|array<string, string>, p?: int, page?: int, paged?: int, page_id?: int, pagename?: string, perm?: string, ping_status?: string, post_in?: array<int>, post_not_in?: array<int>, post_mime_type?: string, post_name_in?: array<string>, post_parent?: int, post_parent_in?: array<int>, post_parent_not_in?: array<int>, post_type?: string|array<string>, post_status?: string|array<string>, posts_per_page?: int, posts_per_archive_page?: int, s?: string, second?: int, sentence?: bool, suppress_filters?: bool, tag?: string, tag_and?: array<int>, tag_in?: array<int>, tag_not_in?: array<int>, tag_id?: int, tag_slug_and?: array<string>, tag_slug_in?: array<string>, tax_query?: array<mixed>, title?: string, update_post_meta_cache?: bool, update_post_term_cache?: bool, lazy_load_term_meta?: bool, w?: int, year?: int} $query {
	 *     @type int                                    $attachment_id
	 *     @type int|string                             $author
	 *     @type string                                 $author_name
	 *     @type array<int>                             $author_in
	 *     @type array<int>                             $author_not_in
	 *     @type bool                                   $cache_results
	 *     @type int|string                             $cat
	 *     @type array<int>                             $category_and
	 *     @type array<int>                             $category_in
	 *     @type array<int>                             $category_not_in
	 *     @type string                                 $category_name
	 *     @type int|array{value: int, compare: string} $comment_count
	 *     @type string                                 $comment_status
	 *     @type int                                    $comments_per_page
	 *     @type array<mixed>                           $date_query
	 *     @type int                                    $day
	 *     @type bool                                   $exact
	 *     @type string                                 $fields
	 *     @type int                                    $hour
	 *     @type int|bool                               $ignore_sticky_posts
	 *     @type int                                    $m
	 *     @type string|array<string>                   $meta_key
	 *     @type string|array<string>                   $meta_value
	 *     @type string                                 $meta_compare
	 *     @type string                                 $meta_compare_key
	 *     @type string                                 $meta_type
	 *     @type string                                 $meta_type_key
	 *     @type array<mixed>                           $meta_query
	 *     @type int                                    $menu_order
	 *     @type int                                    $minute
	 *     @type int                                    $monthnum
	 *     @type string                                 $name
	 *     @type bool                                   $nopaging
	 *     @type bool                                   $no_found_rows
	 *     @type int                                    $offset
	 *     @type string                                 $order
	 *     @type string|array<string, string>           $orderby
	 *     @type int                                    $p
	 *     @type int                                    $page
	 *     @type int                                    $paged
	 *     @type int                                    $page_id
	 *     @type string                                 $pagename
	 *     @type string                                 $perm
	 *     @type string                                 $ping_status
	 *     @type array<int>                             $post_in
	 *     @type array<int>                             $post_not_in
	 *     @type string                                 $post_mime_type
	 *     @type array<string>                          $post_name_in
	 *     @type int                                    $post_parent
	 *     @type array<int>                             $post_parent_in
	 *     @type array<int>                             $post_parent_not_in
	 *     @type string|array<string>                   $post_type
	 *     @type string|array<string>                   $post_status
	 *     @type int                                    $posts_per_page
	 *     @type int                                    $posts_per_archive_page
	 *     @type string                                 $s
	 *     @type int                                    $second
	 *     @type bool                                   $sentence
	 *     @type bool                                   $suppress_filters
	 *     @type string                                 $tag
	 *     @type array<int>                             $tag_and
	 *     @type array<int>                             $tag_in
	 *     @type array<int>                             $tag_not_in
	 *     @type int                                    $tag_id
	 *     @type array<string>                          $tag_slug_and
	 *     @type array<string>                          $tag_slug_in
	 *     @type array<mixed>                           $tax_query
	 *     @type string                                 $title
	 *     @type bool                                   $update_post_meta_cache
	 *     @type bool                                   $update_post_term_cache
	 *     @type bool                                   $lazy_load_term_meta
	 *     @type int                                    $w
	 *     @type int                                    $year
	 * }
	 */
	public function __construct( $query = '' ) {
	}

	/**
	 * @param string $query_var
	 * @param mixed  $default
	 *
	 * @return mixed
	 */
	public function get( $query_var, $default = '' ) {
	}

	/**
	 * @return bool
	 */
	public function have_posts() {
	}
}
