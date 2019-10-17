<?php
/**
 * @package phan-wordpress-stubs
 */

/**
 */
class Requests {
	/**
	 * @param array $requests
	 * @param array $options {
	 *     @type float                            $timeout
	 *     @type float                            $connect_timeout
	 *     @type string                           $useragent
	 *     @type bool                             $follow_redirects
	 *     @type int                              $redirects
	 *     @type bool                             $blocking
	 *     @type string|bool                      $filename
	 *     @type Requests_Auth|array|bool         $auth
	 *     @type Requests_Proxy|array|string|bool $proxy
	 *     @type int|bool                         $max_bytes
	 *     @type bool                             $idn
	 *     @type string|Requests_Transport        $transport
	 *     @type Requests_Hooker                  $hooks
	 *     @type string|bool                      $verify
	 *     @type bool                             $verifyname
	 *     @type string                           $data_format
	 * }
	 *
	 * @return Requests_Response[]|Requests_Exception[]
	 */
	public static function request_multiple( $requests, $options = [] ) {
	}
}
