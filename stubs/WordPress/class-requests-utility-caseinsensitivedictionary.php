<?php
/**
 * @package wordpress-stubs
 */

/**
 * @implements ArrayAccess<string, string>
 * @implements IteratorAggregate<string, string>
 */
class Requests_Utility_CaseInsensitiveDictionary implements ArrayAccess, IteratorAggregate {

	/**
	 * @param string $key
	 *
	 * @return bool
	 */
	#[\ReturnTypeWillChange]
	public function offsetExists( $key ) {
	}

	/**
	 * @param string $key
	 *
	 * @return string|null
	 */
	#[\ReturnTypeWillChange]
	public function offsetGet( $key ) {
	}

	/**
	 * @param string $key
	 * @param string $value
	 *
	 * @return void
	 */
	#[\ReturnTypeWillChange]
	public function offsetSet( $key, $value ) {
	}

	/**
	 * @param string $key
	 *
	 * @return void
	 */
	#[\ReturnTypeWillChange]
	public function offsetUnset( $key ) {
	}

	/**
	 * @return ArrayIterator<string, string>
	 */
	#[\ReturnTypeWillChange]
	public function getIterator() {
	}
}
