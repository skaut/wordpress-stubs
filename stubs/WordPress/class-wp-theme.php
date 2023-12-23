<?php
/**
 * @package wordpress-stubs
 */

/**
 * @implements ArrayAccess<mixed, mixed>
 */
class WP_Theme implements ArrayAccess {

	/**
	 * @var string
	 */
	public $version;

	/**
	 * @param mixed $offset
	 *
	 * @return bool
	 */
	#[ReturnTypeWillChange]
	public function offsetExists( $offset ) {
	}

	/**
	 * @param mixed $offset
	 *
	 * @return mixed
	 */
	#[ReturnTypeWillChange]
	public function offsetGet( $offset ) {
	}

	/**
	 * @param mixed $offset
	 * @param mixed $value
	 *
	 * @return void
	 */
	#[ReturnTypeWillChange]
	public function offsetSet( $offset, $value ) {
	}

	/**
	 * @param mixed $offset
	 *
	 * @return void
	 */
	#[ReturnTypeWillChange]
	public function offsetUnset( $offset ) {
	}
}
