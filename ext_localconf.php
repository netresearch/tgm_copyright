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

/** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
$iconRegistry =
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon('tgmcopyright-icon',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:tgm_copyright/Resources/Public/Icons/Extension.svg']
);