<?php
/**
 * PHAN configuration
 *
 * @package phan-wordpress-stubs
 */

return [
	'target_php_version'                        => '7.3',
	'backward_compatibility_checks'             => false, // Covered by PHPCS.
	'warn_about_redundant_use_namespaced_class' => true,
	'directory_list'                            => [
		'stubs',
		'.phan',
	],
	'suppress_issue_types'                      => [
		'PhanTypeMissingReturn'
	],
	'plugins'                                   => [
		'PreferNamespaceUsePlugin',
		'SuspiciousParamOrderPlugin',
		'UnusedSuppressionPlugin',
	],
];
