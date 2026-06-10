<?php

if (!defined('TYPO3')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'TgmCopyright',
	'Main',
	[
		\TGM\TgmCopyright\Controller\CopyrightController::class => 'list',
    ],
    [],
    'CType'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'TgmCopyright',
	'Sitemap',
	[
		\TGM\TgmCopyright\Controller\CopyrightController::class => 'sitemap',
    ],
	[
		\TGM\TgmCopyright\Controller\CopyrightController::class => 'sitemap',
    ],
    'CType'
);

// Icon registration lives in Configuration/Icons.php. Instantiating the
// IconRegistry inside ext_localconf.php is forbidden as of TYPO3 v14.