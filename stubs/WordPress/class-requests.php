<?php
/**
 * @package wordpress-stubs
 */

/**
 */
class Requests {

	/**
	 * @param array<int|string, array{url: string, headers?: array<string, string>, data?: array<int|string, string>|string, type?: string, cookies?: array<string, string>|Requests_Cookie_Jar}>                                                                                                                                                                                                                                                     $requests
	 * @param array{timeout?: float, connect_timeout?: float, useragent?: string, follow_redirects?: bool, redirects?: int, blocking?: bool, filename?: string|bool, auth?: Requests_Auth|array<string>|bool, proxy?: Requests_Proxy|array<string>|string|bool, max_bytes?: int|bool, idn?: bool, transport?: string|Requests_Transport, hooks?: Requests_Hooker, verify?: string|bool, verifyname?: bool, data_format?: string, complete?: callable} $options {
	 *     @type float                                    $timeout
	 *     @type float                                    $connect_timeout
	 *     @type string                                   $useragent
	 *     @type bool                                     $follow_redirects
	 *     @type int                                      $redirects
	 *     @type bool                                     $blocking
	 *     @type string|bool                              $filename
	 *     @type Requests_Auth|array<string>|bool         $auth
	 *     @type Requests_Proxy|array<string>|string|bool $proxy
	 *     @type int|bool                                 $max_bytes
	 *     @type bool                                     $idn
	 *     @type string|Requests_Transport                $transport
	 *     @type Requests_Hooker                          $hooks
	 *     @type string|bool                              $verify
	 *     @type bool                                     $verifyname
	 *     @type string                                   $data_format
	 *     @type callable                                 $complete
	 * }
	 *
	 * @return array<Requests_Response|Requests_Exception>
	 */
	public static function request_multiple( $requests, $options = array() ) {
	}
}
