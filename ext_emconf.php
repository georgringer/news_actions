<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'News split actions',
    'description' => 'PoC for removing switchablecontroller',
    'category' => 'be',
    'author' => 'Georg Ringer',
    'author_email' => 'mail@ringer.it',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'news' => '7.0.0-8.9.99',
            'typo3' => '9.5.9-10.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
