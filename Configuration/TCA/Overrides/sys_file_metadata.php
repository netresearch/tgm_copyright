<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die('Access denied.');

(static function (): void {
    $copyrightColumn = [
        'copyright' => [
            'exclude' => 1,
            'label' => 'Copyright',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
            ],
        ],
    ];

    ExtensionManagementUtility::addTCAcolumns('sys_file_metadata', $copyrightColumn);
    ExtensionManagementUtility::addFieldsToPalette('sys_file_metadata', '', 'copyright', 'after:title');
})();
