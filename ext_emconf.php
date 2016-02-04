<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Bootstrap Package Gabarits',
    'description' => 'Extends bootstrap_package for templates',
    'category' => 'templates',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.13-7.99.99',
            'bootstrap_package' => '6.2.12-7.99.99',
        ),
        'conflicts' => array(),
    ),
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Yann Bogdanovic',
    'author_email' => 'ianbogda@gmail.com',
    'author_company' => 'private',
    'version' => '6.2.15',
);
?>
