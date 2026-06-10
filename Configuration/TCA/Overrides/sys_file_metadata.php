<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$temp_metacolumns = [
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

ExtensionManagementUtility::addTCAcolumns('sys_file_metadata', $temp_metacolumns);
ExtensionManagementUtility::addFieldsToPalette('sys_file_metadata', '', 'copyright', 'after:title');
