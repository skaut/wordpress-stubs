<?php
/**
 * @package phan-wordpress-stubs
 */

/**
 */
class WP_Http {
	/**
	 * @param string|string[] $headers
	 * @param string          $url
	 *
	 * @return array {
	 *     @type array $response {
	 *         @type int    $code
	 *         @type string $message
	 *     }
	 *     @type string|string[]  $newheaders
	 *     @type WP_Http_Cookie[] $cookies
	 * }
	 */
	public static function processHeaders( $headers, $url = '' ) {
	}

	/**
	 * @param string $strResponse
	 *
	 * @return array {
	 *     @type string $headers
	 *     @type string $body
	 * }
	 */
	public static function processResponse( $strResponse ) {
	}
}
