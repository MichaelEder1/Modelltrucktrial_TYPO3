<?php

/**
 * Extension Manager/Repository config file for ext "kwm2020".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'KWM2020',
    'description' => '',
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
            'UniversityOfAppliedScienceUpperAustria\\Kwm2020\\' => 'Classes',
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
