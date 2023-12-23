<?php
/**
 * PHAN configuration
 *
 * @package wordpress-stubs
 */

declare(strict_types = 1);

return array(
	// Covered by PHPCS.
	'backward_compatibility_checks'             => false,
	'directory_list'                            => array(
		'stubs',
		'.phan',
	),
	'plugins'                                   => array(
		'PreferNamespaceUsePlugin',
		'SuspiciousParamOrderPlugin',
		'UnusedSuppressionPlugin',
	),
	'suppress_issue_types'                      => array(
		'PhanTypeMissingReturn',
	),
	'target_php_version'                        => '7.3',
	'warn_about_redundant_use_namespaced_class' => true,
);
