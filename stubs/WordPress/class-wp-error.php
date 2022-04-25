<?php
/**
 * @package wordpress-stubs
 */

/**
 */
class WP_Error {
	/**
	 * @var array<string|int, string>
	 */
	public $errors;

	/**
	 * @param string|int $code
	 *
	 * @return string
	 */
	public function get_error_message( $code = '' ) {
	}
}
