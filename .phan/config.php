<?php
/**
 * PHAN configuration
 *
 * @package wordpress-stubs
 */

return array(
	'target_php_version'                        => '7.3',
	'backward_compatibility_checks'             => false, // Covered by PHPCS.
	'warn_about_redundant_use_namespaced_class' => true,
	'directory_list'                            => array(
		'stubs',
		'.phan',
	),
	'suppress_issue_types'                      => array(
		'PhanTypeMissingReturn',
	),
	'plugins'                                   => array(
		'PreferNamespaceUsePlugin',
		'SuspiciousParamOrderPlugin',
		'UnusedSuppressionPlugin',
	),
);
