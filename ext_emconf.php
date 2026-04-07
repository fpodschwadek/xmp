<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'XMP Metadata',
    'description' => 'Provides XMP metadata fields (ISO standard) for FAL',
    'category' => 'backend',
    'author' => 'Torsten Schrade',
    'author_email' => 'Torsten.Schrade@adwmainz.de',
    'author_company' => 'Academy of Sciences and Literature | Mainz',
    'state' => 'beta',
    'version' => '0.1.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '12.4.0-12.4.99',
            'filemetadata' => '',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
];
