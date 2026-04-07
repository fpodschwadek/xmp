<?php
defined('TYPO3') or die();

$tca = [
    'dc_creator' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.dc_creator',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'dc_description' => [
        'exclude' => true,
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
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.dc_identifier',
        'config' => [
            'type' => 'input',
            'size' => 15,
        ],
    ],
    'dc_publisher' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.dc_publisher',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'dc_relation' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.dc_relation',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'dc_title' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.dc_title',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'dc_type' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.dc_type',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'dc_subject' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.dc_subject',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'iptc4xmpcore_country_code' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.iptc4xmpcore_country_code',
        'config' => [
            'type' => 'input',
            'size' => 5,
        ],
    ],
    'iptc4xmpext_location_created_world_region' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.iptc4xmpext_location_created_world_region',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'iptc4xmpext_country_name' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.iptc4xmpext_country_name',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'iptc4xmpext_province_state' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.iptc4xmpext_province_state',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'iptc4xmpext_city' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.iptc4xmpext_city',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'iptc4xmpext_sublocation' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.iptc4xmpext_sublocation',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'photoshop_caption_writer' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.photoshop_caption_writer',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'photoshop_instructions' => [
        'exclude' => true,
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
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.photoshop_source',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'xmp_create_date' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmp_create_date',
        'config' => [
            'type' => 'input',
            'renderType' => 'datetime',
            'format' => 'date',
            'eval' => 'date,int',
            'default' => null
        ],
    ],
    'xmp_label' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmp_label',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'xmprights_marked' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmprights_marked',
        'config' => [
            'type' => 'check',
        ],
    ],
    'xmprights_owner' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmprights_owner',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'xmprights_usage_terms' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmprights_usage_terms',
        'config' => [
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
            'default' => '',
        ],
    ],
    'xmprights_web_statement' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmprights_web_statement',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'cc_license' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.cc_license',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'cc_more_permissions' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.cc_more_permissions',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'cc_attribution_url' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.cc_attribution_url',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'cc_attribution_name' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.cc_attribution_name',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'xmpmm_derived_from' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmpmm_derived_from',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'xmpmm_document_id' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmpmm_document_id',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'xmpmm_instance_id' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmpmm_instance_id',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'xmpmm_original_document_id' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmpmm_original_document_id',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'xmpmm_rendition_class' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmpmm_rendition_class',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'xmpmm_rendition_params' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmpmm_rendition_params',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ],
    ],
    'xmpidq_scheme' => [
        'exclude' => true,
        'label' => 'LLL:EXT:xmp/Resources/Private/Language/locallang_db.xlf:sys_file_metadata.xmpidq_scheme',
        'config' => [
            'type' => 'input',
            'size' => 30,
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
