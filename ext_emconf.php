<?php

$EM_CONF['backend_module'] = [
    'title' => 'Backend Module',
    'description' => 'A convenience extension for quickly creating TYPO3 backend modules',
    'category' => 'be',
    'author' => 'Christian Fries',
    'author_email' => 'christian.fries@lst.team',
    'state' => 'stable',
    'version' => '2.0.0-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5-10.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'classmap' => ['Classes']
    ],
];
