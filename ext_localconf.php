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