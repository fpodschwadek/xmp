<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$tca = [
    'dc_title' => [
        'l10n_mode' => 'prefixLangTitle',
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:dc_title',
        'config' => [
            'type' => 'input',
            'size' => 20,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|dc_title',
            'mode' => 'useOrOverridePlaceholder',
            'default' => null,
        ],
    ],
    'dc_description' => [
        'l10n_mode' => 'prefixLangTitle',
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:dc_description',
        'config' => [
            'type' => 'input',
            'size' => 20,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|dc_description',
            'mode' => 'useOrOverridePlaceholder',
            'default' => null,
        ],
    ],
    'cc_license' => [
        'l10n_mode' => 'prefixLangTitle',
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:cc_license',
        'config' => [
            'type' => 'input',
            'size' => 20,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|cc_license',
            'mode' => 'useOrOverridePlaceholder',
            'default' => null,
        ],
    ],
    'cc_attribution_url' => [
        'l10n_mode' => 'prefixLangTitle',
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:cc_attribution_url',
        'config' => [
            'type' => 'input',
            'size' => 20,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|cc_attribution_url',
            'mode' => 'useOrOverridePlaceholder',
            'default' => null,
        ],
    ],
    'cc_attribution_name' => [
        'l10n_mode' => 'prefixLangTitle',
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:cc_attribution_name',
        'config' => [
            'type' => 'input',
            'size' => 20,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|dc_description',
            'mode' => 'useOrOverridePlaceholder',
            'default' => null,
        ],
    ],
    'xmprights_usage_terms' => [
        'l10n_mode' => 'prefixLangTitle',
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:xmprights_usage_terms',
        'config' => [
            'type' => 'input',
            'size' => 20,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|xmprights_usage_terms',
            'mode' => 'useOrOverridePlaceholder',
            'default' => null,
        ],
    ],
    'xmprights_web_statement' => [
        'l10n_mode' => 'prefixLangTitle',
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:xmprights_web_statement',
        'config' => [
            'type' => 'input',
            'size' => 20,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|xmprights_web_statement',
            'mode' => 'useOrOverridePlaceholder',
            'default' => null,
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_reference', $tca);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'sys_file_reference',
    'xmpPalette',
    'title,alternative,--linebreak--,link,description,--linebreak--,dc_title,dc_description,cc_license,cc_attribution_url,cc_attribution_name,xmprights_usage_terms,xmprights_web_statement,--linebreak--,crop'
);

$GLOBALS['TCA']['sys_file_reference']['palettes']['xmpPalette']['label'] = 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_reference.xmpPalette';
