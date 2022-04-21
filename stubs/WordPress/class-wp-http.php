<?php
/**
 * @package phan-wordpress-stubs
 */

/**
 */
class WP_Http {
	/**
	 * @param string                                                                                                                                                                                                                                                                                                                                                                                                            $url
	 * @param string|array{method?: string, timeout?: int, redirection?: int, httpversion?: string, user-agent?: string, reject_unsafe_urls?: bool, blocking?: bool, headers?: string|array<string, string>, cookies?: array<string, string>, body?: string|array<string, string>, compress?: bool, decompress?: bool, sslverify?: bool, sslcertificates?: string, stream?: bool, filename?: string, limit_response_size?: int} $args {
	 *     @type string                       $method
	 *     @type int                          $timeout
	 *     @type int                          $redirection
	 *     @type string                       $httpversion
	 *     @type string                       $user-agent
	 *     @type bool                         $reject_unsafe_urls
	 *     @type bool                         $blocking
	 *     @type string|array<string, string> $headers
	 *     @type array<string, string>        $cookies
	 *     @type string|array<string, string> $body
	 *     @type bool                         $compress
	 *     @type bool                         $decompress
	 *     @type bool                         $sslverify
	 *     @type string                       $sslcertificates
	 *     @type bool                         $stream
	 *     @type string                       $filename
	 *     @type int                          $limit_response_size
	 * }
	 *
	 * @return WP_Error|array {
	 *     @type Requests_Utility_CaseInsensitiveDictionary $headers
	 *     @type string                                     $body
	 *     @type array                                      $response {
	 *         @type int    $code
	 *         @type string $message
	 *     }
	 *     @type WP_HTTP_Cookie[]          $cookies
	 *     @type string|null               $filename
	 *     @type WP_HTTP_Requests_Response $http_response
	 * }
	 */
	public function get( $url, $args = array() ) {
	}
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

	/**
	 * @param string       $url
	 * @param string|array $args {
	 *     @type string       $method
	 *     @type int          $timeout
	 *     @type int          $redirection
	 *     @type string       $httpversion
	 *     @type string       $user-agent
	 *     @type bool         $reject_unsafe_urls
	 *     @type bool         $blocking
	 *     @type string|array $headers
	 *     @type array        $cookies
	 *     @type string|array $body
	 *     @type bool         $compress
	 *     @type bool         $decompress
	 *     @type bool         $sslverify
	 *     @type string       $sslcertificates
	 *     @type bool         $stream
	 *     @type string       $filename
	 *     @type int          $limit_response_size
	 * }
	 *
	 * @return WP_Error|array {
	 *     @type Requests_Utility_CaseInsensitiveDictionary $headers
	 *     @type string                                     $body
	 *     @type array                                      $response {
	 *         @type int    $code
	 *         @type string $message
	 *     }
	 *     @type WP_HTTP_Cookie[]          $cookies
	 *     @type string|null               $filename
	 *     @type WP_HTTP_Requests_Response $http_response
	 * }
	 */
	public function request( $url, $args = array() ) {
	}
}
