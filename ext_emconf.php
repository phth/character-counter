<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Character counter',
    'description' => 'Show a character counter below text fields',
    'category' => 'backend',
    'author' => 'Thorben Nissen',
    'author_email' => 'thorben@webcoast.dk',
    'author_company' => 'WEBcoast',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '11.5.12-11.5.99'
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
);
