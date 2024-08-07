<?php
defined('TYPO3') or die();

$tca = [
    'dc_creator' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.dc_creator',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'dc_description' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.dc_description',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'eval' => 'trim',
            'default' => '',
        ],
    ],
    'dc_identifier' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.dc_identifier',
        'config' => [
            'type' => 'input',
            'size' => 15,
            'eval' => 'trim',
        ],
    ],
    'dc_publisher' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.dc_publisher',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'dc_relation' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.dc_relation',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'dc_title' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.dc_title',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'dc_type' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.dc_type',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'dc_subject' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.dc_subject',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'iptc4xmpcore_country_code' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.iptc4xmpcore_country_code',
        'config' => [
            'type' => 'input',
            'size' => 5,
        ],
    ],
    'iptc4xmpext_location_created_world_region' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.iptc4xmpext_location_created_world_region',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'iptc4xmpext_country_name' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.iptc4xmpext_country_name',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'iptc4xmpext_province_state' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.iptc4xmpext_province_state',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'iptc4xmpext_city' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.iptc4xmpext_city',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'iptc4xmpext_sublocation' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.iptc4xmpext_sublocation',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'photoshop_caption_writer' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.photoshop_caption_writer',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'photoshop_instructions' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.photoshop_instructions',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 10,
            'eval' => 'trim',
            'default' => '',
        ],
    ],
    'photoshop_source' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.photoshop_source',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'xmp_create_date' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmp_create_date',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => time()
        ],
    ],
    'xmp_label' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmp_label',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'xmprights_marked' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmprights_marked',
        'config' => [
            'type' => 'check',
        ],
    ],
    'xmprights_owner' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmprights_owner',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'xmprights_usage_terms' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmprights_usage_terms',
        'config' => [
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
            'eval' => 'trim',
            'default' => '',
        ],
    ],
    'xmprights_web_statement' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmprights_web_statement',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'cc_license' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.cc_license',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'cc_more_permissions' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.cc_more_permissions',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'cc_attribution_url' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.cc_attribution_url',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'cc_attribution_name' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.cc_attribution_name',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'xmpmm_derived_from' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmpmm_derived_from',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'xmpmm_document_id' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmpmm_document_id',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'xmpmm_instance_id' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmpmm_instance_id',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'xmpmm_original_document_id' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmpmm_original_document_id',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'xmpmm_rendition_class' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmpmm_rendition_class',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'xmpmm_rendition_params' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmpmm_rendition_params',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
    'xmpidq_scheme' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmpidq_scheme',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_metadata', $tca);
foreach ($tca as $field => $configuration) {
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'sys_file_metadata',
    $field
);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'sys_file_metadata',
    'EXT:xmp/Resources/Private/Language/locallang_csh_sys_file_metadata.xlf'
);
