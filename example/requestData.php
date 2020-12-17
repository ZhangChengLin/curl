<?php

// Available in Composer package
$ComposerVendorDir = dirname(dirname(dirname(__DIR__)));
require_once $ComposerVendorDir . '/autoload.php';

$RequestURL = 'https://example.org';
$SendData = [
    'test' => '$test',
];
