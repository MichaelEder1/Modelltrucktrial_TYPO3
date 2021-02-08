<?php

/**
 * Extension Manager/Repository config file for ext "projekt20".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'projekt20',
    'description' => 'KWM Projekt 2020 CMS',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.2.0-10.4.99',
            'fluid_styled_content' => '10.2.0-10.4.99',
            'rte_ckeditor' => '10.2.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'UniversityOfAppliedScienceUpperAustria\\Projekt20\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Michael Eder',
    'author_email' => 'S1910456008@students.fh-hagenberg.at',
    'author_company' => 'University of Applied Science Upper Austria',
    'version' => '1.0.0',
];
