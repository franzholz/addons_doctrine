<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Addons to Doctrine / DoctrineExtensions',
    'description' => 'This brings DoctrineExtensions to TYPO3.',
    'category' => 'misc',
    'state' => 'alpha',
    'author' => 'DoctrineExtensions developers, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
