<?php
/**
 * @package wordpress-stubs
 */

declare(strict_types = 1);

final class WP_Screen {

	/**
	 * @var string
	 */
	public $id;

	/**
	 * @var bool
	 */
	public $is_block_editor = false;

	/**
	 * @param bool|null $set
	 *
	 * @return bool
	 */
	public function is_block_editor( $set = null ) {}
}
